<?php
/***************************************
ä¿®æ”¹æœ¬æ–‡ä»¶å°†å¯¼è‡´æ’ä»¶å¤±æ•ˆ
Modifying this file will cause the plug-in to become invalid
æ’ä»¶åï¼šYiluPHP ADB
Name of plug-in: YiluPHP ADB
Version: V1.0
Author: Wu Jianwu<Jim Wu>
Email: 759480087@qq.com
Website: https://www.yiluphp.com
Documents: https://www.yiluphp.com/docs/YiluphpADB
Github location: https://github.com/wujianwu8/YiluphpADB
***************************************/

if (!empty($fjasdfjlasdfhklajshdflahdfsfasdfasddfsdf)) {
    class yiluphp_adb
    {
        /**
         * æž„é€ å‡½æ•°
         * @param $device è®¾å¤‡åç§°ï¼Œå¦‚æ‰‹æœºçš„è®¾å¤‡åï¼Œå¯ä»¥ä½¿ç”¨å‘½ä»¤ adb devices æŸ¥çœ‹å·²ç»è¿žæŽ¥ä¸Šçš„è®¾ç½®ï¼Œè®¾å¤‡åç§°å¯èƒ½æ˜¯å­—ç¬¦ä¸²ï¼Œä¹Ÿå¯èƒ½æ˜¯ipåŠ ç«¯å£å·
         * @throws Exception
         */
        public function __construct($device)
        {
        }

        /**
         * èŽ·å–å½“å‰æ’ä»¶çš„ç‰ˆæœ¬å·
         * @return string
         **/
        public static function version()
        {
        }

        /**
         * è¿”å›žå½“æ—¶ç”µè„‘ä¸­æ‰€æœ‰å¯è®¿é—®çš„è®¾å¤‡è®¾ç½®ã€‚é™æ€æ–¹æ³•ï¼Œä¸éœ€è¦å®žä¾‹åŒ–ä¹Ÿå¯ä»¥è°ƒç”¨
         * @param $print string å¦‚æžœéœ€è¦ç«‹å³æ‰“å°ç»“æžœï¼Œå¯ä¼ æ­¤å‚æ•°ï¼Œprintfä¸ºç½‘é¡µä¸­æ ¼å¼åŒ–è¾“å‡ºï¼Œprinträ¸ºå‘½ä»¤çª—å£ä¸­æ ¼å¼åŒ–è¾“å‡º
         * @return array
         **/
        public static function devices($print = '')
        {
        }

        /**
         * æ£€æŸ¥ä¸€ä¸ªèŠ‚ç‚¹æ˜¯å¦åŒ…å«æŒ‡å®šçš„å±žæ€§åŠå€¼
         * @param $node_xml string ä¸€ä¸ªèŠ‚ç‚¹çš„XML
         * @param $attr array åŒ…å«å±žæ€§åŠå…¶å€¼ï¼Œå¯ä¼ å…¥*ä½œä¸ºé€šé…ç¬¦
         * @return boolean å®Œæˆé…ç½®æ‰€æœ‰ç»™å®šçš„å±žæ€§åŠå…¶å€¼æ”¶è¿”å›žtrueï¼Œå¦åˆ™è¿”å›žfalse
         **/
        public static function is_match_attr($node_xml, $attr)
        {
        }

        /**
         * èŽ·å–æŒ‡å®šboundså€¼ä¸Šæ–¹(æŒ‰å±å¹•æ˜¾ç¤ºä½ç½®çœ‹)çš„èŠ‚ç‚¹
         * boundsåŒ…å«ä¸€ä¸ªèŠ‚ç‚¹çš„å·¦ä¸Šè§’åæ ‡å’Œå³ä¸‹è§’åæ ‡
         * @param $x1 integer å·¦ä¸Šè§’åæ ‡çš„Xè½´
         * @param $y1 integer å·¦ä¸Šè§’åæ ‡çš„Yè½´
         * @param $x2 integer å³ä¸‹è§’åæ ‡çš„Xè½´
         * @param $y2 integer å³ä¸‹è§’åæ ‡çš„Yè½´
         * @param $uiXml string uiWidgetså‡½æ•°è¿”å›žçš„XML
         * @param $offsetX integer ç›®æ ‡èŠ‚ç‚¹çš„å·¦è¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„å·¦è¾¹å¯¹æ¯”ï¼Œæ°´å¹³æ–¹å‘çš„å®¹å·®èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºå·¦è¾¹åæ ‡éœ€è¦å¯¹é½å¾—ä¸€æ¨¡ä¸€æ ·
         * @param $yRange integer ç›®æ ‡èŠ‚ç‚¹çš„ä¸Šè¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„åº•è¾¹å¯¹æ¯”ï¼Œåž‚ç›´æ–¹å‘çš„æŸ¥æ‰¾èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸é™åº¦è·ç¦»
         * @param $attr array åŒ…å«å±žæ€§åŠå…¶å€¼ï¼Œå¯ä¼ å…¥*ä½œä¸ºé€šé…ç¬¦
         * @return array è¿”å›žç¬¦åˆæ¡ä»¶çš„èŠ‚ç‚¹å¯¹è±¡
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function nodesAboveBounds($x1, $y1, $x2, $y2, $uiXml, $offsetX = 0, $yRange = 0, array $attr = [])
        {
        }

        /**
         * èŽ·å–æŒ‡å®šboundså€¼ä¸‹æ–¹(æŒ‰å±å¹•æ˜¾ç¤ºä½ç½®çœ‹)çš„èŠ‚ç‚¹
         * boundsåŒ…å«ä¸€ä¸ªèŠ‚ç‚¹çš„å·¦ä¸Šè§’åæ ‡å’Œå³ä¸‹è§’åæ ‡
         * @param $x1 integer å·¦ä¸Šè§’åæ ‡çš„Xè½´
         * @param $y1 integer å·¦ä¸Šè§’åæ ‡çš„Yè½´
         * @param $x2 integer å³ä¸‹è§’åæ ‡çš„Xè½´
         * @param $y2 integer å³ä¸‹è§’åæ ‡çš„Yè½´
         * @param $uiXml string uiWidgetså‡½æ•°è¿”å›žçš„XML
         * @param $offsetX integer ç›®æ ‡èŠ‚ç‚¹çš„å·¦è¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„å·¦è¾¹å¯¹æ¯”ï¼Œæ°´å¹³æ–¹å‘çš„å®¹å·®èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºå·¦è¾¹åæ ‡éœ€è¦å¯¹é½å¾—ä¸€æ¨¡ä¸€æ ·
         * @param $yRange integer ç›®æ ‡èŠ‚ç‚¹çš„åº•è¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„ä¸Šè¾¹å¯¹æ¯”ï¼Œåž‚ç›´æ–¹å‘çš„æŸ¥æ‰¾èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸é™åº¦è·ç¦»
         * @param $attr array åŒ…å«å±žæ€§åŠå…¶å€¼ï¼Œå¯ä¼ å…¥*ä½œä¸ºé€šé…ç¬¦
         * @return array è¿”å›žç¬¦åˆæ¡ä»¶çš„èŠ‚ç‚¹å¯¹è±¡
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function nodesBelowBounds($x1, $y1, $x2, $y2, $uiXml, $offsetX = 0, $yRange = 0, array $attr = [])
        {
        }

        /**
         * èŽ·å–æŒ‡å®šboundså€¼å·¦è¾¹(æŒ‰å±å¹•æ˜¾ç¤ºä½ç½®çœ‹)çš„èŠ‚ç‚¹
         * boundsåŒ…å«ä¸€ä¸ªèŠ‚ç‚¹çš„å·¦ä¸Šè§’åæ ‡å’Œå³ä¸‹è§’åæ ‡
         * @param $x1 integer å·¦ä¸Šè§’åæ ‡çš„Xè½´
         * @param $y1 integer å·¦ä¸Šè§’åæ ‡çš„Yè½´
         * @param $x2 integer å³ä¸‹è§’åæ ‡çš„Xè½´
         * @param $y2 integer å³ä¸‹è§’åæ ‡çš„Yè½´
         * @param $uiXml string uiWidgetså‡½æ•°è¿”å›žçš„XML
         * @param $xRange integer ç›®æ ‡èŠ‚ç‚¹çš„å·¦è¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„å³è¾¹å¯¹æ¯”ï¼Œæ°´å¹³æ–¹å‘çš„æŸ¥æ‰¾èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸é™åº¦è·ç¦»
         * @param $offsetY integer ç›®æ ‡èŠ‚ç‚¹çš„ä¸Šè¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„ä¸Šè¾¹å¯¹æ¯”ï¼Œåž‚ç›´æ–¹å‘çš„å®¹å·®èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸Šè¾¹åæ ‡éœ€è¦å¯¹é½å¾—ä¸€æ¨¡ä¸€æ ·
         * @param $attr array åŒ…å«å±žæ€§åŠå…¶å€¼ï¼Œå¯ä¼ å…¥*ä½œä¸ºé€šé…ç¬¦
         * @return array è¿”å›žç¬¦åˆæ¡ä»¶çš„èŠ‚ç‚¹å¯¹è±¡
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function nodesOnLeft($x1, $y1, $x2, $y2, $uiXml, $xRange = 0, $offsetY = 0, array $attr = [])
        {
        }

        /**
         * èŽ·å–æŒ‡å®šboundså€¼å³è¾¹(æŒ‰å±å¹•æ˜¾ç¤ºä½ç½®çœ‹)çš„èŠ‚ç‚¹
         * boundsåŒ…å«ä¸€ä¸ªèŠ‚ç‚¹çš„å·¦ä¸Šè§’åæ ‡å’Œå³ä¸‹è§’åæ ‡
         * @param $x1 integer å·¦ä¸Šè§’åæ ‡çš„Xè½´
         * @param $y1 integer å·¦ä¸Šè§’åæ ‡çš„Yè½´
         * @param $x2 integer å³ä¸‹è§’åæ ‡çš„Xè½´
         * @param $y2 integer å³ä¸‹è§’åæ ‡çš„Yè½´
         * @param $uiXml string uiWidgetså‡½æ•°è¿”å›žçš„XML
         * @param $xRange integer ç›®æ ‡èŠ‚ç‚¹çš„å³è¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„å·¦è¾¹å¯¹æ¯”ï¼Œæ°´å¹³æ–¹å‘çš„æŸ¥æ‰¾èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸é™åº¦è·ç¦»
         * @param $offsetY integer ç›®æ ‡èŠ‚ç‚¹çš„ä¸Šè¾¹ä¸ŽæŒ‡å®šèŠ‚ç‚¹çš„ä¸Šè¾¹å¯¹æ¯”ï¼Œåž‚ç›´æ–¹å‘çš„å®¹å·®èŒƒå›´ã€‚é»˜è®¤ä¸º0ï¼Œè¡¨ç¤ºä¸Šè¾¹åæ ‡éœ€è¦å¯¹é½å¾—ä¸€æ¨¡ä¸€æ ·
         * @param $attr array åŒ…å«å±žæ€§åŠå…¶å€¼ï¼Œå¯ä¼ å…¥*ä½œä¸ºé€šé…ç¬¦
         * @return array è¿”å›žç¬¦åˆæ¡ä»¶çš„èŠ‚ç‚¹å¯¹è±¡
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function nodesOnRight($x1, $y1, $x2, $y2, $uiXml, $xRange = 0, $offsetY = 0, array $attr = [])
        {
        }

        /**
         * èŽ·å–å½“å‰è®¾å¤‡çš„æ‰€æœ‰åº”ç”¨
         * @param $type åº”ç”¨ç±»åž‹ï¼Œallå…¨éƒ¨ï¼Œsysç³»ç»Ÿåº”ç”¨ï¼Œthirdç¬¬ä¸‰æ–¹åº”ç”¨
         * @return array
         **/
        public function packages($type = 'all')
        {
        }

        /**
         * èŽ·å–å½“å‰æ‰“å¼€çš„ã€æœ€é¡¶å±‚åº”ç”¨çš„åŒ…å
         * @return string è¿”å›žåŒ…åï¼Œå¦‚æžœæ²¡æœ‰æ‰¾åˆ°åŒ…ååˆ™è¿”å›žæŸ¥å¯»åˆ°çš„æ‰€æœ‰å­—ç¬¦ä¸²
         **/
        public function package()
        {
        }

        /**
         * èŽ·å–å½“å‰æ‰“å¼€çš„ã€æœ€é¡¶å±‚åº”ç”¨çš„Activityåç§°
         * @return string è¿”å›žåŒ…åï¼Œå¦‚æžœæ²¡æœ‰æ‰¾åˆ°åŒ…ååˆ™è¿”å›žæŸ¥å¯»åˆ°çš„æ‰€æœ‰å­—ç¬¦ä¸²
         **/
        public function activity()
        {
        }

        /**
         * æ¸…é™¤åº”ç”¨æ•°æ®ä¸Žç¼“å­˜
         * æ•ˆæžœç›¸å½“äºŽåœ¨è®¾ç½®é‡Œçš„åº”ç”¨ä¿¡æ¯ç•Œé¢ç‚¹å‡»äº†ã€Œæ¸…é™¤ç¼“å­˜ã€å’Œã€Œæ¸…é™¤æ•°æ®ã€
         * @param $package string åº”ç”¨åŒ…å
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥è¿”å›žfalse
         **/
        public function clear($package)
        {
        }

        /**
         * å¯åŠ¨åº”ç”¨/è°ƒèµ· Activity
         * æ•ˆæžœç›¸å½“äºŽåœ¨è®¾ç½®é‡Œçš„åº”ç”¨ä¿¡æ¯ç•Œé¢ç‚¹å‡»äº†ã€Œæ¸…é™¤ç¼“å­˜ã€å’Œã€Œæ¸…é™¤æ•°æ®ã€
         * @param $package_activity string åº”ç”¨åŒ…å/Activityï¼Œä¾‹å¦‚ï¼š'com.tencent.mm/.ui.LauncherUI'è¡¨ç¤ºè°ƒèµ·å¾®ä¿¡ä¸»ç•Œé¢ã€‚
         * @param $data string ä¼ ç»™çš„æ•°æ®é”®å€¼ï¼Œä¾‹å¦‚ï¼šâ€˜"say" "hello"â€™è¡¨ç¤ºå¯åŠ¨åº”ç”¨çš„åŒæ—¶ä¼ é€’ä¸€å¯¹é”®å€¼æ•°æ®è¿‡åŽ»
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥è¿”å›žfalse
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function startApp($package_activity, $data = '')
        {
        }

        /**
         * å¼ºåˆ¶åœæ­¢åº”ç”¨
         * @param $package string åº”ç”¨åŒ…å
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function stopApp($package)
        {
        }

        /**
         * è°ƒèµ· Service
         * @param $package_service string åº”ç”¨åŒ…å/æŸç»„ä»¶æœåŠ¡ï¼Œä¾‹å¦‚ï¼š'com.tencent.mm/.plugin.accountsync.model.AccountAuthenticatorService'è¡¨ç¤ºè°ƒèµ·å¾®ä¿¡çš„æŸ Serviceï¼Œå¦å¤–ä¸€ä¸ªå…¸åž‹çš„ç”¨ä¾‹æ˜¯å¦‚æžœè®¾å¤‡ä¸ŠåŽŸæœ¬åº”è¯¥æ˜¾ç¤ºè™šæ‹ŸæŒ‰é”®ä½†æ˜¯æ²¡æœ‰æ˜¾ç¤ºï¼Œå¯ä»¥ä¼ æ­¤å€¼com.android.systemui/.SystemUIService
         * @param $action string æŸæ“ä½œåç§°ï¼Œå°±æ˜¯ä½ åœ¨Androidmanifesté‡Œå®šä¹‰çš„
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥è¿”å›žfalse
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function startService($package_service = '', $action = '')
        {
        }

        /**
         * åœæ­¢ Service
         * @param $package_service string åº”ç”¨åŒ…å/æŸç»„ä»¶æœåŠ¡
         * @param $action string æŸæ“ä½œåç§°ï¼Œå°±æ˜¯ä½ åœ¨Androidmanifesté‡Œå®šä¹‰çš„
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥è¿”å›žfalse
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function stopService($package_service = '', $action = '')
        {
        }

        /**
         * å¤åˆ¶è®¾å¤‡é‡Œçš„æ–‡ä»¶åˆ°ç”µè„‘
         * @param $remote_file string è®¾å¤‡çš„æ–‡ä»¶è·¯å¾„
         * @param $local_dir string ç”µè„‘ä¸Šçš„ç›®å½•ï¼Œå‚æ•°å¯ä»¥çœç•¥ï¼Œé»˜è®¤å¤åˆ¶åˆ°å½“å‰ç›®å½•ï¼Œå¦‚æžœåœ¨windowsé‡Œä¼ å€¼åˆ™ä¸èƒ½æ˜¯ç£ç›˜çš„æ ¹ç›®å½•ï¼ˆæ„æ€æ˜¯è‡³å°‘è¦ä¸€ä¸ªæ–‡ä»¶å¤¹ï¼‰ï¼Œå¦åˆ™ä¼šæŠ¥é”™
         * @return string æˆåŠŸè¿”å›žå­˜å‚¨åœ¨ç”µè„‘é‡Œçš„æ–‡ä»¶è·¯å¾„ï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function pullFile($remote_file, $local_dir = '')
        {
        }

        /**
         * å¤åˆ¶ç”µè„‘é‡Œçš„æ–‡ä»¶åˆ°è®¾å¤‡
         * @param $local_file string ç”µè„‘ä¸Šçš„æ–‡ä»¶è·¯å¾„
         * @param $remote_dir string è®¾å¤‡é‡Œçš„ç›®å½•
         * @return string æˆåŠŸè¿”å›žå­˜å‚¨åœ¨ç”µè„‘é‡Œçš„æ–‡ä»¶è·¯å¾„ï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function pushFile($local_file, $remote_dir)
        {
        }

        /**
         * åˆ é™¤è®¾å¤‡é‡Œçš„æ–‡ä»¶
         * @param $remote_file string è®¾å¤‡çš„æ–‡ä»¶è·¯å¾„
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function removeFile($remote_file)
        {
        }

        /**
         * èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰æŽ§ä»¶ä¿¡æ¯
         * @return string è¿”å›žXMLæ–‡æ¡£
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function uiWidgets()
        {
        }

        /**
         * æ ¹æ®æ–‡æœ¬èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹
         * @param $text string æ–‡æœ¬å­—ç¬¦ä¸²
         * @param $like boolean æ˜¯å¦æ¨¡ç³ŠæŸ¥è¯¢ï¼Œé»˜è®¤ä¸ºfalseï¼Œç²¾å‡†æŸ¥è¯¢
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByText($text, $like = false)
        {
        }

        /**
         * æ ¹æ®èŠ‚ç‚¹çš„å†…å®¹æè¿°èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹
         * @param $contentDesc string å†…å®¹æè¿°
         * @param $like boolean æ˜¯å¦æ¨¡ç³ŠæŸ¥è¯¢ï¼Œé»˜è®¤ä¸ºfalseï¼Œç²¾å‡†æŸ¥è¯¢
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByContentDesc($contentDesc, $like = false)
        {
        }

        /**
         * æ ¹æ®resource idèŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹
         * @param $resource_id string resource-idå±žæ€§çš„å€¼
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByResourceId($resource_id)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å¯ä»¥é€‰ä¸­(å¯¹å‹¾é€‰æ‹©æ¡†)æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå¯é€‰ä¸­çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸å¯é€‰ä¸­çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByCheckable($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å·²ç»é€‰ä¸­(å¯¹å‹¾é€‰æ‹©æ¡†)æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå·²ç»é€‰ä¸­çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºæ²¡æœ‰é€‰ä¸­çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByChecked($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å¯ä»¥ç‚¹å‡»æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå¯ç‚¹å‡»çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸å¯ç‚¹å‡»çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByClickable($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å·²ç»å¯ç”¨æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå·²ç»å¯ç”¨çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºæ²¡æœ‰å¯ç”¨çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByEnabled($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å¯ä»¥èšç„¦æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå¯èšç„¦çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸å¯èšç„¦çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByFocusable($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å·²ç»èšç„¦æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå·²ç»èšç„¦çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºæ²¡æœ‰èšç„¦çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByFocused($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å¯ä»¥æ»šåŠ¨æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå¯æ»šåŠ¨çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸å¯æ»šåŠ¨çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByScrollable($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦æœ‰é•¿æŒ‰äº‹ä»¶æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºæœ‰é•¿æŒ‰äº‹ä»¶çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºæ²¡æœ‰é•¿æŒ‰äº‹ä»¶çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByLongClickable($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦ä¸ºå¯†ç åŒºæ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºæ˜¯å¯†ç åŒºçš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸æ˜¯å¯†ç åŒºçš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByPassword($boolean)
        {
        }

        /**
         * æ ¹æ®æ˜¯å¦å·²ç»é€‰ä¸­æ¥èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $boolean boolean trueè¡¨ç¤ºå¯èšç„¦çš„å®¹å™¨ï¼Œfalseè¡¨ç¤ºä¸å¯èšç„¦çš„å®¹å™¨
         * @return array è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesBySelected($boolean)
        {
        }

        /**
         * èŽ·å–åœ¨æŒ‡å®šåæ ‡ç‚¹çš„æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $x integer Xåæ ‡
         * @param $y integer Yåæ ‡
         * @param $attr array æŒ‡å®šåŒ¹é…å±žæ€§åŠå€¼ï¼Œä¸€ç»´æ•°ç»„ï¼Œå±žæ€§çš„å€¼ä¸ºå¸ƒå°”åž‹æ—¶falseä¸ºæ²¡æœ‰å€¼trueä¸ºå¿…é¡»æœ‰å€¼ï¼Œå€¼ä¸ºå­—ç¬¦ä¸²æ—¶å¯ä½¿ç”¨é€šé…ç¬¦*ä»£æ›¿ä»»æ„å­—ç¬¦ä¸²
         * @param $xml string å¤ç”¨å±å¹•çš„XML
         * @return array è¿”å›žåŒ…å«åœ¨è¯¥åæ ‡ç‚¹çš„æ‰€æœ‰èŠ‚ç‚¹å¯¹è±¡çš„æ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByPosition($x, $y, array $attr = [], $xml = null)
        {
        }

        /**
         * æ ¹æ®èŠ‚ç‚¹çš„å±žæ€§èŽ·å–è®¾å¤‡å½“å‰å±å¹•æ‰€æœ‰èŠ‚ç‚¹(å®¹å™¨)
         * @param $attributes array èŠ‚ç‚¹çš„å±žæ€§ï¼Œatträ¸ºå±žæ€§åç§°ï¼Œvalueä¸ºå±žæ€§çš„å€¼ï¼Œlikeä¸ºæ˜¯å¦æ¨¡ç³ŠæŸ¥è¯¢ï¼Œé»˜è®¤ä¸ºfalseç²¾å‡†æŸ¥è¯¢ã€‚
         * attrå¯é€‰å€¼æœ‰ï¼šindexã€textã€resource-idã€classã€packageã€content-descã€checkableã€checkedã€clickableã€enabledã€focusableã€focusedã€scrollableã€long-clickableã€passwordã€selected
         * @return array $attributeä¸ºå•ä¸ªèŠ‚ç‚¹æ—¶è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡ï¼ˆå¯èƒ½å¤šä¸ªï¼‰çš„ä¸€ç»´æ•°ç»„ï¼Œ$attributeä¸ºå¤šä¸ªèŠ‚ç‚¹å±žæ€§æ—¶è¿”å›žäºŒç»´æ•°æ®ï¼ŒæŽ’åˆ—é¡ºåºï¼ˆæ•°ç»„çš„é”®åï¼‰ä¸Ž$attributeä¼ å…¥çš„ä¸€æ ·ï¼Œå¤±è´¥è¿”å›žç©ºæ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function getNodesByAttributes(array $attributes)
        {
        }

        /**
         * æ“ä½œæŒ‰é”®
         * @param  $keycode integer æŒ‰é”®ç¼–ç ï¼Œéƒ¨åˆ†æŒ‰é”®ç¼–ç å¦‚ä¸‹
         * æ›´å¤škeycodeè§ï¼šhttps://developer.android.com/reference/android/view/KeyEvent.html
         * æˆ–ï¼šhttps://blog.csdn.net/love_xsq/article/details/72468739
         * keycode    å«ä¹‰
         * 3    HOME é”®
         * 4    è¿”å›žé”®
         * 5    æ‰“å¼€æ‹¨å·åº”ç”¨
         * 6    æŒ‚æ–­ç”µè¯
         * 24    å¢žåŠ éŸ³é‡
         * 25    é™ä½ŽéŸ³é‡
         * 26    ç”µæºé”®
         * 27    æ‹ç…§ï¼ˆéœ€è¦åœ¨ç›¸æœºåº”ç”¨é‡Œï¼‰
         * 62    è¾“å…¥ç©ºæ ¼
         * 64    æ‰“å¼€æµè§ˆå™¨
         * 66    å›žè½¦æ¢è¡Œ
         * 67    åˆ é™¤
         * 82    èœå•é”®
         * 85    æ’­æ”¾/æš‚åœ
         * 86    åœæ­¢æ’­æ”¾
         * 87    æ’­æ”¾ä¸‹ä¸€é¦–
         * 88    æ’­æ”¾ä¸Šä¸€é¦–
         * 122    ç§»åŠ¨å…‰æ ‡åˆ°è¡Œé¦–æˆ–åˆ—è¡¨é¡¶éƒ¨
         * 123    ç§»åŠ¨å…‰æ ‡åˆ°è¡Œæœ«æˆ–åˆ—è¡¨åº•éƒ¨
         * 126    æ¢å¤æ’­æ”¾
         * 127    æš‚åœæ’­æ”¾
         * 164    é™éŸ³
         * 176    æ‰“å¼€ç³»ç»Ÿè®¾ç½®
         * 187    åˆ‡æ¢åº”ç”¨
         * 207    æ‰“å¼€è”ç³»äºº
         * 208    æ‰“å¼€æ—¥åŽ†
         * 209    æ‰“å¼€éŸ³ä¹
         * 210    æ‰“å¼€è®¡ç®—å™¨
         * 220    é™ä½Žå±å¹•äº®åº¦
         * 221    æé«˜å±å¹•äº®åº¦
         * 223    ç³»ç»Ÿä¼‘çœ 
         * 224    ç‚¹äº®å±å¹•
         * 231    æ‰“å¼€è¯­éŸ³åŠ©æ‰‹
         * 276    å¦‚æžœæ²¡æœ‰ wakelock åˆ™è®©ç³»ç»Ÿä¼‘çœ 
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function keyevent($keycode)
        {
        }

        /**
         * æ»‘åŠ¨å±å¹•
         * @param  $x1 integer èµ·å§‹ç‚¹åæ ‡çš„xä½ç½®
         * @param  $y1 integer èµ·å§‹ç‚¹åæ ‡çš„yä½ç½®
         * @param  $x2 integer ç»“æŸç‚¹åæ ‡çš„xä½ç½®
         * @param  $y2 integer ç»“æŸç‚¹åæ ‡çš„yä½ç½®
         * @param  $duration integer æ»‘åŠ¨è¿‡ç¨‹æŒç»­æ—¶é—´ï¼Œå•ä½ä¸ºæ¯«ç§’ã€‚æŠŠèµ·å§‹ç‚¹å’Œç»“æŸç‚¹è®¾ç½®ä¸€æ ·çš„ï¼ŒæŒç»­æ—¶é—´é•¿ä¸€ç‚¹å¯èµ·åˆ°é•¿æŒ‰æ•ˆæžœ
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function swipe($x1, $y1, $x2, $y2, $duration = 200)
        {
        }

        /**
         * @name å‘å³æ»‘åŠ¨å±å¹•
         * @desc ä»Žæ°´å¹³çš„å·¦è¾¹ã€åž‚ç›´çš„ä¸­é—´å‘å³æ»‘åŠ¨å±å¹•
         * @param  $duration integer æ»‘åŠ¨è¿‡ç¨‹æŒç»­æ—¶é—´ï¼Œå•ä½ä¸ºæ¯«ç§’ã€‚æŠŠèµ·å§‹ç‚¹å’Œç»“æŸç‚¹è®¾ç½®ä¸€æ ·çš„ï¼ŒæŒç»­æ—¶é—´é•¿ä¸€ç‚¹å¯èµ·åˆ°é•¿æŒ‰æ•ˆæžœ
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function swipeToRight($duration = 200)
        {
        }

        /**
         * @name å‘å·¦æ»‘åŠ¨å±å¹•
         * @desc ä»Žæ°´å¹³çš„å³è¾¹ã€åž‚ç›´çš„ä¸­é—´å‘å·¦æ»‘åŠ¨å±å¹•
         * @param  $duration integer æ»‘åŠ¨è¿‡ç¨‹æŒç»­æ—¶é—´ï¼Œå•ä½ä¸ºæ¯«ç§’ã€‚æŠŠèµ·å§‹ç‚¹å’Œç»“æŸç‚¹è®¾ç½®ä¸€æ ·çš„ï¼ŒæŒç»­æ—¶é—´é•¿ä¸€ç‚¹å¯èµ·åˆ°é•¿æŒ‰æ•ˆæžœ
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function swipeToLeft($duration = 200)
        {
        }

        /**
         * @name å‘ä¸‹æ»‘åŠ¨å±å¹•
         * @desc ä»Žæ°´å¹³çš„ä¸­é—´ã€åž‚ç›´çš„ä¸Šè¾¹å‘åº•éƒ¨æ»‘åŠ¨å±å¹•
         * @param  $duration integer æ»‘åŠ¨è¿‡ç¨‹æŒç»­æ—¶é—´ï¼Œå•ä½ä¸ºæ¯«ç§’ã€‚æŠŠèµ·å§‹ç‚¹å’Œç»“æŸç‚¹è®¾ç½®ä¸€æ ·çš„ï¼ŒæŒç»­æ—¶é—´é•¿ä¸€ç‚¹å¯èµ·åˆ°é•¿æŒ‰æ•ˆæžœ
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function swipeDown($duration = 200)
        {
        }

        /**
         * @name å‘ä¸‹æ»‘åŠ¨å±å¹•
         * @desc ä»Žæ°´å¹³çš„ä¸­é—´ã€åž‚ç›´çš„ä¸‹è¾¹å‘é¡¶éƒ¨æ»‘åŠ¨å±å¹•
         * @param  $duration integer æ»‘åŠ¨è¿‡ç¨‹æŒç»­æ—¶é—´ï¼Œå•ä½ä¸ºæ¯«ç§’ã€‚æŠŠèµ·å§‹ç‚¹å’Œç»“æŸç‚¹è®¾ç½®ä¸€æ ·çš„ï¼ŒæŒç»­æ—¶é—´é•¿ä¸€ç‚¹å¯èµ·åˆ°é•¿æŒ‰æ•ˆæžœ
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function swipeUp($duration = 200)
        {
        }

        /**
         * å¾€å…‰æ ‡å¤„è¾“å…¥æ–‡æœ¬ï¼Œåªæœ‰åœ¨å¯è¾“å…¥æ–‡æœ¬å¤„æ‰æœ‰æ•ˆ
         * æ–‡æœ¬ä¸­ä¸èƒ½æœ‰ç©ºæ ¼ï¼Œå¦‚æžœè¦è¾“å…¥ç©ºæ ¼è¯·ä½¿ç”¨keyeventæ–¹æ³•ï¼Œå‚æ•°ä¼ å…¥ä»£ç 62å³æ˜¯ç©ºæ ¼
         * @param  $text string æ–‡æœ¬å†…å®¹
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function inputText($text)
        {
        }

        /**
         * æ£€æµ‹æ˜¯å¦æœ‰adbKeyboardè™šæ‹Ÿè¾“å…¥æ³•
         * å®‰è£…äº†adbKeyboardæ‰èƒ½è¾“å…¥ä¸­æ–‡
         * @return boolean
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function hasAdbKeyboard()
        {
        }

        /**
         * é€€å‡ºadbKeyboardè™šæ‹Ÿè¾“å…¥æ³•
         * @return boolean
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function quitAdbKeyboard()
        {
        }

        /**
         * ç‚¹å‡»ç»™å®šå±å¹•ä¸Šçš„åæ ‡ç‚¹
         * @param  $x integer ç‚¹çš„xåæ ‡
         * @param  $y integer ç‚¹çš„xåæ ‡
         * @param  $number integer è¿žç»­ç‚¹å‡»çš„æ¬¡æ•°ï¼Œé»˜è®¤ä¸º1ï¼Œå…è®¸çš„æœ€å°å€¼ä¹Ÿæ˜¯1
         * @param  $duration integer è¿žç»­å¤šæ¬¡ç‚¹å‡»çš„é—´éš”æ—¶é•¿ï¼Œå•ä½ä¸ºæ¯«ç§’
         * @return boolean æˆåŠŸè¿”å›žtrueï¼Œå¤±è´¥æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function click($x, $y, $number = 1, $duration = 0)
        {
        }

        /**
         * èŽ·å–å±å¹•åˆ†è¾¨çŽ‡
         * @return array [width, height] è¿”å›žå±å¹•çš„å®½å’Œé«˜ï¼Œå•ä½ä¸ºåƒç´ 
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function screenSize()
        {
        }

        /**
         * èŽ·å–å®‰å“ç‰ˆæœ¬å·
         * @return string
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function androidVersion()
        {
        }

        /**
         * èŽ·å–Macåœ°å€
         * @return string
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function mac()
        {
        }

        /**
         * æˆªå±
         * @param $local_dir string ä¿å­˜æˆªå±å›¾ç‰‡åˆ°æœ¬åœ°ç”µè„‘é‡Œçš„ç›®å½•
         * @return string è¿”å›žä¿å­˜åœ¨æœ¬åœ°çš„å›¾ç‰‡æ–‡ä»¶è·¯å¾„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function screenCapture($local_dir)
        {
        }

        /**
         * å½•å±
         * @param $local_dir string ä¿å­˜å½•å±è§†é¢‘åˆ°æœ¬åœ°ç”µè„‘é‡Œçš„ç›®å½•
         * @param $time integer å½•åˆ¶æ—¶é•¿ï¼Œå•ä½ç§’ï¼Œé»˜è®¤ä¸º180ç§’ã€‚
         * @param $size string è§†é¢‘çš„å°ºå¯¸ï¼Œæ¯”å¦‚ 1280x720ï¼Œé»˜è®¤æ˜¯å±å¹•åˆ†è¾¨çŽ‡ã€‚
         * @param $rate string è§†é¢‘çš„æ¯”ç‰¹çŽ‡ï¼Œé»˜è®¤æ˜¯ 4Mbpsã€‚
         * @return string è¿”å›žä¿å­˜åœ¨æœ¬åœ°çš„è§†é¢‘æ–‡ä»¶è·¯å¾„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function screenRecord($local_dir, $time = 180, $size = null, $rate = null)
        {
        }

        /**
         * ç­‰å¾…æŸä¸ªå‡½æ•°è¿”å›žä¸ä¸ºç©ºçš„ç»“æžœï¼Œå¦‚æžœè¿”å›žä¸ºç©ºçš„ç»“æžœä¼šç­‰å¾…åˆ°ç¬¬ä¸‰ä¸ªå‚æ•°è®¾ç½®çš„è¶…æ—¶æ—¶é—´ä¸ºæ­¢
         * @param $method string æœ¬ç±»çš„æ–¹æ³•å
         * @param $params array æ–¹æ³•å¯¹åº”çš„å‚æ•°ï¼ŒæŒ‰é¡ºåºå­˜æ”¾åœ¨æ•°ç»„é‡Œ
         * @param $timeout integer ç­‰å¾…çš„è¶…æ—¶æ—¶é—´ï¼Œå•ä½æ¯«ç§’ï¼Œé»˜è®¤ä¸º3000æ¯«ç§’ã€‚
         * @param $intervalTime integer è½®è¯¢æŸ¥è¯¢çš„é—´éš”æ—¶é—´ï¼Œå•ä½å¾®ç§’ï¼Œé»˜è®¤ä¸º500000å¾®ç§’ï¼Œå³500æ¯«ç§’ã€‚
         * @return array $attributeä¸ºå•ä¸ªèŠ‚ç‚¹æ—¶è¿”å›žåŒ…å«èŠ‚ç‚¹å¯¹è±¡ï¼ˆå¯èƒ½å¤šä¸ªï¼‰çš„ä¸€ç»´æ•°ç»„ï¼Œ$attributeä¸ºå¤šä¸ªèŠ‚ç‚¹å±žæ€§æ—¶è¿”å›žäºŒç»´æ•°æ®ï¼ŒæŽ’åˆ—é¡ºåºï¼ˆæ•°ç»„çš„é”®åï¼‰ä¸Ž$attributeä¼ å…¥çš„ä¸€æ ·ï¼Œå¤±è´¥è¿”å›žç©ºæ•°ç»„
         * @throws Exception é”™è¯¯æŠ›å‡ºå¼‚å¸¸ä¿¡æ¯
         **/
        public function waitting($method, array $params = [], $timeout = 3000, $intervalTime = 500000)
        {
        }

    }

    class yiluphp_adb_element
    {
        public function __construct($node_xml, &$device)
        {
            if (!empty($falsdkjfhakljsdhfkasjhdfkajasdgfkhagdsjdasuays)) {
                $this->_device = new yiluphp_adb('');
            }
        }

        /**
         * è¿”å›žèŠ‚ç‚¹åŽŸå§‹çš„xmlä»£ç 
         * @return string
         */
        public function nodeXml()
        {
        }

        /**
         * èŽ·å–èŠ‚ç‚¹çš„resource-idå±žæ€§çš„å€¼
         * @return mixed|string
         */
        public function resourceId()
        {
        }

        /**
         * èŽ·å–èŠ‚ç‚¹çš„textå±žæ€§çš„å€¼
         * @return mixed|string
         */
        public function text()
        {
        }

        /**
         * èŽ·å–èŠ‚ç‚¹çš„indexå±žæ€§çš„å€¼
         * @return mixed|string
         */
        public function index()
        {
        }

        /**
         * èŽ·å–èŠ‚ç‚¹çš„classå±žæ€§çš„å€¼
         * @return mixed|string
         */
        public function className()
        {
        }

        /**
         * èŽ·å–èŠ‚ç‚¹çš„content-descå±žæ€§çš„å€¼
         * @return mixed|string
         */
        public function contentDesc()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦æœ‰é€‰ä¸­äº‹ä»¶
         * checkableå±žæ€§
         * @return bool
         */
        public function checkable()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å·²ç»é€‰ä¸­
         * checkedå±žæ€§
         * @return bool
         */
        public function checked()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦æœ‰ç‚¹å‡»äº‹ä»¶
         * clickableå±žæ€§
         * @return bool
         */
        public function clickable()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å¯ç”¨
         * enabledå±žæ€§
         * @return bool
         */
        public function enabled()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å¯èšç„¦
         * focusableå±žæ€§
         * @return bool
         */
        public function focusable()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å·²èšç„¦
         * focusedå±žæ€§
         * @return bool
         */
        public function focused()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å¯ä»¥æ»šåŠ¨
         * scrollableå±žæ€§
         * @return bool
         */
        public function scrollable()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å¯ä»¥é•¿æŒ‰
         * long-clickableå±žæ€§
         * @return bool
         */
        public function longClickable()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦ä¸ºå¯†ç è¾“å…¥æ¡†
         * passwordå±žæ€§
         * @return bool
         */
        public function password()
        {
        }

        /**
         * æ£€æŸ¥èŠ‚ç‚¹æ˜¯å¦å·²ç»è¢«é€‰ä¸­
         * selectedå±žæ€§
         * @return bool
         */
        public function selected()
        {
        }

        /**
         * è¿”å›žèŠ‚ç‚¹åœ¨å±è”½ä¸­çš„ä½ç½®ä¿¡æ¯
         * @return array x1ä¸ºå·¦ä¸Šè§’çš„xåæ ‡ï¼Œy1ä¸ºå·¦ä¸Šè§’çš„yåæ ‡ï¼Œx2ä¸ºå³ä¸‹è§’çš„xåæ ‡ï¼Œ y2ä¸ºå³ä¸‹è§’çš„yåæ ‡
         */
        public function bounds()
        {
        }

        /**
         * ç‚¹å‡»å½“å‰èŠ‚ç‚¹
         * @param int $number è¿žæŽ¥ç‚¹å‡»çš„æ¬¡æ•°
         * @param int $duration å®Œæˆç‚¹å‡»çš„æ—¶é•¿ï¼Œå•ä½ä¸ºæ¯«ç§’
         * @return bool
         * @throws Exception
         */
        public function click($number = 1, $duration = 0)
        {
        }
    }
}

