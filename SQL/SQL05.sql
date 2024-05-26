select tMatakuliah.NamaMataKuliah, avg(tNilai.grade) AS rata_rata_grade
from tMatakuliah
join tNilai on tMatakuliah.KodeMK = tNilai.KodeMK
group by tMatakuliah.NamaMataKuliah
having avg (tNilai.grade) > 75;
