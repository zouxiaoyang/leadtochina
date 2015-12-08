<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/shanghai.css'); ?>
<style type="text/css">
<!--
#content{ width:926px; height:auto; padding:10px 21px 10px 14px;}
-->
</style>
<!--  index1 start  -->
<div id="index1">
   <!--  menu-tours start  -->
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/index');?>">Beijing Shanghai Tours</a> Train Timetable</div>
   <!--  menu-tours end  -->
   <div id="banner"><img src="/images/beijing_shanghai/train.jpg" alt="" /></div> 
   <div class="clear"></div>
    <!--  left start  -->
    <div id="left1">
        <!--  list start  -->
        <div id="list1">
            <?php echo $this->renderPartial("_left");?>
        </div>
        <!--  list end  -->    
    </div>
    <!--  left end  -->
    
    <!--  right start  -->
    <div id="right1">
      <div class="righttable">
        <table cellspacing="0" cellpadding="0">
           <tbody>
               <tr class="desc">
                  <td colspan="8"><span><img src="/images/beijing_shanghai/sym1.jpg" alt="" /> The Beijing-Shanghai High-speed Railway, short for Jinghu High-Speed Railway, has been under construction from April, 2008. This rail line has a total length of 1,318km and serves over 50 pairs of bullet trains shuttle between the two cities everyday. The G-train was first designed for a commercial running speed of 380km/h and it was expected to finish the whole non-stop journey between Beijing and Shanghai in 3 hours 58 minutes. However, its trial run speed was slowed down to 300km/h and it would take about at least 4 hours 48 minutes to finish the whole journey. Click <a href="http://messenger.providesupport.com/messenger/travelthing.html" target="_blank">Live Chat</a> and book Beijing Shanghai tickets now.</span></td>
               </tr>
               <tr class="h2">
                  <td colspan="8">Beijing to Shanghai Trains Timetable &amp; Fares<a name="bst"></a></td>
               </tr>
               <tr class="toptr">
                  <td>Train No</td>
                  <td>From</td>
                  <td>Dep time</td>
                  <td>To</td>
                  <td>Arr time</td>
                  <td>Hard sleeper</td>
                  <td>Soft 4 <br />bed cabin</td>
                  <td>Soft 2 bed cabin</td>
               </tr>
               <tr>
                  <td>1461</td>
                  <td>Beijing</td>
                  <td>11:58</td>
                  <td>Shanghai</td>
                  <td>8:08+1Day</td>
                  <td>upper berth:<br />283.5<br />
                      middle berth:<br />294.5<br />
                      lower berth:<br />304.5</td>
                  <td>/</td>
                  <td>/</td>
               </tr>
               <tr class="grey">
                  <td>T109</td>
                  <td>Beijing</td>
                  <td>19:33</td>
                  <td>Shanghai</td>
                  <td>9:55+1Day</td>
                  <td>upper berth:<br />304.5<br />
                  middle berth:<br />315.5<br />
                  lower berth:<br />325.5</td>
                  <td>upper berth:<br />497.5<br />
                  lower berth:<br />476.9</td>
                  <td>919.5</td>
               </tr>
               <tr class="toptr">
                  <td>Train No</td>
                  <td>From</td>
                  <td>Dep time</td>
                  <td>To</td>
                  <td>Arr time</td>
                  <td>First class</td>
                  <td>Second class</td>
                  <td>Soft 4 bed cabin</td>
               </tr>
               <tr>
                  <td>G101</td>
                  <td>Beijing South</td>
                  <td>7:00</td>
                  <td>Shanghai Hongqiao</td>
                  <td>12:36</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G11</td>
                  <td>Beijing South</td>
                  <td>8:00</td>
                  <td>Shanghai Hongqiao</td>
                  <td>13:09</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G107</td>
                  <td>Beijing South</td>
                  <td>8:08</td>
                  <td>Shanghai Hongqiao</td>
                  <td>13:39</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>D315</td>
                  <td>Beijing South</td>
                  <td>8:18</td>
                  <td>Shanghai Hongqiao</td>
                  <td>17:33</td>
                  <td>648</td>
                  <td>408</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G109</td>
                  <td>Beijing South</td>
                  <td>8:35</td>
                  <td>Shanghai Hongqiao</td>
                  <td>14:13</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G1</td>
                  <td>Beijing South</td>
                  <td>9:00</td>
                  <td>Shanghai Hongqiao</td>
                  <td>13:48</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G113</td>
                  <td>Beijing South</td>
                  <td>9:05</td>
                  <td>Shanghai Hongqiao</td>
                  <td>14:29</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G115</td>
                  <td>Beijing South</td>
                  <td>9:16</td>
                  <td>Shanghai Hongqiao</td>
                  <td>14:48</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G41</td>
                  <td>Beijing South</td>
                  <td>9:33</td>
                  <td>Shanghai Hongqiao</td>
                  <td>15:08</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>D317</td>
                  <td>Beijing South</td>
                  <td>9:38</td>
                  <td>Shanghai Hongqiao</td>
                  <td>18:28</td>
                  <td>648</td>
                  <td>408</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G13</td>
                  <td>Beijing South</td>
                  <td>10:00</td>
                  <td>Shanghai Hongqiao</td>
                  <td>14:55</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G117</td>
                  <td>Beijing South</td>
                  <td>10:05</td>
                  <td>Shanghai Hongqiao</td>
                  <td>15:29</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G119</td>
                  <td>Beijing South</td>
                  <td>10:45</td>
                  <td>Shanghai Hongqiao</td>
                  <td>16:19</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G15</td>
                  <td>Beijing South</td>
                  <td>11:00</td>
                  <td>Shanghai Hongqiao</td>
                  <td>15:55</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G121</td>
                  <td>Beijing South</td>
                  <td>11:05</td>
                  <td>Shanghai Hongqiao</td>
                  <td>16:42</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G125</td>
                  <td>Beijing South</td>
                  <td>11:35</td>
                  <td>Shanghai Hongqiao</td>
                  <td>17:13</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>D319</td>
                  <td>Beijing South</td>
                  <td>11:40</td>
                  <td>Shanghai Hongqiao</td>
                  <td>20:52</td>
                  <td>648</td>
                  <td>408</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G129</td>
                  <td>Beijing South</td>
                  <td>12:04</td>
                  <td>Shanghai Hongqiao</td>
                  <td>17:41</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G131</td>
                  <td>Beijing South</td>
                  <td>12:28</td>
                  <td>Shanghai Hongqiao</td>
                  <td>18:04</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G133</td>
                  <td>Beijing South</td>
                  <td>12:49</td>
                  <td>Shanghai Hongqiao</td>
                  <td>18:18</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G135</td>
                  <td>Beijing South</td>
                  <td>13:07</td>
                  <td>Shanghai Hongqiao</td>
                  <td>18:44</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G3</td>
                  <td>Beijing South</td>
                  <td>14:00</td>
                  <td>Shanghai Hongqiao</td>
                  <td>18:48</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G43</td>
                  <td>Beijing South</td>
                  <td>14:05</td>
                  <td>Shanghai Hongqiao</td>
                  <td>19:34</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G139</td>
                  <td>Beijing South</td>
                  <td>14:16</td>
                  <td>Shanghai Hongqiao</td>
                  <td>19:47</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G141</td>
                  <td>Beijing South</td>
                  <td>14:22</td>
                  <td>Shanghai Hongqiao</td>
                  <td>19:55</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G143</td>
                  <td>Beijing South</td>
                  <td>14:43</td>
                  <td>Shanghai Hongqiao</td>
                  <td>20:29</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G17</td>
                  <td>Beijing South</td>
                  <td>15:00</td>
                  <td>Shanghai Hongqiao</td>
                  <td>19:59</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G145</td>
                  <td>Beijing South</td>
                  <td>15:29</td>
                  <td>Shanghai Hongqiao</td>
                  <td>21:07</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G19</td>
                  <td>Beijing South</td>
                  <td>16:00</td>
                  <td>Shanghai Hongqiao</td>
                  <td>21:12</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G147</td>
                  <td>Beijing South</td>
                  <td>16:10</td>
                  <td>Shanghai Hongqiao</td>
                  <td>21:42</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G21</td>
                  <td>Beijing South</td>
                  <td>17:00</td>
                  <td>Shanghai Hongqiao</td>
                  <td>22:29</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G153</td>
                  <td>Beijing South</td>
                  <td>17:05</td>
                  <td>Shanghai Hongqiao</td>
                  <td>22:42</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G157</td>
                  <td>Beijing South</td>
                  <td>17:32</td>
                  <td>Shanghai Hongqiao</td>
                  <td>22:59</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>D313</td>
                  <td>Beijing South</td>
                  <td>17:34</td>
                  <td>Shanghai</td>
                  <td>7:15+1Day</td>
                  <td>/</td>
                  <td>309</td>
                  <td>upper berth:<br />619<br />
                  lower berth:<br />669</td>
               </tr>
               <tr>
                  <td>D311</td>
                  <td>Beijing South</td>
                  <td>21:16</td>
                  <td>Shanghai</td>
                  <td>8:58+1Day</td>
                  <td>/</td>
                  <td>309</td>
                  <td>upper berth:<br />619<br />
                  lower berth:<br />669</td>
               </tr>
               <tr class="grey">
                  <td>D321</td>
                  <td>Beijing South</td>
                  <td>21:00</td>
                  <td>Shanghai</td>
                  <td>9:04+1Day</td>
                  <td>/</td>
                  <td>309</td>
                  <td>upper berth:<br />619<br />
                  lower berth:<br />669</td>
               </tr>
               <tr class="h2">
                  <td colspan="8">Shanghai to Beijing Trains Timetable &amp; Fares<a name="sbt"></a></td>
               </tr>
               <tr class="toptr">
                  <td>Train No</td>
                  <td>From</td>
                  <td>Dep time</td>
                  <td>To</td>
                  <td>Arr time</td>
                  <td>Hard sleeper</td>
                  <td>Soft 4 bed cabin</td>
                  <td>Soft 2 bed cabin</td>
               </tr>
               <tr>
                  <td>1462</td>
                  <td>Shanghai</td>
                  <td>12:28</td>
                  <td>Beijing</td>
                  <td>10:40+1Day</td>
                  <td>upper berth:<br />283.5<br />
                  middle berth:<br />294.5<br />
                  lower berth:<br />304.5</td>
                  <td>/</td>
                  <td>/</td>
               </tr>
               <tr class="grey">
                  <td>T110</td>
                  <td>Shanghai</td>
                  <td>18:14</td>
                  <td>Beijing</td>
                  <td>9:25+1Day</td>
                  <td>upper berth:304.5<br />
                  middle berth:315.5<br />
                  lower berth:325.5</td>
                  <td>upper berth:<br />497.5<br />
                  lower berth:<br />476.9</td>
                  <td>919.5</td>
               </tr>
               <tr class="toptr">
                  <td>Train No</td>
                  <td>From</td>
                  <td>Dep time</td>
                  <td>To</td>
                  <td>Arr time</td>
                  <td>First class</td>
                  <td>Second class</td>
                  <td>Soft 4 bed cabin</td>
               </tr>
               <tr>
                  <td>G102</td>
                  <td>Shanghai Hongqiao</td>
                  <td>7:00</td>
                  <td>Beijing South</td>
                  <td>12:21</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G104</td>
                  <td>Shanghai Hongqiao</td>
                  <td>7:10</td>
                  <td>Beijing South</td>
                  <td>12:42</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G12</td>
                  <td>Shanghai Hongqiao</td>
                  <td>8:00</td>
                  <td>Beijing South</td>
                  <td>13:16</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G108</td>
                  <td>Shanghai Hongqiao</td>
                  <td>8:07</td>
                  <td>Beijing South</td>
                  <td>13:55</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>D316</td>
                  <td>Shanghai Hongqiao</td>
                  <td>8:16</td>
                  <td>Beijing South</td>
                  <td>17:04</td>
                  <td>648</td>
                  <td>408</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G110</td>
                  <td>Shanghai Hongqiao</td>
                  <td>8:25</td>
                  <td>Beijing South</td>
                  <td>14:14</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G2</td>
                  <td>Shanghai Hongqiao</td>
                  <td>9:00</td>
                  <td>Beijing South</td>
                  <td>13:48</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G112</td>
                  <td>Shanghai Hongqiao</td>
                  <td>9:10</td>
                  <td>Beijing South</td>
                  <td>14:39</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G114</td>
                  <td>Shanghai Hongqiao</td>
                  <td>9:20</td>
                  <td>Beijing South</td>
                  <td>14:50</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>D318</td>
                  <td>Shanghai Hongqiao</td>
                  <td>9:31</td>
                  <td>Beijing South</td>
                  <td>18:25</td>
                  <td>648</td>
                  <td>408</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G116</td>
                  <td>Shanghai Hongqiao</td>
                  <td>9:45</td>
                  <td>Beijing South</td>
                  <td>15:21</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G14</td>
                  <td>Shanghai Hongqiao</td>
                  <td>10:00</td>
                  <td>Beijing South</td>
                  <td>14:55</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>D320</td>
                  <td>Shanghai Hongqiao</td>
                  <td>10:23</td>
                  <td>Beijing South</td>
                  <td>19:16</td>
                  <td>648</td>
                  <td>408</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G42</td>
                  <td>Shanghai Hongqiao</td>
                  <td>10:31</td>
                  <td>Beijing South</td>
                  <td>16:06</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G122</td>
                  <td>Shanghai Hongqiao</td>
                  <td>10:44</td>
                  <td>Beijing South</td>
                  <td>16:24</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G16</td>
                  <td>Shanghai Hongqiao</td>
                  <td>11:00</td>
                  <td>Beijing South</td>
                  <td>15:55</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G126</td>
                  <td>Shanghai Hongqiao</td>
                  <td>11:15</td>
                  <td>Beijing South</td>
                  <td>16:52</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G130</td>
                  <td>Shanghai Hongqiao</td>
                  <td>12:03</td>
                  <td>Beijing South</td>
                  <td>17:41</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G132</td>
                  <td>Shanghai Hongqiao</td>
                  <td>12:18</td>
                  <td>Beijing South</td>
                  <td>17:51</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G134</td>
                  <td>Shanghai Hongqiao</td>
                  <td>13:10</td>
                  <td>Beijing South</td>
                  <td>18:53</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G138</td>
                  <td>Shanghai Hongqiao</td>
                  <td>13:29</td>
                  <td>Beijing South</td>
                  <td>19:08</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G4</td>
                  <td>Shanghai Hongqiao</td>
                  <td>14:00</td>
                  <td>Beijing South</td>
                  <td>18:48</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G142</td>
                  <td>Shanghai Hongqiao</td>
                  <td>14:30</td>
                  <td>Beijing South</td>
                  <td>20:06</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G18</td>
                  <td>Shanghai Hongqiao</td>
                  <td>15:00</td>
                  <td>Beijing South</td>
                  <td>19:55</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G148</td>
                  <td>Shanghai Hongqiao</td>
                  <td>15:18</td>
                  <td>Beijing South</td>
                  <td>20:56</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G44</td>
                  <td>Shanghai Hongqiao</td>
                  <td>15:24</td>
                  <td>Beijing South</td>
                  <td>21:14</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G20</td>
                  <td>Shanghai Hongqiao</td>
                  <td>16:00</td>
                  <td>Beijing South</td>
                  <td>21:09</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G150</td>
                  <td>Shanghai Hongqiao</td>
                  <td>16:05</td>
                  <td>Beijing South</td>
                  <td>21:41</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G152</td>
                  <td>Shanghai Hongqiao</td>
                  <td>16:20</td>
                  <td>Beijing South</td>
                  <td>21:58</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G22</td>
                  <td>Shanghai Hongqiao</td>
                  <td>17:00</td>
                  <td>Beijing South</td>
                  <td>22:16</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>G154</td>
                  <td>Shanghai Hongqiao</td>
                  <td>17:14</td>
                  <td>Beijing South</td>
                  <td>22:43</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr class="grey">
                  <td>G158</td>
                  <td>Shanghai Hongqiao</td>
                  <td>17:43</td>
                  <td>Beijing South</td>
                  <td>23:19</td>
                  <td>933</td>
                  <td>533</td>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>D312</td>
                  <td>Shanghai</td>
                  <td>19:30</td>
                  <td>Beijing South</td>
                  <td>7:07+1Day</td>
                  <td>/</td>
                  <td>309</td>
                  <td>upper berth:<br />619<br />
                  lower berth:<br />669</td>
               </tr>
               <tr class="grey">
                  <td>D322</td>
                  <td>Shanghai</td>
                  <td>20:00</td>
                  <td>Beijing South</td>
                  <td>7:38+1Day</td>
                  <td>/</td>
                  <td>309</td>
                  <td>upper berth:<br />619<br />
                  lower berth:<br />669</td>
               </tr>
               <tr>
                  <td>D314</td>
                  <td>Shanghai</td>
                  <td>21:18</td>
                  <td>Beijing South</td>
                  <td>8:56+1Day</td>
                  <td>/</td>
                  <td>309</td>
                  <td>upper berth:<br />619<br />
                  lower berth:<br />669</td>
               </tr>
           </tbody>
        </table>
      </div>
    </div>
    <!--  right end  -->
</div>
<!--  index1 end  -->

<!-- Google Code for Beijing Shanghai -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001932638;
var google_conversion_label = "U8pRCNLqggcQ3o7h3QM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1001932638/?value=0&amp;label=U8pRCNLqggcQ3o7h3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>