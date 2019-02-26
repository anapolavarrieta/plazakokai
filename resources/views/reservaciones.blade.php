@extends('layouts._master')


@section ('content')
<head>
      <link rel="stylesheet" href="https://live.ipms247.com/booking/templates/resui/build/css/style.css">
</head>
<div class="container center">
    <div class="row">
        <!--div class="filt_wrap_bg"></div-->
        <div id="resouter" class="resfb" style="width:100%;margin:0 auto; padding:0;">
          <!--div class="eZee_BookingContainer" id="eZee_BookingContainer"></div-->
          <!--div class="eZee_BookingTop" id="eZee_BookingTop"></div-->
          <div class="eZee_BookingHeader" id="eZee_BookingHeader"></div>
          <div class="eZee_BookingFilter" id="eZee_BookingFilter"></div>
          <div class="eZee_BookingRooms" id="eZ_BookingRooms" style="float:left; width:100%"></div>
        </div>
    </div>
</div>

<script type='text/javascript'>
    jQuery('#eZBookingPlugin').eZBookingPlugin({
      btnContainer: "eZee_BookingContainer",
      HotelId:'hotelplazakokaicancun' ,
      LayoutTheme:"2",
      LayoutView:"2",
      serverurl:"https://live.ipms247.com/booking/",
      serverhost:"live.ipms247.com",
      HeaderBgColor1:"#2a2981",
      HeaderBgColor2:"#333333",
      HeaderFontColor:"#ffffff",
      HeaderFontColor2:"#ffffff",
      HeaderBorderColor:"#ffffff",
      BodyBgColor:"#ffffff",
      BodyBgTheme:"0",
      BodyBgPosition1:"repeat-y",
      BodyBgPosition2:"left",
      BodyBgPosition4:"",
      BodyFontFamily:"'SourceSansProRegular', sans-serif;",
      CalLanguage:"en",
      selectedLang:"-en-English",
      Calinit:true,
      CalShowOn:'both',
      CalDefaultDt: '+0w',
      CalChangeMonth: true,
      CalMaxDate:null,
      siteroot:true,
      CalMinDate:"0",
      CalDtFormat:"dd-mm-yy",
      CalHeaderColor:"#0b85d6",
      CalHeaderFontColor:"#ffffff",
      CalCellActiveColor:"#fcc51e",
      CalCellInActiveColor:"#a3a3a3",
      ResUIshowfilter:true,
      selectedviewoptions:0,
      ResUIshowfilterPlan:true,
      ResUIshowfilterPrice:false,
      ResUIshowfilterPreference:true,
      ResUIShowGuestRating:1,
      ShowNights:false,
      ShowDepart:true,
      Nonights:15,
      ShowSelectedNights:true,
      DefaultSelectedNights:1,
      ShowMinNightsMatchedRatePlan:false,
      ShowOnlyAvailableRatePlanOrPackage:1,
      ResUILimitRatePlanPackage:1,
      ResUINoOfRatePlanPackage:2,
      ResUIAvailabilityTextColor:"#ffffff",
      ResUIAvailabilityBackgroundColor:"#ff000d",
      ResUIAddRoomTextColor:"#ffffff",
      ResUIAddRoomBackgroundColor:"#ff000d",
      ResUIAddRoomBackgroundHoverColor:"#ff000d",
      NeedHelpBackgroundColor:"#0b85d6",
      NeedHelpTextColor:"#ffffff",
      decimalplaces:"2",
      viewoptions:1,
      ResUIHelpBoxBackColor:"#d41124",
      ResUIHelpBoxTextColor:"#ffffff",
      ResUIHelpBoxBorderColor:"#ff000d",
      ResUIRoomNameTextColor:"#000000",
      ResUIRateTextColor:"#000000",
      ResUIRoomInfoEnquireTextColor:"#000000",
      RunOnMaximumOccupanySettings:0,
      ResUIPaxOnMaximumOccupancy:0,
      acr:false,
      defaultadult:10,
      defaultselectedadult:2,
      ResUIMatchExactAdultCheck:0,
      showchild_bb:false,
      showchild:true,
      defaultchild:10,
      defaultselectedchild:0,
      ResUIMatchExactChildCheck:0,
      ShowPromotion:false,
      ResUIFilterNonRefundable:0,
      ResUIFilterNonRefundableValue:0,
      ResUIFilterExcludeNotAvailable:1,
      ResUIFilterSearchMore:true,
      ResUIFilterRoomType:true,
      ShowClosestAvailability:0,
      WebDefaultRatesAvgNightORWholeStay:2,
      WebShowRatesAvgNightORWholeStay:3,
      isShowRecentBooking:1,
      isShowBEViewers:1,
      isShowTotalGuestCountryWise:1,
      ResUIMinimumPrice:1,
      ResUIMaximumPrice:20000,
    });
  </script>
@stop