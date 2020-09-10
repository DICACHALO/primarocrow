drop function fun_solicitud() cascade;
CREATE FUNCTION fun_solicitud() RETURNS "trigger"
 AS $$
 DECLARE wid varchar(10);
 DECLARE  a1 varchar(30);
 DECLARE  t1 varchar(20);
 DECLARE  f1 int;
 DECLARE  r1 bigint;
 DECLARE  r2 bigint;
 DECLARE  n1 varchar(150);
 DECLARE  fa1 varchar(10);
 DECLARE  resultado smallint;
 BEGIN
	SELECT tipo FROM tab_persona INTO wid;
	IF  wid = 'Natural' then r2=0;
	--coherencia
		select area_accion from tab_persona where id_persona=NEW.id_persona INTO a1;
			if a1=NEW.area_proyecto then resultado=11;
			else resultado=0;
			end if;
	--tiempo de trabajo
		select tiempo_area from tab_persona where id_persona=NEW.id_persona INTO t1;
			if t1='Menos de 1' then resultado=resultado+2;

			elsif t1='Entre dos y cinco' then resultado=resultado+6;

			else 

			resultado=resultado+11;

			end if;

	--edad
		SELECT EXTRACT(YEAR FROM (SELECT age(fecha) from tab_persona where id_persona=NEW.id_persona)) INTO f1;
			if f1>17 and f1<45 then resultado=resultado+11;
			elsif f1>44 and f1<60 then resultado=resultado+6;
			else resultado=resultado+2;
			end if;

	--competidores
		if NEW.ind_compe = 't' then resultado=resultado+11;
		else resultado=resultado+30;
		end if;
	--rentabilidad
		r1 = ((NEW.ganancia_esperada/NEW.valor)*100);
		if r1>0 and r1<16 then resultado=resultado+5;
		elsif r1>15 and r1<30 then resultado=resultado+15;
		elsif r1>29 and r1<60 then resultado=resultado+20;
		else resultado=resultado+25;
		end if;
	--nivel estudio
		select nivel from tab_solicitante where id_persona=NEW.id_persona INTO n1;
		if n1='Primaria o menos' then resultado=resultado+0;
		elsif n1='Bachiller' then resultado=resultado+2;
		elsif n1='Pregrado' then resultado=resultado+6;
		else resultado=resultado+11;
		end if;
	--fase proyecto
		if NEW.estado = 'Propuesta' then resultado=resultado+5;
		elsif NEW.estado = 'En curso' then resultado=resultado+15;
		else resultado=resultado+20;
		end if;
	--resultado
	
		if resultado>100 then resultado=100;
		end if;
		NEW.porcent=resultado;
	RETURN NEW;
	ELSE 

		--coherencia
		select area_accion from tab_persona where id_persona=NEW.id_persona INTO a1;
			if a1=NEW.area_proyecto then resultado=10;
			else resultado=0;

			end if;
	--tiempo de trabajo
		select tiempo_area from tab_persona where id_persona=NEW.id_persona INTO t1;
			if t1='Menos de 1' then resultado=resultado+2;

			elsif t1='Entre dos y cinco' then resultado=resultado+5;

			else 

			resultado=resultado+10;

			end if;

	--competidores
		if NEW.ind_compe = 't' then resultado=resultado+15;
		else resultado=resultado+30;
		end if;		
--rentabilidad
		r1 = ((NEW.ganancia_esperada/NEW.valor)*100);
		if r1>0 and r1<16 then resultado=resultado+10;
		elsif r1>15 and r1<30 then resultado=resultado+20;
		elsif r1>29 and r1<60 then resultado=resultado+30;
		else resultado=resultado+40;
		end if;
--fase proyecto
		if NEW.estado = 'Propuesta' then resultado=resultado+5;
		elsif NEW.estado = 'En curso' then resultado=resultado+15;
		else resultado=resultado+25;
		end if;
--resultado	
		
		if resultado>100 then resultado=100;
		end if;



		NEW.porcent=resultado;
	RETURN NEW;
	END IF;
 RETURN NULL;
 END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER fun_solicitud --Inversion
BEFORE INSERT ON tab_solicitud
FOR EACH ROW EXECUTE PROCEDURE fun_solicitud();