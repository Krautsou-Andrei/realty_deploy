<?

  $sql_text_aparts = 'select COMPID,CARDNUM,
  CONCAT((SELECT VOCSTREET.NAME FROM VOCSTREET WHERE VOCSTREET.ID=STREETID),if(HAAP<>" ",CONCAT(", дом&nbsp;",HAAP), "")) AS STREET,
  ROOMS,
  (SELECT VOCRAION.NAME FROM VOCRAION WHERE VOCRAION.ID=RAIONID) AS RAION,
  concat(STAGE, "/", HSTAGE) AS STAGE,
  concat(TRUNCATE(AAREA,0), "/", TRUNCATE(LAREA,0), "/", TRUNCATE(KAREA,0)) AS AREA,
  PICTURES,
  PRICE,
  (SELECT VOCCITY.NAME FROM VOCCITY WHERE VOCCITY.ID=APARTS.CITYID) AS CITY, 
  RPLANID,
  MISC';
  
  $sql_text_houses = 'select COMPID,CARDNUM,
  CONCAT((SELECT VOCSTREET.NAME FROM VOCSTREET WHERE VOCSTREET.ID=STREETID),if(HAAP<>" ",CONCAT(", дом&nbsp;",HAAP), "")) AS STREET,
  WHAT,
  (SELECT VOCRAION.NAME FROM VOCRAION WHERE VOCRAION.ID=RAIONID) AS RAION,
  HSTAGE AS STAGE,
  round(AAREA) AS AREA,
  round(EAREA) AS EAREA,
  PICTURES,
  PRICE,
  (SELECT VOCCITY.NAME FROM VOCCITY WHERE VOCCITY.ID=HOUSES.CITYID) AS CITY,
  VTOUR,
  BEDROOMS,
  (SELECT VOCALLDATA.NAME FROM VOCALLDATA WHERE VOCALLDATA.ID=BTYPEID) as htype,
  (SELECT VOCALLDATA.NAME FROM VOCALLDATA WHERE VOCALLDATA.ID=USAGEID) as USAGEID,
  MISC';

  $sql_text_commerc = 'select COMPID,CARDNUM,
  CONCAT((SELECT VOCSTREET.NAME FROM VOCSTREET WHERE VOCSTREET.ID=STREETID),if(HAAP<>" ",CONCAT(", дом&nbsp;",HAAP), "")) AS STREET,
  (SELECT VOCRAION.NAME FROM VOCRAION WHERE VOCRAION.ID=RAIONID) AS RAION,
  HSTAGE AS STAGE,
  round(SQUEAR) AS AREA,
  round(EAREA) AS EAREA,
  PICTURES,
  PRICE,
  (SELECT VOCCITY.NAME FROM VOCCITY WHERE VOCCITY.ID=COMMERC.CITYID) AS CITY,
  VTOUR,
  (SELECT VOCALLDATA.NAME FROM VOCALLDATA WHERE VOCALLDATA.ID=OBJID) as OBJ,
  MISC';  