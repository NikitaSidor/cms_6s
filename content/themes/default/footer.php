<script>
let s = document.querySelectorAll('a[href="#form-product"]');
let form = document.querySelector('input[name="id_home"]');
s.forEach(a => {
    a.addEventListener('click', () => {
        form.setAttribute('value', a.getAttribute("data-id"));
        console.log(form);
    })
})
</script>
<script src="<?= \Engine\Core\Template\Theme::getUrl()?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?= \Engine\Core\Template\Theme::getUrl()?>/assets/js/main.js" defer></script>
<<<<<<< HEAD
<? /* Asset::render('js'); */ ?>
=======
<?php Asset::render('js'); ?>
>>>>>>> origin
<div class="footer">
    <div class="bubbles" style="overflow-x: clip;">
        <div class="bubble"
            style="--size:5.6021209750613rem; --distance:6.532056386515677rem; --position:98.44376712327266%; --time:3.0780814544347024s; --delay:-3.760691917482287s;">
        </div>
        <div class="bubble"
            style="--size:4.637977707340936rem; --distance:7.165627962119993rem; --position:86.82774115198376%; --time:2.2275539655705754s; --delay:-3.4587002863550786s;">
        </div>
        <div class="bubble"
            style="--size:4.418469543326252rem; --distance:6.416548838534508rem; --position:11.712200826390088%; --time:3.2854572765269854s; --delay:-2.3212694334291113s;">
        </div>
        <div class="bubble"
            style="--size:4.67800767523826rem; --distance:9.042847277170111rem; --position:25.429451491112836%; --time:3.3148796969432315s; --delay:-3.5683989882147835s;">
        </div>
        <div class="bubble"
            style="--size:3.031939570848696rem; --distance:9.86719727011534rem; --position:17.715615698720324%; --time:2.2733075336090223s; --delay:-2.0123882514446327s;">
        </div>
        <div class="bubble"
            style="--size:3.358155946264409rem; --distance:8.173864298218485rem; --position:77.09481268354355%; --time:2.8037942226972046s; --delay:-3.228834454574951s;">
        </div>
        <div class="bubble"
            style="--size:2.8152083447560656rem; --distance:8.655230999991307rem; --position:61.211725874558084%; --time:3.577674621751898s; --delay:-2.988974375126821s;">
        </div>
        <div class="bubble"
            style="--size:4.5666690229235805rem; --distance:6.423618677639886rem; --position:-2.204858081609149%; --time:3.4407345410005723s; --delay:-3.202046907697041s;">
        </div>
        <div class="bubble"
            style="--size:2.4913040376616067rem; --distance:7.332642473101565rem; --position:91.83951778953261%; --time:3.2198796646567382s; --delay:-3.826300759560506s;">
        </div>
        <div class="bubble"
            style="--size:3.2560086949048914rem; --distance:7.062652583498912rem; --position:88.556805664813%; --time:3.3546011902902095s; --delay:-2.7034035165051176s;">
        </div>
        <div class="bubble"
            style="--size:3.107078883219656rem; --distance:9.968567790800435rem; --position:52.69053296825531%; --time:3.954971672513313s; --delay:-3.789765500846617s;">
        </div>
        <div class="bubble"
            style="--size:3.7405268853712945rem; --distance:9.205513133352rem; --position:-4.534794070199808%; --time:3.470773086359787s; --delay:-2.746858092775126s;">
        </div>
        <div class="bubble"
            style="--size:2.924222396666818rem; --distance:7.138349615779261rem; --position:85.6276821157587%; --time:3.8259872082029007s; --delay:-2.1617427318133253s;">
        </div>
        <div class="bubble"
            style="--size:3.5061696123986223rem; --distance:9.315876306744096rem; --position:89.0986964171978%; --time:2.5096871065423287s; --delay:-3.723901638249062s;">
        </div>
        <div class="bubble"
            style="--size:3.709371061906306rem; --distance:8.778811931775977rem; --position:-0.38438892846994577%; --time:2.9734441712367863s; --delay:-3.9132930066071787s;">
        </div>
        <div class="bubble"
            style="--size:4.460572758728478rem; --distance:7.894322903131464rem; --position:98.72344006075714%; --time:3.410584744845698s; --delay:-3.8407587245723365s;">
        </div>
        <div class="bubble"
            style="--size:4.787631954032386rem; --distance:9.068974788528447rem; --position:97.6630754128308%; --time:3.271329052965063s; --delay:-3.5966750383735917s;">
        </div>
        <div class="bubble"
            style="--size:5.1523645653310295rem; --distance:9.182687666606714rem; --position:-1.567797376368678%; --time:3.781697787588966s; --delay:-3.0110600912901098s;">
        </div>
        <div class="bubble"
            style="--size:3.6107716605917517rem; --distance:7.351358264687306rem; --position:42.00411672061436%; --time:2.329183356116664s; --delay:-3.5299204630530343s;">
        </div>
        <div class="bubble"
            style="--size:5.455854037500203rem; --distance:9.037146025514163rem; --position:41.271021392974575%; --time:3.4263196283646886s; --delay:-3.0299988676911886s;">
        </div>
        <div class="bubble"
            style="--size:4.060454708704225rem; --distance:7.549753373767691rem; --position:78.38311136214662%; --time:3.6975561309694855s; --delay:-2.9979568468211526s;">
        </div>
        <div class="bubble"
            style="--size:5.217961510700193rem; --distance:6.9974096074860785rem; --position:57.66539251111998%; --time:3.2045619973656665s; --delay:-2.3525588874229473s;">
        </div>
        <div class="bubble"
            style="--size:5.891688969208337rem; --distance:8.557030900554484rem; --position:1.790923682400221%; --time:3.4919645959286116s; --delay:-2.3564907578565766s;">
        </div>
        <div class="bubble"
            style="--size:5.0497476169154565rem; --distance:9.494822116839273rem; --position:22.68858312863318%; --time:2.2659038881033147s; --delay:-3.5796398299605077s;">
        </div>
        <div class="bubble"
            style="--size:4.4081856946523565rem; --distance:9.870926692292379rem; --position:3.386085534725602%; --time:3.0050943834925388s; --delay:-2.6571733422920265s;">
        </div>
        <div class="bubble"
            style="--size:2.922636001754279rem; --distance:7.226266923194361rem; --position:48.21551517373697%; --time:2.6523209576139997s; --delay:-2.3313856150975107s;">
        </div>
        <div class="bubble"
            style="--size:4.870930579789041rem; --distance:7.751576866591236rem; --position:60.32480839306655%; --time:2.6853699748211404s; --delay:-2.206595619953975s;">
        </div>
        <div class="bubble"
            style="--size:2.7056071178740666rem; --distance:6.387241452129063rem; --position:60.16260024640792%; --time:2.3632692406608524s; --delay:-2.4997884092168747s;">
        </div>
        <div class="bubble"
            style="--size:2.1389375205824503rem; --distance:6.520784419567252rem; --position:4.9069699002027924%; --time:3.884311623332578s; --delay:-2.695139585780874s;">
        </div>
        <div class="bubble"
            style="--size:3.2313618194730163rem; --distance:8.746301520554674rem; --position:-3.2712199196352088%; --time:2.753760050742113s; --delay:-3.580130500949183s;">
        </div>
        <div class="bubble"
            style="--size:3.110729182466236rem; --distance:7.5490660340600435rem; --position:-2.31588070060889%; --time:3.466410367457295s; --delay:-2.359072819796725s;">
        </div>
        <div class="bubble"
            style="--size:2.395017890281413rem; --distance:9.30263324070022rem; --position:104.0901165067321%; --time:3.5990194995647897s; --delay:-3.1984597818608678s;">
        </div>
        <div class="bubble"
            style="--size:2.515741565805249rem; --distance:9.108687159737642rem; --position:72.57311414179314%; --time:3.2723249948164566s; --delay:-3.4168166248458824s;">
        </div>
        <div class="bubble"
            style="--size:5.634250162330856rem; --distance:9.762245023659581rem; --position:63.86089314356789%; --time:3.9294578195071925s; --delay:-3.017991502739405s;">
        </div>
        <div class="bubble"
            style="--size:4.268129776441166rem; --distance:6.976264560824963rem; --position:89.2932939408143%; --time:3.891006252747163s; --delay:-2.356456284287735s;">
        </div>
        <div class="bubble"
            style="--size:4.194358028210028rem; --distance:7.871009749235321rem; --position:-1.1008173994449288%; --time:3.738135249203315s; --delay:-2.754664115551439s;">
        </div>
        <div class="bubble"
            style="--size:4.865167635939239rem; --distance:9.209836055842132rem; --position:81.86555691619463%; --time:2.0826978812138583s; --delay:-2.9423655794316277s;">
        </div>
        <div class="bubble"
            style="--size:5.646714976823468rem; --distance:7.949283088076679rem; --position:0.5923182467506427%; --time:3.275814490913428s; --delay:-2.878088681184808s;">
        </div>
        <div class="bubble"
            style="--size:4.567423566186945rem; --distance:7.241585067035553rem; --position:33.92729954421294%; --time:3.282658742508599s; --delay:-3.9895360470960304s;">
        </div>
        <div class="bubble"
            style="--size:2.3265811472787874rem; --distance:6.863940824137812rem; --position:1.3481094022334776%; --time:3.7961492206848617s; --delay:-2.270813652795611s;">
        </div>
        <div class="bubble"
            style="--size:3.271321099477139rem; --distance:6.726746256379042rem; --position:53.15130791615662%; --time:3.290065062199369s; --delay:-3.2386686177670683s;">
        </div>
        <div class="bubble"
            style="--size:3.3928954052481775rem; --distance:9.826986885198327rem; --position:25.587473027121646%; --time:2.769232945241354s; --delay:-3.339299811252031s;">
        </div>
        <div class="bubble"
            style="--size:2.867267606032325rem; --distance:7.3583640046436765rem; --position:101.65766905398496%; --time:2.9028246079989555s; --delay:-2.0264650665485866s;">
        </div>
        <div class="bubble"
            style="--size:5.756749392504214rem; --distance:9.945265321896946rem; --position:-1.2914404850517958%; --time:2.418281019970976s; --delay:-2.0077679733142504s;">
        </div>
        <div class="bubble"
            style="--size:2.3450160685466983rem; --distance:9.450988669346795rem; --position:69.03139281838442%; --time:2.7635722320226974s; --delay:-2.255138379863806s;">
        </div>
        <div class="bubble"
            style="--size:2.804056380652912rem; --distance:7.44162669706845rem; --position:28.656224530997505%; --time:3.057136197808815s; --delay:-2.6973651798939344s;">
        </div>
        <div class="bubble"
            style="--size:5.497897628335496rem; --distance:9.025552882319255rem; --position:100.48727047169957%; --time:3.6654076296318405s; --delay:-2.9187525117696485s;">
        </div>
        <div class="bubble"
            style="--size:2.3195570498242617rem; --distance:6.947465116691249rem; --position:86.09919174158513%; --time:3.0074792879935606s; --delay:-2.4645565594567764s;">
        </div>
        <div class="bubble"
            style="--size:2.1367457867867934rem; --distance:8.141011108998471rem; --position:31.468675323224332%; --time:3.6887912805657685s; --delay:-2.9956731680121895s;">
        </div>
        <div class="bubble"
            style="--size:2.0133765479776304rem; --distance:7.218153093702116rem; --position:85.93198277837006%; --time:3.4832530354136124s; --delay:-2.3820289062669926s;">
        </div>
        <div class="bubble"
            style="--size:5.647791572440912rem; --distance:9.11688905750841rem; --position:44.93433937691576%; --time:2.4486883973009146s; --delay:-3.8458835195002656s;">
        </div>
        <div class="bubble"
            style="--size:2.282781018308283rem; --distance:6.461958355824951rem; --position:72.62435202952109%; --time:3.896769609297176s; --delay:-3.573129787291802s;">
        </div>
        <div class="bubble"
            style="--size:4.712312645575688rem; --distance:9.510863968246829rem; --position:74.72114028189786%; --time:2.6219482632794455s; --delay:-3.71975401994488s;">
        </div>
        <div class="bubble"
            style="--size:4.66400729448446rem; --distance:8.115242930594114rem; --position:96.26939956853488%; --time:2.8483996394433886s; --delay:-3.4538045498781633s;">
        </div>
        <div class="bubble"
            style="--size:3.257716430235578rem; --distance:9.372220631180713rem; --position:6.172342032175225%; --time:2.6887513603845505s; --delay:-2.1114514585840074s;">
        </div>
        <div class="bubble"
            style="--size:5.969649151692346rem; --distance:9.460776413263986rem; --position:-0.5185833373578719%; --time:3.573464660408941s; --delay:-2.0373780203593173s;">
        </div>
        <div class="bubble"
            style="--size:5.603911003167786rem; --distance:7.842785640844965rem; --position:26.67452860471131%; --time:3.896913720793793s; --delay:-2.574600684419526s;">
        </div>
        <div class="bubble"
            style="--size:4.5446086406596455rem; --distance:7.360115878939131rem; --position:85.56243858273743%; --time:3.845389703269336s; --delay:-3.3500000408170787s;">
        </div>
        <div class="bubble"
            style="--size:4.598485422704539rem; --distance:9.376667414981402rem; --position:35.5962519436654%; --time:2.094032893338718s; --delay:-3.0805036651368005s;">
        </div>
        <div class="bubble"
            style="--size:5.057810436875035rem; --distance:9.554910023677468rem; --position:75.04494862274076%; --time:2.909257454478719s; --delay:-3.5717289513188804s;">
        </div>
        <div class="bubble"
            style="--size:2.3819125392326876rem; --distance:7.930525621071658rem; --position:34.40873792048768%; --time:3.709089751332994s; --delay:-3.3210771460335216s;">
        </div>
        <div class="bubble"
            style="--size:2.741293126099573rem; --distance:9.695902069810387rem; --position:-1.1765602497976313%; --time:3.5196559791516395s; --delay:-2.3760898059778293s;">
        </div>
        <div class="bubble"
            style="--size:2.0314864826215455rem; --distance:9.817864787703641rem; --position:52.870498722238715%; --time:3.7924958686687247s; --delay:-2.250275913478768s;">
        </div>
        <div class="bubble"
            style="--size:4.660532204898168rem; --distance:8.456542058794057rem; --position:102.65131098088122%; --time:2.130747905943831s; --delay:-2.03744767512958s;">
        </div>
        <div class="bubble"
            style="--size:3.596086715006547rem; --distance:6.594785341975547rem; --position:48.30271910180471%; --time:2.886146347450217s; --delay:-2.631859456633471s;">
        </div>
        <div class="bubble"
            style="--size:4.843719764085731rem; --distance:9.726794264490161rem; --position:77.75193536223418%; --time:2.690659156484897s; --delay:-2.078871148557064s;">
        </div>
        <div class="bubble"
            style="--size:4.542467565800253rem; --distance:9.170703117292831rem; --position:82.05464600754533%; --time:3.64000888319629s; --delay:-2.025001548467363s;">
        </div>
        <div class="bubble"
            style="--size:5.8580895144411524rem; --distance:7.57385090249737rem; --position:100.76992787890121%; --time:3.1043353376612774s; --delay:-2.525039725273659s;">
        </div>
        <div class="bubble"
            style="--size:4.918090083983984rem; --distance:9.560304213613747rem; --position:57.72607163488741%; --time:2.849385528474509s; --delay:-3.4473050274048602s;">
        </div>
        <div class="bubble"
            style="--size:2.5621151737885706rem; --distance:8.044991538580291rem; --position:58.079014095369224%; --time:2.7312479742902407s; --delay:-2.3584208215616016s;">
        </div>
        <div class="bubble"
            style="--size:3.9087043000708226rem; --distance:8.960988957962002rem; --position:51.909429926091654%; --time:3.3095218226634513s; --delay:-2.3180720911821657s;">
        </div>
        <div class="bubble"
            style="--size:3.330187726834623rem; --distance:7.158264740765874rem; --position:11.344742120206945%; --time:3.1066112234757064s; --delay:-2.06515470517526s;">
        </div>
        <div class="bubble"
            style="--size:5.693881231559222rem; --distance:6.963791775639038rem; --position:101.03210649030567%; --time:3.354442214786029s; --delay:-2.1947324904269845s;">
        </div>
        <div class="bubble"
            style="--size:2.0458353596918633rem; --distance:6.645317173205641rem; --position:57.099084903941836%; --time:3.7350882067053575s; --delay:-2.9830935478857246s;">
        </div>
        <div class="bubble"
            style="--size:2.642608901264232rem; --distance:9.985065303727604rem; --position:60.74636149591906%; --time:2.8018047815732374s; --delay:-3.186927654135495s;">
        </div>
        <div class="bubble"
            style="--size:5.151077853337885rem; --distance:7.770259467984883rem; --position:93.78059506018108%; --time:3.22108436458968s; --delay:-3.7569083211044956s;">
        </div>
        <div class="bubble"
            style="--size:3.4637604374465534rem; --distance:7.2575125344398rem; --position:71.85722733610994%; --time:2.9086705659650383s; --delay:-3.8430209583350083s;">
        </div>
        <div class="bubble"
            style="--size:2.171920099584886rem; --distance:7.618359818093382rem; --position:12.908182114836865%; --time:2.1504596246189887s; --delay:-3.8378216160779837s;">
        </div>
        <div class="bubble"
            style="--size:2.8489641215050563rem; --distance:7.3325669916846765rem; --position:88.25992583758209%; --time:2.7742822015197484s; --delay:-2.0077225518632074s;">
        </div>
        <div class="bubble"
            style="--size:4.663022893542085rem; --distance:8.561666982961173rem; --position:33.79425001386744%; --time:3.4104300264233256s; --delay:-2.6772865582650525s;">
        </div>
        <div class="bubble"
            style="--size:4.723803185705505rem; --distance:9.99346639116316rem; --position:55.730467411642145%; --time:2.328772150765449s; --delay:-2.13132064747472s;">
        </div>
        <div class="bubble"
            style="--size:4.00477444115716rem; --distance:7.737875461056021rem; --position:52.39233206910041%; --time:3.813932421175456s; --delay:-2.032854178495098s;">
        </div>
        <div class="bubble"
            style="--size:4.280287023474958rem; --distance:9.360605364321895rem; --position:23.39061047229784%; --time:2.0095995853059945s; --delay:-2.630975741819875s;">
        </div>
        <div class="bubble"
            style="--size:4.351510896393404rem; --distance:9.172681357141379rem; --position:4.1777290115003645%; --time:3.5122700033412797s; --delay:-3.6133914238672955s;">
        </div>
        <div class="bubble"
            style="--size:4.777510521607405rem; --distance:6.292268004192809rem; --position:71.1353859725796%; --time:2.6386301389225215s; --delay:-2.3568019393329966s;">
        </div>
        <div class="bubble"
            style="--size:2.9619027406070293rem; --distance:7.567109801689694rem; --position:97.9554710819458%; --time:3.4812090902468955s; --delay:-2.502332227591865s;">
        </div>
        <div class="bubble"
            style="--size:2.883130917917902rem; --distance:9.72680262902966rem; --position:88.73024168222489%; --time:2.14455441211591s; --delay:-3.154555882713292s;">
        </div>
        <div class="bubble"
            style="--size:5.5092627440989395rem; --distance:9.888650677167815rem; --position:49.92690021036033%; --time:2.3766769685222067s; --delay:-3.5193501837519428s;">
        </div>
        <div class="bubble"
            style="--size:2.320866537786306rem; --distance:8.222602532801577rem; --position:21.9181836248437%; --time:3.885061802181315s; --delay:-3.121529877545136s;">
        </div>
        <div class="bubble"
            style="--size:5.120221006614491rem; --distance:7.188929088709978rem; --position:88.83779825378973%; --time:3.988341429227197s; --delay:-3.088669463740038s;">
        </div>
        <div class="bubble"
            style="--size:4.120258782830849rem; --distance:7.783737418729801rem; --position:12.93568208650909%; --time:2.5621009761604867s; --delay:-3.163886542159626s;">
        </div>
        <div class="bubble"
            style="--size:3.3222386978391647rem; --distance:7.138886229181247rem; --position:37.857295858296325%; --time:2.284222378626172s; --delay:-2.3855518014356663s;">
        </div>
        <div class="bubble"
            style="--size:4.7917006752947815rem; --distance:8.81791888115146rem; --position:72.2343573454495%; --time:3.2085770641742766s; --delay:-2.5648754548809363s;">
        </div>
        <div class="bubble"
            style="--size:4.687274681428516rem; --distance:8.3573877614588rem; --position:35.179418506658244%; --time:2.5039993635080364s; --delay:-3.6419946692686955s;">
        </div>
        <div class="bubble"
            style="--size:2.112608234597154rem; --distance:7.063138755169493rem; --position:101.49594756739333%; --time:3.908230848212484s; --delay:-3.0928727467396726s;">
        </div>
        <div class="bubble"
            style="--size:5.239260526283858rem; --distance:8.314881236441003rem; --position:36.009376255434404%; --time:2.6564170413866344s; --delay:-3.5166906801430717s;">
        </div>
        <div class="bubble"
            style="--size:2.3357198300925157rem; --distance:8.984628871743777rem; --position:29.12212710707474%; --time:3.2053109204085772s; --delay:-3.067173091431827s;">
        </div>
        <div class="bubble"
            style="--size:4.952621307523898rem; --distance:7.549607916285916rem; --position:85.99510135732807%; --time:2.2376958565053777s; --delay:-2.032987067073549s;">
        </div>
        <div class="bubble"
            style="--size:2.518142811004269rem; --distance:9.785528584089683rem; --position:67.06781032150559%; --time:3.240671347073004s; --delay:-3.870837887754082s;">
        </div>
        <div class="bubble"
            style="--size:3.1426702599889795rem; --distance:6.145878640937545rem; --position:64.80890120408297%; --time:2.312995317568978s; --delay:-3.706560686311453s;">
        </div>
        <div class="bubble"
            style="--size:3.009825562593896rem; --distance:8.24951414234353rem; --position:67.23724298166846%; --time:2.699267981938302s; --delay:-3.8468356411662343s;">
        </div>
        <div class="bubble"
            style="--size:2.7533128370022553rem; --distance:7.813949421546859rem; --position:92.3366977701113%; --time:3.739809341854339s; --delay:-3.2258721896069273s;">
        </div>
        <div class="bubble"
            style="--size:5.755097243999038rem; --distance:7.579446333805729rem; --position:23.009071501520573%; --time:3.0921684950256307s; --delay:-2.021502681206047s;">
        </div>
        <div class="bubble"
            style="--size:3.847914217569544rem; --distance:7.9549764459973105rem; --position:94.98302172469991%; --time:3.809044467404569s; --delay:-3.096626880930092s;">
        </div>
        <div class="bubble"
            style="--size:5.809443280314528rem; --distance:7.899724017876161rem; --position:39.46595452995225%; --time:2.388894363474959s; --delay:-3.4667768301595605s;">
        </div>
        <div class="bubble"
            style="--size:4.424938234110661rem; --distance:6.7227649964388405rem; --position:23.855676155591475%; --time:2.144867300919311s; --delay:-3.5838865293783178s;">
        </div>
        <div class="bubble"
            style="--size:2.6048035593902368rem; --distance:8.729783182478975rem; --position:11.026481922452856%; --time:2.911269664170331s; --delay:-3.0520751096864824s;">
        </div>
        <div class="bubble"
            style="--size:5.45054492141836rem; --distance:8.405844098936868rem; --position:5.096440955946207%; --time:2.2826849619500136s; --delay:-2.336042903666316s;">
        </div>
        <div class="bubble"
            style="--size:4.897847515255409rem; --distance:6.083113951876538rem; --position:16.12793095185979%; --time:3.3913022339555288s; --delay:-3.9213977966485243s;">
        </div>
        <div class="bubble"
            style="--size:3.4652376661559314rem; --distance:8.40797099874404rem; --position:-1.0405911310752458%; --time:2.428171789174927s; --delay:-3.179304518779765s;">
        </div>
        <div class="bubble"
            style="--size:3.8612231447128105rem; --distance:8.166332444703265rem; --position:40.90026558159687%; --time:3.3125489432943778s; --delay:-2.6680506685001975s;">
        </div>
        <div class="bubble"
            style="--size:4.5938135897904955rem; --distance:7.475265350028256rem; --position:24.342638354106153%; --time:3.6642124197954433s; --delay:-3.064429783678211s;">
        </div>
        <div class="bubble"
            style="--size:2.0267559821779075rem; --distance:7.29872362798369rem; --position:33.72378989986741%; --time:3.8760011132123786s; --delay:-2.6912271848571994s;">
        </div>
        <div class="bubble"
            style="--size:5.557330749826824rem; --distance:8.738560238079131rem; --position:34.41925287505204%; --time:2.4158326999884125s; --delay:-3.851313950903828s;">
        </div>
        <div class="bubble"
            style="--size:2.2556075036293857rem; --distance:9.20138225016878rem; --position:8.677691694569562%; --time:2.5054573002458276s; --delay:-2.1362617743109467s;">
        </div>
        <div class="bubble"
            style="--size:2.5995008789306464rem; --distance:9.9217409152982rem; --position:4.881196850807033%; --time:2.8985036900288774s; --delay:-2.3839431599194096s;">
        </div>
        <div class="bubble"
            style="--size:4.04230466763231rem; --distance:8.445814184043424rem; --position:37.151329916091555%; --time:3.8486080337881066s; --delay:-3.4975004654027337s;">
        </div>
        <div class="bubble"
            style="--size:2.8717591259330453rem; --distance:7.258283065421413rem; --position:-3.4880371919572895%; --time:2.655588627709292s; --delay:-2.781582881130255s;">
        </div>
        <div class="bubble"
            style="--size:3.0900284985810167rem; --distance:8.509748699771293rem; --position:91.09057490203921%; --time:3.2433657349032656s; --delay:-2.3327647243848872s;">
        </div>
        <div class="bubble"
            style="--size:5.698873208869356rem; --distance:8.763598663710173rem; --position:95.01283021227997%; --time:3.6387618872022447s; --delay:-2.5741795156992873s;">
        </div>
        <div class="bubble"
            style="--size:4.201200999992226rem; --distance:6.699177222573779rem; --position:70.43309173574039%; --time:3.8570631579733092s; --delay:-2.6191671020112035s;">
        </div>
        <div class="bubble"
            style="--size:5.81809584551317rem; --distance:7.15105769540062rem; --position:5.853748413312017%; --time:3.109997003327683s; --delay:-2.87634942632s;">
        </div>
        <div class="bubble"
            style="--size:4.775164275694917rem; --distance:8.739819733259807rem; --position:92.22875577213503%; --time:3.674958850704579s; --delay:-3.661269873869815s;">
        </div>
        <div class="bubble"
            style="--size:4.084648861866829rem; --distance:8.71820449126045rem; --position:38.17199266439689%; --time:2.884640627269999s; --delay:-2.190594446989469s;">
        </div>
        <div class="bubble"
            style="--size:3.5884204152251824rem; --distance:6.721411384456029rem; --position:8.538989555360976%; --time:3.123581110006109s; --delay:-3.1105675980964786s;">
        </div>
        <div class="bubble"
            style="--size:4.813083510839389rem; --distance:9.382241193846472rem; --position:45.66719663061322%; --time:3.438592931021916s; --delay:-2.3928718562263094s;">
        </div>
        <div class="bubble"
            style="--size:4.742114612983773rem; --distance:8.269024394457492rem; --position:16.238323033548745%; --time:3.8752299103544274s; --delay:-2.5272661467023054s;">
        </div>
        <div class="bubble"
            style="--size:2.4781797786771254rem; --distance:8.848033867085505rem; --position:80.52356696766556%; --time:3.9366859259685976s; --delay:-3.3705030973089354s;">
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div>
                <a href="/">Главная</a>
                <a href="/projects.php">Проекты</a>
                <a href="/question.php">Вопрос-ответ</a>
                <a href="/about-us.php">О нас</a>
            </div>
            <hr>
            <p><b>Адрес:</b> 123242 Россия, г. Москва, ул. Баррикадная, 19 стр.1</p>
            <hr>
            <p><b>Телефон:</b> <a href="tel:#!">+7 (937) 527-54-20</a></p>
            <hr>
            <p><b>Email:</b> <a href="mailto:#!">home.tatars@gmail.com</a></p>
        </div>
        <div class="container"><a class="image" href="https://codepen.io/z-" target="_blank"
                style="background-image: url(&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/199011/happy.svg&quot;)"></a>
            <p>©2023 Пугачев Илья</p>
        </div>
    </div>
</div>
<svg style="position:fixed; top:100vh">
    <defs>
        <filter id="blob">
            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="blob">
            </feColorMatrix>
            <!--feComposite(in="SourceGraphic" in2="blob" operator="atop") //After reviewing this after years I can't remember why I added this but it isn't necessary for the blob effect-->
        </filter>
    </defs>
</svg>
</body>

</html>