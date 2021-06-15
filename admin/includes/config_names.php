<?php
abstract class ConfigNames
{	
    const AdminThemeColor = 'adminThemeColor';
	const AlamodeKickTriggerCount = 'alamodeKickTriggerCount';
	const AlamodePourMessageDelay = 'alamodePourMessageDelay';
	const AlamodePourTriggerCount = 'alamodePourTriggerCount';
	const AlamodeUpdateTriggerCount = 'alamodeUpdateTriggerCount';
	const AutoRefreshLocal = 'autoRefreshLocal';
	const AutoKickKegs = 'autoKickKegs';
	const BottleHeaderText = 'bottleHeaderText';
	const BreweryID = 'BreweryID';
	const ClientID = 'ClientID';
	const ClientSecret = 'ClientSecret';
	const RedirectUri = 'RedirectUri';
	const AccessToken = 'AccessToken';
	const CONTAINER_TYPE_BOTTLE = 'Bottle';
	const CONTAINER_TYPE_KEG = 'Keg';
	const FanInterval = 'fanInterval';
	const FanOnTime = 'fanOnTime';
	const HeaderText = 'headerText';
	const HeaderTextTruncLen = 'headerTextTruncLen';
	const ShowUntappdBreweryFeed = 'showUntappdBreweryFeed';
	const LogoUrl = 'logoUrl';
	const NumberOfShelves = 'numberOfShelves';
	const NumberOfTaps = 'numberOfTaps';
	const NumberOfDisplayPours = 'numberOfDisplayPours';
	const PourShutOffCount = 'pourShutOffCount';
	const SaveNonUserRfids = 'saveNonUserRfids';
	const ShowAbvCol = 'showAbvCol';
	const AbvColNum = 'AbvColNum';
	const ShowAbvImg = 'showAbvImg';
	const ShowAbvTxtWImg = 'showAbvTxtWImg';
	const ShowAbvValue = 'showAbvValue';
	const ShowBalance = 'showBalance';
	const ShowBeerImages = 'showBeerImages';
	const ShowBeerName = 'showBeerName';
	const BeerInfoColNum = 'BeerInfoColNum';
	const ShowBeerNotes = 'showTastingNotes';
	const ShowBeerRating = 'showBeerRating';
	const ShowBeerStyle = 'showBeerStyle';
	const ShowBreweryImages = 'showBreweryImages';
	const ShowBuGuValue = 'showBuGuValue';
	const ShowCalCol = 'showCalCol';
	const ShowCalories = 'showCalories';
	const ShowGravity = 'showGravity';
	const ShowIbuCol = 'showIbuCol';
	const IbuColNum = 'IbuColNum';
	const ShowIbuImg = 'showIbuImg';
	const ShowIbuValue = 'showIbuValue';
	const ShowKcalValue = 'showKcalValue';
	const ShowKegCol = 'showKegCol';
	const KegColNum = 'KegColNum';
	const ShowKegImg = 'showKegImg';
	const ShowOgValue = 'showOgValue';
	const ShowPourAmount= 'showPourAmount';
	const ShowPourBeerImages = 'showPourBeerImages';
	const ShowPourBeerName = 'showPourBeerName';
	const PourBeerCol = 'pourBeerCol';
	const ShowPourBreweryImages = 'showPourBreweryImages';
	const ShowPourDate= 'showPourDate';
	const ShowPourTapNumCol = 'showPourTapNumCol';
	const ShowPourUserName = 'showPourUserName';
	const ShowPouredValue = 'showPouredValue';
	const ShowLastPouredValue = 'showLastPouredValue';
	const ShowRemainValue = 'showRemainValue';
	const ShowVerticleTapList = 'showVerticleTapList';
	const ShowRPLogo = 'showRPLogo';
	const ShowDigitalClock = 'showDigitalClock';
	const ShowDigitalClock24 = 'showDigitalClock24';
	const ShowAnalogClock = 'showAnalogClock';
	const ShowLastPour = 'showLastPour';
	const ShowPourListOnHome = 'showPourListOnHome';
	const ShowSrmCol = 'showSrmCol';
	const SrmColNum = 'SrmColNum';
	const ShowSrmImg = 'showSrmImg';
	const ShowSrmValue = 'showSrmValue';
	const ShowTapNumCol = 'showTapNumCol';
	const TapNumColNum = 'TapNumColNum';
	const ShowTastingNotes = 'showTastingNotes';
	const ShowAccoladeCol = 'showAccoladeCol';
	const AccoladeColNum = 'AccoladeColNum';
	const UseFanControl = 'useFanControl';
	const UseFanPin = 'useFanPin';
	const UseFlowMeter = 'useFlowMeter';
	const UseHighResolution = 'useHighResolution';
	const UseRFID = 'useRFID';
	const UseTapValves = 'useTapValves';
	const UsePlaato = 'usePlaato';
	const UsePlaatoTemp = 'usePlaatoTemp';
	const AllowManualPours = 'allowManualPours';
	const ValvesPowerPin = 'valvesPowerPin';
	const Use3WireValves = 'use3WireValves';
	const ValvesOnTime = 'valvesOnTime';
	const Version = 'version';
	const UpdateDate = 'updateDate';
	const RelayTrigger = 'relayTrigger';
	const DisplayRowsSameHeight = 'displayRowsSameHeight';
	const UseKegWeightCalc = 'useKegWeightCalc';
	const UseDefWeightSettings = 'useDefWeightSettings';
	const BreweryAltitude = 'breweryAltitude';
	const BreweryAltitudeUnit = 'breweryAltitudeUnit';
	const DefaultFermPSI  = 'defaultFermPSI';
	const DefaultFermPSIUnit  = 'defaultFermPSIUnit';
	const DefaultKeggingTemp = 'defaultKeggingTemp';
	const DefaultKeggingTempUnit = 'defaultKeggingTempUnit';
	const UseTempProbes = 'useTempProbes';
	const TempProbeDelay = 'tempProbeDelay';
	const TempProbeBoundLow = 'tempProbeBoundLow';
	const TempProbeBoundHigh = 'tempProbeBoundHigh';
	const ShowTempOnMainPage = 'showTempOnMainPage';
	const AllowSamplePour = 'allowSamplePour';
	const RestartFanAfterPour = 'restartFanAfterPour';
	const DefaultRowsPerPage = 'DefaultRowsPerPage';
	const DisplayUnitVolume      = 'displayUnitVolume';
	const DisplayUnitPressure    = 'displayUnitPressure';
	const DisplayUnitDistance    = 'displayUnitDistance';
	const DisplayUnitGravity     = 'displayUnitGravity';
	const DisplayUnitTemperature = 'displayUnitTemperature';
	const DisplayUnitWeight      = 'displayUnitWeight';
	const ShowBeerTableHead      = 'showBeerTableHead';
	const HozTapListCol      = 'hozTapListCol';
	const AmountPerPint      = 'amountPerPint';
	const NumAccoladeDisplay      = 'numAccoladeDisplay';
	const ABVColorSRM      = 'ABVColorSRM';
	const UpdateBatchWithKeg      = 'UpdateBatchWithKeg';
	const RefreshTapList      = 'RefreshTapList';
	const InfoTime      = 'InfoTime';
	const ShowFermOnMainPage = 'showFermOnMainPage';
	const ShowGTOnMainPage = 'showGTOnMainPage';
	const ShowAllGTOnMainPage = 'showAllGTOnMainPage';
	
	const iSUpdateMinTemp = 'iSUpdateMinTemp';
	const iSUpdateMaxTemp = 'iSUpdateMaxTemp';
	const iSUpdateOG = 'iSUpdateOG';
	const iSUpdateFG = 'iSUpdateFG';
}
?>