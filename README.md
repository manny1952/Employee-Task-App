# Employee Task App - PHP Version

## Setup Instructions for Visual Studio

### Prerequisites
You need a local PHP server to run this application. The easiest option is **XAMPP**.

### Step 1: Download and Install XAMPP
1. Go to https://www.apachefriends.org/
2. Download XAMPP for your operating system
3. Install XAMPP (keep default settings)

### Step 2: Setup Your Project
1. After installing XAMPP, find the `htdocs` folder:
   - Windows: `C:\xampp\htdocs\`
   - Mac: `/Applications/XAMPP/htdocs/`
   
2. Create a new folder called `employee-task-app` inside `htdocs`

3. Copy all these project files into that folder:
   - login.php
   - dashboard.php
   - logout.php
   - styles.css
   - dashboard-styles.css
   - users.json

### Step 3: Start XAMPP
1. Open XAMPP Control Panel
2. Click "Start" next to Apache (you don't need MySQL yet)
3. Wait until Apache shows "Running" (green)

### Step 4: Access Your Application
1. Open your web browser
2. Go to: `http://localhost/employee-task-app/login.php`
3. You should see your login page!

### Step 5: Open in Visual Studio
1. Open Visual Studio
2. File > Open Folder
3. Navigate to `C:\xampp\htdocs\employee-task-app\` (or Mac equivalent)
4. Now you can edit your files in Visual Studio
5. After saving changes, just refresh your browser to see updates

## Test Credentials
- Username: `admin` | Password: `admin123`
- Username: `john` | Password: `password`
- Username: `jane` | Password: `password`

## Project Structure
```
employee-task-app/
├── login.php              # Login page with form
├── dashboard.php          # Dashboard after login
├── logout.php             # Logout script
├── styles.css             # Login page styling
├── dashboard-styles.css   # Dashboard styling
└── users.json             # User credentials database
```

## How It Works
1. User enters username and password on login.php
2. PHP validates credentials against users.json
3. If valid, creates a session and redirects to dashboard.php
4. Dashboard displays user info from session
5. Logout button clears session and returns to login

## Next Steps
- Add task management features to the dashboard
- Create a database for users and tasks
- Add task creation, editing, and deletion functionality
