SELECT message, id_joueur, date_et_heure_du_message 
FROM message 
WHERE date_et_heure_du_message <= « 24h » 

UPDATE message SET est_expediteur 
VALUES (« vraie ou faux ») 
WHERE id_joueur= « »
