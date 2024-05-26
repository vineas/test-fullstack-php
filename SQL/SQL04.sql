select tMatakuliah.NamaMataKuliah, avg(tNilai.grade)
from tMatakuliah
join tNilai on tMatakuliah.KodeMK = tNilai.kodeMK
group by tMatakuliah.NamaMataKuliah;
