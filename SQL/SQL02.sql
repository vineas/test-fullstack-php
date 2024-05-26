select * from tMatakuliah
where NIRM not in (
    select distinct KodeMK from tNilai
);