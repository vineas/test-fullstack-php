select tMahasiswa.NamaMahasiswa, tMatakuliah.NamaMataKuliah, tNilai.grade
from tMahasiswa
join tNilai on tMahasiswa.NIRM = tNilai.NIRM