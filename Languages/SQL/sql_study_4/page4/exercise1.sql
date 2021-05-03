-- Tambahkan data baru ke tabel students, dimana nilai name adalah Katy dan nilai course-nya adalah HTML
INSERT INTO students(name, course)
VALUES("Katy", "HTML");

-- Di dalam tabel students, perbarui kolom name menjadi Juliet dan kolom course-nya menjadi Ruby, untuk data yang ber id 6
UPDATE students
SET name="Juliet", course="Ruby"
WHERE id=6;

-- Di dalam tabel students, hapus data yang ber id 2
DELETE FROM students
WHERE id=2;

-- Jangan hapus kueri di bawah
SELECT * FROM students;
