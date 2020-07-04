
<?php include 'qheader.php'; ?>

<noscript> <p>JavaScript must be enabled to use this site. Please enable JavaScript in your browser and refresh the page. <a href="http://www.google.com.pk/search?q=how+to+enable+javascript">How to enable javascript?</a></p> </noscript>
<div id="gqMain" style="display:none;">
	<div id="globalHeader">

		<!-- nav here -->
		<div id="topNav">
			<div id="playerNavBox">
				<ul id="pageNav">
					<li class="page"><span class="pageOn">1</span> <span class="sep">of</span> <span class="totalPages">604</span></li>
					<li id="prevPage"><a href="#!/ur.junagarhi|quran-tajweed/1:1" class="prevPage button rndL tips" data-tips-position="left center"><span class="icon prevPage">Previous Page</span></a></li>
					<li id="nextPage"><a href="#!/ur.junagarhi|quran-tajweed/1:1" class="nextPage button rndR tips" data-tips-position="right center"><span class="icon nextPage">Next Page</span></a></li>
				</ul>
				<ul id="playerNav">
					<li id="recitor" class="dropOption" style="display:none;"><a href="#" class="dropLink tips" data-tips-position="right center"><span class="icon recitor">Select Recitor</span></a>
						<ul class="recitorList"></ul>
					</li>
					<li id="prevAyah" style="display:none;"><a href="#" class="icon prevAyah">Previous Ayah</a></li>
					<li id="nextAyah" style="display:none;"><a href="#" class="icon nextAyah">Next Ayah</a></li>
					<li id="play"><a href="#" class="icon play">play</a></li>
					<li id="progressBar" style="display:none;">
						<div class="progressBar" title="0:00"><span class="buffer" style="width: 0%;"></span></div>
					</li>
					<li id="time" style="display:none;"><span class="playingTime">0:00</span><span class="sep">/</span><span class="totalTime">0:00</span></li>
					<li id="bandwidthOption" class="dropOption" style="display:none;"><span class="dropLink tips" data-tips-position="right center" title="Audio Quality"><span class="bandwidthOption">192 kbs</span> <span class="icon arrowDown"></span></span>
						<ul class="bandwidthList"></ul>
					</li>
					<li id="volume" class="dropOption" style="display:none;"><a href="#" class="dropLink tips" title="Click to Mute Volume" data-tips-position="right center"><span class="icon volume full">Volume</span></a>
						<ul>
							<li class="volumePercent">68%</li>
							<li><div class="volumeBar"></div></li>
						</ul>
					</li>
					<li id="repeat" class="dropOption" style="display:none;"><a href="#" class="dropLink active tips" data-tips-position="right center"><span class="icon repeat">Repeat</span></a>
						<ul class="repeatOptions">
							<li><label>Repeat Each</label> <select class="repeatEach" name="repeatEach"><option value="ayah">Ayah</option><option value="page">Page</option><option value="surah">Surah</option><option value="Juz">Juz</option></select></li>
							<li><label>Repeat Times</label> <select class="repeatTimes" name="repeatTimes"><option value="1">x1</option><option value="2">x2</option><option value="3">x3</option><option value="4">x4</option><option value="5">x5</option><option value="6">x6</option><option value="7">x7</option><option value="8">x8</option><option value="9">x9</option><option value="0">&infin;</option></select></li>
							<li><label>Delay</label> <select class="audioDelay" name="audiotDelay"><option value="0">0 sec</option><option value="1">1 sec</option><option value="2">2 sec</option><option value="3">3 sec</option><option value="4">4 sec</option><option value="5">5 sec</option><option value="6">6 sec</option><option value="7">7 sec</option><option value="8">8 sec</option><option value="9">9 sec</option><option value="ayah">Ayah Duration</option></select></li>
						</ul>
					</li>
				</ul>
			</div>
			<div id="searchInfoBox" style="display:none;">
				<ul id="searchNav">
					<li id="searchAbout">About <span class="bold">300,000,000</span> results (0.14 seconds)</li>
				</ul>
				<ul id="searchInfo">
					<li><a href="#home" class="bold">Done Searching Go Back</a></li>
				</ul>				
			</div>
			<div id="statusNav">
				<span class="currentAyah tips" title="Surah Al Nas"  data-tips-position="bottom center" data-tips-dynamic="true">00:00</span>
				<ul>
					<li><a href="http://blog.globalquran.com/feature-list/" class="gq spotLight">Feature List</a></li>
					<!--
					<li class="dropOption"><a href="#" class="dropLink">Tag</a>
						<ul>
							<li><span style="white-space:nowrap;">Tags coming very soon insha'Allah</span></li>
						</ul>
					</li>
					 -->
					<li><a href="#" class="print">Print</a></li>
					<li class="dropOption"><a href="#" class="dropLink">Share</a>
						<ul id="share">
							
							<li><a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a></li>
							<li><div class="g-plusone" data-size="tall" data-annotation="none"></div></li>
							<li>
								<div class="addthis_toolbox addthis_default_style">
									<a class="addthis_counter addthis_pill_style"></a>
								</div>
							</li>
							<li class="fbLike"><div class="fb-like" data-send="false" data-width="50" data-show-faces="false"></div></li>
							
						</ul>
					</li>
					<li class="dropOption"><a href="#" class="dropLink">Link</a>
						<ul class="linkShare">
							<li><span>Paste link in <b>email</b>, <b>IM</b> or <b>Facebook</b> status.</span>
								<label>Page URL:</label> <input type="text" class="pageUrl" value="#!/ur.junagarhi|quran-tajweed/601" />
							</li>
							<li><label>Ayah URL:</label> <input type="text" class="ayahUrl" value="#!/ur.junagarhi|quran-tajweed/103:3" /></li>
							<li><a href="#" class="bookmark">Bookmark</a> </li>
						</ul>
					</li>
				</ul>
			</div>
			<div id="messageBox" style="display:none;">
				<span class="error">msg</span> <a href="#" class="icon close tips">close</a>
			</div>	
			<div id="searchBox">
				<form action="#" method="post" id="searchForm">
					<input type="text" name="search" id="search" value="" placeholder="Search..." />
					<!-- TODO <a href="#" class="searchTips">Tips</a> -->
					<input type="submit" name="searchSubmit" id="searchSubmit" value="Submit" />
				</form>
			</div>
			<div id="surahBox">
				<form action="#" method="post">
					<select name="surah" id="surah" class="customSurah"></select>
					<input type="submit" name="surahSubmit" id="surahSubmit" value="Submit" />
				</form>
			</div>
			<div id="extraTools">
				<ul>
					<li></li>
					<li class="book"  style="display:none;"><a href="#" class="icon book tips" data-tips-position="left center">Book View</a></li>
					<li class="zoomOUT"><a href="#" class="icon zoomOUT tips" data-tips-position="left center">Smaller Fonts</a></li>
					<li class="zoomIN"><a href="#" class="icon zoomIN tips" data-tips-position="left center">Bigger Fonts</a></li>
					<li class="fullScreen"><a href="#" class="icon fullScreen tips" data-tips-position="left center">Full Screen</a></li>
					<li class="sideBarOptions" style="display:none;"><a href="#" class="sideBarOptions" data-tips-position="left center"><span class="off">Show Options</span><span class="on">Hide Options</span></a></li>
				</ul>
			</div>
		</div>		
	</div>	
	<div id="gqContent">
		<div id="infoSidebar">

			<div id="searchSideBar" style="display:none;">
				<div class="headerTitle">
					<h4>Search Tips</h4>
				</div>			
				<ul class="sideNav">
					<li><b>55</b> - jump quickly to page "55"</li>
					<li><br /></li>
					<li><b>114:1</b> - go to surah An-Nass 114</li>
					<li><b>114:4</b> - go to surah An-Nass 114 and ayah 4</li>
				</ul>
				<div class="headerTitle">
					<h4>got suggestions? </h4>
				</div>			
				<p>sent us your feedback.</p>
			</div>
		</div>
		<div id="quranContentArea" class="contentHalfSidebar single medium">
			<img src="images/themes/default/ajax-loader-large.gif" />
		</div>
	</div>
	<div class="tajweedQuickHelp hide">
		<ul>
			<li><span class="color ikhf"></span> <span class="txt">ikhafa</span></li>
			<li><span class="color ikhf_shfw"></span> <span class="txt">ikhafa Meem Saakin</span></li>
			<li><span class="color qlq"></span> <span class="txt">Qalqala</span></li>
			<li><span class="color iqlb"></span> <span class="txt">Qalb</span></li>
			<li><span class="color idghm_shfw"></span> <span class="txt">Idghaam Meem Saakin</span></li>
			<li><span class="color idgh_ghn"></span> <span class="txt">Idghaam with Ghunna</span></li>
			<li><span class="color idgh_w_ghn"></span> <span class="txt">Idghaam without Ghunna</span></li>
			<li><span class="color ghn"></span> <span class="txt">Ghunna</span></li>			
			<li><a href="#">learn'em (coming soon)</a></li>
		</ul>
	</div>
	<!-- end content -->
</div>
<?php include 'qfooter.php'; ?>