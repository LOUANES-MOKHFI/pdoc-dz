<?php
function getsetting(){
     return \App\SiteSetting::where('id', 1)->first();
}
function count_all_visitor(){
  return \App\Counter::count();;
}
function type_etablissement(){
  return \App\Universite::select('type_etablissement')->distinct()->get();
}

 function all_visiteur(){
         return \App\Counter::paginate(15);//where('active',1)->get();
   }

function etablissemnt_module($id){
  return \App\Universite::where('id',$id)->first();
}
function module_cours($id){
  return \App\Module::where('id',$id)->first();
}
function module_tds($id){
  return \App\Module::where('id',$id)->first();
}

function module_examens($id){
  return \App\Module::where('id',$id)->first();
}

function module_reference($id){
  return \App\Bibliographie::where('deleted',0)->where('id',$id)->first();
}
function all_etablissement(){
  return \App\Universite::select('*')->get();
}
function all_universite(){
$array[] = [
'Université d’Adrar',
'Université d’Alger 1',
'Université d’Alger 2',
'Université d’Alger 3',
'Université de Annaba',
'Université de Batna',
'Université de Béchar',
'Université de Bejaia',
'Université de Biskra',
'Université de Blida 1',
'Université de Blida 2',
'Université de Bordj Bou Arreridj',
'Université de Bouira',
'Université de Boumerdes',
'Université de Chlef',
'Université de Constantine 1',
'Université de Constantine 2',
'Université de Constantine 3',
'Université de Djelfa',
'Université d’El Oued',
'Université d’El Tarf',
'Université de Ghardaïa',
'Université de Guelma',
'Université de Jijel',
'Université de Khemis Miliana',
'Université de Khenchela',
'Université de Laghoua',
'Université de Mascara',
'Université de Médéa',
'Université de Mostaganem',
'Université de M’Sila',
'Université d’Oran',
'Université de Ouargla',
'Université d’Oum El Bouaghi',
'Université de Saida',
'Université des Sciences Islamiques EAK',
'Université de Sétif 1',
'Université de Sétif 2',
'Université de Sidi Bel Abbes',
'Université de Skikda',
'Université de Souk Ahras',
'Université de Tebessa',
'Université de Tiaret',
'Université de Tizi Ouzou',
'Université de Tlemcen',
'U.S.T.H.B',
'U.S.T.O',
];
return $array;
}

function all_centre_universite(){
$array2 = [
'Centre Universitaire de Ain Temouchent',
'Centre Universitaire d’El Bayadh',
'Centre Universitaire d’Illizi',
'Centre Universitaire de Mila',
'Centre Universitaire de Naama',
'Centre Universitaire de Relizane',
'Centre Universitaire de Tamanghasset',
'Centre Universitaire de Tipaza',
'Centre Universitaire de Tissemsilt',
'Centre Universitaire de Tindouf',
];
return $array2;
}

