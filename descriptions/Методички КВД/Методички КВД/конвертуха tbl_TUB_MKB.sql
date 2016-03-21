USE kvd;
GO

SET ANSI_NULLS ON
GO



SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO


-------------------------------------------

truncate table AKTPAK.dbo.AKPC_TUB_MKB

-------------------------------------------

 --выгрузка из dbf
insert into AKTPAK.dbo.AKPC_TUB_MKB ([CKEY],[NZOOCODE], [NAME], [POLED], [GDU], [GDUN])
   (select [CKEY], [NZOOCODE], [NAME], [POLED], [GDU], [GDUN]
	from OPENROWSET('microsoft.ace.oledb.12.0','dbase iv;database=D:\', MKB10TUB));  
   select * from AKTPAK.dbo.AKPC_TUB_MKB;


update 
  T
set 
  T.CKey = M.CKey
from
  Disp.dbo.tbl_MKB_tmp T, 
  AKTPAK.dbo.AKPC_MKB M 
where 
  (T.Code = M.NZooCode) and (M.D_FIN is null)
  
  




