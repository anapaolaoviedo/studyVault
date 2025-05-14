# 📚 StudyVault

Welcome to **StudyVault**, my personal full-stack app to track everything I study — built from scratch using **PHP**, **MySQL**, and **Tailwind CSS**.

This project started as a localhost experiment and turned into a fully functional study log system that helps me organize my academic sessions like a digital vault. 🔐✨

---

## 🧠 Features

- 📝 Log study sessions with topic, subtopic, date, duration, and notes
- 📊 View full study history in a clean, aesthetic interface
- ✅ Confirmation page when a session is saved
- 🌸 Styled using Tailwind for a soft, cute, minimalist vibe
- 🔒 Localhost version running on MAMP with custom MySQL port

---

## 🌈 Technologies Used

- **HTML5**
- **PHP** (backend logic)
- **MySQL** (local DB, port 8889 via MAMP)
- **Tailwind CSS** (styling)
- **MAMP** (localhost server environment)

---

## 📂 File Structure
studyvault/
├── add.html             # Form to log study sessions
├── save_session.php     # Backend logic to insert into DB
├── view.php             # Table view of all study history
└── schema.sql           # Optional: DB creation script

---

## 📦 How to Run Locally

1. Clone this repo into your MAMP `htdocs` folder:
   ```bash
   git clone https://github.com/anapaolaoviedo/studyVault.git

   	2.	Start your MAMP servers (Apache + MySQL)
	3.	Open MySQL via terminal (for MAMP users):
   /Applications/MAMP/Library/bin/mysql80/bin/mysql -u root -p -P8889

   Visit the app in your browser:
   http://localhost:8888/studyvault/add.html

   ☁️ Future Features
	•	Login system for personal access
	•	Filtering logs by date or topic
	•	Graphs of weekly study time
	•	Export data to CSV
	•	Dark mode toggle

   🧁 Built with love by Ana Paola

Because learning should be as beautiful as it is powerful 💻🌸🧠
