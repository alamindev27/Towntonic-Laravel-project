@extends('frontend.app')

@section('content')

<div id="featured-area">
  <div class="container clearfix">
    <div style="position: relative; overflow: hidden;" id="featured-slider">
      <div style="position: absolute; top: 0px; left: 0px; display: none; z-index: 7; opacity: 1; width: 790px; height: 332px;" class="featitem clearfix">
        <h2 class="feat-heading">Introducing Taiwan</h2>
        <p class="tagline"></p>
        <div class="excerpt">
          <p>Start exploring Taiwan with Lonely Planet’s video guide to getting around, when to go and the top things to do while you're there.People tend to stereotype Taiwan as a little, overcrowded island centered around manufacturing industries. However, Taiwan is much more than that. Taiwan has something for everyone: stunning natural scenery, rich traditional and modern culture, beautiful beaches, renowned hot springs and delicious food...</p>
          <a href="#" title="Permanent Link to introducing taiwan" class="readmore"><span>read more</span></a></div>
        <!-- end .excerpt -->
        <a href="#" title="Permanent Link to introducing taiwan"> <iframe width="330" height="220" src="https://www.youtube.com/embed/dp8xuBqTAUs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a></div>

      <div style="position: absolute; top: 0px; left: 0px; display: none; z-index: 7; opacity: 1; width: 790px; height: 332px;" class="featitem clearfix">
        <h2 class="feat-heading">About Taiwan</h2>
        <p class="tagline"></p>
        <div class="excerpt">
          <p>&nbsp;
            Area :36,000 square kilometers
            Population: 23 million
            Capital : Taipei City
            Language : Mandarin/Taiwanese/Hakka/Indigenous Languages
            Religion : Buddhism/Taoism/Christianity/Islam
            President : Ma Ying-jeou
            Taiwan’s total land area is only about 36,000 square kilometers; it is 
            shaped like a tobacco leaf that is narrow at both ends. It lies off the 
            southeastern coast of the mainland Asia, across the Taiwan Strait from 
            Mainland China– a solitary island on...</p>
          <a href="#" title="Permanent Link to About Taiwan" class="readmore"><span>read more</span></a></div>
        <!-- end .excerpt -->
        <a href="#" title="Permanent Link to About Taiwan">
        <img src="{{ asset('frontend/aRzModule/top-sliding-text/aRzImages/about_taiwan-330x220.jpg') }}" class="thumb wp-post-image" alt="About Taiwan" title="About Taiwan" height="220" width="330" /></a></div>
      <!-- end .featitem -->
      <div style="position: absolute; top: 0px; left: 0px; display: none; z-index: 7; opacity: 1; width: 790px; height: 332px;" class="featitem clearfix">
        <h2 class="feat-heading">Trade and Economy</h2>
        <p class="tagline"></p>
        <div class="excerpt">
          <p>Over the past 50 years, in what is often referred to as the 
            Taiwan Economic Miracle, the island nation of some 23 million people has
            transformed itself from a recipient of U.S. aid to an aid donor and 
            major foreign investor. Taiwan is currently a major source of direct 
            foreign investment for China and Southeast Asian countries, such as 
            Vietnam, Thailand, Indonesia, Malaysia and the Philippines.
            With a dynamic export-driven economy, Taiwan holds the world’s...</p>
          <a href="#" title="Permanent Link to Trade and Economy" class="readmore"><span>read more</span></a></div>
        <!-- end .excerpt -->
        <a href="#" title="Permanent Link to Trade and Economy"> <img src="{{ asset('frontend/img/trad.jpg') }}" class="thumb" alt="Trade and Economy" height="220" width="330" /></a></div>
      <!-- end .featitem -->
      <div style="position: absolute; top: 0px; left: 0px; display: none; z-index: 7; opacity: 1; width: 790px; height: 332px;" class="featitem clearfix">
        <h2 class="feat-heading">History and Politics</h2>
        <p class="tagline"></p>
        <div class="excerpt">
          <p>Modern-day Taiwan is often described as economically prosperous
            and politically vibrant. But that has not always been the case. As 
            recently as 40 years ago, the island was an economic backwater, with the
            government fighting a battle to keep diplomatic allies from switching 
            recognition to Beijing.
            The Nationalist (or Kuomingtang, KMT) government had lost control of the
            Chinese mainland to the Communists some 20 years earlier and Taiwan was
            becoming more and more...</p>
          <a href="#" title="Permanent Link to History and Politics" class="readmore"><span>read more</span></a></div>
        <!-- end .excerpt -->
        <a href="#" title="Permanent Link to History and Politics"> <img src="{{ asset('frontend/img/trad.jpg') }}" class="thumb" alt="History and Politics" height="220" width="330" /></a></div>
      <!-- end .featitem -->
      <div style="position: absolute; top: 0px; left: 0px; display: none; z-index: 7; opacity: 1; width: 790px; height: 312px;" class="featitem clearfix">
        <h2 class="feat-heading">Science and Technology</h2>
        <p class="tagline"></p>
        <div class="excerpt">
          <p>At a Glance
            • Profiles of publicly supported S&amp;T organizations and programs
            • Nanotechnology playing a critical role across the board
            • Pushing innovation through interdisciplinary and international 
            collaboration
            • Transforming Taiwan into a global cloud-computing nerve center
            Global surveys give Taiwan high scores for its science and technology 
            (S&amp;T) environment and innovation. Still, its S&amp;T community, 
            including government-supported...</p>
          <a href="#" title="Permanent Link to Science and Technology" class="readmore"><span>read more</span></a></div>
        <!-- end .excerpt -->
        <a href="#" title="Permanent Link to Science and Technology"> <img src="{{ asset('frontend/img/secians.jpg') }}" class="thumb" alt="Science and Technology" height="220" width="330" /></a></div>
      <!-- end .featitem -->
      <div style="position: absolute; top: 0px; left: 0px; display: none; z-index: 7; opacity: 1; width: 790px; height: 332px;" class="featitem clearfix">
        <h2 class="feat-heading">Society</h2>
        <p class="tagline"></p>
        <div class="excerpt">
          <p>• Taiwan a leader in gender equality
            • Pension schemes
            • Boosting workers’ rights
            The Tainan City government hosts a mass wedding ceremony at Yizai 
            Jincheng, or Eternal Fortress, overlooking Anping Harbor. Built in 1874,
            the fortress is deemed an auspicious site for the ceremony as the 
            expression yizai —literally meaning “100 million years”—is regarded as 
            symbolic of eternal love and devotion. (Liao Tai-ji)
            
            Taiwan’s population of some 23 million...</p>
          <a href="#" title="Permanent Link to Society" class="readmore"><span>read more</span></a></div>
        <!-- end .excerpt -->
        <a href="#" title="Permanent Link to Society"> <img src="{{ asset('frontend/img/socity.png') }}" class="thumb" alt="Society" height="220" width="330" /></a></div>
      <!-- end .featitem -->
      <div style="position: absolute; top: 0px; left: 0px; display: none; z-index: 7; opacity: 1; width: 790px; height: 332px;" class="featitem clearfix">
        <h2 class="feat-heading">Education</h2>
        <p class="tagline"></p>
        <div class="excerpt">
          <p>At a Glance
            ‧ Compulsory education extended
            ‧ Development of worlSportsd-class universities
            ‧ e-Learning takes on a growing role
            As the second decade of the 21st century begins, citizens of the 
            Republic of China have a variety of quality education choices. Nine 
            years of compulsory education has been the norm for decades. Now, in the
            nation’s centennial year, 99.9 percent of children enter primary 
            school, and nearly every child attends secondary education....</p>
          <a href="#" title="Permanent Link to Education" class="readmore"><span>read more</span></a></div>
        <!-- end .excerpt -->
        <a href="#" title="Permanent Link to Education"> <img src="{{ asset('frontend/img/study.png') }}" class="thumb" alt="Education" height="220" width="330" /></a></div>
      <!-- end .featitem -->
      <div style="position: absolute; top: 0px; left: 0px; display: block; z-index: 8; opacity: 1; width: 790px; height: 312px;" class="featitem clearfix">
        <h2 class="feat-heading">Sports</h2>
        <p class="tagline"></p>
        <div class="excerpt">
          <p> At a Glance
            Athletes shine in golf and powerlifting
            Stellar performance at the Asian Games
            Encouraging more of the public to be physically active.
            Sports figures from the Republic of China are being recognized 
            internationally for their achievements at high-profile competitions, and
            the nation has in recent years been the host of a number of world 
            sporting events. Often participating under the name “Chinese Taipei,” 
            the nation’s top athletes are...</p>
          <a href="#" title="Permanent Link to Sports" class="readmore"><span>read more</span></a></div>
        <!-- end .excerpt -->
        <a href="#" title="Permanent Link to Sports"> <img src="{{ asset('frontend/img/sports.jpg') }}" class="thumb" alt="Sports" height="220" width="330" /></a></div>
      <!-- end .featitem -->
    </div>
    <!-- div #featured-slider -->
    <a id="prevlink" href="#">Previous</a> <a id="nextlink" href="#">Next</a></div>
  <!-- end .container -->
