Sofian Rizki Nugraha - A2.2000107
Muhammad Rifqi Mubarok Attarmidzi - A2.2000078
indra anugrah rukmana a2.2000052
for db

CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task_name VARCHAR(255) NOT NULL,
    description TEXT,
    due_date DATE
);
