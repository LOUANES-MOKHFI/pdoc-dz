@extends('layouts.app')

@section('title')
   Réclamation
@endsection
@section('header')

<style type="text/css">
	body{
    color: #6F8BA4;
    margin-top:20px;}
.section {
    padding: 100px 0;
    position: relative;
}

.gray-bg {
    background-color: #f5f5f5;
}
/* Contact Us
---------------------*/
.contact-name {
  margin-bottom: 30px;
}
.contact-name h5 {
  font-size: 22px;
  color: #20247b;
  margin-bottom: 5px;
  font-weight: 600;
}
.contact-name p {
  font-size: 18px;
  margin: 0;
}

.social-share a {
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  text-align: center;
  margin-right: 10px;
}
.social-share .dribbble {
  box-shadow: 0 8px 30px -4px rgba(234, 76, 137, 0.5);
  background-color: #ea4c89;
}
.social-share .behance {
  box-shadow: 0 8px 30px -4px rgba(0, 103, 255, 0.5);
  background-color: #0067ff;
}
.social-share .linkedin {
  box-shadow: 0 8px 30px -4px rgba(1, 119, 172, 0.5);
  background-color: #0177ac;
}

.contact-form .form-control {
  border: none;
  border-bottom: 1px solid #20247b;
  background: transparent;
  border-radius: 0;
  padding-left: 0;
  box-shadow: none !important;
}
.contact-form .form-control:focus {
  border-bottom: 1px solid #fc5356;
}
.contact-form .form-control.invalid {
  border-bottom: 1px solid #ff0000;
}
.contact-form .send {
  margin-top: 20px;
}
@media (max-width: 767px) {
  .contact-form .send {
    margin-bottom: 20px;
  }
}

.section-title .p {
    font-weight: 700;
    color: #20247b;
    font-size: 45px;
    margin: 0 0 15px;
    border-left: 5px solid #fc5356;
    padding-left: 15px;
}
.section-title .p1 {
    font-weight: 700;
    color: #20247b;
    font-size: 45px;
    margin: 0 0 15px;
    border-right: 5px solid #fc5356;
    padding-left: 15px;
}
.section-title {
    padding-bottom: 45px;
}
.contact-form .send {
    margin-top: 20px;
}
.px-btn {
    padding: 0 50px 0 20px;
    line-height: 60px;
    position: relative;
    display: inline-block;
    color: #20247b;
    background: none;
    border: none;
}
.px-btn:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    border-radius: 30px;
    background: transparent;
    border: 1px solid rgba(252, 83, 86, 0.6);
    border-right: 1px solid transparent;
    -moz-transition: ease all 0.35s;
    -o-transition: ease all 0.35s;
    -webkit-transition: ease all 0.35s;
    transition: ease all 0.35s;
    width: 60px;
    height: 60px;
}
.px-btn .arrow {
    width: 13px;
    height: 2px;
    background: currentColor;
    display: inline-block;
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    right: 25px;
}
.px-btn .arrow:after {
    width: 8px;
    height: 8px;
    border-right: 2px solid currentColor;
    border-top: 2px solid currentColor;
    content: "";
    position: absolute;
    top: -3px;
    right: 0;
    display: inline-block;
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
@endsection
@section('content')

<div class="body">
  <div class="custom-breadcrumns" style="margin-top: 70px">
      <div class="container div">
        <a href="{{url('home')}}">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Réclamation </span>
      </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<section class="section gray-bg" id="contactus">
    <div class="container">
    	@include('layouts.flash_msg')
        <div class="row">
            <div class="col-lg-6" >
                <div class="section-title">
                    <p class="p" style="font-size: 17px">RECLAMATIONS RELATIVES AU CONTENU PUBLIE SUR LE SITE WEB PDOC</p>
                    <p align="justify">PDOC respecte les droits d’autrui et désire proposer une plateforme dénuée de contenus en infraction avec ces droits. Nos Conditions d’utilisation exigent que les informations publiées par les membres soient exactes, licites et qu’elles ne violent pas les droits de tiers. Pour atteindre ces objectifs, PDOC propose une procédure de soumission des réclamations ou avis concernant les contenus publiés par nos membres. 
					Il est souvent plus simple et plus rapide de résoudre un problème directement avec l’administrateur du site en lui envoyant un message.
					Apres l’évaluation de la notification du plaignant, l’administration du site rendra réponse dans 48H qui suivent par une confirmation du désactivation d’accès au site, la suppression du contenu objet de la requête  
					Veuillez NOTER que le contenu de tout avertissement que vous envoyez doit être véridique.
					Pour envoyer une réclamation concernant une violation de droits d’auteur, envoyer une réclamation concernant une diffamation veuillez envoyer votre message via ce présent formulaire : formulaire de notification
					</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title" >
                    <p class="p1" style="font-size: 17px" align="right">رسائلكم بخصوص محتوى الموقع</p>
                    <p align="right">منصتنا الوثائقية تحترم حقوق المؤلفين وحريصة على تثمين الملكية الفكرية للأشخاص والجماعات وحريصة على أن يكون محتواها خال من كل عمل يخل بحقوق الإخرين.
					شروط إستعمال منصتنا تفرض على أن المعلومات المنشورة في هذا الموقع من طرف الأعضاء تكون صحيحة وخالية من كل فعل مضر بحقوق الأخرين ولتحقيق هذه الأهداف منصتنا تقترح طريقة لإرسال الشكاوي والأراء بخصوص المحتوى المنشور من طرف الأعضاء.
					كان دوما وبشكل جد بسيط وفعال حل المشكلة مباشرة مع إدارة الموقع بإرسال رسالة
					بعد تقييم الشكوى تقوم إدارة الموقع بالرد قبل 48 ساعة التي تتبعها وذك بحضر العضو أو المجموعة عن الموقع وإزالة المحتوى موضوع الشكوى
					ضروري التأكد من المحتوى موضوع الشكوى .
					لإرسال شكوى بخصوص خرق حقوق المؤلف ،خرق خصوصية لعلامة ما يرجى إيداع رسالتكم </p>
                </div>
            </div>
        </div>
        <div class="row flex-row-reverse">
            <div class="col-md-7 col-lg-8 m-15px-tb">
                <div class="contact-form">
                     {!! Form::open(['url'=>'/reclamer', 'method'=>'POST', 'class="row"'])!!}
                        <div class="returnmessage valid-feedback p-15px-b" data-success="Your message has been received, We will contact you soon."></div>
                        <div class="empty_notice invalid-feedback p-15px-b"><span></span></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="name" type="text" placeholder="Nom et Prénom" class="form-control" name="name" required> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="email" type="text" placeholder="Email" class="form-control" name="email" required>  
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input id="subject" type="text" placeholder="Objet" class="form-control" name="subject" required> 
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="message" placeholder="Message" class="form-control" rows="3" name="message" required></textarea> 
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="send">
                                    <button id="send_message" class="px-btn theme" href="#"><span>Envoyer</span> <i class="arrow"></i></button>
                                </div>
                            </div>
                        </div>
                 {!! Form::close() !!}
                 </div>
            </div>
            <div class="col-md-5 col-lg-4 m-15px-tb">
                <div class="contact-name">
                    <h5>Email</h5>
                    <p>{{getSetting()->site_email}}</p>
                </div>
                <div class="contact-name">
                    <h5>Téléphone</h5>
                    <p>{{getSetting()->site_phone}}</p>
                </div>
               
            </div>
        </div>
    </div>
</section>

@endsection
@section('footer')

@endsection
