--***************** ID 	EVALUACION *******************
DROP FUNCTION fun_id_Evaluacion() CASCADE;
CREATE FUNCTION fun_id_Evaluacion() RETURNS "trigger"
 AS $$
 DECLARE wid SMALLINT;
 BEGIN
	SELECT MAX(id_evaluacion) FROM tab_evaluacion INTO wid;
	IF wid IS NULL OR wid = 0 THEN wid =1;
	NEW.id_evaluacion=wid;
	RETURN NEW;
	ELSE
	wid=wid+1;
	NEW.id_evaluacion=wid;
	RETURN NEW;
	END IF;
 RETURN NULL;
 END;
$$ LANGUAGE plpgsql;

-- DISPARADORES PARA GENERAR NÚMEROS DE IDENTIFICACIÓN DE TABLAS DE FORMA AUTOMÁTICA *****
-- ***************************************************************************************

CREATE TRIGGER fun_id_Evaluacion --Evaluacion
BEFORE INSERT ON tab_evaluacion
FOR EACH ROW EXECUTE PROCEDURE fun_id_Evaluacion();
--***************** ID 	INVERSION *******************
DROP FUNCTION fun_id_Inversion() CASCADE;
CREATE FUNCTION fun_id_Inversion() RETURNS "trigger"
 AS $$
 DECLARE wid SMALLINT;
 BEGIN
	SELECT MAX(id_inversion) FROM tab_inversion INTO wid;
	IF wid IS NULL OR wid = 0 THEN wid =1;
	NEW.id_inversion=wid;
	RETURN NEW;
	ELSE
	wid=wid+1;
	NEW.id_inversion=wid;
	RETURN NEW;
	END IF;
 RETURN NULL;
 END;
$$ LANGUAGE plpgsql;

-- DISPARADORES PARA GENERAR NÚMEROS DE IDENTIFICACIÓN DE TABLAS DE FORMA AUTOMÁTICA *****
-- ***************************************************************************************

CREATE TRIGGER fun_id_Inversion --Inversion
BEFORE INSERT ON tab_inversion
FOR EACH ROW EXECUTE PROCEDURE fun_id_Inversion();

--***************** ID Solicitud *******************
DROP FUNCTION fun_id_Solicitud() CASCADE;
CREATE FUNCTION fun_id_Solicitud() RETURNS "trigger"
 AS $$
 DECLARE wid SMALLINT;
 BEGIN
	SELECT MAX(id_solicitud) FROM tab_solicitud INTO wid;
	IF wid IS NULL OR wid = 0 THEN wid =1;
	NEW.id_solicitud=wid;
	RETURN NEW;
	ELSE
	wid=wid+1;
	NEW.id_solicitud=wid;
	RETURN NEW;
	END IF;
 RETURN NULL;
 END;
$$ LANGUAGE plpgsql;

-- DISPARADORES PARA GENERAR NÚMEROS DE IDENTIFICACIÓN DE TABLAS DE FORMA AUTOMÁTICA *****
-- ***************************************************************************************

CREATE TRIGGER fun_id_Solicitud --Solicitud
BEFORE INSERT ON tab_solicitud
FOR EACH ROW EXECUTE PROCEDURE fun_id_Solicitud();

--***************** ID COMENTARIO *******************
DROP FUNCTION fun_id_Comentario() CASCADE;
CREATE FUNCTION fun_id_Comentario() RETURNS "trigger"
 AS $$
 DECLARE wid SMALLINT;
 BEGIN
	SELECT MAX(id_comentario) FROM tab_comentarios INTO wid;
	IF wid IS NULL OR wid = 0 THEN wid =1;
	NEW.id_comentario=wid;
	RETURN NEW;
	ELSE
	wid=wid+1;
	NEW.id_comentario=wid;
	RETURN NEW;
	END IF;
 RETURN NULL;
 END;
$$ LANGUAGE plpgsql;

-- DISPARADORES PARA GENERAR NÚMEROS DE IDENTIFICACIÓN DE TABLAS DE FORMA AUTOMÁTICA *****
-- ***************************************************************************************

CREATE TRIGGER fun_id_Comentario --Comentario
BEFORE INSERT ON tab_comentarios
FOR EACH ROW EXECUTE PROCEDURE fun_id_Comentario();