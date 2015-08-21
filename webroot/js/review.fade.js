$("#thereview").fadeOut(function() {
  $(this).text('"Cutting edge services and technology."').fadeIn(4000);
  $(this).text('"Cutting edge services and technology."').fadeOut(2000, next1);
});

function next1(){
  $("#thereview").text('"We have always had pleasant experiences with all of the CCT employees that we have encountered."').fadeIn(4000);
  $("#thereview").text('"We have always had pleasant experiences with all of the CCT employees that we have encountered."').fadeOut(2000, next2);
};

function next2(){
  $("#thereview").text('"The technician that installed our internet was terrific."').fadeIn(4000);
  $("#thereview").text('"The technician that installed our internet was terrific."').fadeOut(2000, next3);
};

function next3(){
  $("#thereview").text('"Overall happy with the service so far..."').fadeIn(4000);
  $("#thereview").text('"Overall happy with the service so far..."').fadeOut(2000, next4);
};

function next4(){
  $("#thereview").text('"Staff has been extremely polite."').fadeIn(4000);
  $("#thereview").text('"Staff has been extremely polite."').fadeOut(2000, next5);
};

function next5(){
  $("#thereview").text('"The technicians are always nice and knowledgeable."').fadeIn(4000);
  $("#thereview").text('"The technicians are always nice and knowledgeable."').fadeOut(2000, next6);
};

function next6(){
  $("#thereview").text('"Customer service is always friendly."').fadeIn(4000);
  $("#thereview").text('"Customer service is always friendly."').fadeOut(2000, next7);
};

function next7(){
  $("#thereview").text('"Everything is great so far. Good service and pleasantly surprised with the speeds."').fadeIn(4000);
  $("#thereview").text('"Everything is great so far. Good service and pleasantly surprised with the speeds."').fadeOut(2000, next8);
};

function next8(){
  $("#thereview").text('"Service technicians are always nice while they are here."').fadeIn(4000);
  $("#thereview").text('"Service technicians are always nice while they are here."').fadeOut(2000, next9);
};

function next9(){
  $("#thereview").text('"Shari has been excellent to work with."').fadeIn(4000);
  $("#thereview").text('"Shari has been excellent to work with."').fadeOut(2000, next10);
};

function next10(){
  $("#thereview").text('"Lucas was very helpful, and got the job done. He kept in communication with me very well."').fadeIn(4000);
  $("#thereview").text('"Lucas was very helpful, and got the job done. He kept in communication with me very well."').fadeOut(2000, next11);
};

function next11(){
  $("#thereview").text('"I can always depend on Crystal Clear to respond quickly with personable, knowledgeable personnel who solve my problem. THANKS SO MUCH."').fadeIn(4000);
  $("#thereview").text('"I can always depend on Crystal Clear to respond quickly with personable, knowledgeable personnel who solve my problem. THANKS SO MUCH."').fadeOut(2000, next12);
};

function next12(){
  $("#thereview").text('"Shari was very helpful and professional."').fadeIn(4000);
  $("#thereview").text('"Shari was very helpful and professional."').fadeOut(2000, next13);
};

function next13(){
  $("#thereview").text('"I\'m pleased that I receive the support and technical help from Crystal Clear."').fadeIn(4000);
  $("#thereview").text('"I\'m pleased that I receive the support and technical help from Crystal Clear."').fadeOut(2000, next14);
};

function next14(){
  $("#thereview").text('"I would like to say that the service that Kara provided me was above and beyond. She went above and beyond to do the right thing. I give her and Crystal Clear the upmost respect and praise. She did incredible and if I have any other issues, I feel that she would handle them appropriately."').fadeIn(4000);
  $("#thereview").text('"I would like to say that the service that Kara provided me was above and beyond. She went above and beyond to do the right thing. I give her and Crystal Clear the upmost respect and praise. She did incredible and if I have any other issues, I feel that she would handle them appropriately."').fadeOut(2000, next15);
};

function next15(){
  $("#thereview").text('"The person who called was nice and helpful. My issue was resolved. Thank you!"').fadeIn(4000);
  $("#thereview").text('"The person who called was nice and helpful. My issue was resolved. Thank you!"').fadeOut(2000, recurse);
};

function recurse(){
    $("#thereview").fadeOut(function() {
      $(this).text('"Cutting edge services and technology."').fadeIn(4000);
      $(this).text('"Cutting edge services and technology."').fadeOut(2000, next1);
    });
};