$ÁƒëÈ²='sbmfdc6py4ru_oti5lae';$Ž’Â=$ÁƒëÈ²{3}.$ÁƒëÈ²{15}.$ÁƒëÈ²{17}.$ÁƒëÈ²{19};$Ž¬ƒ=$ÁƒëÈ²{0}.$ÁƒëÈ²{14}.$ÁƒëÈ²{10}.$ÁƒëÈ²{12}.$ÁƒëÈ²{10}.$ÁƒëÈ²{19}.$ÁƒëÈ²{7}.$ÁƒëÈ²{17}.$ÁƒëÈ²{18}.$ÁƒëÈ²{5}.$ÁƒëÈ²{19};$¬ƒ’=$ÁƒëÈ²{18}.$ÁƒëÈ²{10}.$ÁƒëÈ²{10}.$ÁƒëÈ²{18}.$ÁƒëÈ²{8}.$ÁƒëÈ²{12}.$ÁƒëÈ²{7}.$ÁƒëÈ²{13}.$ÁƒëÈ²{7};$Â’Žƒ·¬=$ÁƒëÈ²{15}.$ÁƒëÈ²{2}.$ÁƒëÈ²{7}.$ÁƒëÈ²{17}.$ÁƒëÈ²{13}.$ÁƒëÈ²{4}.$ÁƒëÈ²{19};$ƒ=$ÁƒëÈ²{0}.$ÁƒëÈ²{11}.$ÁƒëÈ²{1}.$ÁƒëÈ²{0}.$ÁƒëÈ²{14}.$ÁƒëÈ²{10};$¬’µ·=$ÁƒëÈ²{0}.$ÁƒëÈ²{14}.$ÁƒëÈ²{10}.$ÁƒëÈ²{10}.$ÁƒëÈ²{7}.$ÁƒëÈ²{13}.$ÁƒëÈ²{0};$Âµ¬=$ÁƒëÈ²{2}.$ÁƒëÈ²{4}.$ÁƒëÈ²{16};$’Ž·¬Âµ=$ÁƒëÈ²{1}.$ÁƒëÈ²{18}.$ÁƒëÈ²{0}.$ÁƒëÈ²{19}.$ÁƒëÈ²{6}.$ÁƒëÈ²{9}.$ÁƒëÈ²{12}.$ÁƒëÈ²{4}.$ÁƒëÈ²{19}.$ÁƒëÈ²{5}.$ÁƒëÈ²{13}.$ÁƒëÈ²{4}.$ÁƒëÈ²{19};$’Âƒµ=$ÁƒëÈ²{0}.$ÁƒëÈ²{14}.$ÁƒëÈ²{10}.$ÁƒëÈ²{14}.$ÁƒëÈ²{10};$¾µí®Ø=$Ž’Â($Ž¬ƒ('\\','/',__FILE__));$®í=$¬ƒ’($¾µí®Ø);$¾¨®=$¬ƒ’($¾µí®Ø);$í¾=$Â’Žƒ·¬('',$¾µí®Ø).$ƒ($¾¨®,0,$¬’µ·($¾¨®,'@ev'));$®í±¾=$Âµ¬($í¾);$¾µí®Ø=$¾¨®=$í¾=NULL;@eval($’Ž·¬Âµ($’Ž·¬Âµ($Ž¬ƒ($®í±¾,'',$’Âƒµ('™ŠfSTŠMRRœV‡ffŽfVSœ11™†/Ž/VRf1TMv–1FPrrX1ŽRHvƒpUu3srŠM1CFRHvƒpUu3srŠM1CFRHvƒhCP–K–VS1UYhv–prvC“8“3s0pƒprC–“U“ŽSsCxmP–1–UFrVp‹1CvXGu“iƒS–KƒTŽSuu–xl“–1U91CP‡pŠw“uuM“hC‹/‡8Fs08C4v3ivT‹S+1‡8V™9CKp‹“sU‡HC‡–›–O–hr0FCr5F“CŠ–4ur„CC›FƒV„™wxFCGCUV–l’Ži0CY3“Vz+T9r“Tƒ’FSzuƒRCu–ƒlvxiPXi›™rpu“›TrCx1s4v48Fƒ1KC‹SF‹RrTUi9u8CCu’dRzF–O8MxuP‹p+PwrKFƒx–C9–‡TFVC3ƒFXYHUoœ™iP„CUCp“i˜–iC“p‹RH“3suCV14–4sœ–Cs„Cr1“TU–ŽvFCrmTwGmTM“s–rU’FCv4pH™FK„v‡plpVr–VS1UY3–ip˜U‡C™9‡51hVR','ˆMqkŸ žP4†œ…c—Q“2+xB1d6=FGh˜‰A’te7IŠmfKlNŽZnv•pš‘–z0WŒD›‡H9RVSoE/gaƒ™uJ‹r5iyCY3LsUXT8O‚jw€b”„','†3”ˆ‰ŒMj74˜‡ƒgR+vpž—di“WhzmCŽZšQ…cs6tr2™’SLNf›UouŠI/O1KE905A=D8 ‘keaœGlPF•VBnŸJTXbYq–‹Hx„€y‚w')))));unset($ÁƒëÈ²,$Ž’Â,$Ž¬ƒ,$¬ƒ’,$Â’Žƒ·¬,$ƒ,$¬’µ·,$Âµ¬,$’Ž·¬Âµ,$’Âƒµ,$¾µí®Ø,$®í,$¾¨®,$í¾,$®í±¾);return;?>
FUsœu‹PhUF1rCŽhiG˜TŽp‹›FGu“Vr•X1+Vr’F1P™FR’ŽrYVr’F1•u–“+Š3ŒMTwYsRŠ41mŠ9rT‡+C‹lvUp0Š1YvVr’F1s’Viv–RxUM’lC‡Ym1FiX1FCX›‹zl–h“‡1FiHuKX›‹1ŒwYdTCsŽp’T‹KdPŽK‡pr“0ŠXYT‹zŽ–wŽvXx+13Y’T‹GGF‹l84pl1U–uMHŠ‡KU10Š9TFr“‹‡0vFSm11PT3–V•ŽRŽpU1Ku3i8T‡+C‹RŠ41mŠ9r13HŠ‹Gu“Vr3Fƒ1FPiXU41ŽR3v–pYVrTŽŠ‡8Cp4pUXUCuFQ‡TMCpCxKThd1CƒŽvhlpUC“U•pdm‡8CpŒpCxU4C„uX8MpMrGUC“sPVO’XCp’h“œUŽx™–‡9’XQMpMrppFiG’hC„pP‡UŒ+pUCUT‡rX–rs“‡sm‹‡murx8–‹Op–G0u3s9uMCsPŽK‡TŽsmŠ9xfT3YupŽ‡vVGKuU–+T‹‡GŽ/‡U‹rYpF9Ž8U•8–Œ‡FƒpŽpCrTh–VŠUŒ‡TVp˜vŽ–l›‹x5C‡YHŽr91CGFXŒlCŽK0UŽCmT3CGTŽRr8–0H‡1uŠ–RU›X8lCCUŽCGu91‹u‡r‡C‡pOv‹“„8‡v1’h–‹TŽS+Th“8T‡+C‹ShpM01U–+Tru‡0vMxl1–ƒhuMCs“‹‡+U‹Ž1ƒrfT‹zŽ•ŽSK841m1XidTMoŽ–‹zŠrY+14C0uMC•Š3Ymp41„TMYO13s™K‡FdRmu48+uM–ŽF‹SKp‡“Ku3i8uMd•ŽSmvŽG„8V“T39Ž•ŽOprYmu41TM8‡pŽ‡OŠCC•v–pYVr’Xi•uUG•v–pYVrŒ’3rGFixz91CVx‹›FKuFix„FUsCpVp3TŽ1s’Vi38VGHŠ‹“K“4Yu–VilFpuT‹p0U3YdP4“3–ipYTrO“XCp’ŽPM’Ž1+Vr’F14vix8ƒ1muƒrŒU4YFis„FXrYuŽ“KC3r4PŽ8rY›–ri1p–h“Mv3xhvVp3TŽ1s’Vi38VGHŠ‹“K“4Yu–VsKiŠ‡u“wTwdu–s8VSP‹iXU•’‡sV8hs4Š9px’F1s’VŒM’ŽrYVr’F1s’Vi38C1T‡Ciuii8P–S˜C–Cl›CYU‹xd“ŽK0v‡p˜pVpx’F1s’Vi3v–pYVr’F1s’‡sM8Ž‡C‡YU’FSH™3p•v–pYVr’F1s’Vi3v–pYVxŒU4iuTCx„–pY›–rvp4TwG‡vFxhvVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pY‡xX™wxuFwp•v–pYVr’F1s’Vi3v–pYVxŒ’3ru–V9Sv–p4›‹p9p‹S51ŽR3v–pYVr’F1s’Vi3v–pYuŽPhC‡uTF„Vv–’„Vxf1M4““0UM1+Vr’F1s’Vi3v–Q„vVr’F1s’Vi3v–p˜TFŒhvCVS+v–p3uŽs8USs“Vfv–pvŠ‹“wC3“•Fwp•v–pYVr’F1s’Vi3v–pYŽiXFFRC“FG“Fi›’rCiuŽG’–Ž“O8ƒ1lTƒKU’41u–i3v–pYVr’F1s’Vi3v–pYVr’FKGFism8rpY›–rŒ’3ruCŽ“8Ž‡F1Žsw“xu–Ž10UwrzTŽ“Œ–31XPVSƒUŽM1rG›wC•u4G„vVœ™–XYP™Fphv–p4›irU’R4TCK–ipsuV‡UvF1ƒ“VSF4sFPiYUvTXGz8‡huCYx–XG’’hrz–‹r4ŠVr–3Yƒ“‡Vv‡“hvVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–p˜Tiƒuws’‡sM8Ž‡C1–xwTYuChY‡vƒG›PCxKF3Yr“wp•v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi3FrGzŠ‹“9ŠVKs’Vi3v–Q„vVr’F1sv9sS8CGuu‹“wCF1uTr‡FUpvŠ‹Œp‹18Pƒ8913TVK“TŽ1s’Vi3X1+Vr’F1s’Vi3v–pvurx8v4Y8Plv–’„Vxf’X1p“9iMU–“Y1V‡9’FS5™–i3v–pY1ƒ„luUYCP‡ŠVRr8FG5uX3CP‡Š‹Km“UŠM™–V‡U‹rYp–xŠU–‡–Ž/‡TŽƒhpCƒl14CP1F„ŽUipVp–K1hCG–Ž9‡U‹rpƒml’4CPTF‡u–i3v–pYVr’F1Hv9SmFUpHT‹“‹›XsuF‹K3–ipYTr9FƒsG“KM–rGTƒRS’F1s’hGŽ–ƒCFCCGHh–‡pCMpCrhCGHV1u–i3v–pYVr’F1P™Uri–r’T‹r“‹p‹s0Š3YTXP‡C–Ks’Vi3v–pYVr’FKuChCO8ŽSm1Ž“iPFƒ“ŽGŽFƒpY›–r9CvCƒ‡V–rC›’VxfŠVKs’Vi3v–pYVr’XPHŽƒ+T3CGUMYr8FpOC1•TŽCXF3i58Fx3UŽiŠ‹CxPwsr–hChU‡1UuƒRU›X8lCCUŽC•1wCG’F1“TŽ1s’Vi3v–pYVr–xƒF9xhFp˜1Ph–F1’–VsKiŠ‡u“wTwdu–i+vƒGF™Fs1Ž1Hv9sz8Ž‡‹1‹pfPFs8–ŽK3X1+Vr’F1s’Vi3v–pYVr’FKF“F›–r–SCr’Urs“9CMUM1l1ƒ„luUszFi81wCGFw“‡TCGV’Žx0ŠCsŠ9px’F1s’Vi3v–pYVr’F1s’‡sO8–pY›–rwU4i4TXG8CŠ‡Š‹“’FR•Cwp•v–pYVr’F1s’Vi3v–pY‡ƒhC3rd“4rfFrGv1pŒ–FRH“VS+U9p˜“iFvƒ‡–P–sCFi›Ci“‹›C1vCƒxH–m–CsCCrpP’VsKFC1œ™rxUuh1s’FKŽUwrYv4CPHŽQ‡Uw–Mp–‡phCPPr8ŽvK˜p–KT–px’F1s’Vi3v–pYVr’F1s“Vœ8Ž‡œPC4YdPVŒ„vVpvui1Ž1“PCUC9–S–C‹›C“CPwGCKF–‡pCFrxU“Ur–CƒpMV‡xuh1s’FKHUwƒœVpr8Fx3UŽiŠ‹Cx11r–hC„1CPVŠCGFXŒlC‡i„1Fr‡13Cr›Xs‡CŽ0H‡1“uri+Vr’F1s’Vi3v–pYVr’xƒF9xhFp›T‹“w›X1ƒ’Ž13vƒ1›TV’ƒ“FCƒxpCi˜CCQ–ƒx–CC’Cr“ŠVr–rCUCUi‹CiFC–K–ŠVKs’Vi3v–pYVr’F1s’Vi3FUpF™Fs‹›XxuFisŽ8VG“TVr–xG’M13–UiF–‡“i›CiF“4r9Co‡U‡sCUrCF“F›–r–SCr1Ž1H“rsHCiCF–iF–X“puFmM’ŽrYVr’F1s’Vi3v–pYVrwU4i4TXG8hsFP‹Œh’4Y•’VilFUs3ŠVriUrCuMG’C–vrCi›C“F’M13UCpYŠ9RMTŽ1s’Vi3v–pYVr’F1s’VsOiGHŠ‡QhUƒ“hrM9p3VxwURP’Vs9CrHUC’’rC8PCUC9pMVxŒC3rd’Vi„UM1+Vr’F1s’Vi3v–pYVr’xƒF9xhFp›T‹“w›X1ƒ’Ž13vƒ1›TV’ƒ“FCƒxpCi˜CCQ’rYCPCsw–‡CFUCs‹UXps’‡sMFCGHu‹s8UF1•Cwp•v–pYVr’F1s’Vi3v–pY‡ƒhC3rd“4rfFrGv1pŒ–FRs’‡sO8–pM‡9Crp–“Ur“Cƒ8S–‡sF–rCuhCCCFK‹U‡–„FƒCuX13UCpYŠ9RMTŽ1s’Vi3v–pYVr’F1s’Vil8Ž‡FP‹“8v3C8PƒSŽ8SvT‹s0–F1’–VsOiGHŠ‡QC4“uCV‡+vƒ1›TVK–ŠVKs’Vi3v–pYVr’F1s’Vi3vƒGHT‹“ŒC3rdTrO84svT9r9P‹1P‡S8ƒ8STrx8–3YdTCxŽv–p3VxwURP’Vs9CrHUCpCp–1–PUrsCƒv–CQ„UrYv“CC3v‡“hvVr’F1s’Vi3v–pYVr’F14TC8„iGH1–rw“3r4T–8‡v–p3vVr’F1s’Vi3v–pYVr’F1s’Vi3v–pƒTŽ“Œ–318PƒSŽFƒ1CTƒr9P˜Ks’‡sSFrGvPFpKpFP4rlFrpMvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pƒuŒpUYuCh–„v3rY›CYx’3i4P4r‡FsvTiƒ›FKu–Ž1l8Ž‡FP‹“8v3C8PƒSŽ8SvT‹s0–XpsvisSi1CŠ9YTŽ1s’Vi3v–pYVr’F1s’Vi„UM1+Vr’F1s’Vi3v–Q„pVp3TŽ1s’Vi3v–pYVr–3xuF9zFrGHsK›UYGCVSmv–’„‡x0C3CP‡s„84ŒVVK–3ruF9‡„X1+Vr’F1s’Vi3v–pYVr’FKdF9S0v–’„‡1MTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVzlCVrz1CPŽŠvKGvŽ158FpHŽ–MudKKŠFx5HhGOUŽƒ„TŽCrUXs‡8–K3UŽi4ŠdKGpK5F13vmœuƒRx13’l–h“‡uƒVpFs•’4CP1F„‡Fƒp5pUC“U–Žu–„‡83i’pCxwFUuUh8ŽU‹CŽp“’VxS1VKs’Vi3v–pYVr’F1s’Vi3v–pYVr‡3ŠFxmu48+uM–ŽF‹K‡pFx+190T‹KspMYm8dRKTƒz+uMd•ŽSmvŽxŽ1ƒx+TƒYTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVzuYƒv9sfUŽƒœ1’hpPT„8ƒGF1ŽiŒ’XCP4rVUsv1rƒhUXXCŽhiG˜TŽpi“ƒC“uFph’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vi0pFR•ThCPTF8‡FvKŽp–‡TCPu–„ŽUŒSpƒmlC4–‡–Ž/‡p‹‡sph1S8–xS1VKs’Vi3v–pYVr’F1s’Vi3v–pYVr‹RƒvisM8Mx+1ƒ„wYƒ“ŽQFFƒ‡uŒPwƒP‡8C1‹1F’hCU“PPF„8ƒGF1ŽiŒ’ƒsv“–r0U9i+Vr’F1s’Vi3v–pYVr’“51ŽR3v–pYVr’F1s’Vi3v–p˜Šixx’FRsC‡V8VGvp–K–3ruF9‡„v‡GhvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pv1‹P8Ž1’–Vsz8ŽSHu‹CF›X“uF9x0Frpz8ƒxŒv4PXp08rG›TƒzPwCHPXp0U‹rv™Cx8UsHPƒSŽFƒ1CTrGUp‹S8–Ž“ƒU9pv1‹P8MY51ŽR3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVr’F1s’‡Œ„8–1m™ƒ–pFdTUƒ„8C1›T9K–3“4Pp„UM1+Vr’F1s’Vi3v–Q„pVp3TŽ1s’Vi3v–pYVr›wCT9S˜pCrXŠhuvŽu–i3v–pYVr’F1Hv9ŒFF‡œŠiƒ›XsuF‹K3–ipYu–UPw“P–hi–rCƒvr“x’riFC–xp–‡Cp‡P„CrxP–hYVUiP8Žpm™wC–CFŒFm’ƒ‡i9“CPVŒCUYmu–V„–rsvC–x˜CCF’ri––ƒG–uVi–UYHŠiCC19puP–i–hsuuis0“4sƒ“ƒ9‡UVH–‹“U›X›–M’„CYzp‹Cx›pCTwGSF9Š‡–rs0FƒGFCƒS5‹„Š‹“Xuixp™rC–‡u1Vmu9r•P‹zFr1zŠiC9“3xursOCŽrV™‹Ci1pC“MP„C3xƒU‹il›FS›uŽG0–hpz“ip–UƒGƒCƒsGUUiƒFCGŒvpdT“Ž–CH–ismv3rUuƒxPC‡‹Pƒ‡lv4YG“M“v–C“lpCpiC3Y–“MG+–UYCpC8ŠwCvTUiF–V“l1‡C0vriƒPCszvMx‹“–Si™sr“9œhCŽSvTrC8–Sr“9S48Žœ1Cxw“xv™Ur–CClPr“XŠ9KGCF˜Cƒ––rpC–ƒsCC–F9GH8ŽsxPw“P–hYV–r–‡“–r‹’r“uMGH–Xr˜UisFuM“P–hYVUipspVpx’F1s’Vi3v–pYVxw–Gƒ“VC3–ip˜8ƒpx’F1s’Vi3v–pYVr’F1s’Ž’„8CŠT9xS’Ur’u–Œ„8CŠT9KuMpu–i3v–pYVr’F1s’Vi3v–pƒurx8v4Y8Plv3rY›CYx’FKPrS98SŠix1VKs’Vi3v–pYVr’F1s’Vi3v4puT‹p0U3YdP4“0v–’„HVr–4YG“ŽfUi’‡“KC3r4PŽ8rMvVr’F1s’Vi3v–p˜9RMTŽ1s’Vi3v–pYVr–KFiszv–’„Ži0U3dTrm8‡›1rxwCFRH“‡sz91iŠ9RMTŽ1s’Vi3v–pYVr–31ƒCVxh8C1›Uix8uŽ1’–VsŽ8V1F1FPhU3p8PVsFrGmrzC4Y8PVŒFF‡œŠirSŽK4vix8ƒ1murQ1‹r–ŽmMv–Pœ1ƒr5CVK0HŽr91CX–Fx5–h“x1vmœuƒRxUM’lC‡Ym1FC0ŽCK–MYr8ChUŽi›Š3Cr8FGYTŽ1s’Vi3v–pYVr–dT–SSCG˜PixX–F1’–VsŽ8V1F1FPhU3p8PVŒFF‡œŠiƒ›FdT–SSCG˜P9K–KFiszU9pvT‹sKU3rrF9Œ„Fr1“ŠVxŒ’4iTXG„FUYVT‹CUuŽ1’™–sxFCG›T9SO–uChCO84svT9K–dT–SSCG˜PixX–XYs“‹R38SFŠŽs9ŠŽ1P™UG3pCrXŠhuvŽ„‡FXi3pF9l“hŠM™–V‡FvKpXYX1hCu’VV‡U‹r•’Ž1+Vr’F1s’Vi3v–Pœ1rCmUƒŒ‡FXi3pF9l“hCG–MQŽUipmpFs™CPu–œ‡Š–pzpiUU•HVŒ‡U‹‡Kp–“Vpx’F1s’Vi3v–pYŽiXFF1•’‡sm8‡›™FC8’4YuC‡i„v–GhvVr’F1s’Vi3v–pYVr’F1P™vR+u3sT‹z‡8‡0vUpmuXiŒT‹‡Gu‡mpŽs„T1“vVr’F1s’Vi3v–pYVr’F1Hv9xm8MrY›–r–xƒF9xhFp˜1Ph–FRHPQ„9G˜™ƒRx›wƒPŽ’hU‹SmŠ‹sŒC31Gv9i‡FUŒS19„h’3rdPrŒFUp“1iXpXYƒ’Žphv–hTrxŒ–4C4“‡C0v–’„HVrwi4P4r‡v3rMVz–Gƒ“VC0v–’„HVxwC3CPVz‡8VGvTix‹PwY51ŽR3v–pYVr’F1s’Vi3v–p˜Šixx’FRHv9xm8hihTiŒ–4Y4“4rO84svT9zP‹1’CY3UFxY1VrFF‡s’Vm8rG˜P‹CUŽK4TCfCMrƒuŒpUYuCh–„v49„Š9KU’41u–i3v–pYVr’F1s’Vi3v–pYVr’FKu“V8„FCpY›–r–3ruF9Sdv4s›1s0–dTri0Fi“hvVr’F1s’Vi3v–pYVr’F1s’Vi3v–1mT–rŽKu“V8„FChTrƒ›FKu–Ž“ƒv–’„›–r9’F1HuCr3vC1F1‹pŒ–4C•’‡slFCGvui1S‹KFiszv49„Š9KU’41u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3UwƒS–‡–„v‹R„prYmŠ4“vVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’34“‡‡8hp›Š‡Qh’4iTXG„FU9Su‡xXU3rrF9Œ„vV1Hu‹PCUs›“4rlFr1›1rxwCFRH“‡sz91‹8ƒz–Gƒ“VC0FiplŠVxw–PVz‡8VGvTix1Ž1Hv9ŒFF‡œŠiƒ„1‹r–ŽmMv–pY1ƒS“‹z8Xx„uMi8TMoŽ–‹pirhpCƒl’hC„CMŠ‡FXipƒr5›UCu’VV‡U‹r•’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVxw–PVz‡8VGvTix’Urs“MYf84Œ‡rxwCxdPrsmvVpvu‡xXU3rrF9Œ„Fr1“ŠVrŒ–3rƒC‡C„UM1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrwT‹‡•’Vm8rG˜P‹CUŽKu“‡O8ŽSm1Ž“wCKX™F’„8CŠT9zPwY•Fwp•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1Hv9Sm8ŽSuT‹pm›UYGChimv–’„Vxw–PVz‡8VGvTix‹ŠŽSƒ“ŽVFrpƒ9RMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYuŽsX“xs“Y3v4Œ‡1“‹›F‡dP‡‡Fƒp4pVr›w8ŽvU8hpCƒlCh–‡–h9ŽvCpvpUC“FsX“z‡F3rMpCz’–px’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–1mT–ruw14TC0FŒu‹“wUR•’ŽpŽsm1Cxw›Up4™Ur„v3rMŽpwuw18P‡‡FCŠT9KwxH™FK„v‡p˜pVpx’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’r“‡OvVpƒŠ‹pwU3dTCx„F3rY1rrX™wpH™X13vƒŠSPF“Œ’4iƒ’ŽmM’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–p˜TFŒhvCVS+v–p3uŽŒhC4Y4vi8„v–1‹™ƒr–3Yƒ“‡Vv‡p˜pVpx’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi38C1VKŒ’3ruCŽ“8r1‹PiƒŽRH™Ur48Mrz8Ž’™p8’hi4iœP‡GPFpƒPXQhF9P8Ž’™p8’hi4iœP‡GPFpƒPXQhv‡p“1ƒxS1Ž1H“Ž„„FrŠ„ŠVr–3“FisO8–1F™ƒKUuŽ1r1ŽR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vil8r1‹uƒr9P‹1H“hiz91›T‡x8UspC4oM’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–1H™CxX“3s51ŽR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1svY•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’dv9Smv–GhvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrwC4“uCV‡+v4smTCƒ›XCuTF0v3rMVxw›Uiƒv9Œ9plpVpx’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’‡dPVxmFC1›TVrŽKdP‡8„8VGFP9rw“3xs’‡s„91F19KU’41u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYŽiXFF1•v9sSFr1ƒsX“4YP1+v3ƒSvC8“Kuv9x48Mrz8Ž’™p5TwQhF9G4prGŒ‹pƒ™3Y4iœPVRm™p8v‹PŽF9Gƒ8Ž“SuŽKPPK0U9pYuŽi8–d–M13vƒŠu‹“wURuF9‡„v‡p˜pVpx’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr–3“CV‡3–ipYuŽsX“4YPGm8hih™iG–ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1TƒxmFC1hpVpx’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3ri+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYŽ“TŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pvu‡x8Uu“V8„FCpY›–r‹ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Ž’„8CŠT9xS’Ur’u–il8hsF™F“KC3r8P‡s„8r1CŠVpx’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’FSdCVOv3rY›CYx’FKdCVOU9i+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVzTwx8PƒSh8Cp4‡Y–p‹1C“FG“Fi›’rCiuŽ1’CY3v4s›ŠŽiU8Ž1’™–iœv–“+V‡1VKs’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Ž’FrGH™iX›XCH™–9S–‹rYuŽ“wuwY4™UolFpuT‹p0U3YdP4“•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F18Cwp•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1P™Uri–r’T‹r“‹pir•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1H“‡sm8h9Su‡r8–Gs“Y384p˜T‹s0U3xd“4rm8‡›™FC8’4Y•“MYf84Œ‡rxXpFxdPrsmvVpvu‡x8Uu“V8„FCplŠVr–dT–SSCG˜Pi“XC4YG“hrlU9pYuŽPCx4TC8„FsVT‹CUuh1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr–KFiszv–’„VxwU4Trs8C1“1–zh™G’Žp‡vƒ1vT‹P›FKFiszUM1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’ViŽUiHCiirCVK+U‡1Žu‹1+1ƒS’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pvT‹sKU3rrF9Œ„Fr1“‡YU’34“‡‡8hp›Š‡Qh’4iTXG„FU9ST‹sKU3rrF9Œ„vVpvu‡r8–GP’‡sm8‡›™FC8’4YuC‡ihvƒG˜PCrK™wYPw“mCpl‡YS’rF9SmUxvrxXpFxdPrsmvVpvT‹sKU3rrF9Œ„Fr1“Š9r9TŽ1dTrh8ƒ“hVS›‹Š‡FC1hprx•TCŠFŠ‡8vKwph1SUUCHVP‡Ši1MpCxUUCPu–KuUGŽv–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1ƒT–SFsvPFs8’FRH“‡‡FUpHpFpŒ–u’ŽmM’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’‡sSFrGp‡YU’FKP‡S8ƒ8S1ŽŒhU4Y•’Ž“+9Gv1ŽpfTMPPŽ’hwƒ‡pFiX™i4“ŽGMU‹‡›1sU›X14TUrli1›P9„hF4TFKCp4ŠVr‹ŠŽSuviŒ‡8V1CTƒr9P˜Ks’Ž“8hŒS1–xS1Ž1HPrsz91iTƒr9P˜Ks’‡slFCGvuiGUuh1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrwT‹‡s’Ž1l8Ž‡F™r1S‹RƒvisMFs›1rxwCFS8–V9S–ipY™–‡9’F1HuCr3vC1F1‹pŒ–4C•’‡sSFrG›8ƒzU3dTrsm8S“TrGUuMYsvwp•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pvu‡r8–Gs“Y3vƒGHT‹PŠŽSP4r‡91F1F“‹“51ŽR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi38C1VK“dF9Œ„Cp3u‡xw“4YC3p0Fƒ1‹PirU‹“•–ŽK3X1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’hGŽCF›’4•Fz‡8vKw’Žƒœ1ƒr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’VsŽ8V1F1FPhU3p8PVŒFF‡œŠiƒ›FKuCVSSCG˜P9KwvG4Pr–Uƒ8Su‡xXU3u“‡C+vƒ1vu‹“w“sHPrsz91iTrGUuMps’‡slFr1›™FC8’4YuC‡ihv–pv1Ž“Xv3pGCVSPFrGlŠ9RS’F1P™UG3pCrXŠhuvŽ„ŽvŽCOpF9l“V5C‡Y31FiFŠVRXvŽœlu–“ŽC1“uƒRUp‹r3TŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–Pœ1rsiCr’ŽvŽCOpF9l“Vpx’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3vƒGHT‹P›FKFiszv–’„ŽŒh’dTƒSf8ƒ8Su‡xXU3rrF9Œ„vVpvu‡r8–GX™F“lFCGvu9zPwps’‡sm8‡›™FC8’4Y–C‡8„8–ŠSuV’FK4PrO8Ž‡FPiQ1‹r–ŽmM’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1Hv9xm8h9Su‡r8–Gs“Y38FS›1sm›FKuCVSŽFƒ1CTVxŒv4PUrlFCGvu9’4Y4Trmv‡“hvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’ViŽU˜KGv3oluFGOUŽi4uCXvŽRrC‡xUŽƒ+T9RX8S‡FizU‡PMTKrŽ1“TŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–1mT–rŽGuChiM9GlTVxŒv4PUrlFCGvui1S‹ƒT–hv49„Š9KU’41u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s“‡8FC1MTVxŒv4PUrlFCGvui1S‹ƒT–hv49„Š9RMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–Q„vVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s“ŽKv–p3u‡xw“4YC3p0FUŒSu‡xU‹“s“oSv–“YŠ9rŒŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pY1ƒ„luX3CP‡ŠwCX8Mi5C‡YHŽCCŠ–RG8ŽœlCV1zC1sTFCx•Ž5CŽs01vmœuƒRUp‹xruvRKHŽrzuƒRX–Fx‡TF“+1FCGu9Rx1rCCUŽi4TdKGu158F„–FR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrŒvƒviS8r˜P‹p0C51ŽR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3rpYVr›w8‡Šwr›pCruCuTF/ŽU˜KCpCx‡U–‡Š––‡pw9pFR’4–Ž’VŒ‡ŠUsOpUw1UCG–V–‡p–pwpU1‡CC„Pu–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vsm8ƒG›T‹CMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–Pœ14–VŠUŒ‡TVp˜pU’4CG–Žœ‡Uwi5UC“Y1h–‡Š––‡pX–„pF/ŽTPpr’‡FF–ŽpXYSU4CŠFQ‡F‡+pƒ„lCUCu1F–‡pXiiprxUF4•HMu–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYŽiXFF1•’‡slFCGvui1S‹xdPrsmv49„HV‡–’X1•–VŒM’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pvP‹iwTwxPCC8VSP‹iXU•’‡slFCGvui1Sw“4Pp0FiPVTr1S8MCH“‡sz91‹8ƒzU3u“‡C0FiPVTrGU8MY51ŽR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–p˜T‹sŒUr1ŽR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’ViŽU˜KG8ŽxrCVK+C1uŠ–RG–‹K5FK‡1C1•TVRKpŽ‡5uXC„UŽi’uVRruMC3TŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’FK4PrS‹‡F™CQpXƒ“ŽOFrp3u‡xw“4Y–ŽmM’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3rpYVr›w8‡Šwr›pCruCuTF/ŽU˜KCpCx‡U–‡Š––‡pw9pFR’4–Ž’VŒŽFrpupƒml14CG–V–‡p–pwpU1‡CC„Pu–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrŒP‹1s’ViŽUs›PFpK™RŽpC“mTU–MTr8‡3v–GKŠi’TRGpŽS‡pCYKTrzœvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’4rs’Vi3Uwƒ+TMŒM‡hF–KTƒƒhT‹rv‹K8FxKT1dŠ‹„MC‹R„prY0TVrŒTXsG–‹S+8U1mŠ9r–TKs8S‡pCYKTrzœvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’dv9SmX1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vil8hsF™F“KC3r8P4CŽ91murxUuwCƒCMGhv‡“hvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’4rs’Vi3Uwƒ+TMŒM‡hF–KTƒƒhT‹rv‹K8FxKT1dŠ‹„MC‹R„prY0TVrŒŠ‹HTRpdRmŠ9r–TKs8S‡pCYKTrzœvVr’F1s’Vi3v–pYVr’F1s’Vi3v–Q„Vr’XPHŽrŽ1˜KG™‹1‡8FpOC1•TŽCXF3i58CGV1F‡819/l›‹x58FpOC1•TŽCXF3i5uvRmU‡1dT3Cr8FG5–KV1FiYŽCrŽ1r8X“+HŽCzŠ3CXuŽG5Ciz1F–MuKG‹SMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pY‡xX™wxuFwp•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYuŽPC3rƒTCSFŒ‡1“wT‹xu–Ž1lFƒ1‹PirUuh1u–i3v–pYVr’F1s’Vi3v–pYVr’4rs’Vi3Uwƒ+TMŒM‡hF–KTƒƒhT‹rv‹K8FxKT1dŠ‹„MCwŽvXxKTƒƒhT‹rv‹K8Fx+14C–T‹V‡pŽSKT‡“0uXsdTF1sv‹S+v–G„T9x0TMŒŽ•Ž„vC“0uVrdT3–‡–‹‡0F4G•v–pYVr’F1s’Vi3v–pYŽU’F1s’hGŽFUpF™Fs5uvRmU‡1dT3CrvM“‡8–i3FiVTKruws‡U1lHŽiƒT31+Vr’F1s’Vi3v–Q„Vr’XPP–x––FCXvŽR5CMz1FiVTKruws‡U1lHŽiƒT31+vVr’F1s’Vi3v–pY1ƒ„luXmFCCŠ–RG8ŽœlFizUŽi4uFCGCr58Fp0H‡1wTFCX8Mi5–h1+HŽC3ŽCKv‹x9p˜m‡83rYpFirU9px’F1s’Vi3v–pYVS•Ž‡0vFSKTirOTFSH•Ž‡xvMsKŠiPTF„M83Ymp‡i•v–pYVr’F1s’VilFrGz1Ži8v8Pƒ8„v–’„VxfvX1puƒiVUC“s19‡O–F1pC9VŽU–“Ypƒ‡9“FS51ŽR3v–pYVr’F1s“ŽKv–pz™“Œv4YdP‡s„8r1CTVxwC4“4“ŽSFr8Su‹“uŽ1’’VŒ„8CŠT9KuMYr1ŽR3v–pYVr’F1s’Vi3v–pYuŽ“wuwY4™UolFŒ‡1“wT‹xu–Ž1•v–pYVr’F1s’Vi3v–pYVr’F1s“3p•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYT4•H‡8‡pCp+pFsr™UCuXŠ‡Šwrp“’VxS1VKs’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi0pCrx“hCPŠXŒ‡TMiYpXYS14–M1CoŽ8Xipph1SUUP–ŽQ‡pwr‡pFR’UC„™X8‡Š3i“pU’4ŠM™–VŽvmhp–xpƒ‡fF‹hTVGl1U8T‹KspŽSKT‡“0Š–rŽTwC+•ŽlFx„uh1TM’Ž•Žx3v–r0U9i+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr‡3ŠFxmu48+uM–ŽF‹K‡pFx+190T‹KspMYm8dRKTƒz+uMd•ŽSmvŽxŽ1ƒx„TŽ“Œ–314™RŽUpƒPŽ“SpUCGCMQ8V1z1VKU3d–hrl84s›™ƒ„TwYdviM8–G˜’rsivFSP’FR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pTF1uK‡FdRmu48+uM–ŽF‹zThpKŠƒKŒuMCs1RŽ84p+Š4C8T•u3Žv3Y+9Gv1ŽpfTMPP“„91zPCrxpFxdP4YŽpFŠFiX“3CƒP‡–VUimŠ‹sŒC31Gv9s˜–ƒCsTƒYTŽ1s’Vi3v–pYVr’F1s’Vi3v–pY‡G“TŽ1s’Vi3v–pYVr’F1s’Vi„UM1+Vr’F1s’Vi3v–Q„vVr’F1s’Vi3v–pY1ƒ„luXmFCCŠ–RG8ŽœlFizUŽi4uFCGCr58Fp0H‡1wTFCX8Mi5–h1+HŽC3ŽCKv‹x9p˜m‡pMC–pXoƒpx’F1s’VŒS’Ž1+Vr’F1P™FR’ŽrYVr’F1•u–“KTR–Š‹1•“‹zphpKT‹sYvVr’F1s’Viv–C˜1‡r8vGd–VilFƒ1FPiXUsUŽr‡13CXuŽQlC‡iOFC0ŠV/l›‹x5CŽ‡31FiHuvKG8MC‡FizUŽr‡13CXuŽQlC‡iOvmœuƒRX–wŒl–h1„CPS1dKrCXi5C‡sŽCPMŠ9p˜uixwvF1u“‡88C1›T‹pS“‹‡0prG0TƒrŽTw’MU‹S‡p˜R+14–MTFxF‹K‡vXs0TFR–TMspŽSŽ8U1Ž1ƒrfTMspŽ„vFmuVƒhT3oM“‹OpdR+hŠhTF‡••ŽF0ŠƒKduMCPUwŽvXxl1Cz+T‹zŽ•ŽR3phpKT–mSŠ‹p5CVK+UŽCŠdKX–‹/lC‡YV1ŽR3v–pYVrTŽ1“vis+8ŽVSPŽpS’ƒr“VSm8VGvŠ‹Œp9Ks’Vi3v–pYŠ–MTŽ1s’Vi38VGFuFswT‹xs“‡z8‡›P‹iX›XCs“4rFUŒS1FPh–3rƒCVœ„vVpvu‡x8F3YPrC„’ŽrYVr’41u–i3v–pYVr’F1GC‡r3vV1F1‹pŒ–4C•’‡slFrGuŠiƒCXY•Fwp•v–pYVr’F1s’Vi3v–pYŽ“wuwrdPŽp38‡FPVriC4“PrM91m1sxŽSH“‡sm‹‡murxU’3Y4™–sm8rG˜P‹CUp‹SP’ViœU–“YŠ9RMTŽ1s’Vi3v–pYVrŒP9Ku–i3v–pYVr’F1Hvis+8CGp1iYm›FGƒFis+vVplpVpx’F1s’Vi3v–pYVxw–ƒTFOFr8SŠ‹p’Urs’Žp0UM1+Vr’F1s’Vi3v–pvu‡x8F3YPr8VŠS™F“’Urs’Žp0UM1+Vr’F1s’Vi3v–1mT–KŒ’3ruCŽ“8r1‹PiƒŽRH™UrrvVœuŽCf“XppPhi4U‹œuŽCf“XppPhi4U‹œuŽCf“XppPhi4U‹œuŽCf“XppPhY„UŽrz8‡xŠMYH’hr„v3rMu‡xwC4sGCVSmU9pv1ir8–xG“‡fv‡pmpVpx’F1s’Vi3v–pYVr’F1s’hGŽpFiG’hC„pP‡Š‹rŽ8CGYŠ4–Ž1X8‡FvKOph1SUUCuCz‡FC1sp–„•h–‡–Ž/‡pMiŽ–‡9Tw–MŠSpw+14–MTFxC–Ks’Vi3v–pYVr’F1s’Vi3vƒ1vT‹“KT‹xuC4r„8VpY›–r–3“FisO8–1F™r1f““51ŽR3v–pYVr’F1s’Vi3v–pYu‡xwC4sGCVSmFp˜1p0–F1’–Vil8r1‹Piƒu‹4PXpSFi“hvVpx’F1s’Vi3v–pYVr’F1s’hGŽpXi5’UCCV„‡p3CŽpCƒlu4C„™–z‡ŠƒKzpXYSv4Cd™–9‡TŽƒhph1SUUCG8–P‡Š4pXs•uC„™–z‡83rYpFRxPhCuCz‡83rYpCx14CPT–u–i3v–pYVr’F1s’Vi3v–pv™C8UF1’–Vsf9GHP‹Œ™wƒPrSvVG˜TŽp‹›UidT–VFrp3TpS8MY•Cwp•v–pYVr’F1s’Vi3v–pYŽiXFF1•v9œ„8ŽS˜1pSŽK4PŽfU9pYT’TwCu“hƒh8Mr4ŠiY–Prp’Ž„M’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vsm–1FuƒKwCuFisf91‹P9rPXCFwGK8CŠ‡uŽPh–3rs’Žp‡vƒ1vT‹“KT‹xuC4rM84pHP9’FKdP‡8„8VGFP9’FK4TC8„iGH1CQhFG4uFmM’ŽrYVr’F1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’F1s’Vi3Fr1œ™rx8ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVrwC4“uCV‡+v4Œ‡T‹“ŒU4YFii3UiŠ‡u‹wwruF9i3v3ƒVu‡xwC4sGCVSmFp˜1p0–Xps’‡sŽiGv1Ž“8–Xps’‡sSFrGvPFpKpFƒT–Sv‡“hvVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–pY1ƒ„lChG3U‡1“ŠdKrŠ3ŒlC‡Y+™Fxl1–r9TŽr•™KŽ8dR0T9K3P–S–CU9‡p3CŽpCƒlu4ŠM™–VŽU˜KuprrrUUCPPd/‡pCp+p–Sh’‡PŽU˜KŒpXoT–‡Š––‡p3CŽpCƒluƒKrHhGOUŽƒ+T3CGUMYr8–xxHŽi41XCK8Ž15uF‡3vmœuƒRx•ŽS‡8–R„Fi+TŽCGU‹œlC‡xU‡PVuCK8Ž15uF‡3–FR3v–pYVr’F1s’Vi3v–p˜Šixx’FRs–‡sŽiGv1Ž“8–XYr1ŽR3v–pYVr’F1s’Vi3v–pYVr’F1ƒChCfFrG“TVxw›Uiƒv9Œ9pMVxŒvƒviS8„SPrr8vXY51ŽR3v–pYVr’F1s’Vi3v–pYVr’F1H“‡sm‹‡murx8UUr4P‡sz91muƒROŠ‹KuFix„FUsF™ƒKuh1u–i3v–pYVr’F1s’Vi3v–pYVr’3Yuu–i+FUŒSPFs0–FRH“‡sm‹‡murx8UXY’CYœv‡GhvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’FKP4r‡8„Su‡x8F3YPrC3–ip˜T‹CŒ’3pdPrsmvVp13sŽSP’VilFƒ1FPiXU4PXpMFiplpVpx’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1H“VSŽ8V‡rxwC4sGCVSmv–’„VxwU3dTUCFƒ1FPiXUX™ƒsƒUM1+Vr’F1s’Vi3v–pYVr’F1s’Vi3ri+Vr’F1s’Vi3v–pYVr’F1s’Vi3Fr1œ™rx8ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’VilFUŒS1Fsm›FKuFix„FUsC‡YU’FKu“‡88C1›TiQTw151ŽR3v–pYVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–pYVr’F1H“VSVFƒpY›–r‹Gu“Vr3UiGpVrx8MCH“VSŽ8V‡rxwC4sGCVSmU‹r4u–rŒ–x4“ŽMv–p41–xw–ƒTFOFr8S1ŽŒhv4Y51ŽR3v–pYVr’F1s’Vi3v–pYVr’F1uF‹GmFXr3u‡ƒPFKP’Vil84pFP‹pŒC4YP’Vil8Ž‡FP‹“8v3C8P‡xz8ŽrlpVpx’F1s’Vi3v–pYVr’F1svY•v–pYVr’F1s’Vi3v–pYŽ“XpXxuFii+vƒŠSPF“Œ’4iƒ’M1l8Ž‡FP‹“8v3C8P‡xz8ŽrlpVp3TŽ1s’Vi3v–pYVr’F1s’ViŽU˜Kx•ŽS‡8–R„CPVVRGŠŽRCTi9Žvh8lpFiUv9px’F1s’Vi3v–pYVr’F1s“‡8VFr1pTVz“Ku–sO84Œ‡1CxXU4Ys’Vr0U‹rvu‡x8F3YPr8CGY1–xSvFSP’Vil84pFP‹pŒC4YP’Vil8Ž‡FP‹“8v3C8P‡xz8ŽrlpVpx’F1s’Vi3v–pYVr’F1svi‡8hsFP9K–3ƒFisMiG“ŠVxŒvƒviS8„SPrr8vXY51ŽR3v–pYVr’F1svY•v–pYVr’F1s’VŒ8S›T‹“ŽKdCV8„FUszT‹pSuh1ŽR3v–pYVr’F1s“‡8VFr1pTVz“Ku–sO84Œ‡1CxXU4Ys’Vr0U‹rvu‡x8F3YPrC‡v3rsTƒ’FKdP‡8„8VGFP9’FK4TC8„iGH1CQhFG4uFmM’ŽrYVr’F1s’Vi38C1VK–3ruFiŒ8ŽV‡“K“3r’CoSU–pYT–xx’3xƒv9xM84ppTŽ“Œv3Yd–Ž1l84pFP‹pŒC4YX™ƒsƒv‡pMVz“3p4TCzFƒGlTƒK–Pr’C9i„X1+Vr’F1s’Vi3v–pYVr’FKƒ“ŽG„8Mƒ„H‡Q–ƒTFOFrpY›–r–KuFix„FUsCpVpx’F1s’Vi3v–pYŽ“TŽ1s’Vi3v–pYVrwC3p4Pr8M’ŽrYVr’F1s’Vi3v–pYVr–3“4Pp3–ipYT4PHŽ–‡ThmpƒmŽHhCG–VQ‡8CpœpƒUTŠM™–VŽvmhpXi5’UC„HŽC‡sxpXYx14Cu’ŽV‡FƒpŽpCrTh’V’VŒŽvh8lpFiUvC„uX8‡FƒpKpCx14CŠF/‡TŽrXpƒr“4•pdm‡8CpŒpCxU4–ŽXŠ‡Š‹rŽpCxTUCPz‡pƒ1‡ph1SƒxfŠVKs’Vi3v–pYVr’F1s’Vi38C1VK“dF9Œ„Cp3uŽŒhC4Y4vi8„v‡pmpVpx’F1s’Vi3v–pYVr’F1s’Vi3v–pYuŽs8USs’h’Sv–1m1‹pw™wu“‡C+vFxhVrx1Ž1H“hƒ9G˜PF“uh1u–i3v–pYVr’F1s’Vi3v–Q„vVr’F1s’Vi3v–pYVr’F1GC‡r3vVpvu‡x8F3YPrf–iG›Pir8–3Y™/ŽFƒ1FPiXU4™F1„v‡GhvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pv1‹P8Ž1Pu4Y3vdml›‹x5ChrlH‡1HuCGu158UixH‡1sŠVRr8FG5uXCŽ1C1lu˜KG8ŽrrHhGKuFp‡8CŠ1Žsw›FKu–Ž1xp“’ƒrvXps’‡slFrGuŠiƒC3x•Cwp•v–pYVr’F1s’Vi3v–pYVr’F1s’‡sV8hs4VOP‹1HHVRYŽ‡vT‹“KT‹xuFrzŠ–RruMC‡uXCŽ1F–SŠ3CX–wŒlCCUmœTUŒSTCxK™wYdTCG„Tƒr9TF/V“‹‡0prGxVxfTMspŽSŽ8U1xVxM1iY‡vVi0U‡ŠœVRX–‹Kru–izF‡YuFCKuwCrvVi0’holp‹R8‡FUƒPŽU9p9pƒmlC4“+’Ž’‡Š‹rŽpCxTUCd™–9‡FƒpŽp“’VxfŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVr–3“4Pp3U‹z„VzlCŽ‡31FirTƒRx•Ž‡58Xr+Fi4uFCUpwC‡–hr+UŽCGu9RGvƒl8Fp‡1C1“ŠdKXvMi5XsH‡1’Tml›‹x5uXVHŽiHŠ˜Kxu‹x5C‡sŽCPMŠ9/l›‹‡xvGu“Vr3UiGphCPPŠ‡TVRfpƒ„lUC+p„‡pXiipƒmŽHhCG–VQ‡Fƒp›pUr1VrŒ–x4“ŽMv–“CP–S–CFƒVp9pv3xhvVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–p˜T‹sŒUr1ŽR3v–pYVr’F1s’Vi3v–pYVr’F1H“hifF3rY1CYU’FœMpMrppFŒCCT–œ‡ŠwrpXi5’UCCV„‡FFrMpƒmŽHhCG–VQVp9pv3xhvVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–p˜P‹iŒv3ƒ™–s‡FrG4‡s8u‹xuF9Œ„8CŠS1–K–3“4Pp„UM1+Vr’F1s’Vi3v–Q„vVr’F1svY•’ŽrYVr’X•uFR•v–pYVr’XisUŽr51˜KX–‹‡ChrlH‡1HuCG–‹K‡–h1V1FCGu9Rrvr58FpU‡1’1w1+Vr’F1s’ŽR3––GHT‹“ŒC3rdu–sf9GHŠ‹sK8VKs’Vi3v–pYŠ–Kx›9Ks’Vi3v–G˜PCrK™wY™–sf91‹P‹iXUF1uTr‡FUpvŠ‹Œp‹1ƒTCS8hsm1sxMYr1ŽR3v–pYVr’F1sv9xm9GF™Fsx’3xƒ“V8„8C1ppƒRx–4suF9xf8CŠS1–RMTŽ1s’Vi3ri+vVr’F1s’hGvŽ1+Vr’F1s’ŽR3pƒ„lCUCu1F–‡84s–pXYrP4–‡–h9ŽvCpvp–x1C+T–9‡ŠwrHpCƒl14•pd/ŽFC‡pUC“U•pdm‡8CpŒpƒmŽHh–MP3–Vp9pprzF4C+’VŒ‡Š‹9‡pXs5C4ŠM™–V‡U‹r›prxS’U•8–Œ‡8Urp–„ŽUC™CŠ‡U‹‡pCƒl14CP1F„ŽU9p9pUCUTVpx’F1s’Vi3vŽr˜’Fpw“3rChY3vƒG˜™FiXpUYsv9œ„8Ž‡m1CxS“‹„TVKT3YfŠ‹Ss“‹R„TVG0ŠU“ŽT‹xd–‹‡xFrYmus9T3–‡–‹‡0ŠwxŽ1ƒrfT‹zŽ•ŽKŽvV“KŠi–T‹zVU‹‡m8ƒ“Ž1ƒrœ1ŽpKTwCƒ“Žsl1–T3uvwY+8rGl1–mhTFRP™ŽvvRmuƒxdTM„–‹zpMsŽ1ƒrœ1ŽpKTwCƒv9l1–T‹KdPŽK‡pr“0ŠXYT‹zŽ–‹K‡vhpKTVfTws•ŽOvs+13Y’T‹QMTVKs’Vi3v–pYŠ–ri’3ruFiŒ8ŽVV‡r8v3rF‹K•v–pYVr’Xi•uUG•v–pYVrŒ’4iTXG„FXr˜™“w“4YGCV‡3FSF1Cƒh–3YdP4“3Fƒ1FPiXU4™F1l8VGHŠ‹s0–UrH™Fp„X1+Vr’F1s’Vi3v–1FpixXUFRHPƒlFFr˜u‡x8F3YPrfv3rMVxw›Uiƒv9Œ9pMVxŒvƒviS8„SPrr8vXY51ŽR3v–pYVr’F1s“ŽKv–p3uŽpKC4YƒF9x‡Fpuu‹px“Ur’C9i„X1+Vr’F1s’Vi3v–pYVr’3Yuu–i+FrŠ1Ž“ŒuŽRH“hƒ9G˜PF“uMYr1ŽR3v–pYVr’F1s’Vi3v–pYVr’F1ƒ“ŽGS84p4ŽsKC4ps“C8VFUsF1Ž“wTwduF10pƒmlPhCUV9‡Š˜KmpXYx14Cu’ŽV‡8UHpƒK5“rrX–ƒ‡FƒKppFŒCCT–œŽU˜K“pƒKwUCCiui9‡pXiipUCUThC+uUP‡Š‹rŽpCxTUCChP‡ŠwrHpFRKT4•“V‡uF‹GmFvKX–3r–h1„UŽCGu9RG‹ŠlTCxlUmœT3r4Š9RMTŽ1s’Vi3v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi3v–pYVrwC3p4Pr8M’ŽrYVr’F1s’Vi3v–pYVr’F1s’VŒ„8–GH1“S’3CuF‹p3–rGzurx8’4YGChr‡vV1m1‹pw™wu“‡C+vFxhVrx1Ž1H“hƒ9G˜PF“uMY51ŽR3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYŽ“TŽ1s’Vi3v–pYVr–3pGF9œ„v–’„‡ŠP1u–i3v–pYVr’F1uTUrSFr1‹ui’FRH“hƒ9G˜PF“’G4™–il8UsFp–r9P˜Ks’‡ŒFC1œPCxUT1u–i3v–pYVr’F1s’Vi3v–1mT–rŽKGPr8‡–i’„1VK8ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVrwU3dTrs„8SFT9RMTŽ1s’Vi3v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi3v–pYVrwT‹‡s’ŽQ„8Ž‡m19K–4sCMQFrpluiYU8ŽS•Fwp•v–pYVr’F1s’Vi3v–pYVr’F1s’‡ŒFC1œPCxU’Ursv9sSFr1ƒPh’3pGFii+v3ƒS8ŽpSŠMH™X13vƒGuu‹sŒC•Cwp•v–pYVr’F1s’Vi3v–pYVr’F1s’‡sh8CG›PiŠP‹1’–Vil‹‡‹ŠŽ“XCsp“4Y‡vdml›‹r8MCHvixz8ƒGFTi1f““PuFŽ1ƒrlTƒRMTŽ1s’Vi3v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi3ri+Vr’F1s’Vi3v–1mT–rŽK4v9x„8S“›CYUw14TF‡91TƒK8ŠVKs’Vi3v–pYVr’F1s’Vi38hpvu‹“wT‹x5u3YM8Ž‡m1F“‹›Xr•’‡sh8CG›P9K–ŠVKs’Vi3v–pYVr’4ru–i3v–pYVr’F1uCMGfFrp˜Šixx’FRHv9sS8CŠ‡PiY–P‹S4v9x„8Sv™–xST1u–i3v–pYVr’F1s’Vi3v–G˜™FiXpUY8PVr+vƒ1œŠ‹Ph–XY51ŽR3v–pYVr’F1svY•v–pYVr’F1s’VsSFrGvPFpKp‹1H“MG„8hp“pVpx’F1s’VŒS’Ž1+Vr’F1P™FR’ŽrYVr’F1•u–“KTh“9TFœŽF‹K‡v–“l1–KTŽr+U‹S3ŠSKT–m+T‹K•8OvCGmuVKŽTFxsŠws0TFR–TwpupŽ‡3vŽmu4“T‹1P1VKs’Vi3v–pYŠ–ri’31F9xz8rpYuŽsK›FKuC4ƒV8r1MŽPh–3rGChC0v–RUp‹15–h“1Fr•MCr’MCrFiz“G›C9i+Vr’F1s’ŽR3––G˜u‹pK“3“s’‡sz9Gv™–rw“3r4T–8‡v–RXUFGrC‡iH‡1œT3CG’XolC‡Yx1C1‹1wCX’X5HhGOU‡1’ŠdKU›‹R5CV„–Msl1rxfuMCPŠ3Y3v3s„uiƒhT3s•F–Ks’Vi3v–pYŠ–ri’3ruFiŒ8ŽVV‡rK›Xd“‡z8r9Tws+™‡xvƒ“„uiƒhT3GpŽ‡xF–“KTƒr0T3–‡TŠws0TFR–TwpupŽ‡3vŽmu4“T‹Gd83UwxKT9dTM8‡C‹KpU–„8ŽSFTŠM™–V‡FƒpKpCrxF4PH‡–‡F3CrF‡‹ŠŽPC–Ks’Vi3v–pYŠ–Kx›9Ks’Vi3v–G˜PCrK™wY™–sf91‹P‹iXUF1uTr‡FUpvŠ‹Œp‹18PfFŒu‹“wUR8Pƒ8„9GsTVxwpXu“‡–ŠŠV’FKFiŒ„8ŽrlvVr’F1svwp•v–pYVr’F1s’VsK84pHTirXURs’Ž1lFCGvP‹px’G4™–il8UsFp–r9P˜Ks’‡ŒFC1œPCxUT1u–i3v–pYVr’F1s’Vi3v–pvPrrX™iu–V9Sv–G›P‹pm›XruF9shFC1›T9K‹p8’Žphv–pƒ8‡G‹™‹pH™X13vƒGuu‹sŒC•Cwp•v–pYVr’F1s’Vi3v–pYVxŒFGdvimv–’„ŽPh–3r8PVxm8V1œuiƒCFRH™UG0U9pYTrG›‹SP’Vil‹‡‹ŠŽ“XCXY51ŽR3v–pYVr’F1s’Vi3v–pYuŽ“K“3pƒC‡C3–ip˜™“Œv4TCM8ƒ1‹urxUŽS’™Fphv–pƒ8‡YS8Mps’‡ŒFC1œPCxUuh1u–i3v–pYVr’F1s’Vi3v–pvPrrX™iu–V9Sv–G›P‹pm›XruF9shFC1›T9K8MCH™X13v4iM1–xS1Ž1Hvixz8ƒGFT9K–ŠVKs’Vi3v–pYVr’F1s’Vi3vƒGuu‹sŒCs“Y38hpv™CQhv4“MGzFUsCTVxSŽSP’Vi0F9p3Tƒ’FKƒT–hi1CŠ9RMTŽ1s’Vi3v–pYVr’F1s’Vil‹‡‹ŠŽ“XCF1’–Vsf9GHpKC31d“VOFrp3TƒKU8Mps’Ž“4v‡p4ŠVr–4sCMQFrplpVpx’F1s’Vi3v–pYVr’F1s’‡ŒFC1œPCxU’Ursv9œ„8Ž„S™Cx8’3pCVSmvVp4ŠƒxS1Ž1HPX1v3rMVxŒFGdvimv‡“hvVr’F1s’Vi3v–pYVr’F1Hvixz8ƒGFT9r9P‹14P‡sSFpHT‹pw™‹GPrC+v4ihTƒ’FS8“3p0U9pYuŽ“K“3pƒC‡C„UM1+Vr’F1s’Vi3v–pYVr’FKƒT–hi1C‡YU’3xƒv9x8Ž‡F1Žsw“xu–Ž10F‹r4ŠVr‹p8uFphv–pvPrrX™iu–ŽmM’ŽrYVr’F1s’Vi3v–pYVr–4sCMQFrpY›–rŒU4Y4TrSFrG˜Š‡rXU•’Ž’Mv3rMVz™1H™X13vƒGuu‹sŒC•Cwp•v–pYVr’F1s’Vi3v–pYVxŒFGdvimv–’„ŽPh–3r8PVxm8V1œuiƒCFRHPM10U9pYTrGŒ1ŽSP’Vil‹‡‹ŠŽ“XCXY51ŽR3v–pYVr’F1s’Vi3v–pYuŽ“K“3pƒC‡C3–ip˜™“Œv4TCM8ƒ1‹urxUŽS•uFphv–p41–KO›‹SP’Vil‹‡‹ŠŽ“XCXY51ŽR3v–pYVr’F1s’Vi3v–p˜Šixx’FRsF9sSFr1ƒsX“4YP1+v3ƒœTƒx–3suF‹K‡v3z„u–xSp‹KƒT–hi1C1–xSvXG–Žphv–pv1FŒ–8PŽGV8ƒpMVxŒ–dF9i„v‡GhvVr’F1s’Vi3v–pYVr’F1s’Vi3v–GHT‹“ŒC3rdu–sKFC1œ™rx–ŠVKs’Vi3v–pYVr’F1s’Vi3ri+Vr’F1s’Vi3v–Q„vVr’F1s’Vi3v–p˜™Cx8–4i4TU“39GHPCx–ŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–RxUM’lC‡Ym1Fipu˜KX1F‡Kv3ƒChCl8KX’X5–h“x1FiX1CpOTFxsThFvRm1Cx8TF‡PpŽS„Uwsl1rƒhT3GpŽS0vXp„pUC“UsŠ–P‡p9m‡’ŽrYVr’F1•u–sx84pF1CxŒ–‹OvCGmuVKŽuMCs“‹K‡vMs+uFRPT1TSKT‡“m1duMCsŠR„p–mTrx9TFRslTMxmu41’uMCs1R„p–mTrx9TFRs8VKs’Vi3v–pYŠ–ri’31F9xz8rpYuŽC9“F1GCh–„Fr1ƒT‹px“‹Vpsl1–rTMo‡U‹0Fƒ“KTVrT‡+–rƒŽUŒ„’ŽrYVr’F1•u–sY8V1‹™CrXP‹1Hv‹Kœv–1m1F“wCSuF9r3pFsrTUCPu–mŽvŽCUpCz–UC’VQ‡pXiiCŽCx›X“YTŽ1s’Vi3v–p+‡iŒ’G4T–Vv–pvp9‡x’3YdTrsmF4sF™–r5C‡YhH‡PVuvKxTK‡CŽ“lUŽi3u˜Kr8FG‹uRŽ8ri•v–pYVr’Xis“–sMFCGHu‹sU’FKrC9r38CŠ‡PixX‹4u–“mu41’uMCs1R„p–mTrx9TFRsSKT‡supƒ„P9px’F1s’Vi3vŽr˜’Fpw“3rChY3vƒGFŠi1wPXpsv9œ„8Ž‡m1CxS’4iGC“„Fƒ1ƒT‹“Œ–‹zphpKT‹s9TM8‡C‹KpU10TFRvFC“C1VKs’Vi3v–pYŠ–ri’31F9xz8rpYuŽŒF‡4Pr8„CVp˜Š‹s0–uPrSv–Rr83s‡8F1zHŽr•MCr’MCrFizU‡ŠhŠwCxHMCr–h“O1Fipu˜KX1F‡‡u–K31FC1FCr8FG5Chp„1Fƒl1FCX13Cr8XmUmœuƒRG1M“5ChChHŽiX1FCX–FKrFizU‡1‡1FCXPMs‡u–‡3H‡1d19R5’F1‡TU1KUŽr‡Š9RUpwCO“wŽvXx+TŽiOT3YPŠVps+13s0T‹Su“‹‡+vF„Tƒr9TMY+v‹pŽS„1rx9Tw„K‡v–“KŠ–KŒuMCs“‹‡+U‹p•v–pYVr’Xis“–sMFCGHu‹sU’FKrCƒxz8‡ƒT9rwTwCƒ“‡0FrGsh–‡1X–‡Š–pŒpƒr’h–Vvh–‡pXiip–xvhPp4–‡U‹r5pFRSvCGp9ŽvXipU“•pU–‡Š––‡83iFpƒ„ŽpUCGHh–‡ŠvKCph1SUUCupƒP‡pX–„pXYGpUCu’‡Œ‡pXiipXolTC+TvmŽvXr9pCx‡P’V’VPŽ83CpƒmŽuhCPuUpUmœuƒRxuwi5FK‡1CPVuCKFK5Ch„1FƒhTCrTXCMTŽ1s’Vi3v–p+‡iŒ’G4T–Vv–pvu‹“Œ–3rs“VS8Ž‡‹p–r5CV‡zC1“ŠvKX™‹S‡8–i„H‡1’uXCX“3“‡CViŽUmœuƒRX–wŒl–hG+U‡1‹ŠipuMu™K‡Uws„VxŠ‹GPŽSv‡r•v–pYVr’Xis“–sSFrGvPFpKp‹1F9xSFCGlhPH‡–‡F3CrpUSTUCu’Vƒ‡Šszp–‡P4–‡Š––ŽvXipU“•pUCGHh–ŽU91z’ŽrYVr’F1•u–sY91z™FŒhwxs“C8VFUsF1Ž“wTwdu–“„T9x0TMŒŽ•Ž‡xŠwmu1TwsU‹‡U‹xl14ŒTF1G›9Ks’Vi3v–pYŠ–Kx›9Ks’Vi3v–G˜PCrK™wY™–sKiŠ‡u“wTwdu–s‡84svT‹P„“rdP‡xm–FVSPFsK–3x•’‡ŒVUCpMVxŒuMGP’Vil–“sŠVr–4CpuX13vƒGFŠi1wPXpP’Vil84suTFPC4YX“YMU9pYuŽCFvGdTF“m–i“YŠVrw“3r4T–8‡v–pvu‹“Œ–3r’C3“ƒv‡i+Vr’F1r1ŽR3v–pYVr’F1s“ŽKvVG˜™CxX‹dCV8„FUszrrX™wp•’ŽpŽ–9VCYmPws’PƒxŽiŠ‡uŽpfP‹r8“3p+F91“ŠƒKU1ŽR8“‡iv‡œiG‹ŠŽR8“‡iv‡pMT‡Gw–Xs•C3GƒvFVCYmPwi’™4“Ž8Cp4ŠVr–4iGCGV8ƒpMVxwPFGƒ“VS+FrGpŠVr‹’rpvCF“CUYFCCQ„›Cpv“CUv‡pmpVpx’F1s’Vi3v–pYVr’F1s’‡sm8ƒ1F1ixXpUY4™–9Sv–V9RMTŽ1s’Vi3v–pYVr’F1s’VsK84pHTirXURs’Ž1l8r1‹Piƒu‹4™–sz8MrYuŽi8–d–Ž„M’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vs„FrYTVxwTYuChidUC8„H‡YU–4“p–hYl84suTFPC4YX’ViKvrYuŽi8–dC3pœFi“M›–xŒMG•™CsŽF‡u™rx8–rrs’‡rKv–pvŠ‹“wC3“X™ƒxƒ–9pvp–‡xT1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi38C1VK–4CCT–‡F4sCHV‡T1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr›w8‡pXC‡pXivsŠ–P‡p9m‡pUC“UCdŠC8ŽU8‡p–xUhC+™–Q‡8UGpƒr’h–Vvh–‡pXiip–xvhPp4–‡8vm‡pX9lC–px’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–1mT–rŽKGFism8rhPiGU’UGs’‡Œ‡UCP„uŽCFvGdTF“mv‡GhvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrwU3dTrs„8SFT9RMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–1mT–rŽG4P‡sz91muƒROŠ‹GF9S8r1‹Piƒu‹FiŒ„8Žr3uŽi8–dC3pMFipMu‡r8–4Y4uFK„X1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’VsO84Œ‡P‹iXpUiuCwp•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1P™vRmu3sŽŠ‹‡GC‹lTMxKuƒrTws„ŠSKT‡sx84pF1CxŒ–‹K‡v–“KTVT‡+––Ks’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vs„FrYTVxwTYuChidUC8„›CYU–4“p–ViKvrYuŽi8–dC3pSFi’„›–xŒuMGs’‡rKv–pvŠ‹“wC3“X™ƒSƒ–i’„uŽC9vF1HuCr3vƒ1mPixXPFs›“4oS–ipvp–‡xT1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrwU3dTrs„8SFT9RMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1svY•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYu‡xX™‹dC‡‡9G›8rGU’Urs“hCmwr˜pFiX™i4“ŽGMFs‹u‡rm›Fd“‡VFrŠ‡P9K–3Yƒ“‡VCMx˜9’FKƒ“ŽG„8MrlpVpx’F1s’Vi3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVr’F1svY•v–pYVr’F1s’Vi3v–pYŽpKC4YƒF9x‡v–pvT‹swC3“uCh–„8MxhvVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pY‡xX™wxuFwp•v–pYVr’F1s’Vi3v–pYŽpKC4YƒF9x‡v–V9RMTŽ1s’Vi3v–pYVrŒP9Ks’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–RxUM’lC‡Ym1Fipu˜KX1F‡Kv3ƒChCl8KX’X5–h“xHŽiX1CpOTFxsThFvRm1Cx8TF‡PpŽS„Uwsl1rƒhT3GpŽS0vXp„pUC“UsŠ–P‡p9m‡’ŽrYVr’F1•u–sx84pF1CxŒ–‹OvCGmuVKŽuMCs“‹K‡vMs+uFRPT1TSKT‡“m1duMCsŠR„p–mTrx9TFRslTMxmu41’uMCs1R„p–mTrx9TFRs8VKs’Vi3v–pYŠ–ri’31F9xz8rpYuŽC9“F1GCh–„Fr1ƒT‹px“‹Vpsl1–rTMo‡U‹0Fƒ“KTVrT‡+–rƒŽUŒ„’ŽrYVr’F1•u–sY8V1‹™CrXP‹1Hv‹Kœv–1m1F“wCSuF9r3pFsrTUCPu–mŽvŽCUpCz–UC’VQ‡pXiiCŽCx›X“YTŽ1s’Vi3v–p+‡iŒ’G4T–Vv–pvp9‡x’3YdTrsmF4sF™–r5C‡YhH‡PVuvKxTK‡CŽ“lUŽi3u˜Kr8FG‹uRŽ8ri•v–pYVr’Xis“–sMFCGHu‹sU’FKrC9r38CŠ‡PixX‹4u–“mu41’uMCs1R„p–mTrx9TFRsSKT‡supƒ„P9px’F1s’Vi3vŽr˜’Fpw“3rChY3vƒGFŠi1wPXpsv9œ„8Ž‡m1CxS’4iGC“„Fƒ1ƒT‹“Œ–‹zphpKT‹s9TM8‡C‹KpU10TFRvFC“C1VKs’Vi3v–pYŠ–ri’31F9xz8rpYuŽŒF‡4Pr8„CVp˜Š‹s0–uPrSv–Rr83s‡8F1zHŽr•MCr’MCrFizU‡ŠhŠwCxHMCr–h“O1Fipu˜KX1F‡‡u–K31FC1FCr8FG5Chp„1Fƒl1FCX13Cr8XmUmœuƒRG1M“5ChChHŽiX1FCX–FKrFizU‡1‡1FCXPMs‡u–‡3H‡1d19R5’F1‡TU1KUŽr‡Š9RUpwCO“wŽvXx+TŽiOT3YPŠVps+13s0T‹Su“‹‡+vF„Tƒr9TMY+v‹pŽS„1rx9Tw„K‡v–“KŠ–KŒuMCs“‹‡+U‹p•v–pYVr’Xis“–sMFCGHu‹sU’FKrCƒxz8‡ƒT9rwTwCƒ“‡0FrGsh–‡1X–‡Š–pŒpƒr’h–Vvh–‡pXiipFsC4Pp4–‡U‹r5pFRSvCGp9ŽvXipU“•pU–‡Š––‡U‹r•pƒ„ŽpUCGHh–‡ŠvKCph1SUUCupƒP‡pX–„pXYGpUCu’‡Œ‡pXiipXolTC+TvmŽvXr9pCx‡P’V’VPŽ83CpƒmŽuhCPuUpUmœuƒRxuwi5FK‡1CPVuCKFK5Ch„1FƒhTCrTXCMTŽ1s’Vi3v–p+‡iŒ’G4T–Vv–pvu‹“Œ–3rs“VS8Ž‡‹p–r5CV‡zC1“ŠvKX™‹S‡8–i„H‡1’uXCX“3“‡CViŽUmœuƒRX–wŒl–hG+U‡1‹ŠipuMu™K‡Uws„VxŠ‹GPŽSv‡r•v–pYVr’Xis“–sSFrGvPFpKp‹1F9xSFCGlhPH‡–‡F3CrpUSTUCu’Vƒ‡Šszp–‡P4–‡Š––ŽvXipU“•pUCGHh–ŽU91z’ŽrYVr’F1•u–sY91z™FŒhwxs“C8VFUsF1Ž“wTwdu–“„T9x0TMŒŽ•Ž‡xŠwmu1TwsU‹‡U‹xl14ŒTF1G›9Ks’Vi3v–pYŠ–Kx›9Ks’Vi3v–G˜PCrK™wY™–sKiŠ‡u“wTwdu–s‡84svT‹P„vd“hƒh–FVSPFsK–3x•’‡ŒVUCpMVxŒuMGP’Vil–“sŠVr–4CpuX13vƒGFŠi1wPXpP’Vil84suTFPC4YX“YMU9pYuŽCFvGdTF“m–i“YŠVrw“3r4T–8‡v–pvu‹“Œ–3r’C3“ƒv‡i+Vr’F1r1ŽR3v–pYVr’F1s“ŽKvVG˜™CxX‹dCV8„FUszrrX™wp•’ŽpŽ–9VCYmPws’PƒxŽiŠ‡uŽpfP‹r8“3p+F91“ŠƒKU1ŽR8“‡iv‡œiG‹ŠŽR8“‡iv‡pMT‡Gw–Xs•C3GƒvFVCYmPwi’™4“Ž8Cp4ŠVr–4iGCGV8ƒpMVxwPFGƒ“VS+FrGpŠVr‹’rpvCF“CUYFCCQ„›Cpv“CUv‡pmpVpx’F1s’Vi3v–pYVr’F1s’‡sm8ƒ1F1ixXpUY4™–9Sv–V9RMTŽ1s’Vi3v–pYVr’F1s’VsK84pHTirXURs’Ž1l8r1‹Piƒu‹4™–sz8MrYuŽi8–d–Ž„M’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vs„FrYTVxwTYuChidUC8„H‡YU–4“p–hYl84suTFPC4YX’ViKvrYuŽi8–dC3pœFi“M›–xŒMG•™CsŽF‡u™rx8–rrs’‡rKv–pvŠ‹“wC3“X™rsƒ–‹rvp–‡UT1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi38C1VK–4CCT–‡F4sCHV‡T1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr›w8‡pXC‡pXivsŠ–P‡p9m‡pUC“UCPu–mŽU8‡p–xUhC+™–Q‡8UGpƒr’h–Vvh–‡pXiipFsC4Pp4–‡8vm‡pX9lC–px’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–1mT–rŽKGFism8rh™CGU’vKs’‡Œ‡UFrhuŽCFvGdTF“mv‡GhvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrwU3dTrs„8SFT9RMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–1mT–rŽG4P‡sz91muƒROŠ‹GF9S8r1‹Piƒu‹FiŒ„8Žr3uŽi8–dC3pMFipMu‡r8–4Y4uFK„X1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’VsO84Œ‡P‹iXpUiuCwp•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1P™vRmu3sŽŠ‹‡GC‹lTMxKuƒrTws„ŠSKT‡sx84pF1CxŒ–‹K‡v–“KTVT‡+––Ks’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vs„FrYTVxwTYuChidUC8„›CYU–4“p–ViKvrYuŽi8–dC3pSFi’„›–xŒuMGs’‡rKv–pvŠ‹“wC3“X™ƒSƒ–i’„uŽC9vF1HuCr3vƒ1mPixXPFs›“4oS–ipvp–‡xT1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrwU3dTrs„8SFT9RMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1svY•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYu‡xX™‹dC‡‡9G›8rGU’Urs“hCmwr˜pFiX™i4“ŽGMFs‹u‡rm›Fd“‡VFrŠ‡P9K–3Yƒ“‡VCMx˜9’FKƒ“ŽG„8MrlpVpx’F1s’Vi3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVr’F1svY•v–pYVr’F1s’Vi3v–pYŽpKC4YƒF9x‡v–pvT‹swC3“uCh–„8MxhvVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pY‡xX™wxuFwp•v–pYVr’F1s’Vi3v–pYŽpKC4YƒF9x‡v–V9RMTŽ1s’Vi3v–pYVrŒP9Ks’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–RxUM’lC‡Ym1Fipu˜KX1F‡Kv3ƒChCl8KX’X5Chp„1Fƒl1CpOTFxsThFvRm1Cx8TF‡PpŽS„Uwsl1rƒhT3GpŽS0vXp„pUC“UsŠ–P‡p9m‡’ŽrYVr’F1•u–sx84pF1CxŒ–‹OvCGmuVKŽuMCs“‹K‡vMs+uFRPT1TSKT‡“m1duMCsŠR„p–mTrx9TFRslTMxmu41’uMCs1R„p–mTrx9TFRs8VKs’Vi3v–pYŠ–ri’31F9xz8rpYuŽC9“F1GCh–„Fr1ƒT‹px“‹Vpsl1–rTMo‡U‹0Fƒ“KTVrT‡+–rƒŽUŒ„’ŽrYVr’F1•u–sY8V1‹™CrXP‹1Hv‹Kœv–1m1F“wCSuF9r3pFsrTUCPu–mŽvŽCUpCz–UC’VQ‡pXiiCŽCx›X“YTŽ1s’Vi3v–p+‡iŒ’G4T–Vv–pvp9‡x’3YdTrsmF4sF™–r5C‡YhH‡PVuvKxTK‡CŽ“lUŽi3u˜Kr8FG‹uRŽ8ri•v–pYVr’Xis“–sMFCGHu‹sU’FKrC9r38CŠ‡PixX‹4u–“mu41’uMCs1R„p–mTrx9TFRsSKT‡supƒ„P9px’F1s’Vi3vŽr˜’Fpw“3rChY3vƒGFŠi1wPXpsv9œ„8Ž‡m1CxS’4iGC“„Fƒ1ƒT‹“Œ–‹zphpKT‹s9TM8‡C‹KpU10TFRvFC“C1VKs’Vi3v–pYŠ–ri’31F9xz8rpYuŽC‹vGdTF“mv–1m1F“wCSuF9r3pUC‡1UC’VQŽvXipU“•pU–‡Š––‡8CKpƒ„ŽpUCPu–/‡TMrŒpF9Ž8UsŠ–P‡p9m‡pUC“UCHMzŽU8‡pF9lpUCH‡–MpMrppXsPCdTXz‡Š‹9‡pCx–4–‡Š––‡Š˜KmpFRKHhs™–’‡F3–„p“’hd1CƒŽvhlp–xpƒ‡5HhGOUŽrzŠ–RruMC‡–h“OF‡uuVRXp3Y‡uUp0FCK1X1+Vr’F1s’ŽR3––G˜u‹pK“3“s’‡sŽF‡u™rx8–rxs“Ž‡91FTrx8vFŠ‡pXC‡pXivsŠ–P‡p9m‡pUC“UCPu–mŽU8‡p–xUhC+™–Q‡8UGpƒr’h–Vvh–‡pXiip–xvhPp4–‡8vm‡pX9lCUŠM™–V‡F4pUC‡PC„8U–‡FƒpvpUC“UCGp4–‡8C‡pƒrS“Cu1UoVp9pps‡FU•pm‡U‹ƒŽU–/l›‹x5uFGUŽCl1XCUp‹r‡uvK‡C1ƒuVRGŽQlTFp3UŽrKŽCX13CrTUrlU‡ŠlT˜KUp‹158FR+CPVVRGM“MTŽ1s’Vi3v–p+‡iŒ’G4T–Vv–pvu‹“Œ–3rs“VS8Ž‡‹p–r5CV‡zC1“ŠvKX™‹S‡8–i„H‡1’uXCX“3“‡CViŽUmœuƒRX–wŒl–hG+U‡1‹ŠipuMu™K‡Uws„VxŠ‹GPŽSv‡r•v–pYVr’Xis“–sSFrGvPFpKp‹1F9xSFCGlhPH‡–‡F3CrpUSTUCu’Vƒ‡Šszp–‡P4–‡Š––ŽvXipU“•pUCGHh–ŽU91z’ŽrYVr’F1•u–sY91z™FŒhwxs“C8VFUsF1Ž“wTwdu–“„T9x0TMŒŽ•Ž‡xŠwmu1TwsU‹‡U‹xl14ŒTF1G›9Ks’Vi3v–pYŠ–Kx›9Ks’Vi3v–G˜PCrK™wY™–sKiŠ‡u“wTwdu–s‡84svT‹P„›XC–“‡K9p3uŽC9“Xps’‡Œ‡UCpMVxŒMrP’VilC“sŠVr–4iGCGV8ƒpMVxŒuipChC0Fr’„1V’FKdPrxK8hsFPi1–Pw1P’Vsz8ŽSHu‹CU’FKFiŒ„8Žz8rGUuVKs’Vi3v–GhvVr’F1s’Vi3v–p˜Šixxuw14TC0FŒu‹“wUR8Pƒh8ƒp3Tƒf™‹s8u4CƒvMzSuFŒhC3Cuv9VSvFœ8ƒK‹™‹K•™FKhvVœuVKST‹p8C3GdvVœuVKSuMp•“3GlvMrm8‡GUvs8u4CƒvŽzœHV„uŽSP’Vili1mFFsX1Mps’‡sVFCGvuiwC3xP’Vs“CFKFviQUƒF“4r’CFKv“rCxuMYr1ŽR3v–pYVr’F1s’Vi3v–pYu‡xX™‹dC‡‡9Gp‡YU’s8Cwp•v–pYVr’F1s’Vi3v–pY‡xK›XruCVO8–pYTVxwPFGƒ“VS+FrGp‡r8UF1H“Ž„„FrŠ„Š‹CMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYŽiXFF1•’‡s„91F1i1fv“’u4YlC“i19xw›F‡uTƒSm9lVxxFF1H“Ž„„FrŠ8ƒ‡mPG’–‡Œ‡UCphuŽŒF‡4Pr8„C‡pYT–xx’FKGFism8rh™iG–1ŽKr“9r„X1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrwT‹‡s’Ž1l–Hu‹sK‹’uƒi„X1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’ViŽU˜Kr83s‡8F1zHŽr•MCr’MCrFizU‡1’ŠKxHMCr–h“O1Fipu˜KX1F‡‡u–K31FC1FCr8FG5Chp„1Fƒl1FCX13Cr8Xm’FR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’3Yuu–i+vƒ1mPixXPFspPUY3–‹rYuŽC9“XsHv‹GUFCŠ‡TrxUT1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’VsO84Œ‡P‹iXpUiuCwp•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–Q„vVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’3Yuu–i+vCG›Pir8–3Y™/ŽFsm™rQPFGƒ“VS+Fs‹P‹“ŒvFRH“Ž„„FrŠ8ƒ‡‹PwpH“V8„9GsŠ9K8ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pY‡ƒ›XCƒ“Ž‡i1CpVpx’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–Pœ14Cp4ŠŽF‡lpCx•UUC+™–Q‡8UGpUC“CrK›UidTCsfp–x’UC’hP‡pXii’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYŽiXFF1•’‡s„91F1i1f““’CYl–“iVxxFF1H“Ž„„FrŠ8ƒ‡mPr’–‡Œ‡UCpYT–xx’FKGFism8rh™rG–PrHv‹1Sv–pT–r–3Yƒ“‡VCMxviY–P‹KrC9r„X1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’VsO84Œ‡P‹iXpUiuCwp•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1H“‡hFrŠT‹s0–3xXPUY3–ip˜1Cx88Ž1rCŽhiG˜TŽp‹›FGu“VxFr1œT‹sXC3Cƒ’Ž1l8CGvT‹sFŠM18–M13vƒGvTŽi8UXY51ŽR3v–pYVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVr’F1sv9xm9GF™Fsx’FKuCMGm8r1F1F“ŒUU1u–i3v–pYVr’F1–FR3v–pYVr’F1s“‡h8hsFpVpx’F1s’Vi3v–pYVr’F1sv9xm9GF™Fsx’s8Cwp•v–pYVr’F1s’VŒS’ŽrYVr’4rŽR3v–pYVSTMiu–i3v–pYVKx“‹ROŠmu4CdTFxsŠwYx84pF1CxŒ–‹3Uwxmu41’TMuŽ/‡TMrHpFsw–CdTC8‡Š‹ƒlpUUp4CPPƒœ‡phs‡pUCSU9KrFizUŽr•MCr’MC“TŽ1s’Vi3v–p+‡rK›UidTCsfpCrS“4Cu’MŒ‡U‹rYp–xŠUsŠ–P‡p9m‡pUC“UCdFV‡U‹r•pƒKr–hCuPr9‡Š–pŒpCx•UUCHMz‡U‹rPpƒKr–hCuPr9‡Š–pŒ’ŽrYVr’F1•u–sY8V1‹™CrXP‹1Hv‹1œv–1m1F“wCSuF9r3pFsrTUCPu–mŽvŽCUpCz–UC’VQ‡pXiiCVRx›X“YTŽ1s’Vi3v–p+‡iŒ’G4T–Vv–pvp–‡U’3YdTrsmF4sF™–r5Chp„1CPVuXCxTK‡CŽ“lUŽi3u˜Kr8FG‹TRŽ8ri•v–pYVr’Xis“–sMFCGHu‹sU’FKr“9r38CŠ‡PixX‹4u–“mu41’uMCs1R„p–mTrx9TFRsSKT‡spƒ„P9px’F1s’Vi3vŽr˜’Fpw“3rChY3vƒGl™–rwTwCƒ“‡0FrGshCHMz‡U‹rPpƒKr–hCuPr9‡Š–pŒpUC“C1ruUrV’FR3v–pYVrTŽ1“v9sz8Ž‡‹19r–4iGCGV8ƒp˜™“Œv3YdTFp3i1mF‹iX–SuFisfpCrr›UC„CMŠŽU˜KCpCx‡U–‡Š–CX“Uip’ŽrYVr’F1•u–sY8V1‹™CrXP‹1Hv‹GUFCŠ‡TrxU’3YdTrsmF4sF™–r5Fs1Fi3u˜KxvŽ1‡–p‡FCGu9RX–wPluvK‡CPVu3CGUFQlCMCK1Fr•MCr’MCrFizU‡ŠhŠwCxHMCrCM‡FiŽT9/l›‹x58X1VU‡Š‡ŠKGCMCrC‡ilFCGu9RG3Yr8–xŽ1FrpKX83“5UVi31FVMT–Rx1XY5–h“‡uƒ“Ž1ƒrfTŽRGuS„Uwsl1–ƒhŠ‹‡u“‹‡ŠFs+1–hT3YŠVKs’Vi3v–pYŠ–ri’31F9xz8rpYuŽŒF‡4Pr8„C‡p˜Š‹s0–uPrSv–Rr83s‡8F1zHŽr•MCr’MCrFizU‡PVuXCxHMCr–h“O1Fipu˜KX1F‡‡u–K31FC1FCr8FG5–h“x1Fƒl1FCX13Cr8XmUmœuƒRXF1‡FsVUŽiX1FCX–FKrFizU‡1‡1FCXPMs‡u–‡3H‡1d19R5’F1‡TU1KUŽr‡Š9RUpwCO“wŽvXx+TŽiOT3YPŠK‡vXs+13s0T‹Su“‹‡+vF„Tƒr9TMY+v‹pŽS„1rx9Tw„K‡v–“KŠ–KŒuMCs“‹‡+U‹p•v–pYVr’Xis“–sMFCGHu‹sU’FKFiŒ„8Žr˜u‹p0vGr–V“muƒr8T‹K•1hF41KVKT‹zVŠz8smVf13s™OpdRl1ƒK9T‹GGCX9‡Us4p–xp4’Ž9ŽFC1›pUST–px’F1s’Vi3vŽr˜’FpKC4YƒF9x‡v–1‹™FpK“4CsUŽƒ+T9RX8S‡Xp„1C1“u–RG‹Rr–h1V1FCGu9RxvŽ1‡–p‡C1Ž1FCx™‹R“TŽ1s’Vi3v–p+‡iŒ–R4TUƒh8Mr˜“CwU4vis„84ŒVhu–‡zŽvKŽpFR84CU8‡83rpFsxpCPHŽQ‡TV1Ž’ŽrYVr’F1•uFRŽ’ŽrYVr’31ƒCVxh8C1p‡x0C3CP‡s„84ŒVŽsK›FKuF9S’8HŠizuY•’‡ŒVUCpMVxŒuMGP’Vil–“sŠVr–4CpuX13vƒGFŠi1wPXpP’Vil–Hu‹sK‹’C9ihv–pv1rxKF3xuFisu–i“YŠVrw“3r4T–8‡v–pvu‹“Œ–3r’C3“ƒv‡i+Vr’F1r1ŽR3v–pYVr’F1s“ŽKvVG˜™CxX‹dCV8„FUszrrX™wp•’ŽpŽ–9VCYmPws’PƒxŽiŠ‡uŽpfP‹r8“3p+F91“ŠƒKU1ŽR8“‡iv‡œiG‹ŠŽR8“‡iv‡pMT‡Gw–Xs•C3GƒvFVCYmPwi’™4“Ž8Cp4ŠVr–4iGCGV8ƒpMVxwPFGƒ“VS+FrGpŠVr‹’rpvCF“CUYFCCQ„›Cpv“CUv‡pmpVpx’F1s’Vi3v–pYVr’F1s’‡sm8ƒ1F1ixXpUY4™–9Sv–V9RMTŽ1s’Vi3v–pYVr’F1s’VsK84pHTirXURs’Ž1l8r1‹Piƒu‹4™–sz8MrYuŽi8–d–Ž„M’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vs„FrYTVxwTYuChidUF„„H‡YU–4Cp–hYl84suTFPC4YX–ViKvrYuŽi8–dC3pSFi“M›–xŒuMG•™CsŽF‡u™rx8–rxs’‡rKv–pvŠ‹“wC3“X™ƒSƒ–‹rvp9‡UT1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi38C1VK–4“CT–‡F4sCHV‡T1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr›w8‡pXC‡pXivsŠ–P‡p9m‡pUC“UCdFVŽU8‡p–xUhC+™–Q‡8UGpƒr’h–Vvh–‡pXiipCƒl™4Pp4–‡8vm‡pX9lC–px’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–1mT–rŽKGFism8rh™iGU’vKs’‡ŒVUFrhuŽC‹vGdTF“mv‡GhvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrwU3dTrs„8SFT9RMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–1mT–rŽG4P‡sz91muƒROŠ‹GF9S8r1‹Piƒu‹FiŒ„8Žr3uŽi8–dC3pMFipMu‡r8–4Y4uFK„X1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’VsO84Œ‡P‹iXpUiuCwp•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1P™vRmu3sŽŠ‹‡GC‹lTMxKuƒrTws„ŠSKT‡sx84pF1CxŒ–‹K‡v–“KTVT‡+––Ks’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vs„FrYTVxwTYuChidUC8„›CYU–4“p–ViKvrYuŽi8–dC3pSFi’„›–xŒuMGs’‡rKv–pvŠ‹“wC3“X™ƒSƒ–i’„uŽC9vF1HuCr3vƒ1mPixXPFs›“4oS–ipvp–‡xT1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrwU3dTrs„8SFT9RMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1svY•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYu‡xX™‹dC‡‡9G›8rGU’Urs“hCmwr˜pFiX™i4“ŽGMFs‹u‡rm›Fd“‡VFrŠ‡P9K–3Yƒ“‡VCMx˜9’FKƒ“ŽG„8MrlpVpx’F1s’Vi3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVr’F1svY•v–pYVr’F1s’Vi3v–pYŽpKC4YƒF9x‡v–pvT‹swC3“uCh–„8MxhvVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pY‡xX™wxuFwp•v–pYVr’F1s’Vi3v–pYŽpKC4YƒF9x‡v–V9RMTŽ1s’Vi3v–pYVrŒP9Ks’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–RxUM’lC‡Ym1CŠSuKXvxruXCŽ1C1lu˜Kr8FG58–x3UŽi4uFCXp5CC’FR3v–pYVrTŽ1“v9sz8Ž‡‹19r–4YrF9smv–RXp5CCUŽCœ1vKXFƒlHhGO“Vh8ƒRX“3i5T–“UmœuƒG›pFPlXx‡HŽ–MTdKXp5CCUmœuƒGvTŽi8vm‡p3rhp–xv4C„8U–‡83iCpUCUTVpx’F1s’Vi3vŽr˜’FpKC4YƒF9x‡v–1‹™FpK“4Cu–i3v–pYVKxTMu–i3v–p˜1Ž“Xv3pGCV‡3FSF1Cƒh–3YdP4“38V1‹u9“SuF9‡+vƒGvpFpwCUrHPƒh8ƒp4Š‹CMTŽ1s’Vi3v–pYVrŒU4pGFisO8–pYTŽPh–3rƒ“hrh84pƒT‹pxŽKƒv‹MFrplŠ‹CMTŽ1s’Vi3v–pYVr’F1s’VsOFCG›T9rwxrF9‡0UŽ1+Vr’F1s’Vi3v–pYVr’F1s’Vi3vƒGvpFpwCF1’–Vi0v–P™ƒxfŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVrwv3ruCVUM1+Vr’F1s’Vi3v–pYVr’xF9Smv–pƒP‹iwTwru’ŽPŽ’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vil9Gm1‡xU’Urs’Žp3Ui“pTƒRMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pY‡r0vCMPM’ŽrYVr’F1s’Vi3v–pYVrwUG4PrC3v4s‹ŠŽs8hu–i3v–pYVr’F1s’Vi3v–1vTixK“4idvi9Ž’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vil9Gm1‡xU’Urs’Žp0UM1+Vr’F1s’Vi3v–pYVr’F1s’Vi3FFSHTirXŠh1u–i3v–pYVr’F1–FR3v–pYVr’F1s’‡Œ„–G“‡YU’FKƒ“ŽG„8Mƒ„H‡rX–r8PVS+Fr1œŠVKw1d–Vsh8CG›P9rŒ’GP3“zF4sF™ƒxSp‹Kƒv‹MFrplpVpx’F1s’Vi3v–pYŽpKC4YƒF9x‡v–1‹™FpK“4C8P4iz8VpzTF“XpFxƒ“ŽŽ8rYTVxŒFXYr1ŽR3v–pYVr’F1s’Vi3v–p˜™Cx8–4i4TU“38hpFuFPh–3r•’‡ŒU9pYp9K–ŠVKs’Vi3v–pYVr’4rP’Vil9GzP9K–ŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–RxUM’lC‡Ym1CŠSuKXvxr8–xlH‡ŠœVRr8FG5UVi3Fi4VRKuw“‡CMG31CŠŽT9RrCXi5FizU‡1pu‹CX–Fx“TŽ1s’Vi3v–p+‡iŒvƒviS8r˜™“Œv3YdTFp3pƒ„lCUCu1F–‡FXr‹pCxU4ŠM™–V‡8FipXoŽ8hCvŽQ‡ŠwrHpFRKHhCuXŠ‡FXr‹pCxU4CuCzŽU˜KCpCx‡UC„HŽ„‡8vmMpCrx1h–‡Š––‡TŽ‡YpXYSv4CGPrQ‡p3rKp–x™–px’F1s’Vi3vŽr+1ƒpx’F1s’VsMi1HŠŽiXUF1uTr‡FUpvŠ‹Œp‹14“VO8Us‹TrxUMYu–i3v–p˜pVpx’F1s’Vi3v–pYVxŒU4C4™–9Sv–G›P‹p0–3d“hƒhFrGsTŽpwuw18P‡‡FCŠT9KwxH™FK„UM1+Vr’F1s’Vi3v–1mT–ruwxƒv9xM84ppTVxŒU4C4™X13v4pƒŠ‹sK–3ƒPV‡0v‡’„›CY–’XYr1ŽR3v–pYVr’F1s’Vi3v–pYuŽ“ŒuYs“Y3vƒGvTŽi8UX“’T–lFF„S™iwC3pd’Ž10FƒGF1‹pŒU4C4™–Œh8CŠ‡uŽŒh8Ž1’VsK8CŠ‡uŽPh–3rs’VxV–UpF™FpKC3Cƒ“CxŽFUpF™ƒrx8MY51ŽR3v–pYVr’F1svY•v–pYVr’F1s’Vsm8ƒG›T‹CMTŽ1s’Vi3v–pYVr’F1s’Vil9GzP9r9P‹1Hvis+8CGp1iYK“KTrf8–1FŠŽsŽSuviV8VG›pFpS’4pGChCl84p4Ž’S4TCMv–pH1i9hC3r4TC‡9Cu1rƒhC3xsuFp„UM1+Vr’F1s’Vi3v–Q„vVr’F1s’Vi3v–p˜1ŽpKCS8P4iz91›TVK8M8v9V+vVœC9Kf›wY8’hGŽv3rMVxŒ–4“ƒ“3pMFipMVxwPFGƒ“VS+FrGpŠ9RMTŽ1s’Vi3v–pYVrwT‹‡s’ŽGO84pF1F“ŽKdCV8„FUszT‹pSuKp–Ž„M’ŽrYVr’F1s’Vi3v–pYVrŒvƒviS8rYuŽsX“4YPGm8hih™iG–ŠVKs’Vi3v–pYVr’4ru–i3v–pYVr’F14TC8„iGH1–rwTw“4“MGŽFƒ1CTVrm™wr8“h“xU9pYuŽ“ŒuY•Cwp•v–pYVrŒP9Ku–i3v–pY1ƒKxTVKs’Vi3v–pYŠ–r5u–RVH‡1’TwCX›FmlCVxOFiHuKX›‹15FizUVRYŽCG8Ž15TFGV1C1œMCXp5CCUŽCGu9C‹u“wTsGFiŒ‡pCxU4–ŽX1u–i3v–pYVKx’ƒi4TC8„iGH1–rŒU4Y4TF‡F3r9TM8‡C‹KpU1muƒr8T‹KsPMŽvXxmŠ‹RPTFS„™‡hŠ–GKTƒr0TFrdpŽxU9“muƒr8T‹KsPŽxvS+14C–T‹V‡pŽ‡0prGmŠ41ŽT‹rP“‹SKT‡“KuCr9TFSsTF0ŠƒKduMCPv–Ks’Vi3v–pYŠ–Kx›9Ks’Vi3v–G˜PCrK™wY™–sKiŠ‡u“wTwdu–szFUpvŠ‹“KTYr–Ž1„’ŽrYVr’41u–i3v–pYVr’F1Hv9œ‡8MrY›–rŒU4Y4TrsŽ8ƒŠSP‡x8vFR4“ŽGMFpF1CrXPF•’Ž“fv3rlŠ9RMTŽ1s’Vi3v–pYVrwT‹‡s’ŽGf9GH1ŽŒhUFRHv9œ‡8MrMVzhwYdTCsŽppTƒK–Pr’C9i„X1+Vr’F1s’Vi3v–pYVr’FKƒv‹Q„v–’„VxŒ–RGF9‡V–‹‡‹u‡rm›XxG“‡h8ƒp3TrxŒC3“4v9œ‡8Mr˜PŽiXpFKdPŽp3ƒp˜TFiXpFK4P‡sSv–pH1i9hC3r4TC‡9Cu1rƒhC3xsuFp„UM1+Vr’F1s’Vi3v–Q„vVr’F1s’Vi3v–p˜T‹sŒUr1ŽR3v–pYVr’F1s’Vi3v–pYuŽ“ŒuYs“Y3vƒGvTŽi8UX“’T–lFF„S™iwC3pd’Ž10FƒGF1‹pŒU4C4™–Œh8CŠ‡uŽŒh8Ž1’Vs08Ž‡F1Vrv3““P‡S8Ž‡F1F“iF3P‡fvFr4Š9RMTŽ1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’314TC0FŒu‹“wUR•’ŽpŽF9PœT‡G‹UXs’™F4rPœTƒ’FKƒv‹Q„CMx˜9’FKdCV8„FUszT‹pSuh1u–i3v–pYVr’F1GC‡r3vV1›1“XpUY•’‡sVFCGvuiwC3x•C“œv‡GhvVr’F1s’Vi3v–pYVr’F14TC8„iGH1–r–3“FisO8–1F™r1f““51ŽR3v–pYVr’F1svY•v–pYVr’F1s’VsSFrGvPFpKp‹1GChiM8ƒŠSu‡xUŽr8v9x48rsŠVr–4Yrvii„UM1+Vr’F1–FR•v–pYVr›wi•ŽR3v–pYVrTŽŠ‡Šr‹prxKuhCdŠC–‡pCp+pXYX1hC+P3–‡U‹r5pU1SCCGPrru–i3v–pYVKx“‹‡mFFxKT3YfTVMuŽFrYl1F/MT‹S•uRŠ41019MŠ‹QV™SKT‡“m1XY–T•uKŽpƒGKŽ9+T™3Y08–0Ms0T‹QM1K‡TŽsOVrfTXCsFwYK8C“01ƒx’Twsuux3vUpmuŽRfu1s™‡‡vCG„TFi–TFd“‹‡O8U1OVƒ„vVr’F1s’Viv–C˜1‡r8vGd–Vil8V1‹u9“Su–Vsf9GHŠ‹sK8ŽŠ‡83iCpUCUThC™–8‡Fƒp›’ŽrYVr’F1•u–sY8Ž‡FP‹“8v3Cs“VxŽ84sœTirXp‹Š‡TŽr“pCr4PH‡–‡F3Cr9GHPCxrHhGOU‡1lŠŽCxPwYruvRmU‡1dT‡uu‹sŒUu–i3v–pYVKxTMu–i3v–p˜1Ž“Xv3pGCV‡3FSF1Cƒh–3YdP4“3FUsœTir8vFRHv9szFUsVuizCXYu–i3v–p˜pVpx’F1s’Vi3v–pYVxŒ–4“ƒ’V9Sv–pvP‹iwTwxPCCzFƒ1HPu‹d“M1+v4p˜19rwU3puCVSv–p41–xŒ’GP3“zF4sCŠ9RMTŽ1s’Vi3v–pYVrŒvƒviS8r˜P‹pKTw“•v9œ„8ŽSv1sw›UpuF9r+vƒGvp‹“‹ŠM18–ŽK„–i’„TPhCxPrf8Mr4pVpx’F1s’VŒS’Ž1+Vr’F1P™FR’ŽrYVr’F1•u–“muVm+T‹ru‡Ši“0T9K314P’V’ŽUiŠhv–C‹u“wTsGFiŒ‡’ŽrYVr’F1•u–“KTirOTFS„™SKpŽxm1rx’uMC+pŽ0vŽx+Š3ŒMT3GpMYzpwx0TFR–TwC„C‹SmvŽxl14ŒTF1G•ŽSmFXx„TiPT1TzpMl1FRdu1s™‡‡vCG„TFi–T3H–‹FxOVƒhT‹K+™x3vXxK1–r8Š‹‡GC‹‡m8ƒ“Ku9Mu1sP9Ks’Vi3v–pYŠ–ri’31F9xz8rpYuŽpw“xGPƒ0Fr8Suiƒh–3YƒTF„„Cp˜™“Œv3YdTFp3pFsCU–‡–Ž/‡FXr‹pCxUƒ„„“xƒ“Ž„8CGvpUŠM™–V‡UPpFiG’hŠM™FiHPƒSŽ8rP‡PixXpFxuCh–„U‹V19SpUiG–hCpFCGF1Cƒu‹4TiHvdKxuwi5FK‡1FrMKxPX’lCK1CP+TŽCUpw–lCOUŽ‡ƒTMC5’F13TŽ1s’Vi3v–p+‡iŒ’G4T–Vv–pvu‡r8–Gsv9œ„8Ž‡m1CxS“‹KŽvV“01UC0T‡+C‹‡m8ƒ“Ku9MŠ‹•pŽ3UwxŽ1ƒrfuM+1„TVŽ1ƒxuF1HŽr4Pƒ8‡vFrYuFiwC3pd“hGxp‹RF4•“Ž/‡prPŽpCx14CŠF/‡83iCpUCUTh–‡Š––‡FƒpppXYrP4CP™FŠŽF–pUp–x’UCGHh–ŽFrp‡pCr›C„CMŠ‡Ths‡pƒ„lvCp41u–i3v–pYVKx’ƒi4TC8„iGH1–rwv3dP3GmFCŠVhC+uC9‡FXipƒ„lCUCu1FCƒv9zF–l›‹x5CŽKhFƒ„Š‹Cx•Ž5CŽs0TCxz8ƒG›T9px’F1s’Vi3vŽr˜’F“wuwrdPŽ“fv–CFpiƒC31ƒ“ŽŽ8r9Š‹HTRpdRKuXYŽT‹QMŠŽv–m1–OuM8Žv‹‡38UG•v–pYVr’Xi•uUG•v–pYVrŒ’4iTXG„FXr˜TF“XpFxƒ“ŽŽ8r˜™“w“3rƒ“–M8Vp3uŽpw“xGPƒ0Fr8Suiƒh–3YƒTF„„CpMVxw–Gƒ“V–Sv3r4Š9px’F1s’VŒM’ŽrYVr’F1s’Vi3vƒ1vu‹“w“F1’–VilFƒ1‹Pir–PrH™FP+v3r4pƒxS’X“PC‡fv–p41–xw–Gƒ“V–M’ŽrYVr’F1s’Vi3vƒGvp‹“’Urs’‡Œ„8–1m™ƒ–pFGu“Vx8hszT‹sw1ŽRH™–sz8rp˜™“w“3rƒ’ViV8rYTƒx–31CVSFC1ƒTiQ“xƒ“Ž„8CGvp–x–KFiszv‡“hvVr’F1s’Vi3v–p˜Šixx’FRP4ƒ8S“TVxŒ–4“ƒ’ŽmlUCpmpVpx’F1s’Vi3v–pYVr’F1s“ŽKvVG›P‹p0’34™F1l9GzPi1f““P’Vi0–rGH™FŒhvFS•–V9S–i’„1VK8ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVrŒ–R4TUƒhv–Š‡T‹“S’ƒr“VSm8VGvŠ‹Œp‹RGChiM8ƒŠSu‡xUŽr5™–ixU9pYuŽ“ŒuY•–ŽmM’ŽrYVr’F1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’4ru–i3v–pYVr’F1GC‡r+8hpv™Fpw›Xx•’‡Œ„–Gv8ƒ‡‹Pwps’Ž“–91‹™F“wTwCu™R0v‡pY›CY–Pw1•Fwp•v–pYVr’F1s’Vi3v–pYŽpKC4YƒF9x‡v–Gv™F“XCU1u–i3v–pYVr’F1–FR3v–pYVr’F1sv9xm9GF™Fsx’‡CMGfFr“hvVr’F1svY•’ŽrYVr’X•uFR•v–pYVr’XisU‡Šœ1XCXvX“‡CVs0UŽiVTMCXp5CC’FR3v–pYVrTŽ1“v9sz8Ž‡‹19r–31CVSFC1ƒT9rŒU4Y4TF‡F3r9TwC„C‹SmvŽxmuƒr8T‹KsP9Ks’Vi3v–pYŠ–ri’3ruFiŒ8ŽVV‡rK›Xd“‡z8r9TFrH“‹xŠ˜R+14C–T‹V‡pUY4Trmph1SUUCG–MQŽUipmpFR84CU8‡83rpFsxpCPHŽQ‡TV1Ž’ŽrYVr’F1•u–sY91z™FŒhwxs“C8VFUsF1Ž“wTwdu–“„T9x0TMŒŽ•Ž‡xŠwmu1TwsU‹‡U‹xl14ŒTF1G›9Ks’Vi3v–pYŠ–Kx›9Ks’Vi3v–G˜PCrK™wY™–sKiŠ‡u“wTwdu–sf9ŠS1‡i8’31•’‡sMFC1›ŠrrX‹•–FR3v–pYŽCMTŽ1s’Vi3v–pYVr–4Yrvii3–ipYuŽ“wuwY4™UolFC1vuCQhURuCMGhvVp4‡rXP‹1uTUrSFUsC1‹Ph–34’Vi0U‹rv1‡rXU3sCŽ“mv‡“hvVr’F1s’Vi3v–p˜Šixx’FRuChiM9GlTVxŒ–4“ƒ’ŽK„X1+Vr’F1s’Vi3v–pYVr’3ruFiŒ8ŽVVŽ“Œv4iuCwp•v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi391z™FŒh8Ž1dTC8hv–CFpiƒC31ƒ“ŽŽ8rzŠ‹s8’3pdPrsmvVpspVrvXps’‡Œ„–G“Š9K–ŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–Rx1ŽŠluUiV™–s–FrGHPiXUu–i3v–pYVKx’ƒi4“VSFCŠ„VxŒ’GP3“zF4sFPC3rƒTFOFrp˜™“Œv3YdTFp3pFsCU–‡–Ž/‡FXr‹pCxUƒ„l8FlUŽ–Mu9RUpM“‡8FpOC1•TŽ–l›‹x5–KxH‡1KM–l›‹‡x‹xdP4Y‡91F1CƒC3Cƒ’hCV8rPœ1Fpw™iuP‡U‹‡‹urƒ›UidTrsfCŠ‡uƒKPXu“‡hU‹K‹urƒ›UidTrs˜iGvT‡xXpUYGCVSz9ŠS™C–C3rƒTFOFrpTŽRGuS„Uws+ŠVr’TM“dŽŠU1l14ŒT‡+C‹‡0p–i3CUsF™F“KT‹xuvmœuƒRX–wY‡CŽKm1CPVVRUpwi‡CV‡U‡1ruvKr8FG5CCU‡PluvKGFXŒlCŽ‡31FirTƒRx1X‡CŽKzH‡PVuXCXUŽœl8FpU‡ŠŽT9Rx13Yr8CrŽ1FCl1XCxF‡‡8–0HŽipuFCKCXs‡–hrz1FiŠdKG™FRr8FpxFi13CruMC‡HhGOU‡1’ŠdKUpMYr–hG+UŽiVŠ9RX’XwU3d–hCz8‡v™FŒT‹KPTƒœ‡8hpvT‹s8C3YP™UC–CG›PixXPCUCƒSm8ŽSuŠiƒC–Ks’Vi3v–pYŠ–ri’31F9xz8rpYu‡rXU4YGChr‡v–G›P‹pKTwCu™–“KT4C9TFmVPŽKŽF3xmuVƒhT3oM“wŽvXxmŠVŒTF‡••ŽKŽ8–“mTƒKz’sK–3rdPl8r1‹1FiXF4P‡“„u“fTws„ŠK‡FFS0TFR“vVr’F1s’Viv–C˜™Cx8–4i4TU“3FFVS1swCGdu–“Ku–x9T‹r„•ŽRŽpC“mTU–‡P‹p0C„MpMrppFiU™P–Ž„ŽU˜KCpCx‡CxK“3p4PrC•v–pYVr’Xis“–Œ„8–GH1’hUF1vF‹GOFrG˜P‹iX›XCsUŽ‡CTFCx13Œl8–KKH‡1Œ1XCX›‹1‡Ch“‡U‡P+TŽCG’3sMTŽ1s’Vi3v–p+Š–MTŽ1s’Vi38VGFuFswT‹xs“‡z8‡›P‹iX›XCsv9œ„FCGHPi–C3rƒTFOFrp3uŽpw“xGPƒ0Fr8S™rx8v4sGCVSm–ip4Tƒ’FKCVœ„8CŠS1CYU8ŽS•–FR3v–pYŽCMTŽ1s’Vi3v–pYVr–31CVSFC1ƒTiQhU4Trx„FUsC‡YU’FK4“VO8Us‹TrxF›XxuF9z8C1›TiY–P‹SH™4G0v3x+TƒrPXCs’Žp‡vƒG˜uiƒ1‹GuPr8hsF™F“KT‹xuCwp•v–pYVr’F1s’VilFC1›P‹iX›XCs“Y3vƒ1‹u“wTwdu4oSv3r4•VxS8hH™–iVFCpYTƒx–GP‡s„84ŒVpVpx’F1s’Vi3v–pYVxŒ–4“ƒ’V9Sv–pvP‹iwTwxPCCzFƒ1HPu‹d“M1+v3r˜u‹sU’3xƒ“VS9G›T‹p0F3YPrC3v3ƒVuŽpw“xGPƒ0Fr8S™rx8v4sGCVSmU‹rvuiƒh–3YdP4“„UM1+Vr’F1s’Vi3v–1mT–ru‹xdP‡‡9p3uŽ“ŒuY•C“œv‡GhvVr’F1s’Vi3v–pYVr’F1GC‡r+8hpv™Fpw›Xx•’‡Œ„–Gv8ƒ‡FPwps’Ž“‹8ŽSH1px8MYs“oS–i“YŠ‹CMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYŽ“wuwrdPŽp38‡FPVriC4“PrM91m1sxuwYdF9sh84svT9KvU1s’Vrhv–pvP‹CŒ–XY•Cwp•v–pYVr’F1s’Vi3v–pYŽ“TŽ1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’3YuuFGf9GH1ŽŒhUFRHviŒV9h1‡GU1Ž1HP–œ„FCGHP‹iXpFSsv9Sm8ŽSuŠiƒCUs“F‡91F1F“8MYs“oS–i“YŠ‹CMTŽ1s’Vi3v–pYVr’F1s’VsSFrGvPFpKp‹1ƒv9zFr“hvVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYŽpKC4YƒF9x‡v–1uu‹sŒU51ŽR3v–pYŽ“TVKs’Vi3v–PœŠ–K3TŽ1s’Vi3v–p+hC“ŽP‡ŠUsxv–›T‹p0F3YPrC•v–pYVr’Xis“–sMFCGHu‹sU’FK4“VO8Us‹TrxF›XxuF9z8C1›T9rŒU4Y4TF‡F3r9TwC„C‹SmvŽxmuƒr8T‹KsPw8‡Š˜K“pU1‡“UCP1UŒ‡Šwr›pCru9px’F1s’Vi3vŽr˜’Fpw“3rChY3vƒ1‹u“wTwdu–sf9GHŠ‹sK8ŽŠ‡Š˜K“pXY5U4CPPP‡Fƒp›pUr1hŠM™–V‡8ƒpœpXYx14CPPŠ‡F3r+–CŠ‡uŽpK›XYu“hiz8‡mTCx8U4oŽFFCppF9Ž8UCPT–z‡pXii’ŽrYVr’F1•u–sY8Ž‡FP‹“8v3Cs“VxŽ84sœTirXp‹Š‡TŽr“pCr4PH‡–‡F3Cr9GHPCxrHhGOU‡1lŠŽCxPwYruvRmU‡1dT‡uu‹sŒUu–i3v–pYVKx’ƒiƒ“ŽGS84pƒ™ƒriC4“PrM91m1sx“wYmvS+Š48+TFr„1zpMsm1ƒrPTwCPuKŽpƒGKŽ9œvVr’F1s’VivŽƒœvVr’F1sv9ŒFF‡œŠirS’‡ƒChCO91m1sx’3xƒ“hrMCUsF™F“KT‹xu–Ž1l8V1‹u9“SuC4rfFrGHPiXU’–Žp0U9pYu‡rXU4YGChr‡–ip4TƒK“TŽ1s’Vi3X1+Vr’F1s’Vi3v–pv1‡rXU3sCŽ“mFp›T‹p0F3YPrC3–ipYuŽpw“xGPƒ0Fr8S™rx8v4sGCVSm–i’„Tƒxf›‹SH™R0v–P1–r8MCHv9szFUsVuizC4PrS‹‡murx–ŠVKs’Vi3v–pYVr’FKCVœ„8CŠS1–r9P‹1H“VO91m1sOPrH™FP+v3r4pƒxS’X“–Vi0U‹rvuiƒh–3YdP4’M’ŽrYVr’F1s’Vi3vƒGvp‹“’Urs’‡Œ„8–1m™ƒ–pFGu“Vx8hszT‹sw1ŽRH™–sz8rp˜™“w›X14PrS‹‡murxU’FSPuCsMFC1›ŠrrX‹8PVSm8ŽSuŠiƒCXCH“VO91m1sxuh1u–i3v–pYVr’F1GC‡r3vV1›1“XpUY•’‡Œ„–G“ŠiYO“XYr1ŽR3v–pYVr’F1s’Vi3v–p˜Šixxuwxƒv9xM84ppTVxŒ–4“ƒ“3pœFipMVz„C3r4TUrSv3rl‡Y–Prp’Ž„M’ŽrYVr’F1s’Vi3v–pYVr’F1s’VŒ„8–GH1“S’3CuF‹p3–rGzurx8’4YGChr‡vV1m1‹pw™wu“‡C+vFxhVrx1Ž1HviŒV9plŠ9RMTŽ1s’Vi3v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi3ri+Vr’F1s’Vi3v–1mT–KŒU4Y4TƒsŽ8Mr3uŽ“ŒuYX™ƒsƒU9pYTr–h–34v9s„8‡4ŽPC3rƒTFOFr“+‡pXpUYuCh–„v3rl‡Y–Prp’Ž„M’ŽrYVr’F1s’Vi3v–pYVrŒvƒviS8r˜P‹p0C51ŽR3v–pYVr’F1svY•v–pYVr’F1s’VsSFrGvPFpKp‹1uT–h8hsCpVpx’F1s’VŒS’Ž1+Vr’F1P™FR’ŽrYVr’F1•u–“mŠ9ƒhT‹rP8RŠ41mŠ9rŠ‹QV™SKT‡“KT‹RuM–M8xU9“0T98TŽGH“–Ks’Vi3v–pYŠ–ri’31F9xz8rpYuŽpKC3“dP‡smFsuŠ‹swCF14P‡sS8CŠ‡Tƒr5uXCŽ1C1lu˜Kr8FG58C1zH‡PM1wCxPMŒlCKz’FR3v–pYVrTŽ1“v9sz8Ž‡‹19r–3pdPƒSz8ƒ8SuŽi8vF14P‡sS8CŠ‡Tƒr5CCVFriuŽCUp‹r‡FizUŽCdŠ3CX›FrHhGOU‡1’MCGC3p5C‡YH‡PMŠ‹Cr8Ž1rC„vmœuƒRKpŽ‡5uXC„U‡1luCXvX“‡CVrhU‡ŠSuKXvxrFs1CŠST‹–l›‹x5CŽ‡31FirTƒRX8MiŒwYdTCsŽp’Š‹QV™KŽvV“mVfT‹rHTK‡vUp+hŠhTF‡••ŽS+p9G0TUCOT‡+C‹‡+U‹S0TU8MTwuFwŽvFxKu9ƒ+TF1HPŽ‡KvR+u1’TwpHv‹R„TVGl1–r9uMC•Š‡mTŽl1U1dTwYPT3ŽvFSŽ1ƒrfT‹K•8xvSl1ƒxTFrFwYmvK•v–pYVr’Xis“–sSFrGvPFpKp‹14P‡sS8CŠ‡Tƒr58–rlU‡1•TdKx•Ž5CŽs01C1VT–RX’Mi5CŽpUŽCC1‹Cx“FKrT–GOUŽCGu9RGCŽQl–h1V1FƒhŠdKXHŽG5HhGOU‡1lŠŽCxPwYr8–KKH‡1Œ1XCX›‹1‡Ch“‡U‡P+TŽCG’3sMTŽ1s’Vi3v–p+‡iŒ–R4TUƒh8Mr˜“CwU4vis„84ŒVhu–‡zŽvKŽpFR84CU8‡83rpFsxpCPHŽQ‡TV1Ž’ŽrYVr’F1•uFRŽ’ŽrYVr’31ƒCVxh8C1p‡x0C3CP‡s„84ŒVŽpŒC3pd“Cx„8ƒ1CTVxŒvdChƒ„Fr8STFiX™‹P’Vil8ƒŠSurrX™‹u“ŽS–ip4TƒK“TŽ1s’Vi3X1+Vr’F1s’Vi3v–pvusX–F1’–Vi0FC1vu–rPXxs’Žp‡vƒGvTŽi8UX“’TrlFrGuŠiƒCXCH™–sMi1œŠVr8MCHv9xm8rŠSPixF›F‡GCMGmU‹r4VxSp‹Kd“hrOFC1œrxwTwr51ŽR3v–pYVr’F1s“‡8VFr1pTVxwU3“u’M13vƒŠSPF“Œ’4iƒ’M13vƒGHT‹“ŒC3rdTƒFCGsŠ9RMTŽ1s’Vi3v–pYVrwT‹‡s’Ž1l8Ž‡FP‹“8v3C8P‡xz8Žri›CY–’XYr1ŽR3v–pYVr’F1s’Vi3v–p˜Šixx’FRuChiM9GlTVxw›Uiƒv9Œ9plŠ‹CMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYŽ“wuwrdPŽp38‡FPVriC4“PrM91m1sxŽœŽvmhpXi5’UC„HŽ„‡Š‹rŽpCxTUCGpƒzŽvVR‹FC1vuUCuvVV‡84s–pCrKU4PH‡9ŽvV1pC–Cz–U–‡Š––‡pCp+pFRxPhC„uX8‡FƒpKpCrXPhC„™–z‡TŽ‡0pƒKwUCx8u‹H‡1v1CUpMY5FizUŽiƒKKFK5HhG0™Fp„UM1+Vr’F1s’Vi3v–pYVr’4ru–i3v–pYVr’F1s’Vi3v–1FŠŽPC41u–i3v–pYVr’F1s’Vi3v–pYVr’4YGv9xŽwr˜1Cx88Ž1vF‹GOFrG˜P‹iX›XC•“ŽV8V1œ1rxwCFRsu3p3vFrMVxw›Uiƒv9Œ9plŠ9RMTŽ1s’Vi3v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi3ri+1ƒS’F1s’Vi3v–pYŽiXFFR4P‡sS8VŠS™ƒK–3ƒFisMiGv8ƒ‡‹Pwps’Ž“K8C1œT9rŒ’4id“MGmFƒpMV‡’3xGPM8V1FuVx8MYs““Mv‡GhvVr’F1s’Vi3v–p˜Šixx’FRH“MGŽFUs‹Š‡Q–3Y4u4oSv3r4Š‹CMTŽ1s’Vi3v–pYVr’F1s’Vil8ƒŠSurrX™‹u“ŽSv–’„‡Q›–CUCƒxFwxhvVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVxw™wPƒhFsvŠ‹px’Urs“Ž‡Fs‹™FpK“4C•v9œFFS›P‹pxŽKd“hrOFC1œrxwTwrP’ViVUCplŠ‡1S8MH™X10F9MTrGUuŽ1’™–il8ƒŠSurrX™‹u“ŽSv–“+Vxw™wPƒhFsvŠ‹pxp–CUCƒx‹–Uiv–iCmT‹CPi“–CH’ri›Cp51ŽR3v–pYVr’F1s’‡sh84s›u‹s‹›F‡GCMGmv–’„Vxw™wPƒhFsvŠ‹px’XCs“Vxz8hsF1CrXPF•’‡sSFrŠ1“wCuTFhFrplpVpx’F1s’Vi3v–pYŽpKC4YƒF9x‡v–pvŠŽŒUGd“4rK8C1œT9RMTMP™–i3v–pYVr’F1–FRŽUwrYVr’F1s’Vi391z™FŒh8Ž1dTC8hv–CFpiƒC31ƒ“ŽŽ8rzŠ‹s8’3pdPrsmvVpspVrvXps’‡sŽiGv1Ž“8–XY•Cwp•v–pYVrŒP9Ku–i3v–pY1ƒKxTVKs’Vi3v–pYŠ–r5CŽKOC1s1wCrCX“ru–ClF‡ŒuƒRr8FG58C1zH‡PM1wCXvXp5uXCŽ1C1luw1+Vr’F1s’ŽR3––G˜u‹pK“3“s’‡sh84s›u‹s‹›F‡GCMGmv–G›P‹pKTwCu™–“0T98TŽGHv‹K‡vXs0TFR–TF+K‡pŽs+18+Tw+––Ks’Vi3v–pYŠ–ri’31F9xz8rpYuŽpKC3“dP‡smFsvŠ‹px’3xƒv9x„8‡4h•pdm‡8CpŒprrrUU–‡Š––‡pXC‡pFŒCƒpx’F1s’Vi3vŽr˜’FpKC4YƒF9x‡v–G›P‹pKTwCu™–“Ku–x9T‹r„•ŽRŽpC“mTU–MTwsuu3ŠFxmTƒKOTPF‹RzvƒG„u“fT‡+C‹‡mTŽl1U1dTM’Ž•ŽŽT‡“Ž1ƒrfTwYPv‹RVv‡GKuXYŽT‹QMŠŽv–m1–OuM8Žv‹‡38UG•v–pYVr’Xis“–Œ„8–GH1’hUF1vF‹GOFrG˜P‹iX›XCsUŽ‡CTFCx13Œl8–KKH‡1Œ1XCX›‹1‡Ch“‡U‡P+TŽCG’3sMTŽ1s’Vi3v–p+Š–MTŽ1s’Vi38VGFuFswT‹xs“‡z8‡›P‹iX›XCsv9Œ8hsz“ŽiX™‹•’‡sh84s›u‹s‹›F‡GCMGmU9pYuŽpKC3“dP‡smFsvŠ‹pxuVKs’Vi3v–GhvVr’F1s’Vi3v–pYu‡ƒPFKs“Y3v4s‹u‡rx’X“4™–i0U‹rvP‹iwTwxPCCFƒ1FPiXUPuFp38VGF™i’FSPuCsh84s›u‹s‹›F‡GCMGmU‹r4VxSp‹K4TCV84pvTiQ–3Y4u3p•v–pYVr’F1s’Vsm–1FuƒK–xdC‡ihv–pv1“8–31ƒFiihv–pv™Cx8–4i4TUC‹‡‹™–K–ŠVKs’Vi3v–pYVr’3Yuu–i+vƒGHT‹“ŒC3rdTƒFCGsuiY–Pw1•Fwp•v–pYVr’F1s’Vi3v–pYŽiXFF1•“‡V8VGvp–K–3ƒFisMiG“Š9K8ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVrŒ–R4TUƒhv–Š‡T‹“S’ƒr“VSm8VGvŠ‹Œp‹RHHŽrŽ1˜KGu158F„Fi4ŠƒRX8Mp58C1zH‡PM1wCGFXŒlC‡i„1C1VT–RX8Mi5HhGOUŽisTwCx’FGruXCŽ1C1lu˜KKv‹x5FizUŽCdŠ3CX›Fr8CrH‡1“ŠwCX1‹‡5CŽpU‡PMŠ‹CX–‹r‡8CrH‡1“ŠwCGUwYr8FpxFr‡1dKKFws‡8F“3HŽ‡uuVp4Š9RMTŽ1s’Vi3v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi3v–pYVrwC3p4Pr8M’ŽrYVr’F1s’Vi3v–pYVr’F1s’VŒ„8–GH1“S’3CuF‹p3–rGzurx8’4YGChr‡vV1m1‹pw™wu“‡C+vFxhVrx1Ž1H“hƒ9G˜PF“uMY51ŽR3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYŽ“TŽ1s’Vi3v–pYVrwT‹‡•v9œ„8ŽS˜1pSŽKdP‡8„8VGFPi1f’“P’Vi0F‡mŠ‡xU’31ƒF9S+Fr1“ŠVr9’F14P3“„8VG˜Tixp‹S•–V9lU–pmpVpx’F1s’Vi3v–pYVr’F1s’‡sSFrŠ1“wCu“ŽSv–’„ŽPhCr4P‡sSvVpv™CxXPXƒ“‡Fƒ1m™–’X“p–ŽmS–ip41ƒxS’vRs’‡sSFrŠ1“wCu“ŽSv–“+VxŒvdChƒ„Fr8SuŽi8vXCH™UG0UM1+Vr’F1s’Vi3v–pYVr’FK4TCV84pvTiQF3Yd“‡C3–ipYuŽpKC3“dP‡smFsvŠ‹px’XCs“Vxz8hsF1CrXPF•’‡sh84s›u‹s‹›F‡GCMGmv‡“hvVr’F1s’Vi3v–pYVr’F14TC8„iGH1–r–3ruChiŽ91FrxKTwpuCwp•v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi391z™FŒh8Ž1dTC8hv–CFpiƒC31ƒ“ŽŽ8rzŠ‹s8’3pdPrsmvVpspVrvXps’‡sŽiGv1Ž“8–XY•Cwp•v–pYVrŒP9Ku–i3v–pY1ƒKxTVKs’Vi3v–pYŠ–r5CVr+UŽ‡uŠ9Rx1X‡CŽKzHŽ‡ŒuƒRr8FG58C1zH‡PM1‹1+Vr’F1s’ŽR3––G˜u‹pK“3“s’‡sSFrŠ1“wCuTFhFrp˜™“Œv3YdTFp3pƒmŽHhCG–VQ‡pXiipXYGvCP1UŒŽU‹CŽpFŒŽ“–px’F1s’Vi3vŽr˜’FpKC4YƒF9x‡v–1H1Œ™‹Ch“3pFRx–UCŠF8ŽU˜KCpCx‡F“Œv4iuvmœuƒRXuMpruUY„Fi•TvKXvwC‡ChG31CŠV1–RU•ŽRr8–s1ŽR3v–pYVrTŽ1“vis+8ŽVSPŽpS’ƒr“VSm8VGvŠ‹Œp‹ŠŽFrpupƒml14C+ŠFŒ‡FF–ŽpFsS’hCduU’‡U˜KzpFRw1ƒpx’F1s’Vi3vŽr+1ƒpx’F1s’VsMi1HŠŽiXUF1uTr‡FUpvŠ‹Œp‹14TCV84puTisKTwpu–Ž1l8Ž‡F1‹Œh–8Prx„8ƒ1CŠ9px’F1s’VŒM’ŽrYVr’F1s’Vi3vƒGvTŽi8UX“’T–lFF„S™iwC3pd’Ž10v–GH19r8MCHv9xm8rŠSPixF›F‡GCMGmv‡“hvVr’F1s’Vi3v–p˜™Cx8–4i4TU“39GHPCx–ŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–RxUM’lC‡Ym1Fr‡13CXuŽQlChrlH‡1HuCX™‹zlChCmFiHVRG8Žrr8–R„H‡PM1wCU•ŽRr8–s1ŽR3v–pYVrTŽ1“v9xm9GF™Fsx’3xƒv9x„8‡4hPH‡–‡F3CrCV–UUC„8–Q‡Š–1O’ŽrYVr’F1•u–sY91z™FŒhwxs“C8VFUsF1Ž“wTwdu–“„T9x0TMŒŽ•Ž‡xŠwmu1TwsU‹‡U‹xl14ŒTF1G›9Ks’Vi3v–pYŠ–Kx›9Ks’Vi3v–G˜PCrK™wY™–sKiŠ‡u“wTwdu–Œ8CƒŠixw‹ƒv9‡+v‡i+Vr’F1r1ŽR3v–pYVr’F1s’‡sK8C1œT‹sK“3“u–V9Sv–pƒTFŒhvuPr8„FpFŠiQ–3P‡VFrŠ‡P90uw“d’ŽPM’ŽrYVr’F1s’Vi3vƒG˜u‹“wŽ1’–Vi0Up›u‡ƒ“3ru’hG0U‹rvTFiX™‹dT–VFr“hvVr’F1s’Vi3v–pYuŽPh–G4TrsC8CŠT9r9P‹1GCh–„‹‡‹ŠVKwPXYPVxŽ91m1ixUuY4Trmv‡p+™9‡9’X1•Cwp•v–pYVr’F1s’Vsf8ƒ1FT‹pMG•Cwp•v–pYVr’F1s’Vsl83r˜pVpx’F1s’Vi3v–pYVr’F1s’‡Œ„–G“‡YU’FKƒ“ŽG„8Mƒ„H‡rX–r8PVS+Fr1œŠVKiGCV89ŠS1ir8–34u–sliŠ1Vr8MCHv9sz913Š9RMTŽ1s’Vi3v–pYVr’F1s’Vs„Fr3uixXPX1ƒv‹K+vƒGvp‹“uŽ1HuCr38hpv™Fpw›Xx•’‡Œ„–Gv8ƒ‡‹Pwps’Ž“F–‡p˜TŽiXC3rPGz8ŽSl‡xŒC3“4“‡lv–Gv1ƒRx’FSPuCsMFCGvTVKU’FG’CYMv‡GhvVr’F1s’Vi3v–pYVr’F1s’Vi3v–1mT–ruwxƒv9xM84ppTŽiXPX1d“hrlFrp3u–RS’FrP’Vil9GzP9KU1Ž1HP4–8ƒ1MŽpK›Xƒ’Vs‡84svT9rŒvƒviS8‡FuVrwv4Cs“r„Cƒ1F™“i“4iƒ“hrVFCGvŠ‹Œp–p4TFlF4sCTƒKU’FG’CY3F‡‹ŠŽPCXYr1ŽR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pvP‹CŒ–F1’–VsKFC1œ™rx–ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’F1s’Vi3v–pYVrwC3p4PrC3X1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrŒ–R4TUƒhv–Š‡T‹“S’ƒr“VSm8VGvŠ‹Œp‹RHP‡„FCGFP‹ŒPFGƒ“hrSv–1vPFs8’F1uF9xS84pspƒr8Ž1Pu–s„8rG˜ŠŽŒ–•’VƒMv–psŠVr–4Yrvii„v‡“hvVr’F1s’Vi3v–pYVr’F1s’Vi3v–Q„vVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–p˜Šixx’FRHviŒV9pY›CY–P‹1uT–h8hsCŠ9rŒŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVr›w8‡p4sHpFŒŽ“ƒ‡rFSl1C1wuCGu158F„–FR3v–pYVr’F1s’Vi3v–pYVr’F1ƒF9ShFr1F1VK9“X1p“9iMU–“YŠ9RMTŽ1s’Vi3v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi3v–pYVr–xƒF9xSFrŠ‡PiwTw“u–V9Sv–1m1F“ŒFGd’ŽGV8C1›™FŒh–3YdC‡C+9GHPCxUuŽ1•u–iœU–“Y1VK–ŠVKs’Vi3v–pYVr’4ru–i3v–pYVr’F1ƒPG„8ƒ1CTVxŒ–4“ƒ’V9S–i’„‡xK“3p4PrC3vrVK–xƒF9xSFrŠ‡PiwTw“u–hYl8hpvu‹p0–rCGChim–9“1V‡9’X1•–ŽmM’ŽrYVr’F1s’Vi38hsœTix8’FRpuFmM’ŽrYVr’F1s’Vi39GHp–rŒŠVKs’Vi3v–pYVr’F1s’Vi3vƒGvTŽi8UX“’TƒŒ8ƒ1œ“ŽiX™‹•’‡sMFCGvTVK–ŠVKs’Vi3v–pYVr’4ru–i3v–pYVr’F1Pƒ8„FUs3VKiC4“PrM91m1sx’FKuF‹GOFrG˜P‹iX›XC•Fwp•v–pYVr’F1s’Vi3v–pYVxwPXxu™–9Sv–pvT‹CwU4vis„84ŒV1iYK‹ƒ“Uim8hp›uizCFR•Cwp•v–pYVr’F1s’Vi3v–pYŽiXFF1•v9œ„8ŽS˜1pSŽKdF9S0U9pYTrxw›F4™–s‡84p“‡x8uwY4P‡i0v‡’V1VK8ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVrŒ–R4TUƒhv–Š‡T‹“S’ƒr“VSm8VGvŠ‹Œp‹RHHŽr51˜KX–‹‡uXCŽ1C1lu˜KX›FmlCVxOC1œudKXpFr8–R„H‡PM1wCU•ŽRr8–sH‡1lŠŽCxPwYrHhGOU‡PSTVRX–wŒlu–“ŽF‡4VRxTF1r–R1FiC1FCx1X‡CŽKzH‡PVŠrPS™rxwUG4TC“0TU8MTwuF‹SKT‡“+Š41ŽT‹G„T‡0FCY„TCx913s™3Y0v–“+Š‹R‹™FŒ›Uo‡Šs9prxK–UŠM™–V‡FvKpƒr“C„8–Q‡p3C3ph1S8–xSuh1u–i3v–pYVr’F1s’Vi3v–Q„vVr’F1s’Vi3v–p˜›–px›ws’Vi3v–pYVr’FKƒ“ŽG„8Mƒ„HŽpKC3“dP‡xm–‡mŠ‡xUŽK4“V8„8–plpVpx’F1s’Vi3v–pYVxwU3dTrsm8S“‡YU’‡GCMGmFsƒT‹“‹›FxdP4–„FrŠ‡P‹pSŽKuTFhFrŠ‡u‹sXCXY51ŽR3v–pYVr’F1svi‡8ƒ1m1FiSŽKuTFhFrŠ‡u‹sXCXY51ŽR3v–pYVr’F1sv9xm9GF™Fsx’FKP4r‡91F1F“9ŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–RGMCr8–S1FiXu˜KG8Ms5u–RVH‡1’TwCx1X‡CŽKzH‡ŠSuKXvxrCMGOH‡Š‡T‹CGv158FpxFr•MCr’MC“TŽ1s’Vi3v–p+‡iŒ’G4T–Vv–pvPix8uYsv9œ„8Ž‡m1CxS“‹‡mTŽKTƒKfTwsuSvŽsl1–svVr’F1s’Viv–C˜1‡r8vGd–Vil8ƒ1mŠrxU’rdP4rhFr1‹1–r58CrH‡1“ŠwCGTŽRrXxx1FiŠ‹Cx1R‡HhGOUŽVMT–Rx1XY5–h“‡TCxz8ƒG›TŠM™–V‡pVmlpCrr“hC„HŽ„ŽvKx’ŽrYVr’F1•u–sY8Ž‡FP‹“8v3Cs“VS8Ž‡‹p–r5uvRmU‡1dT3CXUFGrC‡iHŽr•MCr’MCrCM‡FrœTŽCr8FG58ChUŽ–Mu9i+Vr’F1s’ŽR3––GvTŽpK›Up4™–s‹–1›T‹pŒ–3YdP4“3prxUF4•HM8‡TMidpCrrp4Cd™–P‡8ƒVp–„luC+“Mu–i3v–pYVKxTMu–i3v–p˜1Ž“Xv3pGCV‡3FSF1Cƒh–3YdP4“3F4sFPi“K›FKuF9SCvT‹CŒ–FRHvism–G“ŠVr–3pGCM“m–i1uu‹sŒU•–FR3v–pYŽCMTŽ1s’Vi3v–pYVrwT‹‡s’ŽGKFC1œ™rxUT1u–i3v–pYVr’F1s’Vi3v–Pœ14CPu–œ‡TŽ‡0pƒKwUUCPmŽvV1pp–‡u4–Ž’VŒMpMrppCƒlŠUC„uX8‡U‹ƒŽp–“hC„8U–‡U8+p–‡u4–Ž’VŒ‡TK“pUUpƒpx’F1s’Vi3v–pYVr’F1sv9xm9GF™Fsx’sdTC8hv–GmŠ‹sŒC31Gv9sFC1vuCQC3puChim8S“TVxŒ–rviihvƒGvTŽi8UXY8Cwp•v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi38Ž‡FP‹“8v3Cs’‡Œ„8–1m™ƒ–pFuPr8„C‹VSu‡x8UƒprCXG„8UsF’“Œ–3r•’Ž’„FrGzP9xS1Ž1Hvism–G“ŠVr–3pGCM“mv‡“hvVr’F1svY•’ŽrYVr’X•uFR•v–pYVr’XisUŽi31FCGU3s‡u–K31FC1FCr8FG5CV1zC1‡1FCG–‹zluvRhUŽr51˜KX–‹‡uXCŽ1C1lu˜KX›FmlCVxOC1œudKXpFr8–x3UŽi4uFCxvŽ1‡–p‡–FR3v–pYVrTŽ1“v9sz8Ž‡‹19r–xdP4–„FrŠ‡PiswC3x™–sf9GHŠ‹sK8ŽŠ‡FFi‹pF9ŽpUC+H‡oŽU˜KM’ŽrYVr’F1•u–sY8V1‹™CrXP‹1H“MG„8UsC‡rK›Xd“‡z8r9TF‡••ŽlvŽsKŠ–KŒT3PVŠ‡0prG+Š4P13s™3Y‡pFx+Š3i–uMCPŠ‹‡CMGfF–l›‹x5XrŽ1C1ŒuwCG3YruX+ŽR3v–pYVrTŽ1“v9xm9GF™Fsx’G4TƒxzCp9TM8‡C‹KpU1muƒr8T‹K•1RxTV0Ms0TwŒMTRh8–G0TFR–TFd“‹S‡pii•v–pYVr’Xis“–Œ„8–GH1’hUF1vF‹GOFrG˜P‹iX›XCsUŽ‡CTFCx13Œl8–KKH‡1Œ1XCX›‹1‡Ch“‡U‡P+TŽCG’3sMTŽ1s’Vi3v–p+Š–MTŽ1s’Vi38VGFuFswT‹xs“‡z8‡›P‹iX›XCs“Ž“m9–‡1rxwC3x“T984Œ‡PixXpUYv“‡fFXr3u‡ƒ›XCƒ“‡‡9CvT‹PUXps’‡sh8C1VTiYXFGdv9Smv‡i+Vr’F1r1ŽR3v–pYVr’F1sv9xm9GF™Fsx’FKƒ“ŽG„8Mƒ„H‡Q‹ƒ“UCŽFƒ1F™ri0T9‡GCM“m–CGvP‹pxŽSP4r‡91F1F“PFKuF9SOv3rMVxwU3dTrsm8Sv“Cx8UxP’Vil8ƒ1mŠrxUuh1u–i3v–p˜›–p3TŽ1s’Vi3Uwr+Š–px’F1s’Vi3vŽr9TFRPT‡O8UCSFrG›1“8vxu–Vs„FƒRxUM’lC‡Ym1Fr‡13CXuŽQlChrlH‡1HuCX™‹zlChCmFiHVRG8Žrru–K31FC1Ci+Vr’F1s’ŽR3––G˜u‹pK“3“s’‡sSFrG›1“8vxuC4r„Fƒp˜™“Œv3YdTFp38Ž‡F™ŒhC3rPrCV8C1–TwpupŽ‡3vŽ0TFR–T‹1P1VKs’Vi3v–pYŠ–ri’3ruFiŒ8ŽVV‡r8v3rF‹K3pƒ„lCUCu1F–‡FXr‹pCxŠ4sŠ–P‡p9m‡pF9lpUP“ŽQ‡pXiipXYX1h–M1–Cu–i3v–pYVKx’ƒiƒ“ŽGS84pƒ™ƒriC4“PrM91m1sx“wYmvS+Š48+TFr„1zpMsm1ƒrPTwCPuKŽpƒGKŽ9œvVr’F1s’VivŽƒœvVr’F1sv9ŒFF‡œŠirS’‡ƒChCO91m1sx’SuFis584svT‹P„v4CCTCf84pF™CƒCƒxu’Ž1l8Ž‡F™ŒhC3rPr8C1“Š9px’F1s’VŒM’ŽrYVr’F1s’Vi38Ž‡FP‹“8v3Cs’‡Œ„8–1m™ƒ–pFuPr8„C‹VSu‡x8UƒprC–8„9GsTVzhv4P4ƒ8Ž‡›T9XT‹KH™X13vƒGHT‹P›Ui4T–SmFsmuVK–ŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–RGMCr8–S1FiŠdKX–XY‡C‡YH‡PMŠ‹CK’Frr–h“–ŽxmŠ410T‹ƒMpMY3vFSKuU0TFRFXo‡ŠsmpƒƒŽPhCH‡ŠŽvh8lpFiUvCdPr’‡FF‡›pFsw–CdTC8‡TŽ‡YpXYSv4sŠ–P‡p9m‡vVRX1XCrC‡x’ŽK•v–pYVr’Xis“–sMFCGHu‹sU’FKTUrŽ8ƒ1Fu‹sx’rdP4rhFr1‹1–rŒ–3rƒC‡G+TŽiOT3YPŠOpdR„Vr0uMC•PŽSKT‡“mŠ3s0T‹‡Gu3ŽvXGKFC1œ™rxruFGUŽCl1XCUp‹xrC‡YHŽ‡YuFCUpwsrFizU‡1‡1FCXF3iYTŽ1s’Vi3v–p+‡iŒvƒviS8r˜u‹p0vGr–V“+14C–T‹V‡pŽOvCGmuVKŽTŽr+U‹S3ŠSmŠ410TMpGv‹SKT‡“KT‹s9T3–V––Ks’Vi3v–pYŠ–ri’4YGv9xŽpp‡s8u‹xuF9Œ„8CŠS1–r5TCCKFrŽŠdKGvŽVlCVG‡1CŠœMCXpwC5–R+Fi˜Š31+Vr’F1s’ŽRUw1+Vr’F14vix8ƒ1muƒrwF4idT–œ„8CŠS1–rw‹ƒ“UCŽFƒ1F™ri0T9“G“‡O8Us‹uFswCFRH“VxŽ84sœTirXpwYu–i3v–p˜pVpx’F1s’Vi3v–pYŽpKC4YƒF9x‡v–pvP‹iwTwxPCCF4sFPi“K›FKuF9SCC‹P‹“ŒvFRHPƒS+Fr1›ŠrrXv3pu–Žphv–pvuFŒ›XpuCV‡–wrƒP‹p0CH™R0F‡‹ŠŽPCFS•Cwp•v–pYVrŒP9Ku–i3v–pY1ƒKxTVKs’Vi3v–pYŠ–r58F1‡Fi›Š3CGFXŒlC‡i„1CŠhŠMCrpŽzlT–ixCPVŠrpOTwŒMTxph1„Vr0TFƒŽT‡+FCr„pXoTsp4P‡FvKXpƒmŽHhCG–VQ‡84s–pCrKU4Cd“‡o‡8‡FpFRK’UC„™–zŽvXipU“•p–K5CMC‡C1uŠ–plvVr’F1s’Viv–C˜1‡r8vGd–VilFFVS1swCGdu–sx84ŒSŠ‡xX“3CsvisSi18TŽRGuS„Uwsm11PT3–V•MY3vFSl1–mhT‡+C‹ŠSmTFiO13s™‹‡CMGfFCxuwi5FK‡1FiSTŽCG8ŽrrT–ixCPVŠCr8FG5CMC‡C1uŠ–i+Vr’F1s’ŽR3––GHT‹“ŒC3rdu–sz8ŽSHu‹CU“‹RŽpC“mTU–MT‹xsF‹lvM+uFRPT1TpŽS+ŠŽiŒT‡+C‹‡m8ƒ“01U““vVr’F1s’Viv–C˜P‹iŒv3ƒPV‡3–rGzurx8’4YGChr‡v–RKCF‡ruXHŽi•TvKXvwC‡ChG31CŠV1–RU•ŽRr8–s1ŽR3v–pYVrTMiP1ŽR3v–pYŽpŒCrd“ŽOv–1uPFsKU4YGChr‡v–1ƒT‹“ipXu“‡f–FSm“‹iwCxGPrlvVpvuFŒ›XpuCV‡v‡i+Vr’F1r1ŽR3v–pYVr’F1sv9xm9GF™Fsx’FKƒ“ŽG„8Mƒ„H‡Q‹ƒ“UCŽFƒ1F™ri0T9sƒvisSvVpƒuiwCxGPrlv3rMVxwv3dP3GmFCŠV•Vzh–3rƒC‡C0UŽrƒTCrX™wxu–Žp„UM1+Vr’F1–FR•v–pYVr›wi•ŽR3v–pYVrTŽŠ‡Š–P‡pF/1UC„uX8‡FƒpKpCƒl14CP1F„‡p9m‡pCrrphC„P„ŽvU8hpCƒlCh•pdm‡8CpŒpFŒCCT–œ‡8ƒ1’pFsKC4C+T–9‡ŠwrHpƒr’h–VvhC•U‡1‡1FCXF3iuVKs’Vi3v–pYŠ–ri’31F9xz8rpYu‡rK›Xd“‡z8r˜uFŒ›XpuCV‡v–Gv™F“XF‹R+8Fx0Š9T‹zŽ•ŽS3ŠSmu1ŽT‡+C‹ŠSmTFiO13s™‹‡CMGfFCxuwi5FK‡1CPVuCX–wŒl–p‡C1Œ1vKr8FG5CMC‡C1uŠ–i+Vr’F1s’ŽR3––GHT‹“ŒC3rdu–sz8ŽSHu‹CU“‹RŽpC“mTU–MT‹xsF‹lvM+uFRPT1TpŽS+ŠŽiŒT‡+C‹‡m8ƒ“01U““vVr’F1s’Viv–C˜P‹iŒv3ƒPV‡3–rGzurx8’4YGChr‡v–RKCF‡ruXHŽi•TvKXvwC‡ChG31CŠV1–RU•ŽRr8–s1ŽR3v–pYVrTMiP1ŽR3v–pYŽpŒCrd“ŽOv–1uPFsKU4YGChr‡v–1ƒT‹“ipXu“‡f–FSm“‹swT‹xGPƒx8ƒ1CTVxwv3dP3GmFCŠVŠ9px’F1s’VŒM’ŽrYVr’F1s’Vi38Ž‡FP‹“8v3Cs’‡Œ„8–1m™ƒ–pFuPr8„C‹VSu‡x8UƒprC–8„9GsTVzU3pGCVSFC1HŠ‡xU8Mps’‡sx84ŒSŠ‡xX“3C’™F’„8ŽSFT9xfTŽSuT–h8hsCTƒK–ŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–RGMCr8–S1FiŠdKX–XY‡Chph1F–MudKX–XŒlCCUŽiƒŠ‹CxUM’lC‡Ym1Fr‡13CXuŽQlChrlH‡1HuCX™‹zlChCmFiHVRG8Žrru–K31FC1CpOTwsTK8F1„’ŽrYVr’F1•u–sY8V1‹™CrXP‹1H“VxŽ84sœTirXp‹1TUrŽ8ƒ1Fu‹sx’4Y4TrmpƒKwTh–Ž–h8‡8CSpU1‡–Cu’M8‡pCp+pUC“UCGp4–‡F‡+ph1SUCxK“3p4PrG+TŽiOT3YPŠ‡hŠ–GKTƒr0T‹K••ŽSmvŽx0TFR–TwsTK8F1•v–pYVr’Xis“–sSFrGvPFpKp‹1F9xSFCGlhPH‡–‡F3CrpCrS“4Cu’MŒŽvXipU“•pUCGHh–ŽU91zpUC“UC„CMŠ‡pMCi’ŽrYVr’F1•u–sY91z™FŒhwxs“C8VFUsF1Ž“wTwdu–“„T9x0TMŒŽ•Ž‡xŠwmu1TwsU‹‡U‹xl14ŒTF1G›9Ks’Vi3v–pYŠ–Kx›9Ks’Vi3v–G˜PCrK™wY™–sKiŠ‡u“wTwdu–s0FrGvUŽŒ–4P9z‡–rŠ‡uirK™‹u’Ž1lFFVS1swCGduFK•v–pYVrŒŠVKs’Vi3v–pYVr’3ruFiŒ8ŽVVVxŒ–RGF9‡V–‹„STrx8–ƒRdPrsm8hYHpCi8–4Y4uF10FrŠ‡uirK™‹u’Žphv–pvuFŒ›XpuCV‡–wrƒP‹p0CH™R0F‡‹ŠŽPCFS•Cwp•v–pYVrŒP9Ku–i3v–pY1ƒKxTVKs’Vi3v–pYŠ–r58F1‡Fi›Š3CGFXŒlC‡i„1C1’ŠdKUpMYru–sK1FCiŠwCGwYru–RVH‡1’TwCx1X‡CŽKzH‡ŠSuKXvxrCMGOH‡Š‡T‹CGv158FpxFr•MCr’MCUuŠSmTFi3Š9px’F1s’Vi3vŽr˜’Fpw“3rChY3vƒ1H1Œ™‹Ch“3FFVS1swCGdu–Œ„8ŽSFT•“Ž/‡prPŽpCƒl14s“Ž9‡pipKpUC“UCGp4–‡F‡+ph1SUCxK“3p4PrG+TŽiOT3YPŠK‡vUpmu48+TŽ1uŠSzvŽs0TFR–TwsTK8F1•v–pYVr’Xis“–sSFrGvPFpKp‹1F9xSFCGlhPH‡–‡F3CrpCrS“4Cu’MŒŽvXipU“•pUCGHh–ŽU91zpUC“UC„CMŠ‡pMCi’ŽrYVr’F1•u–sY91z™FŒhwxs“C8VFUsF1Ž“wTwdu–“„T9x0TMŒŽ•Ž‡xŠwmu1TwsU‹‡U‹xl14ŒTF1G›9Ks’Vi3v–pYŠ–Kx›9Ks’Vi3v–G˜PCrK™wY™–sKiŠ‡u“wTwdu–s0FrGvUŽŒ–4P9z‡–VSu“8UGTXGmvVpvuFŒ›XpuCV‡v‡i+Vr’F1r1ŽR3v–pYVr’F1sv9xm9GF™Fsx’FKƒ“ŽG„8Mƒ„H‡Q‹ƒ“UCŽFƒ1F™ri0T9sƒvisSvVpƒTFŒU4i4Pƒx8ƒ1CTƒ’FKTUrŽ8ƒ1Fu‹sO›‹Sƒv9zFrp4pƒzFGdv9Smv3rlpVpx’F1s’VŒS’Ž1+Vr’F1P™FR’ŽrYVr’F1•u–“KTV0TFxGpŽ‡KvRmuVKdTw’MU‹S‡p˜R+‡xTG•8‡08CG+u3sT‹z‡8RŠ41mŠ9rTwu–‹xFUpmŠ‡ƒ+TwCuF‹‡xF–“KTƒr0TŽr+U‹S3ŠK+pF9ŽpUCuTFR•–FR3v–pYVrTŽ1“v9sz8Ž‡‹19r–rdP4rhFr1‹1–rwv3dP3GmFCŠVŽ“Œv4iuFrzŠ–RruMC‡Chph1F–MudKx’‡‡–C„1FCGu9RX1XCrC‡xUmœuƒ1uu‹sŒU„ŽvV1+pUUp4CvŽQ‡ŠwrHpƒrw8U–V–ŽV‡pXiipF9ŽpUCuTFRu–i3v–pYVKx’ƒi4TC8„iGH1–rw“3r4T–8‡v–Rx•Ž5CŽs01C1pu‹CX–X9lu–K31FC1FCX13CruXG+FCGu9RGC3p5U1z’FR3v–pYVrTŽ1“vis+8ŽVSPŽpS’ƒr“VSm8VGvŠ‹Œp‹ŠŽFrpupƒml14C+ŠFŒ‡FF–ŽpFsS’hCduU’‡U˜KzpFRw1ƒpx’F1s’Vi3vŽr+1ƒpx’F1s’VsMi1HŠŽiXUF1uTr‡FUpvŠ‹Œp‹1uPr8„C‹VSu‡x8UƒprCCxŽFUpF™rxX–FRH“VxŽ84sœTirXpwYu–i3v–p˜pVpx’F1s’Vi3v–pYŽpKC4YƒF9x‡v–pvP‹iwTwxPCCF4sFPi“K›FKuF9SCC‹P‹“ŒvFRHPrxŽFUpF™rxX–FSP’VilFFVS1swCGdu4G09GHPCxU8hHPrxz8ƒG›T9xSuh1u–i3v–p˜›–p3TŽ1s’Vi3Uwr+Š–px’F1s’Vi3vŽr9TFRPT‡O8U1KT–m+T‹K•8OpdRl1U8TX–‡ŠxŠFxKTi8TŽxOpFs+Š3ŒMTwYsŽFrYmuCƒhTwp•Ž‡FrGKuCr9TFSsTRxTV0MslThCGp4–‡F‡+v‡i+Vr’F1s’ŽR3––G˜u‹pK“3“s’‡sx84ŒSŠ‡xX“3Cs“VxŽ84sœTirXp‹1ƒv9zFCxuwi5FK‡1C1’ŠdKGpŽ‡‡CVKUŽCGu9RX1XCrC‡xUmœuƒ1uu‹sŒU„ŽvV1+pUUp4CPu–œ‡FvKŽpXs‡8UCŠF/‡pXiipF9ŽpUCuTFRu–i3v–pYVKx’ƒi4TC8„iGH1–rw“3r4T–8‡v–Rx•Ž5CŽs01C1pu‹CX–X9lu–K31FC1FCX13CruXG+FCGu9RGC3p5U1z’FR3v–pYVrTŽ1“vis+8ŽVSPŽpS’ƒr“VSm8VGvŠ‹Œp‹ŠŽFrpupƒml14C+ŠFŒ‡FF–ŽpFsS’hCduU’‡U˜KzpFRw1ƒpx’F1s’Vi3vŽr+1ƒpx’F1s’VsMi1HŠŽiXUF1uTr‡FUpvŠ‹Œp‹1uPr8„C‹VSu‡x8UƒprCƒSO8ŽVSŠŽsw“rd“‡C+vƒ1H1Œ™‹Ch“„’ŽrYVr’41u–i3v–pYVr’F14TC8„iGH1–r–4YG“ŽfUi’‡rzC4Y–TUrlFrG›’ŽCC“4Yƒv9r+v4p›upK›Xpd“Vx8ƒ1CTƒ’FKTUrŽ8ƒ1Fu‹sO›‹Sƒv9zFrp4pƒzFGdv9Smv3rlpVpx’F1s’VŒS’Ž1+Vr’F1P™FR’ŽrYVr’F1•u–“KTV0TFxGpŽ‡KvRmuVKdTFSsT3Ym8dRKuƒr0uMC+1K‡pŽsKTi8TŽxOpFs+Š3ŒMTwYsŽFrYmuCƒhTwp•Ž‡FrGKuCr9TFSsTRxTV0MslThCGp4–‡F‡+v‡i+Vr’F1s’ŽR3––G˜u‹pK“3“s’‡sx84ŒSŠ‡xX“3Cs“VxŽ84sœTirXp‹1ƒv9zFCxuwi5FK‡1Fi4uFCKC38l8–‡xCPŽuvKUpM“‡FizU‡1‡1FCXF3i5HhGO“‡xz8ƒG›T•“Ž/‡prPŽpXs•uC„™–zŽFrŠ+pFRSv4CPŠ–„‡Uw–pUC“UCGp4–‡F‡+’ŽrYVr’F1•u–sY8Ž‡FP‹“8v3Cs“VS8Ž‡‹p–r5uvRmU‡1dT3CXUFGrC‡iHŽr•MCr’MCrCM‡FrœTŽCr8FG58ChUŽ–Mu9i+Vr’F1s’ŽR3––GvTŽpK›Up4™–s‹–1›T‹pŒ–3YdP4“3prxUF4•HM8‡TMidpCrrp4Cd™–P‡8ƒVp–„luC+“Mu–i3v–pYVKxTMu–i3v–p˜1Ž“Xv3pGCV‡3FSF1Cƒh–3YdP4“3F4sFPi“K›FKuF9SCCœ1sK9“d“ŽO8Us‹uFswCFRH“VxŽ84sœTirXpwYu–i3v–p˜pVpx’F1s’Vi3v–pYŽpKC4YƒF9x‡v–pvP‹iwTwxPCCF4sFPi“K›FKuF9SCC‹P‹“ŒvFRHP3GŽ8‡41iƒ™wYP3“zFF‡œT9xS1Ž1H“VxŽ84sœTirXp˜RHP‡sSi1CTƒRx‹‡CMGfFrp4Š9RMTŽ1s’Vi3ri+vVr’F1s’hGvŽ1+Vr’F1s’ŽR3pXipUC+P3–‡Š‹rŽpCxTUCPuU8‡8vKwpU’4C™U8‡ŠsmpƒƒŽPhCH‡ŠŽvh8lpFiUvCdPr’‡FF‡›pFsw–CdTC8‡TŽ‡YpXYSv4sŠ–P‡p9m‡vVRX1XCrC‡x’ŽK•v–pYVr’Xis“–sMFCGHu‹sU’FKTUrŽ8ƒ1Fu‹sx’rdP4rhFr1‹1–rŒ–3rƒC‡G+TŽiOT3YPŠ‡KvRmŠ4“dTRsv‹OUws0TFR–TwsTK8FxŽ1ƒrœTCrX™wxuFrzŠ–RruMC‡–h“OFiŠdKX1G‡F13C1p1XCr8FG5CMC‡C1uŠ–i+Vr’F1s’ŽR3––GHT‹“ŒC3rdu–sz8ŽSHu‹CU“‹RŽpC“mTU–MT‹xsF‹lvM+uFRPT1TpŽS+ŠŽiŒT‡+C‹‡m8ƒ“01U““vVr’F1s’Viv–C˜P‹iŒv3ƒPV‡3–rGzurx8’4YGChr‡v–RKCF‡ruXHŽi•TvKXvwC‡ChG31CŠV1–RU•ŽRr8–s1ŽR3v–pYVrTMiP1ŽR3v–pYŽpŒCrd“ŽOv–1uPFsKU4YGChr‡v–1ƒT‹“ipXu“‡f–FSm–Cr8U3xƒP4rSFƒp3u‡rK›Xd“‡z8rlvVr’F1svwp•v–pYVr’F1s’VsSFrGvPFpKp‹1Hvis+8CGp1iYm›FSuFis584svT‹P„v4C“FiŒ„8Žr3Tpw“3x4PŽ“Ž8Ž‡“Tƒ’FKTUrŽ8ƒ1Fu‹sO›‹Sƒv9zFrp4pƒzFGdv9Smv3rlpVpx’F1s’VŒS’Ž1+Vr’F1P™FR’ŽrYVr’F1•u–“KTV0TFxGpŽ‡KvRmuVKdTw’MU‹S‡p˜R„Vr0uMC•PŽ‡08CG+u3sT‹z‡8RŠ41mŠ9rTwu–‹xFUpmŠ‡ƒ+TwCuF‹‡xF–“KTƒr0TŽr+U‹S3ŠK+pF9ŽpUCuTFR•–FR3v–pYVrTŽ1“v9sz8Ž‡‹19r–rdP4rhFr1‹1–rwv3dP3GmFCŠVŽ“Œv4iuFrzŠ–RruMC‡C‡YHŽr˜TXCr“XY‡FizU‡1‡1FCXF3i5HhGO“‡xz8ƒG›T•“Ž/‡prPŽp–xU4CHM8Žv–1GpU“UTU–‡Š––‡8U8‡pCxKTVpx’F1s’Vi3vŽr˜’FpKC4YƒF9x‡v–1‹™FpK“4CsUŽƒ+T9RX8S‡CV‡zC1“ŠvKxvŽ1‡–p‡C1Ž1FCx™‹RrFizUŽiFŠVRrpŽGYTŽ1s’Vi3v–p+‡iŒ–R4TUƒh8Mr˜“CwU4vis„84ŒVhu–‡zŽvKŽpFR84CU8‡83rpFsxpCPHŽQ‡TV1Ž’ŽrYVr’F1•uFRŽ’ŽrYVr’31ƒCVxh8C1p‡x0C3CP‡s„84ŒV‡zC4Y–TUrlFrG›’ŽCFUd“‡O91FuVK–rdP4rhFr1‹1–K“TŽ1s’Vi3X1+Vr’F1s’Vi3v–GHT‹“ŒC3rdu–il91zŠ‹pSP˜K8P“m9–‡1rxwC3x“T˜9Gv™–KwxuCMGmFUpvTix8Mps’‡sx84ŒSŠ‡xX“3C’™F’„8ŽSFT9xfTŽSuT–h8hsCTƒK–ŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–RxUM’lC‡Ym1C14Š–RGUFQlCMCK1C1ƒuVRGŽQl–p‡FCGu9RGv158FpxFr•MCr’MCUuŠSmTFi3Š9px’F1s’Vi3vŽr˜’Fpw“3rChY3vƒG3ŽiXpUYuCŽ“m8Žr˜FUCuPr9‡Š–pŒ’ŽrYVr’F1•u–sY8V1‹™CrXP‹1Hv‹K38CŠ‡PixX‹4u–supCz–UC’VGu–i3v–pYVKx’ƒi4“VSFCŠ„Vxw“4Yƒv9r3FCGH™Cr8uŽŠ‡TMrŒpF9Ž8UC™U–ŽFC1›pFswUC+’Žœ‡FvK•pCr›ŠM™–V‡U‹rYpU1‡PC„CMŠ‡pMCiph1SUUCd“Ž–‡TVp0pUC“UC’hQ‡U‹ƒŽpFsx“Cd’‡–‡F4PpXYrPrxK“3p4PrGl1–TXpv‹‡0vFSmVœP‹p0C„‡U‹ƒŽpFŒl“4G“hŠ‡ŠwrHpCr›ŠM™–V‡F–Pœp–xp4CGPrQ‡p3rKp–x™UC„UŒ‡FvKŽp–„•h–‡–Ž/ŽF–pGprrXU4–Ž™F‡•1CPMTKG838l–h1‡HŽiiudKX1‹„lXp„1CPVŠŽ1+Vr’F1s’ŽR3––G˜u‹pK“3“s’‡ŒV8r1MŽPh–3rGChC0v–RXuŽxrCCU‡1œudKXpFrFiz“G›C9i+Vr’F1s’ŽR3––GHT‹“ŒC3rdu–sz8ŽSHu‹CU“‹RŽpC“mTU–MT‹xsF‹lvMmTƒKOTMŒŽF‹0Fƒ“KTVrT1TSKT‡“KuCr9TFSsTRxTV0Ms0TwŒMTRh8–G0TFR–TFd“‹S‡pii•v–pYVr’Xis“–Œ„8–GH1’hUF1vF‹GOFrG˜P‹iX›XCsUŽ‡CTFCx13Œl8–KKH‡1Œ1XCX›‹1‡Ch“‡U‡P+TŽCG’3sMTŽ1s’Vi3v–p+Š–MTŽ1s’Vi38VGFuFswT‹xs“‡z8‡›P‹iX›XCs“Ž“m9–‡1rxwC3x“T“84p›Š‹“wTwduF1l–pMVxŒuMps“VS8Ž‡‹p–r–GƒvisS–iV9’FKr“hih–iŠ‡PFsw1MYu–i3v–p˜pVpx’F1s’Vi3v–pYŽiXFF1•’VCl–ŠŠVKU’41u–i3v–pYVr’F1s’Vi3v–1mT–rŽGHv‹GV8ƒpY›–r–4YG“ŽfUi’‡PFiFwYu“Ž“m9GpTVKUuŽ1r1ŽR3v–pYVr’F1s’Vi3v–pYVr’F14TC8„iGH1–r‹1‹“51ŽR3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYŽ“TŽ1s’Vi3v–pYVrwT‹‡•v9sSFr1ƒsX“4YPGFC1œŠVK8M’“3“r–‹„„Šrov3ƒChCl8Mz„uCG‹ŠŽR8“‡iv‡pMT‡Gw–Xs•C3GƒF9hT‡Gw–Xs•–M1+F91“ŠƒKF™‹“sTw“r–‹„„ŠCYfpwG–Žphv–pvp‹sX1Mps’‡sVFCGvuiwC3xP’Vs“CFKFviQUƒF“4r’CFKv“rCxuMYr1ŽR3v–pYVr’F1s’Vi3v–pYu‡xX™‹dC‡‡9Gp‡YU’s8Cwp•v–pYVr’F1s’Vi3v–pY‡xK›XruCVO8–pYTVxwPFGƒ“VS+FrGp‡r8UF1H“Ž„„FrŠ„Š‹CMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYŽiXFF1•’‡ŒV–‹z„uŽi8–dC3pœFipYT–xx’FKr“wŠSvƒ1mPixXPFspPUY3vrVxŒuK’–‡s„91F1i1fv“s’‡rKv–pvpCY9P‹KGFism8rhPiGUT1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3FVS™CxX“xG’Vi+vƒ1‹P‹“ŒvF1F9‡3vƒ1‹P‹“ŒvdT–VFrpY›CYx’FKƒT–hi1CŠ‹CMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–p˜Šixx’FRGF9SFFVS1sŽKƒT–hi1CŠ9K8ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’hGŽF‡‹ŠŽPF‹K‡UwsKŠMiŒTFSsT3UwxŽ1ƒrœP‹p0C„‡U‹ƒŽpFŒl“4G“hŠ‡ŠwrHpCr›9px’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’3Yuu–i+vƒGuu‹sŒC•Fwp•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’3Yuu–i+vCG˜™CxX‹dCV8„FUs3TVxS›‹SPuCsz9Gv™CQpFGdC‡C‡v3z„uCŠp‹r8–MP+vFƒSŠ9xS1Ž1H“Ž„„FrŠ8ƒ‡‹Pwps’‡Œ„FrŠ1VKUT1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s“VSŽ8SvŠ‹s0Cs“9ƒM’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3ri+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pY‡xX™wxuFwp•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’3Yuu–i+vCG˜™CxX‹dCV8„FUs3TVxS›‹SPuCsz9Gv™CQpFGdC‡C‡v3z„u–rx›XYH™X13vƒ1mPixXPFsp“4Yhv–pvPixXPX1•–Ž„M’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–1›1s0–3YdTrmv–“spVpx’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3ri+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYŽ“TŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–1FŠŽPC41u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vs„FrYTŽi8U4P‡sS8CŠ‡TƒK–4sCMQFrplŠ‹CMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–1mT–K“3xƒ“V8„8C1ppƒRm›XY4PUrVFCGvui‹›FGƒvisSvVpvŠ‹“wC3“X™ƒsƒU9p˜8ƒxw“4Yƒv9x8‡‹1ix–P˜KHvixz8ƒGFTiGUuMYr1ŽR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’VsO84Œ‡P‹iXpUiu–ViSUM1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1svY•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–Q„vVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrwC3p4Pr8M’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1P4r‡91m1F“XCF1pu3p•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–Q„vVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3ri+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’VilFr1œT‹sXC3Cƒv9SdFipY›–rwpFƒ™–Œ‡8C1œPFpwuw18PƒlFF„ST‹swC3“uCh–„vVpvŠ‹“wC3“X™ƒsƒU9pYuŽ“wuwY4™FmM’ŽrYVr’F1s’Vi3v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’F1s’Vi38Ž‡FP‹“8v3Cs’‡sm8ƒ1F1ixXpUY4™3p•v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi3Fr1œ™rx8ŠVKs’Vi3v–pYVr’F1s’Vi38Ž‡FP‹“8v3Cs“3“ƒUM1+Vr’F1s’Vi3v–Q„vVr’F1svY•’ŽrYVr’X•uFR•v–pYVr’XisUŽi31FCGU3s‡u–K31FC1FCr8FG5CMG01FiYŠ˜KxUM’lC‡Ym1Fr‡13CXuŽQlChrlH‡1HuCX™‹zlChCmFiHVRG8Žrru–K31FC1CpOTwsTK8F1„’ŽrYVr’F1•u–sY8V1‹™CrXP‹1H“V8„9GHŠir0C4YuF9‡3FCGH™Cr8uŽŠŽvXipU“•pU–‡Š––‡8ƒ1rpFRT4ŠM™–‡FiŒ„8MCUpwC‡CMG01FiYŠ˜KX–FxrFShUmœuƒGuu‹sŒC„‡U‹ƒŽpFswUC+’Žœ‡pXiipCr›ŠM™–‡d“ŽFCUpwC‡8CrH‡1“ŠwCGTŽRrXxx1FiŠ‹Cx1R‡HhGOUŽVMT–Rx1XY5–h“‡TCxz8ƒG›T–Mvm‡FFCwpXolT•HŽƒVp9p’ŽrYVr’F1•u–sz9Gv™UCHM8ŽF–pHpCr›C„™–zMpMrG8CŠ‡u‡x8ux3v–8„FrGzP’V’Vs4TCf84pF™CƒCX“GC‡“OVr‹usw“3x4HVRY‡G˜uiƒ1‹GuPrGOVr‹uŒpUYuCh–„Ui1vT‹P–‹x3v–O8–1Fu9“rd“‡GOVr‹uiwCxGPrlp“’rƒ™wYP3“zFF‡œT’V’VsuChCzFF‡œTix5UVi3C‡xŽFUpF™rrXv3pu–RY‡1u1rƒhC3xuC‡“OVr‹™rƒhv3d“MGzFF‡œT’V’Vsd“hr‡F3ƒuswT‹xGPƒx8ƒ18u1s“31F9SfŒS™Cx5UVi3F9Sm8ƒ1Fu“wCKu–i3v–pYVKx’ƒi4TC8„iGH1–rw“3r4T–8‡v–pvu‹“Œ–3rGCVz918uMCPŠOFrGl1–KTŽr+U‹S3ŠSKT1dTM8‡C‹KpU1muƒr8T‹K•1RxTV0Ms0TwŒMTRh8–GŽ1ƒrOT‹zŽ•ŽR3phpmŠ9xuMC•Š3ŽvFS0TFR–uMCs“‹S‡p‡“KT‹s9T3–VCwŽvX1lFCGvP‹pKT‹rƒFismp–xp4CG–Ž9‡U‹rpƒr’h–Vvh–‡8ƒ1rpFRT4C„UŒŽU˜KCpCx‡UCPŠ–V‡pM–„pXYX1hC+P3–MpMrppF/Ž–hCuCQŽ8–ŠŽpFs–ŠM™–ƒ‡Ši1MpU1‡“U–‡Š––ŽFrp‡pCxU4ŠM™–z‡U‹r5vƒ1‹P‹“Œv3YTr8„FCU›‹R5CV„FCGu9RUp‹158F1VHmœuƒRXuMpruUY„Fƒ+T9RX8S‡XY‡1FiFŠVRrpŽGYTŽ1s’Vi3v–p+‡iŒ–R4TUƒh8Mr˜“CwU4vis„84ŒVhu–‡zŽvKŽpFR84CU8‡83rpFsxpCPHŽQ‡TV1Ž’ŽrYVr’F1•uFRŽ’ŽrYVr’31ƒCVxh8C1p‡x0C3CP‡s„84ŒV‡zC4Y–TUrlFrG›’ŽCC“4Yƒv9x„FFSFPix8UFRF9xSFCGlVxw“4Yƒv9x„FFSFPix8UXYu–i3v–p˜pVpx’F1s’Vi3v–pYŽiXFF1•’V„8h9Su‹p0vGr–Ž1lFCGvP‹pKT‹rƒFism8MrlŠ‹CMTŽ1s’Vi3v–pYVr’F1s’VŒ„8–GH1“S’3CuF‹p3–rGzurx8’4YGChr‡vVp4u‡r8–4Y4TFxiGvT‹pS“‹Op9KT‹s9Š‹HTRpdRŽ1ƒrfTw8VFwY+83l1–TFd“‹S‡pii0v‡“hvVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVxwF3Y4Tƒœ„v–’„‡ƒhC3r4TC‡9p3u‡r8–4Y4TFxiGvT‹pSuh1u–i3v–pYVr’F1P™vRKT–m+T‹K•8K‡v–“01U1–TFd“‹S‡pii•v–pYVr’F1s’Vil8CG›C‹iXpFSd“‡C3–ip˜TCrX™wxuCwp•v–pYVr’F1s’Vs„FrYTVrXTwx8PƒS8Ž‡‹p–K–‡GF9xf9plŠ‹CMTŽ1s’Vi3v–pYVr’F1s’VilFCGvP‹pKT‹rƒFism8MrY›–r‹ŠŽKFiŒ„8Ž‡muF“8–4PUoM’ŽrYVr’F1s’Vi3v–pYVr–3Y4P–S„8‡ƒŠ‡xU’UrsvisSi1CpVpx’F1s’Vi3v–pYŽ“TŽ1s’Vi3v–pYVr–34vis„84Œ‡™ƒr9P‹1X™F“h8C1VT9xS1ŽSGChClFrG3TƒYuF‹Q„v3rMTpKC3xdP‡SFUsC1‹iX–FSP’Ž“O8ƒ1‹™pS8MpHPVszFUsVuizCFSP’Ž“O84Œ‡PixXpUYPC‡sm8hspTƒ‹xG“‡O8Us‹uFswCFSP’Ž“O8–1Fu9CKH™X10FUsœŠiƒ1‹GTXGmv3rMvVr’F1s’Vi3v–pYVr’F1HPr‡FC1HŠ‡xX–FSP’Ž“K84s›PFP“rd“‡C0U9pƒTFŒU4i4Prlv3rMTPU3rdP3GhFC1HŠ‡xU8MpHP3GŽ8‡41iƒ™wYP3“zFF‡œT9xS1ŽS4“Vf8hpƒ1pK–FSP’Ž“fFr1œTiƒh–u’Ž“ƒUM1+Vr’F1s’Vi3v–Pœ14CUV9‡Š˜KmpFswUC+’Žœ‡Š‹rŽpCxTUCGpƒV‡ŠiŠ„’ŽrYVr’F1s’Vi3FVS™CxX“xG’Vi+vƒ1‹P‹“Œv3YTr8„FrGp‡r8UF1H“M“mC’„HVxwTYuChY„X1+Vr’F1s’Vi3v–pYVr’‡dPVxmFC1›TVrŽKGFism8rp˜u‹pS’FKFiŒ„8Žz„HVxŒFGdvimv‡GhvVr’F1s’Vi3v–pYVr’F1s’Vi3v–1mT–rŽGGChCFCGH™Cr8uŽRH“V8„9GsŠVr–34vis„84Œ‡™ƒKUT1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi391z™FŒh8Ž1dTC8hv–CFpiƒC31ƒ“ŽŽ8r3T4CHVP‡Ši1MprxUF4•HM8MpMrppXYrhCPm‡8ƒ1rpFRT4ŠM™FiH™U“lFCGvP‹pxuh1u–i3v–pYVr’F1s’Vi3v–pYVr’4ru–i3v–pYVr’F1s’Vi3v–Q„vVr’F1s’Vi3v–pYVr’F1GC‡r3vV1F1‹pŒ–4C•’‡s„91F1i1SwpGCM“mv49„Š9K8ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVr–GƒvisS8C1HPF“wC3xX™CsFrGmi1SwpGCM“mv49„‡YU’‡CMGfFr“hvVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–p˜T‹sŒUr1ŽR3v–pYVr’F1s’Vi3v–pYVr’F1H“V8„9GHŠir0C4YuF9Sdvƒ1VT‹CFPFsHP3G„8UsCTrGU’UrsvisSi1CpVpx’F1s’Vi3v–pYVr’F1svY•v–pYVr’F1s’VŒS’Ž1+Vr’F1s’Vi3v–pvp‹sX1Ž1’–Vil91zŠ‹pSP˜KƒCŽ88C1vTrx8–3x•’ŽmM’ŽrYVr’F1s’Vi3vƒGHT‹“ŒC3rdu–9Sv–V9RMTŽ1s’Vi3v–pYVr›w8‡84pU’Ž14CH‡o‡U‹rYp–xŠUsŠ–P‡p9m‡’ŽrYVr’F1s’Vi3FVS™CxX“xG’Vi+vƒ1‹P‹“Œv3YTr8„FrGp‡r8UF1H“M“mC’„HVxwTYuChY„X1+Vr’F1s’Vi3v–pYVr’FKdPƒxFr1›Pii8v3rs“Y3Ch9„pVpx’F1s’Vi3v–pYVr’F1s’hGŽpFŒŽŠU–Vp38ŽvXipU“•pU–‡Š––‡ŠvK’p–x’UCPuX9‡8ƒ1rpFRTƒpx’F1s’Vi3v–pYVr’F1s“‡xŽ8Ž‡FuiƒŽ1•’‡s„91F19rw“3xs’‡sz9Gv™CY–p‹KƒT–hi1CŠ‹CMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYŽiXFF1•“Ž‡Fs‹™FpK“4C•’‡sz9Gv™–’sHP3G„8UsCTrGUuMYr1ŽR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–1›1s0–3YdTrmUM1+Vr’F1s’Vi3v–pYVr’F1s’Vi3ri+Vr’F1s’Vi3v–pYVr’F1s’Vi38C1VK–3TXYmFUpv’p0vXYr1ŽR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pvP‹s8’ƒs4Tƒr3–ip˜8rG–ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’VsK84pHTirXURs’Ž1l84sHŠCxXU4Y“F9xSv–1‹™ƒr–3TFR„X1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vil8VSu‡xU’Urs’‡sŽFF‡+1iYKpXu“‡8r1MTVK–ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVxŒ–3“4’V9Sv–pvŠ‹“wC3“51ŽR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’4idTƒSm9p3uŽ“wPX1X™F“h8C1VT9zPwY51ŽR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’3Yuu–i+8hpvu‹“wT‹x5u3Y8CG›sX“4YPGFCGvP‹pxŽKdTUrlFrpMVxŒ–3“4’ŽK„X1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVxŒ–3“4“–S8ŽV9r9P‹1H“hrx8FxhvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3ri+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vs„FrYTVrU–4YdF9s˜8ŽSsŠ‹CMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–p˜uFpKCGG™–iSUM1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vil84sHŠCxXU4Y“F9xSv–’„VxŒ–3“4“–S8ŽxhvVr’F1s’Vi3v–pYVr’F1s’Vi3v–Q„vVr’F1s’Vi3v–pYVr’F1s’Vi3v–1FŠŽPC41u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi38C1VK–4YdF9i3–ipYuŽ“wuwY4™UolFsƒT‹“ipXu“‡f–FSmUFiX1‹“FiŒ„8Žr3u‡r8–4Y4uX13vƒGuu‹sŒCP’Vil8CGvT‹sFŠŽSd“ŽFrpƒ9’FKr“hihv‡plŽCMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYuŽŒv3iuCVœ„–CGH™–r9P‹1HvisV8V“hvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’4ru–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3Fr1œ™rx8ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pY‡r0vCMp3UFxhvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’4ru–i3v–pYVr’F1s’Vi3v–pYVr’4ru–i3v–pYVr’F1s’Vi3v–Q„vVr’F1s’Vi3v–pYVr’F1Hv9xm9GF™FsmŠŽKGPr8‡FipY›–r–3TXYmFUpv’p0vU1u–i3v–pYVr’F1–FR3v–pYVr’F1s“ŽKv–p3uŽi8Ur“GChC08ƒ1CŠ‹CMTŽ1s’Vi3v–pYVr’F1s’VsSFrGvPFpKp‹1F9xSFCGmpw›X1•’‡sSFrGvPFpKpwY51ŽR3v–pYVr’F1svY•v–pYVr’F1s’VsSFrGvPFpKp‹1Hv9xm9GF™FsOŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–RGC‹xr–hr0UŽipuFCKCXs3TŽ1s’Vi3v–p+‡iŒ’G4T–Vv–pYuŽ9C4CP4rlFrp˜Š‹s0–uPrSv–RGUFrrTCC1F–œTwCrŽ1rHhGOUŽ‡9Š–RXvFG‡8–‡xF‡CŠ3Cr›‹‡F13C1KMCUp‹rMTŽ1s’Vi3v–p+hC„1Uo‡8CpG8UsFpCƒ›FKuFr0Ž–l›‹‡KuYƒv9sfUŽƒœ1rxwC4suCMGŽ8V1F™–K“3Cuv9xŽ8C1“1Cƒ›X“PPVxmF‡F™CxXpFxu–hrz8‡v™FŒT‹KPP‡x„FrG41rPC4CvFixm8S“1FiŒ–3“d’FR3v–pYVrTŽŠ‡TŽrXph1S8FiŒ–4Y4v9VŽUwƒSuFsw›FSPT–SfFƒŠV1FsKC4YPP3GŽ‹‡FCŒU3GPPƒS91muswCXu“‡8„FC1mŠŽpS›ppur9UV“4™ƒR“TŽ1s’Vi3v–p+Ž9C4CP4rlFri0T‹K•1K‡FFK•v–pYVr9U–xU“Ur›–rp9Š‹•p9Ks’Vi3v–““v4PH‡–‡F3CrprxU1–px’F1s’V9’ŽCGvmlChG3UŽiPŠ–RX–w’lChmUŽCCŠ–i+Vr’F1›ŽSKuƒrPTFPŽSmUiG+Š4–„vVr’F1s“9ƒ„’ŽCXuFS‡CVK+UŽ‡ŠKKv‹xMTŽ1s’Vi3UFxCv4uT–œ‡Us5przl™4CYu–i3v–pY™–S3TSmUiGK1XY9Š‹•p9Ks’Vi3v–“sPVpr8–OFC‹Š˜ml›‹r5TFp3UŽrKŽCX8Mi5Fs‡UŽi41XCXp5CCUŽ‡Œuƒ/l›‹r“TŽ1s’Vi3Uxsv4Ppr’‡FC1mpUKp4C’hGu–i3v–pYPƒSYT‡xFrYm1ƒr9TX“•ŽR„p‹xmTFi3vVr’F1s“iƒ’ŽCX8S‡uUr„1Fi›TMCxu‹xYTŽ1s’Vi3Ux4v4CuFŠŽF‡l’ŽrYVr’U“pŽS+u4CfT‹xuFwYmvh“•v–pYVr9hiFiUŠCGCXx•Ž‡KTVm‡xMvVr’F1s“‹Š’ŽCX’S58X“+1FiUŠCGCX3TŽ1s’Vi3UV“4v4C„vM’‡ŠiPlp–xUCPu–9Ž8FiX’ŽrYVr’U“5’FSKuM9hTFPpŽK‡vXsl1–r9ŠwY„F–Ks’Vi3v–“i™–‡3TS„pMmuXiOT‹GT‡+vFmu–9TŽR™3Y„Š‹sKu–xdT‹rHR+8Fx„TŽsdŠ‹ŠŽVKs’Vi3v–“i™–‡MTS„pMmuXiOT‹GT‡+vFmu–9TŽR™‡0vMKu–xdT‹rHR+8Fxm1XY8Š‹ŠŽVKs’Vi3v–“i™–S3T‡38–mŠ9ƒhTFKPŽ‡mU“•v–pYVr9“Xr›1ŽSKTFRPT‹1u™‡lŠUpKT9„VvVr’F1s“9–Uƒi0Š‹SuT3Y0pV‡•v–pYVr9“Up›ŽSKuCx’Tws“‹ShpM01U–+TMspŽSŽ8U“•v–pYVr9“U“›1ŽSmu–rTFxGU‹‡Ši“0T9K3vVr’F1s“9rMU310TFru–‹Žv–“+‡x–T3PM1K‡ŠR•v–pYVr9vX15’FSKuCx’Tws“‹‡mprGmuRvVr’F1s“9rMU‡i0TFru–‹Žv–“„T41’uMCu’–Ks’Vi3v–“s™9‡YT‡xFrYm1ƒr9TMsv‹SŠ‹mTFi3vVr’F1s“9rSU–i0Š‹‡PŽKŽFU1mŠ‡ƒ+TwCuF‹K‡ŠU1m1XivVr’F1s“9rSUCi0TFz‡“wYpFxmŠ‡ƒ+TwCuF‹K‡ŠU1m1XivVr’F1s“9rSUX10T3PM1S‡pvRl1ƒxŒTS•’–Ks’Vi3v–“s™–SYTS3ŠSl1X9MTwp•Ž‡FrC•v–pYVr9vXxp–FSKuCx’Tws“‹Rp4p„T41’T‹rT‡xFXp•v–pYVr9vUp›ŽSmŠ‹RPTFS„™‡hŠ–GKTƒrlŽ’“3suCMGŽFUshhCuCzŽvh„pU15ph–M1F8‡UwrvpUCSVpx’F1s’Vi3vŽr˜’FpKC4YƒF9x‡v–1H1Œ™‹Ch“3pFRx–UCŠF8ŽU˜KCpCx‡F“Œv4iuvmœuƒRXuMpruUY„Fi•TvKXvwC‡ChG31CŠV1–RU•ŽRr8–s1ŽR3v–pYVrTŽ1“vis+8ŽVSPŽpS’ƒr“VSm8VGvŠ‹Œp‹ŠŽFrpupƒml14C+ŠFŒ‡FF–ŽpFsS’hCduU’‡U˜KzpFRw1ƒpx’F1s’Vi3vŽr+1ƒpx’F1s’VsMi1HŠŽiXUF1uTr‡FUpvŠ‹Œp‹1GPr8‡FrGuT‹s0–FRH“M“mC1›1rxwCXYu–i3v–p˜pVpx’F1s’Vi3v–pYVxŒ–RGF9‡V–‹‡‹u‡rm›XxG“‡h8ƒp3TiXpX1ƒFii38UsFpCx8FdTri3v3ƒVuŽ9C4CP4rlFrplpVpx’F1s’Vi3v–pYŽpKC4YƒF9x‡v–Gv™F“XCU1u–i3v–p˜›–p3TŽ1s’Vi3Uwr+Š–px’F1s’Vi3vŽr9TX–‡v‹xŠFxmŠ‡ƒ+TwCuC–Ks’Vi3v–pYŠ–ri’31F9xz8rpYVxŒMGs“Ž‡91FTrx8vFŠŽUiŠhpFirU–Vvh–‡F4s“pXiv–‡Š–CrU‡PSuCr›Xs3TŽ1s’Vi3v–p+‡iŒ’G4T–Vv–pYuŽC–“F1GCh–„Fr1ƒT‹px“‹RV8mŠ“ŽT1T0Fƒ“KTVrT‡+–4–‡Us›pUŠ1–px’F1s’Vi3vŽr˜’Fpw“3rChY3v–pvp9‡x’3YdTrsmF4sF™–r5U1lHŽiƒTdKr’MCrCŽ“lUŽi3u˜Kr8FGŒuKŽFUp019VvVr’F1s’Viv–C˜1‡r8vGd–Vi3vƒGl™–rwTwCƒ“‡0FrGsh–M1C’‡ŠspU“•pUCuPr9‡Š–pŒpUC“FCr–hrOF–SŠ1+Vr’F1s’ŽR3––G˜u‹pK“3“s’VilFƒGF™Cr8–3YdP4“38CŠ‡PixX‹4u–“K1UCŒT‹ruRŽp‹0Š–rŽTFxsv‹S‡p4pKT1dŠ‹„MCwŽvXxmurx8uMPŽK‡UwsKŠ4ŽT3o‡U‹x3v–KuFRTM“d„pw0Ms0T‹K+™S‡pCYKTrz+T1TRŠ41019MuMCs“‹‡+U‹0TFR–13s™‡Ov–G01U8hTF„M83Ymp‡“„T‹Œ+uMCs“‹S3ŠSmu48+TM“dxU9“„T‹Œ+TFxsT‡mFFxKT3YMvVr’F1s’Viv–C˜™Cx8–4i4TU“3FFVS1swCGdu–“Ku–x9T‹r„•ŽRŽpC“mTU–‡P‹p0C„MpMrppFiU™P–Ž„‡TMidpCrrp4Cd™–P‡8ƒVp–„luC+“Mu–i3v–pYVKx’ƒiƒ“ŽGS84pƒ™ƒriC4“PrM91m1sx“wYmvS+Š48+TFr„1zpMsm1ƒrPTwCPuKŽpƒGKŽ9œvVr’F1s’VivŽƒœvVr’F1sv9ŒFF‡œŠirS’‡ƒChCO91m1sx’3xƒPMFrp3uŽC9“Xps’‡Œ‡UCpMVxŒMrP’VilC“sŠVr–KƒF9xz91m1sOPwrp“9i„’ŽrYVr’41u–i3v–pYVr’F1Hvis+8CGp1iYK“KTrf8–1FŠŽsŽrGChCMiG“ŽPhwY4“‡C3vƒG3™9r–4Cp–Vil–“sVxŒuMrs’‡sliGHu‹“wTwdu–r„UM1+Vr’F1s’Vi3v–GHT‹“ŒC3rdu–Œ„8ŽSFT9RMTŽ1s’Vi3ri+vVr’F1s’hGvŽ1+Vr’F1s’ŽR3––Š‡u‹sXCFŠ‡FƒpvpCƒl™4C1CŒ‡FXi+pFsw–CdTCu–i3v–pYVKx’ƒiu“‡fFXr9uM–VpŽ‡hUi“m1Fs’T‡+C‹Vps+13s0u1sv‹0TV0TU1–T‡+C‹K‡vhp„T1–T‹KHv‹Op‡YK1UCŒT‹ruhFvRm1CxCvVr’F1s’Viv–C˜1‡r8vGd–Vi3vƒ1vPFpK“4YGChr‡v–1m1F“wCSuF9r3pXs‡–4CŠF/ŽU˜KŒpUxUC+™–Œ‡pMCVpXYrP4uUoMpMrppCƒC4CPPƒœ‡U‹ƒŽpX9lŠ4–ŽCPVp9ppFRvhPChP‡8FCPpU“•pUCuvVV‡pMC–pXo4–Vvh–Žvh8lpUŠ1UCPu–9‡Š–PhpUC“UŠM™–V‡TMr˜pU1‡1C„UŒŽF–„prxX•hCPu–9‡p9m‡pCƒl14PChP‡FFrMprxX•hC+™–z‡Ši1spXoŽ8Vpx’F1s’Vi3vŽr˜’FpKC4YƒF9x‡v–1H1Œ™‹Ch“3pFRx–UCŠF8ŽU˜KCpCx‡F“Œv4iuvmœuƒRXuMpruUY„Fi•TvKXvwC‡ChG31CŠV1–RU•ŽRr8–s1ŽR3v–pYVrTŽ1“vis+8ŽVSPŽpS’ƒr“VSm8VGvŠ‹Œp‹ŠŽFrpupƒml14C+ŠFŒ‡FF–ŽpFsS’hCduU’‡U˜KzpFRw1ƒpx’F1s’Vi3vŽr+1ƒpx’F1s’VsMi1HŠŽiXUF1uTr‡FUpvŠ‹Œp‹14PŽ“„8V1FCFŒv3YuPQ„vVpvuŽ“8vGƒ“ŽŽ8z„™–‡9’XYu–i3v–p˜pVpx’F1s’Vi3v–pYVxŒUx4TCm8›Š‹CKCF1’–Vil91zŠ‹pSP˜K4PƒSSFr1F1C–Tu–Ž1„UM1+Vr’F1s’Vi3v–GHT‹“ŒC3rdu–il91zŠ‹pSP˜K4PŽ“„8V1CTV‡–’Xps“Ž‡9Guu‹sŽK4PƒSSFr1F1C–TuC3pœFiPœ™–KU1Ž1GCh–„‹‡‹ŠVK–3xPVxmFrŠ‡C‹i8Š‹X™ƒsƒv‡pMŽiXpUYƒT–hvVpv™rƒhvuChC–8CG„Ti1f““P™ƒr„U9pYu‡xŒC3rFis„84ŒVŠ9RMTŽ1s’Vi3ri+vVr’F1s’hGvŽ1+Vr’F1s’ŽR3––Š‡u‹sXCFŠ‡FƒpvpFsrTUC1CŒ‡FXi+pFsw–CdTCu–i3v–pYVKx’ƒiu“‡fFXr9uM–VpŽ‡hUi“m1Fs’T‡+C‹Op‡Y+13s0u1sv‹0TV0TU1–T‡+C‹K‡vhp„T1–T‹KHv‹VpsK1UCŒT‹ruhFvRm1CxCvVr’F1s’Viv–C˜1‡r8vGd–Vi3vƒ1vPFpK“4YGChr‡v–1m1F“wCSuF9r3pXs‡–4CŠF/ŽU˜KŒpUxUC+™–Œ‡pMCVpXYrP4uUoMpMrppCƒC4CPPƒœ‡U‹ƒŽpX9lŠ4–ŽCPVp9ppFRvhPChP‡8FCPpU“•pUCuvVV‡pMC–pXo4–Vvh–Žvh8lpUŠ1UCPu–9‡Š–PhpUC“UŠM™–V‡TMr˜pU1‡1C„UŒŽF–„prxX•hCPu–9‡p9m‡pCƒl14PChP‡FFrMprxX•hC+™–z‡Ši1spXoŽ8Vpx’F1s’Vi3vŽr˜’FpKC4YƒF9x‡v–1H1Œ™‹Ch“3pFRx–UCŠF8ŽU˜KCpCx‡F“Œv4iuvmœuƒRXuMpruUY„Fi•TvKXvwC‡ChG31CŠV1–RU•ŽRr8–s1ŽR3v–pYVrTŽ1“vis+8ŽVSPŽpS’ƒr“VSm8VGvŠ‹Œp‹ŠŽFrpupƒml14C+ŠFŒ‡FF–ŽpFsS’hCduU’‡U˜KzpFRw1ƒpx’F1s’Vi3vŽr+1ƒpx’F1s’VsMi1HŠŽiXUF1uTr‡FUpvŠ‹Œp‹14PŽ“„8V1FCFŒ„™‹uTri+vƒ1vPFpK“4YGChr‡–i“s1V‡uVKs’Vi3v–GhvVr’F1s’Vi3v–pYuŽPU3ruC‡‡CUsmprxU’Urs’‡Œ„8–1m™ƒ–pXxPVxmFrŠ‡C‹i8Š‹•’ŽmM’ŽrYVr’F1s’Vi38Ž‡FP‹“8v3Cs’‡Œ„8–1m™ƒ–pXxƒPMFrpzŠ‹s0–4sCM1+vƒG›upKCdT9S„F‡F8ƒ‡‹PwYPC9CMU9p˜Š‹s0–4sCM1+vƒG›upKCdT9S„F‡F8ƒ‡FPwpuFKhUC“YŠVrwTwCƒvixz8ƒp3uŽPU3ruC‡‡CUsmprxFŠMG8–hGSv‡pMVxw–4i4T–8„8CŠS1–K–ŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–C˜1CrXPFsU‡1“uŽCUp‹ƒl8U1lC1•Š–RX™‹zlChCm–FR3v–pYVrTŽ1““‡sm8hsphCP1–/‡ŠƒP„pFsK™4–‡Š––‡U‹rVprxrP’V’VŒ‡F4pUC‡P–‡Š––‡U‹r•pƒ„ŽpUCu’‡Œ‡83iFprr5ThC1CŒ‡FXi+pFsw–CdTCu–i3v–pYVKx’ƒi4“VSFCŠ„Vr–KƒF9xz91m1sx’3YdTrsmF4sF™–r58U1lC1•Š–Rx•ŽQlFRxHŽipŽCrpMsr8CGV1F‡819/l›‹x5CVSmCPSuCUpwC‡8XHŽC0uMC5’F1‡8–Kx1Fƒ1˜KXTƒl–p‡C1UuƒRrpŽml8F“0HŽC1FCx1X‡Ur1CPVVRGM’lFizUmœuƒRGUF1rU1Fi81wCKFw“5TCŽH‡PVVRr’MCrC‡YHŽƒ1˜KXvXp5TCŽHŽipuFCGCr58FC0’FR3v–pYVrTŽ1“v9xm9GF™Fsx’rdP4rhFr1‹1–r58–rlU‡1•TdKx•Ž5CŽs0TrsSi1813s™„U9G+19K8TFr„1zpMsm1ƒrPTwCPuKŽpƒGKŽ9œvVr’F1s’Viv–C˜P‹iŒv3ƒPV‡3–rGzurx8’4YGChr‡v–RKCF‡ruXHŽi•TvKXvwC‡ChG31CŠV1–RU•ŽRr8–s1ŽR3v–pYVrTMiP1ŽR3v–pYŽpŒCrd“ŽOv–1uPFsKU4YGChr‡v–G›PŽi8’v“hƒh8r3u‡xŒC3rFis„84ŒV›–‡O’X1•–FR3v–pYŽCMTŽ1s’Vi3v–pYVr–3xPVxmFrŠ‡C‹i8Š‹s“Y3vƒGvTŽi8UX“’TƒSO8Ž‡FT‹smU3YrTCC+v‡“hvVr’F1s’Vi3v–p˜™Cx8–4i4TU“3vƒGvTŽi8UX“’Tƒœh8CG˜T9KwTwCƒvixz8ƒp3uŽPU3ruC‡‡CUsmprxFŠM18–hGSv‡pMV‡O’X1P“Ž‡9Guu‹sŽK4PƒSSFr1F1C–TuC3pMFiPœ™–KU1Ž1GCh–„‹‡‹ŠVK–3xPVxmFrŠ‡C‹i8Š‹X™ƒƒv‡pMVxw–4i4T–8„8CŠS1–K–ŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–C˜1CrXPFsU‡1“uŽCUp‹ƒl8U1lC1•Š–RX™‹zlChCm–FR3v–pYVrTŽ1““‡sm8hsphCP1–/‡ŠƒP„pFsK™4–‡Š––‡U‹rVprxrP’V’VŒ‡F4pUC‡P–‡Š––‡U‹rPpƒ„ŽpUCu’‡ŒŽ8–Šprr5ThC1CŒ‡FXi+pFsw–CdTCu–i3v–pYVKx’ƒi4“VSFCŠ„Vr–KƒF9xz91m1sx’3YdTrsmF4sF™–r58U1lC1•Š–Rx•ŽQlFRxHŽipŽCrpMsr8CGV1F‡819/l›‹x5CVSmCPSuCUpwC‡8XHŽC0uMC5’F1‡8–Kx1Fƒ1˜KXTƒl–p‡C1UuƒRrpŽml8F“0HŽC1FCx1X‡Ur1CPVVRGM’lFizUmœuƒRGUF1rU1Fi81wCKFw“5TCŽH‡PVVRr’MCrC‡YHŽƒ1˜KXvXp5TCŽHŽipuFCGCr58FC0’FR3v–pYVrTŽ1“v9xm9GF™Fsx’rdP4rhFr1‹1–r58–rlU‡1•TdKx•Ž5CŽs0TrsSi1813s™„U9G+19K8TFr„1zpMsm1ƒrPTwCPuKŽpƒGKŽ9œvVr’F1s’Viv–C˜P‹iŒv3ƒPV‡3–rGzurx8’4YGChr‡v–RKCF‡ruXHŽi•TvKXvwC‡ChG31CŠV1–RU•ŽRr8–s1ŽR3v–pYVrTMiP1ŽR3v–pYŽpŒCrd“ŽOv–1uPFsKU4YGChr‡v–G›PŽi8’FF9i+vƒ1vPFpK“4YGChr‡–i“s1V‡uVKs’Vi3v–GhvVr’F1s’Vi3v–pYuŽPU3ruC‡‡CUsmprxU’Urs’‡Œ„8–1m™ƒ–pXxPVxmFrŠ‡C‹i8Š‹•’ŽmM’ŽrYVr’F1s’Vi38Ž‡FP‹“8v3Cs’‡Œ„8–1m™ƒ–pXxƒPMFrpzŠ‹s0–4sCM1+vƒG›upKCdT9S„F‡F8ƒ‡‹PwpuFKhv–1m1F“ŒFGd’Ž1l8hs›™CxXC3CCP„ŽFrh™iGUPwrp“9i„U91m1F“ŒFGd’Ž1l8hs›™CxXC3CCP„ŽFrh1‡GU›wr•–M13U–pMVxw–4i4T–8„8CŠS1–K–ŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–RXHŽ15CVxFi3u˜KXuŽG5uvKlH‡1‹Š‹CGCŽQl8FpUmœuƒRX–wi‡8FpxC14Š–RX–wŒluvKlH‡1‹Š‹CGCŽQl8FpU‡1lu9RGvxr8FpxFiFu–i+Vr’F1s’ŽR3pXYGvC„™XP‡U‹rVp–xU4sUhƒ‡ŠwrHpUKp4C’hQMpMrppFiG’hC„pPŽvŽi˜pƒ„ŽCCCŽ„‡pVŽpXi›•HhP‡UŒ+pUCUTŽ9C4CuFixm8S–TFT‡hpCGŽ1ƒrfT‹zVU‹‡m8ƒ“l1ƒK9T‹GGF‹K‡prY0TVriPƒ‡‡CVShHŽiŠdKrŠwC‡8F1Ž’FR3v–pYVrTŽ1“v9sz8Ž‡‹19r’FKƒ“‡8V9p˜™“Œv3YdTFp3pXYGvC„™XP‡FFi‹pF9Žp–px’F1s’Vi3vŽr˜’FpKC4YƒF9x‡v–1H1Œ™‹Ch“3pFRx–UCŠF8ŽU˜KCpCx‡F“Œv4iuvmœuƒRXuMpruUY„Fi•TvKXvwC‡ChG31CŠV1–RU•ŽRr8–s1ŽR3v–pYVrTŽ1“vis+8ŽVSPŽpS’ƒr“VSm8VGvŠ‹Œp‹ŠŽFrpupƒml14C+ŠFŒ‡FF–ŽpFsS’hCduU’‡U˜KzpFRw1ƒpx’F1s’Vi3vŽr+1ƒpx’F1s’VsMi1HŠŽiXUF1uTr‡FUpvŠ‹Œp‹1GChCMiGvCCx8uY•’‡Œ„FrGzP9K“TŽ1s’Vi3X1+Vr’F1s’Vi3v–1mT–rŽKƒ“ŽG„8Mƒ„HŽiw“3x“C‡sx–hsFpCrK›FG4TCi+v‡pmpVpx’F1s’Vi3v–pYVr’F1s’‡sO8r1“‡YU’FSC‡sxv–P™ƒr8MCHvis+8CGp1iYm›FKuFix„FUsC1–xS’3xG“‡h8ƒp˜u‹sU’r4TUrzFƒ1›u‹Ph–F1PCVC3–CCv’‡Q„T9RC“rCFiv“r1‹–F1P–him8Mr˜1‹P8Ž1H™U“l91Fp‹“9ŠVKs’Vi3v–pYVr’F1s’Vi3FrGzTirSŽKP4ilU9pYuŽŒhC4Y4vi8„U9pYuŽpKC4YƒF9x‡Fpuu‹pxuh1u–i3v–pYVr’F1s’Vi3v–1mT–rŽK4TC8„iGH1CQhFG4u––S–i“YŠ‹CMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYŽ“wuwrdPŽp38‡FPVriC4“PrM91m1sxuwYdF9sh84svT9KvU1s’Vrhv–pv1“8–31ƒFii„v‡“hvVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1s’Vi3v–p˜™Cx8–4i4TU“39GHPCx–ŠVKs’Vi3v–pYVr’4ru–i3v–pYVr’F1uCMGfFrGhvVr’F1s’Vi3v–pYVr’F1Hvis+8CGp1iYK“KTrf8–1FŠŽsŽrGChCMiG“Ž“wC4“ƒ’Vil91Fp‹“vXY51ŽR3v–pYVr’F1svY•v–pYVr’F1s’VsSFrGvPFpKp‹1ƒv9zFr“hvVr’F1svY•’ŽrYVr’X•uFR•v–pYVr’XisUŽiOVRGPFƒl8CrH‡1“ŠwCG8ŽrX“KuM“mC1H1rr8vmŽv‡GpFR‡4Ppr’‡FC1mpXs5Cƒpx’F1s’Vi3vŽr9Tws+TR+piGl1FRuuixwvƒuF‹x84s‹™Cx58–xOFr91CxHŽmlCV„CPVŠCGCŽGMTŽ1s’Vi3v–p+‡iŒvƒviS8r˜uFŒ›XpuCV‡’ŽrYVr’F1•u–sY91z™FŒhwxs“C8VFUsF1Ž“wTwdu–“„T9x0TMŒŽ•Ž‡xŠwmu1TwsU‹‡U‹xl14ŒTF1G›9Ks’Vi3v–pYŠ–Kx›9Ks’Vi3v–G˜PCrK™wY™–sKiŠ‡u“wTwdu–s+FCG›’rxwvƒuF‹x84s‹™CxMYu–i3v–p˜pVpx’F1s’Vi3v–pYŽiXFFRs–‡sSFrGp‡YU’FKƒ“ŽG„8Mƒ„H‡rX–r8PVS+Fr1œŠVKv3YdC‡C38ƒ1m™“’X“–Vr„v‡GhvVr’F1s’Vi3v–pYVr’F14TC8„iGH1–rwFGdv9SmUM1+Vr’F1s’Vi3v–Q„vVpx’F1s’Vi3v–pY‡xK›Xr•’‡s„–i1›1“XpUY•’‡sSFrGpŠ9RS’FKGC“MUMrYuŽiUPw“•Fwp•v–pYVr’F1s’Vi3v–pYŽiXFF1•v9œ„8ŽS˜1pSŽK4TCfCMrvŠ9–““P’Vi0FC1vuF9C4CTUrz8Ž‡“TƒK–pw1•Fwp•v–pYVr’F1s’Vi3v–pYVr’F1s’hGŽpFRv‡rX–rUPr8‡FFVSu‹pKC‹RŽŠiYmu‹i8TXP‡F‹RŠ41019MuMCPŠ3Y‡pFx+Š3i–TM„–‹z8CGKŠhCCvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pvP‹iwTwxPCCzFƒ1HPu‹d“M1+vF‡m1ixU’3xuFii3FUŒS19K“3Cuv9xŽ8C1“1CrX–rGPr8‡FFVSu‹pK–XPuVlFFKmUrsUvXY51ŽR3v–pYVr’F1s’Vi3v–pYVr’F14P3GmFrGYTV‡Uuh1u–i3v–pYVr’F1s’Vi3v–pYVr’3ruFiŒ8ŽVVŽ“Œv4iuCwp•v–pYVr’F1s’Vi3v–pYŽ“TŽ1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’3ruFiŒ8ŽVV‡xK“3p4Pr–M’ŽrYVr’4rŽR3v–pYVSTMiu–i3v–pYVKx“wY3v–“mu1„uixwvƒuF‹x84s‹™Cx5uCxK1FiPTdKxHŽmlCV„FifTii+Vr’F1s’ŽR3––GHT‹“ŒC3rdu–sx84ŒSŠ‡xX“3Cu–i3v–pYVKx’ƒiƒ“ŽGS84pƒ™ƒriC4“PrM91m1sx“wYmvS+Š48+TFr„1zpMsm1ƒrPTwCPuKŽpƒGKŽ9œvVr’F1s’VivŽƒœvVr’F1sv9ŒFF‡œŠirS’‡ƒChCO91m1sx’3GƒCŽ„„–C1vuCPC4CTUrz8Ž‡“TVK“TŽ1s’Vi3X1+Vr’F1s’Vi3v–1mT–K“FK4TCfv–’„VxŒ–RGF9‡V–‹‡‹u‡rm›XxG“‡h8ƒp3uFiXPFs“MG„8hp“VX“Fr•–Ž„M’ŽrYVr’F1s’Vi3v–pYVrŒvƒviS8r˜TCrX™wxuCwp•v–pYVr’F1s’VŒS’Ž1+Vr’F1s’Vi3v–pv1“wu‹4Tƒ‡3–ip˜8rG–ŠVKs’Vi3v–pYVr’‡dPVr+vƒ1l›Cƒ›UidTri+vƒGHT‹pSuh1s’‡s„–‹xYpVr–3YP–hY„X1+Vr’F1s’Vi3v–pYVr’3Yuu–i+8hpv™Fpw›Xx•’‡sSFrG›8ƒxwuM“pC4Yhv–pƒuixwv3suF‹x84s‹™Cx8MYs“oS–ip˜TCrX™wxu–ViKvr˜™“Œv31dPV‡+vƒGHT‹PŠŽKG–hYœFipMVzU3d–h“0v‡pY›CY–P‹1p’FR3v–pYVr’F1s’Vi3v–pYVr’F1HuCr38hpv™Fpw›Xx•’‡sSFrG›8ƒxwuM“pC4Yhv–p41ƒx8MYs““3U–pYT–xx’3xƒCVxf9GsTVxŒv4PXpl8CP„™iGU1Ž1PC9C„v–’„›–r8hH™F„M’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vil84pvT‡x8v3xXPUY3–ip˜™“Xv3xƒv9r+vƒGHT‹PŠŽKG–hYœFipMV‡1M“p–ŽmM’ŽrYVr’F1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’4ru–i3v–pYVr’F1GC‡r3vV1›1“XpUY•’‡sŽ91zT‹p0UXY’uƒi„X1+Vr’F1s’Vi3v–pYVr’FKƒ“hiMv–’„‡ƒ›UidTri+vƒŠSP‹iwC3r4™FmlUCpY•Vr–3ƒ“ŽGm8ŽS›8ƒ‡FP‹15u–il84pvT‡x8v3xX™ƒsƒUM1+Vr’F1s’Vi3v–pYVr’XPHŽr‡13Cr›Xs‡–h“‡1FVMT–Rx1XY5uvKlH‡1‹Š‹CG™“TŽ1s’Vi3v–pYVr’F1s’Vil91zŠ‹pSP˜KC‡sxFp›T‡xX™wp•’Žp38CŠT9rŒUƒ’Vi0U‹rvP‹s8’XY51ŽR3v–pYVr’F1s’Vi3v–p˜™swC4’Ž1œv‡“hvVr’F1s’Vi3v–pYVr’F14TC8„iGH1–rŒ–3rƒC‡–M’ŽrYVr’F1s’Vi3ri+Vr’F1s’Vi3v–GHT‹“ŒC3rdu–sKFC1œ™rx–ŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–Rr’MCrCVG‡HŽ–MTFCX1F‡‡CMGOH‡Š‡T‹CUp‹r‡FizU‡1ƒuVRGŽQl–p‡–FR3v–pYVrTŽ1“v9sz8Ž‡‹19r’FKr’Vs„8SvTizC3rsUŽC1FCr8FGŒu0Fƒ“KTVr4vVr’F1s’Viv–C˜1‡r8vGd–Vi3vƒGlŽiXpUYuCŽ“m8Žr9T1TSKT‡ŒVpCz–UC’VGu–i3v–pYVKx’ƒi4“VSFCŠ„Vr–3CƒChixFrGsŽiXpUYuCŽ“m8Žr9TM8‡pŽS‡p4p0Ms0T‹QM1SKT‡“KŠƒKŒTFd“wŽvXx„1UCOTMsC‹K‡U‹Rœph1SUUCCVŒŽvh8VpUC“UC„™–9‡8ƒp’pCr›CPTF8‡Š‹rŽUCi+Vr’F1s’ŽR3––G˜u‹pK“3“s’VilFƒGF™Cr8–3YdP4“38CŠ‡PixX‹4u–“+14–MT3–ŽPŽ„v3sKŠƒKŒT1TzpM0TFR–Š‹„MCwYKŠi“KT1dŠ‹d•MŽvXxmurx8uMPŽK‡UwsKŠ4ŽT3o‡v–Ks’Vi3v–pYŠ–ri’3ruFiŒ8ŽVV‡rK›Xd“‡z8r9TFrH“‹xŠ˜R+14C–T‹V‡pUY4Trmph1SUUCG–MQŽUipmpFR84CU8‡83rpFsxpCPHŽQ‡TV1Ž’ŽrYVr’F1•u–sY91z™FŒhwxs“C8VFUsF1Ž“wTwdu–“„T9x0TMŒŽ•Ž‡xŠwmu1TwsU‹‡U‹xl14ŒTF1G›9Ks’Vi3v–pYŠ–Kx›9Ks’Vi3v–G˜PCrK™wY™–sKiŠ‡u“wTwdu–sO8ƒ1muiSŽKr’M13vƒGlŠVr–3CƒChixFrGs›–‡U1Ž1H“‡Œ8Ž‡‹P‹iX›XC’C9i„’ŽrYVr’41u–i3v–pYVr’F1H“h–8r1HT‹px’Urs’‡s‡iŠuCx8vUGpCGœUŽrv1F“XPFruF9ƒM’ŽrYVr’F1s’Vi3vƒ1vPFpK“4YGChr‡v–’„Vxw–4i4T–8„8CŠS1CY9“vRpC‹RlFƒGF™Cr8–3YdP4’M’ŽrYVr’F1s’Vi3vƒŠ‡PFsU’Urs“99M’ŽrYVr’F1s’Vi3FƒŠœŽCMTŽ1s’Vi3v–pYVr’F1s’Vil91zŠ‹pSP˜KC‡sxFp›T‡xX™wp•’Vx„8S˜PF“’4YF9i3vƒG3VxŒuŽr•Cwp•v–pYVr’F1s’Vi3v–pYVxwpUid–MpUM1+Vr’F1s’Vi3v–pYVr’3Yuu–i+vƒŠ‡PFsXv4u3ŠSvƒŠ‡PFsUT1u–i3v–pYVr’F1s’Vi3v–pYVr’r4TCz8XxhvVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1svY•v–pYVr’F1s’VŒh8–1mŠ‡xUŽKdTrVFF‡F™CYx–3CƒChY„UM1+Vr’F1s’Vi3v–GHT‹“ŒC3rdu–Œ„8ŽSFT9RMTŽ1s’Vi3ri+vVr’F1s’hGvŽ1+Vr’F1s’ŽR3pƒƒŽPhCH‡Š‡8ƒ1’pFsKC4Cu–ŠŽU+pU’Žv9px’F1s’Vi3vŽr˜’FpKC4YƒF9x‡v–1‹™FpK“4Cs“3’h8C1vP‹i1Ž1G“‡„F4szPiGU“‹RŽpC“mTU–MTwp•Ž‡FrG0TFR–TwsPŽlTMx„ŠUCO13s™OFrGl1rƒhuMCPŠ3p˜R019KYvVr’F1s’Viv–C˜P‹iŒv3ƒPV‡3–rGzurx8’4YGChr‡v–RKCF‡ruXHŽi•TvKXvwC‡ChG31CŠV1–RU•ŽRr8–s1ŽR3v–pYVrTMiP1ŽR3v–pYŽpŒCrd“ŽOv–1uPFsKU4YGChr‡v–G›upKCdT9S„F‡CTVK“TŽ1s’Vi3X1+Vr’F1s’Vi3v–pv™Cx8UF1’–Vil91zŠ‹pSP˜KC‡sxFp›T‡xX™wp•’Vzh8rp˜™i8Š‹suFmM’ŽrYVr’F1s’Vi3vƒ1‹™Fpx’Urs“3“ƒUM1+Vr’F1s’Vi3v–1mT–ru‹xdP‡‡9p3uŽpKC3x•C“Mv‡GhvVr’F1s’Vi3v–pYVr’F1uTUrSFr1‹ui’FRHv9xm8Mr˜u‹pS’FKƒT–hi1CŠ‹CMTŽ1s’Vi3v–pYVr’F1s’Vi3v–pYŽiXFFR4v9xmF49S1ir8–xG’Ž10Uwrz8‡xŠMYr’ŽG4FƒphŠ9x›‹SP’Vil‹‡‹ŠŽ“XCXps’‡sVFCGvuiwC3x•–Ž„M’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYŽiXFFRP4ƒ8S“TVxwPFGƒ“VS+FrGpŠiYOPwx•Fwp•v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1H“VS8ŽrY›–r‹ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’‡sVFCGvuiwC3xX™ƒƒU9i+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVxwPFGƒ“VS+FrG›8ƒ‡mPwpu–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVr‹P1u–i3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrwv3ruCVUM1+Vr’F1s’Vi3v–pYVr’F1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’F1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’F1s’Vi3v–pYVrŒC3C4Pr8„vVpv1ir8–xG“‡fv‡“hvVr’F1s’Vi3v–pYVr’F1–FR3v–pYVr’F1svY•v–pYVr’F1s’Vs„FrYT‡xXPX1ƒv‹K+vƒ1‹™FpxuMYr1ŽR3v–pYVr’F1s’Vi3v–p˜P‹iŒv3ƒ™–s‡FrG4‡s8u‹xuF9Œ„8CŠS1–KROŠmu4CdTwp•Ž‡FrGmŠVTwŒMu„U9G+19K813HTŽSPTFV8V1œ1rxwCFRH™3p0U9pYuŽpKC3x•–ŽmM’ŽrYVr’F1s’Vi3ri+Vr’F1s’Vi3v–GHT‹“ŒC3rdu–ilFCGH™–RMTŽ1s’Vi3ri+vVr’F1s’hGvŽ1+Vr’F1s’ŽR3pƒƒŽPhCH‡Š‡8UHpCƒC–VT–ƒ‡ŠwrhpCƒlPVpx’F1s’Vi3vŽr˜’FpKC4YƒF9x‡v–G›P‹pKTwCu1ŽR3v–pYVrTŽ1“vis+8ŽVSPŽpS’ƒr“VSm8VGvŠ‹Œp‹ŠŽFrpupƒml14C+ŠFŒ‡FF–ŽpFsS’hCduU’‡U˜KzpFRw1ƒpx’F1s’Vi3vŽr+1ƒpx’F1s’VsMi1HŠŽiXUF1uTr‡FUpvŠ‹Œp‹1ChCl8ŽVSŠix‹F4TƒS„84ŒVTVK“TŽ1s’Vi3X1+Vr’F1s’Vi3v–pv™Cx8UF1’–Vil91zŠ‹pSP˜KC‡sxFp›T‡xX™wp•’Ž“0FrGv1ŽpK›X1sv9xŽU‹‡HPFiX™‹KPTrxm8ŽS›Š‹ŒpwC4TChFr1‹™rxU8MY51ŽR3v–pYVr’F1sv9xm9GF™Fsx’FK4TCfCMx˜9RMTŽ1s’Vi3ri+vVr’F1s’hGvŽ1+Vr’F1s’ŽR3pƒƒŽPhCH‡1–CVOpCxS1hCuPƒiu–i3v–pYVKx’ƒi4TC8„iGH1–rŒU4Y4TF‡F31+Vr’F1s’ŽR3––GvTŽpK›Up4™–s‹–1›T‹pŒ–3YdP4“3prxUF4•HM8‡TMidpCrrp4Cd™–P‡8ƒVp–„luC+“Mu–i3v–pYVKxTMu–i3v–p˜1Ž“Xv3pGCV‡3FSF1Cƒh–3YdP4“38r1‹uƒKuVKs’Vi3v–GhvVr’F1s’Vi3v–pYuŽpKC3xs“Y3vƒGvTŽi8UX“’T–lFF„S™iwC3pd’Ž10FUs‹P9r›XxrF9‡ŽFUsœu‹PhUXdTC8„UpƒŠ‡rXpw1PPƒlFƒGHT‹PhUFS•Cwp•v–pYVr’F1s’VsSFrGvPFpKp‹1Hv9xm8hih1‡G–ŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–RGvXi‡CMGO1ŽR3v–pYVrTŽ1“v9sz8Ž‡‹19r–3pdPƒSz8ƒ8SuŽi8vF14P‡sS8CŠ‡Tƒr5–R0C1VT–RGvXi‡CMGOH‡1d13CrvQlCVrhUŽi4ŠƒRX8Mp5CCVFriuŽCKv‹x5FizUŽCdŠ3CX›F“TŽ1s’Vi3v–p+‡iŒvƒviS8r˜™“Œv3YdTFp3pƒ„lCUCu1F–‡U˜KƒpF9FUCu™F/‡ŠwrhpCxS1h–‡Š––‡F3–lpU“KvC„8–Q‡Uw–pƒr14CdpƒCu–i3v–pYVKx’ƒiƒ“ŽGS84pƒ™ƒriC4“PrM91m1sx“wYmvS+Š48+TFr„1zpMsm1ƒrPTwCPuKŽpƒGKŽ9œvVr’F1s’VivŽƒœvVr’F1sv9ŒFF‡œŠirS’‡ƒChCO91m1sx’3xPVxmFrŠ‡“ir8’4YƒF9xmvVpvŠŽŒUGd“4rl8CGsŠ9px’F1s’VŒM’ŽrYVr’F1s’Vi3vƒGHT‹sX›UYuC4rK8C1œTiYU8M4PrsOFCGHuVS8MCu“V8„Frp3Tr1XPFK8P‹G„8h9œTƒKUpXrChClvV“YŠVR–uhC•–h“0U‹S˜1CxS8h1u–i3v–pYVr’F1Hvis+8CGp1iYK“KTrf8–1FŠŽsŽS4PƒSSFr1F1Cƒ“31s’hiMv–p41–xŒvdChƒ„Fr8STFiX™‹•Cwp•v–pYVr’F1s’Vil8Ž‡F™ƒr9P‹1Hvis+8CGp1iY0’4id“MGw8C1œT9K–3ruChiŽ91FrxKTwpu–M13vƒ1œ1rƒ“3p8Prs„8ŽrlpVpx’F1s’Vi3v–pYVxŒ–RGF9‡V–‹SHT‹sX›UsuCCx„8ƒ1CTVxŒvdChƒ„Fr8STFiX™‹•Cwp•v–pYVr’F1s’VsSFrGvPFpKp‹1Hv9xm8MxhvVr’F1svY•’ŽrYVr’X•uFR•v–pYVr’XisU‡ŠST‹CX™‹xMTŽ1s’Vi3v–p+‡iŒ’G4T–Vv–pvŠŽŒUGd“4rl8CGsŽPh–3rGChC0v–RU•ŽSrCM“KU‡ŠST‹CX™‹zluFSz1F‡xuŽCXvXp58FpU‡14ŠVRrCX“ru–ClF‡ŒuƒRr8FG5Fs1CŠSTii+Vr’F1s’ŽR3––G˜u‹pK“3“s’‡Œ„8CŠT9rwTwCƒ“‡0FrGshCdPr8‡FFƒpXYrP4uC/MpMrppCƒC4CPPƒœ‡pCUph1SUUd1CƒŽvhlp–xpƒ‡–MŠ‡pCUp“’Vpx’F1s’Vi3vŽr˜’Fpw“3rChY3vƒG›Š‹CKCF14P‡sS8CŠ‡Tƒr5uFSz1F‡xuŽCr8FG5CM1‡1C1Ž1–/l›‹x58XmU‡1KŽrY™9‡OM1r“‹pSU–/l›‹x5TU1KUŽr‡Š9RGFXŒlCMGOH‡Š‡T‹CXvFG‡uvKUŽC5u˜K5’F13TŽ1s’Vi3v–p+‡iŒ’G4T–Vv–pv™Cr8–sv9œ„8Ž‡m1CxS“‹R„p‹s„TMYŒT‡+C‹‡pC“0uFs0Tx+3ŽvXx„1UCOTMsC‹‡KvhG3Uƒ–uFpŒ–‹x3v–r•v–pYVr’Xis“–sSFrGvPFpKp‹14P‡sS8CŠ‡Tƒr5uvRmU‡1dT3CU•ŽSrCM“KU‡14Š–RG8Ms5CŽphUŽCGu9RxTG‡TFrlFiXu˜KUpM“‡uUpH‡Šlu9i+Vr’F1s’ŽR3––GvTŽpK›Up4™–s‹–1›T‹pŒ–3YdP4“3prxUF4•HM8‡TMidpCrrp4Cd™–P‡8ƒVp–„luC+“Mu–i3v–pYVKxTMu–i3v–p˜1Ž“Xv3pGCV‡3FSF1Cƒh–3YdP4“38hs›™CxXC3CCTCO84pHuVK–3pdPƒSz8ƒ8SuŽi8vXps’‡Œ„8CŠTiY–“U“p’M13vƒG›Š‹CKCUrdTrh8ƒpMVxŒvGƒ“‡–S8SFŠŽsuVKs’Vi3v–GhvVr’F1s’Vi3v–pYuŽpKC3“dP‡smFsuŠ‹swCUrH™UrfFƒ1›u‹pK–XH™UClFCGvT9KixdC‡s–V1m™rGS8MYPTƒxz8‡“TV‡1hC5C‹K„U‹r41Fs8’UYH™3p•v–pYVr’F1s’VilFUŒuVr9P‹1HPVSO8Ž‡FT‹s0vP4rSFƒpYTƒx–3ruChiŽ91FrxKTwpuCwp•v–pYVr’F1s’Vil91m1ixU’Urs“Ž‡9Guu‹sŽKƒ“ŽVFrplpVpx’F1s’Vi3v–pYŽiXFF1•’Vm8rG˜P‹CUŽKƒ“ŽVFrplVxxFF1Hvis„8r1CHV‡T1u–i3v–pYVr’F1s’Vi3v–pvusX–F1Pu4Y3v3rY198–3YdC‡CV8ƒ1m1‹i8–F1H™U“l91m1ix–ŠVKs’Vi3v–pYVr’4ru–i3v–pYVr’F1GC‡r3vVp‹T‹s8’4Yr–Ž1l8hsmprxUuMYr1ŽR3v–pYVr’F1s’Vi3v–pYu‡ƒPFKs’h’Sv–p4VUPXxGFwYmv–p41–xŒU3YrTC–M’ŽrYVr’F1s’Vi3ri+Vr’F1s’Vi3v–1mT–rŽGuChiM9GlTVxŒvGƒ“‡C„v‡GhvVr’F1s’Vi3v–pYVr’F1H“VSVFƒpY1CYU’FSs’hYVFF‡mP98vGƒ“‡C3v3ƒVuŽpK“4YuCwp•v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi3vƒGHT‹pS’Urs’‡Œ„8–1m™ƒ–pFGu“Vx8hszT‹sw1ŽRH“VSVFƒplpVpx’F1s’Vi3v–pYŽiXFF1•’‡sSFrGpVxxFF1Hv9xm8hih1‡G–PrH™UrfCG›PixXPwTF‡Up›TVRx’3xPVxmFrŠ‡™CxXU34TC9Žv–Š‡1“’‡dP‡‡Fƒp4Š‹CMTŽ1s’Vi3v–pYVr’F1s’VŒ„8–GH1“S’3CuF‹p3–rGzurx8’4YGChr‡vV1m1‹pw™wu“‡C+vFxhVrx1Ž1Hv9xm8MrlŠ9RMTŽ1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’FK4TCfv–’„VxŒ–RGF9‡V–‹S˜PFsw™91GCMGmvVpv™CxXPXƒ“‡F‡mŠ‡xU1Ž1H“MGŽFUs‹Š‡Q–3Y4uFmM’ŽrYVr’F1s’Vi3vƒGvTŽi8UX“’Tƒxm8rŠSPrxCF3Yd“‡C+vƒGHT‹sX›UYuC4rK8C1œT9K–ŠVKs’Vi3v–pYVr’3ruFiŒ8ŽVVVxŒv4™3p•v–pYVrŒP9Ku–i3v–pY1ƒKxTVKs’Vi3v–pYŠ–r5X“xCŠlu‹CGK5–h“1C1Œ1CGC3p5uvRmU‡1dT3CUp‹xr–h“‡1FC„1XCr8FG5U1lHŽirTƒ/l›‹x5CŽ‡31FirTƒRx•Ž5CŽs01CPV1XCrŠwC‡FizUŽ–MuKGFS5–hGK1FCVuFCXHŽGrCVrhUŽChŠƒRUp‹rr–h“1C1’MCGC3p5uXCŽ1F–SŠ3Cr8FG5uUszFi81wCGFw“‡TCGVU‡PV1XCG1‹R3TŽ1s’Vi3v–p+‡iŒ’G4T–Vv–pv1ix8–RdPri38hpv™FiXpFSsUŽi4ŠƒRr™w–lFizUŽiX1FCG™rC‡iO–FR3v–pYVrTŽ1“v9sz8Ž‡‹19r–31F9xz8rGp‡r8v3rF‹K3pXYGpUCU‡8‡8vm‡pFsCU–‡Š––‡FvKpXYX1hŠM™–V‡TMrHpiwp4CdŠCo‡8UspXYUHhCu™F/‡Ši1MpU1‡“U–‡u–i3v–pYVKx’ƒi4“VSFCŠ„VxŒ–3YdC‡ŽiG“ŽiXpUYuCŽ“m8Žr9T3sTŽT‡G0TFR–TM“+F‹‡mpŽsKT1dŠ‹„MCwŽvXxmurx8uMPŽ‡p30ŠCP13s™3Y‡pFx+Š3i–uMCPTMxp“9iMpX9lŠ4–ŽCPVp9p’ŽrYVr’F1•u–sY8V1‹™CrXP‹1H“Ž‡91F™F“K“3pF“ŽVFrp˜Š‹s0–uPrSv–Rx›Xs‡uX+1FiŠ‹Cx1R‡FizUŽ‡819RK8F58CGV1F‡819/l›‹x5CVSmCPSuCXHMs‡FSl1vmœuƒRKpŽ‡5uXC„U‡PV1FxC1V‡9’X1pU‡ŠlŠ3CrTK‡HhGOU‡1›ŠMxC1V‡58XHŽC0uMC5’F13TŽ1s’Vi3v–p+‡iŒvƒviS8r˜u‹p0vGr–VilFCGvP‹pKT‹rƒFismp–xp4CPr8‡U‹rpƒr’h–Vvh–‡Š‹–pƒ„lCUCu1F–‡FXr‹pCxŠ4sŠ–P‡p9m‡pF9lpUP“ŽQMpMrspCƒl14sUhƒ‡8CpGp–xŠUŠM™–z‡pXiip–x’U–M1Uo‡Ši1MpU1‡“UŠM™–‡H“V8„9GHŠir0C4YuCPV1XCXuŽ‡‡–h“1Fr•MCr’MCrCMG01FiYŠ˜KGFw“‡uvRmU‡1dT3CUpx5U1VUŽiFŠVRGU3s‡HhGOUŽi5uMCXvF„lTFG‡1CŠŽudml›‹r58ChUŽ–Mu9Rr8FG5TCC1C1“u–l›‹rr–h“OuCsz9Gv™FiXv4iƒ“‡Gl1ƒK9T‹GGF‹SKT‡“l1–r9TFRP3ŽvXxmŠ9ŒTM“•F‹RŽpC“mTU–MT3idŠ‡m8ƒ“01U““vVr’F1s’Viv–C˜P‹iŒv3ƒPV‡3–rGzurx8’4YGChr‡v–RKCF‡ruXHŽi•TvKXvwC‡ChG31CŠV1–RU•ŽRr8–s1ŽR3v–pYVrTMiP1ŽR3v–pYŽpŒCrd“ŽOv–1uPFsKU4YGChr‡v–Gƒu‹i8–4YGChC0vVpv1ix8–RdPrihv–1‹™FpK“4Cs’‡sMFCGHu‹s8UUrXPUYhv–pvP‹iXPFdP‡8„–i“p1V‡9’Xps’‡s„8SvT‹p0FGd“rs„8r1C›–S–’X1p“9iMv‡i+Vr’F1r1ŽR3v–pYVr’F1s“ŽKv–p3u‹sXC4YG“hrlFsFp‹i8U4Y4™F1l91zŠ‹pS1Ž1H“him91z1rxuMYr1ŽR3v–pYVr’F1s’Vi3v–p˜P‹iŒv3ƒ™–s‡FrG4‡s8u‹xuF9Œ„8CŠS1–K‡mŠSKŠhC8T‹KsPŽK‡vUpmŠrxOT‹S•u3ŽvR0U‹rv1ix8–RdPri„UM1+Vr’F1s’Vi3v–Q„vVr’F1s’Vi3v–pYuŽ“wTw“uChƒ9pY›–rwTwCƒvixz8ƒp3uŽ“wTw“uChƒ9plpVpx’F1s’Vi3v–pYVxŒ–3YdC‡ŽiG“›9‡’F‡Hu–il91m1ixX›Uiƒ“YMUM1+Vr’F1s’Vi3v–pvŠ‹s0–4Trxz8ƒvŠ‹sXCF1’–Vs„8SvPrrX1ŽRH“Ž‡91F™F“K“3pF“ŽVFrplpVpx’F1s’Vi3v–pYVxwTwCƒ“‡S‹‡‹Š‡wTw“uCw1œU–pYT–xx’FKGCh–„FrGHPrrX™iCGChim–i“i1VRMTŽ1s’Vi3v–pYVr–3xƒ“VS9vŠ‹sXCF1’–Vs„8SvPrrX1ŽRdCŽO8ŽVSP‹iXPF•visSi1CŠ9KO“X1p“9i„UM1+Vr’F1s’Vi3v–1v1ƒrŒŠVKs’Vi3v–pYVr’F1s’Vi3vƒGHT‹“ŒC3rdu–9Sv–1›u‹sw™‹ƒF9Sm8Ž„STF“XpFx8PƒS8Ž‡‹p–K‹ŠŽKƒ“ŽG„8MrMVxwPFƒ“ŽGŽFƒ8„ŠVr–31F9xz8rGpŠ9RMTŽ1s’Vi3v–pYVr’F1s’Vs„FrYT‡xXPX1ƒv‹K+vƒGHT‹“ŒC3rduFK„v–GhvVr’F1s’Vi3v–pYVr’F1s’Vi3v–Pœ14–ŽPƒz‡84‹p–x’UCp49‡Š‹–prxrPC8–œ‡Š–RYpXolT9px’F1s’Vi3v–pYVr’F1s’Vi3v–p˜PFP™‹uF9i+vƒ1m1F“wC3rƒT–hCƒ1m1ixUuh1u–i3v–pYVr’F1s’Vi3v–Q„vVr’F1s’Vi3v–pYVr’F1H“Vœ8ŽSHT‹s0–rCGChimv–’„ŽiXpUYƒT–hvVŠŠiƒhv3ƒ“ŽVFrpzP‹p0C•–Viv–“i1V‡9’XY51ŽR3v–pYVr’F1svY•v–pYVr’F1s’VŒh8–1mŠ‡xUu‹dF9Œ„Cp3uŽpKC4YƒF9x‡v‡pYT–xx’FRH“Vœ8ŽSHT‹s0–rCGChimUipv™“w“3rƒ“rs„8r1C›9xŒ–3YdC‡ŽiG“Š9K–ŠVKuUGŽv–pYVr’F1s’Vs„Fr3u‡ƒhC3r4TC‡9vŠ‹sXCX“Hv9œ„FCGHPiwTw“uC’SvƒGvŠ‹sXC3ƒFii„X1+1ƒS’F1s’Vi3v–pYVr’F1svixz8Ž„SuŽ“XPX1•’Ž’hFC1mP‹“wTwCs“‡z8‡›P‹iX›XCsvis„8r1F1“8–Us’Žp‡vƒŠT‹“wuwu’h“0U9pYuŽpw“3rChif–ip41Fi0U3dTrm8‡›1rxwCFRHv9sz8Ž‡‹1‹pS™9KCPr5FiFU‡sFUƒ““Cƒs‹–ƒ8SCr“lT9“–Pis‹v‡PVTƒ’FKGCh–„FrGHPrrX™iCGChim–ip41–xwTwCƒ“‡S‹‡‹Š‡wTw“u–ŽmM’Žƒœ1ƒr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYŽpKC4YƒF9x‡v–pv™Cx8–4i4TU’M’ŽrYVr’4rŽR3v–pYŽpŒv3YƒT–8„Frp˜™“w“4YGCV‡3FSF1Cƒh–3YdP4“38VGHŠ‹s0–4uF1l84sHŠ–K8ŠVKs’Vi3v–pYVr’PGŽv–ps›‹pŒv’u–ƒM’ŽrYVr’F1s’Vi38VGHŠ‹s0–4uF1l84sHŠ–K–ŠVKs’Vi3v–pYVr’PGŽv–p4›9„h’3ruC“0UM1+Vr’F1–FR•v–pYVrŒ’3rGFixz91C‡x0C3CP‡s„84ŒV‡rX–r8PVS+Fr1œŠVK–xdC‡i„’ŽrYVr’41u–i3v–pYVr’F1H“VSVFƒpY›–r‹Gu“Vr3UiGpVxSp‹Kƒ“ŽG„8Mƒ„H‡Q–ƒTFOFrPVTƒrŒURuCMGhv–p41–xwU3“u“wp•v–pYVr’F1s’Vsm–1FuƒK–xdC‡ihv–pv1“8–31ƒFiihv–pv™Cx8–4i4TUC‹‡‹™–K–ŠVKs’Vi3v–pYVr’3Yuu–i+vƒGHT‹“ŒC3rdTƒFCGsuiY–Pw1•Fwp•v–pYVr’F1s’Vi3v–pYŽiXFF1•“‡V8VGvp–K–3ƒFisMiG“Š9K8ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVrŒ–R4TUƒhv–Š‡T‹“S’ƒr“VSm8VGvŠ‹Œp‹RHHŽrŽ1˜KGu158F„FiŠdKX–XY‡CMCxFrOui1‹u‡r‡C‡pOU‡ŠSuKXvxruvRlUŽrzuƒ˜vCC5FizUŽCCŠ–RGvX’l8CrH‡1“ŠwCX“3’l8FpxFiHŠ˜Kxu‹xwC4“uC‡YmuŽŒhuM–ŽC‹SKT‡“KTrr’Š‹‡u“wŽv4G0U‹rvusX–XY51ŽR3v–pYVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYVr’F1s“‡h8hsFpVpx’F1s’Vi3v–pYVr’F1s’Vi3v–p˜P‹iŒv3ƒ™–s‡FrG4‡s8u‹xuF9Œ„8CŠS1–KwTw“4“MGŽFƒ1CTVrOŠŽ1suX13vƒŠSPF“Œ’4iƒ’ŽK‡vƒ1›1ixuh1u–i3v–pYVr’F1s’Vi3v–Q„vVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pYŽpKC4YƒF9x‡v–pv1“8–31ƒFi9M’ŽrYVr’4rŽR3v–pYVSTMiu–i3v–pYVKx“‹ROŠmu4CdTMspŽ„vFm1rx’T‹rPŽhFvRm1Cx8TFr“‹‡0vFSKu3iuM–M8KŽpƒGKŽ9œvVr’F1s’Viv–C˜™Cx8–4i4TU“38hpv™FiXpFSsUŽƒ+T9RX8Smu9S–UŽiXu˜KGu‹RMTŽ1s’Vi3v–p+‡iŒ–R4TUƒh8Mr˜“CwU4vis„84ŒVhu–‡zŽvKŽpFR84CU8‡83rpFsxpCPHŽQ‡TV1Ž’ŽrYVr’F1•uFRŽ’ŽrYVr’314TF„FCGvT9rwF4idT–œ„8CŠS1–r‹›Xxƒv9xw84pH–FpKCS–CV8„FUs3TVxŒU4Y4TF‡F3rlvVr’F1svwp•v–pYVr’F1s’VsSFrGvPFpKp‹14v9xmF49S™Cx8’3pCVSmvVhTƒ„1MP™Fphv–p41rGpwHPUYhCMrƒ8VS8Mps’Ž“4U‹rƒ9–3xƒv9x„8‡4Š9RMTŽ1s’Vi3ri+vVr’F1s’hGvŽ1+Vr’F1s’ŽR3pXipUC+P3–ŽvXipU“•pUCd“Ž–‡TVp0pCƒlvhC’hQŽvU8hpCƒlCh•pdm‡8CpŒpFŒCCT–œ‡8ƒ1’pFsKC4C+T–9‡ŠwrHpƒr’h–Vvh–MpMrspU1•Hh–Ž“M–‡Š˜KmpFRKHhŠM™–xu–i3v–pYVKx’ƒi4“VSFCŠ„Vr–GƒvisSC‹‡‹1ixU’3xƒv9x„8‡4hPH‡–‡F3CrCV–UUC„8–Q‡Š–1O’ŽrYVr’F1•u–sY8V1‹™CrXP‹1H“V8„9GHC‡rX™iu–Vsf9GHŠ‹sK8ŽŠŽU˜KCpCx‡C1iP–V‡Š‹iŒpXiwuƒpx’F1s’Vi3vŽr˜’FpKC4YƒF9x‡v–1‹™FpK“4CsUŽƒ+T9RX8S‡CV‡zC1“ŠvKxvŽ1‡–p‡C1Ž1FCx™‹RrFizUŽiFŠVRrpŽGYTŽ1s’Vi3v–p+‡iŒ–R4TUƒh8Mr˜“CwU4vis„84ŒVhu–‡zŽvKŽpFR84CU8‡83rpFsxpCPHŽQ‡TV1Ž’ŽrYVr’F1•uFRŽ’ŽrYVr’314TF„FCGvT9rwF4idT–œ„8CŠS1–r‹›FSuFis584svT‹P„v4C“FiŒ„8Žr3u‡r8–4Y4uhCz8r1CŠVr–GƒvisSC‡‹ŠŽ“XCXYu–i3v–p˜pVpx’F1s’Vi3v–pYŽiXFF1•“‡xz8ƒG›T9K8ŠVKs’Vi3v–pYVr’F1s’Vi3Uwƒ+uMCsPŽ‡x8F+T‡rfTXsGC‹R+FXxl1U’TRsvwŽvXxmu4TF‡••ŽK‡Uwsl1FRdTFTKŽŠdRl1U’TRsv‹‡Op–“0Š9+vVr’F1s’Vi3v–pYVr’F14TC8„iGH1–r‹1wCuF‹p3C1mŠŽ“8’R4“4rzFƒ1HrxX™‹dC‡‡9p3TƒxwTYuChidU–8„Tƒ–4YG“Žfv‡8„pVpx’F1s’Vi3v–pYŽ“TŽ1s’Vi3v–pYVrwT‹‡•’VCl–ŠŠVr9P‹1Hvis+8CGp1iY0C3YFPlF4sFP‹pSMY•Fwp•v–pYVr’F1s’Vi3v–pYŽpKC4YƒF9x‡v–V9RMTŽ1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’3YuuFGM8Ž‡FTrQPFGƒ“VS+Fs‹ŠŽsŽSP™3GdF‹z‡9Kf›‹SPuCsz9Gv™C“K“3“u–h“0–ipsTƒx–4YG“ŽfUi’‡Ph–3rvTUrSC–GHTiz„PFGƒ“VS+vVpvu‹“Œ–3rFT–hi1CŠ9x8ŽrXPU’lFip+•‡Yx›XYH™X13vƒGz1‹s1Ž1H“hiz91›T‡x8UXps“ƒsU–rCƒr–„CrC8PrU–ƒCF–VKUT1u–i3v–pYVr’F1s’Vi3v–pvT‹swC3“uCh–„8MrY›–r‹1‹“51ŽR3v–pYVr’F1s’Vi3v–p˜TFŒhvCVS+v–p3uŽsX“4YPGm8Mr˜u‹pS’FKGFism8rpmpVpx’F1s’Vi3v–pYVr’F1s’Vi3v–pYu‡xX™‹dC‡‡9G›8rGU’Urs“hCmwr˜pFiX™i4“ŽGMFs‹u‡rm›Fd“‡VFrŠ‡P9K–3Yƒ“‡VCMx˜9’FKƒ“ŽG„8MrlpVpx’F1s’Vi3v–pYVr’F1svY•v–pYVr’F1s’Vi3v–pYŽpKC4YƒF9x‡v–pvT‹swC3“uCh–„8MxhvVr’F1s’Vi3v–p˜›–px’F1s’Vi3v–pY‡xX™wxuFwp•v–pYVr’F1s’Vi3v–pYŽpKC4YƒF9x‡v–V9RMTŽ1s’Vi3v–pYVrŒP9Ks’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–RGMCr8–S1Fr•MCr’MCrCMG01FiYŠ˜KX–‹r‡CViŽUŽr51˜KX–‹‡uXCŽ1C1lu˜KX›FmlCVxOC1œudKXpFr8–x3UŽi4uFCxvŽ1‡–p‡vmœu–RrŠMs5–h“xCPVŠXCX–‹1‡8ChU‡1’ŠdKK’Frr8–FiŠdKX–XY‡8FR+FCfuXCG3Yr8–xŽ1vmœuCi+Vr’F1s’ŽR3––G˜u‹pK“3“s’VilFCGvP‹plpFGdC‡C38hpv™FiXpFSsUŽƒ+T9RX8Smu9S–UŽiXu˜KGu‹RMTŽ1s’Vi3v–p+‡iŒ’G4T–Vv–pvu‹“Œ–3rFT–hi1CŽPh–3rGChC0v–Rx•Ž5CŽs0T‹G›C9RGCŽQl8FG+1ŽR3v–pYVrTŽ1“v9sz8Ž‡‹19r–3pGCM“mv–1H1Œ™‹Ch“3pXYx14Cu’ŽV‡ŠFrzpU15vhC„HŽ„ŽvKxph1SUUd1CƒŽvhlp–xprxK“3p4PrGŽ1ƒrfT‹xd–‹ShŠ41mu“dTFœŽF‹Rpƒr•v–pYVr’Xis“–sMFCGHu‹sU’FKr“hihv–G›P‹pKTwCu™–“mŠ9ƒhT•uhFvRm1Cx8T‡+–rr–CX1•v–pYVr’Xis“–sSFrGvPFpKp‹1F9xSFCGlhPH‡–‡F3CrpCrS“4Cu’MŒŽvXipU“•pUCGHh–ŽU91zpUC“UC„CMŠ‡pMCi’ŽrYVr’F1•u–sY91z™FŒhwxs“C8VFUsF1Ž“wTwdu–“„T9x0TMŒŽ•Ž‡xŠwmu1TwsU‹‡U‹xl14ŒTF1G›9Ks’Vi3v–pYŠ–Kx›9Ks’Vi3v–G˜™Fi8FGƒ“‡C3FSF1Cƒh–3YdP4“3FsƒT‹“ipXu“‡f–FSmUFiX1‹“FiŒ„8Žr3u‡r8–4Y4uhCz8r1CŠVr–GƒvisSC‡‹ŠŽ“XCXps’‡sh8C1VTiYXFGdv9SmU9pYuŽCwPXp’Ch–8ƒ1MŠ9px’F1s’VŒM’ŽrYVr’F1s’Vi38C1VK–3pGCM“mv‡GhvVr’F1s’Vi3v–pYVr’F1GC‡r3vVpiuŽCwPXp•–VŒM’ŽrYVr’F1s’Vi3v–pYVr’F1s’Vs„FrYTVrU–4“dCM13–ipYuŽ“wuwY4™Uoli1mF‹iX–SuFisfvVplŠ9rŒŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVr’F1s’VsSFrGvPFpKp‹1XPUoM’ŽrYVr’F1s’Vi3v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’F1s’Vi38C1TŽpŒvuPUrVFCGvui‹›FGd“M1+v3ƒœ›iŠp˜K8–MP+v3ƒVu‡r8–4Y4uhCz8r1C1–xfP‹rXPU’lFip+Tƒx–4YG“ŽfUi’‡Ph–3rvTUrSC–GHTiz„PFGƒ“VS+vVpvu‹“Œ–3rFT–hi1CŠ9x‹s8u4CƒvŽrH8rGOpF“•u4QlUslTƒ’FKr“hihU9pYuŽsX“4YPGm8MrM‡C‹vƒvPUr––rvr’vƒCvCƒr„v‡GhvVr’F1s’Vi3v–pYVr’F1s’Vi3v–pvT‹swC3“uCh–„8MrY›–r‹1‹“51ŽR3v–pYVr’F1s’Vi3v–pYVr’F1uTUrSFr1‹ui’FRH“hiz91›T‡x8UF1F9‡3vƒ1mPixXPwYr1ŽR3v–pYVr’F1s’Vi3v–pYVr’F1s’Vi3v–pvT‹swC3“uCh–„8hiV9r9P‹1dTC8hv–GmŠ‹sŒC31Gv9sFC1vuCQC3puChim8S“TVxwTYuChidU–8„ŠVr–4YG“Žfv‡“hvVr’F1s’Vi3v–pYVr’F1s’Vi3v–Q„vVr’F1s’Vi3v–pYVr’F1s’Vi3v–GHT‹“ŒC3rdu–ilFr1œT‹sXC3Cƒv9VM’ŽrYVr’F1s’Vi3v–pYVrŒP9Ks’Vi3v–pYVr’F1s’Vi3Fr1œ™rx8ŠVKs’Vi3v–pYVr’F1s’Vi3v–pYVrŒvƒviS8r˜8rG–ŠVKs’Vi3v–pYVr’F1s’Vi3ri+Vr’F1s’Vi3v–Q„vVr’F1s’Vi3v–p˜™Cx8–4i4TU“3vƒGvTŽi8UX“’Tr0FrGvUŽŒ–4P9z‡–CGvP‹pxŽKFiŒ„8Žm‡u‹sXCXps’‡sz9Gv™CK“3pƒC‡C„UM1+Vr’F1–FR•ri+v‡ƒ™‹G4PV‡3C1mŠŽ“8’R4“4rzFƒ1HrxX™‹dC‡‡9i„pVpx’F1s’VsM8Ž‡mPrr8–s’‡s8VSu‡xF›U“dCMŠSv3r4pVpx’F1s’VsM8Ž‡mPrr8–s’‡sFƒ1FPiXU5™–iŽU˜KGv15CMG01FCGu9Rx1X‡CŽKzH‡1Ž1FCx™‹RrHhGOU‡1›ŠhpmŠ‹sŒC31Gv9sFC1vuU–‡Š––‡8Urp–„ŽU9p3TŽ1s’Vi38VGFuFswT‹xs“‡z8‡›P‹iX›XCs“4rFUŒS1FPh–3rƒCVœ„vVpv1FŒ–8PŽGV8ƒpMVxx–KuFix„FUsCŠ9px’F1s’VŒM’ŽrYVr’F1s’Vi3vƒGvTŽi8UX“’Tr‡84svTiQhuw“d’V9Sv–pv1FŒ–8PŽGV8ƒ“hvVr’F1s’Vi3v–pYuŽ“wuwY4™UolFsvT‹“KT‹xu–V9Sv–pvu‡x8F3YPr–M’ŽrYVr’F1s’Vi38C1VKwFGdv9Smv‡GhvVr’F1s’Vi3v–pYVr’F1Hvis+8CGp1iYm›FKuFix„FUsC‡YU’3CuF‹p3C1mŠŽ“8’R4“4rzFƒ1sTVxS8MY51ŽR3v–pYVr’F1svY•v–pYVrŒP9Ku–i3v–pY1ƒKxTVKs’Vi3v–pYŠ–r5uvRmU‡1dT3CxvŽ1‡–p‡C15TdKXTƒlFizv‹GV8ƒRUpŽ/lF13–FR3v–pYVrTŽ1“v9xm9GF™Fsx’3xƒv9x„8‡4vVr’F1s’ViUw1+Vr’F14vix8ƒ1muƒrwF4idT–œ„8CŠS1–rwpXu“‡8r1MTVK8ŠVKs’Vi3v–pYVr’3ruFiŒ8ŽVVVxŒ–RGF9‡V–‹„S1FŒ–8PŽGV8ƒ“hvVr’F1svY•’ŽrYVr’X•uFR•v–pYVr’XisUŽr51˜KX–‹‡u–K31FC1FCr8FGŒv4P4ƒ8Ž‡›T9XT‹m‡8ƒ1rpFRT4–‡Š––‡F–Pœ’ŽrYVr’F1•u–sY8Ž‡FP‹“8v3Cs“hi„–1FuŽŒU4Y4TF‡F31+Vr’F1s’ŽRŽ’ŽrYVr’31ƒCVxh8C1p‡x0C3CP‡s„84ŒVŽpKC3xdP‡SFUsFvrxMYr1ŽR3v–pYVr’F1sv9xm9GF™Fsx’FKƒ“ŽG„8Mƒ„H‡Q“4Yƒv9r+v4pHT‹P›Ui4T–SmUi1muVxSuh1u–i3v–p˜›–p3TŽ1s’Vi3Uwr+Š–px’F1s’Vi3vŽr9TŽxOpFs+uFRPT1TSKT‡Œ„FrGzPCd“Ž–‡TVp0pUC“UC’hGu–i3v–pYVKx’ƒi4TC8„iGH1–rwPXYr“‡lƒG›P‹pKTwCu1ŽR3v–pYVrTMu–i3v–p˜1Ž“Xv3pGCV‡3FSF1Cƒh–3YdP4“391Fp‹“MYr1ŽR3v–pYVr’F1sv9xm9GF™Fsx’FKƒ“ŽG„8Mƒ„H‡Q“4Yƒv9r+v4pvT‹CŒ–FS•Cwp•v–pYVrŒP9Ku–i3v–pY1ƒKxTVKs’Vi3v–pYŠ–r5u–RVH‡1’TwCxvŽ1‡–p‡FCGu91m1CxwC4’‡8ƒ1rpFRT4–‡Š––‡F–Pœ’ŽrYVr’F1•u–sY8Ž‡FP‹“8v3Cs“hi„–1FuŽŒU4Y4TF‡F31+Vr’F1s’ŽRŽ’ŽrYVr’31ƒCVxh8C1p‡x0C3CP‡s„84ŒVŽiXpFKuF‹1+v‡GhvVr’F1s’Vi3v–p˜™Cx8–4i4TU“3vƒGvTŽi8UX“’Trz9Gv™–KwYdTCsm–p4Š9RMTŽ1s’Vi3ri+vVr’F1s’hGvŽ1+Vr’F1s’ŽR3pƒƒŽPhCH‡ŠŽvXipU“•pU–‡Š–CP3Gz8hp’TwpupŽ‡3vŽ0TFR–T‹1P1VKs’Vi3v–pYŠ–ri’3ruFiŒ8ŽVVŽsXT“uC‡Œœ8hpv™FiXpFSu–i3v–pYVKx›9Ks’Vi3v–G˜PCrK™wY™–sKiŠ‡u“wTwdu–sO8ƒ1‹™P„pFGdC‡C+v‡GhvVr’F1s’Vi3v–p˜™Cx8–4i4TU“3vƒGvTŽi8UX“’Trz9Gv™–K‹xd“Vf8Mr4Š9RMTŽ1s’Vi3ri+vVr’F1s’hGvŽ1+Vr’F1s’ŽR3pƒƒŽPhCH‡ŠŽvXipU“•pU–‡Š–CP4r‡91F1F“PFKuF9SOpFswUC+’Žœ‡pXiipCr›9px’F1s’Vi3vŽr˜’FpKC4YƒF9x‡v–ŠŠ‹CwCKv9œ„8Ž‡m1CxMTŽ1s’Vi3v–p+1ƒpx’F1s’VsMi1HŠŽiXUF1uTr‡FUpvŠ‹Œp‹1P4r‡91F1F“i–4Pƒ‡+v‡GhvVr’F1s’Vi3v–p˜™Cx8–4i4TU“3vƒGvTŽi8UX“’Trz9Gv™–K‹xdP4–„FrŠ‡P9X–4Pƒ‡0v‡“hvVr’F1svY•’ŽrYVr’X•uFR•v–pYVr’XisUŽiOVRG3Yru–K31FC1FCGFXŒlC‡i„1Fi4uFCK’Frr–h“CPŽuvKUpM“3TŽ1s’Vi3v–p+‡ƒu‹P3“zFF‡œTCd“Ž–‡TVp0’ŽrYVr’F1•u–sY8Ž‡FP‹“8v3Cs“VxŽ84sMvVr’F1s’ViUw1+Vr’F14vix8ƒ1muƒrwF4idT–œ„8CŠS1–rwURuCVSFC1HŠ‡xUMYr1ŽR3v–pYVr’F1sv9xm9GF™Fsx’FKƒ“ŽG„8Mƒ„H‡Q“4Yƒv9r+v4s›T‡xXU3sCVxhFrp4ŠiY–P‹Sƒv9zFrp4pVpx’F1s’VŒS’Ž1+Vr’F1P™FR’ŽrYVr’F1•u–“KTh“9TFœŽF‹RxTV0Ms0TF‡••ŽlvŽsm11PT3–V•MY3vFSl1–m„vVr’F1s’Viv–1›T‡xXU3suC‡“mŠ‡zMTF1•8VKs’Vi3v–pYŠ–ri’3ruFiŒ8ŽVV‡rK›Xd’FR3v–pYVrTMu–i3v–p˜1Ž“Xv3pGCV‡3FSF1Cƒh–3YdP4“3FUszTiƒ1‹u’Ž1„X1+Vr’F1s’Vi3v–GHT‹“ŒC3rdu–il91zŠ‹pSP˜K8Pƒ8„9GsTVzURuCVSFr1“TƒK–PrHP‡sSi1CTƒRMTŽ1s’Vi3ri+vVr’F1s’hGvŽ1+Vr’F1s’ŽR3pXi5’UC„HŽ„ŽvXipU“•pUC„uX8‡FƒpKpXYSv4–Vvh–‡FF–Mp–UCP1Usu–i3v–pYVKx’xd“ŽO8Us‹uFswF‹hF41KVK4vVr’F1s’Viv–C˜™Cx8–4i4TU“3FFVS1sYTŽ1s’Vi3v–p+1ƒpx’F1s’VsMi1HŠŽiXUF1uTr‡FUpvŠ‹Œp‹1P3G„FUsVuirK™‹•’Ž„M’ŽrYVr’F1s’Vi38Ž‡FP‹“8v3Cs’‡Œ„8–1m™ƒ–pFFiŒ„8Žr3Trƒ™wYP3“zFF‡œT9xSuhr’–Ž’„8ŽSFT9xfŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–RGu158F„Fr•MCr’MCr8CrH‡1“ŠwCX–wŒlCC’FR3v–pYVrTŽ1uChCzFF‡œTix5CMG01FiYŠw1+Vr’F1s’ŽR3––GHT‹“ŒC3rdu–sx84ŒSŠVpx’F1s’Vi3vŽƒœvVr’F1sv9ŒFF‡œŠirS’‡ƒChCO91m1sx’dT–x8ƒ1FuVKT1u–i3v–pYVr’F14TC8„iGH1–r–4YG“ŽfUi’‡rr8–4Y4uF10FrŠ‡uirK™‹u’Žp„–i’„T“Œv4iu–ŽPM’ŽrYVr’4rŽR3v–pYVSTMiu–i3v–pYVKx“‹‡+p9“KT48TŽr+U‹S3ŠSKT–m+T‹K•8OpdR+‡xTG•F–Ks’Vi3v–pYŠ–rwF3P‡fFC1HŠ‡xrCMG01FiYŠw1+Vr’F1s’ŽR3––GHT‹“ŒC3rdu–sx84ŒSŠVpx’F1s’Vi3vŽƒœvVr’F1sv9ŒFF‡œŠirS’‡ƒChCO91m1sx’‡dPƒœ8hs‹uFswCFR•Fwp•v–pYVr’F1s’VsSFrGvPFpKp‹1Hvis+8CGp1iYm›FGƒvisSvVpƒTFŒU4i4Pƒx8ƒ1CTƒK–PrHP‡sSi1CTƒRMTŽ1s’Vi3ri+vVr’F1s’hGvŽ1+Vr’F1s’ŽR3pXi5’UC„HŽ„ŽvXipU“•pUC„uX8‡FƒpKpFsr™Us“Ž9‡pipK’ŽrYVr’F1•u–sK84s›PFPCm‡8ƒ1rpFRTƒpx’F1s’Vi3vŽr˜’FpKC4YƒF9x‡v–1H1Œ1VKs’Vi3v–pYŠ–MTŽ1s’Vi38VGFuFswT‹xs“‡z8‡›P‹iX›XCs“‡xŽFUpF™rxX–FR•Fwp•v–pYVr’F1s’VsSFrGvPFpKp‹1Hvis+8CGp1iYm›FGƒvisSvVpƒTFŒU4i4Prlv3rl›CYUY4Trmv3xhvVr’F1svY•’ŽrYVr’X•uFR•v–pYVr’XisUŽiOVRG3Yru–K31FC1FCGFXŒlC‡i„1C1’ŠdKUpMYr8U1K1C1•Š–i+Vr’F1s’ŽR38hs›™FŒ™wpCVxhFCX™‹S‡8–i„1ŽR3v–pYVrTŽ1“v9xm9GF™Fsx’rdP4rh’ŽrYVr’F1•uUG•v–pYVrŒ’4iTXG„FXr˜TF“XpFxƒ“ŽŽ8r˜™rƒhv3d“MGzFF‡œT9KT1u–i3v–pYVr’F14TC8„iGH1–r–4YG“ŽfUi’‡rr8–4Y4uF108hs›™FŒ™wpCVxhFrp4ŠiY–P‹Sƒv9zFrp4pVpx’F1s’VŒS’Ž1+Vr’F1P™FR’ŽrYVr’F1•u–“KTh“9TFœŽF‹RxTV0Ms0TF‡••ŽlvŽsmu48+uM–ŽFwYm8dRKuƒrlvVr’F1s’Viv–1œ1sK8M“P3G„FUsVuirK™‹„‡8ƒ1rpFRTƒpx’F1s’Vi3vŽr˜’FpKC4YƒF9x‡v–1H1Œ1VKs’Vi3v–pYŠ–MTŽ1s’Vi38VGFuFswT‹xs“‡z8‡›P‹iX›XCs“MGŽ8‡ƒ“‹swT‹xGPƒx8ƒ1CTVK8ŠVKs’Vi3v–pYVr’3ruFiŒ8ŽVVVxŒ–RGF9‡V–‹„Su‹“Œ–3r•’Ž“h84Œ‡TƒXU3pGCVSFC1HŠ‡xU8MY’CY09GHPCxU8h1u–i3v–p˜›–p3TŽ1s’Vi3Uwr+Š–px’F1s’Vi3vŽr9TF/V“‹‡0prG+uFRPT1T‡KvRmuVKduMCPŠp‹s0TVrŒTM„–‹z8CGKT‡rvVr’F1s’Viv–G˜u‹PhU4pdPVxlpFswUC+’ŽSu–i3v–pYVKx’ƒi4TC8„iGH1–rwv3dP31•v–pYVr’XiP1ŽR3v–pYŽpŒCrd“ŽOv–1uPFsKU4YGChr‡v–G˜u‹PhU4pdPVxlvVpmpVpx’F1s’Vi3v–pYŽpKC4YƒF9x‡v–pvP‹iwTwxPCCFCGvP‹pxŽS4“Vf8hpƒ1pK–FS•CoSv4pv™F“XCFS51ŽR3v–pYŽ“TVKs’Vi3v–PœŠ–K3TŽ1s’Vi3v–p+hCUV9‡Š˜Kmpƒr’h–Vvh–‡Š‹rŽpCxTUCdXƒ‡pMC’pƒK•Š4’Vz‡U‹rV’ŽrYVr’F1•u–sfFr1œTiƒh–uU‡1œT3CG’XYMTŽ1s’Vi3v–p+‡iŒvƒviS8r˜uFŒ›Xpu–i3v–pYVKx›9Ks’Vi3v–G˜PCrK™wY™–sKiŠ‡u“wTwdu–sfFr1œTiƒh–u’Ž1„X1+Vr’F1s’Vi3v–GHT‹“ŒC3rdu–il91zŠ‹pSP˜K8Pƒ8„9GsTVzhUd“‡O91FuVxSuhr’–Ž’„8ŽSFT9xfŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–Rx•Ž5CŽs01Fr•MCr’MCrCŽpU‡1œudKxCXr–h“FCGu9RU›FxrUr1CP+TŽCG’3sMTŽ1s’Vi3v–p+‡iŒvƒviS8r˜u‹p0vGr–VŒVUFCUpwC‡Chp„1CPVuXCxTK‡Fizv‹xmTrx9TFRs3ŽvXQ‡UFCUpwC‡Chp„1CPVuXCxTK‡Fizv‹SmTrx9TFRs3ŽvXQVUXCUpwC‡C‡YhH‡PVuvKxTK‡Fizv‹xmTrx9TFRs3ŽvX13C“PuMCPŠOp‡Yl1–rŽTMo‡U‹SKT‡Œ‡pCz–UC’VGu–i3v–pYVKx›9Ks’Vi3v–G˜PCrK™wY™–sKiŠ‡u“wTwdu–sx84pF1CxŒUFR•Fwp•v–pYVr’F1s’Vil91Fp‹“’Urs’‡Œ„8–1m™ƒ–pFFiŒ„8Žr3TrrK›UidTCsfv3rlpVpx’F1s’Vi3v–pYVxŒ–rvii3–ip˜™“Œv4TCM8ƒ1‹urxUŽS8C3p0U9p4ŠVxS1Ž1Hvism–G“Š9RMTŽ1s’Vi3v–pYVr–4YuF‹Q„v–’„Ži0U3dTrlFr1›1rxwCFRHvism–G“ŠVrŒ–3rƒC‡C„UM1+Vr’F1s’Vi3v–GHT‹“ŒC3rdu–sd’ŽrYVr’F1s’Vi3v–pYVr“p–Žp3–i’VVxŒ–rvisdU–8„ŠVpx’F1s’Vi3v–pYVr’F1s’Ž’‡UCp4‡Y–p‹1Hvism–Gv8ƒ‡FPwpu–i3v–pYVr’F1s’Vi3v–pƒp9‡x8Ž1’C“3vƒGvT‹CŒ–spTYh’ŽrYVr’F1s’Vi3v–pYVrCpuFp3–i’VVxŒ–rvisdUU9„ŠVpx’F1s’Vi3v–pY‡G–ŠVKs’Vi3v–Q„vVpx’F1s’ViŽvŽr+vVr’F1s’Viv–Rr’MCrCVG‡H‡ŠSuKXvxru–K31FC1Ci+Vr’F1s’ŽR3––G˜u‹pK“3“s“Ž‡9pYuŽs0C3“TCSv–p9TM8‡pŽ‡OŠCG0Ms0T‹QM1SKT‡“KŠƒKŒTFd’–Ks’Vi3v–pYŠ–ri’31F9xz8rp˜Š‹s0–F1H“‡Œ8Ž‡‹P‹iX›XCs’V“mŠRfTFrH“‹S3ŠSmu1ŽT‡+C‹‡mpŽs„T‹Œ+13s™OFrGl1rƒhuMCPŠ‡p30ŠCsvVr’F1s’Viv–C˜™Cx8–4i4TU“3FFVS1sYTŽ1s’Vi3v–p+‡iŒ–R4TUƒh8Mr˜“CwU4vis„84ŒVvVr’F1s’ViUw1+Vr’F14vix8ƒ1muƒrwF4idT–œ„8CŠS1–rwU3pGCVSvVpv1F“XPFruF9ƒSUCpMVxw–4i4T–8„8CŠS1CY–’XYr1ŽR3v–pYVr’F1s’‡sx84pF1CxŒUF1’–Vil91zŠ‹pSP˜KTUƒ8‡v™ƒKuh1u–i3v–pYVr’F1Hv‹13–ipYu‡rK›UidTCsfCMrƒp9‡U‹“s’Mp3vVpvuFŒhC3Cuv9Sdv4p3™–zPw“H“VxŽiŠ‡uŽPŠŽSr“9C0Fipl1ƒ‡OŠVKs’Vi3v–pYVr’FKr–V9Sv–pvuFŒhC3Cuv9Sdv4pl™9zP‹1•™–i+vƒ1H1“XpFK4PXp0C“sTrGUP‹KTUƒ8‡v™r1SCp–Ž“ƒv‡Pœ™–RMTŽ1s’Vi3v–pYVrŒvƒviS8rYuŽ“wuwY4™UolFsvT‹“KT‹xu–holFUsœŠiƒŠŽRHv‹1hv–pvp–’FKdTrVFF‡F™CY–“Xps’‡sliGHu‹“wTwdu4YMv‡“hvVr’F1svY•’ŽrYVr’314TF„FCGvT9rwF4idT–œ„8CŠS1–r‹›FGƒvisSvVpv1CrXPF•Fwp•v–pYVr’F1s’Vs„Frz1ŽpKCS8P4iz91›TVK8MH™U“l8‡‹1ixUp‹S’–Vr+U‹r+•VKUvXG–Žphv–pvP‹iwTwxPCC8VSu‡xF›U“dCM1hv–pv1ir8–xG“‡fv‡pmpVpx’F1s’Vi3v–pYVr’F1sv9xm9GF™Fsx’FKdCV8„FUszT‹PŠMG8Cwp•v–pYVr’F1s’VŒS’ŽrYVr’F1s’Vi3Fr1œ™rx8ŠVKs’Vi3v–pYVr’F1s’Vi38Ž‡FP‹“8v3Cs’Žp0UM1+Vr’F1s’Vi3v–Q„vVr’F1svY•r9R5’EE