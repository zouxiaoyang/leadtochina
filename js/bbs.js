


function setFocus(i)
{
 
 selectLayer1(i);

}
function selectLayer1(i)
{
 switch(i)
 {
 case 1:
document.getElementById("bbs_s1").style.display="block";
document.getElementById("bbs_s2").style.display="none";
document.getElementById("bbs_s3").style.display="none";
document.getElementById("bbs_s4").style.display="none";
document.getElementById("bbs_s5").style.display="none";
document.getElementById("bbs_s6").style.display="none";
 break;
case 2:
document.getElementById("bbs_s1").style.display="none";
document.getElementById("bbs_s2").style.display="block";
document.getElementById("bbs_s3").style.display="none";
document.getElementById("bbs_s4").style.display="none";
document.getElementById("bbs_s5").style.display="none";
document.getElementById("bbs_s6").style.display="none";
 break;
 case 3:
document.getElementById("bbs_s1").style.display="none";
document.getElementById("bbs_s2").style.display="none";
document.getElementById("bbs_s3").style.display="block";
document.getElementById("bbs_s4").style.display="none";
document.getElementById("bbs_s5").style.display="none";
document.getElementById("bbs_s6").style.display="none";
 break;
  case 4:
document.getElementById("bbs_s1").style.display="none";
document.getElementById("bbs_s2").style.display="none";
document.getElementById("bbs_s3").style.display="none";
document.getElementById("bbs_s4").style.display="block";
document.getElementById("bbs_s5").style.display="none";
document.getElementById("bbs_s6").style.display="none";
 break;
  case 5:
document.getElementById("bbs_s1").style.display="none";
document.getElementById("bbs_s2").style.display="none";
document.getElementById("bbs_s3").style.display="none";
document.getElementById("bbs_s4").style.display="none";
document.getElementById("bbs_s5").style.display="block";
document.getElementById("bbs_s6").style.display="none";
 break;
  case 6:
document.getElementById("bbs_s1").style.display="none";
document.getElementById("bbs_s2").style.display="none";
document.getElementById("bbs_s3").style.display="none";
document.getElementById("bbs_s4").style.display="none";
document.getElementById("bbs_s5").style.display="none";
document.getElementById("bbs_s6").style.display="block";
 break;
 }
}
