TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `after_insert_nhanvien` AFTER INSERT ON `nhanvien`\n FOR EACH ROW INSERT into nhanvienhistory values(NOW(),new.id,new.ho,new.ten,new.gioitinh,new.chucvu,\'insert\')' 'CREATE DEFINER=`root`@`localhost` TRIGGER `after_update_nhanvien`\nAFTER UPDATE\nON nhanvien for EACH row\n	INSERT into nhanvienhistory values(NOW(),old.id,old.ho,old.ten,old.gioitinh,old.chucvu,\'update\')' 'CREATE DEFINER=`root`@`localhost` TRIGGER `after_delete_nhanvien` AFTER DELETE ON `nhanvien` FOR EACH ROW INSERT into nhanvienhistory values(NOW(),old.id,old.ho,old.ten,old.gioitinh,old.chucvu,\'delete\')'
sql_modes=1098907648 1098907648 1098907648
definers='root@localhost' 'root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
created=167065911513 167017167871 167017174506