function all_ecole_preparatoire(){
$array3 = [
'Ecole Préparatoire en SECSG - Alger',
'Ecole Préparatoire en SECSG - Constantine',
'Ecole Préparatoire en SECSG - Annaba',
'Ecole Préparatoire en SECSG - Tlemcen',
'Ecole Préparatoire en SECSG - Oran',
'Ecole Préparatoire en ST d’Alger',
'Ecole Préparatoire en ST de Annaba',
'Ecole Préparatoire en ST de Tlemcen',
'Ecole Préparatoire en ST d’Oran',
'Ecole Préparatoire en SNV d’Alger',
'Ecole Préparatoire en SNV de Mostaganem',
'Ecole Préparatoire en SNV d’Oran',
];
return $array3;
}
function all_ecole_normal(){
$array4 = [
'Ecole Normale Supérieure de Bouzaréah',
'Ecole Normale Supérieure de Constantine',
'Ecole Normale Supérieure de Kouba',
'Ecole Normale Supérieure de Laghouat',
'Ecole Normale Supérieure de Mostaganem',
'Ecole Normale Supérieure d’Oran',
'Ecole Normale Supérieure d’Enseignement Technique de Skikda',
];
return $array4;
}
function all_econle_nat_superieur(){
  $array5 = [
    'Ecole des Hautes Etudes Commerciales',
'Ecole Nationale Polytechnique d’Alger',
'Ecole Nationale Polytechnique d’Oran',
'Ecole Nationale Supérieure Agronomique',
'Ecole Nationale Supérieure de Biotechnologie - Constantine',
'Ecole Nationale Supérieure d’Hydraulique',
'Ecole Nationale Supérieure d’Informatique',
'Ecole Nationale Supérieure de Journalisme et des Sciences de l’Information',
'Ecole Nationale Supérieure de Management',
'Ecole Nationale Supérieure des Mines et de la Métallurgie',
'Ecole Nationale Supérieure Polytechnique de Constantine',
'Ecole Nationale Supérieure des Sciences de la Mer et de l’Aménagement du Littoral',
'Ecole Nationale Supérieure de Sciences Politiques',
'Ecole Nationale Supérieure de Statistiques et d’Economie Appliquée',
'Ecole Nationale Supérieure de Technologie',
'Ecole Nationale Supérieure des Travaux Publics',
'Ecole Nationale Supérieure Vétérinaire',
'Ecole Polytechnique d’Architecture et d’Urbanisme',
'Ecole Supérieure de Commerce',
'Ecole Nationale Supérieure d’Informatique de Sidi Bel Abbes',
  ];
  return $array5;
}

function All_news(){
  return \App\Actualite::where('desactive',0)->paginate(5);
}
function getAll_news(){
  return \App\Actualite::where('desactive',0)->get();
}
function getactualite($id){
  return \App\Actualite::where('id',$id)->first();
}
function last_news(){
  return \App\Actualite::where('desactive',0)->orderBy('id','desc')->first();
}
function getressource($id){
  return \App\Ressource::where('id',$id)->first();
}
function getNewactualite(){
  return \App\Actualite::where('desactive',0)->where('nouveaute',1)->get();
}
function getnouveaute(){
  return \App\Actualite::where('nouveaute',1)->count();
}

function All_ressourcePE(){
  return \App\Ressource::where('categorie_ressource',"reesource en periode d'essai")->get();
}
function getAll_ressourceDOC(){
    return \App\Ressource::where('categorie_ressource',"ressource DOC")->get();
}

function All_ressourcePlu(){
  return \App\Ressource::where('categorie_ressource',"ressource DOC")->where('domaine_ressource','PLURIDISCIPLINAIRES')->paginate(5);
}

function All_ressourceST(){
  return \App\Ressource::where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES ET TECHNIQUES')->paginate(5);
}
function All_ressourceSHS(){
  return \App\Ressource::where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES HUMAINES ET SOCIALES')->get();
}

function All_ressourceSVT(){
  return \App\Ressource::where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES DE LAVIE ET DE LA TERRE')->paginate(5);
}
function All_ressourceAO(){
  return \App\Ressource::where('categorie_ressource',"Production scientifique des universités")->get();
}

function All_ressourceAL(){
  return \App\Ressource::where('categorie_ressource',"Production scientifique des universités")->where('nationalite_ressource','Algériennes')->paginate(5);
}
function All_ressourceETR(){
  return \App\Ressource::where('categorie_ressource',"Production scientifique des universités")->where('nationalite_ressource','Etrangères')->paginate(5);
}
function Demande_Add($universite_admin){
  return \App\User::where('confirmation_admin' , 0)->where('universite',$universite_admin)->get();
}
function Demande_Add1(){
  return \App\User::where('confirmation_admin' , 0)->get();
}
 function countDemande_Add(){
    return \App\User::where('confirmation_admin' , 0)->count();
  }
  function add_book(){
    return \App\Books::where('confirmation' , 0)->get();
  }
function unreadMessage(){
    return \App\Contact::where('view' , 0)->get();
  }
