select tMatakuliah.NamaMataKuliah, count(tNilai.NIRM) as jumlah_mahasiswa
from tMataKuliah
join tNilai on tMataKuliah.KodeMK = tNilai.KodeMK
group by tMataKuliah.NamaMataKuliah
order by jumlah_mahasiswa desc
limit 1;
