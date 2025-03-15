# XAMPP Localhost Project Navigator

## Introduction

Welcome to the **XAMPP Localhost Project Navigator**! This tool helps you easily navigate through your XAMPP `htdocs` directory, providing you with a clean overview of all your projects. It also allows you to view key details about each project, including size and last modified date.

### Key Features:
- **Project Navigation**: View and access all projects under your `htdocs` directory.
- **Cleaned-up View**: Automatically removes unnecessary files and displays only the important directories.
- **Details Overview**: Displays essential project details like size and last modified time.

## Prerequisites

Before you start, ensure you have the following installed:
- **XAMPP**: XAMPP is an open-source cross-platform web server solution stack package that contains Apache, MySQL, and PHP.
  - Download XAMPP from: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)
  
## Setup Guide

### 1. **Installing XAMPP**

If you haven’t already installed XAMPP:
1. Go to the [XAMPP website](https://www.apachefriends.org/index.html) and download the installer for your operating system (Windows, Linux, or macOS).
2. Run the installer and follow the installation instructions.
3. Or any


### 2. **Navigating to `htdocs` Directory**

Once XAMPP is installed:
1. Open the XAMPP Control Panel and start Apache server.
2. Navigate to the `htdocs` directory located in the XAMPP installation folder. For example:
   - **Windows**: `C:\xampp\htdocs\`
   - **macOS/Linux**: `/Applications/XAMPP/htdocs/` or `/opt/lampp/htdocs/`
   
   This directory contains all your web projects.

### 3. **Using the XAMPP Project Navigator**

- Upload or place your PHP project folder(s) inside the `htdocs` directory.
- Open the provided PHP script, which automatically lists all directories in the current `htdocs` folder.
  
You can now visit each project in your browser by clicking on its name or arrow button in the web interface.

#### Example:
- Navigate to: `http://localhost/project-name/`
  
Where `project-name` is the directory you wish to access from `htdocs`.

### 4. **Cleaning Up Files Under `htdocs` Directory**

To keep things neat and organized:
- The tool will display **only directories** in your `htdocs` folder.
- Any unnecessary or unwanted files (like system files) are automatically excluded.
- The tool also provides a summary of project details, such as:
  - **Directory Name**
  - **Last Modified Date**
 - **Directory Size**

---

## Features Breakdown

### Project Name:
Each project folder under `htdocs` is listed with its **directory name**. You can click on any project name to access it through the browser.

### Last Modified Date:
The tool will show the **last modified date** of the project directory. This allows you to quickly see when the directory was last updated.

### Directory Size:
You will also see the **size** of each project directory (in KB), helping you keep track of your project’s disk usage.

### Arrow Button:
The **arrow button** next to each project folder allows you to navigate directly to the respective project in your browser.

### Directory Cleanup:
The script ensures that only valid directories are shown, and it excludes any non-project-related files.

---


## How It Works

- The script scans your `htdocs` directory and lists all the subdirectories (projects).
- It automatically removes irrelevant files such as system files (e.g., `.git`, `.DS_Store`).
- It displays each project with key details, such as last modified date and size, alongside a link that navigates to the project.

---

## Troubleshooting

### 1. **Directory Not Showing**
   - Ensure the directory is placed correctly inside the `htdocs` folder.
   - Check that the directory has proper read permissions.

### 2. **Permissions Issue**
   - If you are unable to access some directories, make sure your user has appropriate permissions to read the files inside `htdocs`.

### 3. **Page Not Loading**
   - Ensure Apache is running in the XAMPP Control Panel.
   - Verify the directory path in the browser (e.g., `http://localhost/project-name`).

---


## Conclusion

With **XAMPP Localhost Project Navigator**, navigating and managing your projects in the `htdocs` directory becomes easier and more efficient. This tool helps you keep your development environment organized, ensuring that you can focus on building great projects without worrying about clutter.

Happy Coding! 🎉
