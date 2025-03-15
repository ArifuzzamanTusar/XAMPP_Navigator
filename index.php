<?php
// Get the current directory
$currentDir = __DIR__;
$directories = array_filter(glob($currentDir . '/*'), 'is_dir'); // Get only directories

// Function to get the total size of a directory
function getDirectorySize($dir)
{
    $size = 0;
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir),
        RecursiveIteratorIterator::LEAVES_ONLY
    );
    foreach ($files as $file) {
        $size += $file->getSize();
    }
    return $size;
}

// Get the relative path of the directory
function getRelativePath($dir, $baseDir) {
    return str_replace($baseDir, '', $dir);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directories List</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 font-sans text-gray-800">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-semibold mb-6 text-center text-indigo-600">All PROJECTS</h1>

        <div class="space-y-4">
            <?php if (count($directories) > 0): ?>
                <ul class="space-y-2">
                    <?php
                    // Get the base directory path (parent directory)
                    $baseDir = rtrim(__DIR__, DIRECTORY_SEPARATOR);
                    ?>
                    <?php foreach ($directories as $dir): ?>
                        <?php
                        $dirName = basename($dir);
                        $lastModified = date("F d Y H:i:s", filemtime($dir)); // Last modified time
                        $size = getDirectorySize($dir); // Total size of directory in bytes
                        $dirId = 'dir-' . md5($dir); // Unique ID for each directory
                        $relativePath = getRelativePath($dir, $baseDir); // Get the relative path
                        ?>
                        <li class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                            <div class="grid grid-cols-[1fr_auto] items-center">
                                <!-- Directory Name and Details -->
                                <div id="<?= $dirId ?>" class="text-sm text-gray-500 ml-5">
                                    <strong><p class="text-lg text-orange-600 uppercase"><?= $dirName ?></p></strong>
                                    <p><strong>Last Modified:</strong> <?= $lastModified ?> - <strong>Size:</strong> <?= number_format($size / 1024, 2) ?> KB</p>
                                </div>

                                <!-- Directory Link (Arrow Button) -->
                                <a href="<?= $relativePath ?>" class="inline-flex items-center justify-center w-12 h-12 bg-blue-600 text-white rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7-7 7M5 12h13"></path>
                                    </svg>
                                </a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p class="text-gray-500">No directories found in the current folder.</p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>
