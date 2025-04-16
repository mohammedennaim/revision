let id =1;
let candidatures = [];

const ajouterCandidature = (nom, age, projet) => {
   candidatures.push({
      'id': id++,
      "nom" : nom,
      "age" : age,
      "projet" : projet,
      "statut" :"en attente"
  });
  
}

const afficherToutesLesCandidatures = ()=>{
  return candidatures
}

const validerCandidature = (id)=>{
  for(let i=0 ; i<candidatures.length ; i++){
    if(candidatures[i].id === id ){
      if(candidatures[i].statut =="en attente"){
        candidatures[i].statut =="validée";
        return "bien validé";
      }
      return "candidat déja validé";
    }
    return "i'l ny'a pas cette condidat dans le tableau";
  }
}

const rejeterCandidature = (id) => {
for(let i=0 ; i<candidatures.length ; i++){
    if(candidatures[i].id === id ){
      if(candidatures[i].statut !="rejetée"){
        candidatures[i].statut =="rejetée";
        return "bien rejetée";
      }
      return "candidat déja rejetée";
    }
    return "i'l ny'a pas cette condidat dans le tableau";
  }
}
const rechercherCandidat = (nom) => {
const candidaturesParNom = [];
  for(let i=0 ; i<candidatures.length ; i++){
    if(candidatures[i].nom === nom ){
      candidaturesParNom.push(candidatures[i]);
    }
    return "i'l ny'a pas cette condidat dans le tableau";
  }
  return candidaturesParNom;
}

const filtrerParStatut =(statut) =>{
  console.log(candidatures);
  const candidaturesFiltrerParStatut = [];
  for(let i=0 ;i<condidatures.length; i++){
    if(candidatures[i].statut == statut){
      candidaturesFiltrerParStatut.push(candidatures[i]);
    }
    return "i'l ny'a pas cette condidat dans le tableau";
  }
  return candidaturesFiltrerParStatut;
}

ajouterCandidature("mohammed",20,"test");
ajouterCandidature("ahmed",20,"test");
ajouterCandidature("khalid",20,"test");
// validerCandidature(0);
// rejeterCandidature(1);
// afficherToutesLesCandidatures();
// rechercherCandidat("mohammed");
filtrerParStatut("en attente");

