select NamaMahasiswa
from tMahasiswa
join tNilai on tMahasiswa.NIRM = tNilai.NIRM
join tMatakuliah on tNilai.NIRM = tMatakuliah.KodeMK
where tMatakuliah.NamaMataKuliah in ('Matematika', 'Aljabar')
group by tMahasiswa.NIRM
having count(distinct tMatakuliah.KodeMK) = 2;