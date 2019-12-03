<?php
session_start();
    require "../Data Initialization/config.php";
    require "../Data Initialization/common.php";
$fullName = $_POST["stockName"];

function changeTicker($fullName) {
    $isTicker = false;
    $ticker = array();
    $len = strlen($fullName);
    for($i = 0; $i < $len; $i++){
        if($fullName[$i]== "("){
            $isTicker = true;
        }
        else if($isTicker ==true){
            if($fullName[$i]==")"){
                $newTicker = join("",$ticker);
                return $newTicker;
            }
            else{
                array_push($ticker, $fullName[$i]);
            }
        }
    }
};

$tickerToAdd = changeTicker($fullName);

$availableTickers =     
    [
"AAPL","AA","ABBV","ABC","ABT","ACE","ACN","AGN","ADBE","ADI","ADM","ADP","ADS","ADSK","ADT","AEE","AEP","AES","AET","AFL","AIG","AIV","AIZ","AKAM","ALL","ALLE","ALTR","ALXN","AMAT","AME","AMGN","AMP","AMT","AMZN","A","AN","AON","APA","APC","APD","APH","ARG","ATI","AVB","AVP","AVY","AXP","AZO","BA","BAC","BAX","BBBY","BBT","BBY","BCR","BDX","BEAM","BEN","BF_B","BHI","BIIB","BK","BLK","BLL","BMS","BMY","BRCM","BRK_B","BSX","BTU","BWA","BXP","C","CA","CAG","CAH","CAM","CAT","CB","CBG","CBS","CCE","CCI","CCL","CELG","CERN","CF","CFN","CHK","CHRW","CI","CINF","CL","CLF","CLX","CMA","CMCSA","CME","CMG","CMI","CMS","CNP","CNX","COF","COG","COH","COL","COP","COST","COV","CPB","CRM","CSC","CSCO","CSX","CTAS","CTL","CTSH","CTXS","CVC","CVS","CVX","D","DAL","DD","DE","DFS","DG","DGX","DHI","DHR","DIS","DISCA","DLPH","DLTR","DNB","DNR","DO","DOV","DOW","DPS","DRI","DTE","DTV","DUK","DVA","DVN","EA","EBAY","ECL","ED","EFX","EIX","EL","EMC","EMN","EMR","EOG","EQR","EQT","ESRX","ESV","ETFC","ETN","ETR","EW","EXC","EXPD","EXPE","F","FAST","FB","FCX","FDO","FDX","FE","FFIV","FIS","FISV","FITB","FLIR","FLR","FLS","FMC","FOSL","FOXA","FRX","FSLR","FTI","FTR","GAS","GCI","GD","GE","GGP","GHC","GILD","GIS","GLW","GM","GME","GNW","GOOG","GPC","GPS","GRMN","GS","GT","GWW","HAL","HAR","HAS","HBAN","HCBK","HCN","HCP","HD","HES","HIG","HOG","HON","HOT","HP","HPQ","HRB","HRL","HRS","HSP","HST","HSY","HUM","IBM","ICE","IFF","IGT","INTC","INTU","IP","IPG","IR","IRM","ISRG","ITW","IVZ","JBL","JCI","JEC","JNJ","JNPR","JOY","JWN","K","KEY","KIM","KLAC","KMB","KMI","KMX","KO","KORS","KR","KRFT","KSS","KSU","L","LB","LEG","LEN","LH","LIFE","LLL","LLTC","LLY","LM","LMT","LNC","LO","LOW","LRCX","LSI","LUK","LUV","LYB","M","MA","MAC","MAR","MAS","MAT","MCD","MCHP","MCK","MCO","MDLZ","MDT","MET","MHFI","MHK","MJN","MKC","MMC","MMM","MNST","MO","MON","MOS","MPC","MRK","MRO","MS","MSFT","MSI","MTB","MU","MUR","MWV","MYL","NBL","NBR","NDAQ","NE","NEE","NEM","NFLX","NFX","NI","NKE","NLSN","NOC","NOV","NRG","NSC","NTAP","NTRS","NU","NUE","NVDA","NWL","NWSA","OI","OKE","OMC","ORCL","ORLY","OXY","PAYX","PBCT","PBI","PCAR","PCG","PCL","PCLN","PCP","PDCO","PEG","PEP","PETM","PFE","PFG","PG","PH","PHM","PKI","PLD","PLL","PM","PNC","PNR","PNW","POM",
                     "PPG","PPL","PRGO","PRU","PSA","PSX","PVH","PWR","PX","PXD","QCOM","QEP","R","RAI","RDC","REGN","RF","RHI","RHT","RIG","RL","ROK","ROP","ROST","RRC","RSG","RTN","SBUX","SCG","SCHW","SE","SEE","SHW","SIAL","SJM","SLB","SLM","SNA","SNDK","SNI","SO","SPG","SPLS","SRCL","SRE","STI","STJ","STT","STX","STZ","SWK","SWN","SWY","SYK","SYMC","SYY","T","TAP","TDC","TE","TEG","TEL","TGT","THC","TIF","TJX","TMK","TMO","TRIP","TROW","TRV","TSN","TSO","TSS","TWC","TWX","TXN","TXT","TYC","UNH","UNP","UPS","URBN","USB","UTX","V","VAR","VFC","VIAB","VLO","VMC","VNO","VRSN","VRTX","VTR","VZ","WAG","WAT","WDC","WEC","WFC","WFM","WHR","WIN","WLP","WM","WMB","WMT","WPX","WU","WY","WYN","WYNN","X","XEL","XL","XLNX","XOM","XRAY","XRX","XYL","YHOO","YUM","ZION","ZMH","ZTS","TSCO","FLWS","SRCE","FUBC","XXII","DDD","EGHT","AAON","AIR","AAN","ABAX","ANF","ABMD","ABM","AXAS","ACTG","ACHC","ACAD","AXDX","XLRN","ACCL","ANCX","ACCO","ARAY","ACW","ACRX","ACET","ACHN","ACIW","ACOR","ACFN","ATNM","ATVI","ATU","BIRT","AYI","ACXM","AE","ADUS","ADTN","AAP","ADES","AEIS","AMD","ADVS","ABCO","ACM","AEGR","AEGN","AEPI","AERI","ARX","ARO","AVAV","AMG","AFFX","AGCO","AGEN","AGYS","AGIO","AHC","AL","AIRM","ATSG","AYR","AKS","AKRX","ALG","ALK","AIN","AMRI","ALB","ALR","ALEX","ALCO","ALGN","ALIM","ALKS","Y","ALGT","ALE","AFOP","AIQ","AOI","LNT","ATK","ANV","AWH","ALSN","MDRX","AFAM","ALNY","ALJ","AOSL","ANR","ATEC","AAMC","ASPS","RESI","AIMC","AMAG","AMBC","AMBA","AMC","AMCX","ACO","DOX","AMED","AMNB","UHAL","AMRC","CRMT","AAL","APP","AXL","ACAS","AMZG","AEO","AEL","AFG","ANAT","APEI","ARII","ASEI","AMSWA","AWR","AMSC","AVD","AWK","AMWD","ABCB","AMSF","ATLO","FOLD","AMKR","AHS","AP","AMPE","AMSG","AFSI","AMRS","ANAC","ANAD","ALOG","ANDE","ANGI","ANGO","ANIP","ANIK","AXE","ANN","BNNY","ANSS","ATRS","AOL","APAGF","ATNY","APOG","APOL","AINV","AIT","AMCC","AAOI","AREX","ATR","WTR","ARSD","PETX","ARC","ARCW","ACGL","ACI","ACAT","ASC","ARNA","ARCC","AGX","AGII","ARIA","ABFS","AI","AWI","ARQL","ARRY","ARRS","ARW","AROW","ARWR","ARTNA","ARTC","AJG","APAM","ARUN","ABG","ASNA","ASCMA","ASH","AHL","AZPN","ASBC","AGO","ASTE","AF","ATRO","ATHN","AT","ATNI","AAWW","AFH","ATML","ATMI","ATO","ATRC","ATRI","ATW","ADNC","ASPX","AUXL","AVHI","AVGO","AVNR","AVEO","AVG","AVNW","AVID","CAR","AVA","AVT","AVX","ACLS","AXLL","AXS","AZZ","BGS","BEAV","BWC","BMI","BCPC","BWINB","BYI","BALT","BANC","BANF","BLX","TBBK","BXS","BKMU","BOH","BKYF","BMRC","OZRK","BFIN","RATE","BKU","BANR","BHB","BKS","B","CUDA","BBSI","DFZ","BAS","BSET","BV","BBCN","BBX","BECN","BBGI","BZH","BEBE","BELFB","BDC","BHE","BNCL","BNFT","BERY","BGCP","BHLB","BGFV","BIG","BH","BBG","BPTH","BIO","BRLI","BCRX","BDSI","BIOL","BMRN","BIOS","BSTC","BEAT","BTX","BJRI","BBOX","BDE","BKH","BLKB","HAWK","BKCC","BLMN","BLT","BCOR","NILE","BLUE","BXC","BTH","BNCN","BOBE","BODY","BOFI","WIFI","BCC","BOKF","BOLT","BONT","BCEI","BAH","SAM","BPFH","EPAY","BDBD","BYD","BPZ","BRC","BBRG","BDGE","BBNK","BPI","BGG","BFAM","BCOV","BCO","EAT","BRS","BR","BSFT","BRCD","BKD","BRKL","BRKS","BRO","BWS","BRKR","BC","BMTC","BKE","BWLD","BBW","BLDR","BG","BKW","BURL","CFFI","CJES","CAB","CBT","CCMP","CACI","CDNS","CACQ","CZR","CAP","DVR","CALM","CLMS","CAMP","CVGW","CCC","CFNB","CWT","CALX","ELY","CALD","CPE","CPN","CBM","CAC","CMN","CPLA","CBF","CCBG","CSU","CSWC","CSE","CFFN","CPST","CRR","CARB","CFNL","CSII","CATM","CRCM","CECO","CSL","CKEC","CRS","CSV","CRZO","TAST","CRI","CACB","CSCD","CWST","CASY","CSH","CASS","CAS","CTRX","CATY","CATO","CVCO","CAVM","CBEY","CBZ","CBOE","CDI","CECE","CGI","CE","CTIC","CLDX","ICEL","CEMP","CNC","CNBC","CSFL","CETV","CENTA","CPF","CENX","CNBKA","CVO","CPHD","CERS","CEVA","ECOM","CRL","GTLS","CHTR","CHFN","CCF","HELI","CHKP","CKP","CAKE","CHEF","CHGG","CHTP","CHE","CHFC","CCXI","CHMT","CHMG","LNG","CPK","CBI","CHS","PLCE","CMRX","CHDX","CQB","CHH","CBK","CHD","CHDN",
                     "CHUY","CBR","CIEN","CIFC","XEC","CBB","CIDM","CNK","CIR","CRUS","CIT","CTRN","CZNC","CIA","CHCO","CYN","CLC","CWEI","CLNE","CLH","CCO","CLFD","CLW","CNL","CSBK","CLD","CLVS","MYCC","CNA","CCNE","CNO","CIE","COBZ","COKE","CDE","CCOI","CGNX","CNS","COHR","COHU","CFX","CLCT","COLB","COLM","CMCO","CMCSK","FIX","CBSH","CMC","CVGI","CBU","CYH","CTBI","COB","CVLT","CMP","CPSI","CTG","CPWR","CIX","SCOR","CRK","CMTL","CNSI","CNW","CXO","CNQR","CNMD","CONN","CTWS","CNOB","CTO","CNSL","CWCO","CTCT","CPSS","TCS","MCF","CBPX","CLR","CTRL","CVG","CNVR","COO","CTB","CPS","CPA","CPRT","CORT","CORE","CLGX","COCO","CSOD","CNDO","CEB","CRRS","CRVL","CSGP","COTY","CRRC","CVD","CVA","COVS","COWN","CRAI","CBRL","BREW","CR","CRAY","CACC","CREE","CROX","CCRN","CCK","CRWN","CRY","CSGS","CSS","CST","CTS","CUNB","CUB","CBST","CUI","CFR","CFI","CMLS","CRIS","CW","CUBI","CUTR","CVBF","CVT","CVI","CYNI","CYBX","CYNO","CY","CYT","CYTK","CYTX","CYTR","DJCO","DAKT","DAN","DAR","DTLK","DWSN","TRAK","DF","DECK","DFRG","DK","DGAS","DEL","DLX","DMD","DWRE","DNDN","DENN","DEPO","DSCI","DEST","DXLG","DV","DXM","DXCM","DLLR","DHT","DMND","DHIL","DRII","FANG","DHX","DRNA","DKS","DBD","DGII","DMRC","DRIV","DGI","DDS","DCOM","DIN","DIOD","DISCK","DISH","BAGR","DXYN","DLB","DPZ","UFS","DCI","DGICA","DRL","DORM","HILL","PLOW","DWA","DRC","DW","DRQ","DSPG","DST","DSW","DTSI","DCO","DNKN","DRTX","DXPE","DYAX","DY","BOOM","DVAX","DYN","EDIG","EOPN","EGBN","EXP","ELNK","EWBC","KODK","EV","EBIX","ECHO","SATS","EDMC","EGAN","EGLT","EHTH","BAGL","EE","ELRC","ESIO","EFII","EBIO","RDEN","ELLI","EMCI","EME","EOX","EBS","ESC","EDE","NYNY","EIG","ELX","ENTA","ECPG","WIRE","END","ENDP","ECYT","ELGX","EIGI","ENH","EGN","ENR","ERII","EXXI","ENOC","ENS","EGL","EBF","ENPH","NPO","ENSG","ESGR","ENTG","ETM","EBTC","EFSC","EVC","ENTR","ENV","EVHC","ENZ","ENZN","EPAM","EPIQ","EPZM","EPL","PLUS","EQU","EQIX","ERA","EAC","ERIE","EROS","ESBF","ESCA","ESE","ESPR","ESSA","ESNT","ESL","ETH","EEFT","EVER","EVR","RE","EVTC","EVRY","EPM","SSP","EXAS","EXAC","EXAM","EXAR","XCO","XLS","EXEL","EXLS","XONE","EXPO","EXPR","EXH","EXTR","EZPW","FN","FDS","FICO","FCS","FRP","FWM","DAVE","FARM","FFKT","FARO","FFG","FBRC","AGM","FSS","FDML","FII","FNHC","FEIC","FHCO","FOE","FCSC","FGL","FNF","LION","FDUS","FRGI","FSC","FNGN","FISI","FNSR","FINL","FAF","FNLC","FBP","FBNC","BUSE","FBIZ","FCFS","FCNCA","FCF","FCBC","FBNK","FDEF","FFBH","FFBC","THFF","SCBT","FFNW","FFIN","FHN","FIBK","FMD","FRME","FMBI","BGC","GNCMA","GFN","GMO","GCO","GWR","GNE","GNMK","GNCA","GHDX","G","GNTX","THRM","GTIV","GEOS","GABC","GERN","GFIG","ROCK","GIMO","GBCI","GLAD","GAIN","GLT","BRSS","GCA","ENT","GBLI","GPN","GLPW","GSOL","GSAT","GSM","GMED","GLUU","GNC","GOGO","GLNG","GORO","GBDC","GDP","GMAN","GRC","GPX","GGG","GTI","GHM","LOPE","GVA","GPK","GTN","GLDD","GXP","GSBC","GB","GDOT","GMCR","GPRE","GBX","GHL","GLRE","GEF","GRIF","GFF","GPI","GRPN","GSIG","GSIT","GSVC","GTAT","GTT","GTXI","GBNK","GES","GUID","GWRE","GIFI","GLF","GPOR","HEES","FUL","HCKT","HAE","HAIN","HK","HNRG","HALL","HALO","HMPR","HBHC","HNH","HBI","HGR","HAFC","HASI","THG","HRG","HDNG","HLIT","HSC","HHS","HBIO","HNR","HVT","HE","HA","HCOM","HWKN","HAYN","HCA","HCC","HCI","HW","HIIQ","HNT","HCSG","HLS","HSTM","HWAY","HTLD","HTLF","HPY","HTWR","HL","HEI","HSII","HELE","HLX","HMTV","HSIC","HLF","HERO","HTGC","HTBK","HFWA","HEOP","HCCI","MLHR","HRTX","HTZ","HXL","HF","HGG","HITK","HIBB","HTCO","ONE","HIL","HRC","HI","HSH","HTH","HIFS","HITT","HMSY","HNI","HFC","HOLX","HBCP","HOMB","HOME","HLSS","AWAY","HMST","HTBI","HOFT","HMN","HBNC","HZNP","HRZN","HOS","ZINC","HMHC","HWCC","HOV","HHC","HSNI","HUBG","HVB","JBHT","HII","HUN","HURC","HURN","HTCH","H","HPTX","HY","IACI","IBKC","ICFI","ICGE","ICON","ICUI","IDA","IDIX","IDRA","IEX","IDXX","IDT","IGTE","IG","IRG","IHS","IIVI","ILMN","IMN","IMMR","IMGN","IMMU","IPXL","IFT","IMPV","SAAS","INCY","IHC","IBCP","INDB","IBTX",
                     "INFN","INFI","IPCC","BLOX","INFA","III","VOYA","IMKTA","IM","INGR","INWK","IPHS","IOSP","ISSC","INGN","INO","IPHI","NSIT","INSM","NSP","IBP","IIIN","PODD","INSY","IART","IDTI","ISSI","IQNT","I","IPAR","IBKR","ININ","ICPT","IDCC","TILE","IMI","ITMN","INAP","IBOC","INTX","ISIL","IILG","IBCA","IVAC","INTL","IRF","ISH","ISCA","ITCI","IL","SNOW","IPI","XON","IVC","INVN","SNAK","ITG","ISBC","ITIC","IO","IPCM","IPGP","IRDM","IRBT","IRWD","ISIS","ISLE","ISRL","ITC","ITRI","ITT","ESI","XXIA","IXYS","JJSF","JCP","JCOM","JKHY","JACK","JAKK","JMBA","JNS","JAH","JDSU","JBLU","JGW","JIVE","JBSS","JBT","JOUT","JONE","JNY","JLL","JRN","TAX","LRN","KAI","KALU","KAMN","KCLI","KS","KAR","KPTI","KBH","KBR","KCG","KRNY","KELYA","KEM","KMPR","KMT","KW","KERX","KEG","KEYW","KFRC","KBALB","KIN","KND","KEX","KIRK","KMG","KNX","VLCCF","KNL","KOG","KFX","KOPN","KOP","KFY","KOS","KRA","KTOS","KKD","KRO","KVHI","KYTH","LLEN","LZB","LG","LADR","LTS","LBAI","LKFN","LAMR","LANC","LDR","LNDC","LSTR","LCI","LPI","LVS","LSCC","LAYN","LCNB","LDRH","LF","LEA","LEE","LDOS","LII","LVLT","LXRX","LXK","LGIH","LHCG","LBY","LBMH","LBTYA","LINTA","LMCA","LVNTA","LTM","LOCK","LPNT","LCUT","LFVN","LWAY","LGND","LLNW","LMNR","LINC","LECO","LNN","LNKD","LIOX","LGF","LQDT","LAD","LFUS","LYV","LPSN","LKQ","LMIA","LOGM","LORL","LPX","LPLA","LXU","LYTS","LTXC","LUB","LL","LMNX","LMOS","LXFT","LDL","MHO","MTSI","MCBC","MGNX","MSG","MGLN","CALL","MHR","MHLD","MAIN","MSFG","MBUU","MNK","MANH","MNTX","MTW","MN","MNKD","MAN","MANT","MCHX","MMI","MCS","MRIN","MPX","HZO","MKL","MKTX","MKTO","MRLN","VAC","MBII","MRTN","MSO","MLM","MRVL","MASI","DOOR","MTZ","MTDR","MTRN","MTRX","MATX","MATW","MFRM","MVNR","MXIM","MMS","MXL","MXWL","MBFI","MBI","MNI","MDR","MCGC","MGRC","MDC","MDCA","MDU","MIG","MEAS","TAXI","MDAS","MEG","MDCI","MDCO","MDSO","MED","MDVN","MCC","MD","MEIP","MW","MENT","MBWM","MBVT","MCY","MRCY","MDP","MRGE","VIVO","EBSB","MMSI","MTH","MTOR","MACK","MLAB","CASH","MEI","METR","MTD","MIL","MGEE","MTG","MGM","MCRL","MCRS","MSCC","MSTR","MBRG","MIDD","MSEX","MSL","MPO","MDW","MOFG","MM","MILL","MLR","MDXG","MSA","MTX","MRTX","MG","MIND","MITK","MKSI","MINI","MODN","MOD","MLNK","MOH","MCP","MNTA","MCRI","MGI","MPWR","TYPE","MNRO","MWW","MRH","MHGC","MORN","MOSY","MPAA","MOV","MOVE","MRC","MSM","MSCI","MTSC","MLI","MWA","LABL","MFLX","MGAM","MUSA","MVC","MWIV","MYE","MYRG","MYGN","NBTB","NC","NANO","NSPH","NSTG","NNVC","NASB","NATH","NBHC","NKSH","FIZZ","NCMI","NFG","NHC","NATI","NATL","NPK","NRCIA","NSM","NPBC","NWLI","NGS","NGVC","NATR","BABY","NLS","NAVB","NCI","NAVG","NNA","NM","NAV","NCS","NCR","NP","NKTR","NNI","NEOG","NEO","NEON","NPTN","NBS","NETE","NTGR","NTCT","N","CUR","NBIX","NSR","NWHM","NJR","NEWM","NMFC","NWY","NYCB","NYT","NBBC","NLNK","NEU","NR","NEWP","NWS","NEWS","NXST","NGPC","EGOV","NICK","NIHD","NMBL","NL","NMIH","NNBR","NDLS","NOR","NCFT","NAT","NDSN","NTK","NADL","NOG","NFBK","NRIM","NWBI","NWBO","NWN","NWPX","NWE","NCLH","NVAX","NPSP","NYLD","NTLS","NUS","NUAN","NMRX","NUTR","NTRI","NUVA","NES","NVEC","NVR",
                     "NXTM","OAS","OII","OCFC","OCLR","OCN","OMEX","ODP","OFG","OGE","OHRP","OIS","ODC","ODFL","OLBK","ONB","ORI","OLN","ZEUS","OMG","OFLX","OME","OMER","OABC","OCR","OMCL","OVTI","OMN","ASGN","ONNN","OGXI","OMED","ONTY","OGS","OB","OPEN","OPHT","OPK","OPLK","OPY","OSUR","ORBC","ORB","OWW","TIS","OREX","ONVO","OEH","ORN","ORIT","ORA","OFIX","OSK","OSIS","OSIR","OTTR","OUTR","OVAS","OSTK","OMI","OC","OXFD","OXM","PTSI","PACR","PACB","PCBK","PEIX","PPBI","PSUN","PCRX","PKG","PACW","PTIE","PLMT","PANW","P","PNRA","PHX","PTRY","PZZA","PZG","PRXL","PCYG","PKE","PRK","PSTB","PKOH","PKD","PRKR","PRE","PATK","PATR","PEGI","PTEN","PBF","PCCC","PCTI","PDCE","PDFS","PDLI","PGC","PEGA","PCO","PENX","PENN","PVA","PFLT","PNNT","PWOD","PFSI","PAG","PEBO","PFIS","PBY","PPHM","PSMI","PRFT","PFMT","PSEM","PERI","PTX","PERY","PETS","PQ","PGTI","PCYC","PMC","PHH","PHIIK","PNX","PHMD","PLAB","PICO","PNY","PIR","PIKE","PPC","PNK","PNFP","PF","PES","PJC","PLPM","PLT","PTP","PLXS","PLUG","PLXT","PGEM","PMCS","PMFG","PNM","PII","PLCM","POL","PPO","POOL","PLKI","BPOP","PRAA","POR","PTLA","POST","PBPB","POWL","POWI","PSIX","POWR","POZN","PFBC","PLPC","PGI","PBH","PRGX","PSMT","PRI","PRIM","PVTB","PRA","PKT","PFIE","PGNX","PRGS","PFPT","PRO","PSEC","PB","PL","PRTA","PRLB","PRSC","PROV","PFS","PTCT","PTGI","PBYI","PCYO","PZN","QADA","QGEN","QLIK","QLGC","QUAD","KWR","QLTY","QSII","QLYS","NX","QTM","STR","QCOR","QUIK","KWK","QDEL","ZQK","QNST","Q","RAX","RDN","ROIAK","RSH","RSYS","RDNT","RALY","RMBS","RPTP","RAVN","RJF","ROLL","RCAP","RMAX","RLOC","RDI","RLD","RNWK","RLGY","RP","RCPT","RRGB","RGDO","RGC","RBC","RM","RGS","RGLS","RGA","REIS","RS","RLYP","REMY","RNR","RNST","REGI","RCII","RTK","RENT","RGEN","RPRX","RJET","RBCAA","FRBK","RMD","REN","RFP","REXI","RECN","RH","SALE","RTRX","RVNC","REV","RVLT","REX","REXX","RXN","RFMD","RELL","RIGL","RNET","REI","RNG","RAD","RVBD","RLI","RRTS","RKT","FUEL","RCKB","RMTI","ROC","RSTI","ROG","ROL","ROSE","RST","RNDY","ROVI","RCL","RGLD","RES","RPM","RPXC","RRD","RSPP","RTI","RTIX","RBCN","RT","RKUS","RTEC","RUSHA","RUTH","RYL","STBA","SYBT","SB","SFE","SAFT","SGA","SGNT","SAIA","SALM","SLXP","SBH","SN","SAFM","SD","SASR","SGMO","SANM","SPNS","SAPE","SRPT","SBAC","SCSC","SGK","SCHN","SCHL","SHLM","SWM","SCLN","SAIC","SGMS","SQI","SALT","STNG","SMG","SEB","SEAC","SBCF","CKH","SDRL","SHLD","SHOS","SGEN","SEAS","SEIC","SCSS","SEM","SIGI","SEMG","SMTC","SENEA","SNMX","SXT","SQNM","SQBG","SCI","NOW","SREV","SFXE","SHEN","SHLO","SFL","SCVL","SHOR","SFLY","SSTK","BSRR","SIF","SIGA","SIGM","SBNY","SIG","SLGN","SGI","SIMG","SLAB","SSNI","SAMG","SFNC","SSD","SBGI","SIRI","SIRO","SIX","SZMK","SJW","SKX","SKH","SKUL","SKYW","SWKS","SM","SWHC","AOS","LNCE","SLRC","SUNS","SCTY","SWI","SZYM","SLH","SAH","SONC","SON","SONS","BID","SJI","SCCO","SBSI","OKSB","SWX","SP","CODE","LOV","SPAR","SPTN","SPA","SPNC","SPB","SPPI","SPDC","TRK","SPR","SAVE","SPLK","LEAF","S","SPSC","SPW","SSNC","JOE","STAA","SSI","STMP","SFG","SMP","SPF","SXI","STSI","STRZA","STFC","STBZ","STLD","SCS","SMRT","STNR","SCM","STML","SCL","STE","STL","STRL","STSA","SHOO","STC","SF","SWC","STCK","SGY","SGBK","SGM","SRI","SSYS","STRT","STRA","RGR","SCMP","SUBK","SNBC","SNHY","SXC","SUNE","SNSS","SPWR","SMCI","SPN","SUP","SUPN","SUPX",
                     "SVU","SPRT","SCAI","SRDX","SUSQ","SUSS","SIVB","SFY","SWFT","SWSH","SWS","SYKE","SYA","SMA","GEVA","SYNA","SNCR","SGYP","SYRG","SNX","SNPS","SNV","SNTA","SYNT","SYUT","SYX","TMUS","TGE","DATA","TAHO","TTWO","TAL","TLMR","TAM","TNDM","TNGO","TRGP","TRGT","TASR","TAYC","TMHC","TCB","TCPC","AMTD","TMH","TISI","TEAR","TECD","TECH","TTGT","TECUA","TK","TNK","TRC","TSYS","TDY","TFX","TNAV","TDS","TTEC","TPX","TNC","TEN","TER","TEX","TBNK","TSRO","TESO","TSLA","TESS","TSRA","TTEK","TTI","TTPH","TCBI","TXI","TXRH","TGH","TXTR","TFSL","TGTX","TXMD","THRX","THR","TPRE","TCRD","TRI","THO","THOR","THLD","TIBX","TICC","TDW","TTS","TLYS","TKR","TWI","TITN","TIVO","TOL","TMP","TR","TRNX","TTC","TWGP","TOWR","TW","TWER","CLUB","TOWN","TWMC","TAT","TDG","TZOO","TRR","TG","TREE","THS","TRMR","TREX","TPH","TCAP","TPLM","TCBK","TRS","TRMB","TRN","GTS","TQNT","TSC","TGI","TROX","TBI","TRLA","TRST","TRMK","TRW","TTMI","TUES","TUMI","TUP","TPC","TWTC","FOX","TWIN","TWTR","TYL","USPH","UBNT","UCP","UFPT","UGI","UIL","ULTA","ULTI","UCTT","UPL","RARE","ULTR","UTEK","UMBF","UMPQ","UA","UNXL","UFI","UNF","UNIS","UBSH","UIS","UNT","UBSI","UCBI","UCFC","UAL","UBNK","UFCS","UIHC","UNFI","UNTD","URI","USLM","USTR","UTHR","UTL","UAM","UVV","OLED","UEIC","UFPI","UHS","UVE","USAP","UTI","UACL","UVSP","UNS","UPIP","URG","UEC","URS","USM","USCR","ECOL","SLCA","USMO","USAK","USNA","USG","USMD","UTMD","UTIW","EGY","MTN","VRX","VR","VLY","VMI","VAL","VVTV","VNDA","VTG","VNTV","VDSI","VASC","WOOF","VGR","VVC","VECO","VRA","VCYT","VSTM","PAY","VRNT","VRSK","VTNR","VVI","VSAT","VIAS","VICL","VICR","VPFG","VLGEA","VNCE","VMEM","VHC","VRTS","VRTU","VSH","VPG","VPRT","VC","VITC","VSI","VTSS","VVUS","VMW","VCRA","VOCS","VOLC","VG","VOXX","VRNG","VSEC","WTI","WNC","WBC","WAB","WDR","WAGE","WD","WLT","WAC","WRES","WBCO","WAFD","WASH","WCN","WSBF",
                     "WSO","WTS","WPP","WCIC","WDFC","WWWW","WBMD","WBS","WTW","WMK","WCG","WEN","WERN","WSBC","WAIR","WCC","WTBA","WSTC","WMAR","WST","WABC","WR","WSTL","WAL","WNR","WFD","WLK","WLB","WHG","WTSL","WEX","WEYS","WGL","WTM","WHF","WWAV","WLL","WG","WLH","WSM","WIBC","WINA","WGO","WTFC","WETF","WIX","WWW","WWD","WDAY","WRLD","INT","WWE","WOR","WRB","GRA","WMGI","WSFS","XNCR","XNPT","XRM","XOXO","XOMA","XOOM","XPO","YDKN","YELP","YORW","YRCW","YUME","ZAGG","ZLC","ZAZA","ZBRA","ZLTQ","ZEP","Z","ZIOP","ZIXI","ZGNX","AKR","MITT","ADC","ALX","ARE","AAT","ACC","MTGE","AGNC","ARPI","AMRE","NLY","ANH","ARI","AMTG","ACRE","AHH","ARR","AHT","AEC","AVIV","BDN","CPT","CCG","CMO","CBL","CDR","CSG","CLDT","CHSP","CIM","CLNY","CWH","COR","OFC","CXW","CUZ","CRD_B","CUBE","CONE","CYS","DCT","DDR","DELL","DRH","DLR","DEI","DRE","DFT","DX","EGP","EDR","EPR","ELS","EQY","ESS","EXL","EXR","FRT","FCH","FR","FLIC","NBCB","FNFG","FPO","FRC","FSGI","SVVC","FMER","FIVE","FVE","FBC","FLT","FLTX","FLXS","FTK","FLO","FLDM","FFIC","FNB","FL","FCE_A","FST","FOR","FORM","FORR","FRF","FTNT","FBHS","FET","FWRD","FSTR","FXCB","FRAN","FC","FELE","FRNK","FSP","FRED","FSL","RAIL","FDP","TFM","FRO","FCN","FSYS","FCEL","FULT","FURX","FRM","FIO","FF","FXEN","FXCM","GK","GCAP","GALE","GBL","GARS","IT","GLOG","GST","GMT","GY","GNRC","GEO","GTY","GIII","GOOD","GRT","GOV","GPT","HTS","HR","HTA","HT","HIW","HME","HPT","HUB_B","HPP","IRC","IVR","IRET","LHO","LAZ","LXP","LTC","CLI","MPW","MFA","MNR","MOG_A","NHI","NRZ","NYMT","OHI","OLP","PKY","PEB","PEI","PMT","PDM","PPS","PCH","PSB","RAS","RPT","RYN","O","RWT","RSO","ROIC","RLJ","RSE","RHP","SBRA","BFS","SIR","SNH","SBY","SLG","SSS","STAG","STWD","BEE","INN","SUI","SHO","SKT","TCO","TRNO","TWO","UDR","UMH","UHT","UBA","WRE","WRI","WMC","WSR","JW_A","FUR","ZUMZ","ZIGO","ZNGA","GOOGL","KRC","KRG","NAVI","BRK_A","HIVE","AKAO","ADMS","TWOU",
                     "AKBA","ALDR","AMBR","HCT","AGTC","ARCB","AHP","BRDR","CARA","CTRE","CSLT","CTT","CVEO","CORR","COUP","LPG","ESRT","ENVE","EVDY","FPRX","FIVN","FMI","FLXN","FOXF","FTD","GAIA","GALT","GLRI","GRUB","HRTG","STAR","KTWO","LQ","LE","MC","NGHC","NYRT","OPWR","OPB","ORM","FRSH","PAYC","PE","PCTY","PAHC","DOC","QTWO","QTS","QRHC","REXR","RUBI","SFBS","SPWH","SQBK","SWAY","TBPH","TIME","TIPT","TSRE","TREC","TRXC","TNET","TRIV","TRUE","HEAR","VRNS","VSAR","VTL","XCRA","ZEN","ZOES","ATEN","GOLD","VOD","BIDU","APL","REG","BMR","BRT","RPAI","ANTM","WBA","BP","ES","SUN","QRVO","JPM","UNM","PGR","TGNA","ZBH","BXLT","CPGX","PYPL","KHC","WRK","HPE","SYF","CSRA","WLTW","CFG","GSBD","SPGI","FTV","UA_C","ARNC"

    
];
$exists = false;
foreach($availableTickers as $value){
    if($tickerToAdd == $value){
        $exists = true;
    }
}

