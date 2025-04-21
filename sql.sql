-- 1
select * FROM utilisateurs
join offres ON offres.freelance_id = utilisateurs.id
join langues on langues.nom = "Anglais"
join profil_langue on profil_langue.langue_id = langues.id
 WHERE profil_langue.niveau = "avancé" and langues.nom = "Anglais"

-- 2

select * FROM utilisateurs
join profils ON profils.utilisateur_id = utilisateurs.id
join profil_competence on profil_competence.profil_id = profils.id
join competences on competences.id = profil_competence.competence_id

-- 3
select * FROM utilisateurs
join profils ON profils.utilisateur_id = utilisateurs.id
join profil_competence on profil_competence.profil_id = profils.id
join adresses on adresses.utilisateur_id = utilisateurs.id
WHERE profils.disponible = 1 
GROUP by utilisateurs.id

-- 4
select * FROM utilisateurs
join profils ON profils.utilisateur_id != utilisateurs.id
join profil_competence on profil_competence.profil_id = profils.id


-- 5
select * FROM utilisateurs
join profils ON profils.utilisateur_id = utilisateurs.id
JOIN offres on offres.freelance_id = utilisateurs.id
JOIN missions on missions.offre_id = offres.id
where missions.statut != 'livré'

-- 6
select * FROM utilisateurs
join profils ON profils.utilisateur_id = utilisateurs.id
JOIN offres on offres.freelance_id = utilisateurs.id
JOIN missions on missions.offre_id = offres.id
JOIN projets on projets.statut = 'ouvert'
where missions.statut = 'livré'


-- 7
select * FROM utilisateurs
join profils ON profils.utilisateur_id = utilisateurs.id
JOIN offres on offres.freelance_id = utilisateurs.id
JOIN missions on missions.offre_id = offres.id
where profils.tarif_horaire>100;
