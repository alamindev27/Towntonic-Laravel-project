<?php

use Illuminate\Database\Seeder;
use App\Models\AboutTaiwan;
use App\Models\Country;
use App\Models\Education;
use App\Models\Government;
use App\Models\HomeInfo;
use App\Models\Transportation;
use App\Models\VisaIns;
use App\Models\People;
use App\Models\Sport;
use App\Models\ArtsCulture;
use App\Models\HistoryPolitics;
use App\Models\ScienceTechnology;
use App\Models\Society;
use App\Models\TradeEconomy;
use App\Models\TravelTourism;
use App\Models\VisaInfo;
use App\Models\StudyTaiwan;
use App\Models\ScholarshipGuideline;
use App\Models\ScholarshipInstruction;
use App\Models\WorkPermit;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class AllTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //District
        $tajikistan = Country::create([
            'name'             => 'Tajikistan',
            'nationality'      => 'Zambian',
        ]);

        $taiwan = Country::create([
            'name'             => 'Taiwan',
            'nationality'      => 'Yemenite',
        ]);

        $bangladesh = Country::create([
            'name'             => 'Bangladesh',
            'nationality'      => 'Bangladeshi',
        ]);

        WorkPermit::create([
        	'expatriaes_name' =>'MD ASIKUZZAMAN',
        	'china_name' =>' 阿西克 扎曼',
        	'occupation' =>'Store Officer',
        	'country_id' =>$bangladesh->id,
        	'gender' =>'0',
        	'dob' =>'20-Dec-1975',
        	'placeofissue' =>'DHAKA',
        	'website_name' =>'decohfweb.github.io',
        	'company_name' =>'Doco Hf Web',
        	'company_name_chinese' =>'阿西克',
        	'visa_no' =>'1086001010',
        	'visa_issue_date' =>'12-Apr-2019',
        	'visa_expiry_date' =>'11-Apr-2021',
        	'passport_no' =>'BF0381466',
        	'passport_issue_date' =>'06-MAY-2015',
        	'passport_expiry_date' =>'05-MAY-2020',
        	'duration' =>'2 Years',
        ]);

        WorkPermit::create([
        	'expatriaes_name' =>'SURUS AHAMAD',
        	'china_name' =>' 苏茹 哈',
        	'occupation' =>'Technician Manager',
        	'country_id' =>$bangladesh->id,
        	'gender' =>'0',
        	'dob' =>'13-Feb-1955',
        	'placeofissue' =>'RAJBARI',
        	'website_name' =>'decohfweb.github.io',
        	'company_name' =>'Doco Hf Web',
        	'company_name_chinese' =>'阿西克',
        	'visa_no' =>'7687872378',
        	'visa_issue_date' =>'16-Apr-2019',
        	'visa_expiry_date' =>'15-Apr-2021',
        	'passport_no' =>'BQ0453953',
        	'passport_issue_date' =>'04-Oct-2017',
        	'passport_expiry_date' =>'03-Oct-2022',
        	'duration' =>'2 Years',
        ]);

       Education::create([
       	'description' => '<h2><strong>At a Glance</strong></h2>

			<ul>
				<li>‧ Compulsory education extended</li>
				<li>‧ Development of worlSportsd-class universities</li>
				<li>‧ e-Learning takes on a growing role</li>
			</ul>

			<p>As the second decade of the 21st century begins, citizens of the Republic of China have a variety of quality education choices. Nine years of compulsory education has been the norm for decades. Now, in the nation&rsquo;s centennial year, 99.9 percent of children enter primary school, and nearly every child attends secondary education. Tertiary education has also become commonplace.The illiteracy rate has fallen to 2.09 percent, while educational expenditures have risen to 6.51 percent of GDP. In a ma-jor development, the Ministry of Education announced in early 2011 that 12 years of national fundamental education would be the standard from 2014.</p>

			<p>e-Learning initiatives begun nearly a decade ago today benefit both students and the general work force, and programs to make university-level education and research world-class are entering their second stage. Foreign students can study Mandarin Chinese in Taiwan via certified training programs in a culturally stimulating environment.</p>',
       ]);

       Government::create([
       	'description' => '<h2><strong>Government</strong></h2>

			<p>&nbsp;</p>

			<h4>At a Glance</h4>

			<p>&bull; Government restructuring<br />
			&bull; Five special municipalities<br />
			&bull; Clean,efficient government</p>

			<p>The central government of the Republic of China is responsi-ble for ensuring the overall well-being of the nation, includ-ing its prosperity and security as well as educational opportunity for all citizens.</p>

			<p>Recent major changes in government include measures to streamline the central government&rsquo;s executive branch, whereby the number of ministries and agencies will be reduced from 37 to 29. The revamped structure will include six new ministries&mdash;Ministry of Labor, Ministry of Agriculture, Ministry of Health and Welfare, Ministry of Environ-ment and Natural Resources, Ministry of Culture and Ministry of Sci-ence and Technology.</p>

			<p>At the local level, three new special municipalities&mdash;New Taipei City, Taichung City and Tainan City were formed in December 2010 with the aim of more effectively and equitably utilizing public resources.</p>

			<h2>&nbsp;</h2>

			<h2>Central Government</h2>

			<p>The central government consists of the Office of the President and five branches, or yuans&mdash;the Executive Yuan, the Legislative Yuan, the Judicial Yuan &aring;&cedil;&aelig;&sup3;&bull;&eacute;&trade;&cent;, the Examination Yuan &egrave;&euro;&fnof;&egrave;&copy;&brvbar;&eacute;&trade;&cent;and the Control Yuan.</p>

			<p>&nbsp;</p>

			<h4>Presidency</h4>

			<p>The president of the ROC is the head of state and commander-in-chief of the Armed Forces (see Chapter 7, &ldquo;National Defense&rdquo;). As head of state, the president represents the nation in foreign relations and at state functions, and may conclude international agreements. The president is further empowered by the Constitution to appoint and remove top civil and military officials; promulgate laws; dissolve the Legislative Yuan in the event it dismisses the premier through a vote of no con-fidence; help resolve disputes between branches of the central government; and issue emergency decrees in response to national security threats or other crises.</p>

			<p>With respect to the last point, emer-gency decrees must be ratified by the Leg-islative Yuan within 10 days of issuance. Should the Legislative Yuan withhold ratification, emergency decrees are im-mediately annulled. In the event disagree-ments arise between the Executive Yuan and the Legislative Yuan, for example, the president of the ROC may call a meeting of the presidents of the two branches&mdash;the premier and the legislative speaker&mdash;to work out a solution.</p>

			<p>Under the direct administrative juris-diction of the Office of the President are Academia Sinica &auml;&cedil;&shy;&aring;&curren;&reg;&ccedil;&nbsp;&rdquo;&ccedil;&copy;&para;&eacute;&trade;&cent;, Academia Historica &aring;&oelig;&lsaquo;&aring;&sup2;&eacute;&curren;&uml;and the National Se-curity Council &aring;&oelig;&lsaquo;&aring;&reg;&para;&aring;&reg;&permil;&aring;&hellip;&uml;&aelig;&oelig;&fnof;&egrave;&shy;&deg;. Academia Sinica scholars are widely reputed as be-ing among the nation&rsquo;s top researchers in many disciplines in both the physical and social sciences. Academia Historica is the custodian of the national archives and other important historical items. And the National Security Council is charged with assisting the president in addressing issues that concern the nation&rsquo;s critical interests (see Chapter 7, &ldquo;National Defense&rdquo;).The president and the vice president are elected as a ticket and win office by receiving a plurality of the popular vote. Their term of office is four years, and they may be re-elected to serve one con-secutive term.</p>

			<p>The ROC is sometimes described as having a semi-presidential system because the president does not exercise direct administrative authority over the executive branch. Nevertheless, the presi-dent exerts considerable influence over the operations of the various branches of the central government through his power to appoint the premier and other top of-ficials. As the president&rsquo;s appointment of the premier does not require confirmation by the Legislative Yuan, the premier&rsquo;s policy-making normally adheres closely to guidelines laid out by the president.</p>

			<p>&nbsp;</p>

			<h4>Executive Yuan</h4>

			<p>The Executive Yuan is the executive branch of the ROC government, headed by the premier. The premier is directly appointed by the president, while other members of the Executive Yuan Council, or Cabinet&mdash;comprising the vice premier, ministers, chairpersons of commissions and ministers without portfolio&mdash;are appointed by the president on recommendation of the premier. In addition to supervising the subordinate organs of the Executive Yuan, the premier explains administrative poli-cies and reports to the Legislative Yuan and responds, either orally or in writing, to the interpellations of legislators. For laws to take effect after enactment by the Leg-islative Yuan, they must be promulgated by the president and countersigned by the premier. In the event of vacancies in both the presidency and the vice presidency, the premier performs the duties of the presi-dent for up to three months.</p>

			<p>Currently, there are eight ministries and 29 other Cabinet-level organizations under the Executive Yuan. To streamline the central government and improve its effectiveness, while at the same time en-hancing flexibility within its departments, the Cabinet proposed several government-restructuring bills to the Legislative Yuan, which were enacted and promulgated in early 2010. Among them are amendments to the Basic Code Governing Central Ad-ministrative Agencies Organizations &auml;&cedil;&shy;&aring;&curren;&reg;&egrave;&iexcl;&OElig;&aelig;&rdquo;&iquest;&aelig;&copy;&Yuml;&eacute;&mdash;&oelig;&ccedil;&micro;&bdquo;&ccedil;&sup1;&rdquo;&aring;&Yuml;&ordm;&aelig;&ordm;&ndash;&aelig;&sup3;&bull;and the Organizational Act of the Executive Yuan &egrave;&iexcl;&OElig;&aelig;&rdquo;&iquest;&eacute;&trade;&cent;&ccedil;&micro;&bdquo;&ccedil;&sup1;&rdquo;&aelig;&sup3;&bull;. In addition, the Central Government Agency Personnel Quota Act &auml;&cedil;&shy;&aring;&curren;&reg;&egrave;&iexcl;&OElig;&aelig;&rdquo;&iquest;&aelig;&copy;&Yuml;&eacute;&mdash;&oelig;&ccedil;&cedil;&frac12;&aring;&ldquo;&iexcl;&eacute;&iexcl;&aelig;&sup3;&bull;and the Provisional Act for Adjustment of Functions and Organizations of the Ex-ecutive Yuan &egrave;&iexcl;&OElig;&aelig;&rdquo;&iquest;&eacute;&trade;&cent;&aring;&Scaron;&Yuml;&egrave;&fnof;&frac12;&aelig;&yen;&shy;&aring;&lsaquo;&trade;&egrave;&circ;&Dagger;&ccedil;&micro;&bdquo;&ccedil;&sup1;&rdquo;&egrave;&ordf;&iquest;&aelig;&bull;&acute;&aelig;&scaron;&laquo;&egrave;&iexcl;&OElig;&aelig;&cent;&auml;&frac34;&lsaquo;have come into force.</p>',
       ]);

       HomeInfo::create([
       	'description' => '<h3><strong>Overview</strong></h3>

			<p>Taiwan has a population of roughly 23 million people and a land area of around 35,980 km2. Mandarin Chinese is the country&rsquo;s main language, but in rural villages, Taiwanese, Hakka, and the languages of minority ethnicities are also spoken. After the Vietnam War era, Taiwan underwent rapid economic growth with the expansion of technological capabilities and industrial production capacity. The government is now involved in preparing the infrastructure for and promoting the development of next-generation industries</p>

			<h3><strong>Economy</strong></h3>

			<p>Taiwan is strong in electronics related businesses, including electronic equipment and parts manufacturing and software development. It is not an exaggeration to say that, in recent years, Taiwan has contributed greatly to advances in both computer and mobile phone technologies.</p>

			<h3><strong>Cost of Living</strong></h3>

			<p>Taiwan&rsquo;s currency is the New Taiwan Dollar(NT$). As for prices, it is possible to cover cost of food with about NT$10,000 a month even if you mostly eat out. Daily goods are available at reasonable prices, so long as they are not luxury or imported items.</p>

			<h3><strong>Climate</strong></h3>

			<p>Taiwan straddles the Tropic of Cancer and the northern and central regions are sub-tropical, while the southern region is tropical. Taiwan does not have four distinct seasons, so rather it feels as though having a long summer and a short winter throughout a year. The most characteristic feature of the climate is typhoons. Generally, the best and most comfortable seasons are from March to May and October to December.</p>

			<h3><strong>Public Safety</strong></h3>

			<p>In urban areas, many places stay open late, including convenience stores and food stands, and there are usually people out walking around until very late at night. In agricultural areas, villages populated by big extended families still exist, and people there live peaceful lives that seem like something out of a bygone era.</p>

			<h3><strong>Housing</strong></h3>

			<p>In Taipei, prices are generally low, so you might expect that housing prices would also be low. However, housing actually tends to be expensive, with furnished one-room apartments costing from NT$8,000 to NT$20,000. There are areas where a lot of foreign residents live, but the rent is higher in those areas than other areas.</p>

			<h3><strong>Food</strong></h3>

			<p>Many reasonably priced food stands and restaurants keep late hours, and so they are bustling deep into the night. One of the charms of Taiwan is the ability to enjoy many types of delicious food at inexpensive prices.</p>

			<h3><strong>Public Transportation</strong></h3>

			<p>In Taipei and Kaohsiung, the main means of public transportation is the Metro (known as the MRT) and its stations sell tickets with embedded IC chips. High-speed rail is the main means of travel between cities, and convenient mid and long distance passes are sold.</p>

			<h3><strong>Working Hours</strong></h3>

			<p>There are significant differences depending on one&rsquo;s occupation or business, but work hours are generally from 9 a.m. to 6:00 p.m. with one hour lunch time, and many companies give employees Saturdays and Sundays off.</p>

			<h3><strong>Tips</strong></h3>

			<p>Although tipping is usually not required, there are exceptions if you request a special favor or have someone carry your luggage at a hotel.</p>',
       ]);

       Transportation::create([
       	'description' => '<ul>
			<li>&bull; Taiwan a leader in gender equality</li>
			<li>&bull; Pension schemes</li>
			<li>&bull; Boosting workers&rsquo; rights</li>
		</ul>

		<p>&nbsp;<br />
		The Tainan City government hosts a mass wedding ceremony at Yizai Jincheng, or Eternal Fortress, overlooking Anping Harbor. Built in 1874, the fortress is deemed an auspicious site for the ceremony as the expression yizai &mdash;literally meaning &ldquo;100 million years&rdquo;&mdash;is regarded as symbolic of eternal love and devotion. (Liao Tai-ji)</p>

		<p>&nbsp;</p>

		<p>Taiwan&rsquo;s population of some 23 million is graying, and its fertility rate fell to 0.895 per woman in 2010, the lowest in the world. Policy measures have been enacted to encourage young people to marry and have children. Public pension schemes offer a measure of economic security for the elderly, while a variety of welfare services are provided to the disadvantaged. Laws are in place to strengthen protection of children, the disabled, low-income groups and workers, as well as to safeguard the rights of women in the workplace. Programs are being implemented to help low-income households recover from economic difficulties and become more prosperous through education and vocational training. And a new Cabinet-level agency tasked with promoting women&rsquo;s rights is set to be-gin operations in 2012.Taiwan&rsquo;s unemployment rate dropped to 4.27 percent as of the end of May 2011, down from a high of 6.13 percent in 2009, due to a strong re-bound from recession resulting from global economic turmoil.</p>',
       ]);

       VisaIns::create([
       	'description' => '<p>Visa Application to Taiwan, Republic of China effective as of June 04, 2010</p>

			<p>1. Types of Visa</p>

			<p>A) Visitor Visa<br />
			A visitor visa issued by this office shall be good for single entry or multiple entries to Taiwan, for the purpose of transit, tour, visiting relatives, undertaking business, inspection tour, short-term study, short-term missionary work, attending international conferences, or engaging in other activities in Taiwan as approved by the Ministry of Foreign Affairs, Taiwan, for a planned period of stay up to 60 days, which may not or may be extended for a maximum stay of 180 days in Taiwan by offices of the National Immigration Administration, Taiwan. Visitor visa holders seeking to engage in profit-making activities or work shall submit documents from the authorized agencies in Taiwan, showing such activities have been approved.</p>

			<p>B) Resident Visa<br />
			A resident visa issued by this office shall be good for single entry to Taiwan, for the purpose of joining family, pursuing studies, undertaking employment, investment, conduct missionary work, official duties, participation in international exchange programs, or engaging in other activities approved by the Ministry of Foreign Affairs, Taiwan, for a planned period of stay exceeding 6 months. The said visa holder shall apply for an Alien Resident Certificate (ARC) no later than 15 days after being admitted into Taiwan from the branch offices of the National Immigration Administration, Taiwan.</p>

			<p>2. General Requirements</p>

			<p>A) Visitor Visa<br />
			1) An original passport valid no less than 6 months<br />
			2) 2 recent passport-size photos (2&rdquo;x2&rdquo;)<br />
			3) 1 copy of round-trip air tickets, or a tentative travel itinerary<br />
			4) A completed and signed application form.<br />
			5) Payments for visa or processing fees and related charges;<br />
			6) Evidence of financial support (applicant&rsquo;s bank statement, minors are exempted) if for a holiday trip to Taiwan;<br />
			7) A company letter stating the purpose of business trips or evidence of family in Taiwan are highly recommended, if request for multiple entries visa;<br />
			8) Additional supporting documents required by this office.</p>

			<p>B) Resident Visa<br />
			1) An Original passport valid no less than 6 months;<br />
			2) 2 recent passport-size photos (2&rdquo;x2&rdquo;);<br />
			3) Completed and signed application form;<br />
			4) Payments for visa or processing fees and related charges;<br />
			5) Work permit (for employment), Marriage or Birth Certificate (for joining family) or School Acceptance Letter (for pursuing study)&hellip;etc., showing the legal resident status has been granted by the authorized agencies in Taiwan.<br />
			6) Health Certificate:Applicants are required to produce a Health Certificate authenticated by this office, before forwarding it to the branch offices of National Immigration Agency, no later than 15 days after arrival in Taiwan, for converting the resident visa to an Alien Resident Card (ARC).<br />
			7) Additional supporting documents required by this office.</p>',
       ]);

       People::create([
       	'description' => '<p>At a Glance<br />
  • Fusion of Han, Austronesian and immigrant cultures<br />
  • Customs of indigenous peoples<br />
  • Falling birth rates and aging population</p>
<p>Over 95 percent of Taiwan’s population is of Han Chinese ancestry, 
  with the remainder composed of indigenous Austronesian peoples and 
  recent immigrants. Han Taiwanese are the descendants of immigrants that 
  arrived in two main waves—first, in the 17th century after the Manchu 
  invasion of the main-land, and later, in 1949, when the ROC government 
  relocated to the is-land. Austronesian peoples, meanwhile, have 
  inhabited the island for millennia. Since the late 1990s, an increased 
  number of marriages be-tween ROC citizens and foreign nationals has 
  further diversified the nation’s ethnic makeup.</p>
<p>Mandarin, the official language, is almost universally spoken and 
  understood, while large segments of the population also speak Holo and 
  Hakka. In addition, Taiwan’s indigenous groups have their own 
  Austronesian languages while immigrants speak a variety of tongues. 
  Longer lifespans combined with one of the lowest birth rates in the 
  world have made Taiwan a rapidly aging society.</p>
<p>People over 65 now exceed 10 percent of the population, while each 
  woman on average gives birth to one child during her lifetime. Policies 
  have been enacted at the national and local levels to create a 
  supportive child-rearing environment, improve preventative health care 
  and provide a comprehensive social security net for the graying 
  population.</p>',
       ]);

       

       Sport::create([
       	'description' => '<div class="et-box et-shadow">
				  <div class="et-box-content">
				    <h4><span style="color: #000080;">At a Glance</span></h4>
				    <ul>
				      <li><span style="color: #008080;">Athletes shine in golf and powerlifting</span></li>
				      <li><span style="color: #008080;">Stellar performance at the Asian Games</span></li>
				      <li><span style="color: #008080;">Encouraging more of the public to be physically active.</span></li>
				    </ul>
				  </div>
				</div>
				<p><span style="color: #333399;">Sports figures from the Republic of 
				  China are being recognized internationally for their achievements at 
				  high-profile competitions, and the nation has in recent years been the 
				  host of a number of world sporting events. Often participating under the
				  name “Chinese Taipei,” the nation’s top athletes are steadily building a
				  reputation for themselves in a variety of sports ranging from billiards
				  and golf to taekwondo and powerlifting.</span></p>
				  <img src="/frontend/img/sports.jpg" width="70%">
				<p><span style="color: #333399;">Having hosted the 2009 World Games and 
				  Summer Deaf Olympics, Taiwan is once again looking to showcase its 
				  sports environment and management efficiency. In January 2011, it held 
				  the season-ending Super Series Finals for the world’s best eight 
				  badminton players and, in July, staged for the first time ever a world 
				  baseball championship for players 12 and under. It is also scheduled to 
				  hold a major women’s golf event in October.</span></p>',
       ]);

       Society::create([
       	'description' => '<img src="/frontend/img/secians.jpg">
<p>• Taiwan a leader in gender equality<br />
  • Pension schemes<br />
  • Boosting workers’ rights</p>
<br />The
  Tainan City government hosts a mass wedding ceremony at Yizai Jincheng,
  or Eternal Fortress, overlooking Anping Harbor. Built in 1874, the 
  fortress is deemed an auspicious site for the ceremony as the expression
  yizai —literally meaning “100 million years”—is regarded as symbolic of
  eternal love and devotion. (Liao Tai-ji)
  <p></p>
</div>
<img src="/frontend/img/socity.png">
<p>Taiwan’s population of some 23 million is graying, and its fertility 
  rate fell to 0.895 per woman in 2010, the lowest in the world. Policy 
  measures have been enacted to encourage young people to marry and have 
  children. Public pension schemes offer a measure of economic security 
  for the elderly, while a variety of welfare services are provided to the
  disadvantaged. Laws are in place to strengthen protection of children, 
  the disabled, low-income groups and workers, as well as to safeguard the
  rights of women in the workplace. Programs are being implemented to 
  help low-income households recover from economic difficulties and become
  more prosperous through education and vocational training. And a new 
  Cabinet-level agency tasked with promoting women’s rights is set to 
  be-gin operations in 2012.Taiwan’s unemployment rate dropped to 4.27 
  percent as of the end of May 2011, down from a high of 6.13 percent in 
  2009, due to a strong re-bound from recession resulting from global 
  economic turmoil.</p>',
       ]);

       ScienceTechnology::create([
       	'description' => '<p>At a Glance<br />
  • Profiles of publicly supported S&T organizations and programs<br />
  • Nanotechnology playing a critical role across the board<br />
  • Pushing innovation through interdisciplinary and international collaboration<br />
  • Transforming Taiwan into a global cloud-computing nerve center</p>
<p>Global surveys give Taiwan high scores for its science and technology
  (S&T) environment and innovation. Still, its S&T community, 
  including government-supported institutions, universities and private 
  enterprises, are striving to embrace creativity as the primary force 
  that will enable them to remain dynamic and competitive.</p>
<p>Collaboration between these sectors is producing valuable fruits. 
  They range from powerful next-generation computer processors and 
  nano-scale computer memory units to pharmaceutical and radiological 
  therapies for cancer, and from satellites that boost the accuracy of 
  mete-orological and climatic analyses to advances in wireless and 
  broadband Internet communications that greatly expand vistas for 
  e-learning and access to valuable software resources.A critical factor 
  in Taiwan’s fast-paced evolution over the past six decades, from an 
  impoverished agrarian economy to a prosperous knowledge-based economy, 
  has been government development programs. This chapter focuses on the 
  contributions of such programs to Taiwan’s maturing research and 
  development capabilities.</p>',
       ]);

       ArtsCulture::create([
       	'description' => '<p>Most of Taiwan ‘s 23 million inhabitants are descendants of 
  immigrants from different parts of mainland China , especially the 
  coastal provinces of Fujian and Guangdong . About 360,000 “aborigines”, 
  believed to be of Malayo-Polynesian origin, inhabit the mountainous 
  central and eastern parts of Taiwan.</p>
<p>Because of the make-up of the population and because of the fact that
  Taiwan was ruled by the Japanese between 1895 and 1945, Taiwan ‘s 
  culture is a unique mixture of mainly Chinese elements with a Japanese 
  flavor. In addition, it is heavily influenced by Western cultures and in
  recent years, characteristics of the aboriginal culture have also 
  become more visible.<br />
  Fine arts, architecture, folk traditions and popular culture embody both
  traditional and modern and both Asian and Western motifs.</p>
<p>Arguably the number one attraction of Taiwan is the National Palace 
  Museum on the outskirts of the capital city Taipei . It is the home of 
  over 650,000 pieces of Chinese bronze, jade, calligraphy, painting and 
  porcelain which used to be in the possession of the Chinese imperial 
  household. The collection is so extensive that only 1% is on display at 
  any one time.</p>
<p>For people who want to experience some of the Taiwan ‘s traditional 
  art forms, there are few better places to turn to than glove puppetry 
  and the Taiwanese opera. In addition, sculpture, music, dance and 
  theater representing the Hakka and the indigenous peoples have had a 
  bigger following in recent years.</p>
<p>Useful links:<br />
  The Council for Cultural Affairs<br />
  <a href="http://english.cca.gov.tw/">http://english.cca.gov.tw/</a><br />
  National Palace Museum<br />
  <a href="http://www.npm.gov.tw/en/home.htm">http://www.npm.gov.tw/en/home.htm</a><br />
  National Chiang Kai-shek Cultural Center<br />
  <a href="http://www.ntch.edu.tw/">http://www.ntch.edu.tw/</a><br />
  National Center for Traditional Arts<br />
  <a href="http://www.ncfta.gov.tw/ncfta_eh/main/index.aspx">http://www.ncfta.gov.tw/ncfta_eh/main/index.aspx</a></p>',
       ]);

       TravelTourism::create([
       	'description' => '<img src="/frontend/img/Yearbook.jpg">
<p>Legend has it that when, during the 16th century, Portuguese 
  sailors first saw the island which is Taiwan, they were so impressed 
  with its verdant beauty that they called it “Ilha Formosa”-the beautiful
  island.</p>
<p>Today, much of what they saw 400 years ago remains intact on this 
  sub-tropical island located off the southeastern coast of China. 
  Two-thirds of the island nation’s area of 36,000 square kilometers 
  (14,400 square miles) is covered by forested mountains. More than 250 
  mountain peaks rise over 3,000 meters (9,840 feet), including Yushan (or
  Mount Jade), the highest mountain peak in northeast Asia at 3,952 
  meters (12,965 feet).</p>
<p>In addition to its numerous hiking trails, the mountainous terrain 
  offers some of the best views anywhere in the world, such as the Sun 
  Moon Lake, the breath-taking Taroko Gorge and the pre-dawn sea of clouds
  at Alishan, one of Taiwan’s 20 national parks and scenic areas. Then 
  there are the spectacular coastlines in the northeast and the east, and 
  the beautiful sandy beaches at the southern tip of the island.</p>
<p>After a day or more in the mountains, perhaps topped off with a hot 
  spring bath, or after a long day at the beach, it is time to get back to
  one of the many cities that hardly seem to sleep.</p>
<p>When they came over to Taiwan en mass in 1949, mainlanders brought 
  with them culinary skills from all over China. As a result, Taiwan 
  boasts some of the best, and probably most varied-Chinese food in the 
  world.</p>
<p>That is not all that Taiwan has to offer in terms of dining 
  experience. Local Hakka and aboriginal cuisine has become more popular 
  in recent years as interest in domestic culture grows. Numerous 
  restaurants serving Thai, Burmese and other Southeast Asian dishes have 
  sprung up, adding to the already rich variety of choices.</p>
<p>Be sure to visit the night markets of any major city to savor such 
  unique delicacies as oyster omelets and calamari balls. These usually 
  boisterous open-air markets are also the place to go for bargain hunters
  looking for cheap clothing or electronic goods.<br />
  For upscale products, head out to one of the department stores, where 
  you can find anything from haute couture to state-of-the-art stereo 
  components to the latest gadgets.</p>
<p>While in the capital city of Taipei, one of the must-dos for any 
  visitor is a pilgrimage to the Palace Museum, which houses treasures 
  that once belonged to the Chinese imperial household. And Taipei 101, 
  the world’s tallest building currently in use at 510 meters (1,671 
  feet), and its surrounding area is the place to see what is most modern 
  and fashionable in this city of 2.6 million residents.</p>
<p>Useful links:<br />
  The Bureau of Tourism<br />
  <a href="http://www.taiwan.net.tw/">http://www.taiwan.net.tw/</a><br />
  The Taipei City Government<br />
  <a href="http://english.taipei.gov.tw/">http://english.taipei.gov.tw/</a></p>',
       ]);

       HistoryPolitics::create([
       	'description' => '<p>Modern-day Taiwan is often described as economically 
  prosperous and politically vibrant. But that has not always been the 
  case. As recently as 40 years ago, the island was an economic backwater,
  with the government fighting a battle to keep diplomatic allies from 
  switching recognition to Beijing.</p>
<p>The Nationalist (or Kuomingtang, KMT) government had lost control of 
  the Chinese mainland to the Communists some 20 years earlier and Taiwan 
  was becoming more and more isolated internationally. In 1971, Taiwan 
  lost its seat in the United Nations and in 1979, the United States cut 
  off official ties with the island.</p>
<p>Although a member of the World Trade Organization and of the 
  Asia-Pacific Economic Cooperation forum, as of 2007, the nation of 23 
  million people, formally called the Republic of China, is recognized by 
  only about two dozen countries, mainly in Central America, the Caribbean
  and the South Pacific.</p>
<p>In spite of diplomatic setbacks, Taiwan’s people and its government 
  worked together to achieve what would later be called the Taiwan 
  Economic Miracle, registering one of the longest sustained periods of 
  double-digit growth in modern times.</p>
<p>As one of the world’s leading trading nations, Taiwan now holds the 
  world’s fourth largest foreign exchange reserves-U.S.$270 billion as of 
  November 2007, a record high-after China, Japan and Russia.</p>
<p>After martial law was lifted in 1987 under President Chiang 
  Ching-kuo,the KMT’s uninterrupted autocratic rule gradually gave way to 
  free and democratic elections, culminating in the first ever peaceful 
  transition of power in a Chinese society in May 2000, when Chen 
  Shui-bian of the pposition Democratic Progressive Party was sworn in as 
  president.</p>
<p>The presidency is term-limited and Mr. Chen will step down in May 
  2008 after two 4-year terms. His successor will be chosen in the 
  election to be held on March 22, 2008.</p>
<p>Useful links:<br />
  The Government Information Office<br />
  <a href="http://english.www.gov.tw/">http://english.www.gov.tw/</a><br />
  The Office of the President<br />
  <a href="http://www.president.gov.tw/en/">http://www.president.gov.tw/en/</a><br />
  The Ministry of Foreign Affairs<br />
  <a href="http://www.mofa.gov.tw/">http://www.mofa.gov.tw/</a></p>',
       ]);

       TradeEconomy::create([
       	'description' => '<p>Over the past 50 years, in what is often referred to as the 
  Taiwan Economic Miracle, the island nation of some 23 million people has
  transformed itself from a recipient of U.S. aid to an aid donor and 
  major foreign investor. Taiwan is currently a major source of direct 
  foreign investment for China and Southeast Asian countries, such as 
  Vietnam, Thailand, Indonesia, Malaysia and the Philippines.</p>
<p>With a dynamic export-driven economy, Taiwan holds the world’s fourth
  largest foreign exchange reserves-U.S.$270 billion as of November 2007,
  a record high-after China, Japan and Russia. It also remains one of the
  world’s leading trading nations, with an export surplus that is 
  expected to reach U.S.$23.77 billion for 2007, representing a growth of 
  some 11% over 2006.</p>
<p>Agriculture constitutes only about 2% of Taiwan’s GDP and as 
  traditional labor-intensive industries are steadily moving offshore, 
  they are being replaced with more capital and technology-intensive 
  industries. High-value, high-quality IT products made in Taiwan are sold
  all over the world.</p>
<p>The service industry accounts for the lion’s share of the country’s 
  GD at over 70 per cent, employing some 5.8 million people, or 58% of 
  Taiwan’s workforce.</p>
<p>After decades of sustained economic growth, near full employment and 
  low inflation, in 2001, Taiwan suffered its first recession in over 50 
  years. The economy has been in recovery since 2002. The outbreak of 
  severe acute respiratory syndrome (SARS) slowed growth to 3.5% in 2003. 
  The world economic upturn drove growth to 6.2% the next year.</p>
<p>Since then, Taiwan’s economy has been growing at a pace of over 4% each year.</p>
<p>Useful links:<br />
  The Ministry of Economic Affairs (MOEA)<br />
  <a href="http://www.moea.gov.tw/">http://www.moea.gov.tw/</a><br />
  The Bureau of International Trade, MOEA<br />
  <a href="http://www.trade.gov.tw/">http://www.trade.gov.tw/</a><br />
  The Taiwan Stock Exchange<br />
  <a href="http://www.tse.gov.tw/">http://www.tse.gov.tw/</a><br />
  The Taiwan External Trade Development Council<br />
  <a href="http://www.taiwantrade.com.tw/">http://www.taiwantrade.com.tw/</a></p>',
       ]);

        VisaInfo::create([
       	'description' => '<p><strong>Foreign nationals of the following 41 countries can enter Taiwan visa-free as a <em>visitor</em> provided that their passports are valid for at least 6 months upon entry:</strong></p>
<p><strong>For up to 90 days:</strong> All 27 <strong>European Union</strong> member states, Canada, Iceland, Israel, Liechtenstein, Monaco, New 
  Zealand, Norway, Switzerland, the United States and the Vatican City.</p>
<p><strong>For up to 30 days:</strong> Australia, Malaysia, Singapore, and South Korea</p>
<p>If citizens of the above countries present an emergency or temporary 
  passport, they will be required to apply for a landing visa on arrival 
  by supplying a passport photo and paying a fee of NT$2,400.</p>
<p>Citizens of Japan need only present a passport with at least 3 
  months’ validity (rather than 6 months’ validity) upon entry. Citizens 
  of the United States can enter Taiwan on a passport with less than 6 
  months’ validity on the date of arrival by supplying a passport photo 
  and paying a fee of US$184 or NT$5,600.</p>
<p>Citizens of Canada and the United Kingdom can extend their stay for 
  an extra 90 days (i.e. a total stay of up to 180 days) free of charge – 
  more information is available on <a href="http://www.boca.gov.tw/public/Attachment/1121416524871.doc" rel="nofollow">this Bureau of Consular Affairs information sheet</a>.</p>
<p>Residents of <strong>Hong Kong</strong> and <strong>Macau</strong> in
  China who hold valid Hong Kong / Macau SAR passports or British 
  National (Overseas) passport should apply for an entry permit, which can
  be done on arrival or online before departure if they were born in 
  their respective territories or have been to Taiwan previously after 
  1983. From July 2008, holders of mainland Chinese (which is different 
  from Hong Kong and Macau) passports may visit Taiwan for tourism if they
  join an approved guided tour.</p>
<p>Citizens of India, Indonesia, the Philippines, Thailand and Vietnam 
  who have a valid entry visa or permanent resident card issued by a 
  Schengen country, Australia, Canada, Japan, New Zealand, the United 
  Kingdom or the United States can obtain a 30-day Visa on Arrival after 
  making an an online application.</p>
<p>Detailed information about visas is available at the website of the <strong>Bureau of Consular Affairs</strong>.</p>',
       ]);

        StudyTaiwan::create([
       	'description' => '<p>Taiwan has an outstanding higher education system that 
  provides opportunities for international students to study a wide 
  variety of subjects, ranging from Chinese language and history to 
  tropical agriculture and forestry, genetic engineering, business, 
  semi-conductors and more. Chinese culture holds education and 
  scholarship in high regard, and nowhere is this truer than in Taiwan. In
  Taiwan you will experience a vibrant, modern society rooted in one of 
  world’s most venerable cultures, and populated by some of the most 
  friendly and hospitable people on the planet. A great education can lead
  to a great future. What are you waiting for? Come to Taiwan and fulfill
  your dreams. There are many reasons international students will find 
  Taiwan an exciting and rewarding place to pursue their education.</p>
<p>We ask international students in Taiwan about their reasons for studying in Taiwan:</p>
<img src="/frontend/img/visa.jpg">
<p>&nbsp;</p>
<div><strong>Available Scholarship – 20%</strong></div>
<p>To encourage promising students from foreign countries to learn 
  Chinese, and pursue undergraduate and graduate studies in Taiwan, R.O.C.
  Government provides many kinds of scholarship.</p>
  <img src="/frontend/img/DisplaySmallPicture.jpg">
<div><strong>Academic Resources and Quality – 19%</strong></div>
<div></div>
<div>The government of Taiwan (Ministry of Education) places great 
  emphasis on quality in higher education. Several innovative programs 
  promote Taiwan’s international academic competitiveness. In addition, 
  Taiwan’s strong technology sector guarantees high quality education in 
  these fields and attracts students from developing countries to study 
  bio-technology, semi-conductor technology, business, forestry, 
  agriculture, animal husbandry, chemistry and so on.</div>
<div></div>
<div><strong>Rich and Colorful Culture – 15%</strong></div>
<div></div>
<img src="/frontend/img/MockUpARCFINAL.jpg">
<div>In Taiwan, ancient Chinese culture is uniquely interwoven in the 
  fabric of modern society. Cell phones, luxury sedans and skyscrapers 
  coexist with traditional Chinese calligraphy and painting, with tea 
  culture and ornate temples, and with ancient holidays such as Chinese 
  New Year, the Dragon Boat Festival and the Lantern Festival.</div>
<div></div>
<div><strong>Better Opportunity for Seeking Jobs Back at Home Country – 13%</strong></div>
<div></div>
<div><strong>Location – 8%</strong></div>
<div></div>
<div><strong>High-Standard Living Quality – 7%</strong></div>
<p>Taiwan’s infrastructure is advanced, and its law-enforcement and 
  transportation, communication, medical and public health systems are 
  excellent. In Taiwan, international students live and study in safety 
  and comfort.</p>
<div><strong>Better Opportunity for Further Study in Taiwan – 7%</strong></div>
<div></div>
<div><strong>Reasonable and Affordable Tuition – 6%</strong></div>
<div></div>
<div><strong>Others – 5%</strong></div>',
       ]);

        ScholarshipGuideline::create([
       	'description' => '<p>1. The Taiwan Scholarship Program Guidelines are duly enacted in accordance of the Taiwan Scholarship Plan.</p>
<p>2. Types of Scholarships and benefits:</p>
<p>(1) Undergraduate Scholarships: These scholarships are for foreign 
  students who want to pursue undergraduate studies at 
  universities/colleges in Taiwan. A stipend of NT$25,000 per month per 
  student will be provided.</p>
<p>(2) Master’s Scholarships: Scholarships in the amount of NT$30,000 
  per month will be provided for qualified foreign students who want to 
  pursue their master’s degrees at universities/colleges in Taiwan.</p>
<p>(3) Ph.D. Scholarships: Scholarships in the amount of NT$30,000 per 
  month will be provided for qualified foreign students who want to pursue
  their Ph.D. degrees at universities/colleges in Taiwan.</p>
<p>The aforementioned scholarships will be under the supervision of the 
  universities/colleges and stipends will be awarded monthly based on the 
  students’ attendance records and academic performance. Tuition, 
  accommodation, insurance and miscellaneous fees are all included in the 
  scholarships herein stated.</p>
<p>For the scholarships, which are sponsored by the Ministry of Foreign 
  Affairs of the Republic of China (ROC), each student will be provided 
  with a stipend of NT$30,000 per month, plus an economy airfare for 
  direct roundtrip flights.</p>
<p>3. Quotas and Scholarships Offered by Government Agencies:</p>
<p>Taiwan scholarship quotas will be discussed and decided by the Taiwan
  Scholarship Management and Promotion Committee and are contingent upon 
  the annual budget allotments.</p>
<p>Taiwan Scholarships are funded by the Ministry of Education (MOE), 
  the Ministry of Foreign Affairs (MOFA), the National Science Committee 
  of the Executive Yuan (NSC) and the Ministry of Economic Affairs (MOEA).
  Scholarships offered by the aforementioned agencies are as follows:</p>
<p>(1) MOE: Undergraduate/Masters’s/ Ph.D. Scholarships;</p>
<p>(2) MOFA: Undergraduate Scholarships;</p>
<p>(3) NSC: Master’s/ Ph.D. Scholarships; and</p>
<p>(4) MOEA: Master’s/ Ph.D. Scholarships; limited to graduate degree 
  programs and are related to science, engineering, agriculture, medicine 
  and hi-tech fields.</p>
<p>Recipients, whose scholarships are sponsored by the MOE or MOFA, may 
  attend Language Enrichment Programs (Hereinafter referred to as LEP) in 
  University-affiliated Chinese Language Centers (Hereinafter referred to 
  as language centers) in Taiwan up to one year, in order to improve their
  language proficiency, before beginning their degree programs. A stipend
  of NT$25,000 for MOE recipients, and NT$30,000 for MOFA recipients per 
  month, per student will be provided.</p>
<p>Those who apply for the Master’s and/or Ph.D. Scholarships from the 
  NSC and MOEA can not apply for the Language Enrichment Program.</p>
<p>4. Duration of Scholarships:</p>
<p>(1) Undergraduate Scholarships: maximum four years;</p>
<p>(2) Master’s Scholarships: maximum two years; and</p>
<p>(3) Ph.D. Scholarships: maximum three years.</p>
<p>The total and maximum number of years for foreign students to receive scholarships (including LEP) will be five years.</p>
<p>In principle, scholarships will begin from September of each year and
  continue until August, of the following year. Scholarship recipients 
  who are approved for summer programs or LEP may be assigned different 
  scholarship award dates.</p>
<p>Scholarships will begin from the month of student enrollment and will
  stop when the scholarship ends, the recipient graduates, and drops out,
  is expelled or upon cancellation of the scholarships or whichever comes
  first.</p>
<p>5. Qualifications: The applicants must meet the following requirements:</p>
<p>(1) They should have a good academic record and moral character;</p>
<p>(2) They should neither be Overseas Chinese Students nor ROC nationals;</p>
<p>(3) They should not be scholarship recipients from other ROC government agencies or institutions in Taiwan;</p>
<p>(4) They should not be exchange students who are admitted in 
  accordance with academic cooperation agreements made between local 
  educational universities/ colleges and foreign educational institutions;</p>
<p>(5) They should not have had their scholarships cancelled in accordance with these Guidelines;</p>
<p>(6) They should not have received Taiwan Scholarships of the same type;</p>
<p>(7) The total duration of their scholarship(s) should not exceed 5 years;</p>
<p>(8) They should not be foreign students who have already enrolled at 
  local educational institutions at their own expense. (However, they will
  be eligible to apply to individual universities/colleges for Foreign 
  Students’ Scholarships, which are subsidized by the MOE.)</p>
<p>6. Application Process:</p>
<p>(1) Procedure: The overseas missions of the ROC should refer to the 
  Regulations Governing Study for Foreign Students in the Republic of 
  China and these Guidelines while receive and review applications either 
  independently or jointly cooperate with foreign local governments, 
  schools, cultural and educational institutions. Each year, by the end of
  January, the overseas missions should report their selection and 
  assessment methods (through meetings or paper review) regarding these 
  scholarships to the related government agencies and the MOE.</p>
<p>(2) Application Period: Annually from February 1st through the end of March.</p>
<p>(3) Required Documents: Applicants need to submit the following documents:</p>
<p>A. Taiwan Scholarship Application Form (Form A with Study Plan; the format will be regulated by the MOE);</p>
<p>B. Proof of highest educational qualifications and academic performance;</p>
<p>C. Proof of application to enroll at local universities/colleges 
  and/or language centers (e.g. a copy of the application form); and</p>
<p>D. Other documents as requested by the overseas missions, of the ROC.</p>
<p>(4) Selection: After reviewing the application documents, the 
  overseas missions will select eligible scholarship candidates, as well 
  as alternatives and create a list. This list will be sent to the related
  universities/colleges or language centers by the end of April for their
  reference. Copies of this list will also be provided to the related 
  government agencies and the MOE.</p>
<p>(5) Approval: Applicants are responsible for their application 
  process to the universities/colleges or language centers that they would
  like to attend. Each school and/or language center shall refer to the 
  guidelines of individual schools admission process for foreign students 
  and begin the application review process. The school and/or language 
  center should notify candidates, of their final decision, no later than 
  mid-June.</p>
<p>(6) Notification of Admission: Applicants, upon receiving their 
  admission letter, need to submit a copy of the admission letter to the 
  designated respective overseas missions in order to secure their 
  scholarship by no later than the end of June. Late submission of these 
  documents, after the deadline will be deemed as a waiver for accepting 
  the scholarship. In this case, the respective overseas mission should 
  send a scholarship award letter to all qualified recipients and inform 
  the alternative(s) in order to fill any vacancy(s). Candidates will be 
  disqualified if they fail to pass the application review process of 
  respective schools.</p>
<p>(7) Acceptance Lists: By the end of July, the overseas missions 
  should provide recipient acceptance lists, which will include their 
  legal names, Chinese names, nationalities, gender, scholarship 
  sponsoring agencies, type of scholarship, duration of scholarship, 
  admitting universities/colleges and/or language centers, highest 
  educational qualifications, references of the recipients and other 
  information to the related government agencies (including the MOE) and 
  universities/colleges and/or language centers involved. The overseas 
  missions shall also provide such information to the Bureau of Consular 
  Affairs of MOFA and the National Police Agency of Ministry of Interior, 
  in order to assist them with their follow-up procedures. In case of 
  special conditions or failure to complete the aforementioned processes, 
  before the required deadlines, the overseas missions should report such 
  circumstances to the related government agencies for approval (and 
  inform the MOE of such events).</p>
<p>(8) For those recipients, whose scholarships are funded by MOFA, 
  one-way economy airfare tickets to Taiwan will be bought by the 
  respective overseas missions. The overseas missions need to submit the 
  original receipts and copies of passenger coupons to MOFA in order to be
  reimbursed. The return economy airfare tickets will be bought by MOFA.</p>
<p>7. Renewal process for scholarship recipients in Taiwan before the 
  expiration of scholarships and the application for enrollment:</p>
<p>(1) Recipients who want to pursue further study programs need to 
  follow the terms found in Subparagraph (2) and (3) of this Article. For 
  other recipients in Taiwan, who wish to renew their scholarships, they 
  have to submit each year a Taiwan Scholarship Application Form (Form B; 
  the format will be regulated by the MOE) and reports of their academic 
  performance to their universities/colleges by the end of February. The 
  universities/colleges will review their applications to see if they are 
  qualified and send the list to the related government agencies 
  (including the MOE) for review in order to reserve the number of 
  scholarship recipients and follow the Article 10 for allocation.</p>
<p>(2) The MOE may assist recipients who have been approved for 
  scholarships up to five years (the ELP and undergraduate degree 
  programs) in applying to enroll undergraduate programs. If the said 
  recipients are unable to apply to universities/colleges on their own, 
  they may submit their reports of academic performance (including the 
  academic records for each year of their highest study, including 
  language center records) and the Admission Assistance Application Form 
  (the format will be regulated by the MOE) to the language centers. These
  language centers will coordinate all forms and send them to the MOE. 
  The MOE will assist in selecting the proper universities, according to 
  the recipients’ wishes and levels of language proficiency. Applicants 
  should agree to abide by all final arrangements.</p>
<p>(3) Scholarship recipients, who wish to continue to study for their 
  master or doctoral degrees, upon completion of their previous course of 
  study, need to apply for the admission to the new degree program on 
  their own.</p>
<p>(4) Universities/colleges that accept these scholarship recipients, 
  as stated in Subparagraph (2) and (3) of this Article, shall submit the 
  lists to the related government agencies (including the MOE) by the end 
  of June for review, in order to reserve the number of scholarship 
  recipients and follow Article 10 for allocation.</p>
<p>8. Application process for re-applying for Taiwan Scholarships after 
  the scholarships expire: Scholarship recipients who have already studied
  in Taiwan will be regarded as new students after the expiration of 
  their scholarships. If they wish to re-apply for other types of 
  scholarship and pursue further degree programs here, they need to follow
  Article 6 of these Guidelines and submit the Taiwan Scholarship 
  Application Form (Form A) and their academic records to the ROC overseas
  missions by the end of March. The total duration of their scholarship 
  period cannot exceed five years, as regulated by Article 4 Paragraph 2 
  of the Guidelines.</p>
<p>Undergraduate, Master’s and Doctoral Scholarships recipients whose 
  scholarship period was awarded for only one year, in accordance to the 
  previous version of these Guidelines, should renew their scholarships 
  following Article 7 Subparagraph (1) of these Guidelines, and are not 
  subject to the regulations stated in the previous Paragraph of this 
  Article.</p>
<p>9. The Suspension and Cancellation of Scholarships:</p>
<p>(1) LEP students:</p>
<p>A. If a student is absent for more than ten hours of class (serious 
  illness and accidents excluded) within a single month, the language 
  centers will suspend their scholarships the following month.</p>
<p>B. After studying for one quarter, if a student’s academic average is
  less than 80%, his/her scholarships for the next quarter will be 
  suspended for one month. If a student’s academic average is less than 
  80% for two consecutive quarters, his/her scholarship status will be 
  cancelled beginning with the next quarter. The remainder of the 
  scholarship will also be cancelled.</p>
<p>C. If a student is suspended from or drops out of school, the 
  language center will suspend his/her scholarship and inform the related 
  government agencies in writing (including the MOE) in order to cancel 
  his/her scholarship status. The remaining scholarships will also be 
  cancelled.</p>
<p>(2) Undergraduate/ Master’s/ Ph.D. students:</p>
<p>A. For those Undergraduate/ Master’s / Ph.D. scholarships recipients 
  who are in the first two years of their study, if their academic average
  is below the passing standard set up by the school for any given 
  semester, their school will suspend their scholarships for one month 
  beginning with the next semester. If the schools have not set up an 
  academic grading standard, then an undergraduate student’s academic 
  average cannot be less than 60%, while a master and doctoral student’s 
  academic average cannot be less than 70%. If a student is below passing 
  for two consecutive semesters, their scholarship status will be 
  cancelled starting the next semester. Their remaining scholarships will 
  also be cancelled.</p>
<p>B. For those who are in their third year of a doctoral program, they 
  must submit their thesis proposals to their schools, by the end of 
  October of that year. Scholarships will be granted each month, if the 
  schools approve the students’ proposals. Otherwise, scholarships will be
  suspended until proposals are approved, and will resume beginning from 
  the month of approval.</p>
<p>C. If a student is suspended from or drops out of school, his/her 
  school will automatically suspend his/her scholarships and inform the 
  related government agencies in writing (including the MOE) in order to 
  cancel his/her scholarship status. The remaining scholarships will also 
  be cancelled.</p>
<p>10. The Allocation and Verification of Scholarships Accounts</p>
<p>(1) Allocation: Universities/colleges need to make a list of 
  scholarship recipients and vouchers based on the various types of 
  scholarships provided by the different government agencies. 
  Universities/ colleges should enclose their list of qualified recipients
  and vouchers, and apply to the MOFA or the MOE (scholarship stipends 
  provided by the NSC and the MOEA are handled through the MOE) for 
  appropriation in January and August. Each institution will directly pay a
  monthly stipend to the students or to their accounts.</p>
<p>(2) Verification of Scholarship Financial Transactions or Reports</p>
<p>A. For scholarships provided by MOFA, universities/colleges need to 
  provide student signed receipts, or documents which show that money has 
  been transferred into the students’ bank accounts, to the MOFA for 
  verification in August and December.</p>
<p>B. For scholarships provided by the NSC and the MOEA, 
  universities/colleges need to provide three copies of financial 
  transaction reports (signed by the head of the universities/colleges, 
  accountants and cashiers) and any remainder of the stipends to the MOE 
  (for it to make a transfer to the NSC and the MOEA at the end of fiscal 
  year in order to close the case) in August and December.</p>
<p>C. For scholarships provided by the MOE, universities/colleges need 
  to provide two copies of financial transaction reports (signed by the 
  head of the universities/colleges, accountants and cashiers) and any 
  remainder of the stipends to the MOE in August and December. 
  Universities/colleges need to also keep the original copies for the 
  Ministry of Audit or other related authorities for review.</p>
<p>(3) Deductions: Universities/colleges and language centers may deduct
  tuition, insurance fees and other required fees from stipends, one time
  or in installments, before granting the remainder of the stipends to 
  students.</p>
<p>11. Transferring to other schools: If scholarship recipients need to 
  transfer to other institutions due to health, psychological reasons or 
  special environmental surroundings, they need to follow the Regulations 
  Governing Study for Foreign Students in Taiwan. If the institution or 
  language center agrees to their transfer, these institutions must inform
  the related government agencies (including the MOE) for future review. 
  Only one transfer is permitted.</p>
<p>12. Additional Information:</p>
<p>(1) The MOE may allocate administration subsidies to institutions 
  that join the Taiwan Scholarships Program and set aside a budget to 
  assist institutions in setting up an information service center, in 
  order to strengthen communication and the governing system for 
  scholarships students.</p>
<p>(2) ROC overseas missions shall organize orientations, in order to 
  provide scholarship recipients with relevant information, before they 
  travel to Taiwan.</p>
<p>(3) ROC overseas missions shall be aware, if a student gives up 
  his/her opportunity to come to Taiwan. If such a case happens, the ROC 
  overseas missions will replace this student with another alternative.</p>
<p>(4) Scholarship recipients should arrive at their designated 
  universities/colleges or language centers prior to the day of 
  registration. Institutions should report the names of those who fail to 
  register, to the related government agencies (including the MOE), by the
  end of October.</p>
<p>(5) Medical insurance fees are already included in the stipends. 
  Universities/colleges and language centers should require that 
  scholarship recipients join the National Health Insurance or purchase 
  other forms of medical insurance.</p>
<p>(6) The ROC overseas missions should ask scholarship recipients to 
  provide them with academic records or a report, postal and email 
  addresses, within one month of the return to their respective countries 
  after they complete their studies in Taiwan.</p>
<p>(7) Each year by the end of October, the ROC overseas missions need 
  to send a comprehensive evaluation, which should include each student’s 
  academic records and the other materials as stated in the Subparagraph 
  (6) of this Article, to all the related government agencies (including 
  the MOFA and the MOE)</p>
<p>13. The selection process regarding the Taiwan Scholarships, their 
  types, benefits and duration will be subject to the terms regulated in 
  the above Guidelines. Scholarships, which have been awarded due to 
  bilateral negotiations, cultural and educational agreements, or based on
  the terms of equality and reciprocity, or special circumstances, 
  approved by heads of government agencies are not subject to the terms 
  and regulations under these Guidelines.</p>
<p>&nbsp;</p>
<p>Note: These Guidelines have been adopted in Chinese, in the event of 
  any discrepancy between the English translation and the Chinese 
  original, the Chinese version will prevail.</p>',
       ]);

        ScholarshipInstruction::create([
       	'description' => '<img src="/frontend/img/1.png" style="width: 559px;height: 197px;">

<p align="center"></p>
<p align="left"><strong>I. Purpose</strong></p>
<p>The Taiwan Scholarship Program was established jointly by three 
  government agencies of the Republic of China (Taiwan) — the Ministry of 
  Education (MOE), the Ministry of Foreign Affairs (MOFA) and the National
  Science Council of the Executive Yuan (NSC) — to encourage outstanding 
  international students to undertake degree programs in Taiwan. While 
  providing study opportunities for a wide range of disciplines, at 
  Taiwan’s universities and colleges, this program also aims to:</p>
<ol>
  <li>
    <div>Promote knowledge, understanding and friendship between people in Taiwan and in countries around the world.</div>
  </li>
  <li>
    <div>Provide opportunities to increase academic and educational links with international institutions of higher learning.</div>
  </li>
  <img src="frontend/img/21120146371.jpg">
  <li>
    <div>Develop outstanding professionals and experts to meet the needs of the global society.</div>
  </li>
</ol>
<p><strong>II. The Focus of Government Agencies Funding the Taiwan Scholarships </strong></p>
<p>There are three government agencies that fund this program, each with
  a different focus in terms of recipients’ nationalities and study 
  programs:</p>
<ul>
  <li>
    <div><strong>MOFA Scholarship</strong>:</div>
  </li>
</ul>
<blockquote dir="ltr">
  <p dir="ltr">Recipients from countries that have diplomatic relations 
    with the R.O.C. (Taiwan) or countries specified as being diplomatically 
    favorable by MOFA.</p>
  <p dir="ltr">Undergraduate and/or postgraduate degree programs. 
    Embassies of the R.O.C. can also award a pre-degree Mandarin Language 
    Enrichment Program (LEP) scholarship to recipients to improve their 
    language abilities.</p>
</blockquote>
<ul>
  <li>
    <div><strong>MOE Scholarship</strong>:</div>
  </li>
</ul>
<blockquote dir="ltr">
  <p>Recipients from countries other than those specified in the MOFA Scholarship.</p>
  <p>Undergraduate and/or postgraduate programs. R.O.C.’s overseas offices
    can also designate a pre-degree Mandarin Language Enrichment Program 
    (LEP) to recipients to improve their language abilities.</p>
</blockquote>
<ul>
  <li>
    <div><strong>NSC Scholarship</strong>:</div>
  </li>
</ul>
<blockquote dir="ltr">
  <p>Recipients from countries other than those specified in the MOFA Scholarship. Postgraduate programs only.</p>
</blockquote>
<p><strong>III. Amount of Scholarships </strong></p>
<p>The amount of each scholarship varies in accordance with the funding government agency’s policy:</p>
<ol>
  <li>
    <div><strong>MOFA</strong> Scholarship: One economy-class, direct-route 
      roundtrip international airfare ticket, plus a monthly stipend of 
      NT$30,000 (approximately US$930).</div>
  </li>
  <li>
    <div><strong>MOE</strong> Scholarship: A monthly stipend of NT$25,000 
      (approximately US$775) for undergraduate or LEP study, and NT$30,000 for
      a postgraduate degree program.</div>
  </li>
  <li>
    <div><strong>NSC</strong> Scholarship: A monthly stipend of NT$30, 000.</div>
  </li>
</ol>
<blockquote dir="ltr">
  <p><strong>Recipients are responsible for their own expenses.&nbsp;</strong></p>
</blockquote>
<p><strong>IV. Duration of Award&nbsp;</strong></p>
<ul>
  <li>
    <div><strong>The Award Period in Terms of Study Programs </strong></div>
  </li>
</ul>
<blockquote dir="ltr">
  <p>The award period for each degree/study program is as follows:</p>
</blockquote>
<ol>
  <ol>
    <li>
      <div><strong>Undergraduate </strong>program: maximum 4 years.</div>
    </li>
    <li>
      <div><strong>Master’s</strong> program: maximum 2 years.</div>
    </li>
    <li>
      <div><strong>Doctoral</strong> program: maximum 3 years.</div>
    </li>
    <li>
      <div><strong>LEP</strong>: maximum 1 year.</div>
    </li>
  </ol>
</ol>
<ul>
  <li>
    <div><strong>Maximum Duration of Combination of Awards </strong></div>
  </li>
</ul>
<blockquote dir="ltr">
  <p>Upon completion of a LEP or a degree program, a
    recipient may apply for a scholarship for a degree program leading to a
    higher degree. However, the total duration of an award for any 
    combination of degree/study programs is a maximum of <strong>five years</strong>.</p>
</blockquote>
<ul>
  <li>
    <div><strong>LEP Award </strong></div>
  </li>
</ul>
<blockquote dir="ltr">
  <p>The LEP award is neither mandatory nor 
    automatically granted; it has to be awarded by R.O.C. Embassies or 
    Representative Offices where the applicant submitted his/her 
    application. The LEP must be undertaken <strong>in the first year if it is included in the total award period</strong>.
    If applying for the LEP program during the first year, then the 
    applicant must apply for his/her degree program&nbsp; the second year.</p>
</blockquote>
<ul>
  <li>
    <div><strong>Annual Award Period </strong></div>
  </li>
</ul>
<blockquote dir="ltr">
  <p>The Annual award periods are<strong> from September 1<sup>st </sup>through August 31<sup>st</sup> of the following year</strong>.&nbsp;
    Recipients must matriculate within the award period unless approved by 
    the receiving institution and the scholarship funding government agency.
    If recipients fail to arrive in Taiwan to study during this period, 
    their award status will be cancelled and cannot be extended for another 
    year.</p>
  <p>If recipients begin their study after the intended study term/quarter
    has started, their award period will become effective from the month 
    they matriculate, at their universities/colleges or Mandarin training 
    centers in Taiwan.</p>
</blockquote>
<ul>
  <li>
    <div><strong>Expiration of Award </strong></div>
  </li>
</ul>
<blockquote dir="ltr">
  <p>No matter whether a recipient begins undertaking language training courses in September or later, <strong>the LEP award period will expire on August 31<sup>st</sup></strong>, even if its duration may be less than the designated one year period.</p>
  <p>All awards will end by the last month of their specified award 
    period. However, if recipients graduate, drop out, are expelled from 
    their institutions, violate R.O.C. laws, receive any major demerits, or 
    their scholarships are revoked, whichever comes first, the award will be
    terminated.</p>
</blockquote>
<p><strong>V. Eligibility&nbsp;</strong></p>
<p>An applicant must meet all of the following criteria:</p>
<ol>
  <li>
    <div>Be a high school graduate or above, have an excellent academic 
      performance in his/her most recent formal educational study experience, 
      be of good moral character and does not have any criminal records.</div>
  </li>
  <li>
    <div>Is not an R.O.C. (Taiwan) national.</div>
  </li>
  <li>
    <div>Does not have the status of being an overseas compatriot student.</div>
  </li>
  <li>
    <div>Has never enrolled at any educational institution in Taiwan for the
      same level of degree or LEP that he/she plans to matriculate at.</div>
  </li>
  <li>
    <div>Is not an exchange student in accordance with any agreement of 
      cooperation between an international university/college and an 
      educational institute in Taiwan, at the time of receiving a Taiwan 
      Scholarship.</div>
  </li>
  <li>
    <div>Has never received the scholarship to undertake any degree program or language study within the total award period of 5 years.</div>
  </li>
  <li>
    <div>Does not have any revocation record regarding the Taiwan 
      Scholarship Program nor from the Ministry of Education’s Huayu 
      Enrichment Scholarship Program.</div>
  </li>
  <li>
    <div>Is not a recipient of any other scholarship or subsidy offered by 
      the Taiwan government or from any other educational institutions in 
      Taiwan.</div>
  </li>
</ol>
<p><strong>VI. Application and Selection Process </strong></p>
<p>For the application, the applicant must send all completed documents to the <strong>nearest Taiwan Embassy or Representative Office in his/her home country</strong><strong>;</strong> see <a href="http://www.mofa.gov.tw/webapp/lp.asp?ctNode=1064&amp;CtUnit=30&amp;BaseDSD=30&amp;mp=6" target="_nwMof">website</a> for nearest embassy or representative office: 
  http://www.mofa.gov.tw/webapp/lp.asp?ctnode=1864&ctunit=30&basedsd=30&mp=6</p>
<p>In principle, the yearly application period is from February 1<sup>st</sup> through March 31<sup>st</sup>.
  However, the actual application period will be in accordance with the 
  general regulations of the local Taiwan Representative Offices.</p>
<p>For the application period, guidelines and forms, types of 
  scholarship and quotas, as well as information regarding the selection 
  process and outcome announcement, applicants should directly contact the
  relevant Taiwan Embassy or Representative Office, as early as possible.<strong> </strong></p>
<p><strong>Application Documents: </strong>A complete application must include the following materials:</p>
<ol>
  <li>
    <div>One copy of the completed application form.</div>
  </li>
  <li>
    <div>One photocopy of applicant’s passport or other nationality certificates.</div>
  </li>
  <li>
    <div>One photocopy of the highest-level diploma and a complete grade transcript.<br />
      (Note: These documents must be authenticated by a Taiwan overseas 
      representative office, if issued by international educational 
      institutions.)</div>
  </li>
  <li>
    <div>Supporting admission application materials (e.g. photocopies of 
      application forms for language training centers or for a degree program 
      at universities/colleges in Taiwan. The exact academic year that 
      applicants would be enrolled as full-time students at these institutions
      must be clearly specified on these documents; or a copy of the 
      application fee receipt, or the reply letter or e-mail from the school 
      which the applicant has applied to).</div>
  </li>
  <li>
    <div>Additional documents as specified by individual representative offices (e.g. letters of&nbsp;&nbsp; reference).</div>
  </li>
  <li>
    <div>A photocopy of a certificate of the acceptable levels of English 
      proficiency or Test of Proficiency – Huayu (TOP), depending on the 
      language of instruction in class.<br />
      (N.B. Only applicants for degree programs need to submit this document.)</div>
  </li>
  <li>
    <div>Additional documents as specified by the individual representative offices.</div>
  </li>
</ol>
<p>The selection priority for these scholarships will be given to those 
  who intend to undertake a degree program and have successfully received 
  admission to a university/college.</p>
<p><strong>VII. Re-Applying </strong></p>
<p>Upon completion of <strong>a degree program</strong>, recipients may re-apply for a Taiwan Scholarship to undertake <strong>another degree program</strong>, by following the <strong>application process as specified above</strong>. The maximum duration of each recipient’s total award period is 5 years.</p>
<p style="text-align: justify;" align="center">(N.B. Upon completion of their LEP study, LEP award recipients may be granted another award period for <strong>a degree program through the universities/colleges that they will be attending</strong>.&nbsp;
  Required documents include a photocopy of admission to a 
  university/college and certificates of English proficiency or TOP for 
  their degree studies.)</p>
<p align="left"><strong>VIII. Renewal </strong></p>
<p>To review recipients’ award qualifications for the next academic 
  year, individual universities/ colleges will conduct an evaluation 
  process regarding the Taiwan Scholarship award renewal status by 
  February 28<sup>th</sup> of each year.</p>
<p>Each educational institution may set their own grading criteria for 
  the required and passing minimum academic average for each semester, or 
  may employ the current grading criteria, which is 60 out of 100 for 
  undergraduates and 70 for postgraduates.</p>
<p>For recipients in the third year of their doctoral programs, this 
  evaluation should be conducted in accordance with the regulations of 
  their individual institutions, since systems vary from discipline to 
  discipline, especially in terms of requirements for session credits and 
  scheduling of the writing of their dissertations.&nbsp;&nbsp;<strong>&nbsp;</strong></p>
<p><strong>IX. Suspension and Revocation </strong></p>
<p><strong>(I) Suspension</strong></p>
<ul>
  <li>
    <div><strong>Degree Programs:&nbsp; </strong></div>
  </li>
</ul>
<ol>
  <li>
    <div>If a recipient fails to achieve a specified minimum academic 
      average for a semester,&nbsp;&nbsp; his/her stipends will be suspended 
      for one month.</div>
  </li>
  <li>
    <div>If a recipient fails to achieve a specified minimum academic 
      average for two consecutive semesters, he/she will be permanently 
      disqualified from receiving any Taiwan Scholarship awards, effective and
      beginning from the next academic term (semester).</div>
  </li>
  <li>
    <div>After a recipient registers at his/her school, if he/she does not 
      attend class or leaves our country without the school’s permission, 
      except for summer and winter vacations, or during the writing thesis 
      period, his/her stipends will be suspended for the months he/she was not
      in Taiwan. If this situation happens for 2 consecutive months, the 
      scholarship will be cancelled, along with the award status.</div>
  </li>
  <li>
    <div>For all other cases, the universities will evaluate whether scholarship recipients’ scholarships will be suspended or not.</div>
  </li>
</ol>
<ul>
  <li>
    <div><strong>LEP Program:</strong></div>
  </li>
</ul>
<ol>
  <ol>
    <li>
      <div>Attendance Records:</div>
    </li>
  </ol>
</ol>
<p style="text-align: justify;" align="center"></p>
<ol>
  <ol>
    Except for a serious illness or accident, if a recipient is absent 
    from his/her required language sessions for 12 hours or more during a 
    single month, his/her stipends will be suspended for one month.
  </ol>
</ol>
<p>&nbsp;</p>
<ol>
  <ol>
    <li>
      <div>Academic Performance:</div>
    </li>
  </ol>
</ol>
<p style="text-align: justify;" align="center"></p>
<ol>
  <ol>
    Beginning from the second study term/quarter in Taiwan, if a 
    recipient’s academic average for each study term/quarter is less than 80
    out of 100, his/her stipends will be suspended for one month .
  </ol>
</ol>
<p>&nbsp;</p>
<ol>
  <li>
    <div><strong>TOP Rating</strong>:A one-month-stipend suspension will be 
      imposed if a recipient fails to submit to his/her Mandarin training 
      center, a photocopy of a TOP (Test of Proficiency—Huayu) certificate 
      with results rated at the level for <em><strong>Basic level</strong></em> or above,<strong> by June 30<sup>th</sup></strong>. Registration fees for this TOP test are the full responsibility of the recipient.
      <p></p>
      <p>However, LEP award recipients who are subsequently granted a Taiwan 
        Scholarship for a degree program can ask for a reimbursement of the 
        suspended one-month stipend as stated above, through the 
        university/college that they attend for the degree programs <strong>within 6 months</strong>, if they pass the TOP test.</p>
    </div>
  </li>
</ol>
<p><strong>(II) Revocation: </strong></p>
<p>A recipient may be<strong> </strong>permanently disqualified<strong> </strong>from receiving a Taiwan scholarship and the remaining stipends will be cancelled, if one of the following situations arises:</p>
<ul>
  <li>
    <div><strong>Degree Programs: </strong></div>
  </li>
</ul>
<ol>
  <li>
    <div>Failure to submit at the time of matriculation for each study term/quarter, <strong>an Alien Resident Certificate (ARC) </strong>with the reason<strong> “Pursuing Studies,”</strong> by the deadline as specified by his/her university/college.</div>
  </li>
  <li>
    <div>Failure during the annual renewal evaluation of his/her Taiwan scholarship.</div>
  </li>
  <li>
    <div>Failure to submit a photocopy of an acceptable English /TOP 
      proficiency certificate to the university/college, depending on the 
      language of instruction, when transferring to a new program of study.</div>
  </li>
  <li>
    <div>Dropping out, being expelled from school, violating R.O.C. laws, or receiving any major demerits.</div>
  </li>
  <li>
    <div>Being simultaneously in receipt of another scholarship or subsidy 
      offered by the Taiwan government or educational institutions. However, 
      this does not include a round trip economy class airfare/ticket for 
      international students from special designated areas or countries.</div>
  </li>
  <li>
    <div>Recipients facing disqualification situtions will have their cases 
      reviewed by officals from the university and/or the Mandarin training 
      center, in addition to the MOE.</div>
  </li>
</ol>
<ul>
  <li>
    <div><strong>LEP Program: </strong></div>
  </li>
</ul>
<ol>
  <li>
    <div>Failure to submit at the time of matriculation for each study term/quarter, <strong>an Alien Resident Certificate (ARC) </strong>with the reason<strong> “Pursuing Studies,”</strong> by the deadlines as specified by his/her Mandarin training center.</div>
  </li>
  <li>
    <div>Failure to achieve an average academic score of 80 or above out of 
      100 for two consecutive terms/quarters of study, beginning from the 
      second term/quarter of his/her study in Taiwan.</div>
  </li>
  <li>
    <div>&nbsp;Missing a final achievement score for any study term/quarter, with the exception of a serious illness or accident.</div>
  </li>
  <li>
    <div>Dropping out, being expelled from school, violating R.O.C. laws, or receiving any major demerits.</div>
  </li>
  <li>
    <div>Being simultaneously in receipt of another scholarship or subsidy 
      offered by the Taiwan government or educational institutions. However, 
      this does not include a round trip economy class airfare/ticket for 
      international students from special designated areas or countries.</div>
  </li>
</ol>
<p><strong>X. Transfer </strong></p>
<p>After studying for a semester/term/quarter at a university/college or
  a Mandarin training center, a recipient may be allowed to transfer<strong> once</strong> during the course of a degree/LEP program, if the pertinent educational institutions approve this request.</p>
<p>Degree pursuers asking for a transfer to a new institution or program
  of study must submit to the new institution a photocopy of their 
  English proficiency/TOP certificates, depending on the language of 
  instruction in class. However, the award’s qualification will be revoked
  from the month when recipients transferred to a new institution. At 
  Mandarin training centers, if recipients have not submitted their TOP 
  certificates while studying at the original center, they must deliver 
  the certificates to the new institution before June 30<sup>th</sup>.</p>
<p>Before the award period expires, recipients that want to transfer to a
  different degree program at another university or college department or
  graduate school, must re-apply to the original institute of the Taiwan 
  Representative Offices.</p>
<p>If the recipient’s scholarship term has not yet expired, and the 
  recipient has been admitted to the next level of study by his/ her 
  attending school, then the attending school must submit the scholarship 
  application form filled out by the student, transcripts, and the proof 
  of admission, etc. to the government agencies that fund the scholarship 
  program for approval. The University must also inform the results to the
  Ministry of Education and the designated office by MOE.</p>
<p><strong>XI. Granting Scholarships </strong></p>
<p>In principle, stipends are granted by the <strong>10<sup>th</sup></strong>&nbsp;day
  of each month, through the universities/colleges or Mandarin training 
  centers where the recipients attend and follow the methods as specified 
  by the individual institutions.</p>
<p><strong>Health Insurance </strong></p>
<p>It is mandatory that recipients, who have an award period for six 
  months or more, participate in Taiwan’s National Health Insurance Plan 
  and purchase policies for Student Accident Insurance during the period 
  of their residence and study in Taiwan. The recipients’ educational 
  institutions will deduct fees for these insurance plans from the 
  recipients’ stipends, before processing and distributing funds to them.</p>
<p>As a requirement for matriculation, at their intended educational 
  institutions, recipients must prepare medical/health insurance policies 
  before their departure to Taiwan and these documents must be valid for a
  minimum of 4 months, beginning from the date of their arrival in 
  Taiwan. These policies must bear the authentication of a Taiwan Embassy 
  or overseas Representative Office.</p>
<p>Recipients should also participate in their schools’ activities and 
  donate service time to international affairs activities during their 
  award period.</p>
<p>&nbsp;</p>
<h4>Attachment</h4>
<ul>
  <li><a title="Application Form(open new window)" href="http://english.education.edu.tw/public/Attachment/0118166871.doc" target="_nwGip">Application Form</a></li>
  <li><a title="English pdf(open new window)" href="http://english.education.edu.tw/public/Attachment/01181674871.pdf" target="_nwGip">English pdf</a></li>
  <li><a title="Chinese text(open new window)" href="http://english.education.edu.tw/public/Attachment/011911241871.doc" target="_nwGip">Chinese text</a></li>
</ul>',
       ]);

    AboutTaiwan::create([
        'description' => '<div class="entry page">
  <h3 id="slogan"><span>NOC:BILAL HOSSAIN LITON-AD1306764</span></h3>
  <h3 id="slogan"><span>NOC:UZZAL HOSEN-AC0270229</span></h3>
  <p><img src="localhost/taiwannoc/aRzUserAssets/aRzSiteImages/UZZAL-HOSEN-AC0270229.html" alt="" /></p>
  <h3 id="slogan"><span>NOC:BILAL HOSSAIN LITON-AD1306764</span></h3>
  <h3 id="slogan"><span>NOC:FOYEZ AHAMMAD-AG2599438</span></h3>
  <p><img src="localhost/taiwannoc/aRzUserAssets/aRzSiteImages/FOYEZ-AHAMMAD-AG2599438.html" alt="" /></p>
  <h3 id="slogan"><span>NOC:TAFIQUL ISLAM-A0942194</span></h3>
  <p><img src="localhost/taiwannoc/aRzUserAssets/aRzSiteImages/TAFIQUL-ISLAM-A0942194.html" alt="" /></p>
  <h3 id="slogan"><span>NOC:PALASH ROY-AD4719204</span></h3>
  <p><img src="localhost/taiwannoc/aRzUserAssets/aRzSiteImages/PALASH-ROY-AD4719204.html" alt="" /></p>
  <h3 id="slogan"><span>NOC:NASIR MIAH-AF4753914</span></h3>
  <p><img src="localhost/taiwannoc/aRzUserAssets/aRzSiteImages/NASIR-MIAH-AF4753914.html" alt="" /></p>
  <h3 id="slogan"><span>NOC:HUMAYUN KABIR-AA8206969</span></h3>
  <p><img src="localhost/taiwannoc/aRzUserAssets/aRzSiteImages/HUMAYUN-KABIR-AA8206969.html" alt="" /></p>
  <h3 id="slogan"><span>NOC:ARIF HASNAT-AA3224717</span></h3>
  <p><img src="localhost/taiwannoc/aRzUserAssets/aRzSiteImages/ARIF-HASNAT-AA3224717.html" alt="" /></p>
  <h3 id="slogan"><span>NOC:MOHAMMAD SUMON-AD8719202</span></h3>
  <p><img src="localhost/taiwannoc/aRzUserAssets/aRzSiteImages/MOHAMMAD-SUMON-AD8719202.html" alt="" /></p>
</div>',
    ]);



    }
}