if($exists){
try {
    $connection = new PDO($dsn, $username, $password, $options);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    $checkStock = "SELECT ticker, amtOfStock FROM stocks WHERE portfolio_id =:currentPortId";
    $checkStock = $connection->prepare($checkStock);
    $checkStock->execute(['currentPortId'=>$_SESSION['currentPortId']]);
    $checkStock = $checkStock->fetchAll();
    $checkStock = array_values($checkStock);
    foreach($checkStock as $value){
        if($value[0] == $tickerToAdd){
            $sql = "UPDATE stocks set amtOfStock = amtOfStock +:amt WHERE ticker=:ticker AND portfolio_id=:currentPortId";
            $stmt = $connection->prepare($sql);
                $data2 = [
        'amt' => $_POST['amt'],
                    'ticker'=> $tickerToAdd,
                    'currentPortId'=>$_SESSION['currentPortId'],
];
            $stmt->execute($data2);
            
            $sql = 'SELECT amtOfStock FROM stocks WHERE ticker=:ticker AND portfolio_id=:currentPortId';
            $stmt = $connection->prepare($sql);
            
                            $data2 = [
                    'ticker'=> $tickerToAdd,
                    'currentPortId'=>$_SESSION['currentPortId'],
];
            
            
            $stmt->execute($data2);
            $stmt->setFetchMode(PDO::FETCH_NUM);
            $amt = $stmt->fetch()[0];
            if($amt <= 0){
                $_SESSION['nameOfTicker'] = $tickerToAdd;
                header("Location: ../Delete/removeStock.php");
                exit;
            }
                header("Location: ../Graphs and Analytics/".$_SESSION['graphCameFrom']);
                exit;
        }
    }


    
    $sql = "INSERT INTO stocks (ticker,portfolio_id, amtOfStock) VALUES (:ticker,:currentPortId,:amt)";
    $stmt = $connection->prepare($sql);
    
    $data2 = [
    'ticker' => $tickerToAdd,
    'currentPortId' => $_SESSION['currentPortId'],
        'amt' => $_POST['amt'],
];
    
    $stmt->execute($data2);
    header("Location: ../Graphs and Analytics/".$_SESSION['graphCameFrom']);
    exit;

}
    catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

}
else{
    $_SESSION['tickerReport'] = "Asset or ticker could not be found. Please type your ticker surrounded by () in all capital letters [such as '(AMZN)' for Amazon], or let the search bar autocomplete the name of asset you wish to add.";
        header("Location: ../Graphs and Analytics/".$_SESSION['graphCameFrom']);
    exit;
}


?>
