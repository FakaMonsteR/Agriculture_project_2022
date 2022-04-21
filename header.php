<!-- ----Header---- -->
<nav class="navbarHeader">

    <div class="header-image">
        <img src="images/logo.png" alt="agri-img" srcset="">
    </div>

    <a href="#" class="navbarToggleButton">
        <span class="bars"></span>
        <span class="bars"></span>
        <span class="bars"></span>
    </a>
    <div class="navbarItems">
        <a class="navLink" href="index.php">Home</a>
        <div class="navDropdown" data-dropdown>
            <button class="navLink academics-dd" data-dropdown-button>Academics<sup>+</sup></span></button>
            <div class="dropdown-menu ">
                <div>
                    <div class="dropdown-heading">Informations</div>
                    <div class="dropdown-links">
                        <a href="./viewstd.php" class="navLink">Students</a>
                        <a href="./viewfac.php" class="navLink">Faculty</a>
                        <a href="./viewalumni.php" class="navLink">Alumni</a>
                    </div>
                </div>
            </div>
        </div>

        <a class="navLink" href="./c.html">Contact Us</a>
        <a class="navLink" href="#">About Us</a>

        <div class="navDropdown" data-dropdown>
            <button class="navLink account-dd" data-dropdown-button>Account<sup>+</sup></span></button>
            <div class="dropdown-menu information-grid">
                <!-- <div>
                    <div class="dropdown-heading">Admin</div>
                    <div class="dropdown-links">

                    </div>
                </div> -->
                <div>
                    <div class="dropdown-heading">Alumni</div>
                    <div class="dropdown-links">
                        <a href="./alumnireg.php" class="navLink">Register</a>
                        <a href="./alumnilogin.php" class="navLink">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navDropdown" data-dropdown>
            <button class="navLink" data-dropdown-button>Admin Login<sup>+</sup></span></button>
            <div class="dropdown-menu admin-login">
                <form action="adminlogin1.php" method="POST" class="login-form">
                    <label for="username">Username:</label>
                    <input type="text" name="uname" id="name" required>
                    <label for="password">Password:</label>
                    <input type="password" name="pswd" id="pswd" required>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
 </nav>

 


 <!-- <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 500" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
     <style>
         .path-0 {
             animation: pathAnim-0 4s;
             animation-timing-function: linear;
             animation-iteration-count: infinite;
         }

         @keyframes pathAnim-0 {
             0% {
                 d: path("M 0,500 C 0,500 0,166 0,166 C 19.238181553225154,158.03878933909039 38.47636310645031,150.07757867818077 63,167 C 87.52363689354969,183.92242132181923 117.33272912742396,225.7284746263673 142,217 C 166.66727087257604,208.2715253736327 186.1927203838539,149.00852281635005 212,136 C 237.8072796161461,122.99147718364995 269.89638933716043,156.23743410823246 291,172 C 312.10361066283957,187.76256589176754 322.22172226750445,186.0417407507201 348,177 C 373.77827773249555,167.9582592492799 415.2167215928217,151.59560288888724 445,154 C 474.7832784071783,156.40439711111276 492.91139136120864,177.57584769373094 511,184 C 529.0886086387914,190.42415230626906 547.1377129623435,182.10100633618902 568,188 C 588.8622870376565,193.89899366381098 612.5377567894175,214.02012696151303 640,216 C 667.4622432105825,217.97987303848697 698.7112598799863,201.81848581775887 722,182 C 745.2887401200137,162.18151418224113 760.6172036906374,138.70592976745152 786,146 C 811.3827963093626,153.29407023254848 846.8199253574642,191.35779511243507 876,182 C 905.1800746425358,172.64220488756493 928.103094879506,115.86288978280825 946,122 C 963.896905120494,128.13711021719175 976.7676951245115,197.190645756332 999,190 C 1021.2323048754885,182.809354243668 1052.8261246224474,99.37452719186366 1078,106 C 1103.1738753775526,112.62547280813634 1121.9278063856977,209.31124547621332 1144,214 C 1166.0721936143023,218.68875452378668 1191.4626498347614,131.38049090328303 1220,109 C 1248.5373501652386,86.61950909671698 1280.2215942752566,129.16679091065456 1305,138 C 1329.7784057247434,146.83320908934544 1347.6509730642124,121.95234545409869 1369,121 C 1390.3490269357876,120.04765454590131 1415.1745134678938,143.02382727295065 1440,166 C 1440,166 1440,500 1440,500 Z");
             }

             25% {
                 d: path("M 0,500 C 0,500 0,166 0,166 C 28.28926238645993,146.36727960072625 56.57852477291986,126.73455920145247 82,124 C 107.42147522708014,121.26544079854753 129.9751632947805,135.42904279491637 151,141 C 172.0248367052195,146.57095720508363 191.5208220479582,143.54926961888202 215,140 C 238.4791779520418,136.45073038111798 265.94154851338675,132.3738787295556 287,141 C 308.05845148661325,149.6261212704444 322.7129838984947,170.9552154628956 350,166 C 377.2870161015053,161.0447845371044 417.20651589263434,129.80525941886194 445,131 C 472.79348410736566,132.19474058113806 488.4609525309679,165.82374686165662 509,175 C 529.5390474690321,184.17625313834338 554.9496739834942,168.89975313451154 577,154 C 599.0503260165058,139.10024686548846 617.7403515350551,124.57724060029713 642,131 C 666.2596484649449,137.42275939970287 696.0889198762853,164.79128446429988 724,183 C 751.9110801237147,201.20871553570012 777.9039689598035,210.25762154250333 800,212 C 822.0960310401965,213.74237845749667 840.295204284501,208.17822936568672 863,216 C 885.704795715499,223.82177063431328 912.915213902192,245.0294609947498 938,223 C 963.084786097808,200.9705390052502 986.043940106731,135.70392665531398 1013,143 C 1039.956059893269,150.29607334468602 1070.9090256708832,230.15483238399435 1093,228 C 1115.0909743291168,225.84516761600565 1128.3199572097358,141.6767438087087 1150,125 C 1171.6800427902642,108.3232561912913 1201.8111454901739,159.13819238117085 1223,169 C 1244.1888545098261,178.86180761882915 1256.4354608295687,147.77048666660787 1282,131 C 1307.5645391704313,114.22951333339213 1346.4470111915516,111.77986095239774 1375,120 C 1403.5529888084484,128.22013904760226 1421.7764944042242,147.11006952380114 1440,166 C 1440,166 1440,500 1440,500 Z");
             }

             50% {
                 d: path("M 0,500 C 0,500 0,166 0,166 C 18.859936694011942,153.95811974443677 37.719873388023885,141.91623948887354 65,146 C 92.28012661197612,150.08376051112646 127.9804431419164,170.29316178894254 156,164 C 184.0195568580836,157.70683821105746 204.35835404431057,124.91111335535628 225,120 C 245.64164595568943,115.08888664464372 266.58614068084137,138.0623847896323 289,141 C 311.41385931915863,143.9376152103677 335.29708323232387,126.83934748611452 357,146 C 378.70291676767613,165.16065251388548 398.2255263898633,220.58022526590955 423,216 C 447.7744736101367,211.41977473409045 477.80081120822274,146.83975145024726 507,137 C 536.1991887917773,127.16024854975272 564.5712287772459,172.06076893310134 586,192 C 607.4287712227541,211.93923106689866 621.9142736827935,206.9171728173472 644,216 C 666.0857263172065,225.0828271826528 695.7716764915805,248.27053979750985 719,225 C 742.2283235084195,201.72946020249015 758.9990203508845,132.00066799261344 784,107 C 809.0009796491155,81.99933200738657 842.2322421048816,101.72678823203645 872,118 C 901.7677578951184,134.27321176796355 928.0720112295896,147.09217907924074 948,170 C 967.9279887704104,192.90782092075926 981.4797129767601,225.9044954510007 1000,224 C 1018.5202870232399,222.0955045489993 1042.0091368633698,185.28983911675627 1066,184 C 1089.9908631366302,182.71016088324373 1114.48373956976,216.93614808197412 1140,210 C 1165.51626043024,203.06385191802588 1192.05590485759,154.96556855534715 1217,134 C 1241.94409514241,113.03443144465285 1265.2926409998797,119.20157769663729 1288,129 C 1310.7073590001203,138.7984223033627 1332.7735311428912,152.22812065810362 1358,159 C 1383.2264688571088,165.77187934189638 1411.6132344285543,165.88593967094818 1440,166 C 1440,166 1440,500 1440,500 Z");
             }

             75% {
                 d: path("M 0,500 C 0,500 0,166 0,166 C 26.90795929279068,143.8438103104922 53.81591858558136,121.68762062098435 76,132 C 98.18408141441864,142.31237937901565 115.64428495046522,185.0933278265547 138,178 C 160.35571504953478,170.9066721734453 187.60694161255776,113.93906807279674 212,120 C 236.39305838744224,126.06093192720326 257.9279485993037,195.15039988225828 281,217 C 304.0720514006963,238.84960011774172 328.68126399022736,213.45933239817023 355,211 C 381.31873600977264,208.54066760182977 409.346995439787,229.01227052506093 437,206 C 464.653004560213,182.98772947493907 491.9307542506243,116.49158550158612 514,115 C 536.0692457493757,113.50841449841388 552.9299875577159,177.0213874685946 575,190 C 597.0700124422841,202.9786125314054 624.3492955185119,165.42286462403536 648,162 C 671.6507044814881,158.57713537596464 691.672830368236,189.28715403526394 717,211 C 742.327169631764,232.71284596473606 772.959383008544,245.42851923490883 798,214 C 823.040616991456,182.57148076509117 842.4896375975882,106.99876902510069 866,105 C 889.5103624024118,103.00123097489931 917.0820666011034,174.57640466468845 938,187 C 958.9179333988966,199.42359533531155 973.1820959979984,152.69561231614557 995,131 C 1016.8179040020016,109.30438768385444 1046.189549406902,112.64114607072932 1073,135 C 1099.810450593098,157.35885392927068 1124.0597063743935,198.73980340093715 1149,213 C 1173.9402936256065,227.26019659906285 1199.5716250955234,214.399640325522 1226,195 C 1252.4283749044766,175.600359674478 1279.6537932435128,149.66163529697485 1301,137 C 1322.3462067564872,124.33836470302515 1337.813201930425,124.95381848657863 1360,132 C 1382.186798069575,139.04618151342137 1411.0933990347876,152.5230907567107 1440,166 C 1440,166 1440,500 1440,500 Z");
             }

             100% {
                 d: path("M 0,500 C 0,500 0,166 0,166 C 19.238181553225154,158.03878933909039 38.47636310645031,150.07757867818077 63,167 C 87.52363689354969,183.92242132181923 117.33272912742396,225.7284746263673 142,217 C 166.66727087257604,208.2715253736327 186.1927203838539,149.00852281635005 212,136 C 237.8072796161461,122.99147718364995 269.89638933716043,156.23743410823246 291,172 C 312.10361066283957,187.76256589176754 322.22172226750445,186.0417407507201 348,177 C 373.77827773249555,167.9582592492799 415.2167215928217,151.59560288888724 445,154 C 474.7832784071783,156.40439711111276 492.91139136120864,177.57584769373094 511,184 C 529.0886086387914,190.42415230626906 547.1377129623435,182.10100633618902 568,188 C 588.8622870376565,193.89899366381098 612.5377567894175,214.02012696151303 640,216 C 667.4622432105825,217.97987303848697 698.7112598799863,201.81848581775887 722,182 C 745.2887401200137,162.18151418224113 760.6172036906374,138.70592976745152 786,146 C 811.3827963093626,153.29407023254848 846.8199253574642,191.35779511243507 876,182 C 905.1800746425358,172.64220488756493 928.103094879506,115.86288978280825 946,122 C 963.896905120494,128.13711021719175 976.7676951245115,197.190645756332 999,190 C 1021.2323048754885,182.809354243668 1052.8261246224474,99.37452719186366 1078,106 C 1103.1738753775526,112.62547280813634 1121.9278063856977,209.31124547621332 1144,214 C 1166.0721936143023,218.68875452378668 1191.4626498347614,131.38049090328303 1220,109 C 1248.5373501652386,86.61950909671698 1280.2215942752566,129.16679091065456 1305,138 C 1329.7784057247434,146.83320908934544 1347.6509730642124,121.95234545409869 1369,121 C 1390.3490269357876,120.04765454590131 1415.1745134678938,143.02382727295065 1440,166 C 1440,166 1440,500 1440,500 Z");
             }
         }
     </style>
     <defs>
         <linearGradient id="gradient" x1="99%" y1="42%" x2="1%" y2="58%">
             <stop offset="5%" stop-color="#40499f88"></stop>
             <stop offset="95%" stop-color="#712e2e88"></stop>
         </linearGradient>
     </defs>
     <path d="M 0,500 C 0,500 0,166 0,166 C 19.238181553225154,158.03878933909039 38.47636310645031,150.07757867818077 63,167 C 87.52363689354969,183.92242132181923 117.33272912742396,225.7284746263673 142,217 C 166.66727087257604,208.2715253736327 186.1927203838539,149.00852281635005 212,136 C 237.8072796161461,122.99147718364995 269.89638933716043,156.23743410823246 291,172 C 312.10361066283957,187.76256589176754 322.22172226750445,186.0417407507201 348,177 C 373.77827773249555,167.9582592492799 415.2167215928217,151.59560288888724 445,154 C 474.7832784071783,156.40439711111276 492.91139136120864,177.57584769373094 511,184 C 529.0886086387914,190.42415230626906 547.1377129623435,182.10100633618902 568,188 C 588.8622870376565,193.89899366381098 612.5377567894175,214.02012696151303 640,216 C 667.4622432105825,217.97987303848697 698.7112598799863,201.81848581775887 722,182 C 745.2887401200137,162.18151418224113 760.6172036906374,138.70592976745152 786,146 C 811.3827963093626,153.29407023254848 846.8199253574642,191.35779511243507 876,182 C 905.1800746425358,172.64220488756493 928.103094879506,115.86288978280825 946,122 C 963.896905120494,128.13711021719175 976.7676951245115,197.190645756332 999,190 C 1021.2323048754885,182.809354243668 1052.8261246224474,99.37452719186366 1078,106 C 1103.1738753775526,112.62547280813634 1121.9278063856977,209.31124547621332 1144,214 C 1166.0721936143023,218.68875452378668 1191.4626498347614,131.38049090328303 1220,109 C 1248.5373501652386,86.61950909671698 1280.2215942752566,129.16679091065456 1305,138 C 1329.7784057247434,146.83320908934544 1347.6509730642124,121.95234545409869 1369,121 C 1390.3490269357876,120.04765454590131 1415.1745134678938,143.02382727295065 1440,166 C 1440,166 1440,500 1440,500 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 250)"></path>
     <style>
         .path-1 {
             animation: pathAnim-1 4s;
             animation-timing-function: linear;
             animation-iteration-count: infinite;
         }

         @keyframes pathAnim-1 {
             0% {
                 d: path("M 0,500 C 0,500 0,333 0,333 C 19.209983528568337,369.8548614604446 38.419967057136674,406.70972292088925 61,384 C 83.58003294286333,361.29027707911075 109.5301153000216,279.01596977688774 136,279 C 162.4698846999784,278.98403022311226 189.45957174277692,361.2263979715599 214,366 C 238.54042825722308,370.7736020284401 260.6315977288707,298.07843833687264 287,287 C 313.3684022711293,275.92156166312736 344.0140373417403,326.45984868094956 368,353 C 391.9859626582597,379.54015131905044 409.3122529041682,382.0821669393292 431,390 C 452.6877470958318,397.9178330606708 478.7369510415872,411.21148356173353 505,393 C 531.2630489584128,374.78851643826647 557.7399429294829,325.07189881373677 582,302 C 606.2600570705171,278.92810118626323 628.3032772404807,282.5009211833194 654,298 C 679.6967227595193,313.4990788166806 709.0469481085939,340.9244164529858 728,344 C 746.9530518914061,347.0755835470142 755.5089303251434,325.80141300473747 780,324 C 804.4910696748566,322.19858699526253 844.9173305908321,339.86993152806446 872,352 C 899.0826694091679,364.13006847193554 912.8217473115282,370.71886088300465 936,354 C 959.1782526884718,337.28113911699535 991.7956801630555,297.2546249399168 1013,303 C 1034.2043198369445,308.7453750600832 1043.99553203625,360.26263935732794 1069,357 C 1094.00446796375,353.73736064267206 1134.2221916919439,295.69481763077124 1163,280 C 1191.7778083080561,264.30518236922876 1209.1157011959738,290.9580901195871 1229,291 C 1248.8842988040262,291.0419098804129 1271.315003524161,264.4728218908804 1298,282 C 1324.684996475839,299.5271781091196 1355.6242847073825,361.15062231689126 1380,377 C 1404.3757152926175,392.84937768310874 1422.1878576463087,362.92468884155437 1440,333 C 1440,333 1440,500 1440,500 Z");
             }

             25% {
                 d: path("M 0,500 C 0,500 0,333 0,333 C 20.018074637359213,355.0804231053772 40.036149274718426,377.16084621075436 62,388 C 83.96385072528157,398.83915378924564 107.87347753848556,398.4370382623597 134,375 C 160.12652246151444,351.5629617376403 188.46994057133932,305.0910007398068 218,291 C 247.53005942866068,276.9089992601932 278.2467601761571,295.19895877841293 301,326 C 323.7532398238429,356.80104122158707 338.5430187240319,400.1131641465416 357,382 C 375.4569812759681,363.8868358534584 397.5811649277151,284.3483846354208 425,276 C 452.4188350722849,267.6516153645792 485.13232156510776,330.49329731177517 508,358 C 530.8676784348922,385.50670268822483 543.8895488118536,377.6784261174786 570,371 C 596.1104511881464,364.3215738825214 635.3094831874778,358.79299821831074 659,348 C 682.6905168125222,337.20700178168926 690.8725184382353,321.1495810092786 713,302 C 735.1274815617647,282.8504189907214 771.2004430595812,260.6086777445749 797,275 C 822.7995569404188,289.3913222554251 838.3257093234395,340.4157080124218 862,355 C 885.6742906765605,369.5842919875782 917.496719646661,347.72849020573784 941,342 C 964.503280353339,336.27150979426216 979.6874120899168,346.6703311646267 1001,353 C 1022.3125879100832,359.3296688353733 1049.7536319936714,361.5901851357551 1075,352 C 1100.2463680063286,342.4098148642449 1123.2980599353973,320.9689282923529 1150,329 C 1176.7019400646027,337.0310717076471 1207.0541282647387,374.5341016948332 1233,361 C 1258.9458717352613,347.4658983051668 1280.4854270056471,282.89466492831417 1302,286 C 1323.5145729943529,289.10533507168583 1345.0041637126722,359.8872385919102 1368,379 C 1390.9958362873278,398.1127614080898 1415.4979181436638,365.5563807040449 1440,333 C 1440,333 1440,500 1440,500 Z");
             }

             50% {
                 d: path("M 0,500 C 0,500 0,333 0,333 C 25.724594495351695,345.1252382520769 51.44918899070339,357.2504765041538 74,343 C 96.55081100929661,328.7495234958462 115.92783853253815,288.1233322354617 143,279 C 170.07216146746185,269.8766677645383 204.83945687914397,292.25619455399953 227,311 C 249.16054312085603,329.74380544600047 258.71433395088604,344.8518895485402 282,351 C 305.28566604911396,357.1481104514598 342.30320731731166,354.33624725183944 370,352 C 397.69679268268834,349.66375274816056 416.0728367798674,347.8031214441022 437,340 C 457.9271632201326,332.1968785558978 481.4054455632188,318.45126697175164 504,318 C 526.5945544367812,317.54873302824836 548.305380967258,330.3918106688914 571,330 C 593.694619032742,329.6081893311086 617.3730305677497,315.9814903526825 640,321 C 662.6269694322503,326.0185096473175 684.2024967617435,349.6822279203786 712,339 C 739.7975032382565,328.3177720796214 773.8169823852759,283.2895979658033 802,297 C 830.1830176147241,310.7104020341967 852.5295736971531,383.1593802164082 874,388 C 895.4704263028469,392.8406197835918 916.0647228261124,330.0728811685641 942,328 C 967.9352771738876,325.9271188314359 999.2115349983976,384.54909510933555 1019,383 C 1038.7884650016024,381.45090489066445 1047.0891371802963,319.73073839409363 1072,293 C 1096.9108628197037,266.26926160590637 1138.431916280418,274.52795131428985 1164,291 C 1189.568083719582,307.47204868571015 1199.1831976980325,332.1574563487471 1219,324 C 1238.8168023019675,315.8425436512529 1268.8352929274527,274.8422232907219 1296,278 C 1323.1647070725473,281.1577767092781 1347.4756305921562,328.4736504883652 1371,345 C 1394.5243694078438,361.5263495116348 1417.2621847039218,347.26317475581743 1440,333 C 1440,333 1440,500 1440,500 Z");
             }

             75% {
                 d: path("M 0,500 C 0,500 0,333 0,333 C 15.13389025894643,330.9931514606393 30.26778051789286,328.98630292127865 59,320 C 87.73221948210714,311.01369707872135 130.06276818737499,295.04793977552487 154,319 C 177.93723181262501,342.95206022447513 183.48114673260713,406.82193797662205 206,392 C 228.51885326739287,377.17806202337795 268.01264488219664,283.6643083179869 299,279 C 329.98735511780336,274.3356916820131 352.46827373860646,358.52082875143014 373,366 C 393.53172626139354,373.47917124856986 412.11426016337765,304.25237667629244 430,286 C 447.88573983662235,267.74762332370756 465.0746856078829,300.4696645434002 491,331 C 516.9253143921171,361.5303354565998 551.5869974050905,389.8689651501068 581,365 C 610.4130025949095,340.1310348498932 634.5773247717547,262.05447485617253 657,272 C 679.4226752282453,281.94552514382747 700.1037035078907,379.9131354252029 723,387 C 745.8962964921093,394.0868645747971 771.0078611966823,310.2929834430159 793,285 C 814.9921388033177,259.7070165569841 833.8648517053801,292.91493080273364 859,309 C 884.1351482946199,325.08506919726636 915.532731981797,324.0472933460497 943,313 C 970.467268018203,301.9527066539503 994.004220367432,280.89589581306757 1019,297 C 1043.995779632568,313.10410418693243 1070.4503865484749,366.36912340167993 1090,379 C 1109.5496134515251,391.63087659832007 1122.1942334386683,363.6276105802128 1142,347 C 1161.8057665613317,330.3723894197872 1188.7726796968518,325.12043427746875 1219,337 C 1249.2273203031482,348.87956572253125 1282.7150477739244,377.89065230991224 1306,384 C 1329.2849522260756,390.10934769008776 1342.3671292074503,373.31695648288223 1363,361 C 1383.6328707925497,348.68304351711777 1411.8164353962748,340.8415217585589 1440,333 C 1440,333 1440,500 1440,500 Z");
             }

             100% {
                 d: path("M 0,500 C 0,500 0,333 0,333 C 19.209983528568337,369.8548614604446 38.419967057136674,406.70972292088925 61,384 C 83.58003294286333,361.29027707911075 109.5301153000216,279.01596977688774 136,279 C 162.4698846999784,278.98403022311226 189.45957174277692,361.2263979715599 214,366 C 238.54042825722308,370.7736020284401 260.6315977288707,298.07843833687264 287,287 C 313.3684022711293,275.92156166312736 344.0140373417403,326.45984868094956 368,353 C 391.9859626582597,379.54015131905044 409.3122529041682,382.0821669393292 431,390 C 452.6877470958318,397.9178330606708 478.7369510415872,411.21148356173353 505,393 C 531.2630489584128,374.78851643826647 557.7399429294829,325.07189881373677 582,302 C 606.2600570705171,278.92810118626323 628.3032772404807,282.5009211833194 654,298 C 679.6967227595193,313.4990788166806 709.0469481085939,340.9244164529858 728,344 C 746.9530518914061,347.0755835470142 755.5089303251434,325.80141300473747 780,324 C 804.4910696748566,322.19858699526253 844.9173305908321,339.86993152806446 872,352 C 899.0826694091679,364.13006847193554 912.8217473115282,370.71886088300465 936,354 C 959.1782526884718,337.28113911699535 991.7956801630555,297.2546249399168 1013,303 C 1034.2043198369445,308.7453750600832 1043.99553203625,360.26263935732794 1069,357 C 1094.00446796375,353.73736064267206 1134.2221916919439,295.69481763077124 1163,280 C 1191.7778083080561,264.30518236922876 1209.1157011959738,290.9580901195871 1229,291 C 1248.8842988040262,291.0419098804129 1271.315003524161,264.4728218908804 1298,282 C 1324.684996475839,299.5271781091196 1355.6242847073825,361.15062231689126 1380,377 C 1404.3757152926175,392.84937768310874 1422.1878576463087,362.92468884155437 1440,333 C 1440,333 1440,500 1440,500 Z");
             }
         }
     </style>
     <defs>
         <linearGradient id="gradient" x1="99%" y1="42%" x2="1%" y2="58%">
             <stop offset="5%" stop-color="#40499fff"></stop>
             <stop offset="95%" stop-color="#712e2eff"></stop>
         </linearGradient>
     </defs>
     <path d="M 0,500 C 0,500 0,333 0,333 C 19.209983528568337,369.8548614604446 38.419967057136674,406.70972292088925 61,384 C 83.58003294286333,361.29027707911075 109.5301153000216,279.01596977688774 136,279 C 162.4698846999784,278.98403022311226 189.45957174277692,361.2263979715599 214,366 C 238.54042825722308,370.7736020284401 260.6315977288707,298.07843833687264 287,287 C 313.3684022711293,275.92156166312736 344.0140373417403,326.45984868094956 368,353 C 391.9859626582597,379.54015131905044 409.3122529041682,382.0821669393292 431,390 C 452.6877470958318,397.9178330606708 478.7369510415872,411.21148356173353 505,393 C 531.2630489584128,374.78851643826647 557.7399429294829,325.07189881373677 582,302 C 606.2600570705171,278.92810118626323 628.3032772404807,282.5009211833194 654,298 C 679.6967227595193,313.4990788166806 709.0469481085939,340.9244164529858 728,344 C 746.9530518914061,347.0755835470142 755.5089303251434,325.80141300473747 780,324 C 804.4910696748566,322.19858699526253 844.9173305908321,339.86993152806446 872,352 C 899.0826694091679,364.13006847193554 912.8217473115282,370.71886088300465 936,354 C 959.1782526884718,337.28113911699535 991.7956801630555,297.2546249399168 1013,303 C 1034.2043198369445,308.7453750600832 1043.99553203625,360.26263935732794 1069,357 C 1094.00446796375,353.73736064267206 1134.2221916919439,295.69481763077124 1163,280 C 1191.7778083080561,264.30518236922876 1209.1157011959738,290.9580901195871 1229,291 C 1248.8842988040262,291.0419098804129 1271.315003524161,264.4728218908804 1298,282 C 1324.684996475839,299.5271781091196 1355.6242847073825,361.15062231689126 1380,377 C 1404.3757152926175,392.84937768310874 1422.1878576463087,362.92468884155437 1440,333 C 1440,333 1440,500 1440,500 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-300 ease-in-out delay-150 path-1" transform="rotate(-180 720 250)"></path>
 </svg> -->
 <!-- <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,600 C 0,600 0,300 0,300 C 169.19999999999993,345.3333333333333 338.39999999999986,390.66666666666663 502,403 C 665.6000000000001,415.33333333333337 823.6000000000001,394.6666666666667 979,372 C 1134.3999999999999,349.3333333333333 1287.1999999999998,324.66666666666663 1440,300 C 1440,300 1440,600 1440,600 Z" stroke="none" stroke-width="0" fill="#132733ff" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 300)"></path></svg>
 -->


 <script src="demo.js" defer type="text/javascript"></script>