function readMessage(){
    return \App\Contact::where('view' , 1)->where('deleted',0)->get();
  }
  function countunreadMessage(){
    return \App\Contact::where('view' , 0)->count();
  }
  function countreadMessage(){
    return \App\Contact::where('view' , 1)->where('deleted',0)->count();
  }
  function All_message(){
    return \App\Contact::where('deleted',0)->get();
  }
  function deleted_message(){
    return \App\Contact::where('deleted',1)->get();
  }

function FAQ(){
    return \App\FAQ::where('active',1)->get();
  }

  function All_demande(){
    return \App\Article::where('deleted',0)->get();
  }
  function unreadDemande(){
    return \App\Article::where('view' , 0)->get();
  }
  function readDemande(){
    return \App\Article::where('view' , 1)->where('deleted',0)->get();
  }
   function countunreadDemande(){
    return \App\Article::where('view' , 0)->count();
  }
  function countreadDemande(){
    return \App\Article::where('view' , 1)->where('deleted',0)->count();
  }
  function deleted_Demande(){
    return \App\Article::where('deleted',1)->get();
  }

  function student(){
  return \App\User::where('genre','etudiant')->where('confirmation_admin',1)->get();
}
 function teacher(){
  return \App\User::where('genre','enseignant')->where('confirmation_admin',1)->get();
}
 function admin(){
  return \App\User::where('admin',1)->where('confirmation_admin',1)->get();
}

function Books(){
  return \App\Books::where('deleted',0)->where('confirmation',1)->Orderby('id','desc')->Limit(8)->get();
}

function Books_domaine($sujet){
  return \App\Books::where('deleted',0)->where('sujet',$sujet)->where('confirmation',1)->Orderby('id','desc')->Limit(4)->get();
}

function count_book($sujet){
    return \App\Books::where('deleted',0)->where('sujet',$sujet)->where('confirmation',1)->count();
}

function Count_AllBooks(){
  return \App\Books::where('deleted',0)->where('confirmation',1)->count();
}

function Count_AllBooks_user($id){
  return \App\Books::where('deleted',0)->where('id_user',$id)->count();
}

function Count_Alldocument_user($id){
  return \App\Document::where('deleted',0)->where('id_user',$id)->count();
}

function Count_Allcatalogue_user($id){
  return \App\Catalogue::where('deleted',0)->where('id_user',$id)->count();
}

function Count_AllBooks_g(){
  return \App\Books::where('deleted',0)->where('prix',null)->where('confirmation',1)->count();
}
function Count_AllBooks_p(){
  return \App\Books::where('deleted',0)->where('confirmation',1)->where('prix','!=',null)->count();
}
function getBook($id){
  return \App\Books::where('deleted',0)->where('id',$id)->where('confirmation',1)->first();
}
function getSujetBook(){
  return \App\Books::select('sujet')->distinct()->where('deleted',0)->where('confirmation',1)->orderBy('sujet')->get();
}

function getLangueBook(){
  return \App\Books::select('langue')->distinct()->where('deleted',0)->where('confirmation',1)->get();
}

function lettre(){
  $lettre =[ 
'A',
'B',
'C',
'D',
'E',
'F',
'G',
'H',
'I',
'J',
'K',
'L',
'M',
'N',
'O',
'P',
'Q',
'R',
'S',
'T',
'U',
'V',
'W',
'X',
'Y',
'Z',];
return $lettre;
}
  function serach_par_lettre(){
    return \App\Ressource::where('nom_ressource','Like','%',$lettre)->get();

  }

  function All_lettre_ressource(){
    return \App\Ressource::select('nom_ressource')->distinct()->where('categorie_ressource',"reesource en periode d'essai")->get();
  }
  
