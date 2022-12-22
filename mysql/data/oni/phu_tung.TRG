TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `Backup_PhuTung_INSERT` AFTER INSERT ON `phu_tung` FOR EACH ROW BEGIN\n        	INSERT into lich_su_thay_doi_nhan_vien\n            values(\'AD00000000\',NOW(),new.MaPhuTung,new.TenPhuTung,new.NgayNhap,\n                   new.NgayXuatCuoiCung,new.SoLuong,new.GiaNhap,new.GiaBan,new.MaKho,\'insert\');\n        END' 'CREATE DEFINER=`root`@`localhost` TRIGGER `Backup_PhuTung_UPDATE` AFTER UPDATE ON `phu_tung` FOR EACH ROW BEGIN\n        	INSERT into lich_su_thay_doi_nhan_vien\n            values(\'AD00000000\',NOW(),old.MaPhuTung,old.TenPhuTung,old.NgayNhap,\n                   old.NgayXuatCuoiCung,old.SoLuong,old.GiaNhap,old.GiaBan,old.MaKho,\'update\');\n        END' 'CREATE DEFINER=`root`@`localhost` TRIGGER `Backup_PhuTung_DELETE` AFTER DELETE ON `phu_tung` FOR EACH ROW BEGIN\n        	INSERT into lich_su_thay_doi_nhan_vien\n            values(\'AD00000000\',NOW(),old.MaPhuTung,old.TenPhuTung,old.NgayNhap,\n                   old.NgayXuatCuoiCung,old.SoLuong,old.GiaNhap,old.GiaBan,old.MaKho,\'delete\');\n        END'
sql_modes=1098907648 1098907648 1098907648
definers='root@localhost' 'root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
created=167161340485 167161335755 167161330762
