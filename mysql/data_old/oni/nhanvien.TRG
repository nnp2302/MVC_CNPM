TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `after_insert_nhanvien` AFTER INSERT ON `nhanvien`\n FOR EACH ROW INSERT into nhanvienhistory values(NOW(),new.id,new.ho,new.ten,new.gioitinh,new.chucvu,\'insert\')' 'CREATE DEFINER=`root`@`localhost` TRIGGER `after_update_nhanvien`
sql_modes=1098907648 1098907648 1098907648
definers='root@localhost' 'root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
created=167065911513 167017167871 167017174506