function all_desciplinepe(){
  return \App\Ressource::select('descipline')->distinct()->where('categorie_ressource',"reesource en periode d'essai")->get();
}
function all_desciplineslv(){
  return \App\Ressource::select('descipline')->distinct()->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES DE LA VIE ET DE LA TERRE')->get();
}
function all_desciplineshs(){
  return \App\Ressource::select('descipline')->distinct()->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES HUMAINES ET SOCIALES')->get();
}
function all_desciplineplu(){
  return \App\Ressource::select('descipline')->distinct()->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','PLURIDISCIPLINAIRES')->get();
}
function all_desciplinest(){
  return \App\Ressource::select('descipline')->distinct()->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES ET TECHNIQUES')->get();
}
function all_desciplineal(){
  return \App\Ressource::select('descipline')->distinct()->where('categorie_ressource',"Production scientifique des universités")->where('nationalite_ressource','Algériennes')->get();
}
function all_desciplineetr(){
  return \App\Ressource::select('descipline')->distinct()->where('categorie_ressource',"Production scientifique des universités")->where('nationalite_ressource','Etrangères')->get();
}
 

function all_typemulti(){
  return \App\Ressource::select('type_ressource')->distinct()->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','MULTIDISCIPLINAIRES')->orderBy('type_ressource')->get();
}
function all_typepe(){
  return \App\Ressource::select('type_ressource')->distinct()->where('categorie_ressource',"reesource en periode d'essai")->orderBy('type_ressource')->get();
}
function all_typest(){
  return \App\Ressource::select('type_ressource')->distinct()->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES ET TECHNIQUES')->orderBy('type_ressource')->get();
}
function all_typeshs(){
  return \App\Ressource::select('type_ressource')->distinct()->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES HUMAINES ET SOCIALES')->orderBy('type_ressource')->get();
}
function all_typeplu(){
  return \App\Ressource::select('type_ressource')->distinct()->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','PLURIDISCIPLINAIRES')
->orderBy('type_ressource')->get();
}
function all_typeslv(){
  return \App\Ressource::select('type_ressource')->distinct()->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES DE LA VIE ET DE LA TERRE')->orderBy('type_ressource')->get();
}
function all_typeal(){
  return \App\Ressource::select('type_ressource')->distinct()->where('categorie_ressource',"Production scientifique des universités")->where('nationalite_ressource','Algériennes')->get();
}
function all_typeetr(){
  return \App\Ressource::select('type_ressource')->distinct()->where('categorie_ressource',"Production scientifique des universités")->where('nationalite_ressource','Etrangères')->get();
}
function all_type_doc(){
  return \App\Document::select('type_doc')->distinct()->where('deleted',0)->where('confirmation',1)->orderBy('type_doc')->get();
}

function annee_Edition_doc(){
  return \App\Document::select('annee_edition')->distinct()->where('deleted',0)->where('annee_edition','!=','Null')->where('confirmation',1)->orderBy('annee_edition')->get();
}
function count_annee($annee){
  return \App\Document::select('annee_edition')->distinct()->where('deleted',0)->where('annee_edition',$annee)->where('confirmation',1)->count();
}
function count_type($type){
  return \App\Document::select('type_doc')->distinct()->where('deleted',0)->where('type_doc',$type)->where('confirmation',1)->count();
}

function count_domaine($domaine){
  return \App\Document::select('domaine_document')->distinct()->where('deleted',0)->where('domaine_document',$domaine)->where('confirmation',1)->count();
}

function All_domaine_doc(){
  return \App\Document::select('domaine_document')->distinct()->where('deleted',0)->where('confirmation',1)->orderBy('domaine_document')->get();
}

function count_All_document(){
    return \App\Document::where('confirmation',1)->where('deleted',0)->count();

}
function All_document(){
    return \App\Document::where('confirmation',1)->where('deleted',0)->orderBy('titre_doc')->paginate(20);
}
function new_add_document(){
  return \App\Document::where('confirmation',1)->where('deleted',0)->orderBy('id','desc')->limit(5)->get();
}
function new_add_ressource(){
  return \App\Ressource::where('deleted',0)->orderBy('id','desc')->limit(5)->get();
}


function module($id){
  return \App\Module::where('deleted',0)->where('id',$id)->first();
}

function count_cours($id){
  return \App\Cours::where('deleted',0)->where('id_module',$id)->count();
}
function count_tds($id){
  return \App\Tds::where('deleted',0)->where('id_module',$id)->count();
}
function count_examens($id){
  return \App\Examens::where('deleted',0)->where('id_module',$id)->count();
}
?>