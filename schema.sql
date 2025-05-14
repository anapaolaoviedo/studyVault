CREATE DATABASE studyvault;

USE studyvault;

CREATE TABLE study_sessions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  topic VARCHAR(100) NOT NULL,
  subtopic VARCHAR(100),
  study_date DATE NOT NULL,
  duration_minutes INT,
  notes TEXT
);