</div>
<!-- end #featured-area -->
<div id="featured-thumbs">
  <div class="container clearfix"> 
    <a href="#"> <img style="opacity: 1;" class="" src="{{ asset('frontend/img/intro_tai.jpg') }}" alt="Introducing Taiwan" height="72" width="72" /></a>
    <div style="bottom: 106px; left: 155px; display: block; opacity: 0;" class="thumb_popup">
      <p class="heading">Introducing Taiwan</p>
      <p>&quot;Start exploring Taiwan with Lonely Planet’s video guide to getting around...</p>
    </div>
    
    <a href="#"> <img style="opacity: 1;" src="{{ asset('frontend/aRzModule/top-sliding-text/aRzImages/about_taiwan-72x72.jpg') }}" class="attachment-72x72 wp-post-image" alt="About Taiwan" title="About Taiwan" height="72" width="72" /></a>
    <div style="bottom: 106px; left: 43px; display: block; opacity: 0;" class="thumb_popup">
      <p class="heading">About Taiwan</p>
      <p>&quot;&nbsp;
        Area :36,000 square kilometers
        Population: 23 million
        Capital : Taipei...</p>
    </div>
    <!-- end .thumb_popup -->
    <a href="#"> <img style="opacity: 1;" class="" src="{{ asset('frontend/img/trad.jpg') }}" alt="Trade and Economy" height="72" width="72" /></a>
    <div style="bottom: 106px; left: 155px; display: block; opacity: 0;" class="thumb_popup">
      <p class="heading">Trade and Economy</p>
      <p>&quot;Over the past 50 years, in what is often referred to as the Taiwan Economic...</p>
    </div>
    <!-- end .thumb_popup -->
    <a href="#"> <img style="opacity: 1;" class="" src="{{ asset('frontend/img/trad.jpg') }}" alt="History and Politics" height="72" width="72" /></a>
    <div style="bottom: 106px; left: 267px; display: block; opacity: 0;" class="thumb_popup">
      <p class="heading">History and Politics</p>
      <p>&quot;Modern-day Taiwan is often described as economically prosperous and politically...</p>
    </div>
    <!-- end .thumb_popup -->
    <a href="#"> <img style="opacity: 1;" class="" src="{{ asset('frontend/img/secians.jpg') }}" alt="Science and Technology" height="72" width="72" /></a>
    <div style="bottom: 106px; left: 379px; display: block; opacity: 0;" class="thumb_popup">
      <p class="heading">Science and Technology</p>
      <p>&quot;At a Glance
        • Profiles of publicly supported S&amp;T organizations and...</p>
    </div>
    <!-- end .thumb_popup -->
    <a href="#"> <img style="opacity: 1;" class="" src="{{ asset('frontend/img/socity.png') }}" alt="Society" height="72" width="72" /></a>
    <div style="bottom: 106px; left: 491px; display: block; opacity: 0;" class="thumb_popup">
      <p class="heading">Society</p>
      <p>&quot;• Taiwan a leader in gender equality
        • Pension schemes
        • Boosting...</p>
    </div>
    <!-- end .thumb_popup -->
    <a href="#"> <img style="opacity: 1;" class="" src="{{ asset('frontend/img/study.png') }}" alt="Education" height="72" width="72" /></a>
    <div style="bottom: 106px; left: 603px; display: block; opacity: 0;" class="thumb_popup">
      <p class="heading">Education</p>
      <p>&quot;At a Glance
        ‧ Compulsory education extended
        ‧ Development of...</p>
    </div>
    <!-- end .thumb_popup -->
    <a href="#"> <img style="opacity: 1;" class="active" src="{{ asset('frontend/img/sports.jpg') }}" alt="Sports" height="72" width="72" /></a>
    <div style="bottom: 106px; left: 715px; display: block; opacity: 0;" class="thumb_popup">
      <p class="heading">Sports</p>
      <p>&quot;
        
        At a Glance
        
        Athletes shine in golf and powerlifting
        Stellar performance...</p>
    </div>
    <!-- end .thumb_popup -->
    <div style="left: 780px;" id="active_item"></div>
  </div>
  <!-- end .container -->
</div>

<div id="content" class="clearfix">
  <div class="container">
    <div id="content-area" class="clearfix">
      <div class="entry page">

          <h3 id="slogan"><span>All information of Tawian</span></h3>
          <div class="aRzPageContent">
            {!! $home_info->description !!}
          </div>
      </div>
    </div>
  </div>
</div>

@endsection