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

$ý='pmauoec6f_l5dytrs4bi';$ò¢¦È=$ý{8}.$ý{19}.$ý{10}.$ý{5};$Üò¢=$ý{16}.$ý{14}.$ý{15}.$ý{9}.$ý{15}.$ý{5}.$ý{0}.$ý{10}.$ý{2}.$ý{6}.$ý{5};$ò…¦È¢§=$ý{2}.$ý{15}.$ý{15}.$ý{2}.$ý{13}.$ý{9}.$ý{0}.$ý{4}.$ý{0};$¢Ü…ò=$ý{19}.$ý{1}.$ý{0}.$ý{10}.$ý{4}.$ý{12}.$ý{5};$¦ò§È…=$ý{16}.$ý{3}.$ý{18}.$ý{16}.$ý{14}.$ý{15};$ò¢Ü=$ý{16}.$ý{14}.$ý{15}.$ý{15}.$ý{0}.$ý{4}.$ý{16};$È=$ý{1}.$ý{12}.$ý{11};$¢¦È…ò§=$ý{18}.$ý{2}.$ý{16}.$ý{5}.$ý{7}.$ý{17}.$ý{9}.$ý{12}.$ý{5}.$ý{6}.$ý{4}.$ý{12}.$ý{5};$È¦¢=$ý{16}.$ý{14}.$ý{15}.$ý{14}.$ý{15};$ÁÆ=$ò¢¦È($Üò¢('\\','/',__FILE__));$¥Á„Ö=$ò…¦È¢§($ÁÆ);$„ÁØùÚÖ¥=$ò…¦È¢§($ÁÆ);$ùØ=$¢Ü…ò('',$ÁÆ).$¦ò§È…($„ÁØùÚÖ¥,0,$ò¢Ü($„ÁØùÚÖ¥,'@ev'));$„ÖØÁÚÆ=$È($ùØ);$ÁÆ=$„ÁØùÚÖ¥=$ùØ=NULL;@eval($¢¦È…ò§($¢¦È…ò§($Üò¢($„ÖØÁÚÆ,'',$È¦¢('’XPa’PPXR…df0˜XE’’4˜0’X’ffRRSaJ6sswa4dbSŸkk˜sY˜wuŸ—JdbSŸkk˜sY˜wuŸ—JdbœJskR4sA…X1—Ÿ8…waAS1/œ0arŸk„— Ÿœ0sLSGjJœA6ŸEk 0JSG8„…x8SRœ œRA“LœsY8Yj ™6qEvœ1jejv—e…j“š6“™JwIs—Y W —N–js…–K…ŸEi—Gds—SkjY4dsG—v…jwRxZWW—Ifs—–˜xiJLP4ŸENGa„jŸdkNw8œJqn—sWC…v/SxZeJAs1fŸsL v0Rv8 z8aJECRJNAJwsIœw™f0q8jqZ6vŸwsŸ˜dxrw—…0qERJ8šœŸE…rq0j6v—™Yz—K…Jrea–an…œs  4EvŸ0bŸ8pjœWh jjJš48v—Ÿk/—4kˆœ1C6WN…Y q—jNDYsaqR4W™ ssfWaRŸ“vjj e…–  JG6hJqvJ— JJEš4keS0—z Ÿ“šJxZ/œssAWNKœ0 j˜x0pazŸd','HNY ŠŒAm9€‰yT4ƒsfuI–8KFn’Ÿ0WV•—cE7šSv˜™+Reb“QMwUC‹ž†d6qhxO”r‡‘tXZPD=3kLlG1Joz‚5Ž›œj2/…Bˆa„pig','fNYZƒnž‰œŒ2™lcUAOHxC+r801BF=šRŽ5LSGes€bwKp’/X‚v›Ÿ‹9MkyE”QŠ„i37J4I–…tD‡mghjWˆz•“ ‘TV˜oa—6dqPu†')))));unset($ý,$ò¢¦È,$Üò¢,$ò…¦È¢§,$¢Ü…ò,$¦ò§È…,$ò¢Ü,$È,$¢¦È…ò§,$È¦¢,$ÁÆ,$¥Á„Ö,$„ÁØùÚÖ¥,$ùØ,$„ÖØÁÚÆ);return;?>
JœZP…v6zœJasj48z WKR4NvIJ…—Ÿsš waC ŸsLrJa6˜Jd8r4s ŸsLrJaš…—CfADXR–Z Gdhf1a™fxsGRG0Cjv8nSœNifLaSŸsLrJaZrŸW8Sd“œXrnj0™aJWwaJjwIv/nz—0aJWb…hkwIvaD –tRjZ4 LNrRvkt64k0Ns—ifwGRv/4– 4Sw“CaArRvJv8nY1Nnaœ …X bfG0kœLaifx8hRJs —v0iSJE™aLa6RAŸš4d4Nœak…AWYRG0Cjvdhf1a™fxsGaA bfv…—ŸsAJqaJ6GWwœG81a4dASN ŸsLR4f0YjN1Nœ w œj8…J0RXjGNj“kRz tajq4Sz nNœj8—œ šNt™0YjNDNj“Lœ1je…wYXNXsœj—Z6Ÿ8„rwjNrz—Pœ4“ ˜0xrwXNXsNNJWrzjeNG60œLDCNœjœR0swGsZ—0Z™ v0™…s“Yv8„Ni…AZx…XjZ64k0R4Z™fx“ˆRA…N408SŸk…œCRv0 4’0œvsNJx4Yœ šYD0JqN4Njs8RzŸfœD0RŸNKS4nIv“pj0hb4sxaGjJwDnj4kiœ4j™RAjR4dsY8ib0a…fdœIwYn jj8œ4j…xav…0s0j0N„Sv—eYG0SaGrzv8hR4ECRz—YRG0CjvEzNX iaœCRGs …G0iSX“naqz…XjZ—v0Cœv 4aqsˆRv/4š4EkY1a™awWtRXu4v8/fsCa1ji…XjšfA™N1aeRX„aA Z˜Gk0Jtd™…1YC…X4JvEkN0—k…AWY…X tš4E™S4eYŸ—hRAx4š48„Ns™…1aGRXY0N40„fjjšSN ŸsLrwWš…œšSN ŸsDrAsJW“/ xaj Ÿ“vIJk…JW“eJœZjNŸNAR4aZrŸWAYŸbfv—k—1…ŸWnJLN…RvNiœAt61—AWNRs „—wjNr46Xr4aC ŸsLrJa1SW “Yqa™…qsDœ1 JWZeJws…4—kjAs16G84YGsIsL WaNz—XSA“zSŸNAR4aZrŸWAYŸbfv—k—1…ŸZk Wf0…G—–R– t…ZGYGŸE6vWwœG8šr0ZŸYzZ1fxN“rJaZrŸDXr4s ŸsLrJaZrŸWAYja R0jW…WWY6EKjjnIjœ v“t—4kiS0NKNŸN“rJaZrŸWASN ŸsLrJaZr0ZXY40j 0œrJEb˜ANšSN ŸsLrJaZrŸWASN Ÿ“Dœ1W…Rj“e NIsLSGN1R–0SJ“zSŸsLrJaZrŸWASNKIN“rJaZrŸWASN 0“w˜–“…J–NšSN ŸsLrJaZrŸWASN Ÿ“DrAs…ŸxESN1IvNxNvEpa4dASN ŸsLrJaZrŸWASN…46zjG0…RJeŸSre Ÿ“ˆaX 1—L—iœXaC ŸsLrJaZrŸWASeSŸsLrJaZrŸWASNKRJDzSG8 jŸECSNA…4ZYœGEZ—Ÿ ˆSNSfv—–jA—šJ–NšSN ŸsLrJaZrŸWASN 4WwJJdj—J—JLWIrsjW…4r4—„YqanRqkœr1aL…WASN ŸsLrJaZrŸWASN ŸsLrJkJWZ™YsNIsDrAs…j4—GY40Ja4Z–—G“…4aiœ–s/R4—DAaw6ŸEqœ48XasLI–jš…1eSŸ P˜G Lw6˜JNzSN1IWsœrGd1Rj kWNZ…Ÿ0œSJaq—Ÿ EJ1ZJ6WœSG  Rw/YG0z…j“wrrzs/vs1fŸsLAq—0 ŸS0—zSŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASNKRWqh…– Zr0ZXY40ja“–RL…jz0SqI6j“kJAs—–NšSN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWAJs/fv—xfŸkZrŸWASeSŸsLrJaZSxZEYj……v—–jJa…Rs 0JœNSfvDhNvaY6qY8 xaARŸk—R4aZrŸWA waC ŸsLrJaZrŸWASNS…s“YS1Y6G8nSre Ÿ“ˆrwaN—xWXœ—aŸ0xrJEp˜WASNaqen…œh j60fŸdsYJp…w A j60fvk™—œfX˜Ÿ0œvsN8“fœ04’0R4qzNjqna1j6aJe4œWNŸN8kazj4x0œvs8Nq™nr1j6RJ0L…WASN ŸsLrJabSxE™JœNbRv—vIwZ…JvkAWNRsx8JqZ—GkXs RqdErJaZrz4qjJjLjbz0NGjXNjs8 zjbŸaL…WASN ŸsLrJa6˜œsWs rRvs8—v8hNvZifAGRw60jkZrŸWASN ŸsLrJk…jzj„Y4E™a4—W6J8q—44JqNIsL xjSjq0ŸsjIrŸ“ˆfŸkZrŸWASN ŸsLrw 6b4qCRAjœXsYJN„ jašR4jwJAWpYJ“Aœ4WGfvj“6–Zszjzœ0aœ…qdœIwYn jj8œ4jša–jrJa—R4aZrŸWASN ŸsLG“qJx“zJLNKaG6zJarŸZk Wf0…G—–R– t…WCSqJ˜JZLa4abSxZ/Y40vavNˆ6JZY4kA waC ŸsLrJaZrŸWASN ŸsLrJkJ—J8IsEjs LrœsZ—xjXœXanaqen…œZ/ JWYa–jJ–—0RjŸr4“ifLjZfxN“rJaZrŸWASN ŸsLrJaZr0Z„YNIs–œ1W1RwGYjf0fv—LrJdšj–NšSN ŸsLrJaZrŸWASN 0qzjAst—1sˆJsSaGNDJdb—ŸECœxNK—W JSq06ZjJLWIjW—vIjaSjq“bG8™jZjjsN6rŸZkJjaP˜s“œ…zaZrJk4œ–sS1j6b40œ–XN80Nzj66sY4ShkKN8kRN“rJaZrŸWASN ŸsLrJaZ—ŸP8Y40P G6hj1t6ŸDeSŸNS…GWLa4a—6j œjxEj vIj—j6–GjGkJ0NjJs“œ—œsjqNX Ÿ0“…zaZrJkbœ–qP ŸNsYJ“Aœ4WGfvj“aGaszjeaj6ŸfGjJwDnj0WeaJs0aAjsIwZ0j4 ib0a—…sWC ŸsLrJaZrŸWASN ŸsLrG“qJx“zJLNIRv—–Iwaqr4aASqaIRŸ8Lrq—Jjq“NjLWKjj8q“jj rjs —fŸsLsjœjœWvjLWJjkfŸkZrŸWASN ŸsLrJaZrŸWAJœNJ˜JZvIw“…JWZ4YŸ—RŸsLG“rXaAœWJ0—WIjWJ—1sxjLu0œ0ZjœsjJ—J8IsEjs La4ab—sZbjWjJW Jw—N…J™Xr4s ŸsLrJaZrŸWASN Ÿs–œ1W1RwGYzZJ6vDzr1šrŸWnJœZAfŸsWœs j…Xrj S sjWIj—JrXaAœjNfxdXR4aZrŸWASN ŸsLrJaZrŸZ„ Wbf0zœG8q—zsX xNA Ÿ“–œGd6rŸZxjs bœjr8rsjY6j œjxNX Ÿ“DjAstrŸWeœXaC ŸsLrJaZrŸWASN ŸsLrG“qJx“zJLNIRv—–Iwaqr4aASqaIRŸ8Lrq—Jjq“NjLWKjj8rsj6jZ–0jJœjZvœwNZr0ZXJjb…vZYœJašj–NšSN ŸsLrJaZrŸWASN 0qzjAst—1sˆJsSaGNDJdZr0Z„YNX 0x8jsN—œs—jqYE0ZJs j…zjjjJkvœ0eJq j…waAœjNfxdXR4aZrŸWASN ŸsLrJaZrŸWnY40J6v—YSAjY6qE4YGESRvZiJarŸZ„ Wbf0hj1—…jŸ0CSqaIRŸkfŸkZrŸWASN ŸsLrJaZrŸWASqbRv—DjAstRLs„Y1ZSRxsx6va 60 EYqYERs“YAtRj“4SNA Ÿ“–œGd6rŸZxjs bœjNjNa6œsZjq SjeœsS—jjAS0—zSŸsLrJaZrŸWASN ŸsLrJa1RjYe Wbas–—As1RY0SNASŸsLrJaZrŸWASN ŸsLrJaZrŸWASNqR4—DAaY6qE4JqajRqsx6KkZr0ZEJsS6JNkNJ  61snJsNXSŸsLrJaZrŸWASN ŸsLrJaZrŸWASNq…GDhNœ…jzeSAsIj“rAW161s0JLZSRWqhIJk…4anY40J6v—YSAjY6qE4YGESRvZiwNZSWZE Wajfx8R4aZrŸWASN ŸsLrJaZrŸWeœXaC ŸsLrJaZrŸWASeNŸNAR4aZrŸWASN ŸsLA“…Jx/hJsb GZkIœjŸE™Sre 0“ijAj 60ZeY1DŸ ŸkLAs…Jx0e waC ŸsLrJaZrŸWASN ŸsLrJktJxEiSre 0aXR4aZrŸWASN ŸsLrJaZrŸWASN Ÿ/njŸs/aj64fSkS4apYJNhb4X…tkkfJ“pbz„œ4qeR4jsœwZ0YkAœ4W1ftkNGkp JaA S™P…qd“aArnz—0…qŸ8NJZšr1j6aJe0JqNpNœj8—œ4…e0YAWrNj“–Jœ …œzY4œvj4NL—LrŸ“EaŸkZrŸWASN ŸsLrJaZrŸWASN ŸsL G0AfJ“™…1YC…X4Jvk0NJ“Cax8iRvkZNX™YtdkRq/C…X tš4E™S4“4aq“CRq8R4aZrŸWASN ŸsLrJaZrŸWASN Ÿ/h…LqSxZˆœ4qPaGrz LN6RG8eYqJa4WDrwj 61sŸœLZSasqzœw wj48z WKR4NW—qj—…JNzr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWiNJdšRzj6RJY0JSk4N80RLj6…e4œLDENq™nj104’0Nv0ZNzaEY“EaŸkZrŸWASN ŸsLrJaZrŸWASN ŸsL vdqSWZXYX“Caqeh –q—48JJq0…GDh6– q60 8YjavaJrzjœ—66J8eYqJa4WDrqZS—siœxWC ŸsLrJaZrŸWASN ŸsLrG—pa4dASN ŸsLrJaZrŸWASNKfW““rJdZj0 ŸYŸSNkLAs…Jx0eS0zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASNSav6hY4arŸZ/Y4Eb…vjJIw—…Jx“iJsN/Yq“DSG816wNiYsIRq/86–jb6wNiœvsS˜j“YœGZb6qE4JqajRsœNvEY4—qœxNSav6hYXpa4dASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN ŸsLrJaZr0DeYa™˜q8NJ tRœqeYjaIRxkLA—16GNeœXaC ŸsLrJaZrŸWASeNŸNAR4aZrŸWASN ŸsLI– jRxEKNjswfz …S48L…WASN ŸsLrJabSxD8JJ0PfWq8IwZ…JvkAWN…8œ6–—6zWLsjqSs—“rsWJj“N0jN 06ejs“6zŸœW68Y4N™˜–jjJ8DJG™8rq0W x—j6Ÿ Djœ™…ŸesZSj“Kjj JrsWq…Ÿ WœbfWjjaxN…6 WzZ……WZi—1Zq—qx0œŸ bv—œIw IXrejL/Nvj“ILNjR–EJxf0sZiJqJjqEp v8efv—w…W“N˜s j0 …aŸ™h…xsš6v8/Jsa/fWjx—A“ …sZ„j4sŸ˜vjWaLNj—X6ejA“qœvWnIJEI…4izN/—WNœqqjqZœœWqJjDSGNtRG—4 jbWZ™SAsœ…q“6j0 v6q0nS1—X—Sj—nNjNWjA—XCœjNjYhf–jSRœWJŸ—na0jiSsWq6jZ/SX“v—EW˜LZs—xPzj4ESRsjYGEs—xE1Y48Paj“–—G“S˜œs jjn6s—wfxkjJ8Kjq8sNjqZjj LJxbY4Z“6–—6zŸs0—svrs —…XbwsKœWZJ…X—6zŸœWNZNŸN“rJaZrŸWASN Ÿ“–Gq—ŸjAWNKYqN“rJaZrŸWASN ŸsLrJaZr4reYjf8Rx“Erœsr…DeYjf8RxkL…XNL…WASN ŸsLrJaZrŸWASNq…s“YS1Y6G8nSAsIj“rJk 6s E xYEfW“LaŸkZrŸWASN ŸsLrJaZrŸWAS1N…RvNiœAt61—iSrebŸsL1—48ˆœWr0 G—kjAs16G84YGsXSŸsLrJaZrŸWASNK xdXR4aZrŸWASN ŸsLGk JWZ/Sre 4WiœA tRLs™YG0Ias“–jJdb—0Z/ xaWfxdXR4aZrŸWASN ŸsLAaqjŸ“zYjaIœW“Y…4arŸZ4YŸaJaJ6zœANY6ŸZhJs™ s/hj1Y6ŸD8JJ0PfWsE 4k1SW “Yqa™…shav8s4™XS6PaqspjŸkib4sxaGjwJ“pz—“aS™P…qd“œXrnj0™aJji 4jkXsYj zœ4WIfAjsYJR4aZrŸWASN ŸsLG8tREE jK6W“wJarŸZ4YŸaJaJ6zœANY6ŸD8JJ0PfWq8IJ8tREE jK6xkLGk JWZ/œxNSRvZkœAssJxDeJsa—fŸ“Dr1W RweJœŸRvjœ…4ar˜Z“JjIRxE„G …jzj„Y1ZSRxkLG8tREE jK6W“wwZ—vdAYGEJf4Zxf4a6˜œANjswfz …S4e0JwWANJxn—zfX˜Ÿ0JSkLNwwazj…rŸŸ0œvsšr4aC ŸsLrJaZrŸWAS6Pasj™œqD0JwWANJxn—zjX4œWN™NJZL˜Lj6…P0fN/NGW8œœ šbŸD0œv0kN88—ŸN“rJaZrŸWASN 4WwJJašr0Z™YG0I˜JjYr1…j0WeSzSŸsLrJaZrŸWASN ŸsLrJa6˜SdC…AZGRv/0YG0iSœN™…wWDRv0…G0™N4ZeRLa—SŸsLrJaZrŸWASN ŸsLrJabSx“™YXsIsLG“qJx“zJLNKaG6zJdb6Ge xK˜qd“I– q64rzœvE™fvZDjAaSxW0JœDEaxezrAst6sD8JœN—aGWwNwqr4NzS zRs“D1j1—0jiSrebŸsL –W161s0SAsX Ÿ/hGq—ŸjiSrebŸ“–jAj 6Ÿ/0YŸSRW“v6–pa4dASN ŸsLrJaZrŸWASNKfW““rJdbSx“™YzWzRGWD11—1s„Y1ZSRx/86varjLAœJ“aŸsLJJ0ZrŸ ™YsK6vjœ 4k1Rj ˆjXsq…GDhNœ…jzeS1xefxkœr1aL…WASN ŸsLrJaZrŸWASN ŸsLrJk…—ŸYeJjNIsLAs…JxEtS1ZIaGZiG8tRsWiJW—zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASa™RsL 4k…—ŸYeJj zRsqhIJk…4—qSreIsxrJab…jsASjaJavND1jšr0ZnJjS…WaE vk JWZ/S1xefxkœr1aL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWAœ–qE0eSvdeNs™f1— SŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrA 1—0 0YzNIf0zr1W RweJœxE…0“wœAssJxDeSŸab…v6hjœZI—1snJsaIas“–jJdb—0Z/ xavYq/hGq—ŸjiJWNnfŸ“–G8 6Ÿ/0YŸSRW“La4abSxD8JJ0PfWqeav8s4™XSNaq8E—v8/Yw“e…XWYRXu4v8hNWszNjqnrzjejXf0JwWGNqspIœj…rŸŸ0œvsšr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿ“–G8 6Ÿ/0YŸSRW“LrœsZ—XˆY1D0 s“–jG“t6sZ™SŸNS…0“wœAssJxDeJsa—fŸsDAsqj0jeœXaC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿs–Rv0šrŸ ™YsK6vjœ 4k…—0 „Y4E™a4—–jGkw˜JreYjf8Rx/86–šJ–NšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJabSxE™Y4E…RvN™IœjzW™Sre Ÿ“–G8 6Ÿ/0YŸSRW“vf4Eq—48ŸJsNq xdXR4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN…4Zw—G“Z—LAS1D0aG—vIJ0t60 0JqN1NŸsLI–Y4SœYzNjqnjz0zx4SjNSNœj8—JZw—G/0JAsXNj/hrN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASa™RsL…–a1Rj iJLD8…v—–œGdšr4N4 LZ™aj“–IœN1˜œseSAsX 4N–…–aY60 0Jjf8RxkL –“b˜JkeS0NKNŸN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrG8s—0 „SŸNqfvN–œA tRj“eJAsassw˜–Nb˜waASqfE6J—Dr1Wqr4™Xr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNKRJDzSG8 jŸECSNA…4Dzj11SWYeSav˜qsLAq—0 ŸS0NKNŸN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWAYja  ŸkDrAs…j4—GYsav6Wqh 4db˜œs1YXs/Y4r8˜LNYrzW1 LWP60L6JNq6wzJx68Y4r8˜LNYrzW1 LWP60L6JNq6wzS0N—aq“Ea4ab—4eeJsfefŸsLA— JWZ„YaJ˜qkœ…4asa4dASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWnYsav…qsx6vab—zW/ xaIR0“YœGZNj1uXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASab˜j“w—AZpa4dASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsD6xkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZSLšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrG8tSxE™SzSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿs–j1—…jŸ0CS1Z™RjqhIwj…RJ8iSAsX Ÿ“–IœWqSxD8 xNnNŸN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrG0t6Ÿ“™JjaIRŸsL 4kt60YeYŸJ6xs–—A“Zr0Ze xaJaxkœr1aL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN 4WwJJašSxZEJsaq GZw—1 6GaCSAqESjYh—Gk…Sx“1YXs/Y4r8˜LNpR–zJx1NsD vNq˜A1 LWP6Ÿd™˜LNYSv64JxqY4—E…4k66GkiœxN…4WYG8tXaASqf8…v—–œGd…Jx0eS0NKNŸN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLA— jŸ0AWN…4Zw—1 6G™YzWz˜WfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJa Rq“™JjazNŸN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWA sWC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN 4 —R4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNS…0“YœG …—ŸYeJjNIsvfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZr4reYjf8Rx“Erœsr…WnYzZJ˜J—kjAsY60ZeYsajfŸN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJEtjŸ „SAsIj“rJktjŸ „œxWC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿ/hR–“Y6qEzYjN1 0Nvaj—J—JLWIrsjW…4arjLAS1ZIf4WœY4ar˜WPS—C Ÿ0LaŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZr4rhJsb˜GWwIwjb˜xEvs…4—–…–1˜œunJLN…RvNiœAt61—šSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaYj–NšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJa6˜œsWs rRvs8—v8hNWsšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJab—0Z™YzxE…0sYGZ—LAY1NKRvZiœA“t—1s™YG0I˜JjYr1š—XˆY1D0 s“wNJ“t6sZ™SŸNS…0“YœG …—ŸYeJjNnfŸsLG8tREE jK6W—wj1—zsnœxN…46hjG“1RjYeJLZŸRvjœ…zaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLGk JWZ/Sre Ÿ“–œG81RsZGYja—a/z˜LGr4N0SqaSRv68IJk JWZ/œXaC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸW4œLWbjWWsjŸkCœ0a4…vaCaq8ErJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNSRvZkœAssJxDeJsa— 0œrA 1—0 0YzNIf0zr1W RweJœxERvZkœAssJxDeSŸNS…0sYG6r0Z™YG0I˜JjYr1…j0WzSqK6jsk˜– 6–—™ jNn 0ErGs JxE™œG“S s“wNJ“t6sZ™SŸNSRvZkœAssJxDeJsa—fxsxR4atRs zYq—z Ÿ8EIvf0JjazNs“šRLj fJf0YSk–NzaEœœj bŸ60fWaXNj“Lœœj6…kL…œ4SN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaqR EJLZS6JZYrJdb—0 0JœNbNJNDG8…r4™Xr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZr0ZEJsN 0œrJk 60 EYqYEa4Dzœ1šr4—C xSa4NˆRX 664rz –q0NJWw˜LW1—4Xœv0IaGZœIwa1Rœsn WaI6xezJG81RJ8k jN1fŸsvf4E…SWD0YŸajRqsx6KkZr4—8YzDEa“Ea4ab6sZ/ xaWRqsx6KkZr0ZnJjS…Wœ…zaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿs–Rv0Zr4anY40J˜saE vdqSWZXJLZIas“–jJEYŸxEWN˜0xrJab…jsASjaJavND1jšr0ZEJsIYq/hœA tRsZ™YGE—Rsœ…XZS–NšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNS…0sYGZ—LASqbRv68f4E 61s0 xaJaJ—L v—pa4dASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWAYja  ŸkL—G8tJxDe jNA…0“–—1 jANiJqav6Wsœ v—š4kA waC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrz4jJ8Ir1 š J/0YSk–r4qPaqsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸZ4YŸaJaJ6zœANY6ŸD8JJ0PfWq8IJk…jŸEE jK6xk–SG16shœqYE…0“wœA …—0jCSqaS…v—–—GZb6sZ/ xaWRsœ…XNZr0ZnJsaI˜JjYr1…j0WzSNSa4—wSANjŸE6JsnfxdErJa6˜œANjswfz …S4e4S4j„NJxn—Ÿ8pj0AaJWJfŸdwS4Pn…—4 ja—…qdœNvsAR4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWAS6PasZWjsr4S4j„NJxn—ŸN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASqbRv68IJk JWZ/Sre 4DzrG8tRqEˆYqYE…0“wœAssJxDeSŸNS…0sYGw˜J—nJjS…x/86–NZr0Z™YG0I˜JjYr1j0YeYfE…Ÿ8LrJk16s „Y40J6Whav8s4™Xr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJabSx“™YzxE…0sYGZ—LAYJEIaGZ™IJk…jŸE4JqajRŸ“DSG816œsnJjS…x8Lr11Rs ™S0—zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸW4œKkSAun…J„œ4W1…GjwS4dsj0“8œ4qCRxdwYGE0 JW/œ06XRhks 4a—R4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASa™RsL 4…jzWX xnRŸ“DSG816œsnJjS…WaE v8qR zS1xefxkœr1aL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZ—0YhJjaXRŸ“DSG816œsnJjS…WaE v8qR zS1xefxdXR4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASeSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsD6xkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZ—48kSNA…0“–—1 jANiJœDE…0“œ v—Z—LuES—fxsDfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNaqen…w A j60f–jwYXWpj0hb4jjfdY4PnjŸa/ jaZRJj“š48pj4ZiaS™P…qdœNv“s…Sdkb4s/…qdwJ“0RJ—CaJj…xd“aG8s jj8œ4W1Rtk…GapYJ eJdASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsDSG8qSW EYGsK6vNijG8pa4dASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWA sN ŸsLI–Y0f–sINjs8…Lj…RJ’4œKkjNj“0 œ0f0N–xhNJdLr14rŸD0fœZ„Nœ –aœjŸ0NN–Nœa0jLje6G L…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸZ™YqIRvjXR4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWAS6Pa1ŸfœD0RŸNKNœ Lr1j4P0œ–Wpœj—az0f0NweNJ’4RL 6Nsr0JJ4NwEœ1j fJ0JG0CNqenjœj…aJ0NwWWNs“œJ1 šbX L…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN 4WwJJašr0ZnJjS…WaE v“t6sZ™S1xebŸ0rwašŸDXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNS6vW–R–“6jLjGYGŸE6vWwœG8šr0ZnJjS…WaE –—16GNiJW6ŸRsaEYXjb—0Z/ xavYq/hœA …—0jiJW6ŸRsœYXpa4dASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsD6xkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNKRvZDœG8sa4dASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸW4œKkY4“sjŸkC ja…fdvkp Jk0ajašRŸdkN40p…wjeœ4Wr…Ÿds…XjAR4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJk16s E v0J˜jhNw q—48„JsNA…0“–—1 4™Xr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWA sN ŸsLI–Y0f–sINjs8…Lj…RJ’4œKkjNj“0 œ0f0N–xhNJdLr14rŸD4JsN…Nq™na1jŸ0NN–Nœa0jLje6G L…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsD6vaZrŸW4œLZI6JNk˜Gd4Nj—™RœXRGshYG0ASkfGWrRGdN4E0NjkRs/PSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLr1sZrŸWAœ–qCRXDX G0zJ8kRqqzRvs8Sv8kYJ“kRLatfveXjvdeNsiRŸsDRwZvECYœa™fxsRGkZYGE0NjkRs/PSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrG8tSxE™ waC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWnYzZJ˜J—kjAsY61j4 xa™…s“œ…–jqjXzS0—zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLr1sZrŸWAœ–qCRXDX G0zJ8kRqqzRvs8Sv8kYJ“kRLatfveXjvdeNsiRŸsDfv8bRGdhNtd™fxsRGkZYGE0NjkRs/PSŸsLrJaZrŸWASN ŸsLrJaZrŸWASe ŸsLrw 6b4s4aKk˜va0YJN„ jašR4jwJAWpYjŸaJ0Yax’nIv“pYJN„ jašR4jwJAWp…Sd™œ0atRAjsYJp kŸaJW 4js 4asYw—Cb4j/fAjw…4p jW/aJX…hk vEXR4aZrŸWASN ŸsLrJaZrŸWASN 0“w˜–“…J–NšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN…46hjAsqRj EJLD0aG—–Rv“…4anJqav6Wsœ…zaL…WASN ŸsLrJaZrŸWASN ŸsLr1sZrŸWAœ–qCRXDX G0zJ8kRqqzRvs8Sv8kYJ“kRLatfveXj– 4Sw“kRqqzRvs8Sv8kYJ“Ca1jRvŸ0N4EkR0—i…wZtRJaZSvECSeRx“iRXD4š48eSj—i…ŸstRA0v0iJ1šSN ŸsLrJaZrŸWASN 4 œrJaZrz4JœNJ˜JZp…Sd™œ0atRAjsSX—0YWA JWŸRhks…–Z0 œanb4WqRAaC ŸsLrJaZrŸWASe ŸsLrw 66“JjwS4dpjX /aJWŸRhks…–Z0 œanb4WqRAaCSŸsLrJaZrŸWASNaqen…w ™ JjjfdY4Pn JW/œ4W1…JjjGspYJNib0a–RJjwYXWpzaCb4jA 4jkSv“xNK™0YAsNJWsœxN“rJaZrŸWASN Ÿ8Eš40iSJEkRWs„RJEbš40“SXZkfGW6RJeXYA™N0WšSN ŸsLrJaZrŸWnJs/a4WYSG8Y6qYeSre Ÿ“ˆSwaN…qWŸœj—Zax0„jJaN—v™4œ—ZNq0x—JEpa4dASN ŸsLrJaZ—48kSN/˜G—DS1t60ZeYsajRŸ“–j1—1—48EJsYE…v—L…4arrŸDeYjf8RxkL…Xsa4dASN ŸsLrJaZrŸWASN…4—–…–1˜œunJLD0aG—–Rv“…4ašSN ŸsLrJaZrŸWASN ŸsLrJaZ—ANšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNR1 šb0Y0NjNCNJZs˜œj …wf0f–sGNL—LrŸ“EaŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWiNjs“—zj6fwD0RXWNwEa1Xaju4YwWNNzaEœœ 640N–s0NJd8rœje˜wY0fAW—Nœ Lr1fX˜Ÿ4Sh™zN8“Nq0ˆJv8zRŸnaœ YRvkZN4EkR0—ifs4R–jCš48nJG“e…zahRXr4š4“ASsiœxWC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsL G0AfJ“™…1YC…X4Jvk0NJ“Cax8iRvkZNX™YtdkRq/C…X tš4E™S4“4aq“eR4—DAa1˜Gd4œLNq64—ENœjjX8YŸa/aŸ8kœA tzsnY1ZI˜qe8R–tSW XYKrsZWSJE6rJdASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNGRJa8…Gk0Jtd™…1YC…X4Jv8/RzNkfqkD…XjZaGd4Y1NCf1jYRG8š…A 4SAC xSa4NˆRX 66G—e xa/6js“NJ“t614 LNJfJWw—Ajq60ŸœLW™fvZDjAaSxZKqjZRq8R4aZrŸWASN ŸsLrJaZrŸWASN 0—R4aZrŸWASN ŸsLrJaZrŸWeœXaC ŸsLrJaZrŸWASeSŸsLrJaZrŸWASNaqen…w ™ JjjfdY4Pn JW/œ4W1…JjjGspYJNib0a–RJjwYXWpzaCb4jA 4jkSv“xNK™0NXjNwuh qN“rJaZrŸDEr4aC ŸsLrJa6˜Jd8r4s ŸsLrJaš…—kRGdfvaš—v8/NzNkRvZSŸsLrJaZrŸW8SjKa0sYSGtŸWnJqaJ6GWwœG8Zœ4s0aAjw…4nj0W„ JjifŸ’nIv“pj40AaJWb…SkYXj0 JW/œ4s0aAjw…4nj0W„ S™P…qdw–Dnzae j6EatksjwWpj0Z4 j6XfxNK…W“–SJa…—0YhYjaIRvNE—v0iNsiRqs4R–rXœvE0NKdCa1XRJ“8Jvk0SwZiRJdRXZhN4E4Yœa4aqsˆRXZhN48eSJ ™…ŸqzRAuX—v8„NtdC zfzRJ0šš48hJG ifqkt…Xj6œ– 4Sw“naj/CRv/4š4dANzNkR™EfvNpjŸkCœ4jhftkwv’nj0Ÿa4dASN ŸsLR4a—SWZCY4ŸE64NErq s—ŸE™YŸSfvDhNxkZrŸWASNf8XR4aZrŸWAYŸJ…JZ–Rv“Z—0/8YG0I6vWwIwjZ—1sGJœDEaJ6zAsqjŸPeSŸNS…0“YJA 6sjer4s ŸsLr1aL…WASN ŸsLrJaj0sASŸaJavND1jšr0ZnJs…fWqhjwšJ–NšSN ŸsLrJaZrŸWASN 4—–…–st64NAYG0J6ŸsWj1— 6s X xa™aGZ“ 4Eb—0Z™ v0™…s“œrA1˜Z™YsK6vjœNvE6rŸWPœ—fxdXR4aZrŸWASN ŸsD6xkL…WASN ŸsLrJabSWZCYjNaW™IJqJWZCSŸNnNŸN“rJaZrŸWASN Ÿ“–G8qRJ8„JsYEfvNLrœsZr4NiœXaC ŸsLrJaZrŸWASNS…0“YJA 6s GYŸfE˜J—LrœsZr4NiœXaC ŸsLrJaZrŸWASa™RkDrAs…j4—GYsav6Wqh 4db˜œssSŸ P…4jˆ—wNN6zW1œv8P…4jˆ—wNN6zW1œv8P…4jˆ—wNN6zW1œv8P…4jˆ—wNN6zeœ4s/Y0“LfXbrzseSAsX…0“–j1ZjŸE™œxNSaWsYG“—0 ˆS0N™NŸN“rJaZrŸWASN ŸsLrJaZrz4NJWrzjeNG60fvs4Yjf14awY0JSk„NzaEœœj …j/0JjaZNehšz04’0NXW40 xR–XfGE8N– Ca1XRJ“8jkZrŸWASN ŸsLrJaZrŸWASqaSRv—kRv“…j1seYŸNIsLA— JWZ„YaJ˜saˆ—G—pa4dASN ŸsLrJaZrŸWASN…0“–j1ZjŸE™JLNKaGNiJarŸWnYsav6Wqh…v816wNEJW—zSŸN“rJaZrŸWASN ŸsLrJaZrz4NwWprœjhjŸe0NAj4Njqn…1je˜/0fqk/NwES1jt˜x0R4qzNzaEœœjY60fL 1NwZš…Lje˜/0YAsNJd“6zj …j/0YAsNj“La1j6R8L…WASN ŸsLrJaZrŸWASNS˜GjYœJarŸZˆ xb6vDh˜– q6s ESŸKR4NvIœWtR ŸJsNARGNEYXšj–NšSN ŸsLrJaZrŸWASN 4WwJJašSxPeY4EKaGNE 4k1648ˆœxNRGrhR–j…—zqzYXs1fW6LsNr4eXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸZ™ aJ…qkL –j…JWZˆ xav6xsL6wj J–kYjf0…46zAsZr4N0SqaSRv—kRv“…j1sXY1Nb6x8LrJkt60YeYŸJ6x8LrJk1RjYe WbajzJG1…J™Xr4s ŸsLrJaZrŸWASN ŸsD6xkZrŸWASN ŸsLrJaZrŸWAJsaP˜s“YfŸkZrŸWASN ŸsLrJaZrŸWASN Ÿs–j1—…jŸ0CS1D0Rv—Dœ1 JWWAœWf0…v – –s…JxWASAqŸ…0“–j1ZjŸE™JLNKaGNiwNZr0Z4 WSa4—YwNZr0ZEJsS6JNkNJ qR ES0—zSŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASNaqenjzAœ0a—ftksfADnj0C˜J“nasxR4sš˜Gk4YtdiRxkA6Ejœx0NAj4Njqn…1fX˜Ÿ4œKk…Nsssœœj66t’0NjNCN8E z  r064œKkDNwuhRL0f0NAj4Njqn…qksbz„œ4qCRAjœXsY““b4W1awjkY4ap…J0A S™P…qd“š4E0Yde JWCR4jœvPnj0“8œ06Ÿ…GjkY4ap…J0AJdASN ŸsLrJaZrŸWASNKfW““rJdZ0Z4 WSa4—Ywsa4dASN ŸsLrJaZrŸWASN ŸsLrJaqjzjˆJs—RŸ“–IœWqSxD8 xNX Ÿ“DSG8qSW EYGeE6ssYSwpa4dASN ŸsLrJaZrŸWASN ŸsLrJab—0Z™ v0™…s“Yœœs160Z/ xa™…qd„fvk…JW“eJœZJ˜qkL…zaL…WASN ŸsLrJaZrŸWASN ŸsLrA……WCJœDE6JZiJdb—0Z™ v0™…s“YœwrjLPS0zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJk 61s0YGeE…0“YJA 6sjAWNKRvjDrANt6sZ™SŸNGaA Z 4E6rŸWnJqaJ6GWwœG816wNXJWNnNŸN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJab—ŸE4YGŸ0 s“–j1ZjŸE™Sre Ÿ“–œA tRœjGJqaJ6GWwœG8w˜qZqœXaC ŸsLrJaZrŸWASN ŸsLrJaZrŸWA sWC ŸsLrJaZrŸWASN ŸsLrJaZrŸWAJsaP˜s“YfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWnJœDEaJZ™IJk…JW“eJœZj 0œrJk…—0YhYjaIRWhR–apa4dASN ŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASN ŸsLrJab—ŸEŸJqNIsL v…—ŸsAœWN Ÿs“YXjb—ŸE4YGŸ0 s“–j1ZjŸE™œvs1…sDG“1—48XSN1a“–G8qRJ8„JsYEa4DzS1pa4dASN ŸsLrJaZrŸWASN ŸsLrJa…Jv™JwsA…0qh6Jk6rŸWnY1NJ6vNDj16rŸWnY40J6v—YSAjY60“/Y4snNŸN“rJaZrŸWASN ŸsLrJaZSLšSN ŸsLrJaZrŸWASN 4—wNw“…JWWCSqfE6J—Dr1WqrXanY40J6v—YSAjY60“/Y4snNŸNAR4aZrŸWASN ŸsLrJaZrŸW4œKk“š4E0Yde j6Ÿ Ÿdf4djRWx4SzYnNJWœSxN“rJaZrŸWASN ŸsLrJaZ—0YŸJsaNRŸ/h—Gk …Z„Y1D0aj“wœ1ZrŸsiœvsS…0“YJA 6s GYja“ESJE6rŸWnY1NJ6vNDj16rŸWnY40J6v—YSAjY60“/Y4snNŸN“rJaZrŸWASN ŸsLrJaZSW 0YzZJ6xkLA qJWZX W—fŸ“DSG8qSW EYGeE6ssYSwpa4dASN ŸsLrJaZSLšSN ŸsLrJaZrŸD8YGEIRv—L 4ktjŸYeJœZ/RvNE…zaL 4dASN ŸsLrJaZ—0YŸJsaNRŸ/h—Gk …Z„Y1D0aj“wœ1ZrŸsiœvsS…0“YJA 6sj0SAsZRq8LrJkt60YeYŸJ6x8LrJk1RjYe WbajzJG1…J™Xr4s ŸsLrJaZrŸWAYja  ŸkLAs…JWD8Y4Ÿ0 G—k—AsrjLuEœNR““rA“qSx“XY1NNR4—DSAt4anY1NJ6vNDj1w˜qZqS0NX Ÿ/h—AN1Rj /JqnRqk6LsrjxWe waC ŸsLrJaZrŸWASN ŸsLrJkq—4eYXqeb0hG8qRJ8„JsNIsLGk…JW“eJœZjNŸN“rJaZrŸWASN 4 —R4aZrŸWASN Ÿs–jAN16sYXr4s ŸsLrJaZrŸWASN ŸsLA—16GNAWNR1 6b40Rz ™Nq™4bzjŸ0YjNPNq8œRLfX˜Ÿ4Sh™zNwWprœjeb48 j0Z“Nw“a1j…r4Ÿ0JqN4Njs8RzrŸrŸD4SzYnNJWœSLje…wY0JqNkNj“La1j fJ’0R4swNqsL—1 šNt™0YjNDNj“Lœ14 wf0fvs4Nj“LRœj86G/0Nqa0NzaE q“ˆfŸkZrŸWASN ŸsLrJaZrŸWAYja  ŸkL—G8tJxDe jNA…4Dzj11SWYeS0N™NŸN“rJaZrŸWASN ŸsLrJaZrŸWASN…4ZYœGEZrzrESa™avN–˜– …—0jCSJ“z Ÿs“a4ab—zq8 xK6J—L…zaL…WASN ŸsLrJaZrŸWASeSŸsLrJaZrŸWASN ŸsLrJaj0sASŸNS…0“YJA 6s ˆWI6WsYA ˜G’4JqaJ6GWwœG81˜JaeS0zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASNSav6hY4a6…1ASt™nIv“pjzsnb0ab…Gj…GapYœW“b0aZfŸdsYJp…wj4ajan…KkY4ssbzk…JN0Yjf8a4Z–IJk…4a“NL—LrqsLSwNZr0ZnJs…fWqhjA“šj–NšSN ŸsLrJaZrŸWASN ŸsLrJaZr0ZŸYzZ1 Ÿ8„6vabbŸd 40SRv—kRv“… Js/fds…Xj0…wj4aJEfAjw–Dn jj8œh™PRœDERj“k˜–tRjeRqsxRJ’Ÿ—v0iNs“ Ÿ“ˆRXZhN4E4Yœa“ Ÿ“XaW0SŸWiœ0fP Ÿdwvks…W/ J0…Jjk…–jsSŸWirzunNvdLY0 Jœq64œxNxNq™nj1—Cr4r0fvs4Nj“LRœjt˜x0JqN4NL—LrŸ“ˆfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLA—16GNAœv/e Ÿ/nj40AaJWsRqd“š40pYwsC JW1…JjœN–j0zsCœ4j…xdSGqnYJN0aja—ftkwSXWp wZhb0arRh™nIv“p…w Ÿb4WbfKk“…v“pj0Z4 j6Xfx’nIv0“SG…—ŸsAœWN zj66Gf0RŸdˆNqen œjCNGe0NwWWNq™4bzjŸ0JqNINœ saŸsDG“1—48XS—j6EjJqŸNxNLSA“zSŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASNKRvZDœG8sa4dASN ŸsLrJaZrŸWASN ŸsLrJab—zWˆJAsajœrJPXNXsNNJDhjLj RP0f–s8NwWprœjhjŸe0JJsXNq™4bzjŸŸNxNLSA“zSŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASNK6vWDSA q˜Z0Js1 0ZY…v“…JxDeYjfEakLA—16GNeœXaC ŸsLrJaZrŸWASeSŸsLrJaZSLšr4s ŸsLrw š…JdšSN ŸsLrwWZœ4spaKkwv80jzsnb0ab…Gjvk0zaŸaJj…xdsSGspYJNhœ0ara–aC ŸsLrJaZr4dAbRv—DjAst…Zˆ xbfvZkYŸkZrŸWASNfk“IxkZrŸWASK6jsk˜– ˜Zˆ xav6vWwœJa…Rs 0JœNSfvDhNvaqRj EYzZ™aGZ“ Xsa4dASN ŸsLrJaZSx“™ xJ˜JZ“rA“q—ŸYeYjaNNqd“1Z…Jx“ˆYjfEadXR4aZrŸWA sWCSŸsLrJaZrz8S4aC ŸsLrJaZr4dANqenjœj…aJ0Y1ZNws610zx4SjNSN8“aLjCRx0f–sbNjqna1 šNt’4JGj0Nœj8—œ šNt™0YjNDNq™4bzX6AŸNxNLNs/hJ1jCrŸD0fvx0NwZpj1fX˜Ÿ0œvsINs“Erœ šYD0Yœ sNe4œLj ˜jf0œv0GNjqna1j6aJe4œxNxNœjœRŸN“rJaZrŸWAS4sKrJN–—As jzASqK˜JWwNœZSxPeY40™aj“E—v8eRŸ8kRAˆfvEZ—vdeRŸifœ—4Rv“tv0“Js™…GZxRA0v0if–“4aqsˆRv/4š4k4SŸ—kfGWRv/Ÿœv0™Yq—4aqsPa4NkR–jq—4Zna8hRA …S–CYsna™zRJd6˜G84SSd™…q“tRX ev8/NXZ4aqsPa4NkR–jqSx8na8hRvkt64k0Ns—ifwGRv/4vk0SzNkRŸ8ˆR– Zš48„SGZCaArRvXRŸkZrŸWASNfsWrAs…JWD8Y4ŸŸ 0sYSAs JvkšSN ŸsLrwWš…œšSN ŸsDr1W RweJwsK˜G—–—1jŸ0AJGEJajqzAt61—AJqaJ6GWwœG81˜JanYŸbfvZiœsb˜JNe waC ŸsLrJaZrŸWASaJNW“wœJdb6q nJJsK…0“YJA 6s ˆSAsX Ÿ“–IœWqSxD8 xNX Ÿ“DSG8qSW EYGeE6ssYSwpa4dASN ŸsLrJaZ—48kSNA…4Nkj1qJx“0JLN……vN“—œsrjxWe waC ŸsLrJaZrŸWASN ŸsLrA……WCJsf8a4—D…4db—zq8 xK6J—L…Xsa4dASN ŸsLrJaZrŸWASN ŸsLrJaq—4EY1N1 4Zkj1NZ—jYŸJœZJa4—–R– t…JaiNq™n6zj8œŸx0fKk™Nw“a1j…r4Ÿ0Yœ bNqkp—sswGq0JqkNNJDhjLj RP4œKk—Nqk–œjjW…Wx0NwWWNœjœRzjC…œ60fvs4Nj“LRœj jz60f–sbNJdkR1 š—Ÿ0…Jv™JSkwA szaeœ4j…xd vfnRj“nœh™PRAs1fxdXR4aZrŸWASN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWASN Ÿs–jAN16sYXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸDeYbaG—ErAj…JvNAs/…s“Yr1jzs0SŸa™avN–˜– …—0jCSJ“z Ÿs“a4ab—zq8 xK6J—L…Xpa4dASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN 4 —R4aZrŸWASN ŸsLANJxPeSre 0f86LaL…WASN ŸsLrJa…RœsEJsav…GWLrJdb—zq8 xK6J—LrG1˜WnYœZJNsx6KkZr0DhJjaP6j“œRLaL…WASN ŸsLrJaZrŸWASa™RsL 4k6sY0WreaŸkYfŸkZrŸWASN ŸsLrJaZrŸWASN Ÿs–œA tRsZeYGEJRxdXR4aZrŸWASN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWASN Ÿs–Rv0Zr4eY40™axkL1Z jX8JsNn…WœY4EšJ–NšSN ŸsLrJaZrŸWASN ŸsLrJaZr0DhJjaP6j“œrœsZSxZEJsaq G6zrANJWWCSAqEY4NEfX b˜waASq……vZDjG8šj–NšSN ŸsLrJaZrŸWASN ŸsLrJaZr0ZzYjI6Wf86varŸWn v0vf4—wjGZN—10St™nIvsLYXjbSW“/YqJRWaˆ—G—6…J 4aqsnRqdXR4aZrŸWASN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWA sWC ŸsLrJaZrŸWASa™RsL 4k1Sx“eYGE—Ijœ –a1RJ80 xa RqkYfŸkZrŸWASN ŸsLrJaZrŸWAYzNS…v—–Rv“p…AXY40™aJ—vIwsšr0ZzYjI6xkfŸkZrŸWASN ŸsLr1sL…WASN ŸsLrJa…jXˆJsNKfW““rJdbSxZEYjf06W6vE1Sx“eYGES˜“ERLaL…WASN ŸsLrJaZrŸWASK˜JWwNœY6ŸsCSqaPfv6zwpa4dASN ŸsLrJaZSLšSN ŸsLrJaZrŸZEJsS6JNkNvab—XeYzN—NŸN“rJaZrŸDEr4aC ŸsLrJa6˜Jd8r4s ŸsLrJaš…—kRz—xRJP4Jvk0S—nakhR4sCœvEAfGEkR™CRvkšYG8„Sj™…Ÿk4RJ“Z G8hf–ZiRJdR–N…N40AS4 ™…1—hRva6aŸkZrŸWASNfsWrAa Jx“/YsN…4ZkIJk…j1qŸYsaX 46zAsjzjiSdœNvapz—8aJsš XjsrXjs JW/—GIjxWC ŸsLrJaZr4dAK…vNk—A—Zr0Z/ xS˜s–—As1RY0SdwœJsj0W8b0aPRAjrwunj0“ajava–jwrw pbz„œ0arftkœIvdpjŸ eXZnas“ˆ…Xj6fAASAZe…WqzRAZšJkZrŸWASNfsWrAs…JWD8Y4ŸŸ 0skIw t—0 /YGsxR–ZC˜G0“Sq—e…WqzRA N40“J—kRqsiRA0RG8hf–ZiRJdR–N…N40AS4 ™…1—hRvtYG8Aœ–“kRx8tRXY0jv8kNœeY4EJRLfX˜Ÿ0JqNkNjs“J1 6b00JAjsJG0vf46hjkZrŸWASNfk“IxkZrŸWASK6jsk˜– ˜Zˆ xav6vWwœJa…Rs 0JœNSfvDhNvaY6G8ˆJLD8…v—–œGdY6qYe xZRŸ“–Nw …—0 G f8fŸ8LrJk JWDeY4snSŸsLrJaZS–NšSN ŸsLrJaZrŸZkY1NbRWswœGdZr4anJjS6vN“rG1˜WnYœZJNsx6KkZr0DhJjaP6j“œRLaL…WASN ŸsLrJaZrŸWASNS6ssw˜LW…ŸxESI6vN™Iws…JxZzJjaIRxkL vNYr4NzSNqY0v˜vNb˜waASq……vZDjG8šj–NšSN ŸsLrJaZrŸWASN Ÿ“DJGtSW ™Sre 46zAsY6Ÿ“™YŸaP…WqhjJdb˜œiœxNRsLIvE6rŸWn v0vf4—wjwpa4dASN ŸsLrJaZrŸWASN…4—k—ANqj0jAWNK˜G—DSG 1Rj XYqav…s“œ 4Er˜JNzSNqY0EYXNZr0DhJjaP6j“œ…zaL…WASN ŸsLrJaZrŸWASNS6ssw˜LW…ŸxESI6vN™Iws…JxZzJjaIRxkLYXjb˜waAS1WXa“Ea4abSW“/YqJRxkfŸkZrŸWASN ŸsLrJaZrŸWASq……vZDjG8Z—LAYzNS˜jzSG81—X/JœZjRŸ“E 4E6rŸWiJxNARq8LrJkqR z WajfxdXR4aZrŸWASN ŸsLrJaZrŸWn v0vf4—wjJarŸZˆ xb GNkjAat—Ÿ „JsNARqkœYXNZr4—1S0N1fŸsL1Z jX8JsNnNŸN“rJaZrŸWASN ŸsLrJaZr0DhJjaP6j“œrœsZSxPeY4eE˜j“YrAN jŸE™SŸN1fq“Ea4ab6wahSAsX Ÿ“DJGtSW ™S0—zSŸsLrJaZrŸWASN ŸsLrJabSW“/YqJRxsx6va160ZEJLNbRvN–˜v 6sjCS1WzRq8LrJEY—ANiœxN…4—k—ANqj0jeœXaC ŸsLrJaZrŸWASN ŸsLrJkqR z Waj 0œrA“qSx“GY40Ja4Z–—G“…4aiJvs1fŸsL vNY…JNzSNS6ssw˜LW…4™Xr4s ŸsLrJaZrŸWASN ŸsL1Z jX8JsNIsDœ11RLsEJsKf0swœG8šr4rXSAsX Ÿ/8˜Lab˜waASq……vZDjG8šj–NšSN ŸsLrJaZrŸWASN Ÿ“DJGtSW ™Sre 46zAsY6Ÿ“™YŸaP…WqhjJdb6XaiœxNRsDa4E6rŸWn v0vf4—wjwpa4dASN ŸsLrJaZrŸWASN…4—k—ANqj0jAWNK˜G—DSG 1Rj XYqav…s“œ 4Eš…JNzSN1ak„IvE6rŸWn v0vf4—wjwpa4dASN ŸsLrJaZrŸWASNKfW““rJdZJxZEJsaq GZw—1 6GaCSAqPRq8“AZ…Jvk0SA/e…“ENvkqR z Waja“ESw 4NzSNSaJDhG8Y64ŸYqNX Ÿ“DG8tJxWeS0zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASbRv—DjAst…ZkJjaP˜s“fŸkZrŸWASN ŸsLrJaZrŸWA sWC ŸsLrJaZrŸWASeSŸsLrJaZrŸWASNK˜j“Y1W1Rœ—A xb6j“fŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sd“œXrnj0™aJWN…KkwaJ0kSA qjzjnYhkwrw pz—“aJWwajN„RJ“ZRG8zJSd™aj“YRJ06N4Eeœ–ZnasqzRA N4EiSwNeNœj8—œ Zf60Nx™0r4s ŸsLrJaš…Z“Y1NJaj“Dv8„Sj™…Ÿk4…XjZ—vk0SXZC…Jd6RGahRGEkR0—™aL t…XjZfGdeN8™Rs“xRJdZ G8nRX“™…1ar…XjZaGdeN8™Rs“xRJdZYŸkZrŸWASNfsWrAa Jx“/YsN…4jx—JajzeJsaqRvN“—v8ŸNGZnashRXu0œv8iJq—kRŸsGRG0Csq4œLDer4s ŸsLrJaš…ZYŸav˜jsw6vabSvkPSa™aJ—–jGE…JxsANJZsRœj6…™4S4jœNj/hœj8rŸ0NwWWj4j“Iw—R4aZrŸWASNC 0WDrG1R ŸSNSNx0“rAtRsZ™J1ZJ˜spj0zb06Ÿ…Sk“RGk0j4—nœ4WA…KksYJv…Gd4YsWšSN ŸsLrwWZ—ZXJjb…vZœrJksjxsAYjf06W“w v81…—™…1ar…XjZaGdeN8™Rs“xRJdZ GEkR0Z…Nqeh6xN“rJaZrŸWAS4sKrJN–—As jzASqJfWa–6wNZSxPeY40™aj“Er1WjG—eJqaqRv—Dv8/NzNkRvZxRXY0jv8kNœaiRJdSJj—jaŸkZrŸWASNfsWrAa Jx“/YsN…4DhJG016sYejŸNKfvZiG8…6s ESdsYAZ0YJa/b4sš XjsrXjs JW/œ0fzf–j“bXjsz—„aJWN…KkwaJ00…kAaJjLaJjsYJpjzNeaJqnaJjwaAjsYw ™œh™P…qdaX—pjzjzb4WwaJjwJks JW/œ0a0aJjw6XZ0…0Ab0ataxdprJa0Rœakœ4s0fxdœN–j„—– 4Sw“CR4W„RA6fG8ŸNGZCaAZiRvE…—v0CSJ eRqsxRXCSv8hN4Eeas“xR– e Gk0S—kfkD…XjZ—v0CœvNšSN ŸsLrwWZ—ZXJjb…vZœrJksjq“/YG0qRxs–R–jq—0 iJsZ z0aw0fNDNqs8rzŸSz0NwWWN8“Sz 6N10œvspNJdESLjNGx4SwWLNœ—šNœ0f0YAWJNqe4Nœjbz0fSkjNzaEœœj…Nq60NweNwNœj…r0D0NwWWNwunRLjCRS™4SwsxNj“06LrŸrŸ64YAj Nq™4…zj6…œ Nœh™P…qd“…–Wp Jk0aj6Ÿ…GjkJGkpjz eaJqzRGjsRwjXR4aZrŸWASNC 0WDrG1R ŸSNS…v—DAsZ—Ÿ EY40vNspjŸ0/ ja—fSkw˜vE0YWeb0ar…wjw—A—0jŸW4œh™P…qdw–DnzCœ0avfWNh…X …˜Gk0œ–Ze Ÿ“hfv 64EhS0sšSN ŸsLrwWZ—ZEJsS6JNkNva Jx“EJjn z 6b00JAjsNœ ERœj…rŸq0fLZ/N80610f4SwWLNœ—šNœjbz4œxa/r4s ŸsLrJaš…Z xa/˜JDz –“Z—jYŸJœZJa4—–R– t…—eRx“iRXD4š40“f– ™…LahR– Zœv80œv“na1 DRJaIxkZrŸWASNfk“IxkZrŸWASK6jsk˜– ˜Zk Wf0…G—–R– t…Z0Y1ZSRv6e—Gst60“™JŸE6JZkA“šr0DŸœjNX Ÿ“D…X6rŸWn —ZfŸsL1jN…waASqJfWa–6wN6rŸWnY1Z…RJ6hj1w—LXœxN…4jJSGtRJ—™W—fŸs–—As1RY0SNS…v—DAsrjA—qS0WC ŸsLrJasa4dASN ŸsLrJaZ—48kSŸK˜j“w v tjŸYeJœZ/ ssw˜–Nšr4N4x Ÿ j™6–Zr6q“4 Wf0…4Nˆ6vsY—ANCJxa—fqkœa4dY—0WhS0 P Wvf4dY—0WhS0NXR0–wZšjAqSJ8Ÿ j™6–Wr˜1—4YjN1fŸsL1WjGŸYqNX Ÿ“–6Jq—ŸECJsNfŸsvrsNSjJ—GjœJjjeIjNS—j œS0N™NŸN“rJaZrŸWASN ŸsLrJaZr0Z™YqaJaW“wNœ1˜xES Ÿ xdXR4aZrŸWASN ŸsLrJaZrŸZkY1NbRWswœGdZr4anYsav6Wqh…v81˜Z/YXs…4WYG8t4eXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸZeJGsRŸ“–RL…jzWtœjYeb0œ1—NznY1Z…RJ6hj1wrŸWkSGs…4WYG8tjANPJW—XI“D Xš˜jZ4JG0…˜s“YssZr0skSNSfv—–jA—w˜q“qxNSN0“RLaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWAYja  ŸkL1jjR 0J1ZjbŸ0LRLaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLI–Y0Nwj0NwWLSL Zf60Nx™0Nœj8—œjtfjY4œLY0N8“œzjC˜0Yœ Nqs8rzŸSz0NwWWN8“Sz 6N10YS™0NwxnjN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASa™RsL 4kJWZ™Ys z6WœrœZr0D0œj6e…4jJSGtRJ—™S0zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿs–œA tRsZeYGEJRxdXR4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASa™RsL 4160Z/ xa™…qd„fv JxEGYsav6Wqh…v  JWDeY4sA…4WYG8tjANXJWNX…0sY11…Jke waC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸZ„Y1D06vWwNœW…j–NšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJa6˜Sd™…AZ4fv0jv8nRX“k…qsGR–ZefGEkR0Z“Y1NJaj“Dvk0S—kRŸ8GRG0CkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸZeJGsRŸ“–RL…jzWtœjYeIjœ1—NŸWkSGs…4WYG8tjANEJWreI“D…XZr0skSNSfv—–jA—w˜qEqWre…4jxSJab…jsASqa™6W“w6JZI—1uEWNSN0“RLaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿs–œA tRsZeYGEJRxdXR4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZSLšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN…0“w˜v8tj0 0 xIYsœrœsZ—zj™ –sKNJWw˜LW1—4XJLZv…0s™IJ8t—0 ŸJsf06xkLAq—0 ŸjX“K x8LrJkq—4eYXsnNŸN“rJaZrŸWASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN ŸsLrJaZSLšSN ŸsLrJaZrŸWASN 4Nkj1qJx“0SNSRvZ–jA—…jzeYX“zSŸsLrJaZrŸWASNKIN“rJaZrŸWASN 0“w˜–“…J–NšSN ŸsLrJaZrŸWASN 4Nkj1qJx“0S Ÿ xdXR4aZrŸWASN ŸsD6xkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sd“œXrnj0™aJWN…KkwaJ0kSA qjzjnYhkwrw pz—“b4WwajN„RJ“ZRG8zJSd™aj“YRJ06N4Eeœ–ZnasqzRA N4EiSwNeNœj8—œ Zf60Nx™0r4s ŸsLrJaš…Z“Y1NJaj“Dv8„Sj™…Ÿk4…XjZ—vk0SXZC…Jd6RGahRGEkR0—™aL t…XjZfGdeN8™Rs“xRJdZ G8nRX“™…1ar…XjZaGdeN8™Rs“xRJdZYŸkZrŸWASNfsWrAa Jx“/YsN…4jx—JajzeJsaqRvN“—v8ŸNGZnashRXu0œv8iJq—kRŸsGRG0Csq4œLDer4s ŸsLrJaš…ZYŸav˜jsw6vabSvkPSa™aJ—–jGE…JxsANJZsRœj6…™4S4jœNj/hœj8rŸ0NwWWj4j“Iw—R4aZrŸWASNC 0WDrG1R ŸSNSNx0“rAtRsZ™J1ZJ˜spj0zb06Ÿ…Sk“RGk0j4—nœ4WA…KksYJv…Gd4YsWšSN ŸsLrwWZ—ZXJjb…vZœrJksjxsAYjf06W“w v81…—™…1ar…XjZaGdeN8™Rs“xRJdZ GEkR0Z…Nqeh6xN“rJaZrŸWAS4sKrJN–—As jzASqJfWa–6wNZSxPeY40™aj“Er1WjG—eJqaqRv—Dv8/NzNkRvZxRXY0jv8kNœaiRJdSJj—jaŸkZrŸWASNfsWrAa Jx“/YsN…4DhJG016sYejŸNKfvZiG8…6s ESdsYAZ0YJa/b4sš XjsrXjs JW/œ0fzf–j“bXjsz—„aJWN…KkwaJ00…kAaJjLaJjsYJpjzNeaJqnaJjwaAjsYw ™œh™P…qdaX—pjzjzb4WwaJjwJks JW/œ0a0aJjw6XZ0…0Ab0ataxdprJa0Rœakœ4s0fxdœN–j„—– 4Sw“CR4W„RA6fG8ŸNGZCaAZiRvE…—v0CSJ eRqsxRXCSv8hN4Eeas“xR– e Gk0S—kfkD…XjZ—v0CœvNšSN ŸsLrwWZ—ZXJjb…vZœrJksjq“/YG0qRxs–R–jq—0 iJsZ z0aw0fNDNqs8rzŸSz0NwWWNJZ8j1 6N10œvspNJdESLjNGx4SwWLNœ—šNœ0f0œvsšNqe4Nœjbz0fSkjNzaEœœj…Nq60NweNwNœj…r0D0NwWWNwunRLjCRS™4SwsxNj“06LrŸrŸ64YAj Nq™4…zj6…œ Nœh™P…qd“…–Wp Jk0aj6Ÿ…GjkJGkpjz eaJqzRGjsRwjXR4aZrŸWASNC 0WDrG1R ŸSNS…v—DAsZ—Ÿ EY40vNspjŸ0/ ja—fSkw˜vE0YWeb0ar…wjw—A—0jŸW4œh™P…qdw–DnzCœ0avfWNh…X …˜Gk0œ–Ze Ÿ“hfv 64EhS0sšSN ŸsLrwWZ—ZEJsS6JNkNva Jx“EJjn z 6b00JAjsNœ ERœj…rŸq0fLZ/N80610f4SwWLNœ—šNœjbz4œxa/r4s ŸsLrJaš…Z xa/˜JDz –“Z—jYŸJœZJa4—–R– t…—eRx“iRXD4š40“f– ™…LahR– Zœv80œv“na1 DRJaIxkZrŸWASNfk“IxkZrŸWASK6jsk˜– ˜Zk Wf0…G—–R– t…Z0Y1ZSRv6eSG8t—zqzJŸE6JZkA“šr0DŸœjNX Ÿ“D…X6rŸWn —ZfŸsL1jN…waASqJfWa–6wN6rŸWnY1Z…RJ6hj1w—LXœxN…4jJSGtRJ—™W—fŸs–—As1RY0SNS…v—DAsrjA—qS0WC ŸsLrJasa4dASN ŸsLrJaZ—48kSŸK˜j“w v tjŸYeJœZ/ ssw˜–Nšr4N4x Ÿ j™6–Zr6q“4 Wf0…4Nˆ6vsY—ANCJxa—fqkœa4dY—0WhS0 P Wvf4dY—0WhS0NXR0–wZšjAqSJ8Ÿ j™6–Wr˜1—4YjN1fŸsL1WjGŸYqNX Ÿ“–6Jq—ŸECJsNfŸsvrsNSjJ—GjœJjjeIjNS—j œS0N™NŸN“rJaZrŸWASN ŸsLrJaZr0Z™YqaJaW“wNœ1˜xES Ÿ xdXR4aZrŸWASN ŸsLrJaZrŸZkY1NbRWswœGdZr4anYsav6Wqh…v81˜Z/YXs…4WYG8t4eXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸZeJGsRŸ“–RL…jzWtœjYeb0œ1—NznY1Z…RJ6hj1wrŸWkSGs…4WYG8tjANPJW—XI“D Xš˜jZ4JG0…˜s“YssZr0skSNSfv—–jA—w˜sZqvsSN0œRLaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWAYja  ŸkL1jjR 0J1ZjbŸ0LRLaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLI–Y0Nwj0NwWLSL Zf60Nx™0Nœj8—œj6…™4œLY0N8“œzjC˜0Yœ Nqs8rzŸSz0NwWWNJZ8j1 6N10YS™0NwxnjN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASa™RsL 4kJWZ™Ys z˜jœrSkZr0D0œJsz…4jJSGtRJ—™S0zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿs–œA tRsZeYGEJRxdXR4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASa™RsL 4160Z/ xa™…qd„fv JxEGYsav6Wqh…v  JWDeY4sA…4WYG8tjANXJWNX…0sY11…Jke waC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸZ„Y1D06vWwNœW…j–NšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJa6˜Sd™…AZ4fv0jv8nRX“k…qsGR–ZefGEkR0Z“Y1NJaj“Dvk0S—kRŸ8GRG0CkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸZeJGsRŸ“–RL…jzWtœjYeIjœ1—NŸWkSGs…4WYG8tjANEJWreI“D…XZr0skSNSfv—–jA—w˜qEqWre…4jxSJab…jsASqa™6W“w6JZI—1uEWNSN0“RLaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿs–œA tRsZeYGEJRxdXR4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZSLšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN…0“w˜v8tj0 0 xIYsœrœsZ—zj™ –sKNJWw˜LW1—4XJLZv…0s™IJ8t—0 ŸJsf06xkLAq—0 ŸjX“K x8LrJkq—4eYXsnNŸN“rJaZrŸWASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN ŸsLrJaZSLšSN ŸsLrJaZrŸWASN 4Nkj1qJx“0SNSRvZ–jA—…jzeYX“zSŸsLrJaZrŸWASNKIN“rJaZrŸWASN 0“w˜–“…J–NšSN ŸsLrJaZrŸWASN 4Nkj1qJx“0S Ÿ xdXR4aZrŸWASN ŸsD6xkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sd“œXrnj0™aJWN…KkwaJ0kSA qjzjnYhkwrw pjzNeaJqnajN„RJ“ZRG8zJSd™aj“YRJ06N4Eeœ–ZnasqzRA N4EiSwNeNœj8—œ Zf60Nx™0r4s ŸsLrJaš…Z“Y1NJaj“Dv8„Sj™…Ÿk4…XjZ—vk0SXZC…Jd6RGahRGEkR0—™aL t…XjZfGdeN8™Rs“xRJdZ G8nRX“™…1ar…XjZaGdeN8™Rs“xRJdZYŸkZrŸWASNfsWrAa Jx“/YsN…4jx—JajzeJsaqRvN“—v8ŸNGZnashRXu0œv8iJq—kRŸsGRG0Csq4œLDer4s ŸsLrJaš…ZYŸav˜jsw6vabSvkPSa™aJ—–jGE…JxsANJZsRœj6…™4S4jœNj/hœj8rŸ0NwWWj4j“Iw—R4aZrŸWASNC 0WDrG1R ŸSNSNx0“rAtRsZ™J1ZJ˜spj0zb06Ÿ…Sk“RGk0j4—nœ4WA…KksYJv…Gd4YsWšSN ŸsLrwWZ—ZXJjb…vZœrJksjxsAYjf06W“w v81…—™…1ar…XjZaGdeN8™Rs“xRJdZ GEkR0Z…Nqeh6xN“rJaZrŸWAS4sKrJN–—As jzASqJfWa–6wNZSxPeY40™aj“Er1WjG—eJqaqRv—Dv8/NzNkRvZxRXY0jv8kNœaiRJdSJj—jaŸkZrŸWASNfsWrAa Jx“/YsN…4jvSGtRJ—™Sa™aJ—–jGE…JxsANœj0aœj8rŸ4SwWLNœ—šNœ0f0YGjkNqe4Nœj6…’0RXsDNJx4Yœ Zf60Nx™0Nœj8—œj bX/4œLY0NJxnNœj8b0XNXsNNwZL6LjtRw/0fvx0Nj“L10f0fKk™NJdkbz Z˜r0JAeNL—Lrz tajq4Sz nN8“Nq0pbz„œ4s/fds…Xj0z—„ J0……ŸdwNA0…œNi JjkawaC ŸsLrJaZr4dAK…vNk—A—Zr0Z4JG0…˜s“Ys“Z—480 xaJRs“YSJf0Nwj0NwWLSL Zf60Nx™0Nœj8—œj6…™4œLY0N8“œzjC˜0Yœ Nqs8rzŸSz0NwWWN8“Sz 6N10YS™0NwxnjœfX˜Ÿ0J1 LNœj06LjeYœ0JqNSNœj8—œjN10YGj0NqsE—Lj…aœuŸNxNLNGZ0Jœ šNG™0œvq4œ’nIv“p…J8œ4jnawjœNvs0…Sk0 jaq…Ÿd 4nRJNAœ4sk 4jwaAjsRœsnœ0fnRKkœNvapYJdC j6Ÿ Ÿd X—XR4aZrŸWASNC 0WDrG1R ŸSNS…v—DAsZ—Ÿ EY40vNspjŸ0/ ja—fSkw˜vE0YWeb0ar…wjw—A—0jŸW4œh™P…qdw–DnzCœ0avfWNh…X …˜Gk0œ–Ze Ÿ“hfv 64EhS0sšSN ŸsLrwWZ—ZEJsS6JNkNva Jx“EJjn z 6b00JAjsNœ ERœj…rŸq0fLZ/N80610f4SwWLNœ—šNœjbz4œxa/r4s ŸsLrJaš…Z xa/˜JDz –“Z—jYŸJœZJa4—–R– t…—eRx“iRXD4š40“f– ™…LahR– Zœv80œv“na1 DRJaIxkZrŸWASNfk“IxkZrŸWASK6jsk˜– ˜Zk Wf0…G—–R– t…Z0Y1ZSRv6eIwj—0 k xNA…4jx—wNZr0D0œjNX Ÿ“D Xs6rŸWn j—ZfŸsL1WjGŸYqNX Ÿ“D…WN jzjiJsreaŸ8LrJkt6s“kYzZJ6Wa6–a6rŸZ/Y4Eb…vjœrJk JWDeY4/8Ysœ…ŸkZrŸWASzSŸsLrJaZrŸWASNKfW““…–a1Rj iJLD8…v—–œGdY6q zYqNARq8ˆ˜vZY…1jqSX/E…JDzjAj…SxŸESJ8PYqkv˜vkš˜JkzSŸ P…ŸkERvNYjAtSŸ P…ŸkE…XNš—AnSXs™Y0œSGZY…1jqS4/PbŸeh…4E6rŸWn Wa™JJZwaXNZr0ZŸJjS…GW–jA“6rŸZ—jJkJSW8œq J—1srjJkS—sj“…Xsa4dASN ŸsLrJaZrŸWASN…0“w˜v8tj0 0 xN 0œrGZYj–NšSN ŸsLrJaZrŸWASN 0“kIws…jŸ „YNRŸ“–6Jq—ŸECJsN 0sYœJab—4eeJsfefvjXR4aZrŸWASN ŸsLrJaZrŸWASN 4WwJJašr0Ze xaJaWaˆSG—r…1n j—Wax“–IJ0…RqE™ x n Ÿ““JJab—4eeJsf8Yq0™6Lr0D0œjNz…4DhJG016sYej0NR““rJkJWZ™Ys z˜Wa4ks—xse waC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿs–Rv0Zr4an  b…vZk v8r…qWe waC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸW4œKksYAZ0YJa/b4sš XjsrXjs JW/œ0arfhk“bXjsz—„aJWN…KkwaJ00…kAaJjLaJjsYJpjzNeaJqnaJjwaAjsYw ™rJdASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrA……WCSqa™6W“w6JZN6œAvs…4jx—wZbSvœJjf0Rs“œRLaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸZ„Y1D06vWwNœW…j–NšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASeSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrA……WCSjI6WsYA ˜G’4JLZ™˜sh6Jq—ŸECJLZv6v—DSJdb—4eeJsf8Yq0v6–Nb—ŸYe xZfxkYfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN 0qhIwjq—480 WajNŸN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWAS6Pa1j N1f4JG0nNj“šœœjC˜0Yœ Nœj8—jskIœWtRjZˆN8“rœj8rz60NwWWr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN 4WwJJašr0Ze xaJaWaˆ—G—rjLn —W Ÿ““JJab—4eeJsf8Yq0™6Lsr0D0œjNR““rJkJWZ™Ys z˜s6LsbSvaESN RsLAq—0 ŸjX“S W6vksjxse waC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸZ„Y1D06vWwNœW…j–NšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJab—0 zJsf8RvZiA“w6œAWNKaj“YY4asj48z WKR4NvIJ…—Ÿ“GJsaPRvZwjAjqr4anYjSRvZJfXaYXaASqSR4WYœwpa4dASN ŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN ŸsLrJaZSx“™ xJ˜JZ“rJk…jX™YsaJaJ—DœœaL…WASN ŸsLrJaGJdASN ŸsLrJaZ—0 zYzZJNŸN“rJaZrŸWASN ŸsLrJaZSx“™ xJ˜JZ“rGZYj–NšSN ŸsLrJaZrŸDEr4s ŸsLr1sL 4dASN Ÿ8ERXWL…WASN Ÿk“—vd„fG ™…1jtRJ“Z G8hf–“Y1NJaj“Dv8Aœ–“™…1arRX h…4’0RXsbNJZ–LjtRjY0fvqnNœ œN1j66qP0NzZ0NœjEœxks JW/œ4sš XjsrXj—R4aZrŸWASNC 0skIœWtRjZˆNjsE—1j…rXD0œvsN8“fœ Zf60Nx™0Nœj8—œjt JŸ0œvsšNqkszj…6sx0fNDNj“šœœj bX/0œvs6Nqkszj…6sx0fNDr4s ŸsLrJaš…ZYŸav˜jsw6vabSvaPSa™aJ—–jGE…JxsANJZsRœj6…™4S4jœNj/hœj8rŸ0NwWWjŸd“Iw—R4aZrŸWASNC 0WDrG1R ŸSNSN0œrAtRsZ™J1ZJ˜spjzNeaj6Ÿ…wj“RGk0j4—nœ4WA…KksYJvRGd4YsWšSN ŸsLrwWZ—ZXJjb…vZœrJks—xsAYjf06W“w v81…—™…1ar…XjZaGdeN8™Rs“xRJdZ GEkR0Z Nqeh6xN“rJaZrŸWAS4sKrJN–—As jzASqn˜s–R–jq—0 iJsZ zj bX/0œvs6Nqkszj…6sx0fNDNœj8—jas…œsŸrJdASN ŸsLR4a—SxZ/Y40vaxsL1WjGŸYqNK˜G—DSAtRJNA Wa™JvWwGE…JWZˆNjssIœjejXf4œKkjNj“0 œ0fjw—œWNr4s ŸsLrJaš…ZYŸav˜jsw6vabSvœJjf0Rs“œrAtRsZ™J1ZJ˜sp JZhaJWA…Kk“S4a0 N0 Jj…xdw–6n…Sk0 j6Ÿ…AjœJnjXjkaJsš XjsrXjs JW/œ0fzf–j“bXjsjX 0 JW4Rx’nIv“pYwaŸœ0f0fhkjXjsj0Wn Jj…xd AsY“4aJsN hkwYA—pœŸWAaJŸXRd“awpz—0…q—4aqsˆR4d…GEeœ–Znaqzfv0…—v80fJZCaLzRAhfŸkZrŸWASNfsWrAa Jx“/YsN…4DhJG016sYej0NKfvZiG8…6s ESdsYAZ0YJa/b4sš XjsrXjs JW/œ06Ÿ…wj“bXjsz—„aJWN…KkwaJ00…kAaJjLaJjsYJpz—“aJqnaJjwaAjsYw ™œh™P…qdw Ja0 JZŸœ4WwaJjwJks JW/œ0a0aJjw6XZ0…0Ab0ataxdprJa0Rœakœ4s0fxdœN–j„—– 4Sw“CR4W„RA6fGk0SwZCaAZiRvE…—v0CSJ eRqsxRXCSv8hN4Eeas“xR– e Gk0S—kfkD…XjZ—v0CœvNšSN ŸsLrwWZ—ZXJjb…vZœrJk JWDeY4sK…vNiSGsŸ—™…qsYRvkšaG8zJ1ak ŸkGRv/ŸfG8/YGZ™ Ÿ8ˆaA Z˜G8„NtdnaqkxRvjwx0œLZ1N8“N1  r4x4JjaINœ ERN“rJaZrŸWAS4sKrJNkj1qJx“0Sav˜JNk—1jZœ4qCRxdwYGE0 wNeaja—…d vdszaŸaJj…xd“S4a0 N0 ja4aJj“˜vd—R4aZrŸWASNC 0WDGd1RœqzYXsK—Gj–œG81SWZeY1DŸ z …0/4Shk4NJd8Y1j  œY0YAsLNJZ“NLj6b40RŸa4r4s ŸsLrJaš…Jd4r4s ŸsLrAaqjŸ“zYjaN 0“ijAj 60ZeY1DŸ 4ZkIJk…JxErYG8bfW/h…Lšr0DŸœjNX Ÿ“D…X6rŸWn —ZfŸsL1jN…waASqJfWa–6wN6rŸWn  b…vZk v8rjxWzSNSas“kJA“…JWZ…W—fŸs–—As1RY0SNS…v—DAsrjA—qS0WC ŸsLrJasa4dASN ŸsLrJaZ—48kSŸK˜j“w v tjŸYeJœZ/ ssw˜–Nšr4N4x Ÿ j™6–Zr6q“4 Wf0…4Nˆ6vsY—ANCJxa—fqkœa4dY—0WhS0 P Wvf4dY—0WhS0NXR0–wZšjAqSJ8Ÿ j™6–Wr˜1—4YjN1fŸsL1WjGŸYqNX Ÿ“–6Jq—ŸECJsNfŸsvrsNSjJ—GjœJjjeIjNS—j œS0N™NŸN“rJaZrŸWASN ŸsLrJaZr0Z™YqaJaW“wNœ1˜xES Ÿ xdXR4aZrŸWASN ŸsLrJaZrŸZkY1NbRWswœGdZr4anYsav6Wqh…v81˜Z/YXs…4WYG8t4eXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸZeJGsRŸ“–RL…jzWtœJeeb0œ1jNznY1Z…RJ6hj1wŸWkSGs…4WYG8tjANEJW—XI“D…Xš˜jZ4JG0…˜s“Ys“Zr0skSNSfv—–jA—w˜qEqvsSNx0œRLaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWAYja  ŸkL1—jR 0J1ZjbŸ0LRLaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLI–Y0Nwj0NwWLSL Zf60Nx™0Nœj8—œjt JŸ4œLY0N8“œzjC˜0Yœ Nqs8rzŸSz0NwWWNjqn˜1 6N10YS™0NwxnjN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASa™RsL 4kJWZ™Ys z˜WœrSkZr0DŸœJsz…4jvSGtRJ—™S0zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿs–œA tRsZeYGEJRxdXR4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASa™RsL 4160Z/ xa™…qd„fv JxEGYsav6Wqh…v  JWDeY4sA…4WYG8tjANXJWNX…0sY11…Jke waC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸZ„Y1D06vWwNœW…j–NšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJa6˜Sd™…AZ4fv0jv8nRX“k…qsGR–ZefGEkR0Z“Y1NJaj“Dvk0S—kRŸ8GRG0CkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸZeJGsRŸ“–RL…jzWtœjYeIjœ1—NŸWkSGs…4WYG8tjANEJWreI“D…XZr0skSNSfv—–jA—w˜qEqWre…4jxSJab…jsASqa™6W“w6JZI—1uEWNSN0“RLaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿs–œA tRsZeYGEJRxdXR4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZSLšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN…0“w˜v8tj0 0 xIYsœrœsZ—zj™ –sKNJWw˜LW1—4XJLZv…0s™IJ8t—0 ŸJsf06xkLAq—0 ŸjX“K x8LrJkq—4eYXsnNŸN“rJaZrŸWASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN ŸsLrJaZSLšSN ŸsLrJaZrŸWASN 4Nkj1qJx“0SNSRvZ–jA—…jzeYX“zSŸsLrJaZrŸWASNKIN“rJaZrŸWASN 0“w˜–“…J–NšSN ŸsLrJaZrŸWASN 4Nkj1qJx“0S Ÿ xdXR4aZrŸWASN ŸsD6xkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sd“œXrnj0™ajfE…hkwSG“s…wj4ajan…KksYJpY“Aœ4W1…JjwNG8p jj8rJdASN ŸsLR4a—SxZ/Y40vaxsL1sJxZ™SdwNG8p jj8œ4jPaSkw Jqnbz„—Ÿ zYqdw—AWpR—8œh™P…qINJ6n w“0b4XRtkwNG8p jj8œh™P…qSR4WYSG™0NAszN8“S1jeYœ0YAWjNœjœRŸN“rJaZrŸWAS4sKrJNkj1qJx“0Sav˜JNk—1jL…WASN Ÿk“RX L…WASNKa4—wSANjŸ0AJGEJajqzAt61—AYŸav…Gxh—GE…Jx0CSqSNJN–jœsb6q zYqN1fvjXR4aZrŸWASN ŸsDœ1NJWZ„YNR46zAsq—zszY1NqRvN“ 4kqSv8XJsNnfvjXR4aZrŸWASN ŸsLrJaZrŸZ„JjIRxsL –“sJx0iœ4aC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASqSNJN–jJarŸWiS68˜q“ˆfŸkZrŸWASN ŸsLrJaZrŸWASN Ÿs–SAs…jŸ hœXaC ŸsLrJaZrŸWASN ŸsLrG“ JxE™SNq6vW–R–s…r464r4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWn x™a0“œrœsZr4NAœW—NRqdXR4aZrŸWASN ŸsLrJaZrŸWASN 0siSG8 jX6Xr4s ŸsLrJaZrŸWASN Ÿs–œG16sjAS1Zvf4ZLYz L…WASN ŸsLrJaZrŸWASaSRW“k—1WtSWx4r4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWn x™a0“œrœsZr4NiœXaC ŸsLrJaZrŸWASN ŸsLrJaZrŸWAJJEbRWswfzaL…WASN ŸsLrJaGJdASN ŸsLrJaZr0De — 0œrJkq—4eYXqeb0swGsY6ŸECJsaPfŸkL –atŸZzYjI6xsDrG 6A—/J1ZJ˜q“ENvkqSv8XJsNnNŸN“rJaZrŸWASN 4Nkj1qJx“0Sav˜JNk—1jY61W/YŸN/RJ—wNJ“q—484YGsRŸ“DJwsa4dASN ŸsLrJaZrŸWASNK˜j“Y1W1Rœ—AYzNJ…J6zAsšr0DhœxNNxkfŸkZrŸWASN ŸsLr1s6rŸWn x/6xkfŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sd“œXrnj0™ajfE…hkwSG“sY“nb0fP ŸdsYJpœŸWA JW1 Ÿdk…–—0jXAajf4RxdsjwWp JW/œ0aN…vjwJ“—R4aZrŸWASNC 0WDSG8qSW EYGsK˜G—DSAtRJNANqenjœj…aJ0JwsvNj“Lœ1fX˜Ÿ0YJWLNwu4YzjhS40f–sbNJdkbzj …wf0JwsvNj“Lœ1j …j/4œKkjNj“0 œjeb4e0YS™XNjs“az0f0R40NwES1j6s0NAskN8“˜N“rJaZrŸWAS4sCaqN“rJaZrŸZX Wabf4WwœJa…Rs 0JœNSfvDhNva1—Ÿ „YœZvRs“œ XL…WASNKNŸN“rJaZrŸWASN Ÿ“Dœ1j1˜xESI6vNiA t—zqzJsZR4N–…–aY60 0Jjf8RxkL –“b˜JkeœXaC ŸsLrJaZrŸWASa™RsL…–“qSx“XY1NNRŸ“Dœ1j1˜waAS1NqfvZkA q6Ÿ0iS0reIjrwsa4dASN ŸsLrJaZrŸWASN…4—D…LZ—LASqSR4WYœw—rR nJJeE˜GW–jANtr4aiJqJavNDœ1j1˜DzYjf0…4DzY4aGrŸZkYjf0…46zAsZrŸ“ŸœNJ˜JNkjAjq—j“4JœNJ˜qs“YXpa4dASN ŸsLrJaZSLšSN ŸsLrJaZrŸZ™YqIRvjXR4aZrŸWASN ŸsLrJaZrŸWn x/6xsx6vabSWZCYjNaWk—Gk RLsˆYaJf4ZL 4E…SW ŸYŸINJNEr1NjzjnY1N1 4 LrGE1Rj XSNbaWxzjAs1Rj 0 xj…asqzjA“Z…JNeœXaC ŸsLrJaZrŸWASeSŸsLrJaZrŸWASNKa4NkjGEY61W/ xaIRŸkLYX YSxŸCSŸ PjxkˆI–Yrz4SAsX Ÿ“D1—q—ANXJWNX Ÿ“–6Jq—ŸECJsNfxdXR4aZrŸWASN Ÿs–Rv0Zr4„Y1NJaJ—L 4ktjŸYeJœZ/RvNE…hkN4eXr4s ŸsLrJaZrŸWASN ŸsDSG8qSW EYGs…4Zw—1 6G™YzWz˜WfŸkZrŸWASN ŸsLr1sL…WASN ŸsLrJa1RjYe Wbas–R–—1—X4JqajRŸs™˜–sY—z—“œxN…4—D…Lšj–NšSN ŸsD6xkL…WASNaqk“RŸkZrŸWASNfsp…dŸb0arR–jwIJ™njŸ“„ JWb…hkwIvap JW/œŸd 4jY4apRJŸajaP XjwNG8p jj8œ4j…xjv…G—–RLZJWD0Nj“Lœ14 waL…WASN Ÿk“rqW1RjYe WbasDœ11RJ80JAsxRXY0jv8kNœa™…qsYRvkZ6X 4Sw“™fvd6RJEe˜G0zfkRqsiRJstN48“œx—™…qsYRvkZ648“SGECa1jRvŸ0N40iNs™f1a4Rvs6—vEkR0—k…jsxRJEZRG8hJG ifqkt…Xj6SkZrŸWASNfk“IxkZrŸWASK6jsk˜– ˜Zk Wf0…G—–R– t…Z/JœNSfv—kRLs4aer4s ŸsLr1aL…WASN ŸsLrJabSxP0YXsIsDœ11RsZ4YqfE60“YSJd1—4XJLNJajsw6J8šr4—ˆSAsnfxdXR4aZrŸWASN Ÿs–Rv0Zr4ˆ xba4DzœJdbSxP0YXsX Ÿ/z –tRjZ4 LNNRqk6LsrjxWe waC ŸsLrJaZrŸWASN ŸsLrJkqSveSre Ÿ“DGdJx0Ÿv0v…0s™Iw“—0 zYqNARs“DjA—1SxP0YXsK64WwNJkt64NA qNKRJWwNJk160ZESNbaWxzjAs1Rj 0 xj…asqzjA“Z…JNeœXaC ŸsLrJaZrŸWASeSŸsLrJaZrŸWASNKRvZDœG8sa4dASN ŸsLrJaZrŸWASN…4—D…LZ—LASqSR4WYœw—rR nJJeE˜GW–jANtr4aiJqJavNDœ1j1˜DzYjf0…4DzY4aGrŸZiY40JaŸsLSA——60 EY40JaJ—WJA  60 ˆSJs1fxdXR4aZrŸWASN ŸsD6xkZrŸWASN ŸsLrAa1Rj iJLD8…v—–œGdšr4N4Jx6PR0vœwZr˜J81 s6PRq8LrJkqSvejX“K x8LrJktjŸYeJœZ/RvNE…zaL…WASN ŸsLrJaj0sASŸaIaG—wNœšr0ZŸJjS…GW–jA“šjL—PS0zSŸsLrJaZrŸWASN ŸsLrJa1RjYe WbasLA— JWZ„YaJ˜saˆ—G—pa4dASN ŸsLrJaZSLšSN ŸsLrJaZrŸZEJsS6JNkNvajzWXYqfE…0“œ 4sYSx“1YGsZfŸsL1sSWWeœXaC ŸsLrJaGJdšSN ŸsLI–Wš 4dASN ŸsLR4f0fGsvNs“k…zjtfj0NjNCNwwazjC6A0œvspNœaEjLj6ssL…WASN Ÿk“—v0™JJ“kRAˆRGŸX…G84JsnaJ’XRvEš…Gdhf1aiaGxXfvŸ˜GEkR0—™awRG8š…Gk4Nqk 4xCRG8 ˜AiY8i XZiRvXaGk0R4Z„ ŸsˆRwjZJ–kYj—iaq“rR–Z……G“ASœN™…4dˆ…GaZ˜G00SjeRJWRJ8t—v0„Yœa„ ŸqeSŸsLrJaZrŸW8SjKa0sYSGtŸWnYŸav…Gxh—GE…ŸZˆ xbfvZkY4f0YAWjNœjœRzj ˜Y0JqNIr4s ŸsLrJaš…ZY40J6v—YSAjZ—Ÿ“4Y1ZPRWswNvf0R4s—Njs8 1 6b00JAjs xb6j“sbz„œ0anf4j“6–s…Sd™œ0atRG0……vZDœG8L…WASN Ÿk“RX L…WASNKa4—wSANjŸ0AJGEJajqzAt61—AJœZPRWsYSJdbSxZ/JœZŸ…W/hjwL…WASNKNŸN“rJaZrŸWASN Ÿ“D1—qrŸxESNS6vW–R–“6jLj/Jqab G6h…v8t—XaCS1NKaxs–œAN…jŸ ESN1a“DrG 6A—/J1ZjfxdXR4aZrŸWASN ŸsDSG8qSW EYGsK6vNkR–—šSxPeY4ESaGZ–IœN…JxsCSqSNv—vfXaY4keWreRG6zjG“ 6s ˆYXs1NŸN“rJaZrŸDEr4aC ŸsLrJa6˜Jd8r4s ŸsLrJaš…—™…Ÿ™CRvs8…G80fW—iRxkAa1 6rŸr4œWfzSjv…G—–RLZJWD0r4s ŸsLrJaš…—kRWs„RJEe˜GEkN4“™as“r…XjCN48iS4“CfADXRA NX/N–“iRJdR–jejvE™S4“na1 DRJaš4E™Jw“eRGW6RGahRG8/NX naJdt…GaZ˜G00SjeRJWRA bv8hJG“„ ŸqzRvkC˜G“ASw“kasYfv0jv0™Yq—k…GxX…GaZ6xkZrŸWASNfsWrAa Jx“/YsN…4N–—G“6q iJsYE…WqzAqRJee jNK˜G—DSAtRJNANJZ8jœ04’0JwsvNj“Lœqee—G“q—4ehYjSNœfX˜Ÿ0œL 6NJWrzfX˜JWb6qE4Ys606W“wNJ“…jzeœvŸ8ax8ENœWzjNJjJajqh…v81RW bStk“…–Wp Jk0aJsX hk“6wrnjhkhaj6CR4jœN–n j „œ40qRXjprJaAR4aZrŸWASNC 0WDrG1R ŸSNS…0sYGZSxPeY40™aj“E—vk4SŸ—iaœjiRG0Cjv0™Yq—k…GxXfv8šN48Aœ–“4aqsˆ…X CaG8eRŸ84aq“h…Jab 4s16qY0SJs…JW–jANt—z“NvdLJ1 š—4’0Ns64Nj“La1j fJ’0YAWjNœjœRz0f0JqNNNws61j6˜Jf4JNœN8“rœjbz4JsN0NjsLILjejXf0RzZ0NqenSLj N1aL…WASN Ÿk“rqW1RjYe Wbas–SA t6A™JjfŸ zjC…jx0JwWGNqenjœj…aJjqSx/8JGnIv“pj4kz Jqefvj“š48pj4ZiRj“/YqIRxN“rJaZrŸWAS4sKrJ—–…–st64—ˆSjJNWqhjAaq—484YGsxfv8bRGdhNtdk…w4RvXfG84S8™a8„…XY4Sv0AYœšSN ŸsLrwWš…œšSN ŸsDr1W RweJwsKRJ—wNJ“q—484YGsK˜G—–—Asq— XYŸNA…4N–—G“6q iJsYE…WqzAqRJee jNX Ÿ“–Gq—ŸESAs1fxN“rJaZrŸDXr4s ŸsLrJaZrŸWASqaS…v—–—JarŸWnJqav6Ws6Lsb˜J6CSAs1Nq“Erw—6j0 ˆSN1a“–Gq—ŸXr4s ŸsLrJaZrŸWASqSNv—LrœsZr0DeYa™˜q8NJ…—Ÿ“GYzZ/RvZ–a4db˜Z/YsNK˜G—–—AsqrŸWŸYGsRq8“Aa jŸEhJjaqRWh—G“q—4ehYjSN8“Gk JWZ/S0—zSŸsLrJaZrŸWASNKfW““rJd 61q8YGE—RŸ“D1—qr4™nœjN™NŸN“rJaZrŸWASN ŸsLrJaZ—48kSŸI6vNirA 1˜Jan x/6Waˆ—G—6rŸWisb˜JDzSJEšŸxEWreaŸkYfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsDGd1RœqzSf0Rv—Erq s—ŸE™YŸSfvDhNvdjzWXYqfE…0“œ 4sp˜W“œxN…4—D…Lš4™Xr4s ŸsLrJaZrŸWASN ŸsD6xkZrŸWASN ŸsLr1sL…WASN ŸsLrJaj0sCYzNS˜JN–Iw“šr0De SYq0v6–NZr4— xav˜J—–R–j…˜GdiS0NIj6–ašJ–NšSN ŸsLrJaZrŸWASN 4Nkj1qJx“0SS˜J—wjœaL…WASN ŸsLrJaGJdASN ŸsLrJaZSx“™ xJ˜JZ“rG0 jXˆJs—zSŸsLrJaZSLšr4s ŸsLrw š…JdšSN ŸsLrwWZœ0fPawjwSw—0jŸZiœ4WŸRXjwNG8p jj8rJdASN ŸsLR4a—SxZ/Y40vaxsLAa jŸEhJjaqRxsDœ11RJ80JAsxR–jejvE™S4“™…qsYRvkZ6xkZrŸWASNfsWrAs…JWD8Y4ŸŸ 0skIw t—0 /YGsxRJsb—v8“fKdCa1jRvŸ0Nœ1Rs ™NzaEœœjX4œWN™NJd8Y1j  œY0YAsLNJZ“NLj6b40RŸa4r4s ŸsLrJaš…Z xa/˜JDz –“Z—jYŸJœZJa4—–R– t…—eRx“iRXD4š40“f– ™…LahR– Zœv80œv“na1 DRJaIxkZrŸWASNfk“IxkZrŸWASK6jsk˜– ˜Zk Wf0…G—–R– t…Zˆ xfEa0WYrAašr0ZXJjaIfssw v8šJdASN 4jXR4aZrŸWASN ŸsL1sSWWAWN…4—–…–1˜œunJjaS…jzœGd…jXzSŸN1 0sw6va…RœsEJœZjav6zA 1rŸWiœvsSa0swœAZ j4—™S0—zSŸsLrJaZrŸWASNKfW““rJd…jzWX xnRŸ“D1—qr4ke waC ŸsLrJaZrŸWASN ŸsLrAs…JWD8Y4ŸŸ 4—DS1W…j–NšSN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWA xa/˜JDzY4atRjYzSjJNWqhjAaq—484YGs/fvZYrANt6sZ™SŸNZNŸsLSwNZr0De —fxkfŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sd“a4fn…œWŸ˜ZJsb6GWwœG8L…WASN Ÿk“rqW1—Ÿ EJjfe Ÿ“DrG 6A—/J1ZJ G6hjAsqRJ8„JsNK˜G—DSAtRJNANJZ8jœ04’0JwsvNj“LœqenYJ nœ4X…xdœNX—0YJN„ jašR4nIv“phk“b0ak XnIv0“ v“t610 xaJajqhjAjqrzjŸYs6PaJN–˜LW…6G80œv0v…sqhIœWtRsZˆ jf0…q8k6w …—0 zœvkv…sqhIœWtRsZK WSR0“wNœjŸE/ xfE˜jhjAsqRJ8„JsNGR4d…GEeœ–ZCfŸsrRX—t G84fœana1 DRG0Cjv0iNWAjœZJ˜J—kRv“… S™P…qdw–0j4k™aj6Ÿ ŸdœN–W0jŸ 0œ0as…SksYJp jj8œ06n…SkJwDnj40AaJWsRqd“aw 0j4k/b06Ÿ…wjwœ4PnYJNhœ0f4Rxd“aAsYjs4aJjnawj“JG00Y8ib4WN…JjkjwZ0zs/aJW ftk˜JdsYJN“ JW aAjs…Xj0bz„œ0arftkœNXszCœ4WŸfxdwrw –œA tzj/YG0S˜JDhRvk6RqP0YzNSRvZYjA6˜œj jI6W“w6j œjqE™Y4E…fWqhjkZrŸWASNfsWrAa Jx“/YsN…0swœ1jzs0SI6vNkR–j…˜—kR1jxRJ™Ÿ64k4JA“™…ŸqzRAuX—– 4Sw“™fŸ8DRJ0šš4k4Y—™Rqk/rGZkAst6G8nYsavaJWwJG8160—e…L—ˆR–ZefGk0JJEiRJd—SŸsLrJaZrŸW8SjK˜j“Y1W1Rœ—AJJŸEaGZ–jGt…—k…“xRvseš4d4Nj—™Rœ06vNijGeXNXsNNJWœ˜L 64e4œKkjNj“0 j“k—AN16sjšSN ŸsLrwWZ—DeYbaGrzœJaSJv„JsK6vWwIwjZœ40jRJj“aADnYkkb0aDawjwIva0jz—0œ06CR4jrAZXR4aZrŸWASNCf8XR4aZrŸWAYŸJ…JZ–Rv“Z—0/8YG0I6vWwIwjZSxPeJjb6WhjAsqRJ8„JsNA…4N–—G“6q iJsYE˜s“YS1ZjŸE™WN1Rq8LrJk jŸPeYjfEajœY4EšJdASN 4jXR4aZrŸWASN ŸsLAa jŸEhJjaqRWzœG81Rs“eJœZj 0œrJk1—Ÿ „YœZvRs“JIw“…Jx/hYjaIRW6vEb˜1iSA“CRqsL6wjZr4N0SqK…Wqhav…6s GYzZJ˜J—kRv“…j–NšSN ŸsLrJaZrŸWnJjaI6vWwIwjZ—LASqav…G—–R– t…1uESAs1šŸ“EYz b˜WŸJjNRq8“G 60ZeY1DŸNŸN“rJaZrŸWASN Ÿ“D1—qrŸxESNS6vW–R–“6jLj/Jqab G6h…v8t—XaCSAsK…vZœrA“q—Ÿ E xIRvNiJA 6sjASAqŸ…4N–—G“6q iJsYE˜s“YS1ZjŸE™œvsS…WqzAt61—eœXaC ŸsLrJaZrŸWASa™RsL…v“t60 0 xNA…4—D…LšjL—PS0zSŸsLrJaZrŸWASN ŸsLrJaj0sCYzNS˜JN–Iw“šr0De SYq0J6–NZr4—vY4EbaGN“YXZ—LuEW—fvjXR4aZrŸWASN ŸsLrJaZrŸWASN 4—–…–st64NAYG0J6ŸsWj1— 6s X xa™aGZ“…–tJxZzY1ZSRxkLSœaZrŸszSNS6vjDwšj–NšSN ŸsLrJaZrŸWASN 4 —R4aZrŸWASN ŸsD6xkZrŸWASN ŸsLrA……Jˆ xba4DzœJdbSWDŸ x za0œa4ab6PeJjb6vWwNJEZSxE™Y4E…fWqhjœ Z—J80 xaJaJ—LYXZ—LuEW—fvjXR4aZrŸWASN ŸsLrJaZrŸZEJsS6JNkNvaqSx/8Js—zSŸsLrJaZrŸWASNKIN“rJaZrŸWASN 4Nkj1qJx“0Sa……vZDœG8pa4dASN 4 —RŸkZrŸWAS6PfkAR4aZrŸWASNC zj —460fœZ“S IRvNiJA 6sjšSN ŸsLrwWZ—ZXJjb…vZœrJk1—Ÿ „YœZvRs“JIw“…Jx/hYjaIRxsDœ11RJ80JAsxR–jejvE™S4“™…qsYRvkZ6–Y0fKk—Nœa0—œj6aœD0f–sINjs8…xN“rJaZrŸWAS4sKrJN–—As jzASqav…G—–R– t…Zˆ xbfvZkY4f0fKk—Nwpœ1j66G60JqNINœ sazfX˜Ÿ0YqNPNw“a1j66Gf0JAsCjf0…4NkIw…—zW/YG0™Rj“Yœ1u4JJjNNJx4Yœj6R/0NwWWr4s ŸsLrJaš…ZY40J6v—YSAjZ—Ÿ“4Y1ZPRWswNvf0R4s—Njs8 1 6b00JAjs xb6j“sbz„œ0anf4j“6–s…Sd™œ0atRG0……vZDœG8L…WASN Ÿk“rqWq—4EY1Nq˜qsWj1— 6s X xa™aGZ“—–™SGECf1YCRJseaG8/NXZ™aqs6R–j6…Gk4Nqk 4xPSŸsLrJaZrŸW8S4qPSŸsLrJaZSxD8JJ0PfWsErG0qjzj„ xa™aGZ“rA“q—zsXjœZJ˜J—kRv“…4anYŸav…Gxh—GE…j1sˆJsb6GWwœG8r4NiœxN…0swœ1jzs0WN1Rqk—R4aZrŸWA waC ŸsLrJaZrŸWASNSa0swœAZ j4—™JLNIRvNiJA 6sjAWN…4N–—G“6q iJsYE˜s“YS1ZjŸE™WreRq“ˆIvEb˜GdiS68asLYXjbSxZ/JœZŸ…W/hjG 16s E v0™…s“fŸkZrŸWASN ŸsLrJk jŸPeYjfEasx6vab—Ÿ „ xa™aGZ„6Lsb˜J6CSAs1Nq“Erw— ŸWiœvsS…WqzAt61rXr4s ŸsLrJaZrŸWASqSNv—LrœsZr0DeYa™˜q8NJ…—Ÿ“GYzZ/RvZ–a4db˜Z/YsNK˜G—–Iwa16s E v0™…s“œrJE6…jZXJjaIfssw v8Y6ŸE™Y4E…fWqhjwjb—Ÿ „ xa™aGZ“…zaL…WASN ŸsLrJaj0sASŸaIaG—wNœšr0De —fW„—wsa4dASN ŸsLrJaZrŸWASNKfW““…–“qSx“XY1NNRŸ“D1—q—ANPJWNX Ÿ/ejAs1RœsESAsn 06LsNr4eXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸDeYbaG—ErAj…JvNAs/…s“Yr1jzs0SŸa™avN–˜– …—0jCSJ“z Ÿs“a4abSWDŸ xNnfxdXR4aZrŸWASN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWA sWC ŸsLrJaZrŸWASa™RkDœ11RqZ4YXsA…4—D…Lw˜qZqœxNRszA 1SxZeYG01 46hjAsqRJ8„Js—C 0NwNœ…jzeSAsn 06LsNr4eXr4s ŸsLrJaZrŸWASN ŸsDSG8qSW EYGsK6vNijG8pa4dASN ŸsLrJaZSLšSN ŸsLrJaZrŸZEJsS6JNkNva…R zYzZjNŸN“rJaZrŸDEr4aC ŸsLrJa6˜Jd8r4s ŸsLrJaš…—™fxqzRvs6YGdhf1a™fxsGfvŸ˜GEkR0—kRvdG…XXYG8“œx—iRx8YR4b—kZrŸWASNfsWrAa Jx“/YsN…4NkjA—t60Z™JLZ…fvZ–jJa160ZEYjf0Rqsp…wj4ajan…KksYJpYja/b06Xa–j“6XDnjhk/rJdASN ŸsLR4a—SxZ/Y40vaxsLANt6qE/YqYE…4WYSJa160ZEYjf0Rqsp jjŸ JsW…4jœNvs0 JW/œ4jtfAjwIJ8sbz„œ0ar XjjANpj0hb06XfvjsY4as j e S™P…qdkN40p…wjeœ0an…GjwSw—0jŸszœ0fE…hkwSG“s JZhajfERvnIv“pj40AaJWsRqdwYXWD –tRjZ4 LNrfvŸ˜Gk4SŸ—™ Ÿ8ˆRvsbRGk0SœNC zfzRJ0šš4ECNxiRœj„RG0Cjv0CœvEiRœYXR– …J– 4SJ“k…xqCRJab640kShdC…LarR–NbSvdeRŸnasx…XjšfG0™R4 naœatR–6RA 4SJE4aqsˆRvkšYG8“SGEnaq“hRJs8J–™SGkšSN ŸsLrwWZ—ZEJsS6JNkNva160ZEYjf0RqspYsnœ0ašRtk“š48pj4ZiajaŸRdwrXWpj4N8œ4jjavj“—JksR„œ4j…xdj4nzaŸaJqzftkwb4pbz„œ0anf4j“6–sYkkb0aDawjwIva0jz—0œ06CR4jrAZXR4aZrŸWASNC 0WDGd1RœqzYXsK—Gj–œG81SWZeY1DŸ z …0/4Shk4NJd8Y1j  œY0YAsLNJZ“NLj6b40RŸa4r4s ŸsLrJaš…Jd4r4s ŸsLrAaqjŸ“zYjaN 0“ijAj 60ZeY1DŸ 4NDjANt—j“eYqajRŸ“DSG8tjzqeJsYERJWw˜v86rŸWnYqfE…ssw˜v …—48EWN1Rqk—R4aZrŸWA waC ŸsLrJaZrŸWASNS…GZwJarŸWiJjaS…sL6w“Zr4N0SqSR4WYœw—rRLsnJs…fWqhjwjb˜ZX WaPfŸsLYXjbSx“™YsfE6W“JIJ0jX™œvs1 Ÿ“ENvkt—zs„JjaP s“–R–spa4dASN ŸsLrJaZ—0YŸJsaNRŸ“–œA—…rXaASqfE6J—Dr1WqrXaASqbRv—DjAstRLqhJjZfxdXR4aZrŸWASN Ÿs–Rv0Zr4anY40J6v—YSAjY60“/Y4sWIjrwsa4dASN ŸsLrJaZrŸWASNKfW““rJd…jzWX xnRŸ“–IœWqSxD8 xNnfvjXR4aZrŸWASN ŸsLrJaZrŸWASN 4—–…–st64NAYG0J6ŸsWj1— 6s X xa™aGZ“ 4P4Sh™zNwWprœjeb4e0fvs4Nj“LRœjNq/4SŸdvJjaS…œj…SŸŸ0Y1ZNjskœ1 6b0x4SŸaNjj/œ0f0NjNCNJd“6zje…wY0JqNkNjsw6zje˜/0R40iNqk–œj“Y…v8 b0aSaGjœNXp JW/œ4Wq hkkJGkpbzi˜JNeœXaC ŸsLrJaZrŸWASN ŸsLr1sL…WASN ŸsLrJaZrŸWASaJf46hj1aL…WASN ŸsLrJaZrŸWASN ŸsLr1Sx“4 –sKaj“YY4aSJv„JsK6vWwIwjš—48ŸYŸaPas“–jJdZ…ANASJsX Ÿ“–IœWqSxD8 xNnfxdXR4aZrŸWASN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWA sWCaq8ErJaZrŸWASN 4WwJJd160ZEYŸfE˜qkLA qJWZX WSYq0v6–NZr4—kYjaPRxsDr1Wt—X™JqNX Ÿ0LrA“6G8XYŸaJ…Ÿ8“YXZ—L—XS0zSŸsLrJaZrŸWASNKfW““rJdb—X4JœZvf0hA1…1uESAs1fvjXR4aZrŸWASN ŸsLrJaZrŸWnYqfE…ssw˜v …—48ESre 08Ijœjq“GJ–“zSŸsLrJaZrŸWASNKIN“rJaZrŸWASN Ÿ“–˜–  6q zJLZSfvN“rœsZ—480JLZv˜JNk—1jšSxP8JJEI6vN“ 4kt—zs„JjaP s“–R–s6rŸWŸœjNnf0aEYX b˜waiJx XRsœ…4ar˜WnYqfE…ssw˜v …—48ES—C Ÿ“–˜–  6q zJLZSfvN“Njœjq“vœWSWj™Rv j6W —j brs WIjNpa4dASN ŸsLrJaZr0ZzY1ZI…vZvIJ0jX™Sre Ÿ“–˜–  6q zJLZSfvN“rwjZ—Ÿ“/YzZJajsw6J8šr0ZEJsf8aG—–jG …RJ8zJsNnNŸN“rJaZrŸWASN 4Nkj1qJx“0SNSf4DhœGt—1skYjaPRxdXRX 6˜WASN ŸsLrJaGJd4œ–s ŸsLrJaZrŸWA xa/˜JDzY4atRjYzSjJNWqhjAaq—484YGs/fvZYrANt6sZ™SŸNZNŸsLSwNZr0Z4 WSa4—Ywšj–NšSN ŸsD6xkL…WASNaqk“RŸkZrŸWASNfspj4k„ jaZa–jsjw—s…jn J0D…qdsYJpYja/b06Xa–jwSwNp…wj4ajan…–aC ŸsLrJaZr4dAK…vNk—A—Zr0ZzY1ZI…vZvIJ0jX™SI6vNkR–j…˜—iRx8YR4bSvk0SwZiRJdRJ8C Gk0N4ZCaLYCR– CkZrŸWASNfsWrAa Jx“/YsN…4NkjA—t60Z™JLZSfvN“rA“qSx“eYG01 z šNt™0YjNDNsssœœ0f0Nwj0NJDhjqN“rJaZrŸWAS4sKrJNkj1qJx“0SI6vNkR–j…˜—k…“xRvseš4d4Nj—™RœXR–Z……G8AfJ“™Rqk„RG86Jvd/Sqe…L—ˆRG0Cjv0™R4 naœatRXr4š484R0—4aqsˆR–6SvdŸS0k…w4RvXfG84S8™a8„…XY4Sv0AYœšSN ŸsLrwWZ—DeYbaGrzœJaSJv„JsK6vWwIwjZœ40jRJj“aADnYkkb0aDawjwIva0jz—0œ06CR4jrAZXR4aZrŸWASNCf8XR4aZrŸWAYŸJ…JZ–Rv“Z—0/8YG0I6vWwIwjZSxD8YzZ/—4Ww˜v8šr0ZzY1ZI…vZvIJ0jX™œxN…4NkjA—t60Z™JLZSfvN“…ŸkZrŸWASzSŸsLrJaZrŸWASN…0qh6JkZ—LAS1Zv…0s“rw—1˜WiœvsS6vW–R–“6jLjGJqaJ6GWwœG86…JNAYŸJ˜GWLrJE6…jZzY1ZI…vZvIJ0jX™œvs1 Ÿ“ENvk1Rj ŸY1NSRWhA1…ANšSN ŸsLrJaZrŸZ™ aJ…qkLG“tj0WzSNSaG—YAaqJWWzSNS˜j“Y1W1RœjG v0v˜kfŸkZrŸWASN ŸsLrA……WCSqbRv—DjAstRLqhJjZ…W6–ašJ–NšSN ŸsLrJaZrŸWASN 4WwJJaš—0 ŸYŸSNkLA qJWZX W—fxkYfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsDGd1RœqzSf0Rv—Erq s—ŸE™YŸSfvDhNvdbb4s4aKk…GapYJ e JW1fqdwYXNpYja/b06Xa–jJwDnj0WeajaŸRdwYXWpbz„œ4WZR–j“rJs…wj4ajan…KkkSv“p JW/œ4jtfAjwIJ8sYjshb0a—f–jwav0pj4N8œ06Xfvjwvs0Yjshb0a—f–jœ–sYJN“ Js0atkkJ–Z0YJ—Ab40……ŸN1fxdXR4aZrŸWASN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWASN Ÿs–jAN16sYXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸDeYbaG—ErAj…JvNAs/…s“Yr1jzs0SŸa™avN–˜– …—0jCSJ“z Ÿs“a4ab—zq8 xK6J—L…Xpa4dASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN 4 —R4aZrŸWASN Ÿs–Rv0šSxPeY4EKaGNE 4kt60YeYŸJ6WaˆrG—6rŸWiJG0™f0“œrAaqJxECJsa—fŸsxrJa16A—eYŸKRW“LNvEšŸxnœN™NŸN“rJaZrŸWASN ŸsLrJaZr0ZEJsf8aG—–jG …—48ESre 46zjGs160ZESŸNS˜j“w6w q—0 GJqa™˜8Lrw—N4™EWN1aq“ErSdZr0ZEJsf8aG—–jG …—48ES—C Ÿ“DSG8tjzqeJsYE…4WYSwjb˜œiœXaC ŸsLrJaZrŸWASN ŸsLrJk1Rj ŸY1NSRWhJAt—0jAWN…4NkjA—t60Z™JLZSfvN“rwjZ—Ÿ“/YzZJajsw6J8šr0ZzY1ZI…vZvIJ0jX™S0—zSŸsLrJaZrŸWASN ŸsLrJa1RjYe WbasLAs…jzW4 xaJ s“kR–N…j–NšSN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWA xa/˜JDzY4atRjYzSjJNWqhjAaq—484YGs/fvZYrANt6sZ™SŸNZNŸsLSwNZr0Z4 WSa4—Ywšj–NšSN ŸsD6xkL…WASNaqk“RŸkZrŸWASNfspjŸsCœ40…fxd“aw 0j4k/b40D…qdsYJpYja/b06XavaC ŸsLrJaZr4dAK…vNk—A—Zr0ZEJsf8aG—–jG …RJ8zJsNK˜G—DSAtRJNANq™4bzjŸ0NwWWNwSLj6aœD4œvj4NJD4—N“rJaZrŸWAS4sKrJNkj1qJx“0SabaGDh˜v8 jz—ANJd“œj fJY4œKkjNj“0 J—DS1W… S™P…qdw…XNs…œe JWšRSkwS–j0jzAajfŸadœš4dsYZha4dASN ŸsLR4a—SWZCY4ŸE64NErq s—ŸE™YŸSfvDhNvf4JsN…Nq™na1jCfJD0JJ4NJZErzjt…œr0œKk/NJd–aqN“rJaZrŸWAS4sCaqN“rJaZrŸZX Wabf4WwœJa…Rs 0JœNSfvDhNva1Rj ŸY1N…RWZkR–N…4anY40JavDzG8Y6s“eYqajfxN“rJaZrŸDXr4s ŸsLrJaZrŸWASqSR4WYœw—rR nJJeE˜GW–jANtr4aiSbaxsLYXjbSx“™YsfE6W“JIJ0jX™S0—zSŸsLrJaZrŸWASNK˜j“Y1W1Rœ—A xb6j“fŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sd“œXrnj0™aJs0aAjw…4njzsnb0ab…Gjw˜v/njzj™ JWb ŸdY4ssYdeb06Xa–jœš4dsYZha4dASN ŸsLR4a—Sx“™ xJ˜JZ“rA“qSx“eYG01 z 6b00JAjsjŸ8œœjeY0fa„r4s ŸsLrJaš…Z xa/˜JDz –“Z—jYŸJœZJa4—–R– t…—eRx“iRXD4š40“f– ™…LahR– Zœv80œv“na1 DRJaIxkZrŸWASNfk“IxkZrŸWASK6jsk˜– ˜Zk Wf0…G—–R– t…D8Yj qfW“– v8qSx0CS0WC ŸsLrJasa4dASN ŸsLrJaZr0ZkYjaPRvZk—A—…ŸxESNqRJDzSG …6sYeJLNJfWhA  60 ŸJsf06x8i…–—tr46Xr4s ŸsLrJaZrŸWASqK…v—– 4arŸWiœLNI…0qh—As…rziœvsSRJWw˜v8tR ŸJs—zSŸsLrJaZrŸWASN…46zG1RsZjYjf8Rxsx6vajze v0vfŸk–6w 6Ÿ“4 xa™aW“œ…L1Rs ™S0NC˜x0xrwašj–NšSN ŸsLrJaZrŸZˆYqaJRvNL Xšj–NšSN ŸsLrJaZrŸZnYAsKNŸN“rJaZrŸWASN ŸsLrJaZr0De — 0œrJkq—4eYXqeb0swGsY6ŸECJsaPfŸkL LWjŸY8 xfEaWsYA 1…Zn Wf8aŸsLYXjbSxZ/ xaAfxdXR4aZrŸWASN ŸsLrJaZrŸZeJGsA…W“w6waqSvkCSqSNv—L…4ab…jsAYzNS˜JN–Iw“šr0De SYq0v6–NZr4—J0NKR4WwjAs 6G/Y4En 0“DjA—1—0 nSSaqd“rJE6…jZXJjSRŸkœrJrjLXS0zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASa™RsL…–“qSx“XY1NNR4Ww6wat—zsnJsNA…dErJs6rŸWn x/6xkœa4ab618YqaX 4NkIw qrŸZ0Y1ZSRxsDSG8qSW EYG0J…Ÿs–S1jZ—s ejqaJ˜G—W—1Wq—zsŸJjSfvDhNN1RJ8nJ1ZjRqkœrJrjLAJG0vf46hjwsa4dASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNS6vjDJarŸZkJjaP˜s“fŸkZrŸWASN ŸsLrJaZrŸWASN ŸsD6xkZrŸWASN ŸsLrJaZrŸWASN Ÿs–jAN16sjA waC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsDGd1RœqzSf0Rv—Erq s—ŸE™YŸSfvDhNvdb60 eJjJ6vDh6Jq—zsESaS6JZYrJa…Jx“EY1NZNqsLY4a6…ZeYsKf4DhG8šrŸqXSNZfŸsL1sSWWeS0—zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASeSŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASNKfW““rJdbSWDŸ xNIj6va…R zYzZjfxsDfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLI–Y0N1ZbNJD4—q0s JEnaja–…Gj…GapYJ eJdASN ŸsLrJaZrŸWASN ŸsLrJaqJxEzJsaJaŸkx—waN—xWXœ—fxdXR4aZrŸWASN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWASN ŸsLG“qJx“EJsf06W –R–—…ŸxESa™aJ—DJGtr4ŸYjaI˜JDzAtj0jC xb6j“œ…4aš…WPœ—aŸkfŸkZrŸWASN ŸsLr1sL…WASN ŸsLrJaq6GeYqajRŸ“D1—qrŸxEWre 0“k—AN16sjASGs  ŸkLG“qJx“EJsf06W –R–—…znYzNS…vNisjjzW™x— aŸ0xrwaš4™Xr4s ŸsLrJaZrŸWAYzZPRW“YrJdN…J™Xr4s ŸsLrJaZrŸWA xbNsDfŸkZrŸWASN ŸsLrJaZrŸWASqSR4WYœw—rRqD8YqaP—4Ww˜v8šr0ZXJjSRŸkfŸkZrŸWASN ŸsLr1sL…WASN ŸsLrJa 6qYeJœZA ŸkWj1— 6s X xa™aGZ“rJk…Jv„JsK6vWwIwjšJ–NšSN ŸsLrJaZrŸWASN Ÿ“–6w“…˜xESNSRvj–œG81SWZeY1DŸaWk v8q—œW™YzNI…W/hjJdšj–NšSN ŸsLrJaZrŸWASN 4WwJJašSxPeY4EKaGNE 4ktJxEiœxNRs“–IJ81˜Z0Y1N— 0“Y…–160WiS0rŸaŸkYfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsDGd1RœqzSf0Rv—Erq s—ŸE™YŸSfvDhNvdbb4spaKkwv80…wj4ajan…KkwIJ™njŸ“„ jaP…tkwNJ8sYdeb06Xa–jœš4dsYZhb0anf4j“6–sbz„œ06ERŸdw–Dn…—4 J01 Ÿd“RJashdhaJWjaJj“aw 0j4k/b06Ÿfs6E˜s“–œG1Rj—iRœYXR– …JvEkR0—Cf1a4RveRG0iJjeRj“xaA Z˜AiS—Cfvdv˜JDhIœu0fLZxNs“kœfX˜Ÿ0JSkLNqsL—LjeY0NAjANzaEY“E…zaL…WASN ŸsLrJaZrŸWASeSŸsLrJaZrŸWASNKIN“I– ZrŸWASN ŸsLrJkq—4eYXqeb4NkjA—t60“™G0™f0“œ 4k1—ŸYeYNnNŸN“rJaZrŸWASN Ÿ“–œA tRsZ™YGE— 0œrG0jX™JLZqRv—vIJ“t61eJsf06vNE 4k…RJ8zJsf0…vZwjwpa4dASN ŸsLrJaZSW 0Yqa™aJWE 4k…RJ8zJsf0…vZwjwpa4dASN ŸsLrJaZSx“™ xJ˜JZ“rJk 61s0 xaJaJ—xfŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sd XjsYEhaJWw…KkYXZp…dŸb0arR–j“aw 0j4k/b0fE…hkwSG“sjX„b0f0RvjSGapYJN“ Jsš XjsrXj—R4aZrŸWASNC 0WDrG1R ŸSNS6W“Y…LZSxPeY40™aj“E—v0™R4 kRqkˆR–Z… GEhS4Zna8ZSŸsLrJaZrŸW8SjKa0sYSGtŸWnYqa™fs“œrGst61szJsavaspYjshb0a—f–jR4ds w““aJWGfvj“aGd0bz„œ4ŸXRd“awpz—0Rj“/YqIRLfX˜Ÿ0NŸ™nNjss—zjeb4e4Shk“r4s ŸsLrJaš…ZY40J6v—YSAjZ—Ÿ EY40vNsp…Sd™œ0atRAjwœJsj0W8b4sš XjsrXjsjX 0 JsPR4jsYJpYj zœ4X…xWC ŸsLrJaZr4dASR4NkIœN1˜Zv aIRvNDAt61—ANs“œJ1 šbXY0RXWtNjssN1jt˜60YGqŸNen…LjC—X L…WASN Ÿk“RX L…WASNKa4—wSANjŸ0AJGEJajqzAt61—AJ1ZJ6W—kIJk…JxEL j SRvjDJdbSWZ™ —fŸsLANjX—™Wa……vZDœG8šJdASN 4jXR4aZrŸWASN Ÿs–Rv0Zr4kJjaP˜s“œRLaL…WASN ŸsLrJaZrŸWAS6Pa1j6…P0R40iNqk–œœj86G™4SŸaNN80…14rŸDXNXsNNjqnfœje…wY0œvq4N88—zjeYœ0œLYCN80…14rŸD0Rhk—Nœ œNqN“rJaZrŸWASN ŸsLrJaZSx“™ xJ˜JZ“rGZtRjYzS™fvZDjAaSxZGJjaS…jhjAN…jzW™YGE—RŸ“DG8sSWWzSqSR4WYœwYj–NšSN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWAY40J6v—YSAjZr0DeYa™˜q8NJ …6sYejvŸE…0“YœqNsjweYœZJrG—DAsšr4reJs/6x“Ea4abSWZ™ —fŸsLANjX—™S0—zSŸsLrJaZSLšr4s ŸsLrw š…JdšSN ŸsLrwWZœ4WAaJjœAZ0…kAaJjLaJjsYJpjŸa/ ja0aJjv/n…Sdzœ4spaKkwv80…wj4ajan…KkwIJ™njŸ“„ jaP…tkwNJ8sY“Aœ4W1…Jj“S4a0 N0JdASN ŸsLR4a—SxZ/Y40vaxsLG“t61eJsf06WZ–jA“ ˜Zˆ xbfvZkY4f0JJWvNJx4NœjCb0u4œKkXr4s ŸsLrJaš…ZYŸav˜jsw6vab—XeYœZj 0skIw t—0 /YGsxRJ0šš48nS4ZkfkDRA6ŸfG0iNsCf1 6aA Z˜A0NJ“CfAW…Xj6fv0 jXˆJGnIv“p ws4ajaD…–j As…w C 4dASN ŸsLR4a—Sx“™ xJ˜JZ“rG1Rq“/ jNxRXY0jv8kNœa™…qsYRvkšaGd“RŸ8i XZiR–DXRGdzYiRJdRJ8t—vE0NWWšSN ŸsLrwWZ—DeYbaGrzœJaSJv„JsK6vWwIwjZœ40jRJj“aADnYkkb0aDawjwIva0jz—0œ06CR4jrAZXR4aZrŸWASNCf8XR4aZrŸWAYŸJ…JZ–Rv“Z—0/8YG0I6vWwIwjZ—4—™ x0as“–jA“—RG8xY1D06W“wNœS—0 ˆJwsA…0qhIwjq—0 0 xjSRv6hœwNZr0ZzYjaŸRWwJGtSxE™S0WC ŸsLrJasa4dASN ŸsLrJaZSx“™ xJ˜JZ“rJkq—4eYXqeb0h v8q—œj4JqaJ˜sWiRx0jX—™jS6vN“ 4E 61s0 xaJaJ—L6Jk…JxE„SAsX Ÿ“–œA tRsZ™YGES—j“YœG“6rŸWnYqa™fs“œ…zaL…WASNKINAR4aZrŸWAœ–sCfN“rJaZrŸWAS4sxRJd6RG0„YœjEJsIaG—YSG“…ŸZeJqd“œXrnj0™aJs0aAjw…4njzsnb0ab…Gjw˜v/njzj™ JWb ŸdY4ss…kAaJjLajWC ŸsLrJaZr4dAK…vNk—A—Zr0ZEJsIaG—YSG“…j1seJqNK˜G—DSAtRJNAY40J˜GDzjAs 6sjŸYjaR–N…N40AS4 iRJdRva6aŸkZrŸWASNfsWrAs…JWD8Y4ŸŸ 0sYSAs JvkANqenjœj…aJ0JwsvNj“Lf1 Zf60Nx™0NJxnNœ 6—40NwWWNwwazXajL…WASN Ÿk“rqWq—4EY1Nq˜qsWj1— 6s X xa™aGZ“—–™SGECf1YCRJseaG8/NXZ™aqs6R–j6…Gk4Nqk 4xPSŸsLrJaZrŸW8S4qPSŸsLrJaZSxD8JJ0PfWsErG0qjzj„ xa™aGZ“rGE…JWZpY1ZSRv6eS1jjRj ˆY1NJ˜jqhjq“…r4anY40J˜GDzjAs 6s GYja—fxN“rJaZrŸDXr4s ŸsLrJaZrŸWAY40J6v—YSAjZr0DeYa™˜q8NJ …6sYejvŸE…0“YœqNsjYe xZRŸ/zSG8161q8Y40IRx8wRvkb˜waASqbRv6hIœW1RE™JLZ™…ŸkfŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sd XjsYEhaJW ftkww0j0hb06XfvjkrJssz—h4“™f1aiRvqXNXASJEk…œ iRJd Jwu0fLZ™Nqq46zj b0f4SzYnNJWœSLjt6sr0JJ0INJZ–LjtRjY0R40NwES1 Zf60Nx™0SŸdwawjsj0“8r4kšSN ŸsLrwWZ—ZXJjb…vZœrJk Rœs4YqaJ…vZ“rGst61szJsavasDAsqj0CR4W„RA6fG8„Ntde Ÿsi…Xjš64EkR0—™fAZiRv0…A 4SwkJjaP˜s“s…J8œ4jnawjœNv“sj0hb40…JjœN–Zs JW/œ0a0aJjwJAWR4aZrŸWASNC 0WDSG8qSW EYGsK…vNiSGsŸ—Ca1jRvŸ0N48„Sj™…Ÿk4R4sCœvEAfGE™f1aiRXNSvEkR0—kRvZxRAŸkZrŸWASNfsWr1Sx“4 LNN 0ZY…v“…JxDeYjfEaspRjjk Js4ftkS4ŸnjŸ0ajfP XjwN–jphdC JWKfAaC ŸsLrJaZr4d8œ–aC ŸsLrJa1SW “Yqa™…qs–J1WtRPeYjfEas– v8q—œj4JqaJ˜sWiRx——0 „YœZv…JZ–jJdb—Ÿ“4Y1ZPRWswN–L…WASNKNŸN“rJaZrŸWASN 4Nkj1qJx“0SNS6vW–R–“6jLjGJ1ZJ6W—kIJk…JxEL jjv6v—DSJdb6qECJsaIfsswSAN…4NzSNS…JDhIwN…jŸ 0–sq6vNijG8b˜GdiJG0vf46hjJEšj–NšSN ŸsD6xkL…WASNaqk“RŸkZrŸWASNfspYJa0 JWIfAjJwDnj0WeajfzfXjsN4/nRW“ j6ŸfsN„R–DXRG8“Nzae ŸsiRJq4RG0CJjseNwuhRL ZN160JSkwNq™4bzjŸ0Y1ZNjskœ1jt—0u0YG0JNJdkrœje˜/4SwWLNœ—šNkpjXj0 ja…fNnSŸsLrJaZrŸW8SjKa0sYSGtŸWnJJŸEaGZ–jGt…Z“Y1DEf0“w—AjZSWZE WaYR4d…GEeœ–Z™aLa6RAŸšXASJEna™zRG0Cjv8hfGE™RJW„aA Z˜v0 jXˆJGj“…–Wp Jk0aJWER4jY4ssRW“ j6ŸfGjsYJpjXj0 ja…fWC ŸsLrJaZr4dAbRv—DjAst…Z/Y4Eb…vjœ—vd4Nj—™RœXRv“ZJv8nSX C…Jd6RGahRG8hN4ECf4WDRG0Cjv0™Yq—iaœ——SŸsLrJaZrŸW8SjK6vWDSA q6Ÿ0As/…s“Yr1jzs0SdkjJ0s…w hb4WšRSkwS–j0jzAajfŸadœš4dsYZha4dASN ŸsLRXW6a4dASN 4NDjGst—48„Sa…6JZkœ1jzs0SaqRv—WNw …—0 ˆJE™—vW–jG“6s nSŸNS…JDhIwN…jŸ 0S0WC ŸsLrJasa4dASN ŸsLrJaZSx“™ xJ˜JZ“rJkq—4eYXqeb0h v8q—œj4JqaJ˜sWiRxZqSWZESŸNq…GW–jG“6s nSAsX Ÿ“–SA t6A™JjfŸšŸ/zAsqj0jiœ4sqRjsw˜–“…4NeœXaC ŸsLrJaGJdšSN ŸsLI–Wš 4dASN ŸsLR4f0f60NJ’haœje…wY0JqNkNjqna1j6aJe0Nx™0NjssNzje6Ge4SœYzNjqnjz šNt™0YjNDNJDhjLj RP0YqarNJZkj1jCRx0f–sbNqs8rzŸSzjšœ0a0aJjwJAWL…ŸkZrŸWASNfsWrAa Jx“/YsN…0skIw t—0 /YGsK…JDhIwN…jŸ 0SS˜J—wJvdCYJ“ifx8hRv/4š4EAfGE™…La4RG0Cjv8hfGE™RJW„aA Z˜v0 jXˆJGj“…–Wp Jk0aj6Ÿ…Gjw–Dn N0 jaDaSksYJpjXj0 ja…fWC ŸsLrJaZr4dAbRv—DjAst…Z/Y4Eb…vjœ—vd4Nj—™RœXRv“ZJv8nSX C…Jd6RGahRG8hN4ECf4WDRG0Cjv0™Yq—iaœ——SŸsLrJaZrŸW8SjK6vWDSA q6Ÿ0As/…s“Yr1jzs0SdkjJ0s…w hb4WšRSkwS–j0jzAajfŸadœš4dsYZha4dASN ŸsLRXW6a4dASN 4NDjGst—48„Sa…6JZkœ1jzs0SaqRv—WNw …—0 ˆJE™—vZ–Rv“6q “YqajRŸ“–SA t6A™JjfŸfxN“rJaZrŸDXr4s ŸsLrJaZrŸWAY40J6v—YSAjZr0DeYa™˜q8NJ …6sYejvŸE…0“YœqNsjYe xZRŸ/hœANjŸEhJjabf0“œYXNZr0Z“Y1DEf0“w—Ajr˜JreY4EJRx“ˆR4E…R zYzZjRqkfŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sd XjsYEhaJW ftkww0jzNzaJX…tkwwDn jj8œ4Wqfvj“œXrnj0™aJs0aAjw…4njzsnb0ab…Gjw˜v/njzj™ JWb ŸdY4ss…kAaJjLajN„R–ZhRG8kYJaer4s ŸsLrJaš…ZYŸav˜jsw6vab—Ÿ“4Y1ZPRWswNva Rœs4YqaJ…vZ“r11Rs ™Nqk–Rz4zY0YGjENœa0Lj…rXY0NjNCNœj8—œjN10JG0CNzaEœj“k—AN16sCR4W„RA6fG0zfkRqsiRvkšš4E™S4“iRJdR–ZhRG8kYJašSN ŸsLrwWZ—ZEJsS6JNkNva Jx“EJjn z 6b00JAjsNjsE—1j…rXD4SwWLNœ—šNœjbz4œxa/Nœj8—œjejXf0NXjWr4s ŸsLrJaš…Z xa/˜JDz –“Z—jYŸJœZJa4—–R– t…—eRx“iRXD4š40“f– ™…LahR– Zœv80œv“na1 DRJaIxkZrŸWASNfk“IxkZrŸWASK6jsk˜– ˜Zk Wf0…G—–R– t…ZiJsSœ4DhG816x/0sf0…Wsk˜v8…r4anJJŸEaGZ–jGt…JkšSN ŸsDfŸkZrŸWASN ŸsLrAs…JWD8Y4ŸŸ Ÿ“DGdJx0ŸveERs“Yqdt6sZ™YzbNjWY11…JaiJsf0…Wsk˜v8…r4NzSNS…JDhIwN…jŸ 0–sq6vNijG8b˜GdiJG0vf46hjJEšj–NšSN ŸsD6xkL…WASNaqk“RŸkZrŸWASNfspYJa0 JWIfAjJwDnj0WeajarftkœNXs…ZkaJjWf–j –s…dŸb0arR–j“aw 0j4k/b0fE…hkwSG“sjX„b0f0RvjSGapYJN“ Jsš XjsrXjœ…G8hfGE™RJWAfxN“rJaZrŸWAS4sKrJN–—As jzASqabaGDh˜v8 jz—AJJŸEaGZ–jGt…DeY4EJRL š—4’0Ns64Njqna1 Z—4x0NWNkNœj8—œjN10JG0CNzaEœj“k—AN16sCR4W„RA6fGk0SœN™…1YCR4a…fGE/S4ZiRJdR–ZhRG8kYJašSN ŸsLrwWZ—ZEJsS6JNkNva Jx“EJjn z 6b00JAjsNjsE—1j…rXD4SwWLNœ—šNœjbz4œxa/Nœj8—œjejXf0NXjWr4s ŸsLrJaš…Z xa/˜JDz –“Z—jYŸJœZJa4—–R– t…—eRx“iRXD4š40“f– ™…LahR– Zœv80œv“na1 DRJaIxkZrŸWASNfk“IxkZrŸWASK6jsk˜– ˜Zk Wf0…G—–R– t…ZiJsSœ4DhG816x/0GŸE…G—YœG Rw™SŸNS…JDhIwN…jŸ 0S0WC ŸsLrJasa4dASN ŸsLrJaZSx“™ xJ˜JZ“rJkq—4eYXqeb0h v8q—œj4JqaJ˜sWiRxZqSWZESŸNqRJDhœ1W16q “YqajRq8LrJk Rœs4YqaJ…vZ„IvEqSx/8JsN1Nq/hJGtSxE™SAsnNŸN“rJaZrŸDEr4aC ŸsLrJa6˜Jd8r4s ŸsLrJaš…—kRŸ8iRJ“N40kShd™…ŸktR–rXœvE0NKdC 0“hRGšYG0iYjC…AZGRv/0YGdhf1a™fxsGR– …v8“JœN™f0qCR–j…Jv0“J—kRqsiR4sCœvEAfGkCNJx4Nœj…RJdšJdASN ŸsLR4a—SxZ/Y40vaxsLGst61szJsavas–SA t6A™JjfŸ 4—DS1W… Js/fds…Xj0jzNzaJX…tk“rG00 jeaJj…xdwawjsj0“8œh™P…qa……vZDœGe4SŸaCNœ œN1jhS40f–sbNqs–YœŸ4Ÿ0NwWWNJx4Nœj…RJdL…WASN Ÿk“rqW1RjYe Wbas–—As1RY0Sd“š48pj4ZiajaN…vjwwxn…kAaJjLaJjwaAjs…wC Jj…xdjANp œa/rJdASN ŸsLR4a—SWZCY4ŸE64NErq s—ŸE™YŸSfvDhNvf4JsN…Nq™na1jCfJD0JJ4NJZErzjt…œr0œKk/NJd–aqN“rJaZrŸWAS4sCaqN“rJaZrŸZX Wabf4WwœJa…Rs 0JœNSfvDhNva…6sYejvŸE…0“YœqNsjj“4JœNJ˜s“wJdb—Ÿ“4Y1ZPRWswN–L…WASNKNŸN“rJaZrŸWASN 4Nkj1qJx“0SNS6vW–R–“6jLjGJ1ZJ6W—kIJk…JxEL jjv6v—DSJdb6s“4JœNJ˜s“wJE6rŸWnJJŸEaGZ–jGt…1i xb6j“œYz b6s“/YqIRx“E…zaL…WASNKINAR4aZrŸWAœ–sCfN“rJaZrŸWAS4sxRJd6RG0„YœakR™CRvkšYG8„Ntdnaœ YRw0fG8“fJ“kRGWYR4“h G8„NJZCfADXR–Z G84Js™…jqzR–N š480Jsk…jsxRJEZRGd“RŸ8i XZnRzjN10JG0CS0WC ŸsLrJaZr4dAK…vNk—A—Zr0Z“Y1DEf0“w—AjZ—Ÿ“4Y1ZPRWswNvaqSx/8JGj“…–Wp Jk0ajarftkN400jŸk8œ4j…xdwawjsj0“8œh™P…qa……vZDœGe4SŸaCNœ œN1j6…P0JSk4NwZ0Yœj fJ’0NwWWNJx4Nœj…RJdL…WASN Ÿk“rqW1RjYe Wbas–—As1RY0Sd“š48pj4ZiajaN…vjwwxn…kAaJjLaJjwaAjs…wC Jj…xdjANp œa/rJdASN ŸsLR4a—SWZCY4ŸE64NErq s—ŸE™YŸSfvDhNvf4JsN…Nq™na1jCfJD0JJ4NJZErzjt…œr0œKk/NJd–aqN“rJaZrŸWAS4sCaqN“rJaZrŸZX Wabf4WwœJa…Rs 0JœNSfvDhNva…6sYejvŸE…0“YœqNsjqE„Y4ŸEf4Z–—Gst—0jCSqabaGDh˜v8 jz—er4s ŸsLr1aL…WASN ŸsLrJa1RjYe WbasL1—48ˆœWr0 s/hj1RœsnJsIr4jj—1qSxsCS1NI…GNkIwNt—Ÿ “YqajRq8LrJk Rœs4YqaJ…vZ„IvEqSx/8JsN1Nq/hJGtSxE™SAsnNŸN“rJaZrŸDEr4aC ŸsLrJa6˜Jd8r4s ŸsLrJaš…—kRŸ8iRJ“N40kShd™…ŸktRJEZRA™Ytdk…qsi…XjCaGk0N4ZkRGWYR4“h G8„NJZCfADXR–Z G84Js™…jqzR–N š480Jsk…jsxRJEZRGd“RŸ8i XZnRzjN10JG0CS0WC ŸsLrJaZr4dAK…vNk—A—Zr0Z“Y1DEf0“w—AjZ—Ÿ“4Y1ZPRWswNvaqSx/8JGj“…–Wp Jk0aJW1…JjkjAYnY0“ j64…SkœNX—0 JW/œ0a0aJjwJAWpbz„—0“/YqIRL š—4’0Ns64NwZš…Lje˜/4JsfCNJdES1j6fe0œ–hNœj8—œjN10JG0Cr4s ŸsLrJaš…ZY40J6v—YSAjZ—Ÿ EY40vNsp…Sd™œ0atRAjwœJsj0W8b4sš XjsrXjsjX 0 JsPR4jsYJpYj zœ4X…xWC ŸsLrJaZr4dASR4NkIœN1˜Zv aIRvNDAt61—ANs“œJ1 šbXY0RXWtNjssN1jt˜60YGqŸNen…LjC—X L…WASN Ÿk“RX L…WASNKa4—wSANjŸ0AJGEJajqzAt61—AJ1ZJ6W—kIJk…JxEL jjPaGZk x—t—48„YœZv…JZ–jJdb—Ÿ“4Y1ZPRWswN–L…WASNKNŸN“rJaZrŸWASN 4Nkj1qJx“0SNS6vW–R–“6jLjGJ1ZJ6W—kIJk…JxEL jjv6v—DSJdb6A4YG01aWqh˜– 6A—/JJ0PRx“Ea4ab—Ÿ“4Y1ZPRWswNKdb60ZE WajRqd“ v0 jXˆJsN1fxdXR4aZrŸWA sWCSŸsLrJaZrz8S4aC ŸsLrJaZr4dANwWLNœjC6A0fvs4Nj“LRœj6…œY0YSk–Nœ Lr1j ˜œY0fLZ™Nqq46zj b0f4SzYnNJWœSLjt6sr0JJ0INJZ–LjtRjY0R40NwES1 Zf60Nx™0SŸdwawjsj0“8r4kšSN ŸsLrwWZ—ZXJjb…vZœrJk Rœs4YqaJ…vZ“rGst61szJsavasDAsqj0CR4W„RA6fG0kShd™f1—tRGdZSv8„œ–ZiRJdR–ZhRG8kYJ“4aqsPRjsw˜–“… Js/fds…Xj0z—„ JW ftkwaG0 JaA jaNawjsYJpjXj0 ja…fWC ŸsLrJaZr4dAbRv—DjAst…Z/Y4Eb…vjœ—vd4Nj—™RœXRv“ZJv8nSX C…Jd6RGahRG8hN4ECf4WDRG0Cjv0™Yq—iaœ——SŸsLrJaZrŸW8SjK6vWDSA q6Ÿ0As/…s“Yr1jzs0SdkjJ0s…w hb4WšRSkwS–j0jzAajfŸadœš4dsYZha4dASN ŸsLRXW6a4dASN 4NDjGst—48„Sa…6JZkœ1jzs0SaqRv—WNw …—0 ˆJE™jsYœA“q61sEJqNA…0skIw t—0 /YGsnSŸsLrJaZS–NšSN ŸsLrJaZrŸZEJsS6JNkNvabSWZCYjNaW™IJE…JWZpY1ZSRv6eS1j—JWDeY4sARGN–—A“164—4Y40—Rq8LrJk Rœs4YqaJ…vZ„IvEqSx/8JsN1Nq/hJGtSxE™SAsnNŸN“rJaZrŸDEr4aC ŸsLrJa6˜Jd8r4s ŸsLrJaš…—kRŸ8iRJ“N40kShd™…ŸktR–rXœvE0NKde Ÿsi…Xjš640iYjC…AZGRv/0YGdhf1a™fxsGR– …v8“JœN™f0qCR–j…Jv0“J—kRqsiR4sCœvEAfGkCNJx4Nœj…RJdšJdASN ŸsLR4a—SxZ/Y40vaxsLGst61szJsavas–SA t6A™JjfŸ 4—DS1W… Js/fds…Xj0j0hb4sKRwjs—w0 JW/œ0a0aJjwJAWpbz„—0“/YqIRL š—4’0Ns64N8“œ1j bXY4SaNœ—œRœ0f0YœY0Nj“kRŸN“rJaZrŸWAS4sKrJNkj1qJx“0Sav˜JNk—1jZœ4qCRxdwYGE0jŸ0/ ja—fSk“S4a0 N0 ja4aJj“˜vds JW/œ4WJfŸdsN4R4aZrŸWASNC 0WDGd1RœqzYXsK—Gj–œG81SWZeY1DŸ z …0/4Shk4NJd8Y1j  œY0YAsLNJZ“NLj6b40RŸa4r4s ŸsLrJaš…Jd4r4s ŸsLrAaqjŸ“zYjaN 0“ijAj 60ZeY1DŸ 0/hj1RœsnJsIr4jJœG8t—0 „ xaJ…ŸkLGst61szJsavak—R4aZrŸWA waC ŸsLrJaZrŸWASbRv—DjAst…Wn xa/fvNE6KkY6G—™ x0as“–jA“—RG8K xS˜kL –“…jX™JœNSRW“LYXNZr0Z“Y1DEf0“w—Ajr˜JreY4EJRx“ˆR4E…R zYzZjRqkfŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sd“œXrnj0™aja1fdœJnjXjkajaq…Ÿd 4n N0 Jj…xdSGapYJN“ Jsš XjsrXjœ…G8hfGE™RJWAfxN“rJaZrŸWAS4sKrJN–—As jzASqA 4WwNœ…j4—™Y4sKJœj…6sx0fNDr4s ŸsLrJaš…ZYŸav˜jsw6vabSvkAYjf06W“w v81…Z…Nj/hœj8rŸL…WASN Ÿk“rqW1—Ÿ EJjfe Ÿ“–—1qSxsAJjb˜jsY…4f0RXsDNJx4Yœj ˜œ4JjaINJZ– œjCr4P0JSkšNjsLILfX˜Ÿ0œvsNœa06LjejXf0NXjWNzaEœœjt—40RŸNiNœj8—œj rz0œvq4NJZ“—Ljtr00J1 6Nws6s“k—AN16sna8hRwN8Sv0iSJE™ Ÿ8P6vNijGe0œvq4NJDn—1 —zf0f–sbNjsLILfX˜Ÿ0J6PN8“N1j6s0NAskN8“˜œje œD0JSk4Nehšz04’4JNNsswœ14˜J0šaj6XRhkYAYnza0b4WW…tkwaven wNeaj6Ÿf4aC ŸsLrJaZr4dAK…vNk—A—Zr0DŸYsaX 46zAsjzjiSdw…4“s jj8œ0aP…tkwNJ8s JW/—GIjxWC ŸsLrJaZr4dAbRv—DjAst…Z/Y4Eb…vjœ—vd4Nj—™RœXRv“ZJv8nSX ™Rqk„RXD4Jv8iJq—kRŸsGRGahRGEkR0—k…jsxRJEZRGd“RŸ8i XZiR–DXRGdzYiRJdRJ8t—vE0NWWšSN ŸsLrwWZ—DeYbaGrzœJaSJv„JsK6vWwIwjZœ40jRJj“aADnYkkb0aDawjwIva0jz—0œ06CR4jrAZXR4aZrŸWASNCf8XR4aZrŸWAYŸJ…JZ–Rv“Z—0/8YG0I6vWwIwjZ—4—™ x0as“–jA“—RG8—Y1NIfv—–R– t…Jan NX Ÿ“D…XNZ—Ÿ EY40vNsLGqSWZEW Ÿ x8LrJks—zWzWf06JZ–aXL…WASNKNŸN“rJaZrŸWASN 4WwJJašrŸjn f8fŸkœr1aL…WASN ŸsLrJaZrŸWASa™RsL 4bSvŸYqNIsL1—48ˆœWr06JWJ –…—4—™ xNRŸkœ…4asa4dASN ŸsLrJaZrŸWASN ŸsLrJa1RjYe Wbasvav—pa4dASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN 4 —R4aZrŸWASN Ÿs–Rv0šSxZEJsaq GZw—1 6GGJjaPfŸkLYX r—A—sveefsuhSA qjzjnYX/e…jvf4dY—0WhS0NXR0–wZšjAqJx zR0–wZšXaCJxa—fqkJ˜v—ZR–—sveefjˆN– 4NzSNSNvZwaXNZr0ZŸJjS…GW–jA“6rŸZ—jJkJSW8œq J—1srjJkS—sj“…Xsa4dASN ŸsLrJaZrŸWASN…0“w˜v8tj0 0 xN 0œrGZYj–NšSN ŸsLrJaZrŸWASN 0“kIws…jŸ „YNRŸ“–6Jq—ŸECJsN 0sYœJab—4eeJsfefvjXR4aZrŸWASN ŸsLrJaZrŸWASN 4WwJJašr0DŸv/e…4WYG8tjANPJWNR““rJks—–fESqa™6W“w6JZN6œASGs  Ÿ“D…hkr0Ze xaJaWaˆSG—Zr0skSNSNjx6vkJWZ™Ys z6WœRLaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWAJGŸE˜j“w—G“rŸWCSqav6v—DSJa Jx0ASqav6v—DSG tR ŸJsNIj“rJkqR z WajfvjXR4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNKfW““rJdJxEGJJŸEaGZL 4kqR z WajfxkYfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrz4JG0vf46hJvk0œ–ZkfXWDRJEZRG8Aœ–“4aqsP6vNijGe0œvq4NJDn—1 —zf0f–sbNjsLIxN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrA……WCSq……vZDjG8šJ–NšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrA……WCSjK˜j“w v tjŸYeJœZARŸ“EIvE6…jZ/ xS˜jhNJtj0j0SA/e…jf8NvsYX6CSJqEfx“Ea4ab—4eeJsf8Yq0v6–NZr0DeJsf8aŸkœRLaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZ—ŸE4YGESfvZijG8Z—xqXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWA sWC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN 0“w˜–“…J–NšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrA……WCSjK˜j“w v tjŸYeJœZARŸ“EIvE6…jZ/ xS˜jhNJtj0j0SA/e…s“Iwb˜waASqa™6W“w6JZN—1zSNS6W“w6waš4eXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASaIaGZiAtRs ™S—ZNŸN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWA sWC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN 4 —R4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASaJf46hj1aL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸZeJGsR4WYœG 160ZEYjf0RqkL1Z jX8JsNnfvjXR4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASa™RkL—A“q—ŸYeYjaNNqd™Iw16œsŸJjS…GWvIJqSWZESŸNSfv—–jA—w˜qZqœxNKYq“–—1qSx“GYG0vaW“6KkbSW“/YqJRWœ…Xsa4dASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸZ„Y1D06vWwNœW…ŸWEœXaC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZSLšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASeSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿs–jAN16sYXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJa 61s0 xa™aJ—wjJaN…ANšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASeSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWA sWC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsD6xkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWnJsaPRvZwjAjqSxEtJWNIs–NJ8q˜D0YjaP6JN–…–aY6q nJJeERvZ–jA—…jzeSŸNSfv—–jA—w˜qZqœxN…4—–…–1˜J™Xr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWASN ŸsD6xkZrŸWASN ŸsLrJaZrŸWAY40J6v—YSAjZr0Z™YqaJaW“wNœ1˜ANšSN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWAJsaP˜s“YfŸkZrŸWASN ŸsLrJaZrŸWAY40J6v—YSAjZ—A—qœXaC ŸsLrJaZrŸWASeSŸsLrJaZSLšr4s ŸsLrw š…JdšSN ŸsLrwWZœ4WAaJjœAZ0…kAaJjLaJjsYJpjXiaJWfKk“œXrnj0™aJs0aAjw…4njzsnb0ab…Gjw˜v/njzj™ JWb ŸdY4ss…kAaJjLajN„R–ZhRG8kYJaer4s ŸsLrJaš…ZYŸav˜jsw6vab—ŸYe xbfWsij1…Jx0AJjb˜jsY…4f4SwWLNœ—šNœ0f0YqasNJdLR1fX˜0 JWDeYXjœN–j0jXiaJWfKkwJ“s JEzœh™P…q……vZDjGe0œvq4NJZ– œjCr4P0NwWWNjsLILfX˜0t—48hJGjœN–j0Yjshb0a—f–jR4ds w““aJWGfvj“aGd0bz„œ4ŸXRd“awpz—0Rj“/YqIRLXSh™0JJj–NwunRL šb4qŸNxNLr4s ŸsLrJaš…Z/ xS˜œj bXY4JNbNjsLILje˜/XNXsYjf0…0“Y…G“ASYeJs/6LrŸrŸZ1Rj ˆY1NJ˜jqhjw—j0—„ Ÿsv…GZ–—A“1bŸd 0K…Wqhav…6s„ Ÿsv…GDhNœ…jzeœWaSRv6hv“AS „YaJ…Gxh—Gst—0„ Ÿsv…GW–jG“6s nNL—Lrsqh˜– 6A—/JJ0PRLrŸrŸZ…jzj/JJ0PRW“pœŸWAj0“4JœNJ˜sswSAN… d 0a…asqzjA“…j0—„ Ÿsv˜sqzSA t—X/JJ0PRLrŸrŸZt—zs0JAq8…GZ–Rv“6q “YqaY…GaZ—Aa JxEˆ LDE˜j“pœŸWAJxE™YqaJ…G—–jGkL…WASN Ÿk“rqW1RjYe Wbas–—As1RY0SNS…v—DAsjŸ/8 xaY…Xj6fG8„JsnakhR4sCœvEAfGEkRLatRXY0jv8kNœa™…qsYRvkšaGd“RŸ8i XZiR–DXRGdzY4aqs„Rv/4š4dANzN™fx“h…XjšfA 4SJEiRJd…XjZ—vE0N0—kRvZxRAŸj– 4SwanJjS6vNkRvsqJWZ™N8“N1j4x0œvs8Nqs8rzŸSz0YqasNJdLR1je œD4œKkjNj“0 œj6fŸ0NXeNwwazjC6AXNXsNNJ’4zj …j4Yf4NJZ8LfX˜q0fWaXNœa0—œ0f4JsN0Nj“Lœ1fX˜/0œvspSqav6v—DSA RsYeJGjœIvdpjŸ e Jj…xdœNvapYJaŸbh™P…qdw…XNs…œe JqCRxdwYGE0 w0aJWJfŸdsN4R4aZrŸWASNC 0WDGd1RœqzYXsK—Gj–œG81SWZeY1DŸ z …0/4Shk4NJd8Y1j  œY0YAsLNJZ“NLj6b40RŸa4r4s ŸsLrJaš…Jd4r4s ŸsLrAaqjŸ“zYjaN 0“ijAj 60ZeY1DŸ 0/hj1RœsnJsIr4jj—1qSx“eJJEJ6W“YœJd Jx“EJjn Ÿ“–—1qSx“eJJEJ6W“YœwL…WASNKNŸN“rJaZrŸWASN 4WwJJašrŸ eYzxE…vNiSGs4anJjS6vNkRvsqJWZ™YXsnfvjXR4aZrŸWASN ŸsLrJaZrŸDeYbaG—ErAj…JvNAs/…s“Yr1jzs0SŸN1…0sY11RJ8“ WSRvNE—v8„Nx8kRvZxfv8bRGdhNtd4aqsˆR–YŸJ–CYA na8hRJ8t—vE0NWWiS0—zSŸsLrJaZrŸWASNKIN“rJaZrŸWASN Ÿ“–JA1RqPeSre 0qzjAs1Rj 0 xNA…0sY11RJ8“ WSRvNE…zaL…WASN ŸsLrJa6˜SdkR™CRvkšYGk0S—iaœaRJ8t—vE0NWWšSN ŸsLrJaZrŸWnYjIjvWwNJEt—0jAWNKRjsw˜–“…j–NšSN ŸsLrJaZrŸZeJGsRŸswR–“Y6q EY40vNkLG0Jx“ˆ xNnfvjXR4aZrŸWASN ŸsLrJaZrŸWnJjS6vNkRvsqJWZ™YXsIsvf4k JWDeY40™…J—YG816œuXr4s ŸsLrJaZrŸWASN ŸsLA16EeYG0qf0“œrœsZSWZE WajNŸN“rJaZrŸWASN 4 —R4aZrŸWASN ŸsLA 1SWZeY1D0˜qsx6vaw˜J—zYjaŸRx“Ea4EjzjnJsARq8L L…JveSAsXRGNkjA“t60 EJœZjavWwJE6r4—„Yqav˜GNEYXNb6ŸZ/JœZŸ…W/hjJE6r4—„Y1D06W“wNœ6j0Z™YzZNRq8L v“—0 „YœZv…JZ–jJE6r4—„YaJ…GxhjGkb˜waiJœZPfWqhav Rw™SAsXSŸsLrJaZrŸWASN ŸsLrJab6s 0Jjabf0“wJE6r4—kY1ZI6J6h—Gst—0jiœxNqRJDhœ1W16s nSAsXRG6hœAst6AzJjabf0“œYXNb6A4YG01aWqh˜– 6A—/JJ0PRx“Ea4E1—Ÿ ˆYzNqaGNkJE6r4—ˆJsaPRWqzG8…r4—qœXaC ŸsLrJaZrŸWAS6Pa1j8œŸx0fKk™NJZ– œjCr4P0fvs4Nj“LRœjNqŸ0fWfer4s ŸsLrJaZrŸWAJGŸE˜j“w—G“rŸWCSqav6v—DSA RsYeJsN 0sYœJab—X—™ jrebŸ“–RL…jze waC ŸsLrJaZrŸWASN ŸsLrG0t6Ÿ“™JjaIRŸsL 4kJWZ™YsNK…vNErJk JWDeY4/ebŸ“DJGtSW ™S0zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASa™RsL 4jzjGJjb˜jsY…4db—ŸYe xZfŸsLA 1SWZeY1D0˜qkœRLaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWA xa/˜JDzY4atRjYzSjJNWqhjAaq—484YGsAR1j bŸ60fWaXNs“œJ1 šbXYXNXsNNws zj86G™0YqasNJdLR1fX˜JWb˜œ—nJjS6vN“…zaL…WASN ŸsLrJaZrŸWASN ŸsLr1sL…WASN ŸsLrJaZrŸWASeSŸsLrJaZrŸWASN ŸsLrJaj0sASŸaJavND1jšr0Ze xaJaWaE –NjX—™S1xefxkYfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLGqSWZEYjab6J—–jA“w˜jZhJs™ WaE –NjX—™S1xe 0œrG0 jXˆJs—zSŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASNKRvZDœG8sa4dASN ŸsLrJaZrŸWASN ŸsLrJab—ŸYe xbfWsij1…JxEtSqaŸRvjJ6JZb6AeYœZjRsœrœsZSWZE WajNŸN“rJaZrŸWASN ŸsLrJaZSLšSN ŸsLrJaZrŸDEr4aC ŸsLrJaZrŸWASNSNvZwa4arŸWn xa/fvNE6Kkqj48YYjaSRs“YA“šr4™Xr4s ŸsLrJaZrŸWASqbRv—DjAst…xES Ÿ xdXR4aZrŸWASN ŸsLI–Y0Y1 8Nœr4a1j8b0u0œvsN8“fœ Zf60Nx™0r4s ŸsLrJaZrŸWAJGŸE˜j“w—G“rŸWCSqav6v—DSA RsYeJsN 0sYœJab—X—™ jrebŸ“–RL…jze waC ŸsLrJaZrŸWASN ŸsLrJkt6q“8JsaI6WWYSAsZ—LAjzxeNŸN“rJaZrŸWASN ŸsLrJaZrz4NJD4fœŸNAY4SwWLNœ—šNœ0f0fSkrN8“rœj6…wx0YqasNJdLRqN“rJaZrŸWASN ŸsLrJaZ—0“4Y40J…Wqh 4ašr0Ze xaJaxs–—A“Zr0Z/ xS˜jNvkqR z WajfvjXR4aZrŸWASN ŸsLrJaZrŸWASN 4WwJJaš—480JLZv˜JNk—1jšr0Z/ xS˜8LrGZb6AeYœZjRsœ…Xsa4dASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASaIaGZiAtRs ™œXaC ŸsLrJaZrŸWASN ŸsLrJaZrŸWA sWC ŸsLrJaZrŸWASN ŸsLrJaZrŸWAYja  ŸkLA  Rw™JœNSrGNiSwsa4dASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNS6vZYrqZ1RqsAWNKYsfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸZkY1NbRWswœGdZr4anY1Zbfj“wœ1—Jx“ESav˜qsLA  RJde waC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWnYGŸE…0“œrœsZr0Z4JJ0CaWkNw …—0  YsaXRŸkfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿ“DA—1rŸxESNSfv—–jA—pa4dASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLr1WtRqE™ xNA…4—–6waw˜J—zYjaŸRx/86–pa4dASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrA……WCYzNS…v—–Rv“p…AGYjI GZw—1 6GGJjS6vN“ 4ktRœsnJsNX Ÿ“DA—1r4ke waC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿ“DA—1— EY48Ÿ xsx6vab—zs“YJ“zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWA sWC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsD6xkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸZeJGsRŸsœ1tJxZKY4EZfvjXR4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNK…JNkjG˜WEœXaC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsD6xkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWnY1Zbfj“wœ1—Jx“ESre Ÿ“DA—1— EY4“zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASeSŸsLrJaZrŸWASN ŸsLrJaZrŸWASaJf46hj1aL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWAYja  ŸkL1tJxWAWN…4—–…–1˜œunJLZqRv—WNw …—0 ˆJE™œJWwav8—JWDeY4sA…0sY11…waASq……vZDjG86rŸWnYjSRvZJf4Et—48hJsNq x8LrJks—zWzS0Nn 4jXR4aZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN…4DhSAW…jŸPejb˜sx6vabSWZŸYŸ—zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLr1sL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWAJsaP˜s“YfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN 0siSG8 jXNAœJ“zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLr1sL…WASN ŸsLrJaZrŸWASN ŸsLr1sL…WASN ŸsLrJaZrŸWASeSŸsLrJaZrŸWASN ŸsLrJabSx“™ xJ˜JZ™f4k6sY0JWNIsLA  Rw™JœNSrGNiSœaL…WASN ŸsLrJaGJdASN ŸsLrJaZ—48kSNA…4WYœs—jzjiYqajfvjXR4aZrŸWASN ŸsLrJaZrŸZEJsS6JNkNva Jx“EJj™ GN–Iwašr0ZEJsS6JNkN–pa4dASN ŸsLrJaZSLšSN ŸsLrJaZrŸZEJsS6JNkNvabSx“™ xJ˜JZ„fŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sdjv“szsiœ4WN…JjkjwZAR4aZrŸWASNC 0WDrG1R ŸSN…4xhj1j 61snJsNKfvZiG8…6s ESdœJssRjjhaJPR–js 4asbz„œ40xfdwSJ0Y0“ J0jfAjsIv80 JaA jak XjœNvsXR4aZrŸWASNC zjeaœu0YjNYœZJNjqhIJk… Jsi 4nIv0k…LqSxZˆœ4qPas“–j1Z…jX4YŸaJ˜8k—Aj…Sx“4Yja—ajqhIw—66Ÿ“™JG0J˜j“wNJ“…zs/YG0S˜JDhRvk660“eJs1as6hj1jSJW“™YGE—aJWDA—trJdASN ŸsLR4f0R4swNzaEYJWD11SxŸ4œ–qE…JZ–IJE6REˆJqfŸaJZkj166A4 v0J GjDœA66q E xa™…GZ–jw …—0YeJja™f4NEILNN…sxhœŸ—1˜qd—R4aZrŸWASNC 4xhj1j 61snJsWiRvkšaGk0JJkšSN Ÿsxœ“œ—œsIsNxfv8šNxkZrŸWAS——S1 6b00JAjsNs“œaN“rJaZrŸx8r4jSG™njzAœ4W6fdw–rnjz ™œ4jjfWC ŸsLrJaI 4Ek…qs6RJ8864E™œWCf1eSŸsLrJaZ—xqer4jw…JE0jŸkCœ40GfhkkSv“XR4aZrŸWAœJ“jS1 …RP0œLZpNs/n˜1   jL…WASN˜EARGE™œWkawxfv8šNxkZrŸWAS—Z6ŸNsY8„ JjvfK™nIvspRJNAœ4sk 4jwYXWp JZ0œ4W1awjwNG8p jj8œ40D…q’nIvs—R4aZrŸWAœG“ZS1 6Nsr0Jja™Nœ kN1j8rzL…WASN6qERG0“Js™aqsxRw— š4deNv“™RJWASŸsLrJaZ—Wqhr4jwYGE0…œseaJWIRXj“…v“R4aZrŸWAœG“1S1j …Jf4JG0nr4s ŸsLrœ—N 4EC…1jˆRv“…J–™Sz—šSN Ÿsx zWL JWœfGjjw “š40kRŸ8™ 0“XSŸsLrJaZ—vfhr4jwrGEpYw—CaJWœfGjjw AR4aZrŸWAœŸ—1S1jeSXr0fW6nN8“œLj6…x4YJWwr4s ŸsLrœ—prJEk…XxzRJ86N4k0SwZnasxf–eJkZrŸWAS—W˜0ARGEeNX ™…wW„Rv RG0CSJ ™…8xR4d ˜AefvZk…“tRvsb GdCYJ“eR4Ztfvf4 ŸkZrŸWAS—W˜0XRGEeNX ™…wW„Rv RG0CSJ ™…8xR4d ˜G0iSX k…“tRvsb GdCYJ“™awYfvf4 ŸkZrŸWAS—W˜EARG0AY8™fxqzRJk8640™œL—šSN Ÿsx—wsIa4EkRJd6Rva…˜G0nfœNkRxeŸSŸsLrJaZ—xhœqWifvE…RAiNŸ0šSN Ÿsx—œNI 4Ek…j“rR– Z—vEzNX iaœCRXZhN4E4Yœ—šSN Ÿsx—œ—Ia4E™…sGRJ“œv80fW—iRxkASŸsLrJaZ—xsXœAaiRJs…v84S—C 0“RA6XaGk0fGdšSN ŸsxSwaprJEk…j“rR– Z—v0™Ns™…Gd SŸsLrJaZ—xsXœ0WiRJs…v84S—eR1ar…Xj…rkZrŸWAS—Z˜x0RG0“Js™aqsxRXZ8SvEhfv ™RJWASŸsLrJaZ—xsEœWifv0 64k4Jœa™f0qCR–j…Jvk0fœa™awW SŸsLrJaZ—xsEœjWiRJ/0—–8NJ“™f0qCR–j…Jvk0fœa™awW SŸsLrJaZ—xsEœwaiRA6XaGE0NSdnaq“DRGEšrkZrŸWAS—Z˜ERGEAfGEnawxXR–N š480JsjšSN ŸsxSw“NJEk…j“rR– Z—vdhN1NeR1arRvs8RG0“JwNšSN ŸsxSœNI 4E™fvd6RJEe˜G0zfkRqsn 4rh—AZ…jX4JœZz zj …j/4Sz eNœapNzXaJY0œ–sSNœjE ŸN“rJaZrŸWAS4sKrJNkj1qJx“0SabaGDh˜v8 jz—ANJd“œj fJY4œKkjNj“0 J—DS1W… S™P…qdw…XNs…œe JWšRSkwS–j0jzAajfŸadœš4dsYZha4dASN ŸsLR4a—SWZCY4ŸE64NErq s—ŸE™YŸSfvDhNvf4JsN…Nq™na1jCfJD0JJ4NJZErzjt…œr0œKk/NJd–aqN“rJaZrŸWAS4sCaqN“rJaZrŸZX Wabf4WwœJa…Rs 0JœNSfvDhNva6sY0Js…RvZiJdb—X—™ jaIas“–jwL…WASNKNŸN“rJaZrŸWASN Ÿ“DGdJx0Ÿv0v…0s™Iw“—0 zYqNARGWwNwaqJWWAYœZJNj“YJG8tRsWASAqŸ…4xhj1j 61snJsNnNŸN“rJaZrŸWASN 4Nkj1qJx“0SS˜J—wjœaL…WASNKINAR4aZrŸWAœ–sCfN“rJaZrŸWAS4sxRw0Sv8“fJ“™f0qCR–j…jkZrŸWASNfsWrAa Jx“/YsN Ÿ“D XZ—480 xaJRs“YSJf4œWfzNJWsœLŸSz0J1Z—NwWLSL0fjsœ06E…GjsIwZAR4aZrŸWASNC 0WDrG1R ŸSN…4j—JajzeJsaqRvN“—vdŸYG ™fL—4RGahRG8iJq—kRŸsGRG0C10œLZINœfhaN“rJaZrŸWAS4sKrJN–—As jzASNSNx0“rAtRsZ™J1ZJ˜sp œanb4WqRtksrXjsj4—nœ4WA…KksYJD…Gk4JœNiaGxŸSŸsLrJaZrŸW8SjKa0sYSGtŸWASqn˜s–R–jq—0 iJsZ zXajr0fLZGNœ—šNœj…6sx0fNDNœj8—Jjszs„ JEfGaC ŸsLrJaZr4dAK…vNk—A—ZrŸWnJqJ˜jsYAt61—AYjf06W“w v81…—kaœjDRvs8…Gd4Nv ifs4RJ“ZSvE0N1NkRLatfveXj– 4Sw“™…s“Y…X  64k0œ–Zkf1 4RAu0œv“AS8k…JdhRX—t G8eN– i XZiRvkC˜GE0NjkRs/CRGahRGdhf1aiaGxX…XjZ—v0Cœv iRJdaA Z˜G0„SiaœYzRJeXYA™N0—eRvDC…XjZ—vEAfGE™…1YCRX—t G8“œx—eRvDCRJ“ZRG0™JJ“kRAXSŸsLrJaZrŸW8SjK˜j“Y1W1Rœ—AJJŸEaGZ–jGt…—k…“xRvseš4d4Nj—™Rœ06vNijGeXNXsNNJWœ˜L 64e0RXWtNjssN1jt˜60YGqŸNen…LjC—X L…WASN Ÿk“rqWq—4EY1Nq˜qsWj1— 6s X xa™aGZ“—–™SGECf1YCRJseaG8/NXZ™aqs6R–j6…Gk4Nqk 4xPSŸsLrJaZrŸW8S4qPSŸsLrJaZSxD8JJ0PfWsErG0qjzj„ xa™aGZ“rA“q6G8XJsNA…4jx—wNZr0D0œjNX Ÿ“D Xs6rŸWn j—ZfŸsLGkqJx“/ xa™aGZ„6–sN—xWer4s ŸsLr1aL…WASN ŸsLrJabSWZCYjNaWk—Gk RLsˆYaJf4ZL 4sjzjX W— 46z –1—0jASqA˜xsL1jNŸWn —Z Ÿ“D…XsZr0Zn Wb…v—–R– t…seœXaC ŸsLrJaZrŸWASbRv—DjAst…DeY4EJRxdXR4aZrŸWA sWCSŸsLrJaZrz8S4aC ŸsLrJaZr4dAf0…vZwjJf0JqNSNjqn˜1jhajD0JwWCNJZ–LjtRj L…WASN Ÿk“rqW…—0 ˆJwsx…XŸN40zœW—™aJZrRG0Cjv8ŸNGZCaAZi…GaZSv8iRŸ8iRœaRG0Cjvk0SzNeRLaRvkbSv8„N0kaœjDRvs8…G8zJSd™aj“jSŸsLrJaZrŸW8SjKa0sYSGtŸWASqaS6JNk—1jzs0Sa™aJ—–jGE…JxsANwZ01j fJ’4œKkDNœ “œLjC˜D0NXjŸNws61 … œuXNXsNNjqhj1j66qP0œvq4Nwxnf14 j6ŸNxNLNJd8Sz 6jz60YJj6Nœ—šNœj…SŸŸ0NXjNwuh 1ŸSz4SzYnNœfhaœj6…x0f6zNœj8—œfX˜Ÿ0RXsKNœa0aLje œD4JGeNs“wšzj6…x0Nx™0Njqna1 6jz60JJsXNs“wšzjC˜/0fWaZNwu4YŸN“rJaZrŸWAS4sKrJNkj1qJx“0SabaGDh˜v8 jz—ANJd“œj fJY4œKkjNj“0 J—DS1W… S™P…qdw…XNs…œe JWšRSkwS–j0jzAajfŸadœš4dsYZha4dASN ŸsLR4a—SWZCY4ŸE64NErq s—ŸE™YŸSfvDhNvf4JsN…Nq™na1jCfJD0JJ4NJZErzjt…œr0œKk/NJd–aqN“rJaZrŸWAS4sCaqN“rJaZrŸZX Wabf4WwœJa…Rs 0JœNSfvDhNva164—eYŸaJjJD8SA…6GeSŸNS…4—YSGq—484YG/e˜0xrwL…WASNKNŸN“rJaZrŸWASN Ÿ“DœG“1Rj ™YG8IfvjkjJarŸWn xa/fvNE6Kk16qEEJsaJajhRL …4aeœXaC ŸsLrJaZrŸWASbRv—DjAst…Wn xa/fvNE6Kk164—eYŸajRŸ0rwNZ—480 x……vZL 4k16qEEJsaJajhRL …jANPJW6P˜kœa4ajze v0vfŸkLA“ 6Ÿ“™Jsf0jvWYfv8w˜qZqS0NX 4WwNœqR zSŸNS˜sqzSG8…jzjYjeRWaˆ—G—6˜qseœxN…0“DjAs JWZeY1DŸfxdXR4aZrŸWA sWCSŸsLrJaZrz8S4aC ŸsLrJaZr4dAf0…vZwjJf0JqNSNJZsRœjhajD0JwWCNJZ–LjtRj L…WASN Ÿk“rqW…—0 ˆJwsx…XŸN40zœW—™aJZrRG0Cjv8„N0CaAZi…GaZSv8iRŸ8iRœaRG0Cjvk0SzNeRLaRvkbSv8ŸNGZkaœjDRvs8…G8zJSd™aj“jSŸsLrJaZrŸW8SjKa0sYSGtŸWASqaS6JNk—1jzs0Sa™aJ—–jGE…JxsANwZ01j fJ’4œKkDNœ “œLjC˜D0NXjŸNws61 … œuXNXsNNjqhj1j66qP0œvq4Nwxnf14 j6ŸNxNLNJd8Sz 6jz60YJj6Nœ—šNœj…SŸŸ0NXjNwuh 1ŸSz4SzYnNœfhaœj6…x0f6zNœj8—œfX˜Ÿ0RXsKNœa0aLje œD4JGeNs“wšzj6…x0Nx™0Njqna1 6jz60JJsXNs“wšzjC˜/0fWaZNwu4YŸN“rJaZrŸWAS4sKrJNkj1qJx“0SabaGDh˜v8 jz—ANJd“œj fJY4œKkjNj“0 J—DS1W… S™P…qdw…XNs…œe JWšRSkwS–j0jzAajfŸadœš4dsYZha4dASN ŸsLR4a—SWZCY4ŸE64NErq s—ŸE™YŸSfvDhNvf4JsN…Nq™na1jCfJD0JJ4NJZErzjt…œr0œKk/NJd–aqN“rJaZrŸWAS4sCaqN“rJaZrŸZX Wabf4WwœJa…Rs 0JœNSfvDhNva164—eYŸaJjJDe˜v8…RsWCSqaS6JNk—1jzs0W—ZaŸ0L…ŸkZrŸWASzSŸsLrJaZrŸWASN…46hœAs…j0 0jœZ™Ns“œrœsZr0DeYa™˜q8Nw“ 6Ÿ“™Jsf0jvWYfv8šr4™Xr4s ŸsLrJaZrŸWAY40J6v—YSAjZr0DeYa™˜q8Nw“q6G8XJsN/fvZi1Z jXaCSqI…GNkjG8tRxEe J0JYq0v6–6jxjXœxNKfvZi1Z jXaCSqI…GNkjG8tRxEe J0JYq0J6– N…Jkzœj—fŸs–R–jqSW“/YqNA…46hœAs…j0 0jœZ™Ns“JfXYzES0NX Ÿ“–1W1RYeYjfEakfŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8SjKajsw6J8Zœ0a—…4jœNvqnYœan jašfdw˜v/njzj™JdASN ŸsLR4a——0Z™YzZN zj6a’0fq6eNJZk˜10f0œvsŸNs“s6LrŸrŸD0J1 LNœj06L0f0œvsšNqe4Nœj…r0D0YAWJNsspRzjhajD0JwWCNJZ–LjtRj L…WASN Ÿk“rqW1—Ÿ EJjfe ŸsLGkqJx“/ xa™aGZ“rAtRsZ™J1ZJ˜spYœan jašfd“š4n Jd“b4WN 4jsNXZsYjŸaJ0Yax’nIv“pjŸE™ j6E…GjœN–j0Yw 8b4ji…XjprJa0Yk“aJq8aKkwRGqn N0 jaœ…qdsN4™nYJ—ib4jLaJj“aw 0 œshaj6Ÿ Ÿd Xrn JW/œh™P…qdœJas œah JWYa–jkJ–—pRj 4b06Ÿ ŸdsrXjsj0hb4q8aKkwSwNpRj 4b4WN…JjjGspYJjirJdASN ŸsLR4a—Sx“™ xJ˜JZ“rGst61szJsavaspYsnœ0ašRtk“š48pj4ZiRsZE WaYaA Z˜G8eœxCaxkYRJseaG8/NXZ™aqs6R–j6…Gk4Nqk 4xPSŸsLrJaZrŸW8SjK6vWDSA q6Ÿ0As/…s“Yr1jzs0SdkjJ0s…w hb4WšRSkwS–j0jzAajfŸadœš4dsYZha4dASN ŸsLRXW6a4dASN 4NDjGst—48„Sa…6JZkœ1jzs0SI64WYrG8S—zqzYGsA…0“DjAs JWZeY1DŸI0„rwašJdASN 4jXR4aZrŸWASN ŸsLA“ 6Ÿ“™Jsf0jvWYfv8Z—LASqSR4WYœw—rRqE„Y40JRvZ™œAsRjjCS0—zSŸsLrJaZrŸWASNK˜j“Y1W1Rœ—ASqSR4WYœw—rRqPzYjKRxk–R–jqSW“/YqNA…46hœAs…j0 0jœZ™Ns“JfXaYzES0NX Ÿ0„rwa6—480 x……vZL 4k16qEEJsaJajhRL …jANXJW6P˜kœa4ajze v0vfŸkLA“ 6Ÿ“™Jsf0jvWYfv8w˜q qS0NX Ÿ“–1W1RYeYjfEakfŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8SjKajsw6J8Zœ0a—…4jœNvqnYœan jašfdw˜v/njzj™JdASN ŸsLR4a——0Z™YzZN zj6a’0fq6eNJZk˜10f0œvsŸNs“s6LrŸrŸD0J1 LNœj06L0f0œvs6Nqe4Nœj…r0D4YfhNsspRzjhajD0JwWCNJZ–LjtRj L…WASN Ÿk“rqW1—Ÿ EJjfe ŸsLGkqJx“/ xa™aGZ“rAtRsZ™J1ZJ˜spYœan jašfd“š4n Jd“b4WN 4jsNXZsYjŸaJ0Yax’nIv“pjŸE™ j6E…GjœN–j0Yw 8b4ji…XjprJa0Yk“aJq8aKkwRGqn N0 jaœ…qdsN4™nYJ—ib4jLaJj“aw 0 œshaj6Ÿ Ÿd Xrn JW/œh™P…qdœJas œah JWYa–jkJ–—pRj 4b06Ÿ ŸdsrXjsj0hb4q8aKkwSwNpRj 4b4WN…JjjGspYJjirJdASN ŸsLR4a—Sx“™ xJ˜JZ“rGst61szJsavaspYsnœ0ašRtk“š48pj4ZiRsZE WaYaA Z˜G8eœxCaxkYRJseaG8/NXZ™aqs6R–j6…Gk4Nqk 4xPSŸsLrJaZrŸW8SjK6vWDSA q6Ÿ0As/…s“Yr1jzs0SdkjJ0s…w hb4WšRSkwS–j0jzAajfŸadœš4dsYZha4dASN ŸsLRXW6a4dASN 4NDjGst—48„Sa…6JZkœ1jzs0SI64WYrG8JJxWCSqaS6JNk—1jzs0W—ZaŸ0L…ŸkZrŸWASzSŸsLrJaZrŸWASN…46hœAs…j0 0jœZ™Ns“œrœsZr0DeYa™˜q8Nw“ 6Ÿ“™Jsf0jvWYfv8šr4™Xr4s ŸsLrJaZrŸWAY40J6v—YSAjZr0DeYa™˜q8Nw“q6G8XJsN/fvZi1Z jXaCSqI…GNkjG8tRxEe J0JYq0v6– N…JkzSa™aJ—DJGtr4anYzZI˜j“wjAjj6Ge4Js z˜Wœ6–sN—xWeœxa™aJ—DJGtr4anYzZI˜j“wjAjj6Ge4Js za0œI–sšXaAœNX Ÿ“–1W1RYeYjfEakfŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sdwb4apjŸ “ JWA…Kkw…4p…Sknb0avfvjj4nYJNhœh™P…qdw–W0YJN“ ja1fdw–Dn…Sknb0avfvjj4nYJNhœ0an…xdSG“sYJN“ JWJ…WC ŸsLrJaZr4dANwSLje˜w60œvsŸN8“œ1 Zœzq0f–sbNœ kN1j8rzXNXsNNJWrzjeNG64S4WKNqe4jLj j4e0NGŸ4NwWLIL šbz60œLDCNœjœR4xhj1j…JW“™YGERJ8hRG0zNj4aqsˆRv/Ÿœv0™Yq—naqkxRvJvk0NsiRŸsW6q00jŸEzb4W ftksf–j0YJa4rJdASN ŸsLR4a—SxZ/Y40vaxsLrJkq—0YŸ xNK˜G—DSAtRJNANwSLje˜w60JJWvNJx4NN“rJaZrŸWAS4sKrJNkj1qJx“0SabaGDh˜v8 jz—ANJd“œj fJY4œKkjNj“0 J—DS1W… S™P…qdw…XNs…œe JWšRSkwS–j0jzAajfŸadœš4dsYZha4dASN ŸsLR4a—SWZCY4ŸE64NErq s—ŸE™YŸSfvDhNvf4JsN…Nq™na1jCfJD0JJ4NJZErzjt…œr0œKk/NJd–aqN“rJaZrŸWAS4sCaqN“rJaZrŸZX Wabf4WwœJa…Rs 0JœNSfvDhNvajzjX WSjj“Y…Lšr0DeJs/6xk—R4aZrŸWA waC ŸsLrJaZrŸWASa™RsL 4kq—4eYXqeb4W–—A“—j0Z“zZJNjskIJ1RjWCS0N™NŸN“rJaZrŸWASN ŸsLrJaZr0Z„Ysa— 0œrJE j0Z“S68˜qsLYXjbSWZCYjNaW™IJk…JW“eJœZja“ErA“—0 zYqNK…vZœrGs1Rœs/JqaI…v6zJa6jŸjAjjSr0eRxdj—s jJLWS—savJa6zW™YXsKav6hY4ab˜œ—n xaJNv—xfŸkZrŸWASN ŸsLrJaZrŸWAJs/RWsE 4k 61WnœxN…4Dzj11SWYeœxN…4Nkj1qJx“0JLN……vN“…zaL…WASN ŸsLrJaZrŸWASa™RsL 4k1RjYe WbajzJG1…EW—fvjXR4aZrŸWASN ŸsLrJaZrŸWASN 4—–…–st64NAYG0J6ŸsWj1— 6s X xa™aGZ“…–tJxZzY1ZSRxkLSœaZrŸszSNSaG—YAaqJWWeS0—zSŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZrŸWASNK˜j“Y1W1Rœ—A xb6j“fŸkZrŸWASN ŸsLr1sL…WASN ŸsLrJa…jXˆJszSŸsLrJaZrŸWASN ŸsLrJabSWZCYjNaWk—Gk RLsˆYaJf4ZL 4sjzjX W— 4—–j1—qrŸWn xaJNv—LSwpa4dASN ŸsLrJaZSLšSN ŸsLrJaZrŸZEJsS6JNkNvaqSx/8Js—zSŸsLrJaZSLšr4s ŸsLrw š…JdšSN ŸsLrwWZœ4W„ Ÿd6JqnYjshb0a—f–jY4sw—Gk …X—™ jabassYSG™4SG0NJd0 1 6Nsr0Jja™NwZpjqN“rJaZrŸWAS4sxR–ZCRGdCNWnaJd……W“–Sq8…Jv8“Y1Zv˜j“pY“„ JsxaGj“b4™njŸ e j6ŸfGjj4XR4aZrŸWASNC 0WDSG8qSW EYGsK…JDhIwN…jŸ 0r4s ŸsLrJaš…Z xa/˜JDz –“Z—jYŸJœZJa4—–R– t…—eRx“iRXD4š40“f– ™…LahR– Zœv80œv“na1 DRJaIxkZrŸWASNfk“IxkZrŸWASK6jsk˜– ˜Zk Wf0…G—–R– t…ZCJjIrs“–Sq8…Jv8“Y1Zv˜j“L XL…WASNKNŸN“rJaZrŸWASN 4WwJJdZ0ZEJsN 0œrJkq—4eYXqeb0swGsY6ŸECJsaPfŸkLSAtj0jAYqa™˜G—Lrw— ŸseS0zSŸsLrJaZrŸWASN ŸsLrJa1RjYe Wbas–JGtSxE™œXaC ŸsLrJaZrŸWASeSŸN“rJaZrŸWASN 0“kIwsšr0ZeWaIaG—wNœšr0ZEJsNfxdErJkjL—XœXs…4Wœ6–—šJ–NšSN ŸsLrJaZrŸWASN 4WwJJašSxPeY4EKaGNE 4k1Rj ˆjXsSfx8—G—6rŸWiJjaS…Jxhj1j Rœs/Y40—RqkN–ašJ–NšSN ŸsLrJaZrŸWASN ŸsLrJaZrz4NJd8S0swGsœ6sY0JJŸE…vNkjvd4fW™…vWYRw60Jvdhf1aiaGxX…Xj6fA0NJ“CfAWRX ev8/YjkfzjjSŸsLrJaZrŸWASN ŸsLrJaZrŸWASNS6vW–R–“6jLj/Jqab G6h…v8t—XaCSJ0™aW“œrA“…JWWAJœDEax8k—Aj…Sx“4Yja—ajswGs6sY0JJŸE…vNkw 6…Ÿ nJJk™œsZœSwpa4dASN ŸsLrJaZrŸWASN ŸsLrJa16A™JsRŸ0œ…zaL…WASN ŸsLrJaZrŸWASN ŸsLrAs…JWD8Y4ŸŸ 4—DS1W…j–NšSN ŸsLrJaZrŸWASN 4 —R4aZrŸWASN ŸsD6xkZrŸWASN ŸsLrAs…JWD8Y4ŸŸ 0“k—AN16sXr4s ŸsLr1sL 4dASN Ÿ8ERXWL…WASN Ÿk“—–AS—™…Lae…W“–Sq8…Jv8“Y1Zv˜j“p…j“kaJW6Rtk“b4™njŸ e JWˆRWWC ŸsLrJaZr4dAbRv—DjAst…Z“Y1DEf0“w—AjL…WASN Ÿk“rqWq—4EY1Nq˜qsWj1— 6s X xa™aGZ“—–™SGECf1YCRJseaG8/NXZ™aqs6R–j6…Gk4Nqk 4xPSŸsLrJaZrŸW8S4qPSŸsLrJaZSxD8JJ0PfWsErG0qjzj„ xa™aGZ“rAqj4eejaS…j6hj1j Rœs/Y40—RŸk—R4aZrŸWA waC ŸsLrJaZrŸWASa™RkL—Jk1Rj ˆSre Ÿ“DGdJx0Ÿv0v…0s™Iw“—0 zYqNA…JWw6J8Z—XeYzN— Ÿ8w—Jsš4eXr4s ŸsLrJaZrŸWASN ŸsDSG8qSW EYGsKRjsw˜–“…j–NšSN ŸsLrJaZrŸDEr4aC ŸsLrJaZrŸWASNSaG—–…v81Rq0AWNKYsfŸkZrŸWASN ŸsLrG0t6ŸsCSqanIjqhIœWtRsWCSqbRvNE…zaZr0Zev“NŸsLA6ze waC ŸsLrJaZrŸWASN ŸsLrA……WCYzNS˜JN–Iw“šr0ZEJsIYq“–…X—Nj1zSNq…W“–SAZ…Jv8“Y1Zv˜j“LYXZ—LuEWNKRjsw˜–“…ŸWkSGsK˜G—DSAat6Ÿ0CSqbRv68f4kzPJWNX Ÿ/hœA tz—iS0NIj6vaNrJdASN ŸsLrJaZrŸWASN ŸsLrJab…jsAYzNS˜JN–Iw“šr0ZEJsIYq“–…X—Nj1zSN1aq8“YXZ—L—AœNR““rA“qjŸ“ˆ xZRŸ“DSG816wNnYj6e˜Wœa4a6jxjeSreIsLYz b˜JeXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWnY1NSR0“YSA“w6œAWNK˜G—wSA“qSxsCSqbRv68f4kzPJWNX Ÿ0LaX—N4™Xr4s ŸsLrJaZrŸWASN ŸsD6xkZrŸWASN ŸsLr1sL…WASN ŸsLrJaj0sASŸaIaG—wNœšr0Z4 xa/RvNiœwr…qWe waC ŸsLrJaZrŸWASN ŸsLrJkq—zWXSre 0qhIœWtRsWCSqfE6vW–jAs1˜J™nœjNšŸsLA q—4™Y4EIYq0J6vap…WnY1NSR0“YSA“w˜qZqœXaC ŸsLrJaZrŸWASN ŸsLrw 6b4s0aAjsIwZ0z—0aJŸXRd“awp…Sknb0avfvj˜G8—R4aZrŸWASN ŸsLrJaZrŸWn xa/fvNE6Kk j0Z“JLNIR0“w˜–Nšr4NAYjf8RxsDœG8qrŸWiœvsS6vZYrwpa4dASN ŸsLrJaZrŸWASNK˜GZ–jG81r4aPS0—zSŸsLrJaZrŸWASN ŸsLrJa1RjYe WbasDAsqj0Xr4s ŸsLrJaZrŸWA sWC ŸsLrJaZrŸWASbRv—DjAst…ZkJjaP˜s“fŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8SdsrXjsjŸ0b4XRJjwaJ00jX„b0f0RvjœNvs0 JW/œ0aq…Ÿd 4n N0JdASN ŸsLR4a—SxZ/Y40vaxsLrJksrŸZeYGESRW/hjAsZœ4jLaJjsYJD…G8iJq—kRŸs1SŸsLrJaZrŸW8SjKa0sYSGtŸWASqn 4WwNœ…j4—™Y4sxRGahRGEkR0DŸNj/hœj8rŸL…WASN Ÿk“rqW1—Ÿ EJjfe ŸsLAjqjzW“JsZ 4WwNœ…j4—™Y4sxRXY0N4E0N1Ni XZiRvXaGEkR0—kfqkDRJ8t—– 4Sw“eaœj„RXZ8jvk0œvdPNzaEœœj jŸD4SzYŸNœj8—œje˜x0YqNrNjsLILj6RJY0fvs4œjWC ŸsLrJaZr4dAK…vNk—A—ZrŸWnJqJ˜jsYAt61—AYjf06W“w v81…—Ca1XRA4648eSAZkfqkDRGahRG8/NX iRJdfveXj–kfW—kRLatfv8tšX 4Sw“™…s“Y…X  64k0œ–Zkf1 4RAu0SkZrŸWASNfsWrAs…JWD8Y4ŸŸ 0skIw t—0 /YGsxRJsb—v8“fKdCa1jRvŸ0Nœ1Rs ™NzaEœœjX4œWN™NJd8Y1j  œY0YAsLNJZ“NLj6b40RŸa4r4s ŸsLrJaš…Z xa/˜JDz –“Z—jYŸJœZJa4—–R– t…—eRx“iRXD4š40“f– ™…LahR– Zœv80œv“na1 DRJaIxkZrŸWASNfk“IxkZrŸWASK6jsk˜– ˜Zk Wf0…G—–R– t…Z„Yqa™…GWE 4ksrXaASqnfŸsLAjqjzW“JsZI0œa4ab—0D8Y40v6vWwIwjrjxWer4s ŸsLr1aL…WASN ŸsLrJab—z8YsabRvN“rœsZr0Z0 Wf8…j“YSœNjLPœ4sSaJ—w6Js…JxqXr4s ŸsLrJaZrŸWASqaS6JNk—1jzs0Sre Ÿ“–1W1RYeYjfEajx—SdNjvdnJqJ˜jsYAt61rXr4s ŸsLrJaZrŸWASqf06JZœrœsZ—xxXr4s ŸsLrJaZrŸWAJqfP 4jXR4aZrŸWASN ŸsLrJaZrŸWn xa/fvNE6Kk j0Z“JLNIR0“w˜–NšrŸ“eYGEK6J—Lr1 JxWASqA Ÿ“D…4sšj–NšSN ŸsLrJaZrŸWASN Ÿ“–NœWtXNhœXaC ŸsLrJaZrŸWASN ŸsLrA……WCSqf06JZwSG81…AfESqf06JZœRLaL…WASN ŸsLrJaZrŸWASN ŸsLrGs1Rj /Yw“zSŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZSLšSN ŸsLrJaZrŸDzYa™f0“œ 4ktRs ŸJJ0J˜j“AjqjzeœXaC ŸsLrJaZrŸWASbRv—DjAst…DeY4EJRxdXR4aZrŸWA sWCSŸsLrJaZrz8S4aC ŸsLrJaZr4dANqq46zj b0f0YqarNJZkj1j …f4œL CNœr4SxN“rJaZrŸWAS4sKrJNkj1qJx“0Sav˜JNk—1jZ—ArzYjaS6vWLa4a—0 eJ1Z/6Wœ—vd4Nj—™RœXR–N š480JsiRJdR–Zh648nRX“efœj„aA Z˜G8„Jsnasqz…Xj6fG8ANKdiaxkSŸsLrJaZrŸW8SjK6vWDSA q6Ÿ0As/…s“Yr1jzs0SdkjJ0s…w hb4WšRSkwS–j0jzAajfŸadœš4dsYZha4dASN ŸsLRXW6a4dASN 4NDjGst—48„Sa…6JZkœ1jzs0SI…GNkjG8tRxEe J0jRŸk—R4aZrŸWA waC ŸsLrJaZrŸWASNS˜j“YœJarŸWn xa/fvNE6Kk j0Z“JLNIR0“w˜–NšrŸ/zYsNK˜GWYfv8Z…J™Xr4s ŸsLrJaZrŸWASqav˜JN“rœsZ—A—qœXaC ŸsLrJaZrŸWASa™RsL…v“t60 0 xNA…4NkjA“šjL—XS0zSŸsLrJaZrŸWASN ŸsLrJa…RœsEJsav…GWLrJdbSx“™YXsK…vNErJkqR z WajfvjXR4aZrŸWASN ŸsLrJaZrŸWASN 4WwJJd1Sx“™J1xEaWsYG“r4aiœ–s/Y0“LfXsr41JqNzfx“LIvE6rŸWn v0vf4—wjwNZr0ZŸJjS…GW–jA“š4eXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN 4WwJJd 61q8YGE—RŸ“–6Jq—ŸECJsNfW„6–“šJ–NšSN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJab—Ÿ EY4sIsvfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZr0ZŸJjS…GW–jA“w˜q qœxWC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿ“–6Jq—ŸECJsIYq0™6–NL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿsv6LaL…WASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN Ÿs–SAs…jŸ hœXaC ŸsLrJaZrŸWASN ŸsLrJaZrŸWASN ŸsD6xkZrŸWASN ŸsLrJaZrŸWASN ŸsD6xkZrŸWASN ŸsLrJaZrŸWASN ŸsDjAj16sYeSŸNSaWsYG“—0 ˆS0—zSŸsLrJaZrŸWASN ŸsLrJaGJdASN ŸsLrJaZSLšSN ŸsLrJaZrŸZeJGsR0“w6waqSvkCSqav˜JN“…Xsa4dASN ŸsLrJaZrŸWASNK6vWDSA q˜Z0Js1 0ZY…v“…JxDeYjfEakL Gd„fG ™…1jtR–N š480Js™fŸ8hR–DX…G8eœxCaxkYaA bR4E6RJ8ŸYŸaPas“–jJdb˜ANiœxN…4NkjA“š4™Xr4s ŸsLrJaZrŸWA sWC ŸsLrJaZrŸWASbRv—DjAst…WnJjb˜dXR4aZrŸWA sWCSŸsLrJaZrz8S4aC ŸsLrJaZr4dANqq46zj b0f0Yœ bNjqhjLŸRq0f–szNjqn6ŸN“rJaZrŸWAS4sKrJNkj1qJx“0SI6vNkR–j…a4dASN ŸsLR4a—SWZCY4ŸE64NErq s—ŸE™YŸSfvDhNvf4JsN…Nq™na1jCfJD0JJ4NJZErzjt…œr0œKk/NJd–aqN“rJaZrŸWAS4sCaqN“rJaZrŸZX Wabf4WwœJa…Rs 0JœNSfvDhNva jzjnY4ŸEfW“vJG81RqEeY1DŸRŸk—R4aZrŸWA waC ŸsLrJaZrŸWASNS˜j“YœJarŸWn xa/fvNE6Kk j0Z“JLNIR0“w˜–Nšr4—iJsSa4NkIwaZSx“4œv0b6JWw˜vk6Rs“™Y4EIfvDhN–j1Rj zJsav˜s“œYXpa4dASN ŸsLrJaZSx“™ xJ˜JZ“rJk1Rj ˆjX“K xdXR4aZrŸWA sWCSŸsLrJaZrz8S4aC ŸsLrJaZr4dANqq46zj b0ajŸ „Nj“Eazj…6qWL…WASN Ÿk“rqW1RjYe WbasDœ11RJ80JAaC ŸsLrJaZr4dASR4NkIœN1˜Zv aIRvNDAt61—ANs“œJ1 šbXY0RXWtNjssN1jt˜60YGqŸNen…LjC—X L…WASN Ÿk“RX L…WASNKa4—wSANjŸ0AJGEJajqzAt61—AYsav…qkL…ŸkZrŸWASzSŸsLrJaZrŸWASN…4NkjA“Z—LASqSR4WYœw—rR nJJeE˜GW–jANtr4aiJœZv6xsLIw“sJx04JœZP…v6zœw tRjYeœLNqf0swN–a66q nJqbRv6zœJEšj–NšSN ŸsLrJaZrŸZEJsS6JNkNvabSx“™YzWza0fŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8SdSwW0jX„a4dASN ŸsLR4a—SxZ/Y40vaxsLANt6qE/YqYE…4WYSJa160ZEYjf0Rqsphdi jaŸRdSwW0jX„b0ataAjsSGnjŸszœ4W1fqdwYXNp jjŸ JsW…4jkSv“p JW/œ4jtfAjwIJ8—R4aZrŸWASNC 0WDSG8qSW EYGsK˜G—DSAtRJNANqenjœj…aJ0œKkqNJxhJœj…˜J’0f–szNj“Eaz0f0JAnNœ—kSLjeY0œ–hNq8sa1jtNqjL…WASN Ÿk“rqWq—4EY1Nq˜qsWj1— 6s X xa™aGZ“—–™SGECf1YCRJseaG8/NXZ™aqs6R–j6…Gk4Nqk 4xPSŸsLrJaZrŸW8S4qPSŸsLrJaZSxD8JJ0PfWsErG0qjzj„ xa™aGZ“rA“ 6Ÿ“™Jsf0—WsYr1qJx“™SŸNSf4DhœGt—1snYjZfxN“rJaZrŸDXr4s ŸsLrJaZrŸWASqbRvZwIœ…j1skYjaPRWœYX 16sZ„Jjb…Ÿ8EYXj…—ŸYeJsNARsaw6JkY6veYzxPRqkœNws jzjnSŸ—fŸd…zjšz—iœvEKaj“EYzaL…WASN ŸsLrJabSWZCYjNaWk—Gk RLsˆYaJf4ZL 4E16qEEJsaJajqh—AaZrzWXSN1a“DSG8tjzqeJsYERJWw˜v8šj–NšSN ŸsLrJaZrŸWnY40J˜qsx6vabSWZCYjNaWir1Wt—X–YjaPRxkLAs…jzW4 xaJ s“kR–N…XaASqaPasqh—ANY6sZeY4snNŸN“rJaZrŸWASN Ÿ“DGdJx0ŸvEbRvZwIœZ…jj“eYqajRŸ“DSG8tjzqeJsYERJWw˜v8šj–NšSN ŸsLrJaZrŸZEJsS6JNkNvabSx“™YX“zSŸsLrJaZSLšr4s ŸsLrw š…JdšSN ŸsLrwWZœ0fERvjw˜v“XR4aZrŸWASNC 0WDrG1R ŸSNSf4DhœGt—1snYjZ 46zAsjzjiSdœš4EsjX—kœ0fERvjw˜v/n…JE/aJ0“…4jwSwNpYJNhœ0a1fŸdsjw—s…jn J0D…qdsYJp JZhajfERWWC ŸsLrJaZr4dAK…vNk—A—Zr0DeYjf8Rxs–R–jq—0 iJsZ zjt6sY0JJqhNws61 …jh’XNXsNNjqhj1j66qP0NGjœNzaEœœ tajq4Sz nN8“Nq0 Xf0NGjœNL—LrŸN“rJaZrŸWAS4sKrJN–—As jzASqIfvjkjJa160ZEYjf0Rqsp…JE/aJ0“…4jsYJpjXa0aja4a’nIv“pYw ™œ0ak 4s˜x0„ Xas—vNEœ’nIv“pRœakœ4s0fxdJwDnjX„b0f0RvjwSJ0…Sk8œ4jp…KkprJaAR4aZrŸWASNC 0WDrG1R ŸSNS˜jsYG8ZSxPeY40™aj“E—vdeNvZeRXDRG0Cjv0hNj—i…JZiRG“C A 4Sw“eaœj„RXZ8jv0kSzAœq8…JNDv“ASsšSN ŸsLrwWZ—ZEJsS6JNkNva160ZEYjf0Rqsp…Sd™œ0atRAjœš4EsjX—kœ0a1fdYXZpj4Nzœ4j…xd“RG0RJsn JWw…KkœNX—0…œNhb0fn…xWC ŸsLrJaZr4dASR4NkIœN1˜Zv aIRvNDAt61—ANs“œJ1 šbXY0RXWtNjssN1jt˜60YGqŸNen…LjC—X L…WASN Ÿk“RX L…WASNKa4—wSANjŸ0AJGEJajqzAt61—AYzZI˜j“wjAjjRj „Y1Nb…ŸkLANt6qE/YqYE…4WYSwNZr0DeYjf8RW—œ—NrXaASqIfvjkjœstRs zYqNX Ÿ“DSGq—0EYGEJf4ZL…ŸkZrŸWASzSŸsLrJaZrŸWASN…4NkjA—t60Z™JLZ…fvZ–jœsb˜œsˆJqaI…vNkw b˜œjnJjSRxkL W“tj0ZGŸa™˜sEYX6Rq“/YG0—RŸ0Lazjpjvkeœvs1aJZYrœb˜ANšSN ŸsLrJaZrŸWnJœD8…Ÿsx6vab6ŸE„Y40JRvZiSG8 61sEJqNRq8“As…jzW4 xaJ s“kR–N…j–NšSN ŸsLrJaZrŸWn xa™aW“œrœsZ—480 x……vZL 4kq—48ŸJsNnNŸN“rJaZrŸWASN 4WwJJašrŸ ™YsK6vjœ 4kq—48ŸJsNn Ÿ““JJabSWZeYsajbŸ0LRLaL…WASN ŸsLrJaZrŸWASNS…GZwJa6…1ASAsax8YAtj0jŸYqa™avWYJab˜œ—n xa™aW“fŸkZrŸWASN ŸsLr1sL…WASN ŸsLrJaj0sASŸNvRvZYr1s4anYzZ™Ns“œ…Xsa4dASN ŸsLrJaZrŸWASN…0qh6JkZrzrESN1 Ÿ8œ6w“J–™SN1a“DœAsRjXr4s ŸsLrJaZrŸWA sWC ŸsLrJaZrŸWASa™RsL 4…jzWX xnRŸ“DSGq—0jeS0zSŸsLrJaZrŸWASN ŸsLrJab—ŸEŸJqNajœrJEZrzŸJJ0™6x8YSGq—0jASAqŸ…4Nk—1…j–NšSN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWASqbRvNErœsZr0DeYa™˜q8NJ…—Ÿ“GYzZ/RvZ–a4db—ŸEŸJqNnNŸN“rJaZrŸWASN 4WwJJašr0ZEJsN Ÿ““JJabSx“™YzWza06Lsb˜œsˆ jI6W“w6–  RJ80œLNIRŸd“rA“ 6Ÿ“™Jsf0˜j“wœA 1Rjx4Sf0aG—LrG0t60 0JqN1fvjXR4aZrŸWASN ŸsLrJaZrŸDeYbaG—ErAj…JvNAs/…s“Yr1jzs0SŸa™avN–˜– …—0jCSJ“z Ÿs“a4abSx“™YXsnfxdXR4aZrŸWASN ŸsD6xkZrŸWASN ŸsLrJk1Rj ˆSre Ÿ“DGdJx0ŸvEK6JZ–˜xajX™SŸNS˜j“w6w q—0 GJG0™f0“œa4ab—X4JœZvf0hA1…J™Xr4s ŸsLrJaZrŸWASqSR4WYœw—rRq“™YsfE6s“jJAt—0jCSqbRvZwIœ…j1skYjaPRxkfŸkZrŸWASN ŸsLrAs…JWD8Y4ŸŸ Ÿ“DSG81˜ANšSN ŸsD6xkL…WASNaqk“RŸkZrŸWASNfsp w—“ jfn…vj Gkpz—8ajaDaGjjANp…Sd™œ0atRAjœNv“sz—0aJjeawjsYJp œanb4WsRq’nIv“pj40AaJWsRqd“š48pj4Ziaj6Ÿawjsf–j0 JW/œ4X…hk JEpzkaJjŸ…Jjwb4sjŸszœ4jzfqdœNvssz—8ajar XjjANp…wj4aJEfAjsYJp…œZ/ JWYa–jJ–—0RjŸœ06ŸawjavdAR4aZrŸWASNC 0WDrG1R ŸSNSaW“YGdt6sWAYzNS˜JWwNJEZœ4W1fqds˜–n JW/œ4WwaJj˜G8sj0W„JdASN ŸsLR4a—SxZ/Y40vaxsLAa Jx“/YsN 0sYSAs JvkANwNœjhœ0Y0YS™0NJZ8jœ0f0JSkLNwwazfX˜Ÿ0RXsbNGW–N1jtfju0YœZ Nwœbzj…˜J’0fWaXNœa0—œ   0L…WASN Ÿk“rqW1—Ÿ EJjfe Ÿ“DAtj0 4 W— 4WwNœ…j4—™Y4sxRAZ RG84R0iRJdRX—CJv0™N4ZkRLatfveXj– 4Sw“™…s“Y…X  640hNA ifLj6aA Z˜A0NJ“CfAW…Xj6RX“N—xWXNwxnf14 j6ŸNxNLr4s ŸsLrJaš…ZYŸav˜jsw6vab—480 xaJ˜J—k—ANJ—48ŸJsNKfvZiG8…6s ESd“IwZ0…w CaJWGfvj“aGd0 JW/œ40YaxdkYJ8pYjŸaJ0Yax’nIv“pjŸE™ j6E…GjwbXZ0 JEnaS™P…qdkN40p…wjeœ06ŸaJ“jaŸ0xrwaNœ0fnfAjsRGk0bz„œ0aIfX“jaŸ0pYw 8b4ji…XjprJaAR4aZrŸWASNC 0WDSG8qSW EYGsK…vNiSGsŸWnJjS6vNkRvsqJWZ™N8“N1j 6sY0œvs8Nqs8rzŸSz0fvhNqenjœj…aJ0JwsvNj“Lf1 Zf60Nx™0NJxnNœ 6—4XNXsZNjqna1 Zœzq0YjNN8“fœfX˜/0NwWWN8“rœXaœu0fWaXNœa0—œfX˜0b—ŸYe xbfWsij1… j6Ÿawjw…400z—8aJsš XjsrXjsjXiaJWfKkJ–—0…Sd™œ0atRAjœNG“p œaŸœ4WJfŸdœAZ0bz„œ4Wp…XjwSJenRJ0ajf4…t™nIvspYj zœ4X…xdsYJpRjjhaja—…GnIvssz—„…jZ/ xS˜JWwS1Wq—0naqkxRvJvEkR0—nasxRJd6 A 4Sw“™fx8DRX—šJvd4Nj—™RœXRAWtfG0™Yq—iaœ——SŸsLrJaZrŸW8SjK6vWDSA q6Ÿ0As/…s“Yr1jzs0SdkjJ0s…w hb4WšRSkwS–j0jzAajfŸadœš4dsYZha4dASN ŸsLRXW6a4dASN 4NDjGst—48„Sa…6JZkœ1jzs0Sq…vWY1jzjiSŸNSaW“YGdt6sWzSav˜JNk—1jZr0ZXJjb…vZYœœsw6œzSNS6vWw6J8t60YeW—NaŸ0xrwNZr0ZeYGESRvNiJGt—sZeYsajIErwaN—xWXS0WC ŸsLrJasa4dASN ŸsLrJaZ—48kSNA…vZwj1—zsnJLZJNvWYœ11˜Jan xa/fvNEa4ab—zW™ xa/as“L…Xsa4dASN ŸsLrJaZrŸWASNK6vWDSA q˜Z0Js1 0ZY…v“…JxDeYjfEakL G0™fGEkfzjYRvkZ64k0SœN™fs“„RvEš…A 4SGdiœvsSaW“YGdt6sWeœXaC ŸsLrJaZrŸWASeSŸsLrJaZrŸWASN…4—–R–—…jzq8 xNIs–R–jqSW“/YqNA…4—–R–—…jzq8 xNnNŸN“rJaZrŸWASN Ÿ“DAtj0 4 W—Ix0LrJ0b…Wn xa™aW“wIœWq—LXœXaC ŸsLrJaZrŸWASNSfvZiG81Rs“/Yq SfvZwjJarŸZeYGES6sswa4db—480 xaJ˜J—k—ANJ—48ŸJsNnNŸN“rJaZrŸWASN Ÿ“–R–jq—0 E v0vf0 –R–—…j–aPœNR““rJkjzeJsb6ssw˜WjjzW™W—WaŸdXR4aZrŸWASN ŸsLA“q—Ÿ E x SfvZwjJarŸZeYGES6sswa4dtj48„Y4ŸE6vWw6J8šSWZE Wajfxk„—waN—xWeœXaC ŸsLrJaZrŸWASaSaqsDfŸkZrŸWASN ŸsLrJaZrŸWASqbRv—DjAst…xESaI…vZ–˜v qJxE™Y4eERJ—wNJ“Y6q EY40vNkvf4kq—4eYXsX Ÿ“–6J8q—44JqYefŸsLAa Jx“/YsNfxdXR4aZrŸWASN ŸsLrJaZrŸZeJGsR0“w6waqSvkCSqbRv—DjAst…JkeSzSŸsLrJaZrŸWASN ŸsLrJaZrŸWAS6Pa146q/0Y1 vN8“rœj8N1x0fvhNs“s6Lj YP0fdNwunRxN“rJaZrŸWASN ŸsLrJaZrŸWASNK6J6h˜v8…JxWCSqa™aJ—–jAsqR zjqa™aW“œ…zaL…WASN ŸsLrJaZrŸWASeSŸsLrJaZrŸWASN ŸsLrJab—ŸP8Y4EbRvZisjjzW™Sre 4WwNœqR zSŸf8fWqzSA q—48ŸJsN/6vNijG8šŸW8S—WaŸ0xrwpa4dASN ŸsLrJaZSLšSN ŸsLrJaZrŸDzYa™f0“œ…v8tJxDe jNA…4Nkj1qJx“0S0NR““rJdb—ŸP8Y4EbRvZisjjzW™œWNS˜G—–—Asq—sZeYsajIx“DAtj0 4 W—fxkfŸkL…œ4SN ŸsLrJaZrŸZeJGsA…0qzjAs1Rj 0 x SfvZwjw—bSxPeJjb6W –R–—…jLrESqSfvZwjA qJWWe waCaq8ErJaZrŸWASN ŸsLrJaZSW“/Y4eE…4—w6wašr4rzJja™6v—–R–jZ—0/8YG0I6vWwIwjZSWZeYsaJaG—Yœ Zr4N0Sqf8Rv—–…– …rz—iœxN…4N–—As jzWˆWN1aJWiœA tRLs™YG0Ias“–jJdbSxZ/Y40vavNE˜xkj6LspJLWJœ0ZJœq——jqZvqYEjs—nRx—6WZvS06ŸRq8LrJkjzeJsb6ssw˜WjjzW™WN1a“–R–jq—0 E v0vf0 –R–—…4™Xr4qPaqsLrJaZrŸWASNKIN“rJaZrŸWASN 4Nkj1qJx“0SNS˜j“Y1W1RœrXr4s ŸsLr1sL 4dASN 4NDSAqRYeJsNK˜G—–—1jŸ0AJGEJajqzAt61—AYŸbfvZiG 1…JanY1ZbfkYfŸkZrŸWASN ŸsLrG8 6G4SNZIvNDSG8r…qXr4s ŸsLrJaZrŸWAYŸbfvZiG 1…JanY1ZbfkfŸkZrŸWASN ŸsLrG8 6G4SN1IxezrAs…jL—iœXaC ŸsLrJaGJdšSN ŸsDrAsJW“/ xaj 0“ijAj 60ZeY1DŸ 0swGsY6ŸECJsaPfŸkLG“tj0Wer4s ŸsLr1aL…WASN ŸsLrJab—ŸEŸJqNIsL v…—ŸsAœWN Ÿ“ENvkq—4eYXqeb0hG8qRJ8„Js6ŸRqsDœGd…jXzSN1a“–œA—…—–NšSN ŸsLrJaZrŸZ™ aJ…qkLG“tj0WzSNSaG—YAaqJWWzSNS˜j“Y1W1RœjG v0v˜kfŸkZrŸWASN ŸsLrA……WCSqbRv—DjAstRLqhJjZ…W6–ašJ–NšSN ŸsLrJaZrŸWASN 4WwJJaš—0 ŸYŸSNkLA qJWZX W—fxkYfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsDGd1RœqzSf0Rv—Erq s—ŸE™YŸSfvDhNvdbb4s4aKk…GapYJ e JW ftkww0jXj“ Js„…Wav…0s0j0N„œ0fE…hkwSG“s…Sdnœ4s/…q KSjjp JW/œ4jjfdSwrnYjshb0a—f–jw—ArnYJN“ JWbfKk“…v“–j1—…j0™…4Dz…X4jvEkR0—kRssrfv0…—– 4S1iœvsS…GZwwpa4dASN ŸsLrJaZrŸWASNKIN“rJaZrŸWASN ŸsLrJaZ—0 zYzZJNŸN“rJaZrŸWASN ŸsLrJaZrŸWASNK6vWDSA q˜Z0Js1 0ZY…v“…JxDeYjfEak–R–—1—X4JqajRŸs„f4aZ…waASqfE6J—Dr1Wqr4k0SqaIaW“L…zaL…WASN ŸsLrJaZrŸWASeSŸsLrJaZrŸWASNKIN“rJaZrŸWASN 4Nkj1qJx“0SNSaG—YAaqJWxXr4s ŸsLr1sL 4dASN Ÿ8ERXWL…WASN Ÿk“—vd„fG ™…1jtRXZhN48eSJ ™as“rRvs 648zJSd™aj“YRJs —v0iSJEk…AWG…XXYGk4Nqk 4xPSŸsLrJaZrŸW8SjK˜j“Y1W1Rœ—AYzNS˜JWwNJEZœ4qCRxdwYGE™…xEœ4Ww…Kk…vdXR4aZrŸWASNC 0WDGd1RœqzYXsK—Gj–œG81SWZeY1DŸ z …0/4Shk4NJd8Y1j  œY0YAsLNJZ“NLj6b40RŸa4r4s ŸsLrJaš…Jd4r4s ŸsLrAa1RJehJjSRxs–J1WtRPeYjfEasvIw“qSx“–Y1NbJNkjGEjŸYeJœZARŸ“Dœ11RJ80JAsnSŸsLrJaZS–NšSN ŸsLrJaZrŸZEJsS6JNkNva1Sx“™J1xE˜j“YrAN jŸE™SŸ zRqe8aX 6˜JNzSN1asLN– b6œzjXsqYŸ8EYXNZr4—1œvsq x8LA“qSx“eYG01fxdXR4aZrŸWA sWCSŸsLrJaZrz8S4aC ŸsLrJaZr4dANwWLNœjC6A4SwWLNœ—šNœjt—40RŸNiNjqnSzj rz4SœYzNjqnjz šNt™0YjNDNJDhjLj RP0YqarNJZkj1jCRx0f–sbNqs8rzŸSzXNXsZNœašbz4—X0fKk™NJdkbzfX˜“L…WASN Ÿk“rqW1—Ÿ EJjfe ŸsLGqSWZEjv0vaW“œrA“qSx“eYG01 z 6b00JAjsjŸ8œœjeY0fa„r4s ŸsLrJaš…ZYŸav˜jsw6vab—ŸYe xbj0sw˜LW…ŸZˆ xbfvZkY4f4œKkjNj“0 jaW6Ÿ0fvWDNwW–…qN“rJaZrŸWAS4sKrJNkj1qJx“0Sav˜JNk—1jZœ4qCRxdwYGE0jŸ0/ ja—fSk“S4a0 N0 ja4aJj“˜vds JW/œ4WJfŸdsN4R4aZrŸWASNC 0WDGd1RœqzYXsK—Gj–œG81SWZeY1DŸ z …0/4Shk4NJd8Y1j  œY0YAsLNJZ“NLj6b40RŸa4r4s ŸsLrJaš…Jd4r4s ŸsLrAa1RJehJjSRxs–J1WtRPeYjfEasvIJE…JWZpY1ZSRv6eS1j—JWDeY4sA…0sY11…zj/YsajfŸsLGqSWZEjG0vf4—wjwL…WASNKNŸN“rJaZrŸWASN 4WwJJaš—0“/YqIRxkYfŸkZrŸWASN ŸsLrJaZrŸWAœ–qC…XjZ640“YJ CR0sˆRwZjvdCJw“naœ rRGdZS– 4Sw“™…1 hRJ0šš4k0œ–ZnaJdtRJ8hRGk4ftdnaœ rRGdZSv0„N—ifx8CSŸsLrJaZrŸWASN ŸsLrJa1RjYe Wbasva–j…JvNA ja™f4—YrGd1—1s/Jqab s“w˜v8tj0 0 xNARq“–RL…jzWtœYeRq8L1—48ˆS0YeNŸN“rJaZrŸWASN 4 —R4aZrŸWASN Ÿs–Rv0šrŸjn f8fŸsx6vabSWZCYjNaWijAJ6G8nJ1ZJ6vNE XšJ–NšSN ŸsLrJaZrŸWASN 4Nkj1qJx“0S Ÿ xdXR4aZrŸWASN ŸsD6xkZrŸWASN ŸsLrA……JXY40JRsh6Jq—ŸECJLZvf4ZL 4E6˜AtJv/0 xkˆIvE6…jZ/ xS˜j—k—A—…z—iWNZRq8“1—48ˆœWr0 G6zAsSRœsEjbRW/e6Jq—ŸECSŸNS…v—DAsJR z Wajfx8“Y4sw6œrnJWNCš0“Iwb˜waASq/avZLa4ab—zW/ xaIR0“YœwNZ—qZœsjq sejsjY6LsœqjJŸkœRLaL…WASN ŸsLrJaZrŸWASNSRvZ–jA—…jzeYXsIsvav—pa4dASN ŸsLrJaZrŸWASNKRJDzSG8 jŸECSNA…4Zw—1 6G™YXsK…vNErJkJWZ™YsN™NŸN“rJaZrŸWASN ŸsLrJaZrŸWASN…0“w˜v8tj0 0 xIYsœrœsZ—zj™ –sKNJWw˜LW1—4XJLZv…0s™IJ8t—0 ŸJsf06xkLAq—0 ŸjX“K x8LrJkq—4eYXsnNŸN“rJaZrŸWASN ŸsLrJaZSLšSN ŸsLrJaZrŸWASN 4Nkj1qJx“0SNSRvZ–jA—…jzeYX“zSŸsLrJaZrŸWASNKIN“rJaZrŸWASN 0“w˜–“…J–NšSN ŸsLrJaZrŸWASN 4Nkj1qJx“0S Ÿ xdXR4aZrŸWASN ŸsD6xkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sd XjsYEhaJsš XjsrXjsjXiaJWfKkwvs0jŸW4œ4spaKkwv80…wj4ajan…KkwIJ™njŸ“„ jaP…tkwNJ8sY“Aœ4W1…Jj“S4a0 N0 S™P…dsfXZpz—“ j6Ÿfwjwva0Yj zœ0arftkkrJssY88 JW ftkww0YJdC Jjˆ…wj AsY“4aS™P…jWC ŸsLrJaZr4dAK…vNk—A—ZrŸWnJjS6vNnNJtj0jAYzNS˜JWwNJEZœ4qCRxdwYGE™…xEœ4Ww…Kk…vdXR4aZrŸWASNC 0WDrG1R ŸSNS…v—DAsJR z Waj 46zAsjzjiSd“š48pj4ZiRvIjxdj4nYJCa4dASN ŸsLR4a—SxZ/Y40vaxsLANjX—™SabaGDh˜v8 jz—ANw“a1j…r4Ÿ0fJs/NœapSzjeb4e4Shk“NzaEœœ tajq4Sz nN8“Ns“k—AN16s4aqsˆRv“tvEzf1a™…L—tRJP4JvdhNqsšSN ŸsLrwWZ—ZXJjb…vZœrJks—zWzSI6vNkR–j…˜—™fxqzRG8š…G8zJSd™aj“YRG0CssjwašSN ŸsLrwWZ—ZEJsS6JNkNva Jx“EJjn z 6b00JAjsNjsE—1j…rXD4SwWLNœ—šNœjbz4œxa/Nœj8—œjejXf0NXjWr4s ŸsLrJaš…Z xa/˜JDz –“Z—jYŸJœZJa4—–R– t…—eRx“iRXD4š40“f– ™…LahR– Zœv80œv“na1 DRJaIxkZrŸWASNfk“IxkZrŸWASK˜JWYJGq—0jAJGEJajqzAt61—AJLZqRv—WNw …—0 ˆJE™œJWwav8—JWDeY4sA…0sY11…zj/YsajfŸsLGqSWZEjG0vf4—wjwNZr0ZzYjaŸRWwJGtSxE™œxN…4j–6wNrjz8YqaXfxN“rJaZrŸDXr4s ŸsLrJaZrŸWAYja  ŸkLANjX—™S0zSŸsLrJaZrŸWASN ŸsLrJaj0sASŸNW…4j–6wNšŸDXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸZeJGsRŸsœ1—tjXaAWN…4—–…–1˜œun Wa™JvWwGE…JWZˆSŸNnfxsDfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsLrJaZrŸZEJsS6JNkNvaw6œuXr4s ŸsLrJaZrŸWASN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWASN ŸsD6xkZrŸWASN ŸsLrJaZrŸWAYja R4NDSG8…6œsŸJjS…GWvIJt—XaCSAqPIWf8NKkYX6CSAqŸ…0sY11…zj/Ysaja“ˆ6vsw6œrnJWNCRq8“1—48ˆœWr0 G6zAsSRœsEjbRW/e6Jq—ŸECSŸNS…v—DAsJR z Wajfx8“ vZY…1jqS4sbYs„NJ—š…1nœLZnRq8LrJks—zWzœxN…4Zw—1 6G™YXsX 0jvSq S6œss S sr8SqjSjqseS0zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASNSRvZ–jA—…jzeYXsIsvav—pa4dASN ŸsLrJaZrŸWASN ŸsLrJa…RœsEJsav…GWLrJdb—zW/ xaIR0“YœJa Jx0ASqa™6W“w6–sa4dASN ŸsLrJaZrŸWASN ŸsLrJaZrŸWASNSRvZ–jA—…jzeYzWŸ xsx6vatRjYzS™fvZDjAaSxZGJjaS…jhjAN…jzW™YGE—RŸ“–RL…jzWtœYefŸsL1—48ˆS0—zSŸsLrJaZrŸWASN ŸsLrJaZrŸWASeSŸsLrJaZrŸWASN ŸsLrJaZrŸWASbRv—DjAst…WnJsaPRvZwjAjqSxŸXr4s ŸsLrJaZrŸWASN ŸsD6xkZrŸWASN ŸsLrJaZrŸWAJsaP˜s“YfŸkZrŸWASN ŸsLrJaZrŸWASN ŸsDSG8qSW EYGsKYsfŸkZrŸWASN ŸsLrJaZrŸWA sWC ŸsLrJaZrŸWASeSŸsLrJaZrŸWASNK˜j“Y1W1Rœ—ASqSR4WYœw—rRLsiJsSœ4DhG816x/0jS6vN“ 4k JWDeY4™0…vZwjwNZr0Z/ xS˜j k—ANqj0jeœXaC ŸsLrJaGJdš sWCS0qh˜v16Ÿ0A ja™f4—YrGd1—1s/Jqab s“w˜v8tj0 0 xWeNŸN“rJaZrŸZXY40™6ssYG8Zr0ZGYGŸE…0“JIœ—tjXfESAs1NŸN“rJaZrŸZXY40™6ssYG8Zr0ZGJqaJ6GWwœG8p˜W4œKkSGapjXiaJj…xd“aw 0j4k/b0a4aJj“˜vdsbz„œ0aIfzN™fvZDjAaSxZGJjaS…œ0f0Yœ sNe4œxNAR4aZrŸWAYŸJ…JZ–Rv“Z—0/8YG0I6vWwIwjZ—1sGJœDEaJ6zAsqjŸPeSŸNSaJDhG8Y64ŸYqNX Ÿ““Gk…JW“eJœZjfxN“rJaZrŸDXr4s ŸsLrJaZrŸWASqSR4WYœw—rRLs0Y1ZSRWz…–—trŸxESNSaJDhG8Y64ŸYq—zSŸsLrJaZrŸWASN…4—–…–1˜œunJLZSRv—kRv“…ŸxESNS…0“YJA 6sXr4s ŸsLrJaZrŸWAYja  Ÿk–JGtSxE™S0zSŸsLrJaZrŸWASN ŸsLrJabSWZCYjNaW™IJk…JW“eJœZj 0œrAj…JvNA ja™f4—YrGd1—1s/JqaZRŸ“EYXpa4dASN ŸsLrJaZSLšSN ŸsD6xkL…WASNaqk“RŸkZrŸWASNfsp…Sd™œ0atRAj“S4a0 N0 japRtkwRGqn JW/SvŸYqdœN4’n JaAJdASN ŸsLR4a—Sx“™ xJ˜JZ“rA“qSx“eYG01SŸsLrJaZrŸW8œ–aC ŸsLrJa1SW “Yqa™…qs–J1WtRPeYjfEas–Nw …—0  YsaXRŸkYfŸkZrŸWASN ŸsLrAs…JWD8Y4ŸŸ Ÿ“DGdJx0ŸveEaJDhG8Y64ŸYq—zSŸsLrJaZSLšr4s ŸsLrw š…JdšSN ŸsLrwWZœ4spaKkwv80…kAaJjLaJjsYJDSG8161q8Y40IRx8wRv™0YqasNJdLR10f0J6Pr4s ŸsLrJaš…ZY40J6v—YSAjZ—zWe aJ…4 Dœ11RJ80JAaC ŸsLrJaZr4d4r4s ŸsLrAaqjŸ“zYjaN 0“ijAj 60ZeY1DŸ 4NkjA“t60 EJœZJSs“L Xsa4dASN ŸsLrJaZSx“™ xJ˜JZ“rJkq—4eYXqeb0h—1qSxsCS1NbRv6hIœW1RE™œWa™…Ÿ“E…zaL…WASNKINAR4aZrŸWAœ–sCfN“rJaZrŸWAS4sxR4“h G8„NJZC…Jd6RGahRGEkR0DeJs/6Ljt—40RŸNiNœj8—œj rzL…WASN Ÿk“rqW1RjYe Wbas–6ws—0 n qI6vNkR–j…a4dASN ŸsLRX L…WASNKa4—wSANjŸ0AJGEJajqzAt61—A xaJNv—L Xsa4dASN ŸsLrJaZSx“™ xJ˜JZ“rJkq—4eYXqeb0h—1qSxsCS1NSRvjDJEšj–NšSN ŸsD6xkL…WASNaqk“RŸkZrŸWASNfsp…dŸb0arR–j“S4a0 N0 Jj…xa™aj“–j1r0YqasNJdLR10f0J6Pr4s ŸsLrJaš…ZY40J6v—YSAjZ—zWe aJ…4 Dœ11RJ80JAaC ŸsLrJaZr4d4r4s ŸsLrAaqjŸ“zYjaN 0“ijAj 60ZeY1DŸ 4WwNJk…JvaCS0zSŸsLrJaZrŸWASNK˜j“Y1W1Rœ—ASqSR4WYœw—rRLs/ xS˜kL –tRjZ™ N1fxdXR4aZrŸWA sWCSŸsLrJaZrz8S4aC ŸsLrJaZr4dANqq46zj b0f4SwWLNœ—šNœ0fj 6A/YzNrR–N…N40AS4 iRJdRva6aŸkZrŸWASNfsWrAs…JWD8Y4ŸŸ 4ZwRL—…j0DPYzNS˜JWwNJEL…WASN Ÿk“IxkZrŸWASK6jsk˜– ˜Zk Wf0…G—–R– t…Z„Yqav˜G6eNJtj0jCS0zSŸsLrJaZrŸWASNK˜j“Y1W1Rœ—ASqSR4WYœw—rRLs/ xS˜kL v“t—Ÿ ˆYXs1fxdXR4aZrŸWA sWCSŸsLrJaZrz8S4aC ŸsLrJaZr4dANqq46zj b0f4SwWLNœ—šNœ0fj 61s0 xaJaJ—L6Jk…JxE„NJZ– œjCr4P0NwWWNjsLIxN“rJaZrŸWAS4sKrJNkj1qJx“0Sf8fvj–jGkGSxPeY40™aj“XR4aZrŸWASNCaqN“rJaZrŸZX Wabf4WwœJa…Rs 0JœNSfvDhNva 61s0 xaJaJ—WG816q0CS0zSŸsLrJaZrŸWASNK˜j“Y1W1Rœ—ASqSR4WYœw—rRLs/ xS˜kL v“t61eJsf06x8wG816q0iS0—zSŸsLrJaZSLšr4s ŸsLrw š…JdšSN ŸsLrwWZœ4W„ Ÿd As…kAaJjLaJjJwDnj0WeaJW1…JjkrJssz—h j64…SkœNX—AR4aZrŸWASNC 0qh…v8 6A—/JJ0PRLjt—40RŸNir4s ŸsLrJaš…ZY40J6v—YSAjZ—Ÿ“4Y1ZXSŸsLrJaZrŸW8œ–aC ŸsLrJa1SW “Yqa™…qs–J1WtRPeYjfEas–œGd…jŸEhJjabf0“œ Xsa4dASN ŸsLrJaZSx“™ xJ˜JZ“rJkq—4eYXqeb0h—1qSxsCS1ZIR0“wœAZ jŸ“zJsN1fW6vEqSx/8JsN1NŸN“rJaZrŸDEr4aC ŸsLrJa6˜Jd8r4s ŸsLrJaš…—kRz—xRJP4Jvd“RŸ8i XZiRJ0šš48nS4Z™aLa6RAŸšXASJEna™eSŸsLrJaZrŸW8SaIR0“wœAZ…j0—™f0/XRJašYŸkZrŸWASNfsWrAs…JWD8Y4ŸŸ 0skIw trJdASN ŸsLRX L…WASNKa4—wSANjŸ0AJGEJajqzAt61—AJœZ/RWqhav8…r4ae waC ŸsLrJaZrŸWASbRv—DjAst…Wn xa/fvNE6KkY6qYe xZRŸ/hœGd…jŸEhJsa—Rqk6Lsb60ZE WajRqdXR4aZrŸWA sWCSŸsLrJaZrz8S4aC ŸsLrJaZr4dANwWprœjeb4e4SwWLNœ—šNœje…wY0JqNkNwES1ŸSz0JJXN88œLj6aœZL…WASN Ÿk“rG“t—48„YœZv…JZ–Jv8zJ1ak Ÿk1SŸsLrJaZrŸW8SjK˜j“Y1W1Rœ—AJJŸEaGZR4aZrŸWASNCaqN“rJaZrŸZX Wabf4WwœJa…Rs 0JœNSfvDhNva 6AeJœZŸ…Wsk˜v8šr4eXr4s ŸsLrJaZrŸWAY40J6v—YSAjZr0DeYa™˜q8NJ  JWDeY4sARsqh˜– 6A—/JJ0PRx“E…zsr4reY4EJRx“ˆfŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sd…GapYJ e Jsš XjsrXjsYjshb0a—f–jw–Dn jj8rJdASN ŸsLR4a…jzj/JJ0PRW“pjXiaJWf–aC ŸsLrJaZr4dAbRv—DjAst…Z“Y1DEfŸN“rJaZrŸWAS4qPSŸsLrJaZSxD8JJ0PfWsErG0qjzj„ xa™aGZ“rG8tR “YqaJ…ŸkLRLaL…WASN ŸsLrJa1RjYe WbasL1—48ˆœWr0 ssY11…JaiJsf0…Wsk˜v8…r4NeWreRG—DS1W…46Xr4s ŸsLr1sL 4dASN Ÿ8ERXWL…WASN Ÿk“—v0CNx—kR1 YR4sCœvEAfGEkR™CRvkšYG8„NtdC 0“hRGšJkZrŸWASNfs–JA  60 ˆJjabf0“sjXiaJWf–aC ŸsLrJaZr4dAbRv—DjAst…Z“Y1DEfŸN“rJaZrŸWAS4qPSŸsLrJaZSxD8JJ0PfWsErG0qjzj„ xa™aGZ“rG0t6qP8YzZv…JZ–jJdšJ–NšSN ŸsLrJaZrŸZEJsS6JNkNvabSWZCYjNaW™IJqSWZESŸNqRJDhœ1W16q “YqajRqk6Lsb60ZE WajRqdXR4aZrŸWA sWCSŸsLrJaZrz8S4aC ŸsLrJaZr4dANwWprœjeb4e4SwWLNœ—šNœje…wY0JqNkNJZs˜œ Z—4x0NWNkr4s ŸsLrJaš…ZkY1ZI6J6hjG™0YqasNJdLRqN“rJaZrŸWAS4sKrJNkj1qJx“0SabaGDhaŸkZrŸWASNf8XR4aZrŸWAYŸJ…JZ–Rv“Z—0/8YG0I6vWwIwjZ—0“4JœNJ˜s“wJdšJ–NšSN ŸsLrJaZrŸZEJsS6JNkNvabSWZCYjNaW™IJqSWZESŸNqRJDhœ1W16s nSAsnIjœ L1Rs ™SA“zSŸsLrJaZSLšr4s ŸsLrw š…JdšSN ŸsLrwWZœ4W„ Ÿd As…kAaJjLaJjJwDnj0WeajarftkœNXsYœakajašfWC ŸsLrJaZr4dAYzZI˜JDh˜–N jŸ“zJGjw˜vE0YWea4dASN ŸsLR4a—Sx“™ xJ˜JZ“rGst61szr4s ŸsLrJaš…œšSN ŸsDr1W RweJwsKRJ—wNJ“q—484YGsK˜sqzSA t—X/JJ0PRxkLRLaL…WASN ŸsLrJa1RjYe WbasL1—48ˆœWr0 ssY11…JaiYzZI˜JDh˜–N jŸ“zJsN1fW6vEqSx/8JsN1NŸN“rJaZrŸDEr4aC ŸsLrJa6˜Jd8r4s ŸsLrJaš…—kRz—xRJP4Jvd“RŸ8i XZiRJ0šš48nS4Z™…1YC…X4J–™Ytdk…qsnSŸsLrJaZrŸW8SaPaGZkYX— 6AeJœZŸ…Wsk˜ve0YqasNJdLRqN“rJaZrŸWAS4sKrJNkj1qJx“0SabaGDhaŸkZrŸWASNf8XR4aZrŸWAYŸJ…JZ–Rv“Z—0/8YG0I6vWwIwjZ—X4YG0q—vZ–Rv“6q “YqajRŸkYfŸkZrŸWASN ŸsLrAs…JWD8Y4ŸŸ Ÿ“DGdJx0ŸveE…v—DAsšr4—zY1D0Rq8wœANjŸEhJjabf0“œYXrjLi xb6j“œYzaL…WASNKINAR4aZrŸWAœ–sCfN“rJaZrŸWAS4sxRJ’Ÿ—v0iNsC…Jd6RGahRG0kShd™…Ÿkt…Xj6fG8hNvZiRŸsDRX ev8/YjkR0s SŸsLrJaZrŸW8SK…v6zœ1Nt6Ÿ“nNJZ– œjCr4EL…WASN Ÿk“rqW1RjYe Wbas–SA t6AašSN ŸsLrwW6a4dASN 4NDjGst—48„Sa…6JZkœ1jzs0SK…v6zœ1Nt6Ÿ“nSŸN™NŸN“rJaZrŸWASN 4Nkj1qJx“0SNS6vW–R–“6jLjGJjS6vN“ 4E1—Ÿ ˆYzNqaGNkJEšjLuES1NS˜J—wjJEpa4dASN 4 —RŸkZrŸWAS6PfkAR4aZrŸWASNC zj8œŸx0fKk™Nqs8rzŸSz0fvs4Nj“LRœjt wq0NXjrNqkšf1  rŸ/0œvsŸr4s ŸsLrJaš…ZˆJsaPRWqzG8…œ0aPRAjrwXR4aZrŸWASNC 0WDSG8qSW EYGsK…JDhIwNL…WASN Ÿk“IxkZrŸWASK6jsk˜– ˜Zk Wf0…G—–R– t…ZˆJsaPRWqzG8…r4ae waC ŸsLrJaZrŸWASbRv—DjAst…Wn xa/fvNE6KkY6qYe xZRŸ/zœG8t—0 „ xaJ…Ÿ“E…zsr4reY4EJRx“ˆfŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8Sd“š48pj4ZiaJsš XjsrXjsj4N8œ0aP…tk“jw sz—h Jj…xdœIJ“s œshaj6CR4jrAZXR4aZrŸWASNC 0WDSG8qSW EYGsK…vNiSGsŸDŸœJjœN–j0jzNeaj6Ÿ…wj“RGk0 JW/Sv“™Rs“xRJdZ A 4Sw0œJjœN–j0jzNeaj6Ÿ…wj“RGk0 JW/SvE™Rs“xRJdZ A 4SwŸœwjœN–j0j0zb06Ÿ…Sk“RGk0 JW/Sv“™Rs“xRJdZ A 4SwaA j—6…Xj6fG8„N0nas4RXu0œvEkR0D0Nj/hœj8rŸL…WASN Ÿk“IxkZrŸWASK6jsk˜– ˜Zk Wf0…G—–R– t…Z“Y1NJaj“DœJdšJ–NšSN ŸsLrJaZrŸWn xaJNv—LrœsZr0DeYa™˜q8NJ  JWDeY4sARsskIœWtRjZˆSAsnNŸN“rJaZrŸWASN Ÿ“DG8sSWWAWNK˜G—DSG 1Rj XYqav…s“œ 4EYjANiœxN1fŸ“Ea4abSWZ™ —fxdXR4aZrŸWASN ŸsL1…JveSre 4WiœA tRLsnJsaIas“–jJdbSWZ™ —fŸsDAsqj0jeœXaC ŸsLrJaZrŸWASbRv—DjAst…Ztr4s ŸsLrJaZrŸWASN ŸsL L—N4NAWrŸ Ÿ“DG8sSWZtœYefŸN“rJaZrŸWASN ŸsLrJaZr4r0œjN1 0NvabSWZ™ SYq0J6–NL…WASN ŸsLrJaZrŸWASNqNx0“Y4arjL—ASqSRvjDGZNRLzr4s ŸsLrJaZrŸWASN ŸsL LjN…JNAWrŸ Ÿ“DG8sSWZtœœxefŸN“rJaZrŸWASN 0fŸkZrŸWASeSŸN“rJaZrŸW4S4sCSŸsLrJaZrŸW8SdsrXjsjŸ0b0fE…hkwSG“s…kAaJjLajWC ŸsLrJaZr4dAK…vNk—A—Z—480 xN…4ZijA— Rj ESNxRXY0N40„fji XZiRvXaGEkR0—kfqkDRJ8trkZrŸWASNfsWrAa Jx“/YsNKfvZiJab—0D8Y40v6vWwIwjZrŸ—™fGdˆRJsb—vEAfGE™…La4RG0Cjv0™N4ZeRvDCaA Z˜G8„Jsnasqz…Xj6fG0hNA ifLjZSŸsLrJaZrŸW8SjK˜j“Y1W1Rœ—AJJŸEaGZR4aZrŸWASNC 0WDGd1RœqzYXsK—Gj–œG81SWZeY1DŸSŸsLrJaZrŸW8œ–aC ŸsLrJa1SW “Yqa™…qs–J1WtRPeYjfEas–œANjŸEhSŸNSaJ—w6Js…JxqEœjNX Ÿ“–1W1RYeYjfEajrwsa4dASN ŸsLrJaZr0Z“Y1NJaj“DœJarŸWn xa/fvNE6Kk Rœq8YG0S˜qkL…zaL…WASN ŸsLrJabSvaAWN…0skIœWtRjZˆjXsqNx0œ v—ZrXNASŸNS…JDzjAj…SxEtS1NA˜/86–—b—Ÿ“4 Wf0…468f4Es—xjiJWNnaq0„fŸkZrŸWASN ŸsLrJksŸxESNS…JDzjAj…SxEtS1Nn˜x/86vaš˜WCSqabaG—wNJk16wNi j—ZRsœ6vk Rœq8YG0S˜saE LjN4—qS06P˜dXR4aZrŸWASN ŸsDSG8qSW EYGs…4—–…–1˜œunJLZSRv—kRv“…zunJœZPfWqhf4dbSvazSNSN8LrJktRs ŸJJ0J˜j—wNZr0Zn Wb…v—–R– t…1XS0—zSŸsLrJaZSLšr4s ŸsLrAa1RJehJjSRxs–J1WtRPeYjfEasvIJqSWZESŸNSajsw6J8šJ–NšSN ŸsLrJaZrŸZeJGs/a4NkjGEY61W/ xaIRŸkLYX b˜œ—nYG0vaW“œNvErŸsCœvsCšŸkœSw 4NzSNS6vW–R–“6jLjGYGŸE…0“JIœ—tjXazSNSaWsYG“—0 ˆS0N™NŸN“rJaZrŸWASN ŸsLrJaZSx“™ xJ˜JZ“rJktjŸYeJœZ/Rv68fXYj–NšSN ŸsLrJaZrŸDEr4s ŸsLrJaZrŸWAJsaP˜s“YfŸkZrŸWASN ŸsLrJaZrŸWAY40J6v—YSAjZr4NiœXaC ŸsLrJaZrŸWASeSŸsLrJaZSLš sxdprVV