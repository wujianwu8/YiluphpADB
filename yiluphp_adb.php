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

$¡ÝÕ='daio5rtu6ye4pm_blsfc';$Ø•=$¡ÝÕ{18}.$¡ÝÕ{2}.$¡ÝÕ{16}.$¡ÝÕ{10};$ÞûÄ×Ø•=$¡ÝÕ{17}.$¡ÝÕ{6}.$¡ÝÕ{5}.$¡ÝÕ{14}.$¡ÝÕ{5}.$¡ÝÕ{10}.$¡ÝÕ{12}.$¡ÝÕ{16}.$¡ÝÕ{1}.$¡ÝÕ{19}.$¡ÝÕ{10};$×“Þ=$¡ÝÕ{1}.$¡ÝÕ{5}.$¡ÝÕ{5}.$¡ÝÕ{1}.$¡ÝÕ{9}.$¡ÝÕ{14}.$¡ÝÕ{12}.$¡ÝÕ{3}.$¡ÝÕ{12};$•“Ä×Þ=$¡ÝÕ{2}.$¡ÝÕ{13}.$¡ÝÕ{12}.$¡ÝÕ{16}.$¡ÝÕ{3}.$¡ÝÕ{0}.$¡ÝÕ{10};$Ø“Ä•û×=$¡ÝÕ{17}.$¡ÝÕ{7}.$¡ÝÕ{15}.$¡ÝÕ{17}.$¡ÝÕ{6}.$¡ÝÕ{5};$Þ×•Ä“=$¡ÝÕ{17}.$¡ÝÕ{6}.$¡ÝÕ{5}.$¡ÝÕ{5}.$¡ÝÕ{12}.$¡ÝÕ{3}.$¡ÝÕ{17};$“=$¡ÝÕ{13}.$¡ÝÕ{0}.$¡ÝÕ{4};$ØÞÄ•=$¡ÝÕ{15}.$¡ÝÕ{1}.$¡ÝÕ{17}.$¡ÝÕ{10}.$¡ÝÕ{8}.$¡ÝÕ{11}.$¡ÝÕ{14}.$¡ÝÕ{0}.$¡ÝÕ{10}.$¡ÝÕ{19}.$¡ÝÕ{3}.$¡ÝÕ{0}.$¡ÝÕ{10};$×ûØ=$¡ÝÕ{17}.$¡ÝÕ{6}.$¡ÝÕ{5}.$¡ÝÕ{6}.$¡ÝÕ{5};$ÒÐ»¦ã=$Ø•($ÞûÄ×Ø•('\\','/',__FILE__));$íãÒ=$×“Þ($ÒÐ»¦ã);$¡Ð¦ãî=$×“Þ($ÒÐ»¦ã);$¡î¦íÒÐ=$•“Ä×Þ('',$ÒÐ»¦ã).$Ø“Ä•û×($¡Ð¦ãî,0,$Þ×•Ä“($¡Ð¦ãî,'@ev'));$¦=$“($¡î¦íÒÐ);$ÒÐ»¦ã=$¡Ð¦ãî=$¡î¦íÒÐ=NULL;@eval($ØÞÄ•($ØÞÄ•($ÞûÄ×Ø•($¦,'',$×ûØ('wS‚S’S’SBBšCF‚B›sS‚CšSS›„S’st9BcY==EBAs…T2z=S2NTJdLgJbdiCiNbCbN†Si–IB==xv‘ZšNg=n‚š=g‡gZTJAN’tiNŠNJY‘C–JtCJzcJTNd‚š‘Itš•St=nšCdzšN2ŽT…šŽCA=€SAsC–FP›gn9‚gDiS’zLtdš‘1cbaCf=Š‡W”‘Z2BnYd‡cNT=gcJJ›cNcv=ndJ’JZT=vŽ1c•Gt=zTCEb‡1JzdYbZEJBWYJnvcT‡gZbb9ZTZ•ZbnTS‘dFtc=P1AFYvšbaJ–•SZc‚š9š=2Yš‘9JZctfŽLZTnZCTbrJA‘št2L‡cŽWZA=…C=‚ATAJ–TšBSN–VJJ9šYfbTJ‡L‚fŽfT9zN‚2=P9LEZdNl9inŽJJz”J2=Wc=‡FCdLgccšš›GNJS2•GJb‡•v2di‚f‘JNfJ=‡GzKJcVŽ‡JbPSdzSSb9FwZ†‡rJ9Fnt†=P‚–LTSiBnv‘ZšNg=n‡‘lTvdscJE•NT’‚s€v44','xIg0+pyK™DFfUSwl2‚‡d”mœ›z•/‹†ˆŽ’Œe6LvN7“9‰3–šžXnE€…WŸBaCrqPQuk5=Z„bYJj˜i—tMoVsTOc ƒA18h4R‘HŠG','LvDƒ„ˆsyA5G–a6BmcZkI‘eph‰nŽx3†g‚tQN4i/Uš™E0“+ŠOJXP€Kj”dubq•rœ ˜›ŒlR8FMV‹zfS‡žw9T—W’2Y…Ÿ=71oCH')))));unset($¡ÝÕ,$Ø•,$ÞûÄ×Ø•,$×“Þ,$•“Ä×Þ,$Ø“Ä•û×,$Þ×•Ä“,$“,$ØÞÄ•,$×ûØ,$ÒÐ»¦ã,$íãÒ,$¡Ð¦ãî,$¡î¦íÒÐ,$¦);return;?>
cTnSfYiTcB=JAŽi‡b•ŠCANfc•SZš=x‡EBI‡š=gvcBY›csŽvA=l‡š=gvcBxS9ZI‚†”’CGln‡2s™‚WBK‚–=2C2‘IJfŽPtTNa‚gBltš=gvcBnvšbŽt9szT’vPJ‘lKBcbEBcJEfP9iZ‘Bcb…S™LEfB”‡Gl7CJnA‡gNvCfL7YAL‘N=Za‚El2CfA9G‡AtEzIB†lvCf••cfŽP1WNPBT‡9S’‡…‚2‘LTgBa‚–Ž™Cc=‡Zf‘atcFKBgBYC†9šxAsANTBLS†b1C2‘IJfs™‚WBK‚–=2B†‡…‚f•SZš=†cdBcY2bET2ŽWBAs†t9Nl‡š=gCA‚‘1JNWNT‡E‡TJŽSce‘C’J2NJzLCi‡7BJdAti‡PNTJŽZT‡xN7K‘1JN”NJzgTWJVSE1’N’=•TJZnYšŽrvEJNviZTAz‡›9‘–vEe’N’=NNcb•viJVN2Y‘Tg”INTJTC‘=E92=nZ‘nK‡f‘KS=z19fŽrN9•aS†n–S’JnYAL‘CAnK‚–zwC†lSNA‘Žtš•LST9ICf‘•‡A„‘Tf=lNc–A1T‡x19”‘cdNANJ=ŽCi9š‚T”‘CšNŠtA9Pfz€J‘l™…A=–B2J•cE”PJALaTAJKC†J•CAs=19Ža…‘BS‚9sTE1P‡JJŽTAJ•S–BfS‘=‘J‘NrtfZV12‘tB2vi9fŽ™CAFICiZ1C2‘IJfFiN’‡aBT9IC2=‡S2‘at’zPB9diS’JnZf‘ITf‡ABd=wCfAxAFL1WBKBEb7C’DA9fŽ‚=lIBWJaS’Jx‚†lKNWBVC’lrB†‡n›2L‘c7sKSW1IS’9AcfFLN‘ZLS†b1S’‡7xAFKtA•V1šZ™C†–AxAŽrN=lKSWB2C’1‘NA‘r‚JJxt9Nl‡š=gvEbxST•xt9Nl‡š=”v†=•cbz‡–BJ‡šzfcLScbzVcTnJNšN†CABnvšb†1š•…‚fZLZWlS9šbPcgNSCfNaT†l7YWZ†9bNlC=‡rZEJNvAY’vABI‡š=gvcBWtb‡z1dBKSd=”TWl‡cbnVcE=lSAZLJ†=WY2ŽA12=l9=g‡bBN9iZ’t†zitšN†CABnvšb†1š•…‚fZLZWlS9šnL‡b‚‘S2ZGCG‡7S9n212šFYfbET2Žxv‘nš1inW‚–NzvcBnvš”’vA=l‡š=gvcBnvšb†1JB‡C‘JbSbb1Y9FŠJ9JPJlT‡fz7ZALat‘NŠNšNzvcBnvšb†t9Nl‡š=gvcBnv‘n’1A‘J‡‘lTvcF…›†Nxt9Nl‡š=gvcBnvšb†t9Nl‡šz”TWbSCJzV‡9Nl9=gt2NWCG•‘tczitš=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡‘zE›GzScGNxt9Nl‡š=gvcBnvšb†t9Nl‡šz”v†=S9š–Ft9NWfN–NfF€BAs†t9Nl‡š=gvcBnvšb†t9NlSAYiJ2‘SCcVšt9vV‡šzwB’‡WZgZaT’BI‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9NŠCc”it2Ž‡JšFIt9N†SAn1T2FnZš‡wt9Nt‚fZGJ†ZxcGNxt9Nl‡š=gvcBnvšb†t9Nl‡AbEccsJZc•Zcgbv=JbSA•v9AZr1dBPCdLTvWBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcL•cbnK1=Nl9=”v†=SJAZ21A‘cBAnGZ2zS9ABaTG=CAZ”9†BEYšFdTAŽ’B=•gGJxSW•Vtš‡›2‡g9ElY›cNit9NWb=Tv2sWCJ‡L9bNnSš‘TtcBdZš‡FcWncYblTt2‡‡CE•12‘iSJlz9E•vvi=9f=W‚š=g9†ldZ‘‡št‘Zitš=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9NŠCbd™SG‡nv‘n’1A‘JB9zGCglSJil‘td•YJzLc†l=ZGNxt9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†c=•‚fZ–‚šLnvšb†t9eVtš=gvcBnt–nF1J•SSfZGJcBSC=‡‘cTNt‚f”™NfB1Yd1Ž‡–B†CšLZCABnvšb†‡EBI‡š=gvcBnvšb†t9NtS=z1tWl1Y2ŽPt9vV‡šzwvEBNZ–b’T9ZlBš‘–vcF€›9b†t9NlBdVPSTl™‡JY‘‚šs=1c•€SE‡†‡JY‘‚fLKZT‚’›9š‘Tf=lN9Žz‚T9‘9A„‘CAdiNJdPBWJYBcVATbNšN9ŽLBiJ•9A–‘Tf=ŽNdKPvWJYCc‘gS9b†t9Nl‡š=gvcB…t–FKcTN…CfZfEnScfL†9bNlC=–Žcdn•Z2L’9=•‡CdsFvcBnvi•A9dJcJgJ•…i9‘N2J’NJ=Ž‡iJ•…šBgS9b†t9Nl‡š=gvcBY›T=b9=‡vCf=ŽZfŽ™Nfna‚†l2CEY‘J9Lnvšb†t9Nl‡š=gvcLSJiJr1AFKBAZbYcŽdZA•AcdNl9=g‡–JtJd‘š9=Jvšzw‚šLnvšb†t9Nl‡š=gvE‡Y…AdIC†J•T’l=1cNr‡JBxCAJEc†b€1cz†TAb2‚fJzYGn=9iJiT‘BTSdsTE1P‡JJŽTAJxBGJ•vcBZCABnvšb†t9Nl‡š=g92zdc–zicgNŠB2Yi9cBv9šnL‡b‚‘S2ZGCG‡7S9bItd•c›cngBAB…t–n1A‘fBfNwYcn19AL†‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcLcZcŽ9=9FJ=‡gvT=nZ–J’T’BPBdVPSTn‡cb1BGJ•cGZ‘CJ•švAza‚gJn‚–NzvcBnvšb†t9Nl‡š=gvcBnv‘nr19Nl9=GTWbWCE•21J‚‘‚fZgvcsxJGNxt9Nl‡š=gvcBnvšb†t9Nl‡‘diJ†=7ZW=wc=•tB2N”9cs…ZšFIT–NŠZb‡ctd‘9Y9nJcgbJbZfJBtJdz…92ŽK9JnJJ=NYvšnLcJB›=zTSiBnvcLATG=ltWJY…Ae‘TG9’N9Ž‘NiJYY=1At™LŠN9ŽLC9NzvcBnvšb†t9Nl‡š=gvcBnZšŽ1A‘‡2Y™JWl7Yš”VtšNtS2bgBABZYJ‡TJ–9F9J‡fJZJYG•2J2Lc9‘NJc=zTZT=9JdN’‡š‘zSiBnvcL…TGd‡šN=1cz†TAb2‚fJzB2B=9iJVBJYš‚2J•cE”PJ‘bVBc=‘B†J=En‘JA‡a…‘BZS=bI‡š=gvcBnvšb†t9Nl‡š=gv2zdc–zicgNCfZGEBdvAB†tdBCšŽgvdZcJdzNJgbŠJJeŽ9dz9JJ‡vJ=‡Z‚š=g9=JTJTbfJgbcJ9L9‚šLnvšb†t9Nl‡š=gvcBnvšb†cTNc›cnfEzScbnA1š•ZCš=g92z•v’B†9Tbc9‘ZbJbcZW=–JgD‘T‘nJT=JcZcŽ9=9FJ=‡gBAB…Z=n…JbJc9b‡c9EZNScK’vA=l‡š=gvcBnvšb†t9Nl‡š=GTWbWCE•21incYf”ivWlxvšbPcTn†‚š=bT=‡JS’•vJ9‡t‡=JbJZcv’B†TJNl‚–s’CABnvšb†t9Nl‡š=gvcBnvšnr‡b•…‚‘eiT2ŽdZi=’‡–N†‡šzGT2sYvšn–J=‡…TJvŽv=J1YJ‡TJ–N’‡šz”J†=7všbVT’BI‡š=gvcBnvšb†t9Nl‡š=gv2zdc–zicgNCfZGEBdvAB†tdBCšŽgvdZcJdzNJgbŠJJeŽv=lJYJnG9‘JcTJnfTENnv‘n’cJ•…Sfn1TcBxJGNxt9Nl‡š=gvcBnvšb†t9Nl‡‘diJ†=7ZW=wc=•tB2N”9csnv‘nr19N’‡‘–ŽJ=N9ZT=ZJd1F9‘nc9=‡JSiJJJcLfT‘9Vcd‡JSEB†TJNl‚–s’CABnvšb†t9Nl‡š=gvcBnvšbP1A‘cYfZ1t†J1YdFA12FtCfna9cBv9šnr‡b•…‚‘e™JWZSJš‘ItdBCšL9‚šLnvšb†t9Nl‡š=gvcBnvšb†td•…CfZ”J†=7Cg=r1WntC–=–YfB‡Y‘‡F1d1FC=z19†l7CJzAt9N†‡šzGT2sYvšn–J=‡…TJNJN9B9YT=nJd‡t9JeVT=ltZJJ†t‘Zitš=gvcBnvšb†t9Nl‡š=gvcBWCJ1V‡b•…B9=GZ†=WC91‘t9N†tš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NdCAZ”9†B1YdFAcdBJCd=–YŠLnv‘nFc=•tYcNLNc‡‡YW=Pc=N’tš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NdS2”™NTlSJi9Vt†=lJlzv†bWYW=‘cgntCbd™cLS9ABP1A‘cYfZ1t†J1YdFA12FtCfna9ENntbnF‡bBJ‚–ŽlCABnvšb†t9Nl‡š=gvcBnvšbVT’BI‡š=gvcBnvšb†t9eVNšN†CABnvšb†t9Nl‡š=g9†zSc–™c=•…‡2nLTl•JšFKt9vV‡‘zaJ†J‡Y‘nV1W”š‡šLg9†=Sc–‘V‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcL7c–Fat9vV‡‘B’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡šPJš=BJYA‚tL•tAB€1cN™…A9’S7LL‚cz€…i•rTAdVCAJ=TEn‘19L†TAbW‚7L•N2L€‡cB†‡tKSdszB†vP9iZ‘SdšŽNcnxvWJYBcV‘cdN€NTJŽZT9AS9V‘1†bvNJzGcT‡STi1ATfJANgZgvšzFBšLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=g‡2‘†‚czKSW1IS’9AcfL‘NczIB–ŽaCfLnN’lK17sLCdIS’‡7xAFKtAzABdzICdŽlCABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š™Sgldt–nwTAdB2vi‡gNYC2ŽV1d•cBAb”vEJ‡YW=šTgntB=diTE‡EJAŽi‡b•ŠCANbZdJZScNivA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšbaNcsxCiJYCc1‘ctLAN9Ž‘CgJYS9VATg”FNdKPJW9‘9A„‘Nf‘nNiBF19zFBšLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=g‡fsdtbn’1’zIBdV™‡GldZAeŽccd‘S2”™YG‡dY‘‡Ž1JBfBcviJTZYYcŽV1d•cBAb”vdntZ9=aT–bI‡š=gvcBnvšb†t9Nl‡š=gv2Z€BAs†t9Nl‡š=gvcBnvšb†t9NŠ‚bzzvcsnJ‘‡š1š•tN9Lg9†=Sc–‘Vt‘•itš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NtBfY™1ABv9šn1AF…SfJcEZSc–zac=N1dz”t2ŽWYENa1=•CdŽYGJ…YENaTf=t›Jz1T2n…YdFAcdBJC=•TNfF19AZdT–NtBfY™1’l€BAs†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡š=gvcBnv‘”V19BK›dŽ9Nc‡7CTdV1JBC–Lg9†ZWY2NVT’BI‡š=gvcBnvšb†t9eVNšN†CABnvšb†t9Nl‡š=gG‡JC–FŠNJ=E‚i‡StAŽgS9b†t9Nl‡š=gvcB…t–”Žcc‘‚bdŽEnScfL†9bNlS9ŽTYGZY9ibg9=Jdt=Zzv=bcJ9zN9‘JN‡‘YVJ=zY9ilšTbYŽ1ANK›GJ9JcŽ”c2KŽvd‘b‡–ZJYš‡”JTlKS9šV9=ntJ9zŠJJ‡cv=b99d•9Sš‡b9Tl…‚bJJB–NSY9‡b9inSSbnaZWndZd–‘Tš‡…9fZTE‡9’vVJglNfJzgNJCG•Fc–‚‘9=nacd•cJdF€‡fŽV‚fZESbzN›=‡J9‘‡SBšK™S–=xYfŽc=B‚bJ–Z†z‡S=nrJA=š›fJbBgNJZ’YVJ†zdTfbPcFSA•a9iNZbN9Td•dJdn•TTbdcJ•”t2N7C2ZA‡9J…9bnKt†=TSdzYJ‘‡fYd‘PtWl•Z’Zt9JZPNJNbJ†l9Z’•I9TlJNJ1™‚GJtCTbc9šZPB‘Jat=bdYJnt’zfZ9Fb›gn=Z–iJAFtC=J192F=Z–FW1AŽBJzGZ2zt›T=9‡JJPY=ZE‚–L•JcŽŠJd9Ž9=NJ9dnJJ9‡gc–•…1AnzYGZY9ilš9=9‘Z9=fv=‡ZS’•…9E=ŠTbncS’ZY9ilšTbNnNšNzvcBnvšb†t9Nl‡šzG92•dZšJ†9bNŠ1dNzvcBnvšb†t9Nl‡š=gvcBnvAvV1J‚ŽC–zFvT=vS9”V1J‚ŽC–LgS’NgS9b†t9Nl‡š=gvcBnvšb†t9NdS=z1tWl1Y2ŽPt†=lJlzvcL‡Y=‡F‡–1F‚bzgBšLnvšb†t9Nl‡š=gvcBnvšb†tWNSCfNaT†l7YWZat9vV…š=g9Wl•ZAŽwTbv‘‡2ZLJ†=WY2ŽA12=’tš=gvcBnvšb†t9NŠ‡–s’CABnvšb†t9Nl‡š=g92L‡cbnt9vV‡AbaT†‡7Cg=K12‘B=zGJcs…Z‘n‡–Bb‚–s’CABnvšb†t9Nl‡š=g9†BdJšzi1JBTbz1SABv9šnA1šBcBcYiT†N1Yšn™c=•K‡=™JWl1Yš”Žcc‘‚b=F‡ALWtb‡z1dBKS=e™BfŽ=9AK’t9YBd=€JšLa…A=–B2JE9cz€9iZzBtKSdszT’vPJ‘lKBcJa‡AJL9’l=1J‡iTAb‚†J=1c•lCABnvšb†t9Nl‡š=g92Ž7C9FF‡J•ŠYbzE9cBv9šnA1šBcBcYiT†N1Yš”Žcc‘‚bdŽcŽ7C9FF‡J•ŠY–Lg92L‡cbnT–NtCfnLT†==c–”Vc=BZ‚šz”vWb‡CE•VcTlšCfJTSABv›9nzcJ•C–Fr92‡SJiJr1WntC–Lg92Ž7C9FF‡J•ŠYbzE9ElnZfs†12Fc‚An–‚ABY›T•†NJ=E‚i‡StAV‘cEb†Nc–PZi‚’›9š‘ctLgNElEBiJSvšš‘Tf=xvABI‡š=gvcBnvšb†t9YB=JKTd”‘cEb†Nc–PZiJ•9’eATbNKNcng›gJYS9‘‚9NN2bŽTT‡x…š”‘Tf‘LN9ŽŽZšNzvcBnvšb†t9Nl‡AbEccBxv‘nK12‘›cJ1vWlSJ‘bVt9•itš=gvcBnvšb†t9Nl‡š=gvcBY›tsIS†n2Cf‘12‘atTNKSEb”Cf‘•S2‘KNAnVCgBZtš=gvcBnvšb†t9Nl‡š=gvcB…t–zK1’=l9=g92zdc–zicgNŠB2Yi9cs…Y2eV‡–•Š›dszG‡dYAviTfFK‚fn”J†B•t–b‘cT”FB–Viv†=7Y=”ŽcTNZB2bENEldvANit9‡iC=z”9WJWZ‘Jat9vV…š=g‡GbWYW=‘t†=’‡š™92•dZšJat9vV…šzGJ†J‡Yš‘1š•tCbzfYGl€BAs†t9Nl‡š=gvcBnvšb†t9NŠ‚bzzvcs…t–zK1ibiC2b”9WlWZW=r1WntC–ŽYfBvJgl†TczlBš=gcc‘nvš‡K1=•ŠYfJT‡ALWCJ‡wJ’=dS2”™NTlSJi9VtW–V‚–LTvWBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcLSZš1VcJNl9=g9†=Sc–F7tWnB2na92Ž7C=bacbZitš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9BKC9=g‡ALSZš1VcJ‡iC=d™cLS9AZdt9vV9=–vcB…SJ=†tJBcBfN”9WJxv‘nPcJ•tSbBF‡fL‡cbntW–V‚–LTvWBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†TGdF9‘9VtfsVN=lK‚WZ‡tš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gv†‡WZ‘‡‘1iN‚‘eivWb‡CE•VcT–FS‘zET†==c–”VtšB…SfY™JTnZW=Pc=BB=zGJcs…Z‘n‡–Bf1d™92•dZšJacbNP‚šzG92Ž‡Yš‘1š•tCbzgBAB…t–”Žcc‘‚bdVBfŽ=9AK’t9NlBdŽFZfŽ1EzVS’b1C’DA9fŽ™Nb=iNJdPviJVJ’‚‘cEb2Nd=€TJSvšš‘Tf=xvA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡šzG92Ž‡Yš‘1š•tCbzgvT=nZ’lw1W”‘‡=zGJ2z7Y=nKtšNtS‘zET†==c–”Vc=BZ‚š=”9†=dJ‘JVT’BI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=GCf‘xvš‡K1=•ŠYfJT‡ALSZ‘‡r1AFKBAZGJ2LE›cvV1J‚ŽC–ŽYGlxcGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB…t–FK1AFSCfNKTl•JibKt9vV‡šzG92Ž‡Yš‘1š•tCbzf‚AFdZAŽšc=Nd‡–s’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NlSAnEZ2znZgl†tW”‘B2Zfc‘7Y‘‡‘cdNWNš=gG1AtT1iNJdPJi9‘9i–AtJNtNTJŽZcnEZ2‘c†=’NJ™v9NzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9BKC9=gSGBWCJ‡acg”ŽSfZGT2sxvANA‡gnKBJzGTNW›T=Vt†=’‡ANGSGB1Y‘‡‘cJ‚ŽC–Lg‡Gz…›cLVt‘NŠNšNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gv2Ž=Z‘‡rtšNd‚fNGT†‡7CJzVc†=lB==E›GN…›EB†td‚FYcZ”vWbdvAK’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠCc”it2Ž‡JšFIt9N†SA”iJWlWtb1Vt9Bf›d=g9†ldZ‘‡št‘NŠNšNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†1JB‡‡šL”v†=SJAZ21=BfYbd™‡As…›T=W1’=1AvŽ›gN1vibW‡gbY‘•gYcNdYEeic–YŽ1AvŽ›gN1vibW‡gbY‘•gYcNdYEeit‘NZBdzFBAB…ZAVVc=‚V‚š=g9†Z‡cbnr19Bc›dLTSAB=BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšbP1=BfSd=–YfB…Zib‡–BC‘z1T2nNJWD’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9B…›JzEZ†n€BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gv2Ž7t–FKt9•itš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=GJWZSJš‘ItWnKCJd™EJSCcŽat†=’‡šzGTbdt–”Ž‡–NPNšNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gv2‘7YšzKcJBCš=g‡AL7Y‘1V1š•cY–=GZ†znv‘nV‡–BcB–LTvWBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡AbEccBxt–nFc=Bd‡2nEZWl‡Y2BIt†dFtJ1™Z2LSt–zW1’=1AvŽ›gN€CGeic–•WN=•”‡fNd›†lW‡gbYšsK›gN1tfYAc–•d1AZFSALYY2LaT–NlSAb192Ž79’B†td‚ŽSfZGT2sSc–‘Vt‘NŠNšNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=g9†Z‡Jš‘†9bNlSAnEZWl‡Y2•K1ibi›b•9‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB‡CdzKcJBiNšNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†‡=bI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡A‡ZCABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NtS‘z1T2‡SZš1VcJNl9=f‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvAvV1J‚ŽC–zFvT=vS9bP1inc›cZLJ†=1Y‘nV1=BJ‚šNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcF7Jš‡rt†=lJlzvcL7Jš‡rT–bI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š™CGz1YdFi1JNW‡‘l9NfBJZc•Zcgbv=JbSABvJgl†tWn‚AbT1ABv›9bt9ZI‡š‘gBšLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvAv™c=•…›2bEEJ…›9–F9f=lSAZGSGlW›TDPcgNSCfNaT†l7YWZxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB1JGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBY›T=b9=‡vCf=ŽZfŽ™Nb=xt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB…Z‘nK1i–FS‘=192•nZgl†1WNŠCfnaT†z7ZW=K12‘›cJ1vWlxZ’lw1W”‘‡=zENcz7Y=nKtšNtS‘z1T2‡SZš1VcJNP‚š=g92Ž7C9FF‡J•ŠYbZEJWl•Zi=PT–NlSAY™J2zWCJ1VcgnšCfJTSiBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=g92L‡cbnt9vV‡šzGT2ŽWC=n21JBZB9i›g•2vAN‘tdBtCfYŽcL‡cbnT’BI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšbATgb…Jbb=JšLIT‘BASfBIBdŽFvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NtCfnLT†==c–”Vc=BZ‡‘lTv†‡WZ‘‡‘1iN‚‘eivWb‡CE•VcT–FCfnLT†==c–”VtšNtS‘=192•Yv‘nK12‘›cJ1vWlSJ‘bitd•ŠYJ=L›Gl‡YGZK‡JNP‡‘lFv2=‡c–FKT2zt‡=zENcz7Y=nKtšNtCfnLT†==c–”Vc=BZ‚–=–CAB7C=‡i1dZi‡šŽFf‚‘cJBiN=zxCgJ‡‚c‚‘1tLGNiBFTTJ‡…šY‘‚bB’NJzgTTJYS9LgST•At9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBdC9‡FcgntYcn1vcs…Z‘‡‘cTN…NcN”92ŽSvAK’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnv‘nFc=•N‡‘lTvcL‡Y‘‡F1d1FBA”iTWlxvAZI‡–•tBANwC’‡YYAvi‡Gd‘NcbE›gbWZA•’Tf‘B2nTEBWCT=P‡bBY–Vic2ŽWCcŽL‡JNW‚š=f‚AFStb”‘1šBJCd=–YŠLnvAZŽ1i”FB9zFBAB…Y=n‡–BbCd=–YŠLnv‘nPcJ•tSb•TSiBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=GCf‘nvABP1A‘c›=BF‡fsdtbn’cgnB=zGJcF19š–F9bNl›9‘–vcB…SJ=†tJBcBfN”9WJxv‘nFc=•1d™T†‡7C=nK12FZC=•TS’lntGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NtS‘=192•nZgl†td•…CfYŽ‚AF‡YW=‘‡–BcBcZg‡fZ€BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†1JB‡‡šLgZ2Ž7c–”V‡JN†S‘zGZWl‡J†NacdBfYb=T‡fZx9AL†‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvi•AJcŽvW‡x‡c‘1tLGvAdBd=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnA1šBcBcYiT†N1Yš”Žcc‘‚bdŽcLSJšFF‡J•ŠY–LGt2•WY=9™Td1FS‘zET†‡SZ‘JItdBtSfZGZ2n…Y=n‡–BbC=•TS’Nnv‘nPc=B›cJ1vWlSJ‘bit9NtBAZEt†N•JšFYc=•P‚–sFvcBY›T•†NJ=E‚i‡StAVAtAJrNc–PZšŽ€J‘l†Bcbc‚šsEtAPS9ZA‡JBZSdsTNf=†CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9YB=nbJ=vAtAJrNc–PZšNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†td•…CfYŽcL‡cbnt9vV‡A”iv2Ž7CdFw1d1FS‘zET†==c–”VtšNtS‘=192•E›cZPcJ•tS–ŽYGNnv‘nK12‘›cJ1vWl9J‘1V19‚FSšŽgvcLWY=‡r1A‘cYbe™BfŽ=9AK’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB…t–zK1i–FS‘=192•nZgl†1cFB2nKcLSJšFAcdBJCšz”t2ŽWYT=PcJ•tS–ŽgvWlWC=‡Kt‘Zitš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšbATŠL•t†DPSc•rTAbWS2JEtAs=J‘zŽTAdIC–sE12F‘‡cbT‘Y’C™L=‡ABZCABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9BKC9=g‡A•SJib’‡–•PCšz”t2ŽWYT=PcJ•tSbBF‡fŽdC9‡itW–V‚–LTvWBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnZ‘1™cJB’Cšz”t2ŽWYT=PcJ•tSbBF‡fŽdC9‡itW–V‚–s’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnZAŽLt9N†S‘zGZWl‡J†NacT”FS‘zT‡fZnZgDFt9Zl‚–=”‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NlBdVPSE‡†‡JY‘‚GJE1’b€J‘l™…AJJ‚9s•1APJšB‡JBnCcJzxAŽ€JAnaBtKSdsTNfz=StsL…A=SdsE9cz‘CcZIBcJ•S–szB2Ž=‡JJŽTAbWC7L•S2B€1c‡V9cs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”t2Ždtb‡F12=ŠYfNaJ2Ž€BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†‡=Nl‡š=gG1‘‚G=NJ=ŽSgJSCc„ATŠLJNJz‘‡T9‘‚99‘NG–™NcsgvW9Avš”‘‚TnrNT‡GBTJ•9š9‘N9NGNTB‘JgJVY2‡gS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnK1d•CfJ’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9YBW9š‚T”‘CšNŠNT‡gvWJ•9A‘TGb€TJZlBi9‘‚99‘NE9VNc„ACg‡YN=v‘cc9ANElFTWJ‡‚ce‘c2‘INdVPJTJSBc9‘NEbbN=zTcW‡x…’‡gS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡AbEccBxv‘nPcJ•tSbBF‡fz7Y=nKtW–V…š‘9vEBx9š”’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NtYfbGCGzYJgJ212šFYfbET2Žxv‘nPcJ•tSbBF‡GZWY2NacbYšC=BF1’J…Z‘n‡–Bf1d™T†‡SZ‘JacbYšC=•T1’l€BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠCfn”T2Ž=BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšbATŠL•1Az=JšLI‡JBS‚9s•9fL€‡cL‘BJBxCšsLNA‘€SEJVTAbvSšs=S’J†CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcLWY=‡F‡f‘c›Je™NE‡dZAŽrc=N†S‘zGZWl‡9AK’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†‡=Nl‡š=gG1‘‚G=NJ=ŽSgJSCc„ATŠLJNJz‘‡T9‘‚99‘NG–™NcsgvW9Avš”Ac=NSNdKPBWJ•9š9‘N9NGNTB‘JgJVY2‡gS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”YfBnvšbATgnYcNL›2sANJZKCT9’C2=™12‘†t9•L‚2bvC2s•NAF‘NJlLC=tš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvW=nvšb†TGdIC’”’‡2‘ic9ŽLCddiCf=ŽtfŽL1czLCgB7‚fV’JfsVN=laCš=”CEn•9fFI1TBK‚–=9C2Ln12F‘NJlLC=tš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gv2Ž7t–FK‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšbP1inc›cZLJ†=1YWJA‡–BKS=zTSGJdJ’•it‘Zitš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvW=nvšb†TGdIC’”’‡2‘ic9ŽLCddiCf=ŽtfŽL1czLCgB7‚fV’JfsVN=laCš=”‚fŽ…C2s™N7sK‚–=9C2Ln12F‘NJlLC=tš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9eV‡š=gvE‡Y…A=ABŠL•›fB‘1cNr‡JBxCAJEc†b€1J•šBc‘1B–„Pfz€1cNr‡JBxCAJEc†b€StsKT‘B7C†J=1c•€‡9LšBcbl‡AJ=‡AB=1EZI…AJ‚†JESA•€‡JbBc9’S™L•‡fF’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡‘zE›GzScGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NlSAY™J†=dCJ‡Fcg”‘B2ZGCfzS9ABPcdBfYb=TSiBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvW=nvšb†TGdIC’”’‡2‘ic9ŽLCddiCf=ŽtfŽL1czLCgB7‚fV’JG‡AtEzLCddiCf=ŽtfŽL1czIBWJ9Cfš‘NAFLC‘ZaSEn7CcBntfFIt9•VC–zaC’”AxAŽVtJZaSš=7C†9‘9f‘acW•xt9Nl‡š=gvcBnvšb†t9Nl‡A‡TvcBnvi•AcTNc›cn€StsKT‘B7C†J=t’Z‘19b†‡cbšC™L=SGn‘‡TBP…AbdC†BI‡š=gvcBnvšb†t9eV‡š=gvE‡YY9z99cJEtAs€J’‡BcbšC™L=SGn‘‡TBP…AbdC†BItš=gvcBnvšb†t9NlBdVPSE‡K‡cJJ‚9s•1AP‡cbTAbWScJ•J2=€1cNa…‘BGCcJE1’b€9iBI…AJ†‡AJLtfz–NŠK‘1†=lNcb=T–NzvcBnvšb†t9Nl‡šŽFxA‘atcFLCb=rCcF…xA‘zt’nL‚2bYCcV’1†lKN‘bxt9Nl‡š=gvcBnvšbPc=•BAb1t2Ž1Yd1Vt9vV‡šzwtEBNSdbšTJZnB–‘rSABNZfKAT9ZlNd‘–ZcF€BAs†t9Nl‡š=gvcBnZAŽLt9N›2Z”tWl7Y‘nV1=BJCšzGJWZWZAŽFc=1FSfZgSABvvš”V1J‚ŽC–LgS’l=BAs†t9Nl‡š=gvcBnvšb†t9NlSAZGSGlW›TDPcg”‘B2ZGCfzS9ABxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnZ†Nxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NlCW‡x…‘1‘NJNINcn=›TJ‡SE‚‘‚G=2NgZgvšzFBšLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšbaNJ=zZiJY‚E”‘C’blNElFBW9’BJDA1EbNNiBFTT‡Y9Ae‘NG=‘NcsŽvTJV›E1‘‚†bZNT‡gvW‚’›9šAt™KiN9ŽzNd‘wcfŽiCš•PBT‡1CfLnNAFLC‘Za‚9=ACGJIxAŽPc2zVSiB™C’vAxAz†t9=aT–bI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=g‡2‘†‚czKSW1IS’9AcfL‘NczIB–ŽaCfLnN’lK17sLCdIS’‡7xAFKtAzABdzVCAZ”9†BW›2sATgNdYAZFNTJ•J’eŽ1šBBšŽLT†‡79i=P1Wn›dVŽCGl7tb‡’19•Šv=nbtcFYvcs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9N2CcBŽS2L‘c7sKSW1IS’9AcfŽCiNL‚dL”S’JnB2sA1WNI‚WJ1C2ŽxS†‡At†lI‡–•tBANwC’‡YY2ZV‡–BYJ=zNcz7YWlA‡gNc‚cbEZ†JdY‘9šTgbK‚fn”J†B•t–nŠ9dJnCdŽlCABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡‘•ZCABnvšb†t9Nl‡š=gvcBnvšbVT’BI‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9NlBdVPSE‡K‡cJJ‚9s•1AP‡cbTAbWScJ•J2=€1cNa…‘BGCcJE1’b€9iBI…AJ†‡AJLtfz–NŠK‘N’J9NED™‡dNzvcBnvš”FvABI‡š=gvcBY›csŽvA=l‡š=gvcBxS9ZLC2s9‚fBxZfŽNiNLCfnltš=gvcBnvšbŽt9JŠB‘=1t2•79šbPcdBcY2bET2ŽnTA=‘B†JESAePJ‘br‡cJa‚š„Pfz€JA‘†Bcb…StL•1’J‘‡cbTA=‘B†JESAePJ‘br‡tKSdsE9G”P9iBV‡JYFB7L=JEb€J‘nA‡JY’‚–NŠSbzGtcBSZ‘1™1JBCfNFZf‘aN=•aCd=ACGv’TfF‘NŠsIBW9’CczŽcfL‘tEnaCcs9C’n™NAFA1TBABd=wC’n™NAŽVtc‡KSšdiC†D’ZfŽrN7sI‡i‚iCc‘xxAŽ™c2‡a‚dL7S’JYTG‡AtEzPBJICfAxAs†NiNLC9KF‚fN€JšLITAJ™‚7LE9f„PJ‘lšBAs†t9Nl‡š=gCABZtbnI1AšFYANFvd‡=ZšFK1š•t‚f”™N–Lnvšb†t9Nl‚9Ž’CABnvšb†1š•cScnGCfznZ‘Ž12‘YfbEEJnZW=2cT”FBcYi9†=dJšVtšNtS‘z1c†l‡Y=JVvA=l‡š=gvWBgS9b†t9Nl‡š=gvcB•J‘=†tšBcBfN”9WJxv‘nPc=•S‚bd™JElxcGNxt9Nl‡š=gvcBnvšb†t9Nl‡AZGSG=7YAN†12‘cYš=bJWZ‡Y=‡’‡–BKB2nz‡AF…Z‘nK‡f‘KS=zTv†lW›9nK1=•ŠYfJTNfFYvšbT9Zl‚–s’CABnvšb†t9Nl‡š=”Y–LgS9b†t9Nl‡š=gvcB…tbnI1J•NBblKc•dcbnItšNPNšNzvcBnvšb†t9Nl‡šzG92ŽdCcŽrc=1F‚fNgvT=nvANaT’BI‡š=gvcBnvšb†t9NtS‘z1c†l‡Y=‡21š‚F›cZgvT=nvANaT’BI‡š=gvcBnvšb†t9BKC9L”v†=SJAZ21=BfYbd™‡As…›T==tš‡SAJwZENNYibWTfŽSAJwZENNYibWTfŽSAJwZENNYibWTfŽSAJwZENNYilVTA=1‘zg‚’l…vi=Vt†=’S‘zGJWn•JšFKT–NtBb=192z•Z‘‡wt‘NKNšNzvcBnvšb†t9Nl‡š=gvcBnvi•ANcb•viJVN2Y‘‚f=A1J•l‚W9ABE1‘ctLrNiBFTTJ‡SJ‘cJBnN9V™xi9‘9A„‘N’bA9‘‡–CG9’‚2FŽNG‡IBW9’CczŽJ9Lnvšb†t9Nl‡š=gvcBnvšb†tdBtCfZLCfzSJW=V1šNl9=g9†Z‡cbnr19Bc›=BwZ2Z€BAs†t9Nl‡š=gvcBnvšb†t9NlS‘zGJWn•JšFKcgNŠB2Na9cBv9šbP1=BfYbd™SfŽWYENFcbZitšNzvcBnvšb†t9Nl‡š=gvcBnvi•ANEb€vTJ™JšV‘N†JANJdPSWJV›9‘‚dLNElFtWJ7›9–‘CAdiNiBFTTJ•19Y‘‚g‡WNEnxSgJV›9‘1†=lNcszYiJ‡SJ‘1†=lNJzgBWJYC9ŽgS9b†t9Nl‡š=gvcBnvšb†t9Nt›2J1TcBv9šnw‡–•…Yf”™›G‡dY=‡Ftš•ŠCANfTb7C9‡šc=N†C2NF1’lxJGNxt9Nl‡š=gvcBnvšb†t9Nl‡AbEccBxt–V1AFŠB2NF‡ALWYAŽwT–NlC2v™CGJSZidi1’=W‚bl9Yg=NvAV’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnK‡9BcSdLg‡GJScbnw‡–BfY–=gYEJ‡cG•L1J‚‘SAYi9†=nvAN‘tdBtCfZLCfzSJW=’1WN…Y–ŽgvcL7Y‘1V1š•cY–ŽgvcLWCJ1V‡b•…BJeic2•WScK’vA=l‡š=gvcBnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvcBnvšb†c=B›=z1‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=GJWZSJš‘ItW”‘CfZ”TWl‡cbb†Tb‚‘Sf‡G‡G=Sc–b†t†dšS‘zGJWn•JšFKcgNŠB2Na9ENnv‘nA‡b•tBAZ19ENnv‘nFc=•tYcNLNc‡dC9‡Ft‘Zitš=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9NlBdVPJi•†T‘BZ‚7L=‚†”PJ‘lI›czPB9=–CA=x›2LA17saC–L†Y9F9JT–‘N†JANJdPSW‚’›9šATŠLSN===TTJYY7„‘NJNIN9ŽF‡i‡‡v‘YATŠL”NED™Cg9‘‚99‘N†JANJdPSdL=…i•rTAdIC†J•T’l=19zz…AbWBEJL1AB€Sc‘†‡tKSdszxAF‘19sV‡cbICAJ•TfPJ‘zŽT‘YšS2JL1AB€Sc‘†9cs†t9Nl‡š=gvcBnvšb†t9NŠ‚bzzvcsn9‘nA‡b•tBAZ19El=BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBdJiJwc=•ZCšzGTbdt–”Ž‡–N’‡šz”t2Ždtb‡F12VFY==1tEl€BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB…Z‘nK‡f‘KS=z1TT=WY‘n‡–BKSdsr‚fLScbzVcTnc›dLgSiBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gv†lSS9bIcT”FYcna9cs…Z‘nK‡f‘KS=z1TElvJglt‘•itš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcL‡YW=‘12VFS‘z1c†l‡Y=J†9bNŠCfJ”v†N7Y=nKtšN2B†‡n‡AFYvšbPcdBcY2bET2ŽWYEN’cbNPNšNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB…ZšFA12š‘‡=zGJWn•JšFKt9vV‡šzGT†‡7CTJ2cdBcY2bET2ŽE›dndT’BI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†‡=bI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†c=B›=z1‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšbPcT”FBcnKcLScbzVcTnJ‡‘lTvcLSZ‘1™1JBCbe™CGB€BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB…ZšFšcdNl9=g‡f•SZš=†Tb•N‡š=z1’J…ZšFA12š‘‡=zGJWn•JšFKTf=WS9=”92zWZAŽ’t9NWB9zG92ŽdCcŽrc=1FBA”itWl€BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBScf•KcE=†S‘d™YcLYvšbP1WNcYfN”JWlYvšbP1A‘cYfZ1t†J1Y‘z1A=PNšNzvcBnvšb†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšb†t9Nl‡AZENEzScbbItd‚FYcZ”vWbdv’BP1A‘cYfZ1t†J1Y‘z1A=PNšN†CABnvšb†t9Nl‡š=gvcBnvšbATŠLzxAF‘19sV‡JYš‡šs•‚AsJCb–Ati1PNcbTt–NzvcBnvšb†t9Nl‡š=gvcBnZ‘1šc=BNCš™Z2L‡S9nr1W”‘BJzETWlnvš=aTf=tS‘z1c†l‡Y=‡21J•lB9zFtcFYvšbP1WNcYfN”JWlYvšbP1A‘cYfZ1t†J1Y‘z1A=PNšNzvcBnvšb†t9Nl‡š=gvcBntb‡‘1incY–Lg9†‡dcbn’‡b•Z‚šz”t2Ždtb‡F12VFY==1tEl€BAs†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvš”Ž12FCfZg‡AL7Jš1VcTnCfNFSiBg‡As†t9Nl‡š=gvcBnZ‘1šc=BNCš™Z2L‡S9nr1W”‘BJzETWlnvš=aTf=tS‘z1c†l‡Y=J‘t†=nCdŽgvcL7Y‘1V1š•cY–ŽgvcLWCJ1V‡b•…BJeic2•WScK’vA=l‡š=gvcBnvšb†1JB‡‡šLg9†=Scb”Ž1Aš‘‡2ZLZ†=vJgDFT9NlC9zzv†zdt–z’1WNNCAZ”t†l79ABP1WNcYfN”JWlE›dndt‘N’‡š™Z†NWCJ‡cd•PCdL9Yg=vJ–bV‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcLdZA•V1’dV…‘e™92ŽdCcŽrc=Nl9=g92LScbzVcTnJNšNzvcBnvšb†t9Nl‡A‡ZCABnvšb†t9Nl‡š=GJ†NWY=1’vA=l‡š=gvcBnvšb†t9Nl‡š=g9†ZWY2N†9bNlCW‡Y…A9‘Ci‡KNdKA…iJ•9še‘1JNNdŽTCg‚’›9šAt™KiNEb€vTJV…AŽ‡J‘nzNElzBWJSvAš‘cdNANJ=ŽCivšvš”Ati1PNcbTtgJVSE1‘cdNLNJzgBWJ‡‚c„‘CA=ENd=gZW‡xN7K‘1JN”NJzgTW9A‡E‚‘‚f=ANJzgCTJŽY2‘NdB‘NiBF‡dzw‚šLnvšb†t9Nl‡š=gvcBnvšb†1JB‡‡šLgZ2Ž7c–”V‡JN†SA”iJWlWtb1Vt‘NKNšNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9NlSAn1T2FnvivFt9BKBfNG›G‡SZ‘JItczi‡š=zBAB…ZidŽ‡–•ŠYcZgSiBgS9b†t9Nl‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9Nl‡š=gvcB•J‘=†tšNtS‘z1c†l‡Y=‡w9b•Yb=19†l‡›2„AcdBcY2bET2ŽW›cBVt‘•itš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NtBfY™1ABYSWl†t7KPfz€Ji=P…‘B…S2J•S2B€1Tbz…‘Bn‚šs=1c•€SEJABJBPSŠL•1A==…i•LScN‘1J‚ŽBAnGcLS9ABzNgZgvd=gtENnv‘nPc=•S‚bd™J†zxJGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnv‘nš1inW‡šŽrYfB……šsl‡A‘tCfZLCfzS‡c=‚9s=S’J‘SEJABc9F‚†JE9G”P‡JJŽT™KCT”FCJzL›Gl7CJ•VCd=–Cc„šZf‘aN=•z‡šzwC’n™NAFA1TBz‡šz’Bbl‘tšbaT‘‚‡šsE9fL=S9b‡c‘lScJLSGJ=tšbaviDPNfsg1‘‡cTdYAT–N–NdKPJWZIvAv‘‚f=ANJzgCTJ7›9–‘cdNANgZgvšzw‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=g9†ZWY2N†TfV‡šPJA‘†Bcb=CdszxA‘€1E=I‡cbWScJTNGJ‘9i=ITAJ•S–s•t2dP1cN‘BJBZ‚7LEt’b€‡En™…‘BvC™KPfz€SE‡š…Ab…‚ŠLzSfz€J‘nA‡JY’‚–„Pf‘zt2•SZš=†Tb•N‡iJYY2‚‘CšswNdVP‡TJIN2V‘NEbbNdKA…iJ•9še‘cdNNT‡=Bš=”92zWZAŽ’t9ZJY9F9JcdšN–Ngt†zitš=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9NŠCfn”T2Ž=BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB…Zibwc†=lBJlTvc’N’=NNc”™JgJ‡C9‘‚G=ŽNEb€vTJ™JšV‘cc=’NdKA…iJ•9šešN–Ngt†zitš=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9NŠYfb”t†‡d›9n‘c=•W‡‘n1SfzSc–”V1J‚FB9Lg9†ZWY2NVT’BI‡š=gvcBnvšb†t9eVtš=gvcBntglxvA=l‡š=gvE‡xScsxt9Nl‡š=gvEbnTA=€BŠLE9fŽ‘Ji=P…‘B…S2J•9fL‘9iBšBcJ•S–s=t2=€1cN™T‘BvBGBI‡š=gvcBnvAs†99•…CfZ”J†=7S9nw‡–•…‚fnL1šLnvšb†t9Nl‚9Lz–Lnvšb†t9•ŠYJ=L›Gl‡›9nw‡–BfYfbETcBSC=‡‘cTNt‚f”™NfBdCJ‡F1inKB2nz‡’l=BAs†t9Nl‡š=gvcBnt–zK‡–•c›cnzv†zdZš1V1JBNNdsz9WnSc–zw1J‚FB9s’CABnvšb†‡=bItš=gvcBnvi•ŽtABI‡š=gvcBnvAs†NdVPJTJSBc9‘1Wn9NEl=YW9‘9i–AtJNtN9ŽzBgJIC9–‘‚G=…NJdPBW‡xN7„Ac2J‘NTJŽZT‡xN7K‘1JN”NdKA…i9’Y†9šN–NgN=™cWJIvš”‘‚f–‘NEn€JW‚’›9š‘Tf=N=zFvT‡x19”‘1T‡=N9VATgJ‡›J‚‘Tf‘2NJdPBWJYBcVAT–N–NTJTCšNzvcBnvšb†tA=ŠvcNGZ†=‡Jil†td•Š›cbENTlnt–V1A‘KBJzFZfŽVCšŽLC†lw‚fFnZfsVCš•a‚TZACfz79f‘zc=lKS2n–C†9‘9f‘a‚GzABd=wCfAxALAtšZL‚2b9CfšTf‘K1dZABd=BANLCGJdZAnPB9Ž™C†‡StGlI1=•PB9KiCcsY›2ŽAttsKSdz7C’‡V9fŽN’nABd=BANLCGJdt–ŽPB9Ž™CfL7YAL‘N=Za‚El2CfA9fL‘tiNLCšŽwCG‡nxAŽrt2nIB†lvCfe’CšLnvšb†t9Nl‚9=bv†=Scb”Ž1Ašš‡‘=1t†=‡cfLxt9Nl‡š=gvEbxST•xt9Nl‡š=”vWb‡CE•VcE=Š›2ZGZWl•Jš‘†c2FcBJdi9†l7YWZ†cdBcY2bET2ŽW›cBP1š•…‚fna9T=…›cNV‡EBI‡š=gvcBnvšb†t9BcNbzETcs…Yd‡Pcc=ŠS‘z1c†l‡Y=‡wt†=’‡šzGTbdt–”Ž‡–N’‡šz”t2Ždtb‡F12VFY==1tEl€BAs†t9Nl‡š=gvcBnZAŽLt9N†SANLJWldc–z‘cgNSSfNzZT=vJ–bV‡EBI‡š=gvcBnvšb†t9Nl‡š=gv†lSS9bIc=‚ŽBAZ”SAs…ZidŽ‡–•ŠYcZgS’l=BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBdZA•F1WNW‡AnLJWNnZJ1šcTncBAZGCG‡7ScBaNdKPYiJŽTš–‘‚ŠLKNElzBWJSvAš‘1T‡…NdL€Z==E92d‘cdLNNc”™JgJ‡C9ATŠLZNdLGTJJbSb–‘NEbbNTJTCiJISTY‘‚f=ANJzgCTJ‡JiY‘‚G=…NcsLCW‡xZš‘Scf•KctLE9†‡=9iBVTAJ•S–s•‡f‚PCJzPT™KC†=W‚–s’CABnvšb†t9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†t9Nl‡š=GJ†NWY=1’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvš”V19•…B2ZFv†JScfN†9=•S=z1vWl•Ji=‘tšBKBfNG›G‡SZ‘JItczi‡š=zBAB…ZidŽ‡–•ŠYcZgS’l€BAs†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡A‡ZCABnvšb†t9Nl‡š=g9†N•c–Vt9vV‡‘‚ŽYgBgS9b†t9Nl‡š=gvcBSCT=Fc=BfS2bgvcs…ZidŽ‡–•ŠYcZgv2•W›9bP1TncN9=–YŠLnv‘”™cJBYJzTCgBgS9b†t9Nl‡š=gvcBnvšb†t9BKC9=g‡AL•Y=1‘9bvVBšL1‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=GT†‡7C=nV12FcC–s’CABnvšb†t9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†t9Nl‡š=GCf‘nvAeV1A‘KB–Lg9Wn‡J’eŽc=NPSblT1AFxcGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnv‘”™cJBYJzTvT=nt–nFc=Bd‡2Yiv†N•cbbIt†dF1ANF‚’‡…›EB†td•SSfn”J2ŽxJGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnv‘ni1J•Yb‚ŽYfBv9šbP‡f‘f‚AZEJ2nNZWl‘t7KPf=g1’J…tbz1d•cCbBwZ2ZYSc‡ABd=PCds’CABnvšb†t9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†‡=bI‡š=gvcBnvšb†t9BKC9=g‡ALWt–zV12FZJlT‡GBWCcŽ‘‡–B‡CdL1‚šLnvšb†t9Nl‡š=gvcBnvšb†1iNtSfZGCfz€S†l’1A‘KBcZfE=xv‘ni1J•Y–L9‚šLnvšb†t9Nl‡š=gvW=gS9b†t9Nl‡š=gvcBSJ’•wc=NŠ‚bzzvcs…t–nF1J‚‘Ybl9YfFWt–zV12Ft›9zFCgBgS9b†t9Nl‡š=gvcBnvšb†t9•Š›cbENTl1Yš=ItdB‚fYi9El€BAs†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšnFc=•tYcNLNfB…Z’•V1iNZNšNzvcBnvš”FvABI‡š=gvcBY›csŽvA=l‡š=gvcBxS9ZLCiZ–CcAcfL‘t9ZPB9L™CA=ITfF†‚2FLC9KICfLx12ŽrtJ•KSšLACczn‡2Ž™‚GnaCcs9CGNSNA‘†tA‡KSWZ™CfBYBšLnvšb†t9Nl‚9=bv†B‡c–z1=NlSAnLcLSJWdš1=B’‡AYi9†=•JiJat9sTNfB€9iZŽBc=x‡’J=v’J=‡cbZ2•J–bI‡š=gvcBnvAs†99•ŠSfNLZ†Znv‘n‡–•t›9=GZ†=WC91‘t9sETc•=J‘bŽ…‘BC†J•vEDPJ‘lzBJBfBGJEvE‡€…i•rT‘Bv‚7LTfs€Jš‡V9’nPB=zwS’JY‚†l†t†nVSbdiC†nxc9Lnvšb†t9Nl‚9=bv†=Scb”Ž1Ašš‡‘=LE‡7Z‘‡12=–CGnI›2‘ztdZVSbdiC†‡•NA‘zc9ZLCd=aC†9‘C2Ž™‚GnaCcs9CGNSNA‘†tA‡KSWZ™Cf•712Ž†TGzLC–Ž7C’1‘JfŽLNT9V1AFcCg‚’›9š‘cdNLNJ=zcW‡Y…‘9‘c†J=c2‘f‚AY™J9Lnvšb†t9Nl‚9Lz–Lnvšb†t9•ŠYJ=L›Gl‡›9nw‡–BfYfbETcBSC=‡‘cTNt‚f”™NfB1Y2Žwcg”ŽSfZGT2s1Yd1V‡–•nCšzGNE‡SZ‘‡2‡9‚Ž‚šŽgvcL‡cb”V1A=Ptš=gvcBntGNxt9Nl‡š=gvcBnvšnL1WN…Cb=ET2snvABPcJ•tYfNzv2•W›9bP1TncN9=–YŠLnv‘”™cJBYJzTCgBgS9b†t9Nl‡š=gvcBnvšb†t9NtY==E›gbS9š–Ft9•YfNKE=Sc–nicJBC–Lg‡fN1vANit9Nd1‘•f›fN…›EB†td•SSfn”J2ŽxJGNxt9Nl‡š=gvcBnvšb†t9Nl‡šz”c2•7tb‡Kt9vV‡AYi9†=1YšzK1šBSbd™Jcs…›T•aT–NlC=•gfFYvšbP‡f‘f‚AZEJEl€BAs†t9Nl‡š=gvcBnvšb†t9NlSAZLZ†NdJ‘J†9bNŠ›2Z”t2‡WCJ‡’1dBfS=zT‡AFv›cNit9Nd1‘lF1’Nnv‘”™cJBYJzTSiBgS9b†t9Nl‡š=gvcBnvšb†t9NtY==E›gbS9š–Ft9•YfNKE=Sc–nicJBC–Lg1’J…›EB†tWb’B9zFBAB…tbz1d•cC–L9‚šLnvšb†t9Nl‡š=gvcBnvšb†td•SSfn”J2ŽnZgl†1iNt›Jeit2ŽWZ’•cTnJCšzF‡AFYvšbac–N†CdŽgvcLdC9‡i‡bBJ‚–s’CABnvšb†t9Nl‡š=gvcBnvšbP‡f‘f‚AZEJcBv9šnw‡–•…‡2NLJ†B7Zš‡rc=N†CdLT1’NnvAZWt‘NW‚š=g9Wn‡J’eŽc=NPNšNzvcBnvšb†t9Nl‡š=gvcBnv‘”™cJBYJzTvT=nt–V1AVF›Jz1v†N‡JšFKtšNW‚dzFBAB…YEB™t†=’‡šz”c2•7tb‡Kt‘Zitš=gvcBnvšb†t9Nl‡š=gvcB…tbz1d•cC–=–YfBWY‘nFcgN…CfNG›f•‡Y=JItWbiCdŽgvcF1Z†NaT–NlSAZLZ†NdJ‘JVT’BI‡š=gvcBnvšb†t9Nl‡š=gvcLdC9‡i‡bBJ‡‘lTv†zdt–z21A‘cBAnGZ2zS9ABacf=W‚š=g‡fN1ScNit9NtY==E›gbS9AK’vA=l‡š=gvcBnvšb†t9Nl‡š=g9Wn‡J’eŽc=Nl9=”TWlWCg=Fc=•Š‚‘=ET2ŽxvAv’t†=’‡šŽ›gB…›EB†td•SSfn”J2ŽxJGNxt9Nl‡š=gvcBnvšb†t9Nl‡šz”c2•7tb‡Kt9vV‡AYi9†=1YšzK1šBSbd™Jcs…Y’BaT–NlC=•”BAFYvšbP‡f‘f‚AZEJEl€BAs†t9Nl‡š=gvcBnvšb†t9NlSAZLZ†NdJ‘J†9bNŠ›2Z”t2‡WCJ‡’1dBfS=zT‡AFxScNit9NWB9LrfFYvšbP‡f‘f‚AZEJEl€BAs†t9Nl‡š=gvcBnvšb†t9NŠ‚bzzvcsnc–nFc=Bd‡2nEZWl‡Y2BIt†dCdŽz9†nScfL‘t†VS9zFNfLdC9‡i‡bBJB9zFtE‡•9ANit9NtBc”™92Ž1YA•š1dN’‡šz”92Ž7c–bVt‘•itš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9•…CfZ”J†=7S9nLcJB›=z9‚šLnvšb†t9Nl‡š=gvcBnvšb†‡=bI‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9NŠ›Jz19WbWCTZ†‡–•…YJz9‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9szT’vPJ‘lKBcbNSŠLEBc‘Lt†‡dJiJP1™LEvE‡€9iZzBcbEBJNrCcznC2ŽictsKBJz1Cc‘YNAFVTGnPB=diC†‡•NAFatENVNTJŽZT‡n‚9Y‘N–K‘vA=l‡š=gvcBxS9nz1WNcBJz”9fŽrtJ•KSšLAS’JnZfL‘t’nIScsYC2B™C2FLC‘ZKBg‡7S’Jn‚2sVN9ŽKC=z–Ccsn‡2ŽPC’zKSWBvS’JnB2sVN9ŽKC=z–Ccsn1šLnvšb†t9Nl‚9=bv†B‡c–z1=NlSAJ–ZcB•Ji9Vc=BdCfNzZfŽšN2nPB9=™C’D‘TfŽacdZLCš=2C2‘I9=dATg”VvA=l‡š=gvcBxS9nl1šBf›J=EYfB…tfLt9BKBcZGJ2FSc–=†Ncn=CTJYS9KAtAJTNJ™9TJŽvše‘NEbbJAJzEZlCABnvšb†t9NI‡‘b”v2•WC9‡št9NtN–‘zv†l7C=nKcWnc›9=€J‘li…‘YšStLzC2L‘JAZPTAb†SŠL=1c•fS2sA1=bxt9Nl‡š=gvEbnZ9n’cJ•…SfnTvcL=J–=†1J‚‘YbzE‡fŽWS9ZKSWBvS’JnB2sVN9ŽKC=z–Ccsn‡2FLC‘nSNdV™Y–NzvcBnvšb†tA=ŠvcNGZ†=‡Jil†td•c‚bBGYENnt–V1A‘KBJzFvWb•J2ZVcdBdCfZ”9fŽNiNLCfn–C’1‘JfŽLNTBaCcstcJZJBšLnvšb†t9Nl‚9=bv†B‡c–z1=NlSA”™c2‘WY=1VJšNŠ‚fna92ŽSY=‡Ft9s=1†n‘1cB…A=x‡’J=v’J=‡cbT‘‚i‚GJz…’J=9iZrBcbNSŠLEBc‘‘S9L†BcJgBcJ=1c•€JiNVBcdPBcJEB†J=1E‡KT™KSds•B’Z€JiJi…AbEBcJE9cL=‡cbT‘B‘BcJEY’n‘S9‘†…‘B7B–s€vcB‘CTBLTA=‘‚–sTNGJrZG‡AtEzICAbrC†lY‚2ŽšN2nIB†naCfFSZf‘Itc‡VCd=–C’lItfŽ™NAFVB=z–CG‡V‡2L‘t9ZL‚9L”S’JnZf‘ITfNxt9Nl‡š=gvEbnZ9n’cJ•…SfnTvcL=Jdz12‘dC–=GCGJdZ‘‡ac=•n‡i9‘BE9‘‚9N”Nd=Žvi9šti9‘NEbbN9Žzti‡YNW9‘Tf=€NcsFtgJ•N2–AtEbgNTZxNT9‘‚99‘1†bcNdVANTJ•…i9‘‚tLJNiBFTTJSNdY‘NE9VNEl•NTJSv‘”‘NEbbNEDPCgJICtKAtE=–NJz‘YgvšvšYA1†J‡NdKASiJYST‡NT™KSdszSGb€‡cL‘BJYšS2JLc2L€Ji‡VBcdiC2J=CEJ’CABnvšb†t9NI‡‘b”v2•WC9‡št9NtSfZ”9†=nZš‡F1A‘fN9=€Jš‘‡JBZ‚tLE›fF‘19bV…‘BvSEJEZ†Z‘JšbAT™KSdsE9G”P9i•IT‘Bf‚bN™S’‡S›2L‘TGnV‡šz™‚f•‡YAF™t‘=xt9Nl‡š=gvEbnZ9nFc=•tYcNLNfB‡c–zFcJ•P‡i‡Y…‘9‘c†J=NT‡FCTJSvšd‘‚gnN9Ž‘YW9‘‚99AtEbgNTZxNTJ•…i9AT–BvA=l‡š=gvcBxS9nl‡–B›c”i‡GznZJ1šcTncBAZGCG‡7S9ZVC–zaC’”AxA‘z‚G‡KSgB™CG‡nTfŽ‘TfzPBW‡”CcB•–Lnvšb†t9Nl‚9Lz–Lnvšb†t9•ŠYJ=L›Gl‡›9nL‡b‚‘S2ZGCG‡7S9n‘1WntCfYVZ2=7Y‘zK9cšFYcnL9†zxv‘”šTJN’‡šz”S’•YvšbP‡9Zn‚š=g9WJNSEB†td•c‚bBGYENYvšbP1WnSCcY™JWlEZgl’T–NlSAJct2•7CcZK9bZl‚š=GZ†=WC91‘t9NtSfZ”9†=vJ†Zdt‘bI‡š=gvcB=BAs†t9Nl‡š=gvcBnZAŽLtš•Š›JzE‡f‡7Jš1VcTn‡==E›GNxvANA9–‡š‡JlKYGnvYdzA‡b‚‘SANwYf=1Z†NIc–BZ‚dLTBAs1Z‘b™t‘‡‡b•f‚As1Z‘b™t‘N’C‘•G9EnxJ†•dtcŽš‡JlKYGbv›WZA1JNW‚š=g9Wb•J2•š1dN’‡šzGYc•dZšFIc=•N‚š=fv=NtJcZ2JTlcJJeVJNtZJ‡Tt‘NKNšNzvcBnvšb†t9Nl‡š=gvcBnv‘nK1dBcBbzENTlW›9–Ft9‡š‡–s’CABnvšb†t9Nl‡š=gvcBnvšnL1WN…Cb=ET2snvABP1=BfYbd™SfŽW›9n1’=lSAb192Ž79AV’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnVc2=lCšzGCglSJib7TJ1V…‘lT9WZN9ilP1WnSCcY™JWlEvšbLt2=lSAb192Ž7J†NcbZ’9z”‡’•x›JnAc2‘S›=z19==nv‘=Lt9Nt‚fZGJ†ZE›dzd9–NtN9‘zCgBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†1JB‡‡šLg9WJJC9‡‘cWnJ…š‘gCgBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gG1‘NEJ‘NEbgtg‡n‚9Y‘N–K‘NTJŽZTJ7‚J1ATg1‘N9ŽzTiJI›9e‘1T‡•Nd=Žvi9šti9‘NEbbN9Žzti‡YNW9‘1tK‘NE–PJ9NzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9BKC9=g‡AL•cbnK1=‡iYb•TvT•nv‘”‘TJYVSAJct2•7CcZKt‘•itš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=GT†‡7C=nV12FcC–s’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9BKC9=g‡A•WY‘n‡–BKSdsr‚f‡•c–F21=BfYbd™Sf‡‡cb”V1A=†SAb192Ž7J†N’cbN’S‘=19WlWScLV‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnr1W”‘YfbENTbSJGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBY›tsKS†nA‚f‘•JfŽPC’zLSd=2CGnV‚2FLC‘nz1WNcBJz”9fL‘t9ZLCšŽ2C2‘I99Lnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnVc2=lCšzGCglSJib7TJ1VJlT9WZN9šbLt2=lSAb192Ž7J†NFcbvV9z”S’•nv‘=Lt9Nt‚fZGJ†ZE›dFd9bvVSAJ–tcB…SJ=†tdBKYbzEYcnZWDF9bNtN9‘zCgBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=GT†‡7C=nV12FcC–s’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NlS‘zE›fŽ7J‘‡‘‡–•1=•TvT=nZiJK‡G=ŠNcbE›gbWZA•’cgnfS‘=KcŽ7Z‘‡šc=‚‘Y–Lg9†ldZ‘‡šJ’zŠ‡–ŽgvcLdZA•V1’=PNšNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšb†t9Nl‡ANLJWldc–z‘t9NtCfnGJ†ZSJi9V1’zitš=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡‘zE›GzScGNxt9Nl‡š=gvcBnvšb†t9Nl‡ANLJWldc–z‘t9‡š‡–s’CABnvšb†t9Nl‡š=”Y–Lnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9szT’vPJ‘lKBcbNSŠLEBc‘Lt†‡dJiJP1™LEvE‡€9iZz…AbEBJNrCcznC2ŽictsKBJz1Cc‘YNAFVTGnPB=diC†‡•NAFatENVNTJŽZT‡n‚9Y‘N–K‘vA=l‡š=gvcBxS9nz1WNcBJz”9fŽrtJ•KSšLAS’JnZfL‘t’nIScsYC2B™C2FLC‘ZKBg‡7S’Jn‚2sVN9ŽKC=z–Ccsn‡2ŽPC’zKSWBvS’JnB2sVN9ŽKC=z–Ccsn1šLnvšb†t9Nl‚9=bv†B‡c–z1=NlSAJ–ZcB•Ji9Vc=BdCfNzZfŽšN2nPB9=™C’D‘TfŽacdZLCš=2C2‘I9=dATg”VvA=l‡š=gvcBxS9nl1šBf›J=EYfB…tfLt9BKBcZGJ2FSc–=†Ncn=CTJYS9KAtAJTNJ™9TJŽvše‘NEbbJAJzEZlCABnvšb†t9NI‡‘b”v2•WC9‡št9NtN–‘zv†l7C=nKcWnc›9=€J‘li…‘YšStLzC2L‘JAZPTAb†SŠL=1c•fS2sA1=bxt9Nl‡š=gvEbnZ9n’cJ•…SfnTvcL=J–=†1J‚‘YbzE‡fŽWS9ZKSWBvS’JnB2sVN9ŽKC=z–Ccsn‡2FLC‘nSNdV™Y–NzvcBnvšb†tA=ŠvcNGZ†=‡Jil†td•c‚bBGYENnt–V1A‘KBJzFvWb•J2ZVcdBdCfZ”9fŽNiNLCfn–C’1‘JfŽLNTBaCcstcJZJBšLnvšb†t9Nl‚9=bv†B‡c–z1=NlSA”™c2‘WY=1VJšNŠ‚fna92ŽSY=‡Ft9s=1†n‘1cB…A=x‡’J=v’J=‡cbT‘‚i‚GJz…’J=9iZrBcbNSŠLEBc‘‘S9L†BcJgBcJ=1c•€JiNVBcdPBcJEB†J=1E‡KT™KSds•B’Z€JiJi…AbEBcJE9cL=‡cbT‘B‘BcJEY’n‘S9‘†…‘B7B–s€vcB‘CTBLTA=‘‚–sTNGJrZG‡AtEzICAbrC†lY‚2ŽšN2nIB†naCfFSZf‘Itc‡VCd=–C’lItfŽ™NAFVB=z–CG‡V‡2L‘t9ZL‚9L”S’JnZf‘ITfNxt9Nl‡š=gvEbnZ9n’cJ•…SfnTvcL=Jdz12‘dC–=GCGJdZ‘‡ac=•n‡i9‘BE9‘‚9N”Nd=Žvi9šti9‘NEbbNcnŽJW‡YNW9‘Tf=€NcsFtgJ•N2–AtEbgNTZxNT9‘‚99‘Tf=xNdVANTJ•…i9‘‚tLJNiBFTTJSNdY‘NE9VNEl•NTJSv‘”‘NEbbNEDPCgJICtKAtE=–NJz‘YgvšvšYA1†J‡NdKASiJYST‡NT™KSdszSGb€‡cL‘BJYšS2JLc2L€Ji‡VBcdiC2J=CEJ’CABnvšb†t9NI‡‘b”v2•WC9‡št9NtSfZ”9†=nZš‡F1A‘fN9=€Jš‘‡JBZ‚tLE›fF‘19bV…‘BvSEJEZ†Z‘JšbAT™KSdsE9G”P9i•IT‘Bf‚bN™S’‡S›2L‘TGnV‡šz™‚f•‡YAF™t‘=xt9Nl‡š=gvEbnZ9nFc=•tYcNLNfB‡c–zFcJ•P‡i‡Y…‘9‘c†J=NT‡FCTJSvšd‘‚gnN9Ž‘YW9‘‚99AtEbgNTZxNTJ•…i9AT–BvA=l‡š=gvcBxS9nl‡–B›c”i‡GznZJ1šcTncBAZGCG‡7S9ZVC–zaC’”AxA‘z‚G‡KSgB™CG‡nTfŽ‘TfzPBW‡”CcB•–Lnvšb†t9Nl‚9Lz–Lnvšb†t9•ŠYJ=L›Gl‡›9nL‡b‚‘S2ZGCG‡7S9n‘1WntCfYVt2Ž7Zidi9cšFYcnL9†zxv‘”šTJN’‡šz”S’•YvšbP‡9Zn‚š=g9WJNSEB†td•c‚bBGYENYvšbP1WnSCcY™JWlEZgl’T–NlSAJct2•7CcZK9bZl‚š=GZ†=WC91‘t9NtSfZ”9†=vJ†Zdt‘bI‡š=gvcB=BAs†t9Nl‡š=gvcBnZAŽLtš•Š›JzE‡f‡7Jš1VcTn‡==E›GNxvANA9–‡š‡JlKYGnvYdzA‡b‚‘SANwYf=1Z†NIc–BZ‚dLTBAs1Z‘b™t‘‡‡b•f‚As1Z‘b™t‘N’C‘•G9EnxJ†•dtcŽš‡JlKYGbv›WZA1JNW‚š=g9Wb•J2•š1dN’‡šzGYc•dZšFIc=•N‚š=fv=NtJcZ2JTlcJJeVJNtZJ‡Tt‘NKNšNzvcBnvšb†t9Nl‡š=gvcBnv‘nK1dBcBbzENTlW›9–Ft9‡š‡–s’CABnvšb†t9Nl‡š=gvcBnvšnL1WN…Cb=ET2snvABP1=BfYbd™SfŽW›9n1’=lSAb192Ž79AV’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnVc2=lCšzGCglSJib7TJ1V…‘lT9WZN9ilP1WnSCcY™JWlEvšbLt2=lSAb192Ž7J†NcbZ’9z”‡’•x›JnAc2‘S›=z19==nv‘=Lt9Nt‚fZGJ†ZE›=nd9f=tN9‘TCgBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†1JB‡‡šLg9WJJC9‡‘cWnJ…š‘gCgBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gG1‘NEJ‘NEbgtg‡n‚9Y‘N–K‘NTJŽZTJYS9KATg1‘N9ŽzTiJI›9e‘1T‡•Nd=Žvi9šti9‘NEbbNcnŽJW‡YNW9‘1tK‘NE–PJ9NzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9BKC9=g‡AL•cbnK1=‡i›J•TvtLnv‘”‘Tc=iSAJct2•7CcZKt‘•itš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=GT†‡7C=nV12FcC–s’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9BKC9=g‡A•WY‘n‡–BKSdsr‚f‡•c–F21=BfYbd™Sf‡‡cb”V1A=†SAb192Ž7J†N’cbN’S‘=19WlWScLV‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnr1W”‘YfbENTbSJGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBY›tsKS†nA‚f‘•JfŽPC’zLSd=2CGnV‚2FLC‘nz1WNcBJz”9fL‘t9ZLCšŽ2C2‘I99Lnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnVc2=lCšzGCglSJib7TJ1VJlT9WZN9šbLt2=lSAb192Ž7J†NFcbvV9z”S’•nv‘=Lt9Nt‚fZGJ†ZE›dFd9bvVSAJ–tcB…SJ=†tdBKYbzEYcnZWDF9bNtN9‘zCgBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=GT†‡7C=nV12FcC–s’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NlS‘zE›fŽ7J‘‡‘‡–•1=•TvT=nZiJK‡G=ŠNcbE›gbWZA•’cgnfS‘=KcŽ7Z‘‡šc=‚‘Y–Lg9†ldZ‘‡šJ’zŠ‡–ŽgvcLdZA•V1’=PNšNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšb†t9Nl‡ANLJWldc–z‘t9NtCfnGJ†ZSJi9V1’zitš=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡‘zE›GzScGNxt9Nl‡š=gvcBnvšb†t9Nl‡ANLJWldc–z‘t9‡š‡–s’CABnvšb†t9Nl‡š=”Y–Lnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9szT’vPJ‘lKBcbNSŠLEBc‘Lt†‡dJiJP1™LEvE‡€JiNVBcdPBJNrCcznC2ŽictsKBJz1Cc‘YNAFVTGnPB=diC†‡•NAFatENVNTJŽZT‡n‚9Y‘N–K‘vA=l‡š=gvcBxS9nz1WNcBJz”9fŽrtJ•KSšLAS’JnZfL‘t’nIScsYC2B™C2FLC‘ZKBg‡7S’Jn‚2sVN9ŽKC=z–Ccsn‡2ŽPC’zKSWBvS’JnB2sVN9ŽKC=z–Ccsn1šLnvšb†t9Nl‚9=bv†B‡c–z1=NlSAJ–ZcB•Ji9Vc=BdCfNzZfŽšN2nPB9=™C’D‘TfŽacdZLCš=2C2‘I9=dATg”VvA=l‡š=gvcBxS9nl1šBf›J=EYfB…tfLt9BKBcZGJ2FSc–=†Ncn=CTJYS9KAtAJTNJ™9TJŽvše‘NEbbJAJzEZlCABnvšb†t9NI‡‘b”v2•WC9‡št9NtN–‘zv†l7C=nKcWnc›9=€J‘li…‘YšStLzC2L‘JAZPTAb†SŠL=1c•fS2sA1=bxt9Nl‡š=gvEbnZ9n’cJ•…SfnTvcL=J–=†1J‚‘YbzE‡fŽWS9ZKSWBvS’JnB2sVN9ŽKC=z–Ccsn‡2FLC‘nSNdV™Y–NzvcBnvšb†tA=ŠvcNGZ†=‡Jil†td•c‚bBGYENnt–V1A‘KBJzFvWb•J2ZVcdBdCfZ”9fŽNiNLCfn–C’1‘JfŽLNTBaCcstcJZJBšLnvšb†t9Nl‚9=bv†B‡c–z1=NlSAJft2•7CcZKt9BKBcZGJ2FSc–=†NTJ‘BTJŽvšeAtEbgNTZxNT9‘‚99‘12JLNdVANTJYS9„‘C’=”Nc–A1T‡n‚9Y‘N–K‘NTJŽZTJ‡…’ATg1‘Nc–PNTJŽ…‘9’N’=NNEngYgJ7CE‘‚f–‘NJzg9W9‘‚99‘‚ŠLKNcsL…i‡n›9v‘c†9VNgZgvi‡7BJdAti‡PN9ŽzNd‘€…i•rTA=‚9s=S’J‘9iZr‡c‘SSšsEN†l‘STNa‡cJLBEBI‡š=gvcBnvAs†99•ŠSfNLZ†Znv‘nAc2‘S›=z19=znZAŽ‘‡–BcC=z1tc‚‘NEJ‘NEbgtg‡n‚9Y‘N–K‘NTJŽZTJYS9KATg1‘N9ŽzTiJI›9e‘1T‡•Nd=Žvi9šti9‘NEbbN9Žzti‡YNW9‘1tK‘NE–PJT‚’›9š‘cW‡gNTJ‘YgJV1T9‘cdNtNTJŽZTJ•NW9‘12J‘Nd=FZgJSBTDšN–NgN2n‘cT‡xN2K‘TfdAT9„Pfz€Sc•ŽTAJPBEJTNf=‘StL‘‡JBdSšs•‡AePCcN†TA=L‡AJEB†J=CT=PT‘‚PCŠLTNfB€1csI‡JYš‡šs•‡’Z’CABnvšb†t9NI‡‘b”v2•WC9‡št9NtSfZ”9†=nZš‡F1A‘fN9=€Jš‘‡JBZ‚tLE›fF‘19bV…‘BvSEJEZ†Z‘JšbAT™KSdsE9G”P9i•IT‘Bf‚bN™S’‡S›2L‘TGnV‡šz™‚f•‡YAF™t‘=xt9Nl‡š=gvEbnZ9nFc=•tYcNLNfB‡c–zFcJ•P‡i‡Y…‘9‘c†J=NT‡FCTJSvšd‘‚gnN9Ž‘YW9‘‚99AtEbgNTZxNTJ•…i9AT–BvA=l‡š=gvcBxS9nl‡–B›c”i‡GznZJ1šcTncBAZGCG‡7S9ZVC–zaC’”AxA‘z‚G‡KSgB™CG‡nTfŽ‘TfzPBW‡”CcB•–Lnvšb†t9Nl‚9Lz–Lnvšb†t9•ŠYJ=L›Gl‡›9nL‡b‚‘S2ZGCG‡7S9n‘1WntCfYVEJ9Z‘‡L‡–N†SAJ–ZENnv‘”‘TJN’‡šz”‡’=YvšbP‡JZn‚š=g9Wb•J2•š1dN’‡šz”SbN‡JiJac=vVBšŽgvcL7Y=zL1incYbB9YGBYvšn1AF…SfJTvcL‡cb”V1AŽ1=•TSšLnvšb†t9•itš=gvcBnvšb†t9NŠ‚bzzSGBWCJ‡acg”ŽSfZGT2s1Yd‡i1dN†CdŽw›fn1SWJdt’FSc”iJ†JSt–šFtcŽ1dLf›fLx›cLitš‡SšLFCfN1J†•7tš‡SšLFS’NxZ†•Pt’=K1‘•Tt2n1SWJdtA…šV™SAFYvšbP‡bBKccnEB’Nnv‘nšcJ•tS2bGJ†zYvšnZJcLctbeŽTd‡cZW=vJcLtZ=JzS’l=BAs†t9Nl‡š=gvcBnvšb†t9NlS‘zE›fŽ7J‘‡‘‡–•N‡‘lTv2n1JGNxt9Nl‡š=gvcBnvšb†t9Nl‡‘zLE=SJš‡r19NlCšzGYc•dZšFIc=•N‡‘=1TcB…ZAVVc=‚V‚fJ’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡AbEccBxv‘nV‡–BcBbBwt2ZvSWlP‡JZbB–zGc‘SCdFK‡–‡P‡šzzccB…ZAVVc=‚Ž1d‘KYg•v9‘”‘TJNiSA”™c2‘WY=1VJ‘NlC9zzvcL•cbnK1=‡i›b•9BAL=Z–=V‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=GCf‘nvABP‡9‡…SfnL‡fŽvSdbV‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšbATŠL=1†n‘1cB…A=x‡’J=v’J=‡cbT‘Bv‚™Lz…’J=9iZrBcbNSŠLEBc‘‘S9L†BcJgBcJ=1c•€JiNVBcdPBcJEB†J=1E‡Kvcs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gv†lSS9bItdBKYbzEYcnNYTl†9f=lSAJ–ZEn…tf•TcJ‚‘C=zTCgBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnr1W”‘YfbENTbSJGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gv†lSS9bItJ•Yb=19†l‡›2„AcgnK›=e™Yc•dZšFIcgnfYfZ”tcs…ZAVVc=‚Ž1d‘fYGN…Zš1V‡–•n‚–L1‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡‘d™EJdZAŽ‘‡bBJNšNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9YBWJ‡NW‚Ac2‘PNJzxTTJI›9e‘1T‡•NTJŽZJ=LTb7CJnwN9ŽzvTJŽviY‘NEbbvA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡AbEccBxv‘nV‡–BcBbBwZ2ZvJglP‡9Zb‡šzzccB…ZAVVc=‚Ž1d‘KYg=v9‘”‘TJNlC9zzvcL•cbnK1=‡i›=•9Yg=…tfBFt9N‡C9=g9†ldZ‘‡šJ’zt‡bl9YfL=J–=V‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnr1W”‘YfbENTbSJGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB…Z‘‡ic=‚ŽCfna9†zEYTl†9bNŠBJz11AB=JAŽi‡b•ŠCANfc•SZšz2c=BCfnEJ†JdvABP1J•tCfnc‚’B19’B†td•tCAb1TEl€BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡š=gvcBnt–zK‡–•c›cnzvcLSJ’•K1=BcBcZ”TTBgS9b†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnZ‘‡i1incNšNzvcBnvšb†t9Nl‡š=gvcBnt–zK‡–•c›cnzv2n1JGNxt9Nl‡š=gvcBnvš”FvA=l‡š=gvW=g‡As†t9Nl‡šŽFC’bgS9b†t9Nl‡šLzZfsr‚2‡KSWJ7Cczn‡2Ž™‚Glz1WNcBJz”9fŽ†TGzKSWBvC’‡™SA„‘C’=…NcnG9gJ7CJ1‘‚fdPNT‡TNWJYYd‘Nin‘NTJFT–L=‡cbTA=x‡’J=v’JZCABnvšb†t9NI‡‘=LTb7CJnwNJ=FZWJSv’”‘Tf=lN9Žz‚T‡n‚9Y‘N–K‘NTJŽZTJ7‡cš‘Tf=xNdL=9iJSY=–‘‚9N”NJzxTTJ‡…’‘Tf=YNdL=9iJSY=–‘‚9N”vA=l‡š=gvcBxS9nl1šBf›J=EYfB…tfBt9BKBcZGJ2FSc–=†Ncn=CTJYS9KAtAJTNJ™9TJŽvše‘NEbbJšszEZlCABnvšb†t9NI‡‘b”v2•WC9‡št9NtN9‘Tv†l7C=nKcWnc›9=€JiNVBJYšSEJzC2L‘JAZPTAb†SŠL=1c•fC2sA1=bxt9Nl‡š=gvEbnZ9n’cJ•…SfnTvcL=Z–=†1J‚‘YbzE‡fŽWS9ZKSWBvS’JnB2sVN9ŽKC=z–Ccsn‡2FLC‘n‡NdV™Y–NzvcBnvšb†tA=ŠvcNGZ†=‡Jil†td•P›9=GCGJdZ‘‡ac=•n‡iJ‡…’‘Tf=YNdL=9iJSY=–‘‚9N”NTJŽZJB=ST=švcs†t9Nl‡š=gCABZt–n1A‘fB–=g9Wb•J2•š1dNŠ›2Z”t†l7CcN†‡bBKcfbE92FScbnwNJ==TJVJ’‚ATŠLJNJz‘‡T9‘‚9JEZTbNvA=l‡š=gvcBxS9nl1šBf›J=EYfB…tf•TcJ‚‘C=zTv†l7C=nKcWnc›9=€‡cn™Bcb†SŠLztAB‘‡9N‘‡cJ•S–sE9GYPStL‘‡JYšS†J•TcePJ’JLBc=x‡’J=v’J=‡cbT‘‚i‚GJz…’J=J’‡‘‡cbAC–„Pfz€1EBšT‘‚‘‚™L•J’J=J‘bP‡cJ•S–s•‡†l=19zABc=N‡™LE1†Z€Tšb†Bcš’C9szBEl€9iZ‘SdZABd=wCAs•S2FVTGnPB9di‚f‘SZfŽ‘‚cnIBg9iC†l™‚šLnvšb†t9Nl‚9=bv†B‡c–z1=NlSA”™c2‘WY=1VJ‘NŠ‚fna92ŽSY=‡Ft9s=1†n‘1cB…A=x‡’J=v’J=‡cbT‘YšSEJz…’J=9iZrBcbNSŠLEBc‘‘S9L†BcJgBcJ=1c•€9iZzBcdPBcJEB†J=1E‡KT™KSdsE‡cB‘‡cnšTAbEBcJE9cL=‡cbT‘B‘BcJEY’n‘S9‘†…‘B7B–s€vcB‘CTBLTA=‘‚–sTNGJrZG‡AtEzICAbrC†lY‚2L‘tEnIB†naCfFSZf‘Itc‡VCd=–C’lItfŽ™NAFVB=z–CG‡V‡2L‘t9ZL‚9L”S’JnZf‘ITfNxt9Nl‡š=gvEbnZ9n’cJ•…SfnTvcL‡cb”V1A=ŠSfNat2•=9šZKSd=1CfLxB2ŽicWBL‡šL2Cfš‚2Ž12nK‡šŽwB†‡n›2ŽrN7sPBdL–Cf••JE–‘TgnWN9ŽzNW‡‡vA–AcJBNT‡FC9NzvcBnvšb†tA=ŠvcNLJWldc–z‘t9Bf›cNLZWJnTAdIC–sE12F‘‡ENVBJBZS9s•‡fs=9iBšBcJ•S–sztAB‘‡9N‘‡JBABcJz›fsZCABnvšb†t9NI‡‘b”92sWCTdi1’=ŠZ2JGT2ŽWtbnV1W”š‡i‡S9‘At™LANcsŽ1WJ‡‡T1‘1†=gNcnzNgJY…Ae‘CšBAvA=l‡š=gvcBxScsAvA=l‡š=gv†BdJšzi1JBN‡‘zaJ†J‡Y‘nV1W”š‡AnLcLSc–Fv12Ž…‚b™Sglxv‘”šTJN’‡šz”S’•YvšbP‡9Zn‚š=g9WJNSEB†td•c‚bBGYENYvšbP‡9‡…SfnL‡fŽvJ–bit9NtB=zLc†zScbnS9bZl‚š=GZ†=WC91‘t9NtSfZ”9†=vJ†Zdt‘bI‡š=gvcB=BAs†t9Nl‡š=gvcBnZAŽLtš•Š›JzE‡f‡7Jš1VcTn‡==E›GNxvANA9–‡š‡JlKYGnvYdzA‡b‚‘SANwYf=1Z†NIc–BZ‚dLTBAs1Z‘b™t‘‡‡b•f‚As1Z‘b™t‘N’C‘•G9EnxJ†•dtcŽš‡JlKYGbv›WZA1JNW‚š=g9Wb•J2•š1dN’‡šzGYc•dZšFIc=•N‚š=fv=NtJcZ2JTlcJJeVJNtZJ‡Tt‘NKNšNzvcBnvšb†t9Nl‡š=gvcBnv‘nK1dBcBbzENTlW›9–Ft9‡š‡–s’CABnvšb†t9Nl‡š=gvcBnvšnL1WN…Cb=ET2snvABP1=BfYbd™SfŽW›9n1’=lSAb192Ž79AV’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnVc2=lCšzGCglSJib7TcVV…‘lT9WJN9ilP1WnSCcY™JWlE9šbLt2=lSAb192Ž7J†NFcbZ’9z”S’•x›JnAc2‘S›=z19=znv‘=Lt9Nt‚fZGJ†ZE›dFd9f=tN–‘TCgBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†1JB‡‡šLg9WZJC9‡‘cWnJ…š‘gCgBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gG1‘NEJ‘NEbgtg‡n‚9Y‘N–K‘NTJŽZTJ7‡cšATg1‘N9ŽzTiJI›9e‘1T‡•Nd=Žvi9šti9‘NEbbNJdP›W‡YNW9‘1tK‘NE–PJ9NzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9BKC9=g‡AL•cbnK1=‡i›b•TvtLnv‘”šTc=iSAJft2•7CcZKt‘•itš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=GT†‡7C=nV12FcC–s’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9BKC9=g‡A•WY‘n‡–BKSdsr‚f‡•c–F21=BfYbd™Sf‡‡cb”V1A=†SAb192Ž7J†N’cbN’S‘=19WlWScLV‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnr1W”‘YfbENTbSJGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBY›tsKS†nA‚f‘•JfŽPC’zLSd=2CGnV‚2FLC‘nz1WNcBJz”9fL‘t9ZLCšŽ2C2‘I99Lnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnVc2=lCšzGCglSJib7TJ1VJlT9WZN9šbLt2=lSAb192Ž7J†NFcbvV9z”S’•nv‘=Lt9Nt‚fZGJ†ZE›dFd9bvVSAJ–tcB…SJ=†tdBKYbzEYcnZWDF9bNtN9‘zCgBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=GT†‡7C=nV12FcC–s’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NlS‘zE›fŽ7J‘‡‘‡–•1=•TvT=nZiJK‡G=ŠNcbE›gbWZA•’cgnfS‘=KcŽ7Z‘‡šc=‚‘Y–Lg9†ldZ‘‡šJ’zŠ‡–ŽgvcLdZA•V1’=PNšNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšb†t9Nl‡ANLJWldc–z‘t9NtCfnGJ†ZSJi9V1’zitš=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡‘zE›GzScGNxt9Nl‡š=gvcBnvšb†t9Nl‡ANLJWldc–z‘t9‡š‡–s’CABnvšb†t9Nl‡š=”Y–Lnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9szT’vPJ‘lKBJ‚FS™LEt2z=SEJABJBPSŠL=1c•€19z†TAbWScJEN2Ž€‡JJŽvcs†t9Nl‡š=gCABZt–n1A‘fB–=g9Wl=c–nKt9sEN2Ž€‡JJŽTAJBtLE‡cdP…i•rZš‡i1dsEZ†b€C9ZŽT™KSd•NcYP‡Ez‘…A9’C7LEN2Ž€‡JJŽT™KSd•tCAb1t2K‘N†=iN9ŽztWJV1T9‘1†bJNTJTCšNzvcBnvšb†tA=ŠvcNLJWldc–z‘t9Bf›cNLZWJgS9b†t9Nl‡šLzC’‡gS9b†t9NŠBAZEt†N•Jš‘†c2FcBJdi9†l7YWZ†1šBfS2–™Z2FSc–‘Itd•tNcNGJT=…Yd‡i1dNW‚fJ’CABnvšb†t9Nl‡š=”TWN•cbnr19NlCAYi9†=dZi=i1WNdCfNz‡ALdtfŽ’c=NP‚fJ’CABnvšb†t9Nl‡š=gvcBnvšnrcJ•C–=g‡Gz=c–‘aTABI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†td•tNcNGJcBv9šbat9YŽ›dzw‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=Gt†=SJš‡™T’BI‡š=gvcBnvšb†t9Nl‡š=gv2z‡c–FKt9NdYfbGCG=SvAYAvA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšbP‡–•KB‘zTvT=nvAN†TbZNCds’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡‘=at2Ž‡J’Y’vA=l‡š=gvcBnvšb†t9Nl‡š=GT2•WY=J†tWnf‚Ang1i‡gS9b†t9Nl‡š=gvcBnvšb†t9BtCbzLZWb7tb–AvA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšbP‡–•KB‘zTvT=nvANaT’BI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†ccF…Cb=E‚iBgS9b†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnv‘”V‡9•Z‡‘lTvcLdZA•V1’dV…‘=E92=1YšFIc=B‚šLg‡GB79šni1J•Y–=”v2•‡Y†ZcWnc›dzFNfLdtfŽ’c=NPNšNzvcBnvšb†t9Nl‡ANLJWldc–z‘t9Bf›cNLZWJ1YWb1šNCcZENczdZAŽA12=lCšz”cEl=BAs†t9Nl‡š=gvcBnvšb†t9NŠ›Jz19WbWCTZ†1iNcScYi9†=xv‘”™T–NlN–L9‚šLnvšb†t9Nl‡š=gvW=YvšbP‡–•Y–L9‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9szT’vPJ‘lKBJ‚FS™LEt2z=19zP…‘‚‡šs=1c•€Tšb†‡cbW‡šsLSGZ‘J’•†BJ‚AC–s=JEb€‡cbT‘BNSfJE9czZCABnvšb†t9NI‡‘b”t2Ždtb‡F12=Š›2Z”t†l7CcN†NdVPJTJSBc9‘cE=fNJzgTW‚’›9š‘1cbgNEDA1iJ™tAe‘‚G=…NcsL…iJ‡SE‚‘cE=fNJzgTWJ‡SJATŠLJNJz‘‡TJV…AV‘1tK’NJ=zBi9‘‚99‘CA‘lNElFtWJ•Y=e‘N†=LN9Žz›9NzvcBnvšb†tA=IBdNzvcBnvšn’‡bB…‚AbETcBSC=‡‘cTNt‚f”™NfBWZš‡r1TnfC=zT‡’lgS9b†t9NŠNšNzvcBnvšb†t9Nl‡šz”TWJW›9–Ft9•YfNa9†‡7Zidic=•nCANGSGB1Y‘‡‘cJ‚ŽC–Lg‡Gz…›cLVT’BI‡š=gvcBnvšb†t9BKC9=gSGzdt–z’1WNNCšz”TWJW›EB†tWNd‚fnL9†‡dYš‘at‘vVJl9vEl=BAs†t9Nl‡š=gvcBnvšb†t9NlSAZ”SglnZgl†td•tCAb1TEZvC9‡PccVF›2bGJ†N7vABacd•cBfN”TWJW›9”i1J‚‘SA”i1AB2všnL1J‚‘SAYi9†=nvšzš9TNc›cNLJ†JdZJzAcTNc›d=z1’l€BAs†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšnK1d•CfJ’CABnvšb†t9Nl‡š=gvcBnvšbP‡–•Y–=–YfB…tbnI1J•NBblLZ2L‡Cg=w19Bc‚Ang‡AFStb‡š1š•NcNFvWN•JiJP1WNW‡A‡gv2FWCJ‡’t9N…Bb–iJ†=WCJ‡‘‡–JSB=diJ†znScNVT’BI‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9NŠBANLJ2F1YWb‡–BCšLg1’‡1t–šItš‡J–LwGl1vi•At†=’‡šz”9WZdZ†N’cbN’‡šzGYc•dZšFIc=•N‚–s’CABnvšb†t9Nl‡š=GCf‘nvA•r1WNcBcZg‡AL7Jš1VcTnCfNFS™LN9AV’vA=l‡š=gvcBnvšb†t9Nl‡š=”t2Ždtb‡F12=lSAnEZWl‡Y2•K1ibi›b•9‚šLnvšb†t9Nl‡š=gvW=gS9b†t9Nl‡š=gvcBWCJ1V‡b•…B9=GCGZWZ’•AcdBJCš=K›G=1ZiZzT–NlSAZ”SglxJGNxt9Nl‡š=”Y–LgS9b†t9NlBdLzCšLnvšb†t9Nl‚9=€S9sš…‘BvCGJEcKPJšzr‡cb…S™LEfB€‡cbTšsl‡AJ•1AB€Cc•šBJB‡’JEN2Ž€‡JJŽTAJ•S–JfS2ZGCgn•cb”‘NJzgTW9A‡EBgS9b†t9Nl‡šLzvdbWCJ1V‡b•…B9=”TWlWCcŽ‘c†=–C’1‘JfŽLNTBKSd=1CfLnY’‡AtEzK‚fsYCcFV›2‘i‚9•LCd=aCc=7NAŽzT–ZKSd=1CfLnYAŽzt2FIBWJ9Cfš‘NA‘aN=•K‚WBACf=YZfFLC‘ZLSJ=–CcFnC2Ž™c2‡a‚dL7S’JYt9Lnvšb†t9Nl‚9Lz–Lnvšb†t9•ŠYJ=L›Gl‡›9nL‡b‚‘S2ZGCG‡7S9ncTNt‚fZLCgl=9ABVvA=l‡š=gvWBgS9b†t9Nl‡š=gvcB…t–‘1’=l9=”TWlWC=nA1d‚FY‘z1tcsWZA•’cgNcBJ=EYcŽxvAZwt†=P‚–s’CABnvšb†t9Nl‡š=GCf‘nvA•w‡–•…BA”iTcs…t–‘1’=’‡ši‡Gl7CJnA‡gNNCdL9Yg=vJ–bV‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcLdtfeVt9vV‡šz”92s•c–‘š9f‘fS‘=KEz•Z‘‡i1dN†C=z”J†ZWt–‘1’=ŠYAbENcL7YAN†‡dNŠCcbENcLWY‘nFt9N…Bb–iJ†=WCJ‡‘‡–JSB=diJ†znScNVT’BI‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9NŠCfn”T2Ž=BAs†t9Nl‡š=gvcBnvšb†t9NlSAZ”SglnZgl†td•tCAb1TEZvC9‡PccVF›2bGJ†N7vABacd•cBfN”TWJW›9”i1J‚‘SA”i1AB2všna1A‘cBš=gt†ZZY‘‡F1A‘cBcZbc†‡‡Y‘‡wtc=W‚–s’CABnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gv†BWCJ‡acg”ŽSfZGT2sxvANAc–YC‘•fTEnv›cŽW‡=YCdŽgvcLdtfeVJ’zŠ‡–ŽgvcL7Jš1VcTnCfNFSiBgS9b†t9Nl‡š=gvcB•J‘=†tšBB2ZENTlxv‘nšcJ•tS2bGJ†zxJgZt‘•itš=gvcBnvšb†t9Nl‡š=gvcBWCJ1V‡b•…B9=g9†Z‡cbnr19Bc›=BwZ2Z€BAs†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšnFc=•tYcNLNfB•Jib’1d‚FS‘zT‡A=1t–zW12=n‚š=g9Wl=tbbVT’BI‡š=gvcB29csxt9Nl‡š=gGbx‡As†t9Nl‡š=gCA‚‘‚2=fN=zLSiJ7‚J9‘NJNINElEBiJIY†9‘Tf=€NTBFJgJ•Y==gS9b†t9Nl‡šLzZf‘KcczLC†lwC2š’S2ŽAc=lPBc„’CfFxS2s™‚WBaB2–’‚feš›2FLC‘ZKBEl9C2ŽxS2LANd•L‡A–IC2Ž‡›†la19Ža‡’naCfe’B2L‘CAnr‡š=wCEJncGlL1JZaBdzvCGnSS2z†tTNKSAswS2Bn›2‘‘tJ•VCcb9CcŽ7Zf‘r1TBr‡šdVtš=gvcBnvšbŽt9JŠB‘=1t2•79šbP1šBfS2–™Z2FS9šnw‡–•…‚fnL1A‚‘1†bJNTJTCiJ‡›91‘cdNvA=l‡š=gvcBxS9nl1A‘cYfZ1t†JnZšzA1WnCb=ENf‚‘CA=ZNJ=Ž‡W‡Y…‘9‘c†J=‡–•…YJz=…i•rT‘BP‚AJzYGl=StsKT‘B7C2‘SSfn”T2ŽgS9b†t9Nl‡šLzC’‡gS9b†t9NŠBAZEt†N•Jš‘†c2FcBJdi9†l7YWZ†cTnCb=1tcs…t–ncTnšSb™JElgS9b†t9NŠNšNzvcBnvšb†t9Nl‡šz”9WZdvš–Ft9NtYfbGCGzYJgJcdB…‡2Y™SfŽ7Z’BItWNŠB–=GT†NSJš‡Ft9NWB9z”v2•‡Y†ZcWnJ‚–s’CABnvšb†t9Nl‡š=”t2Ždtb‡F12=ŠYfNLCGZxt–V1AFtB2nGTNSc–=Itd•tNfZf‚’B19ALV9bvVC2YiJ2z‡Y=‡w1’=WNšNzvcBnvš”FvABI‡š=gvcBY›csŽvA=l‡š=gvcBxS9ZKSšKICf=ŽS2Ž‘‚bZaC–L†BW‡YvšvATb‚it9JfS2ZGCgn•cb”‘vA=l‡š=gvcBxS9ZLCb=rCcFV›2FLNAzKB=zvS’JINAŽatAzI‚†”’C†‡•N’lNGzaCcs9CGJVJfFKtAzPBW‡”CcB•xAFKcEzVC2bYC2B™C2ŽN’‡PBcs7S2Bn›2‘‘tJ•VCcb9C†‡…9fŽ™c2zr‡šdiCfLI›2z†tEzLB9=1‚f‘•Jf‘K1dZLS2–’S2BnY–Lnvšb†t9Nl‚9=bv†B‡c–z1=NlSANGZ2z•Yd‡ac=1FSbdi9†ldCcVV‡JNŠ›2Z”t†l7CcN†NcnŽJT9‘9A„‘cE=fNJzgTdVVZ2zdZAV™1J•tNT‚’›9š‘Tg‡YNcb•vi‚’›cb…YdFA1=Y‘YbzENczSJi9VTfšŽB–ŽFNTb•9iJNcJ•cBJd™SfŽWCb‡…t7LzSGb€‡cL‘Bc=’‡™LzYEvPJ™L™BJYICAJTNG9P‡J‡rTA‘dC’J€vcB†CABnvšb†t9NI‡‘b”v2•WC9‡št9NtS‘=192•nt–V1A‘KBJzFZfLAtšZaBTJaC2‘IJf‘K1dZLS2–’‚fŽxNAŽ†TGzABd=wS’‡IB2ŽVCšŽABdz™ScB…‡A=WYd1‘tc=lScbGJ†N7Zi•zNfsgcW‡xZA„‘N=YANJzgBWJ‡‚c„‘1†bJNTJTCi9‘‚99‘cdNNNEl=YWJY›c‚Ac9NTN9ŽzvTJ•…i9Ac=N‘NJ=ggJVJ’‚‘Cin‘NdVPtgJ‡NWBgS9b†t9Nl‡šLzvdbWCJ1V‡b•…B9=Gt†‡7Y†•KcJ‚š‡iJISJ–‘cEb2NdVPJTJSBcJdt–Žc29Pfz€JALi‡cdV‚fJzxAŽ€JAnaCJz1d•C–NzvcBnvšb†tA=ŠvcZGSG=7YAZwt9JcNbd™J†BdZAŽA12=–‚fŽ…C2s™N7sLSElACfe’‚2ŽAt9ŽKB9ŽrS’1Atf‘†1T•xt9Nl‡š=gvEbxST•xt9Nl‡š=”vWb‡CE•VcE=ŠCcZENczdZAŽA12=Š›2ZGZ†=dZ9‡’1šN†SANGZ2z•Yd‡ac=1FSbdi9†ldCcVV‡JN’‡šzG92•dZš9Ft†=W‚–NzvcBnvš”’vA=l‡š=gvcBnvšb†tdBtSfZGZcBv9šbPcdBfYb=9Yg=…›cYIt†=WNdzFvEZYJ‘‡wt9NWB9zG92•dZš9’vA=l‡š=gvcBnvšb†td•tNfZgvT=nv‘”V19BK›dŽ9Nc•SZšz21inCfnGBAs…›9n1=NŠ›2ZGZ†=dvšbš12=lCdŽz9†B‡JšF™cJBdCbe™Z2zdZAV™1J•tN9Žz92L‡cbnt‘Zitš=gvcBnvšb†t9NŠ‚bzzvcs‡YWdŽ12FZCšz”9WZdvAKPTJNKNšNzvcBnvšb†t9Nl‡š=gvcBnZAŽLtš•YfNav†‡W›cBP‡–•YbBwZ2ZYvšba9=•…›c”itcFx9š–F9bvVBšL1‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”92sWCTdit9‚‘CfZFvd‡=ZšFK1š•t‚f”™Nfs•Jib’1d‚FS‘zT‡A=€›9bzT–NlSAZ”Sglx9AK’vA=l‡š=gvcBnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvW=gS9b†t9Nl‡š=gvcB•J‘=I1iNt›cNGEzxv‘”V‡9•t1d‘fYGNnvAZ9‡–Bf›cZGCGJS›2sat‘NlJl9YGBxcGNxt9Nl‡š=gvcBnvšb†t9Nl‡ANLJWldc–z‘t9•t›cZEJTBgS9b†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnt–zK‡–•c›cnzv2‘‡J’•wc=Zitš=gvcBntglxvA=l‡š=gvE‡xScsxt9Nl‡š=gvEbnT‘‚BEJEtEZ‘JšnaTAbšC’JEN2Ž€‡JJŽvcs†t9Nl‡š=gCABZt–n1A‘fB–=g9†B‡JšF™cJBdC–=”TWlWCcŽ‘c†=–CGJVJfFKtAzKSd=1CfLnY–Lnvšb†t9Nl‚9=bv†=Scb”Ž1Ašš‡‘=LE‡7Z‘‡12=–Cc=…ZfŽz‚ŠsIBWJ9Cfš‘NTlWC=‡KNiBFTTJ•9’eATbNKNcsŽ1WJ‡‡T1‘1†=gNcnzNgJY…Ae‘CšBAvA=l‡š=gvcBxS9nl‡–B›c”i‡GznZJ1šcTncBAZGCG‡7S9ZVC–zaC’”AxA‘z‚G‡KSgB™CG‡nTfŽ‘TfzPBW‡”CcB•–Lnvšb†t9Nl‚9Lz–Lnvšb†t9•ŠYJ=L›Gl‡›9nL‡b‚‘S2ZGCG‡7S9nw‡–‚FB‘b1v†Bxv‘n’cJB‚==E‡fŽx9cs†t9Nl‡AJ’CABnvšb†t9Nl‡š=g9Wl=tbb†9bNlSAZGSGlW›TDPcJBtSJeiT2sSJ’•itšNW‡‘=EYfBSCT=FcTnJBfYi9†‡WvšbaTf=tB‘=ET†n‡JAZKt‘Zitš=gvcBnvšb†t9NŠ‚bzzvcsSJib’‡–•PCšz”9WZdvALV‡EBI‡š=gvcBnvšb†t9Nl‡š=gv†=Scb”Ž1Ašš‡AZ”tWbSJGNxt9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†‡–B›c”i1AB7CJ1it9JcNbd™J†BdZAŽA12=‚fn1v†N7Y=nKtšNnNš=gtENnv‘”V‡9•Z‚–L9‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9szBA‚PSTbš›9n9c=•…Y2bET2ŽgS9b†t9Nl‡šLzvdbWZš‡FcJ‚V‡šz”v2•‡Y†ZcWnc‡2Y™J†=dCcŽrc=NŠ›2Z”t†l7CcN†NcnŽJT9‘9A„‘cE=fNJzgTdVP1c‡PTA9’S–sTN’Z‘1cNr‡JBxCA9Pfz€9™Lz…‘BL‡’9Pf‘z‡fz7YWl‘‡–BcBJd™J†JdviJš1=YBcNG›gbSY2Ž‘Tf‘fS=d™Tb7C=nw‡J‚‘SdŽLYE‡SZ‘‡iTfLfS=d™Tb7C=nŠ‡b•tC‘zENTl•JšF‡–‚F›J9™J†=dCcŽrc=N2CAs•S2FVTGnI‚š=vC’Z7‡2ŽA‚TBPBW‡”C2‘IJf‘aN9b†JTnc›cZLCfzS‡tKSdsE9Gl‘JALKBJYš‡šsTNGb‘Jš‡‘T‘B=StL=1c•€‡JJŽT‘YPStL•cE”PJA‘†Bcb=CdszBE‡‘JAL…‘YšSEJETAP1cN™T‘‚AC–szB†l=1J=ABcJPBEJzc2‘‘19Ža…AbNScJLJEn‘9i=Bcb‡‚7L•›cs=1cNz‡cb‡B†J=S’J‘…i•rT‘Bv‚7LTN’l=9i•ITAbš‚–sEvE‡GT†‡79iJ12‘t›c”™CfLYCd‘1iNtCfn1J†lY›TJ9‡J•YbzEYJ‡TJdFK1AFS‚bd™J9Lnvšb†t9Nl‚9=bv†B‡c–z1=NlS‘=ETWl•Ji=‘t9•YfNLCGJS›9ZLCWJ–CcKšYALAc†zKSšdiC†D’ZG‡AtEzK‚šŽ”Cc‘xxALA19ZKCdLv2nL9†=7Y2ŽP1=BfBcbEc2ŽWY‘ZVSgZwCGnV‚2L‘ccFaCcsZtš=gvcBnvšbŽt9JŠ›Jz19WbWCTZ†ccšFB2nGJ2•7S9ZLS9z–Cf=VxAsANJZKCT9‘YfNaJ2V’N’=NNcbT›g‡Y9AVATŠLJNJz‘‡JzLZ†NWY=Jxt9Nl‡š=gvEbnZ9”V19•…B2viTcBtcf•rc=•ŠYfbEEJnTA‘JCcJzB†”P19LL…‘B”BEJEfB‘JiZ‘T‘YICAJ•v†n’CABnvšb†t9NI‚9Ž’CABnvšb†1š•cScnGCfznZ‘Ž12‘YfbEEJnt–VcJ•…Yb9™J†=dCcŽrc=N†SANGZ2z•Yd‡ac=1F›=z1tWn•JšFK9bNWCdŽgvcL‡JšV1J‚FBJlT1AFx9cs†t9Nl‡AJ’CABnvšb†t9Nl‡š=g9†B‡JšF™cJBdCbeiT2ŽWC=zVcTnJ‡‘lTvcLWZš‡r1TnfC=zcEzSc–™1JBCbl9YfF…›W•at†zICd=gYEJnvAN‘td•ŠSbd™Bf•SY=‡21inc›cZLCfzSJGNxt9Nl‡š=gvcBnvšbPcJBYfbEEJnZgl†tdBfS2ZGCG‡7SWDFt†=WxšzF1i‡…›9bšcJNlCdŽz92•‡Y‘nV1W”šNšNzvcBnvšb†t9Nl‡šz”9WZdvš–Ft9NtYfbGCGzYJgJcdB…‡2Y™SfŽ7Z’BIt†=ŠSfnTv†zdZš‡F‡–•CfNac†l‡Y=J†t†dšSANGZ2z•Yd‡ac=1F›=z1tWn•JšFKTf=tSbdi9†l7YWZVT’BI‡š=gvcBnvšb†t9BKC9=gSfz7Y‘‡‘‡–N†SAZ”SglxJgZt‘•itš=gvcBnvšb†t9Nl‡š=gvcB•J‘=I1iNt›cNGEzxv‘”V‡9•t1d‘cYGNnvAZf1AF…B2Nz1’lnZgDF9bZl‚fJ’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡AZGSG=7YAN†12‘cYš=bJWZ‡Y=‡’‡–BKB2nzSGl7c–ni1WntC–LgtTBnvš=it9NtYfJ”9ElxJGNxt9Nl‡š=gvcBnvšb†t9Nl‡A‡ZCABnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gv†lSSc•w‡–•…BA”iTcs…tb”š‡–‡iB‘•TBAB…Y9VcJ•…YfbENcFnt–FK1AFS‚bd™JT‡nZcŽ‘‡–BcBcZg1’lnZgDF9bZl‚fJ’CABnvšb†t9Nl‡š=gvcBnvšnFc=•tYcNLNfBdt–Žc=Zitš=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡ANLJWldc–z‘t9BSSfn”T2Ž€BAs†t9Nl‡A‡ZCšLnvšb†t9Y‚9L†CABnvšb†t9NI‡iJ‡ZAY‘‚Tnzt9‡CfNac†l‡Y=Jxt9Nl‡š=gvEbnZ9n’cJ•…SfnTvcLWZš‡r1TnfC=zcEzSc–™1JBC–=”TWlWCcŽ‘c†=–CGJVJfFKtAzKSd=1CfLnYG1‘‚ŠLZNTB‘ZTJYBT”‘‚G=NJ=ŽS–NzvcBnvšb†tA=ŠvcNGZ†=‡Jil†tdBfS2ZGCG‡7S9nw‡–•…‚fnL1A‚‘‚ŠLZNEl€TWJYY2Y‘cdNNT‡=Bi‚’›9š‘1dNNElzBWJYY2‚‘c†=I9J‚‘SANLElSZib12‘KCJz1TWDAccJNNc–A1TJYC9‘NEbbvA=l‡š=gvcBxS9nl1A‘cYfZ1t†JnZšzA1WnCb=ENf‚‘CA=ZNJ=Ž‡W‡Y…‘9‘c†J=‡–•…YJz=…i•rT‘BP‚AJzYGl=StsKT‘B7C2‘SSfn”T2ŽgS9b†t9Nl‡šLzvdbdZA•F1WNd›d=bJWZ‡Y=‡’‡–BKB2nzZGlKt2FI‚W1ICc=VB2ŽN’nKBd=YCGJYS2LANd•L‡A–tš=gvcBnvšbŽtAdtš=gvcBnt–”Žcc‘‚b=Fv2‘dJiJr‡–BKB2nzv†zdZi=’JTnc›cZLCfzS9ABP1šBfS2–™Z2FSJW=wc=•…Y2bET2Žv9ANaT–NlS‘=ETWl•Ji=‘9bNWCdLZCABnvšb†‡EBI‡š=gvcBnvšb†t9NtB‘=ET†n‡JAZKcgNCfNac†l‡Y=J†9bNlSANGZ2z•Yd‡ac=1F›=z1tWn•JšFK9bvVCdzwfF…›2sat9YŽB9=g1’J…t–ncTnšSb™J2‡WY=‡F‡f‘KS=z9‚šLnvšb†t9Nl‡š=gvcL‡JšV1J‚FB9=–YfB…Zš‡r‡–BKB2nrYg=…›cYIt†=WNdzFvEZ‡9šbaTf=tSbdi9†l7YWv’vA=l‡š=gvcBnvšb†td•tNfZgvT=nv‘”V19BK›dŽ9Nc•SZšz21inCfnGBAs…›9n1=NŠ›2ZGEBWY=‡F‡f‘KS=zTvcFYSJn’cJB‚==E‡fŽ1YšFK1AFS‚bd™JEJ…Zš‡r‡–BKB2nzSiBgS9b†t9Nl‡š=gvcB•J‘=†tšBB2ZENTlxv‘”V‡9•Z‚blrZEl=BAs†t9Nl‡š=gvcBnvšb†t9NŠ‚bzzSGzdt–z’1WNNCšz”9WZdZ†NcbN’‡šVJ†=WCT=Ft†=P‡‘l9Yg=NvAV’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvš”V19•…B2ZFv†JScfN†9=•S=z1vWl•Ji=‘tšBKBfNG›G‡SZ‘JItczi‡š=zBAB…tb”š‡–NP‚–s’CABnvšb†t9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†‡=bI‡š=gvcBnvšb†t9BKC9L”TWlWCdnA1’=†SAZ”SglE›dndT–NlC=9i9†‡Wt–nV12‘W‡AY™J†=dCcŽrc=ZI‡‘NENTlSJi9Vt†=P‡‘l9Yg=NvAV’vA=l‡š=gvcBnvšb†t9Nl‡š=”t2Ždtb‡F12=ŠYfNaJ2Ž€BAs†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšnFc=•tYcNLNfBSC9‡i1inJNšNzvcBnvš”FvABI‡š=gvcBY›csŽvA=l‡š=gvcBxS9ZK‚–diCf=Y12s™‚WBK‚–=2‚feš›2FLC‘ZLCfs2S’9’12ŽzT–ZaC–Ž1CA•…Z9Lnvšb†t9Nl‚9=bv†B‡c–z1=NlSANLJ†Z7Y‘nKcgnS‚fnGJcBWY‘nF1J‚‘Cd=€SEJABJBPSŠL=1c•€1JB…‘Y’BGJzY’”PJ™Lvcs†t9Nl‡š=gCABZt–n1A‘fB–=g9†N7YdF1d1FSAb1tcBWY‘nF1J‚‘Cd=€‡JJš‡c=bSAJTNf=‘‡cbTAJ7‚†JEcŽ=…i•rT‘Bv‡’J•J†N€J‘l™…‘Y’‚fJ=1AB=‡J‡V‡tKSdsLNA‘€SEJVT‘BPS2JEtEZ‘Jš=iT‘‚FS™LEt2z=‡cn™BJ‚FCf9Pfz€JA‘†Bcb=CdsE1’b”‡Gl7CJnA‡gNv‚feš›2LAtšZK‡šŽwCf=…C2L‘tTNI‡i‚iCc‘xxAFIN–•aCTJrC2‘IJf‘ITfFaCT1’CG‡ScG‡AtczLS–dICcB…YA‘Lt™sISgBvCGN…tfsVCš•PB9=–S’Jx‚2‘KCA‡PBTB7CGlYC†‡AtcFABd=wCfLx12Žzt2FPBdz™Cc=ŽcGlKt2Lxt9Nl‡š=gvEbnZ9nFc=•tYcNLNfBWY‘nF1J‚‘Cd=€19=PT‘BxC7LzxAŽ€JAnaBJBšC9sEv’b€JANŽTAJJBfJzZcL=C9•rTAJ•S–s•JAeP9iBšBcdi‚7LE…A•€…i•rT‘BP‚AJzYGl=19LL…‘B”BEJEfB‘JiZ‘T‘YICAJ•v†n’CABnvšb†t9NI‡‘b”92sWCTdi1’=ŠZ2JGT2ŽWtbnV1W”š‡i‡S9‘At™LANcsŽ1WJ‡‡T1‘1†=gNcnzNgJY…Ae‘CšBAvA=l‡š=gvcBxScsAvA=l‡š=gv†BdJšzi1JBN‡‘zaJ†J‡Y‘nV1W”š‡AN”J†N7ZJzV1dBJCšz”t2Ž7JidVc=1FCcbE›fŽYvšbP1d‚FS==E›f‡SZAŽF9bNWCdLZCABnvšb†‡EBI‡š=gvcBnvšb†t9NtS2nE9cBv9šbacJBtS9=gYEznvAN‘td•tCAb1TEZvCg=Pc=•S‚bd™JEJ…›9n’‡bB‚š=g1’J…t–zK1=‚FYbzcc‘•J’•KTf=W‡šzFNfL7Zi=rcJB‡=zGCG=€BAs†t9Nl‡š=gvcBnZ‘1šc=BNCšzGT†ZSv’B†td‚FYcZ”vWbdv’B†td•…CfZ”J†=7Cgd™cJ•n‚–s’CABnvšb†t9Nl‡š=GCf‘nvABP1A‘cYfZ1t†J1Y‘z1A=bJl9vEl=BAs†t9Nl‡š=gvcBnvšb†t9NŠ‚bzzvcsSJib’‡–•PCšzGTbdt–”Ž‡–NP‚fJ’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡AZGSG=7YAN†12‘cYš=bJWZ‡Y=‡’‡–BKB2nz‡AAt™KiNEb€vTJV…AV‘‚f=ANJzgCTJ•NdAtšsfcJBtSTJStšš‘1Wn9NJ=LTW‡Y…‘–AtšBNJ9J9T9‘‚99‘NJNINcszYiJVSE1‘cdNLNJ=EYiJV›9‘CA‘aNdLGTJz1SfŽ‡…‘BtB2JTN’l€‡cbTAbd‡™LLc2L€…i•a›cNVT’BI‡š=gvcBnvšb†t9Nl‡š=gvW=gS9b†t9Nl‡š=gvcBnvšb†t9Bc‚AY™JWBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvWl•t–zA‡G=ŠBJz11ABtcf•rc=•ŠYfbEEJxZAŽš1šBB=zGJcsnS†N†tc=’‡šzGTbdt–”Ž‡–NP‚–s’CABnvšb†t9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†‡=bIBdŽFvcBnvšb†t9Nl‡AbEccsWY‘nF1š‚F›dLg9†‡dcbn’‡b•t1d‘fYGNnvAZL1JBC–=”vWb7Z’•KcdN’‡š‘gv†z•Y2Ž’1šBcSšŽz1’lnZgZ’t‘•itš=gvcBnvšb†t9NŠ‚bzzvcs…Z’•AcTnf‚‘e™9†lWSWDFt†=W‚fJ’CABnvšb†t9Nl‡š=gvcBnvšbP1d‚FS==E›f‡SZAŽFt9vV‡‘eŽ9JTJdz2cGzitš=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡šzG›G‡‡Yd‡icgnt‚fNzvT=nZAŽ‘cgnf›cNLZWJxt–ŽccFYfNz‡AL7Zi=rcJB‡=zGCG=YvšbšTJNP‚‘BF1’‡…›EBac–‡’C=•TSABv›9bP1d‚FS==E›f‡SZAŽFt9ZI‡šzG›G‡‡Yd‡icgnt‚fNzN9JTJdzf9Tbt9bJKCf‡JYb‡Z9J‡…v=‡bJN€BAs†t9Nl‡š=gvcBnv‘ni1WnSfnfc‘•J’•Kt9vV‡šzG›G‡‡Yd‡icgnt‚fNzvEJnZšz1incBJ=EYcŽxv‘nFc=‚ŽB2ZGJ2‡SCcŽic=NPNšNzvcBnvšb†t9Nl‡ANLJWldc–z‘t9Nt‚A”™T2•7ZW=L1JBC–s’C’‡Y›9b†t9Nl‡š=gvcB29csATG=l‡š=gvcBnvšb†‡–B›c”i1AB7CJ1it9JcNbd™J†BdZAŽA12=‚fn1v†N7Y=nKtšNnNš=gtENnv‘nA‡b•tBAZ19ElxJGNxt9Nl‡š=”Y–LgS9b†t9NlBdLzCšLnvšb†t9Nl‚9=€JALr‡JBnBGJ=JEZ=S9JP‡c‘”Sds=1c•€1JB…‘Y’BGJEtEN€SEJABJBPSGBI‡š=gvcBnvAs†99•ŠSfNLZ†Znv‘ni1WnSfnfc‘•J’•Kt9•YfNLCGJS›9ZaC–Ž1CA•…tfL‘tEnaCcs9CcŽI‡2L‘NAnIBg1ICG‡I99Lnvšb†t9Nl‚9=bv†B‡c–z1=NlSANLJ†Z7Y‘nKcgnt‚fNzv†zdt–zV12‘W‡i‡xN7K‘1JN”N===TT9‘‚99‘NEJ‘Nc”™JdNzvcBnvšb†tA=ŠvcNLJWldc–z‘t9•YfNLCGJS›9ZLS9z–Cf=VxAsANJZKCT9’CGnSS2Ž†‚czKCdLrC2ŽYcfstd•VSgZwC2‘IJf‘KCA‡PBTB7C’vAxAŽAC‘ZABd=wCGlYtfsšt‘•LSElACfe’‚2ŽAt9ŽKB9ŽrS’1Atf‘†1T•xt9Nl‡š=gvEbnZ9”V19•…B2viTcBtcf•rc=•ŠYfbEEJnTA‘JCcJzB†”P19LL…‘B”BEJEfB‘JiZ‘T‘YICAJ•v†n’CABnvšb†t9NI‚9Ž’CABnvšb†1š•cScnGCfznZ‘Ž12‘YfbEEJnt–”Ž1inZAbE›fŽxv‘ni1WnSfnfc‘•J’•KT–NlSANLJ†Z7Y‘nKcgnt‚fNzSšLnvšb†t9•itš=gvcBnvšb†t9NlS‘d™YcLnZgl†tWnfS‘=zvEZW›9baTf=tYfbGCGzYJgJ2cdBcY2bET2ŽYScN†1š•c›2bgvcFYSJni1WnSfnfc‘•J’•KTf=W‡šzFNfLWCJ‡š1WNtCbe™9†lWS†Nxt9Nl‡š=gvcBnvšnK‡9BcSdLg92z7J‘bit9NtB2Z19†Bdcbbit9Nt›Jz19WbWCTJ2‡f‘f›9L9‚šLnvšb†t9Nl‡š=gv†lSS9bItd•…CfZ”J†=7Cgd™cJ•nSbl9YGBxcGNxt9Nl‡š=gvcBnvšb†t9Nl‡AbEccBxZ‘‡š1š•tN9Lg9†‡dcbn’‡b•Z‚–L1‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”92sWCTdit9‚‘CfZFvd‡=ZšFK1š•t‚f”™Nfs……A=ABŠL•S2B€1c‡V‡cbW‚dsE1’N€1JB…‘Y’BGJ•cE”PJ‘bVBJBšC9sE1’b€…i•rTAbnCGJzvc•=SEJABJBPSŠLLtfz€‡cbTAJ7‚†JEcŽ=1J=™…‘BZ‚GJEBf‘€JANŽT‘Y’‚fJE9f=‘1J=™…‘BZ‚GJ•TGl=1cNz‡c=‘B7LLcGn‘1cZ†…A‘SSšNW‚–s’CABnvšb†t9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†t9Nl‡š=GJ†NWY=1’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvš”V19•…B2ZFv†JScfN†9=•S=z1vWl•Ji=‘tšBKBfNG›G‡SZ‘JItczi‡š=zBAB…ZidŽ‡–•ŠYcZgS’l€BAs†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡A‡ZCABnvšb†t9Nl‡š=GCf‘xt–V1AFŠB2NF‡AL7Y‘1V1š•cYbBwv2ZYvšbac2‘K‚‘zTv†Bdc–FIc=BZ‚š=–vcBWY†ZV1š•ŠCbzgNfFx9š–PT9NKNšNzvcBnvšb†t9Nl‡š=gvcBnv‘nFc=‚ŽB2ZGJ2‡SZAŽFt9vV‡AYiJ2=WY‘nFtšNt›JzEYE‡dZ‘‡2cdBK›9ŽgvEZN9AKF9bNWBdzFvtsnv‘nFc=‚ŽB2ZGJ2‡SZAŽFt9ZI‡šz”t2Ž7JidVc=1FSAb1tEJ…›T•aT’BI‡š=gvcBnvšb†t9Nl‡š=gvcLWCJ‡š1WNtCbe™c†l7Z‘J†9bNlSANLJ†Z7Y‘nKcgnt‚fNzvEJnZšz1incBJ=EYcŽxv‘ni1WnSfnfc‘•J’•Kt‘Zitš=gvcBnvšb†t9Nl‡š=gvcBWCJ1V‡b•…B9=g9†=SJibA‡–Bc‡=zLCGNSJGNxt9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†‡–B›c”i1AB7CJ1it9JcNbd™J†BdZAŽA12=‚fn1v†N7Y=nKtšNnNš=gtENnv‘nA‡b•tBAZ19ElxJGNxt9Nl‡š=”Y–LgS9b†t9NlBdLzCšLnvšb†t9Nl‚9=€Jš=ITA‘S‚–szBE‡‘JAL…A‘”Sds=1c•€1JB…‘Y’BfBI‡š=gvcBnvAs†99•ŠSfNLZ†Znv‘nFc=‚ŽB2ZGJ2‡SCcŽic=NŠ›2Z”t†l7CcN†NdKA…iJ•9še‘NEbbNEl•tgJYBT”ATfJANc”AZ9NzvcBnvšb†tA=ŠvcNLJWldc–z‘t9B…B2”™›fŽ‡JiZ†Ncsz9TJ‡‚c1ATŠLJNJz‘‡cZ”tWbS‡tKSdsES’N=STlV‡cbxCtLEtGJ‘Ji•†BJ‚šB9sTxAs=19n™BAs†t9Nl‡š=gCABZtbnI1AšFYANFvd‡=ZšFK1š•t‚f”™Nf‚Ac=NSNdKPBWJI‚c”‘cc9ANcnFviJ7STv‘TŠLNcsGBdNzvcBnvšb†tA=IBdNzvcBnvšn’‡bB…‚AbETcBSC=‡‘cTNt‚f”™NfBWCJ‡š1WNSCbnLCGNS9ABP1A‘cBf”i92Ž1Y=zV1dBJ‚–NzvcBnvš”’vA=l‡š=gvcBnvšb†td•tCAb1TEZvC9‡PccVF›2bGJ†N7vABat9•…B–=g1’J…t–zK1=‚FYbzcc‘•J’•Kt‘Zitš=gvcBnvšb†t9NŠ›Jz19WbWCTZ†‡–•…YJz9‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9szT’vPJ‘lKBc=‘B†JESAePJi=P…‘B…S2JE›fPJiJK‡cb…‡šs•1A==19sV…‘Y’BGJTxAs=19n™BAs†t9Nl‡š=gCABZt–zK‡–•c›cnzv†zdt–zV12‘W‡i‡Y…‘9‘c†J=Jš9ŽTTJV19e‘‚9BrvA=l‡š=gvcBxS9nl‡–B›c”i‡GznZJ1šcTncBAZGCG‡7S9ZVC–zaC’”AxA‘z‚G‡KSgB™CG‡nTfŽ‘TfzPBW‡”CcB•–Lnvšb†t9Nl‚9Lz–Lnvšb†t9•ŠYJ=L›Gl‡›9nL‡b‚‘S2ZGCG‡7S9”Ž1J‡d‚bzG‡fŽdt–‘It‘bI‡š=gvcB=BAs†t9Nl‡š=gvcBnv‘nL1JBCfnLZ†ZS9š–Ft9NdCc”it2‡SY=1VcgNc‚be™9†‡‡Y‘‡šc=‚‘Y–ŽaSGZ7vAY’vA=l‡š=gvcBnvšb†td•ŠSfZG‡ABv9šbaTgNS‘d™Z†=Svi•aTf=tCcbE›fŽ7C9‡šc=Zitš=gvcBnvšb†t9NlSAYi92•WC=nJ1J‚ŽC–=–YfB•Ji9V‡f‘f‚šLGYEl‡YšzA‡–BKBbzTSglWC=‡Kt‘NI›–‘–vEBxJGNxt9Nl‡š=gvcBnvšnw1dBcCfNg‡’•xJGNxt9Nl‡š=gvcBnvšnP1†=ŠNšNzvcBnvšb†t9Nl‡š=gvcBnv‘”V‡9•Z‡‘lTvcLdZA•V1’dV…‘=E92=1YšFIc=B‚šLg‡gb•Jš1Ž‡–‚FBb=19†‡WS9nP‡b‚ŽBš=g1’J…t–n‡–B†‚–s’CABnvšb†t9Nl‡š=gvcBnvšnVc2=†SbzEYEBdtfLItd•tNfZgSAB…SJ=†1iNt›cNGEzxv‘”V‡9•t1d‘fYGNnvAZc9‘NŠCAbEJ†=‡Y2•1AFP‡‘z”J†ZWZ‘‡Pt9•tBdszvcFYSJn’cJ•tCšLTvc•vJgl’t‘•itš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9BKC9=gSGzdt–z’1WNNCAbEYEB7Zi=Pc=N†S9sFvc=YvšbP‡–•Y–LTBAB…YW9Ž1dB’‡ANLE‡dvšn‘1WntC–=”t2Ždtb‡F12‘cSš=GtWJnZ=‡VJdBc›2ZbZWbdZi=šcJ•t‚f”™N9NWCcŽPcWnJCdLTvc•vJgl†c2‘f‚AY™JEl=BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NtYfJ”9cBv9šnLcJB›=z9‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=GJ†NWY=J†‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”92sWCTdit9‚‘CfZFvd‡=ZšFK1š•t‚f”™Nfs…Y‘‡VcJ•cYf”™Yc•dZi=Ft9BtYcn1vcBSc–zF1WNnNd=g1ABYS9nV1=•Š‚A”™92Žxvšd’t9Nn‚š=g9Wl=tbbVt‘Zitš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9NŠ‚bzzvcs…tb”š‡–NlJl9YfBSC9‡i1inJ‚–=”‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gG1‘NWn…Nc”AZd‘=‡cFPBJBGS2J•S2B€1c‡V9cs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBdc–Fic=BcBšL–ZEBNZ–b’T9Zl‚–s’CABnvšb†t9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†t9Nl‡š=g92zdc–zFc=‚‘Yb‡GCGZS9š–Ft9BKBcZ”c2•7vA•š1JB›c”i9†l7J‘JI‡–•…YJzTSABxS9bT9ZlBšL9‚šLnvšb†t9Nl‡š=gvW=gS9b†t9Nl‡š=gvcBdY2•V1dBJCšz”9WZdvš–F9bvV‡‘zLZ†NWY=J†t2=‡‡šLg92zdc–zFc=‚‘Yb‡GCGZS9ilP1iNtSfNa9=J•JibK9–Z‡Bš‘–vEBx9AK’vA=l‡š=gvcBnvšb†1inCbz1vcsNScK’vA=l‡š=gvcBnvšb†‡–•…N9=”‚šLnvšb†t9Nl‡š=gvcBnvšb†td•tCAb1TEZvCd”Ž1dBZAbE›fŽxv‘n’cJ•tCšL9‚šLnvšb†t9Nl‡š=gvW=gS9b†t9Nl‡š=gvcB‡Yd1VcTn†‡šLbJWZ‡Y=‡’‡–BKB2nzvcLScf•rc=•ŠYfbEEJxcGNxt9Nl‡š=gvcBnvšb†t9Nl‡šzGYEzS›9–Ft9NtCfJGT2ŽWtbnV1W”šBblL‡fŽdZTbK1iNSb™JcsxJGNxt9Nl‡š=gvcBnvšb†t9Nl‡AbEccBxt–V1AFŠB2NF‡AL7c–FaT–NlC=zGcŽW›9n‘1WNZ‡‘z1SGlWY‘bat‘všBšL1‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”92sWCTdit9‚‘CfZFvd‡=ZšFK1š•t‚f”™Nfs……A=€BŠLE9fŽ‘SEJABJBPSŠLEcKPJšzr‡JBS7LENcŽ=19sV…‘Y’BGJTxAs=19n™…‘BP‚AJzYGl=…i•rT‘YFCšsE9G”PS9ZA‡c‘W‡šszCcB=9™s™BcbJBcJzBE‡‘JAL…‘Yš‚=YF›=zGT2•WCJZaCT1’CG‡ScfFLC‘ZI‚WBACf•VC2‘acJlVCJz–B†‡n›†lat9ZI‚fsf›c”™TD‘‚gn–N=zL9T‚’›9š‘ctLgNd=gZgJV19e‘N†J†NiBF19zFSiBgS9b†t9Nl‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9NŠ9NzG‡nvšb†t9Nl‡š=gvcLdZA•V1’dV…ANLJ†Z7Y‘zK92‘K‚‘zT‡ALWZš1V19NPNšNzvcBnvšb†t9Nl‡šzGT†‡7C=nK12FZ‡‘lTv2‘•J’•KcgndCfZfcz7YW9Vc=‚‘YfNF‡ALSCcŽic=‚‘SfnEJEl€BAs†t9Nl‡š=gvcBntb‡‘1dBKBcbF‡ALSCcŽic=‚‘SfnEJEl€BAs†t9Nl‡š=gvcBnt–zK‡–•c›cnzvcL‡YW=‘‡–BcBcZ–‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9s•‡’J=19F™BcbESŠL•1’n€S9sš…‘BvCGJzBE‡‘JAL…‘‚FS™LEt2z=J’•r…‘‚‘CfJ•t2B€1cNz‡c=x‡’J=v’JZCABnvšb†t9NI‡‘b”v2•WC9‡št9NtYbz1Sglnt–V1A‘KBJzFZf‘KCA‡LCdLwCGnS‡2F™tAnPB9Žntš=gvcBnvšbŽt9JŠB‘=1t2•79šbP1dBK‚=zTv2=7YW=ic=BfB9=€1J=™…‘BZ‚GJ•CAs=‡EzzBcb2‚fJzB2s‘…i•rTAš’C9szBEl€9iZ‘CJz1d•Cg‚’›9š‘NšKPNJ==ZiJV…AVAt™LzvA=l‡š=gvcBxS9nl1A‘cYfZ1t†JnZš‡F1A‘fN9=€StsKT‘B7C†JETc•=J‘bŽ…A=x‡’J=v’J=J’‡‘‡c=CAJ=1c•€1J‡iTA9’S–bI‡š=gvcBnvAs†99•tCANLTNW›9nf‡9BCfN”9†l7YWZ†N=zTcW‡x…’1‘C’b7NJ==NWJ7›9Y‘12dšN9VPSgJIZ’‡gS9b†t9Nl‡šLzC’‡gS9b†t9NŠBAZEt†N•Jš‘†c2FcBJdi9†l7YWZ†cWncYbZLcLSc–Fg‡J‡tCfJ”9cs…tbnK‡9•Z‚š=g9†N•J’ZK9bBSSfn”T2Žx9cs†t9Nl‡AJ’CABnvšb†t9Nl‡š=GCf‘nvA•LcJB›=zTCgBgS9b†t9Nl‡š=gvcBnvšb†t9YBWJYS9‘CA‘aNdLGTTJŽY2KAtšBNN9Ž‘SW9Avš”’N’=NNJdP‚TJVSE1‘TfdAN9ŽŽZiJV1T9‘Tg1IN9Ž‘SW9Avš”‘C™LZNT‡TNdNzvcBnvšb†t9Nl‡š=gvcBnt–zK‡–•c›cnzv2n7CJ1it9•K‚fn”J†B•t–n2cJBtSJe™J†NSJibK12FZCšz”92Ž=tbbitd•tCAb1TEl1JGNxt9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†1A‘cYfZ1t†Jnv‘”V19BK›dŽ9Nc‡SY=1VJfšFS‘z1TdN=JE•V1Tncv2Z”9†=xvAvVc=•Y–zFBAB…tbnK‡9•Z‚š=g9†N•J’ZKt‘Zitš=gvcBntglxvA=l‡š=gvE‡xScsxt9Nl‡š=gvEbnTAb†BcJ•T†n‘S9L†BcJgBcJ=1c•€JšB‡JB‘BcJ•9fPStsiTA=€BŠLE9fŽ‘SEJABJBPSŠLEcKPJšzr‡JBS7LENcŽ=19z†TAbWScJztAB‘‡9N‘9cs†t9Nl‡š=gCABZt–n1A‘fB–=g92z7YW9Vc=‚‘YbnGJ†z‡›9nw‡–•…‚fnL1A‚‘ccbfNc–ANTJI…‘DATŠL’vA=l‡š=gvcBxS9nl1šBf›J=EYfB…Z’•V1TnJ‡‘=LE‡7Z‘‡12=–Cc‘xxAŽPtAnL‚9L”C†Yš‚2‘aN=•I‚W‡YB†‡n›†l‘NczI‚†b9S’JY‚f‘‡J’•wc29Pfz€‡E=ABJB”SGJ•‡†l=SE‡I‡As†t9Nl‡š=gCABZt–zK‡–•c›cnzv2•WCdz‡JN–C’1‘JfŽLNTBKSd=1CfLxB2szCšŽa‡’naCG”’C2si19•aCcs9CcŽ7ZfF‘Nbbxt9Nl‡š=gvEbnZ9”V19•…B2viTcBtcf•rc=•ŠYfbEEJnTA‘JCcJzB†”P19LL…‘B”BEJEfB‘JiZ‘T‘YICAJ•v†n’CABnvšb†t9NI‚9Ž’CABnvšb†1š•cScnGCfznZ‘Ž12‘YfbEEJnZAZK‡–9‘B=zGJ†zZC2Ž–1W”‘YbzENTltZ‘‡wcE=†S‘d™EJdZ‘‡‘‡–JtCfY™TENnv‘ni1JBšCblEc2•7t–FKt‘bI‡š=gvcB=BAs†t9Nl‡š=gvcBnt–zK‡–•c›cnzvcLdZA•V1’dV…‘e™‡fŽdZTJAcdBc›=baC–‘•J’ZK9J•tYfNz‡AF‡YW=‘‡–BcBcZgYcLSc–Frt†=’‡šzGT†‡7C=nK12FtZJz1T2zYvšbP1dBK‚=zTSiBgS9b†t9NŠ9N†CABnvšb†TG=I‚9NzvcBnvšb†tA=–CcsYC2‘r1TJFc=•B2Z1t2zS9šnVcdszT’vPJ‘lKBc=‘B†JESAePJi=P…‘B…S2JE›fPJiJK‡cb…‡šs•1A==S9L†BcJgBJbI‡š=gvcBnvAs†99•ŠSfNLZ†Znv‘nFc=•B2Z1t2zSJW=VcdNŠ›2Z”t†l7CcN†1A‘c›2”iJ†=‡Y=Jš1JB9CGNSNA‘†tA‡aCcs9CfBYBšLnvšb†t9Nl‚9=bv†=Scb”Ž1Ašš‡‘=1t†=‡cfL†NdVPJTJSBc9‘cE=fNJzg‚W‡n‚9Y‘N–K‘Nc–PNT‡YZAe‘NEbbNElEBi9’B9JgS9b†t9Nl‡šLzvdbdZA•F1WNd›d=bJWZ‡Y=‡’‡–BKB2nzZGlKt2FI‚W1ICc=VB2ŽN’nKBd=YCGJYS2LANd•L‡A–tš=gvcBnvšbŽtAdtš=gvcBnt–”Žcc‘‚b=Fv2‘dJiJr‡–BKB2nzv2FScbn€1WntCfYVtWJJCJ‡w1WNc›Jd™JdzSvABP1A‘c›2”iJ†=‡Y=‡21JBZ‚–NzvcBnvš”’vA=l‡š=gvcBnvšb†1A‘cYfZ1t†Jnv‘”V19BK›dŽ9Nc‡SY=1VJfšFS‘z1TdN=J91V‡–•nCšit2ŽWYWdŽ1A‘C–ŽECfL…›EB†td•…CfY™TbWC9FKcgnKSšL9‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9s•‡’J=19F™Bcb‡‚7LE9El‘J‘l™…‘Y’‚fJLvc==9iZ™9AzK‚WBaCfd’N’l†tcFLST‡aCcs‡cED‘‚gnKNddAYiJ‡…‘‚Ati1PNcbTtgJ7Y=v‘cc‘NcnG9gJ7CJ1‘CA‘lNElFtW‡n‚9Y‘N–K‘tšsEBEJ=J‘zŽvALxt9Nl‡š=gvEbnZ9n’cJ•…SfnTvcL‡CT=A1dBcSfnzv2=7YW=ic=BfB9=”9†=dJ‘•ICAbrC†lY‚2ŽrN7sV‡š=aS’JxYAFLC‘ZK‚†naCf‘•S†‡AtE•LcJB›=z=Sc•ŽTAJPBEJTNfz=J‘l™…A‘lScJTNGn=‡cbT‘B‘BcJEc†blCABnvšb†t9NI‡‘b”t2Ždtb‡F12=ŠSfNat2•=9šZIBWJ9Cfš‘NAŽrtJ•KSšLACA=ITfF†‚2FK‚WBaC’N•tfFLC‘ZLCfn–C†9š99Lnvšb†t9Nl‚9=bvWl•t–zA‡gNN‡‘n1SfzSc–”V1J‚FB9=€CJJL‡c=A‚7L•tAšPJš•‘BJ‚‡’JENGJ€9™sI‡cbŠ‚†BI‡š=gvcBnvAsŽTGBI‡š=gvcBWtb‡z1dBKSd=GcWb7C9V1J‚FB9=G‡fŽdZTJAcdBc›=baC–Z•Z‘‡r1TnfScnGJcs…ZšzA1WnCb=ENGlgS9b†t9NŠNšNzvcBnvšb†t9Nl‡ANLJWldc–z‘t9NtYfbGCGzYJgJ2cWncYbZLcLSc–Fg‡JJfYfZ”tcs…YdFIc=B‚==Et†NS9ANit9NtSc”™ENSJš‡‘9G=dYfNaJ2Ž…›2sac2‘f‚AY™JcFxJGNxt9Nl‡š=”Y–LgS9b†t9NlBdLzCšLnvšb†t9Nl‚9=€1cB‘‡cb‚†J•cE”PJ‘bVBJ‚i‚’J=NAPC9bz‡JYš‚=NrCG”’C2ŽzNiBV‡š=aCcdAC2‘IcJ=VNED™Cg‡nNWY‘ctLENdKA…iJ•9še‘1Wn9NJ=LTWJ7Z‘D‘12‘cNcsLvTJV›9AtEbgNTZxN9L€J’J‘‡JBS‚9NPtš=gvcBnvšbŽt9JŠB‘=1t2•79šbPccšFB2nGJ2•7S9nz1W”F‚‘zEZ†JntbnF‡bB1CAs•S2FVTGnKBgBYC†9šx’l†tcFPB9KiC2‘IJfŽ™‚2FKCcbrB†‡n›f‘‡J’•wc2JzSGb€‡cL‘BcbFCAJ•1A==C9bz‡JYš‚2J=1c•€J’J‘‡JBS‚9bI‡š=gvcBnvAs†99•…CfZ”J†=7S9n1AF…SfJTZfsANJZKCT9’CfzncfŽPt’‡IScsYC2B™C2Ž™NAFI‚Ab”C2‘IJf‘K1dZaBTZZtš=gvcBnvšbŽt9JŠYfb”t†‡dYš‘†9=•S=z1vWl•Ji=‘t9sLJc‘=SE‡™…AbxCtLEtGJ‘Ji•†BJ‚šB9sTxAs=19n™BAs†t9Nl‡š=gC’bYBAs†t9Nl‡AN”J2=7ZAŽrt9BSYcnLTWl•Ji=‘t9BdCfZbNE‡SZ‘‡w9cFKZfbGJ2z•Y=‡PtšNtSc”™ENSJš‡‘t‘bI‡š=gvcB=BAs†t9Nl‡š=gvcBnt–zK‡–•c›cnzvcLdZA•V1’dV…‘e™‡fŽdZTJAcdBc›=baC–ndtbnFtšNdS2bGJ2z•Y=‡Pt†=’‡šzGt†‡7Y†•KcJ‚šxši9†=dJ‘JaTA=dCJ=E›GzS9ANVT’BI‡š=gvcB29csxt9Nl‡š=gGbx‡As†t9Nl‡š=gCA‚‘‚9Y‘Nc„™BTJVSE1‘cdNLNJdPBWJYBcV‘N–K‘NJ==NiJVY2VAtT1iNJdPJi‡xN7K‘1JN”Nc”™JgJ‡C9‘1dBvNcnLJWJIC9–‘‚G=…Nd=Žvi9štiJxT‘B‘BcJEc†bgSšLnvšb†t9Nl‚9=bv†B‡c–z1=NlS‘=LE‡7Z‘‡12=ŠSc”™ENSJš‡‘t9•t›cZEcfsI1cza‚–Ž™CfAxAF†‚2FKSgBAC2‘IJfŽ™‚2FKCcbrB†‡n›f‘‡J’•wc2JzSGb€‡cL‘BJYšS2JE9G”P‡9N‘‡JB”BtL=1c•€J’J‘‡JBS‚9bI‡š=gvcBnvAs†99•…CfZ”J†=7S9n1AF…SfJTZfsANJZKCT9’CfzncfŽPt’‡IScsYC2B™C2Ž™NAFI‚Ab”C2‘IJf‘K1dZaBTZZtš=gvcBnvšbŽt9JŠYfb”t†‡dYš‘†9=•S=z1vWl•Ji=‘t9sLJc‘=SE‡™…AbxCtLEtGJ‘Ji•†BJ‚šB9sTxAs=19n™BAs†t9Nl‡š=gC’bYBAs†t9Nl‡AN”J2=7ZAŽrt9BSYcnLTWl•Ji=‘t9BdCfZbNE‡SZ‘‡w9cFKZfnGCfz•Yd‡z1dBJCšzGt†‡7Y†•KcJ‚š‚–NzvcBnvš”’vA=l‡š=gvcBnvšb†1A‘cYfZ1t†Jnv‘”V19BK›dŽ9Nc‡SY=1VJfšFS‘z1TdN=J91V‡–•nCš™T†N•JšF™cJB…‚‘zT1’Nnv‘nz1W”F‚‘zEZ†Jv›cvV1AFcC–zwCAFSC9‡i1inJCdL9‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9s•‡’J=19F™Bcb‡‚7LE9El‘JiNiBc9’S7LE9E”P‡JJŽTAbd‚fJzT’vPJ‘lKBc=‘B†JESAePJi=P…‘B…S2JE›fPJiJK‡cb…‡šs•1A==S9L†BcJgBJNrCGn™C2ŽL1cBVvA=l‡š=gvcBxS9nl1šBf›J=EYfB…ZšzA1WnCb=ENfB‡CT=A1dBcSfnzvWlWC=‡KNdLGCi9A9i1‘12JFNTB‘9gJSv’1‘NJNINTJŽZTJ•NW9‘c2‘INiBFTJzLZ†NWY=•ICAbrC†lY‚2‘i‚9•LCd=aCfLxxAFKtAzaCcs9CGn™C2ŽL1cBxt9Nl‡š=gvEbnZ9nFc=•tYcNLNfB‡c–zFcJ•P‡i‡Y…‘9‘c†J=NJ=FZWJSv’”AtEbgNTZxNTJ•…i9AT–BNTJŽZTJVJ’‚‘N’JbvA=l‡š=gvcBxS9nl‡–B›c”i‡GznZJ1šcTncBAZGCG‡7S9ZVC–zaC’”AxA‘z‚G‡KSgB™CG‡nTfŽ‘TfzPBW‡”CcB•–Lnvšb†t9Nl‚9Lz–Lnvšb†t9•ŠYJ=L›Gl‡›9nL‡b‚‘S2ZGCG‡7S9nac=•tTA”™92ŽWY–‘9=‚‘Sb=L›fŽSvABPccšFB2nGJ2•7ScLxt9Nl‡š=”‚šLnvšb†t9Nl‡š=gv†=Scb”Ž1Ašš‡šz”92s•c–‘š9fVFC=z19ds7Y=nK1il…NJb19WlWScBac=‚‘Sb=L›fŽSvANit9NtSc”™ENSJš‡‘9G=dYfNaJ2Ž…›2sac2‘f‚AY™JcFxJGNxt9Nl‡š=”Y–LgS9b†t9NlBdLzCšLnvšb†t9Nl‚9=€1cB‘‡cb‚†J•cE”PJ‘bVBJBv‚7LTN’l=S9nLBcJb‚GJ•‡Gl=S9sš…‘BvCGJzBE‡‘JAL…‘‚FS™LEt2z=J’•r…‘‚‘CfJ•t2B€1cNz‡c=x‡’J=v’JTS2Ž™‚2FKCcb†‚–NzvcBnvšb†tA=ŠvcNGZ†=‡Jil†tdB…B2”™›fŽ‡JiZ†ccšFB2nGJ2•7S9”V1AFcCg‡xZA„‘N=YANJdPBW‡nZA–‘NbNLNTJŽZTJ•NW9‘c2‘INiBFTJzLZ†NWY=•ICAbrC†lY‚2L‘tTNKSW1ICABS‚2FtAnaCcs9CGn™C2ŽL1cBxt9Nl‡š=gvEbnZ9nFc=•tYcNLNfB‡c–zFcJ•P‡i‡Y…‘9‘c†J=NJ=FZWJSv’”AtEbgNTZxNTJ•…i9AT–BNTJŽZTJVJ’‚‘N’JbvA=l‡š=gvcBxS9nl‡–B›c”i‡GznZJ1šcTncBAZGCG‡7S9ZVC–zaC’”AxA‘z‚G‡KSgB™CG‡nTfŽ‘TfzPBW‡”CcB•–Lnvšb†t9Nl‚9Lz–Lnvšb†t9•ŠYJ=L›Gl‡›9nL‡b‚‘S2ZGCG‡7S9nac=•tTA”™92ŽWY–‘92šFS2Z1T2•‡CE•KtšNtSc”™ENSJš‡‘t‘bI‡š=gvcB=BAs†t9Nl‡š=gvcBnt–zK‡–•c›cnzvcLdZA•V1’dV…‘e™‡fŽdZTJAcdBc›=baC–ndtbnFtšNdCc”™TWbWYd‡z1dBJCdŽgvcL‡CT=A1dBcSfnrfFdt–Žc=NWNd™c2•7t–FKt†=PNšNzvcBnvš”FvABI‡š=gvcBY›csŽvA=l‡š=gvcBxS9ZLCšŽaCcz•NA‘Lt™sKSšL7CGv’TfF‘NŠsI‡‘z™C2•x12‘a1J•IS†n2Cf‘12s™‚WBK‚–=2CG‡S9fŽzcTNK‚‘dICGJScf‘zc9ZLCd=aCA=ITfF†‚2LINc–ANTJSCcsx9cs†t9Nl‡š=gCABZt–n1A‘fB–=g92=7YW=ic=BfB9=Gt†‡7Y†•KcJ‚š‡AZ”tWbS‡c=‚9s=S’J‘JiNiBc9’S7Lzv2‘‘‡9JVBcJ•S–sEBEJ=J‘zŽT™KSdBSSfn”T2VAtšBINT‡TNWJ™tAe‘‚G=…Nd=G1T9š9Aš‘NEbbNc–ANTJSCcsgS9b†t9Nl‡šLzvdbWCJ1V‡b•…B9=GZ†=WC91‘t9szxAŽ€JAnaBJBNSfJE9E–PS9L†BcJgBcJEB†J=SE•I‡cJ•S–s•J†N€‡TBvcs†t9Nl‡š=gCABZtbnI1AšFYANFvd‡=ZšFK1š•t‚f”™Nf‚Ac=NSNdKPBWJI‚c”‘cc9ANcnFviJ7STv‘TŠLNcsGBdNzvcBnvšb†tA=IBdNzvcBnvšn’‡bB…‚AbETcBSC=‡‘cTNt‚f”™NfBSY=1VJfšFS‘z1TdN=JJzAcTNc›=zE9cs…ZšzA1WnCb=ENGlgS9b†t9NŠNšNzvcBnvšb†t9Nl‡ANLJWldc–z‘t9NtYfbGCGzYJgJ2cWncYbZLcLSc–Fg‡JJfYfZ”tcs…Y=zAcTNc›=zE9cFYvšbPccšFB2nGJ2•7SW•a‡–•…YJzT1i‡…Y=z1d•C–zFSiBgS9b†t9NŠ9N†CABnvšb†TG=I‚9NzvcBnvšb†tA=–CcsYC2‘r1TBLC9KICfLx12ŽrN7sPBT‡1CE9‘‚2Žz‚czLC2b1CAz™‡2ŽrNcnI‚†”’CGln‡2ŽAc=lKSJdiCGN‡xAŽ‘c=•LSJ=–CcFnC2szCšŽa‡’nPCiJ•NW9‘c2‘It‘bI‡š=gvcBnvAs†99•ŠSfNLZ†Znv‘nz1W”F‚‘zEZ†JnZšzA1WnCb=ENfBdt–Žc2JzSGb€‡cL‘BJBv‚7L•NA‘‘JšLŽTAJ•S–sEBEJ=J‘zŽT™KSdBSSfn”T2VAtšBINT‡TNWJYS9‘ctLANEn‘1TJ‡‚c„‘NEbbNc–ANTJSCcsgS9b†t9Nl‡šLzvdbWCJ1V‡b•…B9=GZ†=WC91‘t9szxAŽ€JAnaBJBNSfJE9E–PS9L†BcJgBcJEB†J=SE•I‡cJ•S–s•J†N€‡TBvcs†t9Nl‡š=gCABZtbnI1AšFYANFvd‡=ZšFK1š•t‚f”™Nf‚Ac=NSNdKPBWJI‚c”‘cc9ANcnFviJ7STv‘TŠLNcsGBdNzvcBnvšb†tA=IBdNzvcBnvšn’‡bB…‚AbETcBSC=‡‘cTNt‚f”™NfBSY=1VJfšFS‘z1TdN=JdFr1AšF‚AnGZ2=7Z‘JItdB…B2”™›fŽ‡JiZVvA=l‡š=gvWBgS9b†t9Nl‡š=gvcBWCJ1V‡b•…B9=g9Wl•ZAŽwTbv‘‡=™JWl9CT=Pc=•vAJJZWldt–=ItWNS2NLEN7Zš‡z1dBJCdŽgvcL‡CT=A1dBcSfnrfFdt–Žc=NWNd™c2•7t–FKt†=PNšNzvcBnvš”FvABI‡š=gvcBY›csŽvA=l‡š=gvcBxS9ZLCšŽaCcz•NA‘Lt™sKSšL7CcFnC†lK17sLSd=aS’JIB2L‘NAnLC2b1CAz™‡2ŽrNcnI‚†”’CGln‡2ŽAc=lKSJdiCGN‡xAŽ‘c=•LSJ=–CcFnC2szCšŽa‡’nPCiJ•NW9‘c2‘It‘bI‡š=gvcBnvAs†99•ŠSfNLZ†Znv‘nz1W”F‚‘zEZ†JnZšzA1WnCb=ENfBdt–Žc2JzSGb€‡cL‘BcbWScJLJ†1P19‘z‡JYAStLTN’Z‘‡cbT‘B‘BcJEc†b€…i•rZ‘z1d•Cg‡xZA„‘N=YANEnxSgJV›9Ac=‚INcsFtWJY‚9V‘TG9™NTJŽZTJ•NW9‘c2‘IvA=l‡š=gvcBxS9nl1A‘cYfZ1t†JnZš‡F1A‘fN9=€StsKT‘B7C†JETc•=J‘bŽ…A=x‡’J=v’J=J’‡‘‡c=CAJ=1c•€1J‡iTA9’S–bI‡š=gvcBnvAs†99•tCANLTNW›9nf‡9BCfN”9†l7YWZ†N=zTcW‡x…’1‘C’b7NJ==NWJ7›9Y‘12dšN9VPSgJIZ’‡gS9b†t9Nl‡šLzC’‡gS9b†t9NŠBAZEt†N•Jš‘†c2FcBJdi9†l7YWZ†cWncYbZLcLSc–Fg‡JJB2nL‡–Z7ZAŽr1TnfScnGJcs…ZšzA1WnCb=ENGlgS9b†t9NŠNšNzvcBnvšb†t9Nl‡ANLJWldc–z‘t9NtYfbGCGzYJgJ2cWncYbZLcLSc–Fg‡JJfYfZ”tcs…Y†•A12‘WBbd™›Gl‡Y†Zcc‘C–zFBAB…ZšzA1WnCb=ENŠs…Y‘nF‡bBJCdsz‡f‘‡J’•wc=NW‚–s’CABnvšb†‡=bItš=gvcBnvi•ŽtABI‡š=gvcBnvAs†NEbgNTJIY†9‘‚f=ANJzgCTJYST1‘1tLGNT‡gvWJ‡›T1‘‚gnKNddAYiJ‡…‘‚Ati1PNcbTtgJ7Y=v‘cc‘NcnG9gJ7CJ1‘CA‘lNElFtW‡n‚9Y‘N–K‘tšsEBEJ=J‘zŽvALxt9Nl‡š=gvEbnZ9n’cJ•…SfnTvcL‡CT=A1dBcSfnzv2=7YW=ic=BfB9=”9†=dJ‘•ICAbrC†lY‚2‘Lt™sK‚WZ7C2sntfŽrTGnaCcs9CGn™C2ŽL1czABd=CJ=E›GzS‡c=‚9s=S’J‘9iZr‡cb‡‚7LEB2•‘‡cB†‡JBNBEJ=1c•€J’J‘‡JBS‚9bI‡š=gvcBnvAs†99•…CfZ”J†=7S9n1AF…SfJTZfsANJZKCT9’CfzncfŽPt’‡IScsYC2B™C2Ž™NAFI‚Ab”C2‘IJf‘K1dZaBTZZtš=gvcBnvšbŽt9JŠYfb”t†‡dYš‘†9=•S=z1vWl•Ji=‘t9sLJc‘=SE‡™…AbxCtLEtGJ‘Ji•†BJ‚šB9sTxAs=19n™BAs†t9Nl‡š=gC’bYBAs†t9Nl‡AN”J2=7ZAŽrt9BSYcnLTWl•Ji=‘t9BdCfZbNE‡SZ‘‡w9cFK9J=1T†zdYW=FcdN†S‘=LE‡7Z‘‡12=Ptš=gvcBntGNxt9Nl‡š=gvcBnvšnFc=•tYcNLNfB…tbnI1J•NBblKcFScbn€1WntCfYVtWJZcb”V1A=†C2NGZ†zWYAZA1A‘ZCdŽgvcL‡CT=A1dBcSfnrfFdt–Žc=NWNd™c2•7t–FKt†=PNšNzvcBnvš”FvABI‡š=gvcBY›csŽvA=l‡š=gvcBxS9ZLCšŽaCcz•NA‘Lt™sKSšL7CGv’TfF‘NŠsV‡š=aS’JxYA‘a1J•IS†n2Cf‘12s™‚WBK‚–=2CG‡S9fŽzcTNK‚‘dICGJScf‘zc9ZLCd=aCA=ITfF†‚2LINc–ANTJSCcsx9cs†t9Nl‡š=gCABZt–n1A‘fB–=g92=7YW=ic=BfB9=Gt†‡7Y†•KcJ‚š‡AZ”tWbS‡c=‚9s=S’J‘J‘l™…A=ŠCEJ=ZEl‘‡cbT‘B‘BcJEc†b€…i•rZ‘z1d•Cg‡xZA„‘N=YAN9ŽzTWJ‡…’1At9B•NTZTCT9‘‚99‘1T1‘NJzLCšNzvcBnvšb†tA=ŠvcNLJWldc–z‘t9Bf›cNLZWJnTAdIC–sE12F‘Jš‘‡JBZ‚tLztAB‘‡9N‘‡JBABcJz›fs=‡cbTAbc‚šs=NA•lCABnvšb†t9NI‡‘b”92sWCTdi1’=ŠZ2JGT2ŽWtbnV1W”š‡i‡S9‘At™LANcsŽ1WJ‡‡T1‘1†=gNcnzNgJY…Ae‘CšBAvA=l‡š=gvcBxScsAvA=l‡š=gv†BdJšzi1JBN‡‘zaJ†J‡Y‘nV1W”š‡‘™JWl9CT=Pc=•vAJcT2Ž7Z‘‡r‡–BcSšLg92=7YW=ic=BfB9LZCABnvšb†‡EBI‡š=gvcBnvšb†t9•…CfZ”J†=7S9bP‡–B‚fNFYŠL1Y2ZK‡–9‘B=zGJ†zZC2ŽŠ‡–•t›9Lg‡GzSJ’•KcTNtCbzg1’Nnv‘nz1W”F‚‘zEZ†Jv›cvV1AFcC–zwCAFSC9‡i1inJCdL9‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9szT’vPJ‘lKBJBW‚9s•TcePJ’JLBJBdSšs•‡AeP‡9N‘‡cJ•S–s•t2B€1cNz‡c=x‡’J=v’JTS2Ž™‚2FKCcb†‚–NzvcBnvšb†tA=ŠvcNGZ†=‡Jil†td•†‡AbENTlSJAZK1A=ŠcTJSY=–‘‚9N”vA=l‡š=gvcBxS9nl1šBf›J=EYfB…tfL†1J‚‘YbzE‡fŽWS9nSNJ™9TJŽvš•gS9b†t9Nl‡šLzvdbWZš‡FcJ‚V‡šzGZWldt–=†cJ•…›J=1SA‚‘C’=”Nc–A1TJ‡›T9AcJBNcnG‡TJIvA‘ctLxNJ=gg‚’›9š‘Tf=lNTB‘YgJVJ’‚‘N’JbNiBFTTJ7ZA9‘CšNaNTJŽZTJ‡vie‘TfdANcnzZgJ7v‘9‘cW‡YNEl=Y=zLZ†NWY=•PB9Ž™CENŽtf‘atcFK‡šŽYfNaJ2V‘TfdANc”PZW‡•Zi‚‘‚G=…NJ=gg‚’›9š‘c9YN9ŽzNWJ•Y=e‘N†=LN9Žz›TJV‡T”‘ctLAN9V™xi9‘9A„Ac9N•N==ETW9A›c‘xBJY’C™L•1†1P9iB‘…AbbS7LEBfVP‡ENVBJYš‚ABI‡š=gvcBnvAs†99•ŠSfNLZ†Znv‘”š1=B’‡AYi9†=•JiJat9sESAz=‡JJŽT‘BS7LENcŽ=‡cbZ2•J–bI‡š=gvcBnvAs†99•…CfZ”J†=7S9n1AF…SfJTZfsANJZKCT9’CfzncfŽPt’‡KCdLrC’”AcfŽacdZLCš=2C2B™C2FLC‘ZLSJ=–CcFnC2szCšŽa‡’naCG”’C2si19•aCcs9CcŽ7ZfF‘Nbbxt9Nl‡š=gvEbnZ9”V19•…B2viTcBtcf•rc=•ŠYfbEEJnTA‘JCcJzB†”P19LL…‘B”BEJEfB‘JiZ‘T‘YICAJ•v†n’CABnvšb†t9NI‚9Ž’CABnvšb†1š•cScnGCfznZ‘Ž12‘YfbEEJnZAZK‡–9‘B=zGJ†zZC2ŽZ1WN‚fZGCG‡7ScBP‡9N’‡šz”S’NnZš‡F1A‘fN9=g92•dtbnF9b‡š‡–ŽgvcL=Zibi9b‚‘YcnGB’lgS9b†t9NŠNšNzvcBnvšb†t9Nl‡AbEccBxvšJP‡9‚Ž‚šLTvWBgS9b†t9Nl‡š=gvcBnvšb†t9BKC9=g‡A•…tf•š1dNl9=g9Wl•ZAŽwTbv‘Ycbc‡GlSZAZK‡–•NCšLTSAB=BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBWCJ1V‡b•…B9=fBfZ€BAs†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡A‡ZCABnvšb†t9Nl‡š=GCf‘xt–nFc=Bd‡2nEZWl‡Y2•2cJB‚šLg1’‡vZ†Z=9fVV‚=D™t†‡dJiJP1’VSJ•f‚As1Z‘b™t‘N’C‘•G9EnxJ†•dc–‡iC‘•G9Enx9’BIc–BZ‚dLc›fZnCGZ=9fVV‚JlwNG‡•9ANit9NtNfnEB’Nnv‘nšcJ•tS2bGJ†zYvšnZJcLctbeŽTd‡cZW=vJcLtZ=JzS’l=BAs†t9Nl‡š=gvcBnvšb†t9NlS‘zE›fŽ7J‘‡‘‡–•N‡‘lTv2n1JGNxt9Nl‡š=gvcBnvšb†t9Nl‡‘zLE=SJš‡r19NlCšzGYc•dZšFIc=•N‡‘=1TcB…ZAVVc=‚V‚fJ’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡AbEccBxv‘”š9fVSAb192Ž7J†NcbNlC9zzvcL=ZG‚FtdBKYbzEYcnNYTl†t2=‡‡šz”S™Lv9‘nV‡–BcBbBwt2Znv‘=Lt9NtNJl–YfL•cbnK1=‡iYb•TCgBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†c2šF›JzEZ2z•všbItdBfYfZ”tcB‡c–‘†tdBfYfZ”t2‡7C9‡šc=NlJlzvcLdC9‡i‡bBJ‚fJ’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠ‚bzzvcs•c–F2ccšFB2ng‡ALdC9‡i‡bBJ‚–L1‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvi•Ac2‘f‚AY™cfL‘TGnL‚’b”CcFnC2Ž†TGzABd=YfNaJ2V‘TfdANc”PZW‡•Zi‚‘‚G=…NJ=g–NzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gv†lSS9bItd•SSfn”J2ŽxcGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gv†lSS9bItJ•Š›JzE‡f‡7Jš1VcTn†CšzFfFYSJn‡–•t›Je™Nc•7J‘J‘t†VSJ‚ŽNf=19’YItcdF‚–zFBAB…ZAVVc=‚Ž1d‘fYGNnv‘”Vc=‚ŽBšLTCgBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnZšFA12Ft‚fnaJ2ŽnZ–d’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†‡=bI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡‘zE›GzScGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gv†lSS9bItJ•Š›JzE‡f‡7Jš1VcTn†CšzFfFYSJn‡–•t›Je™Nc•7J‘J‘t†VS9=zEl…›EB†tdBKYbzEYcnNZWlit9NtYbzEYEBx9AV’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9BB2na9†l7C=‡Kt9ZnNšNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†‡=bI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡A‡ZCABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Bc‚AY™JWBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnVc2=lCAb1T2‡WY‘nF1J‚‘CdLg9Wn‡J’eŽc=NP‚fJ’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9BKC9LgZ†zdZš1V1JBNNdsKElWYT=šcJ•tS2bfc•dtbnFtšNt‚fZGJ†ZE›dndT–NŠ1dzGZWldt–z212‘fBbz9YŠL…tbz1d•cCb•TS’l=BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnr1W”‘YfbENTbS9šbFT’BI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=GJ†NWY=1’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB‡YW=‘‡–BKBcZEJcBNS†Nxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†‡=bI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšbPc=BCfnEJ†Jdt–F7cbNl9=GNcŽd›9”‘1JBYcNGSGB1Yd‡PccVFCfnGJ†ZSJi9VtšNt‚fZGJ†ZE›dndT–NlSAZGSGlW›cK’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvcBnvšb†1A‘cYfZ1t†Jnv‘nK1dBcBbzENTlW›†Nxt9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†c=B›=z1‚šLnvšb†t9Nl‡š=gvcBnvšb†1A‘cYfZ1t†JnZ†ZdT’BI‡š=gvcBnvšb†t9eVtš=gvcBntglxvA=l‡š=gvE‡xScsxt9Nl‡š=gvEbnTAb†BcJ•T†n‘S9L†BcJgBcJ=1c•€J’•aBcbl‚ŠLzT’vPJ‘lKBc=‘B†JESAePJi=P…‘B…S2JE›fPJiJK‡cb…‡šs•1A==S9L†BcJgBJNrCGn™C2ŽL1cBVvA=l‡š=gvcBxS9nl1šBf›J=EYfB…Zš1V‡–•…‚b=aJWlSc–‘†cJ•…›J=1SA‚AtEbgNTZxNT9‘‚99‘1dB=NcsgCW‚’›9‘‡cb”V1’JTNGJ‘J’•aBcbl‚ŠLE9cz=‡cFiT™KSd•SSfn”J2V‘TfdANcnG‡TJIvA‘NEbbNJ=gg‚’›9‘7ZAŽ™c2JTNGJ‘1J=™…‘BZ‚GJ•CAs=‡EzzBcb2‚fJzB2s‘…i•rTAš’C9szBEl€9iZ‘CJz1d•Cg9’t™K‘ccJGNEDPCg‡x…AdšN–NgvA=l‡š=gvcBxS9n‡–•t›TJ‡…’1Ac9N…NJ=ggJV›9’N’=•1J‚‘S‘z1S2z†t91Vc=•YgvšvšnWCJ‡w1WNc›Jd™JEZ•J‘Zr‡š=fS2nGZ†zW…šsl‡‘•ŠSbd™Bf•SY=•r‡š=fS2”™NTlSJi9VTbBtCfY™9fz†t9‡r19BcS2–™Z2=7Z‘•r‡š=fS2bGJ2z•Y=‡PNgZgv=d™›Gl‡Y†Zcc‘CgvšvšnSJiJcc‘Cbz€Tšb†J‘zAcTNc›==Et†NS‡9sl‡‘BSB=diJ†zSJ‘Zr‡š=f›=dit†‡7Z’•cc‘Cgvšvšn7Zi=‘c†dŽS2nGCfz•Yd‡z1dB1S2BnZ†B‡c–Fw‡g”F›Jz€Tšb†c–FK1dBcS2ZGJ2LgS9b†t9Nl‡šLzvdbWCJ1V‡b•…B9=GZ†=WC91‘t9NtSfZ”9†=•JšŽ‡–B1S’JY‚2Žrc=•PB9L™CA=ITfF†‚2FLCgB7C’1‘JfŽLNTBKSd=1CfLxB2szCšŽa‡’naCG”’C2si19•ABd=rCfAxAs†NiNK‚–z™S’Jx‚†‡AtcFaCcs9S’JnZfF‘N‘ZLCfn–C†9šJG‡AtEBPcJ•tYfNLCf=dcbnKN9ŽzNWJ•9A–‘Tf=ŽNd=Žvi9šti9‘1dB=NcsgCWJV‡T”ATŠLJNJz‘‡TJY‚9š‘N’9VNElEBiJIY†9’N’=NNc„A9iJ‡SJeA19‚ANcnŽ9g‚’›9d‘‚bB’NTB‘ZT9‘‚99Ac=N‘NJzgTW‚’›9‘Tf=€tdBfYfZ”t†l‡C=1Vc2JTfs€Jš‡V‡cJ•S–sTNfB€1cBš…™KSdsES’N=STlV‡cdIC–sE12F‘‡El‘Bcbc‚šs=NA•lCABnvšb†t9NI‡‘b”92sWCTdi1’=ŠZ2JGT2ŽWtbnV1W”š‡i‡S9‘At™LANcsŽ1WJ‡‡T1‘1†=gNcnzNgJY…Ae‘CšBAvA=l‡š=gvcBxScsAvA=l‡š=gv†BdJšzi1JBN‡‘zaJ†J‡Y‘nV1W”š‡‘™JWl9CT=Pc=•vAJJZWldt–zVccFcYbz1Tcs‡c–zFcJ•P‡šzGZWldt–zVccFcYbz1TElgS9b†t9NŠNšNzvcBnvšb†t9Nl‡AbEccBxvš‡V1i–FSfNat2•=9ABPcJ•tYfNLCf=dcbnK1’=P‚fJ’CABnvšb†t9Nl‡š=gvcBnvš”V19•…B2ZFv†JScfN†9=•S=z1vWl•Ji=‘tšNWS‘=19WlWCcŽz‡b•tCfNFZfŽrN–ŽLCfn–‚fŽ…C2s™N7sABd=wCG1šcGlI1†‡PB9Ž™CcŽ7ZfF‘Nbbat‘Zitš=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡šzGc†lWCdVt9vV‡‘diJ†=WCJ‡‘‡–N†S‘=19WlWCcŽz‡b•tCfNFSiBgS9b†t9Nl‡š=gvcBY›tsLC9KICfLx12L‘t9ZaBTB9CcŽ7ZfF‘Nbbxt9Nl‡š=gvcBnvšbP1J•JfbENcF7Z‘J†9bNŠCJ=E›GzSJGNxt9Nl‡š=gvcBnvšnVc2=lCš=ECGz1Yd‡F1A‘fN9Lg92‘•c–zw‡–NP‚fJ’CABnvšb†t9Nl‡š=gvcBnvšbPcJ•tYfNLCf=dcbnK1’=l9=f‚AL‡cb”V1A‘KScZ192ŽWYTD’vA=l‡š=gvcBnvšb†t9Nl‡š=g9†lWY9FV12‘d‚‘zTvT=ntbnF‡bBJNšNzvcBnvšb†t9Nl‡A‡ZCABnvšb†t9Nl‡š=g9†‡WtbnV1W”‘›d=–YfBE›cZi1JBšC–zFBAF•JiJPc=•†CdŽg‡glScfeVt†=’C2NLJ†z7Y‘‡FcTnJBfbE9cFYvAZr1dBf›2NF1’N…YšncTnšSb™JcFYvAZr1W”‘YbzENTlYJ‘nK1inNCdŽg‡fz•Z‘‡r1TnfScnGJcFYvAZr19BcS2–™J2L…›EBacTn‚bd™Bf•‡CE•Kt†=’tš=gvcBnvšb†t9Nl‡š=gvcB…Y=‡‘cJB…‚‘zE9cFYvAZL1WnYcY™Z2=7Z‘JaT–NdCc”™TWbWY=‡Pt†=’C2Y™T†=7Y†•icJB…‚‘zT1’N…Y†•A12‘WBbd™›Gl‡Y†Zcc‘C–zFBAFWZš‡w1iNdB2NL9cFYvAZwc=BCbdi92ŽSvAZdT’BI‡š=gvcBnvšb†t9YBWJŽTš–‘‚ŠLKNcnG‡TJIvA‘‚f=ANJzgCTJ•Ndš‘‚b‚VvA=l‡š=gvcBnvšb†c2šF›JzEZ2z•všbItdBfYfZ”t†l‡C=1Vc=•N‡‘=1TcB…Z’ZK‡JvV…šzGCglSJilV‡EBI‡š=gvcBnvšb†t9Nl‡š=gv2‘7YšzKcJBCš=g‡AL•cbnK1=NŠSfNFvcL‡cb”V1AV…šz”c2•7tb‡Kt‘•itš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9BKC9=g‡A••JiJ2cJ•…›J=1SAs…Zš1V‡–•n‚š=g9†‡WtbnV1W”‘›dLTCgBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†‡–B›c”i1AB7CJ1it9JcNbd™J†BdZAŽA12=†CWJ‡…šY‘‚bB’N=zTcW‡x…’1’N’=NNEl=‡iJŽY2K‘1dB=NcsgCW‚’›cb…›TZPcJ•tYfNzSiBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvW=gS9b†t9Nl‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9Nl‡š=gvcB•J‘=†tšBcBfN”9WJxv‘nV‡–BcBbBF‡GN•J’ZKtW–V‚–L1‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=g92•dtbnF1JB…YcZGJ†zE›Jn™c=•K‡bBF‡GN•J’ZKtW–V‡‘lTv2‘‡J’•wc=Zitš=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9NŠCfn”T2Ž=BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB…Zš1V‡–•…‚b=aJWlSc–F7tdBšCfJcYcn…Y†•V1TnJC=•TvT=ntbnF‡bBJNšNzvcBnvšb†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvš”FvABI‡š=gvcBnvšb†t9NtNfnEBABv9šbP‡–B‚fNFYŠLdJAŽ11JBtC=z19†zxvAK’vA=l‡š=gvcBnvšb†td•…CfZ”J†=7S9–Ft9‡š‡–s’CABnvšb†t9Nl‡š=gG1‘1W‡ŽNTvABWJŽ…‘D‘Tf=lN9Žz‚T‡n‚9Y‘N–K‘vA=l‡š=gvcBnvšb†c2šF›JzEZ2z•všbItdBfYfZ”t†l‡C=1Vc=•N‡‘=1TcB…Z’ZK‡JvV…šzGCglSJilV‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcL7YdzŽc=BYbb1t†=nZgl†Ji–VNšNzvcBnvšb†t9Nl‡š=gvcBnvi•ANc”A‚T9šN†1AtEbgNTZxNT9‘‚99‘‚tLvN9ŽzvTJYSE–‘1dB=NcsgCdNzvcBnvšb†t9Nl‡š=gvcBnZ‘zA1A‘cSbd™‡ABxv‘nV‡–BcB–=GZ†znv‘n‡–•t›Jl9NfLdC9‡i‡bBJ‚fJ’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡AbEccBxZAŽ‘cgnf›cNLZWJxv‘n‡–•t›9Žgv2n…Y†•V1TnJC=•TS’l=BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9BB2na9†l7C=‡KT’BI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†‡=bI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†1JB‡‡šLg9†‡‡CElKcTNtv2NatEl=BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NtYfn1vdnWCd=†9bNŠ1=•9‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnL1WN…Cb=ET2snvABP1Wn…‚JzETWlZc–zFt9Bf›d=g9†‡‡CcsV‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšbP12šFS‘zTvT=nv‘nAcc‘IBblLNE‡SZ‘‡‡1=B’CšL9‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡šz”9†ZWvš–Ft9Nt‚fZGJ†Z€BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvWb7CdFK‡–N†SAZGYEBE›cZi1JBšC–ŽYGl€BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gv†lSS9bI1iNtSfZGCfz€S†l21J•‡2nEZWl‡Y2•2cJ•tYfNz‡AL7CT=Pc=N’‡šz”9†ZWvALV‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡šz”9†ZWZ9‡F1AŽš‡–=–YfB…Zi=z1czitš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†‡=bI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnVc2=lCš=T9Wl7c–nŠ1AFn‚fJ’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠScNLJ2••›9bFT’BI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšbP1Wn…‚JzETWlZc–zFt9vV‡šz”9†ZWZ9‡F1Azitš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Bc‚AY™JWBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†1JB‡‡šLg9Wl7c–b†9bNlSAZGSGlW›TDPcgndCfZbNE‡SZ‘‡w9cFKTcbEBfŽZcb”V1A=†S‘=19WlWSEB†td•SSfn”J2ŽYvšbP1J•tCfnc‚AF7ZAŽ™c=Nd‡–ŽgvcL=Zibit‘NP‡AJ’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NlSA”™t†bSJšV9J•…›9=–YfB…tbnš1šZitš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvW=gS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†c=B›=z1‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡‘=at2Ž‡J’N†Tczitš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvW=gS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvW=gS9b†t9Nl‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9Nl‡š=gvcB…t–zK‡–•c›cnK‚AL•Y=1‘cbNl9=g9†‡‡CElKcTNtv2NatTBgS9b†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnZAŽLt9N†SAb1T=Z•JiJa1dBJ‚fJ’CABnvšb†t9Nl‡š=gvcBnvšnFc=•tYcNLNfB‡c–zFcJ•K‡2NGEBxv‘nFc=•tYcNLNGl€BAs†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšnFc=•tYcNLNfB…t–zK‡–•c›cnr‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9s•Jfz=9i=aTAbNScJLJEn†CABnvšb†t9NI‡‘b”v2•WC9‡št9NlSA–™JWJ‡YW=Pc=NŠ‚fna92ŽSY=‡Ft9s•Tc==CJJ™Bc9CGJ=‡AB=…i•rTA‘–‚9sEtc•‘19‘z‡c‘J‚†J=fŽ‘‡cB†‡JBL‡’JTNf=’CABnvšb†t9NI‡iJVBTD‘1JN•1TncNJd™cLS‡c=a‡A9Pf‘LSgldt–nwTAdB=zGJWnSJ’•A1šBc›9ŽLZ†JSt–zA1JBZBJd™EZYYšzKc2‘c›JzENczS9i=12‘t›c”™CfLYY‘zVc=•WB=Y™JWJtcbzK12FZBcb”9†Z7vcs†t9Nl‡š=gCA‚‘CA=ENiBF1cb”9WlWt–šATGdFScnGcFYC9Fwcd‚šBcnLJWlYY†•A‡f‘c‡2J”T†•YYd‡F‡–BKS2nGJE‡SZ‘1VcJBK‚ANFgNNS=–™TšZW›dsZCABnvšb†t9NI‡A–™JWJ‡YW=Pc=baCfLxB2L‘ccLxt9Nl‡š=–T9zTZT=9=N–‚fŽxN–Lnvšb†t9ZZtW‡Y…‘9‘c†J=N=zTB9NzvcBnvš–ŽvAJ•t2KPJi•†TAbY‚9sE9GvPJi‡KTAJJ‚9bI‡š=gvcB‡AFLSd=YCcŽŽYAFKTb•I‚W9Vtš=gvcBnZ–dVvAJEScF‘JšLITA‘2‚™LLtfz’CABnvšb†TczJtW‡SC9‘Tgn€N=P›W‡‡‡JlgS9b†t9Nl›9F†C2FKTb•LBEl–‚fŽxN–Lnvšb†t9ZnYšN=19Žr‡cJf‚ŠKPf=€CcN†TA=L‡AJE1’b€‡cn‘TAbWBEJEN2Ž€‡JJŽTA‘”Sd„Pf=ZCABnvšb†T2zntW‡YN=v‘cJBKNT‡LNWJŽvi•gS9b†t9NlYdFlC2‘zc=lKBd=–CEZ‡xAsVNfzKCcb†tš=gvcBnZbd™vAJE12F‘ST=VBcbC’JzSfzlCABnvšb†T2zWtWJ‡Sc‚Ac2‘PvA=l‡š=gvTZN‡AFISWJwCfzScGlKtiZxt9Nl‡š=–‡ibg‡cbT‚2J•JE‡zxA‘LCšŽK‡‘z’tš=gvcBnZf‚™vAJEv2F€1EZIBcbT‚2J•JE‡†CABnvšb†TšZWtWJVt’v‘‚bYPN9ŽzTgJYS9–A1cbEvA=l‡š=gvTZ€vcFLS’–iCcŽYNAL‘tEnPB9=–‚GlVc9Lnvšb†t9Zb›9‘†C2FVN’‡KSEbrCf•‡C2‘Itc‡KS9Ž–CAs‡›†lV‚fnLS9z7Cf=…‡2sI1czVCAn7‚f‚A‡šLnvšb†t9Zb›9‘’C2FVN’‡KSEbrCf•‡C2‘Itc‡KS9Ž–CAs‡›2‘at’‡LS9z7Cf=…‡2sI1czKBEl1‚f‚A‡šLnvšb†t9Zb›9F†C2‘†19ŽK‚–diCcLŽYA‘KTgZxt9Nl‡š=–ZE=BAFLCcsYCfBS›2‘P‚TNLC–Vštš=gvcBnZ–9™Tdba‚fFSC†laNš‘xt9Nl‡š=–ZTN‡AFLSJzvCG‡nZfFiN’‡aBT9IC’n™NAFA1TZxt9Nl‡š=–ZTZBAFKS9=2Ccz•TfŽ‘‚bZaC–L†tš=gvcBnZ–=’T†BaCc=S9fŽAt9ZI‡‘z9C†Y’B2L‘‚2sxt9Nl‡š=–tEB€vcFLSJzvCG‡nZf‘KN=•KS2s‡tš=gvcBnZ–=’T‘baCc=S9fŽAt9ZVCWBvS’JSv9Lnvšb†t9Zn›–‘lC2‘zc=lKBd=–C’nŽtfF™‚f‡KCcb†tš=gvcBnZ–=FT9ba‚f‘‡YALAcTBK‚‘dICGJScfL‘‚TBKBEb‡tš=gvcBnZ–=FTJbaCc‘ZGlŽNczK‚‘dICGJScfL‘‚TBKBEb‡tš=gvcBnZ–=FTEBaC†Y’B2F‘NtsPBdz”C2Fxv9Lnvšb†t9Zn›9FlC2F†‚2FPBE–’CGN‡xAŽ‘c=Jxt9Nl‡š=–tEzN9cFLSJzvCG‡nZfs™NWNVCWBvCf=ŽC2‘zcENxt9Nl‡š=–tTN‡AFK‚fsYCcFV›2‘i‚9•LCd=P‡Av™Z†nSJ’•AcTni‡iJ‡SJAti‡VNTB€Ni9’Bc1‘TG=tNTJF‡šNzvcBnvšb†tA=ŠvcNLJWldc–z‘t9B…B2”™›fŽ‡JiZ†Ncsz9TJ‡‚c1ATŠLJNJz‘‡cZ”tWbS‡tKSdsES’N=STlV‡cbxCtLEtGJ‘Ji•†BJ‚šB9sTxAs=19n™BAs†t9Nl‡š=gCABZtbnI1AšFYANFvd‡=ZšFK1š•t‚f”™Nf‚Ac=NSNdKPBWJI‚c”‘cc9ANcnFviJ7STv‘TŠLNcsGBdNzvcBnvšb†tA=IBdNzvcBnvšn’‡bB…‚AbETcBSC=‡‘cTNt‚f”™NfB•Y=1‘c=•SCfna9cs…Z’ZK‡JBB=zGJElgS9b†t9NŠNšNzvcBnvšb†t9Nl‡šz”92s•c–‘š9f‘fS‘=KEz•Z‘‡i1dN†C2bENEBdcbb†1TncNJz1c2Ž7C=b†t†dšSA–™JWJ‡YW=Pc=NPNšNzvcBnvšb†t9Nl‡ANLJWldc–z‘t9•t›cZEJTBgS9b†t9NŠ9N†CABnvšb†TG=I‚9NzvcBnvšb†tA=–CE9‘tfŽz‚czK‚‘dICGJSJ9Lnvšb†t9Nl‚9=bv†B‡c–z1=Nl‡šz”‡’•nZAŽ‘‡–BcC=z1tc‚ATb‚iNcb=Tg9šti9‘cWnZNEbgtg9‘‚9J=T‘YFS2J=En†CABnvšb†t9NI‡‘b”v2•WC9‡št9NlSAJ9ZcB•Ji9Vc=BdCfNzZfsš12‡K‚gZAC2B™C2ŽacdZLCš=2C2‘I9W9‘TgnNT‚™B9NzvcBnvšb†tA=ŠvcNGZ†=‡Jil†t9NtN–‘zv†l7C=nKcWnc›9=€‡TBP…AbdC7L=v’J=JAZPTAb†SŠL=1c•”S2LAcTNaB2–štš=gvcBnvšbŽt9JŠB‘=1t2•79šb†td•P›9=GCGJdZ‘‡ac=•n‡i9’BJv‘‚gn2NTZxNTJSY=–‘‚9N”NTJŽZcJ=9i=r‡c9F‚2BI‡š=gvcBnvAs†99•ŠSfNLZ†ZnvšbPcd•c›J=19†l7YWZ†1J‚‘YbzE‡fŽWS9ZLBTJ”Cf=ŽS2sANf‡a‚9=ACczntfF‘NWNLCgB7‚fV’JG‡AtEzKS=z1S’‡‡YAL‘TGnL‚W‡AC†D‘Tfz†t9ŽLScs™C’Z7‡2ŽVNG‡a‡’naCfLI›2F‘NJlLC=IC2B™C2s™‚WBaB2–’S’JnZf‘ITf‡aCcs9B†‡n›2‘rt9•aBT1iCcV’1†lKN‘ZVCf”IS’JnZfF†‚2FKSW1IC’Z7‡2ŽzT–ZVCf”ICcznC2‘KcczLC†l’tš=gvcBnvšbŽt9JŠ›Jz19WbWCTZ†ccšFB2nGJ2•7S9ZLS9z–Cf=VxAsANJZKCT9‘YfNaJ2V’N’=NNcbT›g‡Y9AV‘C’b7NJ==NWJ7›9Y‘12dšN9VPSgJIZ’‡gS9b†t9Nl‡šLzvdbdZA•F1WNd›d=bJWZ‡Y=‡’‡–BKB2nzZGlKt2FI‚W1ICc=VB2ŽN’nKBd=YCGJYS2LANd•L‡A–tš=gvcBnvšbŽtAdtš=gvcBnt–”Žcc‘‚b=Fv2‘dJiJr‡–BKB2nzv†zdY2Ž’c=N†SAJ–ZENnv‘”‘TJN’‡šz”‡’=YvšbP‡JZn‚š=g92Ldc–z‡–BKB2nrYG=NZ–bVvA=l‡š=gvWBgS9b†t9Nl‡š=gvcB…tbnI1J•NBblLZ2L‡Cg=w19Bc‚Ang‡A=•JiJ’‡b•Z‡AYi‡GlWZ‘J†td•†›–=g9WJN9šbP‡9Zn‡šz”S’=nv‘nP‡b•…SfZGCG‡7S9=VT’BI‡š=gvcBnvšb†t9•…CfZ”J†=7S9”V1AFcC–s’CABnvšb†‡=bItš=gvcBnvi•ŽtABI‡š=gvcBnvAs†99‚‘SfnEJc‚‘cdNtNJdP›WJ™BJ”‘cEbINcnG9gJ7CJ‡gS9b†t9Nl‡šLzvdbSZ‘‡wcE=–S’9šNA‘iTbZKBcnvC2‘IJfŽšN2nIB†naS2BntfŽaCšŽaCTB9C2‘IJfL‘tiNVCgB9CfL…tfŽrN‘lLBTJ”Cf=ŽS2ŽictsKBJzJtš=gvcBnvšbŽt9JŠB‘=1t2•79šb†tdBtYcNLZWl•Ji=‘t9BKBcZGJ2FSc–=†NEn‘9WJ‡‚c„ATŠL”NT‡zTgJI›9”‘N’JšNEl=YW‡S‡TD’N’=NNJd™JWJYYd‘TfdANE–P‚W9A‡JYšN–NgNcsŽti‡YJiY‘1cJYNTZxNTJStšš‘N’J9NED™‡W9šti9Ati1PNT‚™BTJYS9–‘‚9YiNTJŽZT‚’›9š‘C’=ŠNTB‘BgJV‡T”Ac29VN=zExiJYS9–‘N–K‘NJdPBW‡YJiY‘cc=’N=zExiJI›9‘‚bBnNEDA1šNzvcBnvšb†tA=ŠvcNLJWldc–z‘t9B…B2”™›fŽ‡JiZ†Ncsz9TJ‡‚c1ATŠLJNJz‘‡cZ”tWbS‡tKSdsES’N=STlV‡cbxCtLEtGJ‘Ji•†BJ‚šB9sTxAs=19n™BAs†t9Nl‡š=gCABZtbnI1AšFYANFvd‡=ZšFK1š•t‚f”™Nf‚Ac=NSNdKPBWJI‚c”‘cc9ANcnFviJ7STv‘TŠLNcsGBdNzvcBnvšb†tA=IBdNzvcBnvšn’‡bB…‚AbETcBSC=‡‘cTNt‚f”™NfBWYAZV1šBcJc”Žt†lSY2eVtšNtSAZ1t2•dZAŽA12V›9‘–vElgS9b†t9NŠNšNzvcBnvšb†t9Nl‡šz”T2zWCJ‡K12Ž‚fJLJcBv9šbP‡–B‚fNFYŠLWYdFFc=BcBJ9™Cg‡S9ABVT’BI‡š=gvcBnvšb†t9•…CfZ”J†=7S9bP‡–B‚fNFYŠLWYAZV1šBJCš‘9vENnZAŽ‘‡–•SSfng‡ALWYdFFc=BcBJ9™Cg‡SJ†NcbY›9LTBAB•Ji9V‡f‘f‚šLg9†z‡YšzKc=‚‘Jfb1‚fŽE›dndt‘N’‡AbENTldC9‡itšNt›=dit2ŽSJiJ91J•VCbBwZ2ZY›d=VT–NlS‘z”J†=‡cbnV1W”š‚–s’CABnvšb†‡=bItš=gvcBnvi•ŽtABI‡š=gvcBnvAs†99‚‘SfnEJc‚‘cdNtNcn=CTJ™BJ”‘cEbINcnG9gJ7CJ‡gS9b†t9Nl‡šLzvdbSZ‘‡wcE=–S’9šNA‘iTbZKBcnvC2‘IJfŽrN‘lIB†naS2BntfŽaCšŽaCTB9C2‘IJfL‘tiNVCgB9CfL…tfŽšN2nLBTJ”Cf=ŽS2ŽictsKBJzJtš=gvcBnvšbŽt9JŠB‘=1t2•79šb†tdBtYcNLZWl•Ji=‘t9BKBcZGJ2FSc–=†NEn‘9WJ‡‚c„ATŠL”NT‡zTgJI›9”‘N’JšNEl=YW‡S‡TD’N’=NNJd™JWJYYd‘TfdANE–P‚W9A‡JYšN–NgNcsŽti‡YJiY‘1cJYNTZxNTJStšš‘N’J9NED™‡W9šti9Ati1PNT‚™BTJYS9–‘‚9YiNTJŽZT‚’›9š‘C’=ŠNTB‘BgJV‡T”Ac29VN=zExiJYS9–‘N–K‘NJdPBW‡YJiY‘cc=’N=zExiJI›9‘‚bBnNEDA1šNzvcBnvšb†tA=ŠvcNLJWldc–z‘t9B…B2”™›fŽ‡JiZ†Ncsz9TJ‡‚c1ATŠLJNJz‘‡cZ”tWbS‡tKSdsES’N=STlV‡cbxCtLEtGJ‘Ji•†BJ‚šB9sTxAs=19n™BAs†t9Nl‡š=gCABZtbnI1AšFYANFvd‡=ZšFK1š•t‚f”™Nf‚Ac=NSNdKPBWJI‚c”‘cc9ANcnFviJ7STv‘TŠLNcsGBdNzvcBnvšb†tA=IBdNzvcBnvšn’‡bB…‚AbETcBSC=‡‘cTNt‚f”™NfBWYAZV1šBcJc”V›fŽSC=bItdBtYcNLZWl•Ji=‘9bZnBš‘gSšLnvšb†t9•itš=gvcBnvšb†t9NlSAY™T†=SJ‘‡‘JTnKN=zTvT=nv‘”V19BK›dŽ9NEz‡YšzKc=‚‘Jfb1‚fŽxvAK’vA=l‡š=gvcBnvšb†1A‘cYfZ1t†Jnv‘”V19BK›dŽ9NEzdY2Ž’c=N‚fna9Wn‡J’BItd•S2NLJ2Ž7C–FV‡c‘c1d‘fYGlYJ–J’T–NŠ‚fna9Wn‡J’BItd•S2NLJ2Ž7C–FV‡c‘c1d‘cYG‡NScLiTJZl‚š=GCGJdtbz1dN†SAY™T†=SJ‘‡‘JTnKN=zc‚’•19i•Ft‘N’‡šzG9WbWC91V1J‚FB9L9‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9JŠBJ=EYcŽnT‘BZSAJTNfdP1TBP‡JBx‚9sE›fPJiJK9cs†t9Nl‡š=gCABZZ‘nK1inN‡iJYB9„‘‚dYVNcnL›W9‘‚99‘Tf=šN=z=Ygvšvš”‘cW‡gNTJ‘Yg9‘‚99‘Tf=xNdVANTJSv‘”‘1†bcN==€CiJ™BJ”‘cEbINcnG9gJ7CJ‡gS9b†t9Nl‡šLzvdbWZš‡FcJ‚V‡š=g92Ldc–z‡–BKB2nzv†l7C=nKcWnc›9=€1TBP‡JBx‚9szxAeP‡csz…AbN‡AJ=N’n=1J•šBc‘1B–„Pfz€JšFK‡JYFS2JTNGJ‘1E‡Ž…AJaS’J€vcB‘19LzBcdŽBŠLEC2dP‡9N‘‡JBTSds=NAKP1cZa…AJgBcJzBE‡‘‡T=™BJYš‡šs•‡’vP‡cbT™KSds•TcB=‡TB™‡cb1BGJLcGZ€CJ‡A…‘Yš‡šs=v’J=J‘l™…AdŽBŠLEtEN€CJ‡A…AbNScJ•J2=€1cJavcs†t9Nl‡š=gCABZt–zK‡–•c›cnzv2=7YW=ic=BfB9=€19=PT‘BxC7LzxAŽ€JAnaC=nF‡bB1B†‡n›2ŽVT–•IB–L1Cc=VB2ŽN’nKBd=YCGJYS2LANd•L‡A–tš=gvcBnvšbŽt9JŠYfb”t†‡dYš‘†9=•S=z1vWl•Ji=‘t9sLJc‘=SE‡™…AbxCtLEtGJ‘Ji•†BJ‚šB9sTxAs=19n™BAs†t9Nl‡š=gC’bYBAs†t9Nl‡AN”J2=7ZAŽrt9BSYcnLTWl•Ji=‘t9•YAb1v2ŽtZidi12=†S‘z”J†=‡cbnV1W”š9‘rvEBx9cs†t9Nl‡AJ’CABnvšb†t9Nl‡š=g9†z‡YšzKc=‚‘Jfb1‚fŽnZgl†td•tCAb1TEZvCdFr1A‘cCfnKT†l=CJJIt‘Zitš=gvcBnvšb†t9NŠ›Jz19WbWCTZ†td•tCAb1TEZvCdi1J•ŠC–LGCGJdtbz1dN†SAY™T†=SJ‘‡‘JTnKN=zc‚’B19i•Ft‘N’‡š‘rvEBYZAŽ‘‡–•SSfng‡ALWYdFFc=BcBJ9™Cg‡SJ†N’cbY›9LTBAB•Ji9V‡f‘f‚šLg9†z‡YšzKc=‚‘Jfb1‚fŽE›d‡dt‘N’‡šzG9WbWC91V1J‚FB9L9‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9JŠBJ=EYcŽnT‘BZSAJTNfdP1TBP‡JBx‚9sE›fPJiJK9cs†t9Nl‡š=gCABZZ‘nK1inN‡iJYB9„‘‚dYVNcnL›W9‘‚99‘Tf=šN=z=Ygvšvš”‘cW‡gNTJ‘Yg9‘‚99‘Tf=YNdVANTJSv‘”A19‚™N==€CiJ™BJ”‘cEbINcnG9gJ7CJ‡gS9b†t9Nl‡šLzvdbWZš‡FcJ‚V‡š=g92Ldc–z‡–BKB2nzv†l7C=nKcWnc›9=€1TBP‡JBx‚9szxAeP‡csz…AbN‡AJ=N’n=1J•šBc‘1B–„Pfz€JšFK‡JYFS2JTNGJ‘1E‡Ž…AJaS’J€vcB‘19LzBcdŽBŠLEC2dP‡9N‘‡JBTSds=NAKP1cZa…AJgBcJzBE‡‘‡T=™BJYš‡šs•‡’vP‡cbT™KSds•TcB=‡TB™‡cb1BGJLcGZ€CJ‡A…‘Yš‡šs=v’J=J‘l™…AdŽBŠLEtEN€CJ‡A…AbNScJ•J2=€1cJavcs†t9Nl‡š=gCABZt–zK‡–•c›cnzv2=7YW=ic=BfB9=€19=PT‘BxC7LzxAŽ€JAnaC=nF‡bB1B†‡n›2ŽVT–•IB–L1Cc=VB2ŽN’nKBd=YCGJYS2LANd•L‡A–tš=gvcBnvšbŽt9JŠYfb”t†‡dYš‘†9=•S=z1vWl•Ji=‘t9sLJc‘=SE‡™…AbxCtLEtGJ‘Ji•†BJ‚šB9sTxAs=19n™BAs†t9Nl‡š=gC’bYBAs†t9Nl‡AN”J2=7ZAŽrt9BSYcnLTWl•Ji=‘t9•YAb1v2Žcc–bItdBtYcNLZWl•Ji=‘9bZnBš‘gSšLnvšb†t9•itš=gvcBnvšb†t9NlSAY™T†=SJ‘‡‘JTnKN=zTvT=nv‘”V19BK›dŽ9NEz‡YšzKc=‚‘Jfb1‚fŽxvAK’vA=l‡š=gvcBnvšb†1A‘cYfZ1t†Jnv‘”V19BK›dŽ9NEzdY2Ž’c=N‚fna9Wn‡J’BItd•S2NLJ2Ž7C–FV‡c‘c1d‘fYG‡NScLit9BKBcZ”c2•7vABP1in›JzEJ†JJY2VAc=‡i›b•TYG=NZ–bVT–BKBcZ”c2•7vABP1in›JzEJ†JJY2VAc=‡iB‘•TG=x9’B†T9N’‡šzG9WbWC91V1J‚FB9L9‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9sE…AB€Jš‡z‡cb†SŠLESA•€StLP…‘Bf‚fJ•JAeP1cN™T™KSdsE9Gb‘1cNz‡JBW‚9sE9G”PStLP…‘Bf‚fJ•JAeP1cN™T‘BPS–s•t2z=1cNz‡cbcS9bI‡š=gvcBnvAs†NEl•tgJV›EY‘Tf=šN9ŽzTW‡nTid‘‚G=…NT‡LNWJŽvie’N’=NNcb•viJVN2YAtAbŠNdVAJgJ‡JAV‘N2šANEbgg‡x…iY‘Tg”INTJTCA–™JWJScbzK12F9CcŽ™C2‘iNJ•ABd=wCfšTf‘K1dZPBdL–Cf••cfL‘N=laCš=bYd‘‘JšFi…Ab‡‚7L=‚GJ‘1cBAvcs†t9Nl‡š=gCABZt–n1A‘fB–=gvcLdZ‘1š‡–NŠ›2Z”t†l7CcN†NEl•tgJV›EY‘ccbfNc–AN9NzvcBnvšb†tA=ŠvcNLJWldc–z‘t9B…B2”™›fŽ‡JiZ†Ncsz9TJ‡‚c1ATŠLJNJz‘‡cZ”tWbS‡tKSdsES’N=STlV‡cbxCtLEtGJ‘Ji•†BJ‚šB9sTxAs=19n™BAs†t9Nl‡š=gCABZtbnI1AšFYANFvd‡=ZšFK1š•t‚f”™Nf‚Ac=NSNdKPBWJI‚c”‘cc9ANcnFviJ7STv‘TŠLNcsGBdNzvcBnvšb†tA=IBdNzvcBnvšn’‡bB…‚AbETcBSC=‡‘cTNt‚f”™NfB•JiJ’‡b•tJJz1Sglxv‘”Vc=•Y–LZCABnvšb†‡EBI‡š=gvcBnvšb†t9BKC9=g‡ALdZA•V1’dV…AbGZ†zZJ‘nz9incNJ=Lc•WCJbIt‘NKNšNzvcBnvšb†t9Nl‡š=gvcBnv‘nr1=BZ‡‘lTvcF‡J‘nzt9YŽ›d=g1’J…tbnI1J•NBblKcLScbzVcTnJB9zFv†z•Z‘‡i1dNŠSfnTv2=WCT=cdBSfYi9cBYJšJ†9JJtv‘eVC–sJZ=‡JcgbtZ=Bf9cBY9ibK1’=ŠBfY™1AB…›TZP‡–BcNfZ–‚šLnvšb†t9Nl‡š=gvcBnvšb†c=•Cb=F‡AL‡YWbPT–NlSA”iJWlWtb1VT–NlSANLJWldc–z‘cgNSSfNzSiBgS9b†t9Nl‡š=gvcBnvšb†t9BKC9=g‡ALWCJ1V‡b•…BJeic2•WS99F9bZl‚fJ’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡AZGSG=7YAN†12‘cYš=bJWZ‡Y=‡’‡–BKB2nzSGl7c–ni1WntC–LgtTBnvš=it9NtB2Z19†BdcbbVt‘Zitš=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBnvšb†t9NŠ›Jz19WbWCTZ†‡–•…YJz9‚šLnvšb†t9Nl‡š=gvW=gS9b†t9Nl‡š=gvcBSJ’•wc=•itš=gvcBnvšb†t9Nl‡š=gvcB…tbnI1J•NBblLZ2L‡Cg=w19Bc‚Ang‡A=•JiJ’‡b•Z‡AZGJWZdvšbP‡–BcNfZgtEl€BAs†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšnFc=•tYcNLNfBdt–Žc=Zitš=gvcBntglxvA=l‡š=gvE‡xScsxt9Nl‡š=gvEbnTAbr‡šs•YcdP1J=™…‘BZ‚GJ•1A=EZ2L‡S’ZK‡JB…B==1t2KAt2‘•Ncs‘‡W‡YN=v‘cJBKNEn€JdNzvcBnvšb†tA=–CGnIC2sINb•PBcsSSbzGtdŽScfŽz1Wnf›Jz€19zr‡c=–B2Jz…AKPJš‡V‡JYš‚2J•JA•’CABnvšb†t9NI‡‘b”t2Ždtb‡F12=ŠSc”™ENSJš‡‘vA=l‡š=gvcBxS9nl‡–B›c”i‡GznZJ1šcTncBAZGCG‡7S9ZVC–zaC’”AxA‘z‚G‡KSgB™CG‡nTfŽ‘TfzPBW‡”CcB•–Lnvšb†t9Nl‚9Lz–Lnvšb†t9•ŠYJ=L›Gl‡›9nL‡b‚‘S2ZGCG‡7S9nIcJ•v=zGtdŽScfŽz1Wnf›Jzg‡’lgS9b†t9NŠNšNzvcBnvšb†t9Nl‡AbEccsn9‘nFc=•N‡‘lTvcLdZA•V1’dV…‘=E92=1YšFIc=B‚šLgt†l7J‘J†1dBK›2ZgvEZ‡9š=Vt‘•itš=gvcBnvšb†t9Nl‡š=gvcBWCJ1V‡b•…B9=Gc2•7t–FKT’BI‡š=gvcBnvšb†t9eVtšNzvcBnvšb†t9Nl‡‘zLE=xv‘nV9bBB2ZENTlxv‘nFc=•N‚–sFvcL•JgZ’T’=lSAbTYGZxcGNxt9Nl‡š=gvcBnvšb†t9Nl‡AbEccBxt–V1AFŠB2NF‡ALWCJ‡wJ’=t‚–Ž9Z2ZYvšbacJBtSc–™JWJ‡CT=1A‘ZCdL9NGBxcGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvi•ANcsŽt‘=E92=TY=1‘ccšFSfNLJfsA‚blKSfb1CEY‘cfs™‚WBaB2–’S’JY‚†l‘NczI‚†b9C’‡V9fŽ1J•L‚iJJtš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NtYfbGCGzYJgJcdB…‡2Y™SfŽ7Z’BItc‘KBbzTv†zScbb†cT”FB–ŽLZ†JSt–zA1JBZBJ=E92=•Y=1‘ccšFSfNL9E‡YSš‡PccLKT=nTtEl€BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBWY†•Kc=•lCš‘TSiBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gv†=Scb”Ž1Ašš‡AZ”tWbSJGNxt9Nl‡š=gvcBnvšb†t9Nl‡A‡ZCABnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gv†=Scb”Ž1Ašš‡‘zLZ†NWY=9’vA=l‡š=gvW=g‡As†t9Nl‡šŽFC’bgS9b†t9Nl‡šLzZGl†t9ZKSgBVSbzGtdŽScfŽz1Wnf›Jz€SJzLBcbYC7Lz…AKPJš‡V‡cbwCbbI‡š=gvcBnvAs†99•…CfZ”J†=7S9nz1W”F‚‘zEZ†JgS9b†t9Nl‡šLzvdbdZA•F1WNd›d=bJWZ‡Y=‡’‡–BKB2nzZGlKt2FI‚W1ICc=VB2ŽN’nKBd=YCGJYS2LANd•L‡A–tš=gvcBnvšbŽtAdtš=gvcBnt–”Žcc‘‚b=Fv2‘dJiJr‡–BKB2nzv†•dJAVV9JBtSJY™JWJ‡CT=1A‘ZCšLZCABnvšb†‡EBI‡š=gvcBnvšb†t9BKC9LgZcLWCJ‡wt9vV‡šz”92s•c–‘š9f‘fS‘=KEz•Z‘‡i1dN†ScbEYcŽnZ’•V1iNZ‡šŽEZc=x9AV’vA=l‡š=gvcBnvšb†t9Nl‡š=”t2Ždtb‡F12=ŠCJ=E›GzSJGNxt9Nl‡š=gvcBnvš”FvABI‡š=gvcBnvšb†t9NtB2ZGSfŽWCd‘†9bNŠ1=•9‚šLnvšb†t9Nl‡š=gv2‘7Yš=ItdBPJd™Tb7C=bItd•…CfNFSiBnv‘nV9fzlNš=g9†lY9ilV‡EBI‡š=gvcBnvšb†t9Nl‡š=gv†lSS9bI1iNt›cNGEzxv‘nFc=•1dzGS’ZNJWlit9NdSbzGt†nScfŽz1Wnf›Jzg1’lnZgDF9bNŠCJ=E›GzS9šbLt2=Š›2Z”t†B7Yš‘Itd•…CfYŽ‚AL•9ilcbN’‡š™T†‡79iZat‘NlJl9YfBNvcs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB…SJ=†1iNt›cNGEzxv‘nFc=•1dzGS’ZNJWlit9NWBdŽz1’lnZgZ†T9NlC9zzv†zdJšzw‡–•nCšz”t2ŽWYENP1JYV›b•TBABYJ–JVt9vV9=g1i‡…›cV’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšbP1WNtC‘z1t†zEYTl†9bNŠ›2ZEt†zdt–=Itd•…CfYŽ‚AL•9ilcbN’‡š‘gB’ZN9AK’vA=l‡š=gvcBnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvW=gS9b†t9Nl‡š=gvcB•J‘=†tšBB2ZENTlxv‘nA‡–BCfNaTElvSdbV‡EBI‡š=gvcBnvšb†t9Nl‡š=gvcLdZib’t9vV‡‘d™Tb7C=bItd‚FYfbGJ†=W›cKPTJNlxš=g9†‡dZA•K1AF1d‘cYfB€S9bP1WNtC‘z1t†zE›dndT’BI‡š=gvcBnvšb†t9Nl‡š=gvE‡Y…A=‘B†J=En‘9iZ‘Bcš’C9szBEl€StLP…‘Bf‚fJ•›2ŽZCABnvšb†t9Nl‡š=gvcBnvšbP‡–B‚fNFYŠL‡J‘nzcgNC‘zE›GNxvAN†1J‚ŽC–=”T2ŽdvšbaTf=tYfn1vEl€BAs†t9Nl‡š=gvcBnvšb†t9NŠ›2nGJ2ŽWvABt‘Zitš=gvcBnvšb†t9Nl‡š=gvcBWCJ1V‡b•…B9=”9†=dJ‘9’vA=l‡š=gvcBnvšb†‡=bI‡š=gvcBnvšb†t9•…CfZ”J†=7S9nLcJB›=z9‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9s=v’J=Jš•‘…A9’CcJEBc‘‘J’•r…‘‚‘CfJTNf=‘‡cbT‘BdSšs•‡AeP‡9N‘9cs†t9Nl‡š=gCABZt–n1A‘fB–=gvcL=všnV12FtCb™J†=nTAJgBcJ=1c•”S2ŽacdZLCš=Wtš=gvcBnvšbŽt9JŠB‘=1t2•79šb†td•P‡AbENTlSJAZK1A=–C2B™C2FLC‘”šNJ™9TJŽvš•gS9b†t9Nl‡šLzvdbWZš‡FcJ‚V‡š=g9†JdJibzc=•n‡AbENTlSJAZK1A=–C’1‘NAF‘NWNa‡’naCfe’B2FLC‘ZL‚dL”CcŽ7ZG‡AtEzVBTJrC’nŽJfL‘TfsNiBFTTJ‡Jš”Ati1šNTJŽZTJV›9–‘1dNvNJ=ggJYCc1‘‚f=ATJbI‡š=gvcBnvAs†99•ŠSfNLZ†ZnvšbPcd•c›J=19†l7YWZ†1J‚‘YbzE‡fŽWS9ZIBW9’C†9AYAŽVt†nL‚dL”C2B™C2ŽN’‡aCcs9‚fV’JGlL‚bZLCgB7‚fŽ7x’‡AtEzKS=z1S’‡‡YAL‘TGnL‚W‡AC†D‘t9Lnvšb†t9Nl‚9=bv†=Scb”Ž1Ašš‡‘=LE‡7Z‘‡12=–Cc=…ZfŽz‚ŠsIBWJ9Cfš‘NTlWC=‡KNiBFTTJ•9’eATbNKNcsŽ1WJ‡‡T1‘1†=gNcnzNgJY…Ae‘CšBAvA=l‡š=gvcBxS9nl‡–B›c”i‡GznZJ1šcTncBAZGCG‡7S9ZVC–zaC’”AxA‘z‚G‡KSgB™CG‡nTfŽ‘TfzPBW‡”CcB•–Lnvšb†t9Nl‚9Lz–Lnvšb†t9•ŠYJ=L›Gl‡›9nL‡b‚‘S2ZGCG‡7S9nr1dBKS2bF‡AL=v’B†td•P‚š=g9†JdJibzc=•n9‘TBAB…Z‘”Ž1A‘fYfbEEJvJ–bVvA=l‡š=gvWBgS9b†t9Nl‡š=gvcB…Zi9Ž1=B…CfNzvT=nv‘n‘‡b‚ŽSJz1tT•NJg•TA=tBcZEYc=Sc–d’vA=l‡š=gvcBnvšb†tdBtYcNLZWl•Ji=‘t9vV‡šzG9WbWC91V1J‚FBJl–ZtsNJfsPcd•c›J=19†l7YWv’vA=l‡š=gvcBnvšb†td‚‘YcnTvT=nZ––’vA=l‡š=gvcBnvšb†cd‚‡AJ’CABnvšb†t9Nl‡š=gvcBnvšbP‡–B‚fNFYŠL‡J‘nzcgNC‘zE›GNxvšzV12FŠYcZgvWl‡c–b†td•†‡šz”SA=xJGNxt9Nl‡š=gvcBnvšb†t9Nl‡šzGNTb79’N™T’BI‡š=gvcBnvšb†t9Nl‡š=gv†lSS9bItd‚‘YcnEt2ŽWS†‚Ftd‚‘YcnTCgBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gv2=WCJ‡1Ezitš=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvš”i19BK‚‘zT‡AL7C=‡šcc‘c›Jlz9†JdJilVT’BI‡š=gvcBnvšb†t9•…CfZ”J†=7S9”V1AFcC–s’CABnvšb†‡=bItš=gvcBnvi•ŽtABI‡š=gvcBnvAs†NddAYiJ‡…‘‚‘1dBvNcnLJWJ‡S9‚ATg‡INTvAt–NzvcBnvšb†tA=ŠvcNLJWldc–z‘t9Bf›cNLZWJnZ†vi1JBtYfbgBAB•Z‘‡VcWnYb•TZfsANJZKCT9’CGN‡xAŽ‘c=•aCcs9CGn™YAŽPC’zV‚TJrB†‡n›2Žrc=•PB=diS’JY‚2Ž†NŠsaB–Lltš=gvcBnvšbŽt9JŠYfb”t†‡dYš‘†9=•S=z1vWl•Ji=‘t9sLJc‘=SE‡™…AbxCtLEtGJ‘Ji•†BJ‚šB9sTxAs=19n™BAs†t9Nl‡š=gC’bYBAs†t9Nl‡AN”J2=7ZAŽrt9BSYcnLTWl•Ji=‘t9•S2NLJ2Ž7C–FV‡c‘JCšLZCABnvšb†‡EBI‡š=gvcBnvšb†t9Nt›Jz1TcBv9šbP‡–B‚fNFYŠL‡J‘nzcgNC‘zE›GNxvši1=NŠ›2b1‚fŽnScK’vA=l‡š=gvcBnvšb†tdBf›cNzvT=nZ†ZdT’BI‡š=gvcBnvšb†t9BKC9=gSfz7Y‘‡‘‡–N†SANLJ†zxJgZ’t‘•itš=gvcBnvšb†t9Nl‡š=gvcBSCT=Fc=BfS2bgvcs…t–zK1’=ŠSfNFvcLdC9‡i‡bBJ‚fJ’CABnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡AbEccsWt–zKcW–FBb=192z•vABaTG=1‘zg‚’l=vA•WcdNi‚–zgfFYvšbP‡f‘f‚AZEJENnv‘nšcJ•tS2bGJ†zx9AV’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡AbEccs‡YWdŽ12FZCšzGYc•dZšFIc=•N‚blrYGzxcGNxt9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcB…Zš‡F1A=l9=f‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnv‘nšcJ•tS2bGJ†zE›d‡dT–bI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡šzGYc•dZšFIc=•1d‘KYGNgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=fYgBgS9b†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=Gt†=SJš‡™T’BI‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”J†JWY=1VtšNtBb=192z•Z‘‡wt‘Zitš=gvcBnvšb†t9Nl‡š=gvcB29cs†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšnVc2=lC‘zEYEBdtfLItdBf›cNzS’l=BAs†t9Nl‡š=gvcBnvšb†t9NŠYfb”t†‡d›9n‘c=•W‡‘n1SfzSc–”V1J‚FB9Lg‡2sr‚2‡KSWJ7CGN‡xAŽ‘c=•K‚šŽ™CG”’S2ŽVT–•IB–L1B†‡…CAFYCcŽš1šBB=zGJcs…›†NaT–NlSANLJ†zx9AK’vA=l‡š=gvcBnvšb†‡=bI‡š=gvcBnvšb†t9•…CfZ”J†=7S9bPcJ•…›9s’CABnvšb†‡=bItš=gvcBnvi•ŽtABI‡š=gvcBnvAs†NddAYiJ‡…‘‚‘1T‡…NJd™Jg9šC9d‘‚G=iNJdPYšNzvcBnvšb†tA=ŠvcNLJWldc–z‘t9•YfNLCGJSBAs†t9Nl‡š=gCABZtbnI1AšFYANFvd‡=ZšFK1š•t‚f”™Nf‚Ac=NSNdKPBWJI‚c”‘cc9ANcnFviJ7STv‘TŠLNcsGBdNzvcBnvšb†tA=IBdNzvcBnvšn’‡bB…‚AbETcBSC=‡‘cTNt‚f”™NfB‡JiJP1AšF‚bzfc2ŽWCdFV1W”šCšLZCABnvšb†‡EBI‡š=gvcBnvšb†t9Nt›Jz1TcBv9šbP‡–B‚fNFYŠL‡J‘nzcgNC‘zE›GNxvAZac=•tBANLEBnt–zATf‘…YcbE›fLYC=zK1AF‚f”™NGJWCJ‡ic=Bf›=zT1’l€BAs†t9Nl‡š=gvcBnt–zK‡–•c›cnzvcLWCJ‡wJ’zŠ‡–s’CABnvšb†‡=bItš=gvcBnvi•ŽtABI‡š=gvcBnvAs†NddAYiJ‡…‘B9Jš‡rNJzFBiJSYdbgS9b†t9Nl‡šLzvdbWCJ1V‡b•…B9=”TWlWCcŽ‘c†BI‡š=gvcBnvAs†99•tCANLTNW›9nf‡9BCfN”9†l7YWZ†N=zTcW‡x…’1‘C’b7NJ==NWJ7›9Y‘12dšN9VPSgJIZ’‡gS9b†t9Nl‡šLzC’‡gS9b†t9NŠBAZEt†N•Jš‘†c2FcBJdi9†l7YWZ†1=BfSdLgSšLnvšb†t9•itš=gvcBnvšb†t9NlSANLJ†znZgl†td•tCAb1TEZvC9‡PccVF›2bGJ†N7vABacTnfY–=gEz=c–‘AcTnSfYiTE‡7CJ1VTgNd‚‘=ENGBYYd‡Pcd•…CfYiTcFxJGNxt9Nl‡š=gvcBnvšnFc=•tYcNLNfB…t–zK1ibiB‘•9‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9s•tEb‘J’•rBAs†t9Nl‡š=gCABZt–n1A‘fB–=g9†N7YdF1d1FSAb1tcBWY‘nF1J‚‘Cd=€9™sa‡JBšC9s•tEb‘J’•r…‘B7B†J=t2ePJš=iTAbW‚dsE1’N€‡JJš‡c=bSAJLtfz€‡cbTAJ7‚†JEcŽZCABnvšb†t9NI‡‘b”t2Ždtb‡F12=Š›2Z”t†l7CcN†NdVPJTJSBc9‘TŠLdNc–™cTJS›c„‘‚G=iNJzFBi9‘‚99‘c†9PNTZLtgJV19e‘TG9™NdŽ=BWJ7NdJgS9b†t9Nl‡šLzvdbdZA•F1WNd›d=bJWZ‡Y=‡’‡–BKB2nzZGlKt2FI‚W1ICc=VB2ŽN’nKBd=YCGJYS2LANd•L‡A–tš=gvcBnvšbŽtAdtš=gvcBnt–”Žcc‘‚b=Fv2‘dJiJr‡–BKB2nzv†z‡YšzKc=‚‘Zb=1vWldc–zKtšNt‚A”™T2•7ZW=P1J•n‚–NzvcBnvš”’vA=l‡š=gvcBnvšb†td•…CfnETlSJW=L1JBCblT1’‡WY=nrcJ•…SšŽF1’JSZš1Vc=N†C=BEYcL1Yf•V1i–CdLTNE=‡JiJPtšZl‚šs9SiJx9iZaTfFŠBJzF1iBgS9b†t9Nl‡š=gvcB…tbnI1J•NBblLZ2L‡Cg=w19Bc‚Ang‡AFWYdFFc=BcBJd™Z†Bnvib’t9NWB9z”t2Ž7JidVc=1FCcbE›fŽxJGNxt9Nl‡š=gvcBnvšbP1A‘c›d=–YfB…tbnI1J•NBblavWb7Z’•G1JBC–Lg9†=SJibA‡–Bc‡=zLCGNS9’B†tdBB=d™Z†N1Y=nV1A=PNšNzvcBnvšb†t9Nl‡šz”92s•c–‘š9fF…CfnETnSJJzV1dBJCšz”t2Ž7JidVc=1FCcbE›fŽxJGNxt9Nl‡š=gvcBnvšnFc=•tYcNLNfB…t–zK1’zitš=gvcBntglxvA=l‡š=gvE‡xScsxt9Nl‡š=gvEbnT‘‚FCfJE›fz’CABnvšb†t9NI‡‘b”v2•WC9‡št9Nt‚A”™T2•7ZW=P1J•n‡AYi9†=•JiJat9sTxAF=J’ZLT‘‚FCfJE›fPScFBc‘zSAJEtEN€1cN™T‘BW‚šs=JEZ=S9JP‡c‘”Sds=1c•€‡cn™BJ‚FCbbI‡š=gvcBnvAs†99•ŠSfNLZ†Znv‘”V1J‚ŽC–=GCGJdZ‘‡ac=•n‡iJ7Y=1‘ccd™NEl=YW‡SJ™„’N’=NNJd™JWJYYd‘N2JTNiBFTT‡7BJdAti‡PN9ŽzNd‘9‡’‚‘N2JTNgZgvšNzvcBnvšb†tA=ŠvcNGZ†=‡Jil†td•‚fJLJcBWY‘nF1J‚‘Cd=€ScFBc‘zSAJ=1c•€J’B‘BJBAB9„Pfz€1E‡KT‘BL‡A=l›–‘r‡’B=ZfNFT9„Pfz€CTBLTA=‘‚–s•cE”PJ’•r…‘‚‘CfJEtc•‘StLŽTAJ€SŠL€vcB†CABnvšb†t9NI‡‘b”v2•WC9‡št9Nt›J=192Žnt–V1A‘KBJzFZfsVNfnVC’l”C2‘IJf‘™NJZaScnaC2zI‡†‡AtEzVBTJrC’nŽJf‘Lti•†Td9ŽScN”9fz†t9=xt9Nl‡š=gvEbnZ9nFc=•tYcNLNfBWY‘nF1J‚‘Cd=€StsKT‘B7C†JTxAF=J’ZLT‘BW‚9s•1’n€JANiTAJ•S–szC2•‘Cc=P‡cbESŠLTN’Z‘STN™…‘‚PS–bI‡š=gvcBnvAs†99•tCANLTNW›9nf‡9BCfN”9†l7YWZ†N=zTcW‡x…’1‘C’b7NJ==NWJ7›9Y‘12dšN9VPSgJIZ’‡gS9b†t9Nl‡šLzC’‡gS9b†t9NŠBAZEt†N•Jš‘†c2FcBJdi9†l7YWZ†1in›JzEJ†JJCJ‡r1WN…SšLg9†N7YdF1d1FSAb1tENnv‘”V1J‚ŽCbl9ZTZNv’B†td•‚fJLJT=7C=‡i1dN’‡šz”t2•dZ‘9F12Fc‚AngSšLnvšb†t9•itš=gvcBnvšb†t9NlSANLJ†Z7Y‘nKcgnS‚fnGJT=…›T=wcdBSfNL9E‡…›TJPcJ•tC–Lg‡bz7J‘n29šBK›=•F1’lYCdz12‘ZCš‘gBiJ€JfLVTf=WBcn1vTl…›†Nxt9Nl‡š=gvcBnvšbPcT”ŽSš=–YfB…YšFr1A‘cCfnat2Ž‡YW=FcdNlCdŽz9†=SJibA‡–Bc‡=zLCGNSJGNxt9Nl‡š=gvcBnvšbP‡–BKBbzTvT=nZAŽ‘‡–•SSfng‡ALdZAŽšc=NPNšNzvcBnvšb†t9Nl‡AbEccBxvš‡K1=•ŠYfJT‡ALdZAŽšc=NP‡šzzccB…tbnV1=BJ…š‘gCgBgS9b†t9Nl‡š=gvcBnvšb†t9NtS2nE9cBYSWl†t†=lB–Ž19†l7J‘Jš1dBKBfb19cB…›TZP‡–BKBbz9‚šLnvšb†t9Nl‡š=gvW=gS9b†t9Nl‡š=gvcB•J‘=†tšNfCfn1vWl=9ABP1inKN=zTS’l=BAs†t9Nl‡š=gvcBnvšb†t9NlS‘d™YcLnvivFt9NW‡šŽTYEz•cGlKt9NWB9z”T†l=CJ9’vA=l‡š=gvcBnvšb†‡=bI‡š=gvcBnvšb†t9BKC9=g‡A•SJib’‡–•PCšz”t2•dZ‘JVt‘•itš=gvcBnvšb†t9Nl‡š=gvcB…ZšFšcdNlBJlTvcFnvilšcc‘KY–Ž1t2•dZ‘J†t†dšSANLZWlSJGNxt9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†td•…CfNFvT=nv‘”V19BK›dŽ9Nc•SZšz21inCfnGBAs…ZšFšcdNPNšNzvcBnvšb†t9Nl‡AbEccBxv‘nFc=•N‡šzzccB…t–zK1ibiB‘•9Yg=…›T=w‡J•YbzEYG‡‡CcŽ‘TgNCšszv†z‡YšzKc=‚‘›JzET†‡WCJ–At9‚‘B2Zgv2‘7Y‘‡‘cdNW‚fJ’CABnvšb†t9Nl‡š=gvcBnvš”V19•…B2ZFv†JScfN†9=•S=z1vWl•Ji=‘tšBKBfNG›G‡SZ‘JItczi‡š=zBAB…t–zK1’=P‚–s’CABnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvcLWCJ‡wt9vV‡šz”92s•c–‘š9fFŠYcnG›–B•J’•KtšNt›JzEYE‡dZ‘‡2c2‘K‚‘zTBAB…Z’•AcTnf‚‘e™9†lWScK’vA=l‡š=gvcBnvšb†td•tCAb1TEZvCdzK1=‚FY=zJc†l7Z‘JItd•…CfnETlSJW=L1JBC–L9‚šLnvšb†t9Nl‡š=gv†=Scb”Ž1Ašš‡šz”t2ŽW›†Nxt9Nl‡š=”Y–LgS9b†t9NlBdLzCšLnvšb†t9Nl‚9=€‡EZz‡J‚PSfJ•‡2L€9iZŽBJB”B2J•J†N€StsKT‘B7C†JTNfz=9iZ‘BcJVBEJ=1c•€‡TBP…Ab=Cd„Pfz€JA‘†Bcb=CdszxAŽ€JAnaBJYšBEJ=‚GJ‘‡cbTA9’S™L•‡cF€9i•LBcJšScJE…A•=Jš=iTAJi‚dsTNf==9iZŽBJBv‡’J•J†N€SEJABc9F‚†J=1c•€STn‡cb1BGJ•cGZ‘CJ•šT‘YšBEJ•Bfs†CABnvšb†t9NI‡‘b”v2•WC9‡št9NtBbz192s7Y=b†1iNt›cbENcFnTAbW‚ds=›G9P‡cbTAbEBcJ•›2Ž=J‘br9cs†t9Nl‡š=gCABZt–n1A‘fB–=g9†B‡c–z1=•N‡‘=1t†=‡cfL†NEl•NTJ™T‘1‘1tK‘NcnŽJT9‘‚99‘ctLgNElEBi‚’›9š‘C’=…N2bGNWJ7‚JD‘1Tn‡NElT…iJS›c„‘‚bB’NTB‘ZT‡‡‡9‘gS9b†t9Nl‡šLzvdbWZš‡FcJ‚V‡šz”9†l7J‘‡A‡b•Z‡AbENTlSJAZK1A=–C†n‡C2ŽAC‘•aCcs9C’ZIcf‘KNAnLCgB7‚fV’JG‡AtEzKS=z1S’‡‡YA‘™N†‡a‚gJYB†‡n›†l‘NczI‚†b9S’JYC’zNZ–b’NE–P‚W9A‡JYšN–NgvA=l‡š=gvcBxS9nl1šBf›J=EYfB…ZAŽ‘‡–Bc›cZLZ†NcZAŽšc=NŠ‚fna92ŽSY=‡Ft9szEn‘SE‡IBcb2‚fJzB2s‘‡cbTA‘1B–sL1cŽ€1J•šBc‘1B–„Pfz€JšFK‡JYFS2JE…’n‘‡cFPBtKSdsLNA‘€SEJVT‘YšBczJBš‘–vEBNT‘‚P‚†J=C2L‘…i•rT‘B‚’zJBš‘€1E‡Ž…AJaS’J€vcB†CABnvšb†t9NI‡‘b”t2Ždtb‡F12=ŠSfNat2•=9šbPcJ•tYfNLCf=dcbnKN9ŽzNWJ‡Y=1‘Tf=ŽNd=Žvi9šti9‘‚f9™NdVPJTJSBc9‘cE=fNJzg‚W‡n‚9Y‘N–K‘Nc–PNT‡YZAe’N’=nNJdPBW‡nTid‘1JN•N9Žz‚T‚’›9‘NEbbN9ŽzvT9’BTD‘‚bB’NTB‘ZT‚’›9‘…Zš1V‡–•…‚b=aJWlS‡JYšBEJESA‘‘9iZŽBc=x‡’J=v’J=J’•aBcbl‚ŠL•cGZ‘StsKT‘B7C†JTN2z€‡TBšTAbc‚šs•T†n‘…i•rTAb€S’JEtcVPCc•‘BJ‚AS7KPf=€1J‡iTA9’S–s=1c•€CJJ™BJBZS29Pf==9iZrSJn‡–•t›cbEtWbdZ‘•PBdL–Cf••cfFLC‘ZPB9=–CcsY‡†‡AtEzK‚–Ž”C’ZxcfsANJZKCT9’C†b7‚2‘K1dZaBTZZtš=gvcBnvšbŽt9JŠYfb”t†‡dYš‘†9=•S=z1vWl•Ji=‘t9sLJc‘=SE‡™…AbxCtLEtGJ‘Ji•†BJ‚šB9sTxAs=19n™BAs†t9Nl‡š=gC’bYBAs†t9Nl‡AN”J2=7ZAŽrt9BSYcnLTWl•Ji=‘t9•dSfb19Wl•JiJatšNtBbz192s7Y=bit9Bf›cNLZWJnv‘n’cJ•…Sfn1TT=EYTlit9NtYfbEYcŽ7Y‘1V9bZNBš‘–vENnv‘nV12FtCfNac2•7Z=nV1=BJ9F9vEBNZ–b’t‘bI‡š=gvcB=BAs†t9Nl‡š=gvcBnZAŽLt9N†SfnEJWl•Zi=PcgncNfb1TWlW›cBP‡–B‚fNFBAB…ZibK‡–BB=zgS’l=BAs†t9Nl‡š=gvcBnvšb†t9NŠYfb”t†‡d›9n‘c=•W‡‘n1SfzSc–”V1J‚FB9Lg‡2‘K‚2FL‚iJ1CfLnYAL‘tTNK‚=zrCfFxS†‡At2saTf=tBbz192s7Y=bVT’BI‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9NlSAZGCGZSJidŽ‡–Nl9=GCGJdtbz1dN†SAZGCGZSJidŽ‡–NPNšNzvcBnvšb†t9Nl‡šz”9†l7J‘‡A‡b•Z–‘gvc‘…S9bP‡–BKBbzETbdZgl’T’BI‡š=gvcBnvšb†t9Nt‚fna92ŽWC=z1d‡t‚fnEJcBv9šnV12FtY==EBAs…ZAŽ‘‡–Bc›cZLZ†NcZAŽšc=NPNšNzvcBnvšb†t9Nl‡šzGCGJdZ‘‡F‡f‘f‚‘‡GCGZSJGBT9NlC9zzvcL•Ji9Vc=•…Y==E›bJ•JibK9bZbBšs’CABnvšb†t9Nl‡š=g9†zdZš‡F‡–‡t‚fnEJcBv9šnV12FtY==EBAs7JAŽr1AšFYfbEYcŽxtbnF‡bBJ‚–LrZEBNZ–bVT’BI‡š=gvcBnvšb†t9BtBd=”‚šLnvšb†t9Nl‡š=gvcBnvšb†td•…CfZ”J†=7S9–Ft9BSfnG›f‡dc–FK1AVFCcZENcz1Yd‡F1A‘fN9Lf‚ALdZA•V1’=’‡šzGYcŽdZA•Acd1V‚š=g9†B‡c–z1=•N‚–s’CABnvšb†t9Nl‡š=gvcBnvšnVc2=lC‘zEYEBdtfLItd•…CfZ”J†=7ScLVt9•itš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9YBW9AYd‘1W‡fN9ŽzvTJŽNW–‘‚f9™N=z=YgJ‡19‘‚9slNEDPC–NzvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠYcY™›fŽSc–bItdBKBcZGJ†=dC9‡iJdBKBbzTSiBgS9b†t9Nl‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9Nl‡š=gvcB…ZšŽ1AF…Cfna9=J•JibKt9vV‡AbENTldC9‡itš‚Ž‚bdit†‡dZAŽšc=NYfNaJ2Žx9šbŽt9ZbBš‘–vEl€BAs†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvš”i19BK‚‘zTSfŽ7c–”V‡JN†SANLJWldc–z‘t‘NlC9zzvcs…ZšŽ1AF…Cfna9=J•JibKTbNt›2ZGZ†=dZ=nV1=BJ–z”9†l7J‘‡A‡b•Z‚–L9‚šLgST•At9Nl‡š=gvcBnvšnVc2=†S‘diJ†=WCJ‡‘‡–‡t‚fnEJEZ…t–VcJ•…Yb‡GCGZSJgvFtd•t‚fnEJ†‡dcbbV‡EBIBdŽFvcBnvšb†t9Nl‡š=gvcBntbz1AVFSAZEYEBxvAvicJBKYfZGCGJnZ‘Ž12‘YfbEEJntbnV1=BcB2Z19T‡nvAN‘td‚ŽCfZGSG‡SviZaT–NlSANGZ†=‡Jibw9bNWBcbaT†‡7Cg=K12‘B=zGJcs…t–n1A‘fBfNF›–LJYg=€cgbcT‘ncTdZZJdnf9d1FJ=ZPC–Z9Ybnft‘YšCdŽgvcL•Ji9Vc=•…Y==E›bJ•JibK9bNWB9zGCGJdZ‘‡F‡f‘f‚‘‡GCGZS9AK’vAdBd=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡ANLJWldc–z‘t9Nt›Jz19WbWCTv’vA=l‡š=gvW=g‡As†t9Nl‡AN”t†ldC91Vc=NŠ›2ZGZWl•Jš‘†c2FcBJdi9†l7YWZ†1š•…‚fna92‡WScBP1Wn…‚9L1‚šLnvšb†t9Nl‡š=gv2Ž‡Y2•At9NnfN”t2ŽvS9d’vA=l‡š=gvcBnvšb†1š•…‚fna92‡WScBP1Wn…‚9L9‚šLnvšb†t9Nl‡š=gv2Ž‡Y2•At9NW–Viv†=SJgZaT’BI‡š=gvcB29csxt9Nl‡š=”v†=•cbz‡–BJ‡‘zaJ†J‡Y‘nV1W”š‡‘=E92=1YšFIc=B‚šLg92z7J‘bVvA=l‡š=gvWBgS9b†t9Nl‡š=gvcB…ZšFšcdNl9=g‡f•SZš=†Tb•N‡šzFNfLdZA•V1’dV…‘e™92ŽdCcŽrc=YšCd=”T2sSJ’•it9NWB9zGT†ZSZGNxt9Nl‡š=gvcBnvšnK‡9BcSdLg92z7J‘bit9NtB2Z19†Bdcbbit9Nt›Jz19WbWCTJ2‡f‘f›9L9‚šLnvšb†t9Nl‡š=gv†lSS9bItd•…CfZ”J†=7Cgd™cJ•nSbl9YGBxcGNxt9Nl‡š=gvcBnvšb†t9Nl‡AbEccBxZ‘‡š1š•tN9Lg9†‡dcbn’‡b•Z‚–L1‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”92sWCTdit9‚‘CfZFvd‡=ZšFK1š•t‚f”™Nfs……A=ABŠL•S2B€1c‡V‡cb‡‚7LE9El‘J’Jz‡c=rSbBfS‘=‘J‘NrT‘‚FS™LEt2z=StsPTA=Sd‡ŠtJJ€‡cbTAJJ‚9s•tEvP1J=™…‘BZ‚GJEZ†vP1cNz‡cb…‚ŠLzSfzGJWZSJ‘lKSA”iS’9AJfFLC‘ZLC==v‚f‘SZG‡AtW•aTf=tS2nE9El€BAs†t9Nl‡š=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡š=gvcBnZ‘‡i1incNšNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9NŠYfb”t†‡d›9n‘c=•W‡‘n1SfzSc–”V1J‚FB9LGCGZWZ’•AcdBJCš=r‚ABnSEB†td‚FYcZ”vWbdvAL‘tdBBbzgSiBgS9b†t9Nl‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡ANLJWldc–z‘t9NtB2Z19†Bdcb–’vA=l‡š=gvW=g‡As†t9Nl‡šŽFC’bgS9b†t9Nl‡šLzZfsr‚2‡KSWJ7C’n™NAŽVtc‡KB=zvCf=‡YAŽictsKBJz1Cc=‡Zf‘atcFLS†b2S’9’12LANd•L‡A–tš=gvcBnvšbŽt9JŠ›Jz19WbWCTZ†1iNt›cbENcFnTAdIC–sE12FKS–F9TAbESŠL•Sfs’CABnvšb†t9NI‡‘b”92sWCTdi1’=ŠZ2JGT2ŽWtbnV1W”š‡i‡S9‘At™LANcsŽ1WJ‡‡T1‘1†=gNcnzNgJY…Ae‘CšBAvA=l‡š=gvcBxScsAvA=l‡š=gv†BWCcV™cJ•tC–=GcWb7C9V1J‚FB9=fEzdt–zG1WN…9cNLJ2F9Jš1VcTn†Cšz”TWlWCcŽ‘c†=Ptš=gvcBntGNxt9Nl‡š=gvcBnvšnFc=•tYcNLNfBWt–zKcW–F›Jz1v†N‡JšFKtš‡iCdVŽB’‡Y›cNit9NWB=•gNG‡…YTliJ’=d1šŽF1’NnvAZWTf=d‡–Žg9†zdt–zV12‘W‚–s’CABnvšb†‡=bItš=gvcBnvi•ŽtABI‡š=gvcBnvAs†NEbgNTJIY†9AtEbgNTZxNTJ7ZA9‘CšNaNJdPtiJ‡vieAtT1iNJdPJi‡xN7K‘1JN”Nc”™JgJ‡C9‘1dBvNcnLJWJIC9–‘‚G=…Nd=Žvi9šti9’N’=nNTBx…i9AZ’9‘‚ŠLKNcsL…i‚’›9zgS9b†t9Nl‡šLzvdbWZš‡FcJ‚V‡š=g92•dtbnFJf‘fBbzTv†zdt–zV12‘W‡i‡Y…‘9‘c†J=Jš9ŽTTJV19e‘‚9BrvA=l‡š=gvcBxS9nl1šBf›J=EYfB…Zš1V‡–•…J‘=E›gbS9šnw‡–•…‚fnL1A‚ATŠLJNJz‘‡JBbY9š‘‚fb”NEbGSdNzvcBnvšb†tA=ŠvcNLJWldc–z‘t9Bf›cNLZWJnTAdIC–sE12F‘Jš‘‡JBZ‚tLztAB‘‡9N‘‡JBABcJz›fs=‡cbTAbc‚šs=NA•lCABnvšb†t9NI‡‘b”92sWCTdi1’=ŠZ2JGT2ŽWtbnV1W”š‡i‡S9‘At™LANcsŽ1WJ‡‡T1‘1†=gNcnzNgJY…Ae‘CšBAvA=l‡š=gvcBxScsAvA=l‡š=gv†BWCcV™cJ•tC–=GcWb7C9V1J‚FB9=fcFScbn€1WntCfYVtWJZcb”V1A=†S‘=19WlWSiJ1=BJ‚š=g92•dtbnFJ2‘f‚AZEJElgS9b†t9NŠNšNzvcBnvšb†t9Nl‡AbEccBxZ‘z1d•C–L1‚šLnvšb†t9Nl‡š=gvcBnvšb†TGdIS’JnYA‘z1c‡IC‘=wCEn•JfsIcEzPBT‡vC2sntG‡AtEzKSW‡™Cc‘xxAL‘TGnPBcs7CcŽ™C2LA‚7sPBT‡vC2sntf‘rN9Za‚–ŽItš=gvcBnvšb†t9Nl‡š=gvcBWCJ1V‡b•…B9=fBGJScfN†‡JBK‚AZ1v2sWZW=cdB…‡=zE›fŽ7J‘‡‘‡–N†CdzGCglSJib7T91VCdŽg9Wl•ZAŽwt‘1VNšNzvcBnvšb†t9Nl‡A‡ZCABnvšb†t9Nl‡š=GCf‘xvšJP‡9‚Ž‚š=–YfB…tbnI1J•NBblaJ†lcY2ŽPcWncYfNF‡’lxcGNxt9Nl‡š=gvcBnvšb†t9Nl‡ANLJWldc–z‘t9‡š‡–s’CABnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gv†lSSc•’1A‘cC=e™Yc•dZšFIcgnf‚Ang‡AFY›†•7cf‘‡–LwfFYSJn‡–•t›JZLZ†ZS9iZa9bNnCdŽz9Wl•ZAŽwTbv‘‡2Yi9†=tCT=FJ9•…CbVYc•dZšFItšNtSfZ”9†=cC9‡i‡bBJ‚–Žz1A=EYTvPcbNIx‘lzEl…›EB†td•BfngBAB…Zib‡–BC‘z1TENnZdnT9=Jd‡=9VJ=J1Yg=T9dJc9šLTCgBgS9b†t9Nl‡š=gvcBnvšb†t9NtCfnGJ†ZSJi9V1’=l9=fBfZ€BAs†t9Nl‡š=gvcBnvšb†t9NŠCc”it2Ž‡JšFIt9N†SAnEZWl‡Y2•K1’=ŠSfNFvcL•cbnK1=NKNšNzvcBnvšb†t9Nl‡š=gvcBnvšb†t9NlS‘zE›fŽ7J‘‡‘‡–•1=•TvT=nZiJK‡G=ŠNcbE›gbWZA•’cgnfS‘=KcŽ7Z‘‡šc=‚‘Y–Lg9†ldZ‘‡šJ’zŠ‡–ŽgvcLdZA•V1’=PNšNzvcBnvšb†t9Nl‡š=gvcBntglxt9Nl‡š=gvcBnvšb†t9Nl‡ANLJWldc–z‘t9NtCfnGJ†ZSJi9V1’zitš=gvcBnvšb†t9NŠ9NzvcBnvšb†t9Nl‡‘zE›GzScGNxt9Nl‡š=gvcBnvšb†t9Nl‡ANLJWldc–z‘t9‡š‡–s’CABnvšb†t9Nl‡š=”Y–Lnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9s•‡’J=19F™Bc=x‡’J=v’J=J’•aBcbl‚ŠLE9f=‘JšbATA=€BŠLE9fŽ‘SEJABJBPSŠLEcKPJšzr‡JBS7LENcŽ=19z†TAbWScJztAB‘‡9N‘‡tKS9s=‚’n€9iZz‡JYš‚EJE9fB‘1J‡iT‘Bv‚7LLvc==19ŽŽ‡cb‡‚7LE9El‘1csI‡cJwSEJ•‡†l=19zABtKSJbI‡š=gvcBnvAs†99•ŠSfNLZ†ZnvšbPcJ•tYfNPNc•7J‘J†1iNt›cbENcFnTAdIC–sE12FKS–F9TAbESŠL•Sfs’CABnvšb†t9NI‡‘b”v2•WC9‡št9NtSfZ”9†=cC9‡i‡bBJ‡AYi9†=•JiJat9szxAŽ€JAnaCf•J–s•JAeP1c•IBAs†t9Nl‡š=gCABZt–n1A‘fB–=g9†N•J’ZKt9B…B2”™›fŽ‡JiZ†NElzBWJSvAš‘‚c=NTB€tiJV…AVAt™LzNiBFTT‡7BJdAti‡PN9ŽzN=zLZ†NWY=•ABd=wCfz79fFi‚WBKSgZ7CcAcfs™Nd=xt9Nl‡š=gvEbnZ9n’cJ•…SfnTvcL=Zibit9•YfNLCGJS›9ZK‚–diC2ŽxS2ŽictsKBJz1C2‘I9==9JEBxt9Nl‡š=gvEbnZ9nFc=•tYcNLNfB‡c–zFcJ•P‡i‡Y…‘9‘c†J=NJ=FZWJSv’”AtEbgNTZxNTJ•…i9AT–BNTJŽZTJVJ’‚‘N’JbvA=l‡š=gvcBxS9nl‡–B›c”i‡GznZJ1šcTncBAZGCG‡7S9ZVC–zaC’”AxA‘z‚G‡KSgB™CG‡nTfŽ‘TfzPBW‡”CcB•–Lnvšb†t9Nl‚9Lz–Lnvšb†t9•Š›cb1c2•dZ‘J†c2FcBJdi9†l7YWZ†cgndCfZbNE‡SZ‘‡w9cFKTcbEBfŽZcb”V1A=†S‘=19WlWSiJ1=BJ‚š=g92•dtbnFJ2‘f‚AZEJENnv‘ni1JBšCblEc2•7t–FKT–NlSAJGYENvJi9Ž1dB’‚–NzvcBnvš”’vA=l‡š=gvcBnvšb†1JB‡‡šLg9†N•J’ZKt‘•itš=gvcBnvšb†t9Nl‡š=gvcB•J‘=†tšNbSAJGYENx9š”’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnVc2=lCš=T9WZ7J’B†9bNlSAZGSGlW›TDP‡bBKcfbE92FScbnwtšNP‚–=”‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšnFc=•tYcNLNfBEYTD’vA=l‡š=gvcBnvšb†t9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvcBnvšb†1JB‡CAN”t2ŽSYT=šcJ•tS2bfc•7Z’BIt†db‚ŽNŠL19’YIt†dšS‘=19WlWSiJ1=BJB9zwYf=EYTvPcbNICdŽz9Wl•ZAŽwTbv‘‡2Yi9†=tCT=FJ9•…CbVYc•dZšFItšNtSfZ”9†=cC9‡i‡bBJ‚–Žz‡fn1SWJdtA=…1=•rNcZxSWePTgnPCdŽgvcL=ZibiT–NlSAnEZWl‡Y2•K1’=’‡‘Jftd‡tYT=99=‡t‡=vŽtdJtJd=Vt‘•itš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NtCfnGJ†ZSJi9V1’=l9=fBfZ€BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBSCT=Fc=BfS2bgvcs…Zib‡–BC‘z1TcB‡c–‘†tdBKYbzEYGl=BAs†t9Nl‡š=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9NtCfnGJ†ZSJi9V1ibš‡–=–YfB7CJ1it9•K‚fn”J†B•t–n2cJBtSJe™J†NSJibK12FZCšzGCglSJib7T91V‚š=g9Wl•ZAŽwt‘Zitš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9Nl‡š=gvcBnvšb†t9•…CfZ”J†=7S9bPc=BCfnEJ†Jdt–š’vA=l‡š=gvcBnvšb†t9Nl‡š=”Y–Lnvšb†t9Nl‡š=gvcBnvšb†c=B›=z1‚šLnvšb†t9Nl‡š=gvcBnvšb†t9Nl‡š=”t2Ždtb‡F12=Š1=•9‚šLnvšb†t9Nl‡š=gvcBnvšb†‡=bI‡š=gvcBnvšb†t9eVtš=gvcBnvšb†t9NŠ›Jz19WbWCTZ†td•tCAb1TEZvCg=ac=•tTA”™92ŽWY–‘9J•tYfNz‡AL‡cb”V1AK‘SfnEJENnv‘n‡–•t›J‡LZ†NdJ‘JVT’BI‡š=gvcB29csx‡=bIt‘d™›f•WYš‘†‡JBK‚AZ1v2sWZW=cdB…‡=zE›fŽ7J‘‡‘‡–bVNšNzvcBnvšn’1A‘KY==192Žnv‘n212šFS‘zcTZ7J’‚Ft†=WNšNzvcBnvšn’1A‘KY==192Žnv‘n2cdBcY2bET2Ž€›9bATŠL•t2B€J’•aBcJ•S–szBE‡‘JAL…‘BABcJz›fs=…i•rT‘B‚iNK‚fn”J†B•t–n2cJBtST9‘‚99‘1T‡=N9VAT–N†CABnvšb†1š•cScnGCfznZ‘Ž12‘YfbEEJnZW=2cT”FBcYi9†=dJšVtšNtBc”™92Ž1YA•š1dN’‡šzz92LScbzVcTnJ‚–NzvcBnvš”’vA=l‡š=gvcBnvšb†td•tCAb1TEZvCg=‘1WntCbeiSGZ7vš–Ft9NtBc”™92Ž1YA•š1dZitš=gvcBnvšb†t9NlSAZGSGlW›TDPcgntCfZLCfzS9š–Ft9NtS‘z1c†l‡Y=9’vA=l‡š=gvcBnvšb†1JB‡‡šLGc2•7t–FKt‘•itš=gvcBnvšb†t9Nl‡š=gvcB…tbnI1J•NBblKcLScbzVcTnJ‡‘lTv†JScfN†‡JBK‚AZ1v2sWZW=cdBnCšzF1’l€BAs†t9Nl‡š=gvcBntglxt9Nl‡š=”Y–LgS9b†t9NlBdLzCšLnvšb†t9Nl‚9=€StsKT‘B7C†JztAB‘‡9N‘‡JB€C7LEC2dP‡cbtf•š1dsTNA„P‡cB†9cs†t9Nl‡š=gCABZt–zK‡–•c›cnzv†zdt–zV12‘Wtš=gvcBnvšbŽTGBI‡š=gvcBWtb‡z1dBKSd=GcWb7C9V1J‚FB9=GNE‡SZ‘‡‡1=B’CšL1‚šLnvšb†t9Nl‡š=gv†=Scb”Ž1Ašš‡šz”92s•c–‘š9fVFBc”™92Ž1YA•š1dZitš=gvcBntglxvA=l‡š=gvE‡xScsxt9Nl‡š=gvEbnTA=€BŠLE9fŽ‘S9L†BcJgBcJ=1c•”t2ŽWYWdŽ1A‘C–ŽECfK‘1dB=NcsgCW9‘‚99‘c9YvA=l‡š=gvcBxS9nl1A‘cYfZ1t†JnZibV‡9BcSA‡”TWlWCcŽ‘c†BI‡š=gvcBnvAsAvA=l‡š=gv†BdJšzi1JBN‡‘zaJ†J‡Y‘nV1W”š‡ANLJ†z7Y‘‡FcTnct=zg‡’l=BAs†t9Nl‡š=gvcBnt–zK‡–•c›cnzvcLdZA•V1’dV…‘e™ZWldt–=ItWN…CfY™TbWC9FKTbBKSšzFSiBgS9b†t9NŠ9N†CABnvšb†TG=I‚9NzvcBnvšb†tA=–CAz™‡2ŽrNcnIScsYC2B™C2FLC‘”Vc=•YgJ7ZA9‘CšNaNTJŽZTJ‡vi•gS9b†t9Nl‡šLzvdbWCJ1V‡b•…B9=GYEl=Z‘‡P‡d•YfNLCGJSBAs†t9Nl‡š=gC’‡gS9b†t9NŠBAZEt†N•Jš‘†c2FcBJdi9†l7YWZ†‡–BcNfZg‡’l=BAs†t9Nl‡š=gvcBnt–zK‡–•c›cnzvcLdZA•V1’dV…‘e™ZWldt–=ItWNtCfJ”9cFxJGNxt9Nl‡š=”Y–LgS9b†t9NlBdLzCšLnvšb†t9Nl‚9=€S9sš…‘BvCGJztAB‘‡9N‘‡cJ•S–BKBJzGJWv‘1dB=NcsgCW9‘‚99‘c9YvA=l‡š=gvcBxS9nl1A‘cYfZ1t†JnZibV‡9BcSA‡”TWlWCcŽ‘c†BI‡š=gvcBnvAsAvA=l‡š=gv†BdJšzi1JBN‡‘zaJ†J‡Y‘nV1W”š‡AbENcLScfBIt‘•itš=gvcBnvšb†t9NŠ›Jz19WbWCTZ†td•tCAb1TEZvCg=‡–•t›9Lg‡Gl7CJnK‡9NW‚–s’CABnvšb†‡=bItš=gvcBnvi•ŽtABI‡š=gvcBnvAs†NddAYiJ‡…‘‚AtEbgNTZxNT9‘‚9J‡Y†•1iNvCGNSNA‘†tA‡aCcs9CfBYBšLnvšb†t9Nl‚9=bv†=Scb”Ž1Ašš‡AnECgZSJ‘”1iNt›cbENcFgS9b†t9Nl‡šLz–Lnvšb†t9•ŠYJ=L›Gl‡›9nL‡b‚‘S2ZGCG‡7S9nr1dBf›2YVNc•7J‘JIt‘•itš=gvcBnvšb†t9NŠ›Jz19WbWCTZ†td•tCAb1TEZvCg=‡–•t›9Lg‡fz7Zš‡w1’=W‚–s’CABnvšb†‡=bItš=gvcBnvi•ŽtABI‡š=gvcBnvAs†NddAYiJ‡…‘‚AtEbgNTZxNT9‘‚9J‡YW=‘‡–BcBcZgYcLSc–FrNcnG‡TJIvA‘NEbbNJ=g–NzvcBnvšb†tA=ŠvcNLJWldc–z‘t9‚Ž‚fJGJ2L2t–V1A‘KBJz’CABnvšb†t9NIBdNzvcBnvšn’‡bB…‚AbETcBSC=‡‘cTNt‚f”™NfB‡YW=‘‡–BcBcZb92ŽWYd‘It‘•itš=gvcBnvšb†t9NŠ›Jz19WbWCTZ†td•tCAb1TEZvCg=‡–•t›9Lg‡fz7YW9Vc=‚‘Y–ŽE92ŽWYd‘at‘Zitš=gvcBntglxvA=l‡š=gvE‡xScsxt9Nl‡š=gvEbnTAbr‡šs•‡†l=S9L†BcJgBcJ•cE”PJ‘bVBcbWScJLvc==9iZ™‡JYAStLTN’Z†CABnvšb†t9NI‡‘d™SfŽ‡Y†Zcc‘CgJ7ZA9‘CšNavA=l‡š=gvcBxS9nl1A‘cYfZ1t†JnZšzA1Wn’tš=gvcBnvšbŽTGBI‡š=gvcBWtb‡z1dBKSd=GcWb7C9V1J‚FB9=GT2sSJšF™cJB…‚‘zT‡’l=BAs†t9Nl‡š=gvcBnt–zK‡–•c›cnzvcLdZA•V1’dV…‘e™ZWldt–=ItWnC‘zET†n‡Jšzic=NW‚bl9YfFdt–Žc=NWNšNzvcBnvš”FvABI‡š=gvcBY›csŽvA=l‡š=gvcBxS9ZLCiZ–CcAcfszCšŽa‡’naCc‘xxAŽPtAnKBgBYC†9šx’l†tcFPB9KVtš=gvcBnvšbŽt9BC‘zET†nSJ‘ZK‚‘’CcBx1šLnvšb†t9Nl‚9=bv†=Scb”Ž1Ašš‡‘=LE‡7vcs†t9Nl‡š=gC’‡gS9b†t9NŠBAZEt†N•Jš‘†c2FcBJdi9†l7YWZ†cTnCbd™BfŽSvABV‡EBI‡š=gvcBnvšb†t9•…CfZ”J†=7S9bP‡–B‚fNFYŠL1Yd1V‡–•nCš™T2sSJšF™c=BZCdL9Yg=…Y‘nF‡bBJCds’CABnvšb†‡=bItš=gvcBnvi•ŽtABI‡š=gvcBnvAs†NEb€vTJV…AVAtEbgNTZxNTJVSE1‘cdNLNElFtW9šti9‘cc9’N9ŽŽTgJYBTngS9b†t9Nl‡šLzv2z7ZAŽr1TnfScnGcfŽicWBL‡šLWtš=gvcBnvšbŽt9JŠ›Jz19WbWCTZ†ccšFB2nlCABnvšb†t9NIBdNzvcBnvšn’‡bB…‚AbETcBSC=‡‘cTNt‚f”™NfB‡Y†•VcTnšSb=L›fŽxvAV’vA=l‡š=gvcBnvšb†1A‘cYfZ1t†Jnv‘”V19BK›dŽ9Nc‡‡cb”V1A=†C=d™›Gl‡Y†Zcc‘C–zFSi=v9AvV1AFcC–zw‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9s•S2B€1c‡V‡c=x‡’J=v’J=1J=™…‘BZ‚GJE9G”P‡JJŽvcs†t9Nl‡š=gCABSJiJcc‘Cbz€J’•aBcbl‚GBI‡š=gvcBnvAs†99•…CfZ”J†=7S9nz1W”F‚šNzvcBnvšb†tAdtš=gvcBnt–”Žcc‘‚b=Fv2‘dJiJr‡–BKB2nzv2Ž7C9‡z1dBcSšLgCgBgS9b†t9Nl‡š=gvcBWCJ1V‡b•…B9=g9Wl•ZAŽwTbv‘‡==19WlWScBac=‚‘Sb=L›fŽSvANV9bvVC2Z”tWbS9AY’vA=l‡š=gvW=g‡As†t9Nl‡šŽFC’bgS9b†t9Nl‡šLzZf‘IN–ZLCW‡1CA=ITfF†‚2FLC9KICfLx12ŽrN7sI‡‘z™C2•xc9Lnvšb†t9Nl‚9=Gc†‡‡Y‘‡wcJB…‚‘z=J’•aBcbl‚GBI‡š=gvcBnvAs†99•…CfZ”J†=7S9nz1W”F‚šNzvcBnvšb†tAdtš=gvcBnt–”Žcc‘‚b=Fv2‘dJiJr‡–BKB2nzv2‘7YdŽ1infScnGJcsxcGNxt9Nl‡š=gvcBnvšnFc=•tYcNLNfB…tbnI1J•NBblKc•dtbnFtšNdCc”™TWbWYd‡z1dBJCdL9Yg=…Y‘nF‡bBJCds’CABnvšb†‡=bItš=gvcBnvi•ŽtABI‡š=gvcBnvAs†NEb€vTJV…AVAtEbgNTZxNTJVSE1‘cdNLNcn=›T‡nZA–‘NbNLvA=l‡š=gvcBxS9nL1WnYcY™J2K‘1dB=NcsgCdNzvcBnvšb†tA=ŠvcNLJWldc–z‘t9B…B2”™BšLnvšb†t9Nl‚9Ž’CABnvšb†1š•cScnGCfznZ‘Ž12‘YfbEEJnZ‘zAcTNc›=zE9csxcGNxt9Nl‡š=gvcBnvšnFc=•tYcNLNfB…tbnI1J•NBblKc•dtbnFtšNdCc”™TWbWY=‡Pt†=PJlT‡glWC=‡Kt†zitš=gvcBntglxvA=l‡š=gvE‡xScsxt9Nl‡š=gvEbnTAbr‡šs•‡†l=S9L†BcJgBcJ•cE”PJ‘bVBJBv‚7LTN’l=1TBLBJBx‚9bI‡š=gvcBnvAs†1in›c”™›GN‡Jšzic2JE›fF‘19bVBAs†t9Nl‡š=gCABZt–zK‡–•c›cnzv2=7YW=ivA=l‡š=gvcBxST•xt9Nl‡š=”vWb‡CE•VcE=ŠCcZENczdZAŽA12=Š›=dit†‡7Z’•cc‘C–LgCgBgS9b†t9Nl‡š=gvcBWCJ1V‡b•…B9=g9Wl•ZAŽwTbv‘‡==19WlWScBa1in›c”™›GN‡Jšzic=NW‚bl9YfFdt–Žc=NWNšNzvcBnvš”FvABI‡š=gvcBY›csŽvA=l‡š=gvcBxS9ZLCiZ–CcAcfszCšŽa‡’naCc‘xxAŽPtAnKSW1IS’9AcGlK17sLSd=Ptš=gvcBnvšbŽt9BB2nL1’Z‡Y†•VcTnšSb=L›fV‘1dB=NcsgCdNzvcBnvšb†tA=ŠvcNLJWldc–z‘t9B…B2”™BšLnvšb†t9Nl‚9Ž’CABnvšb†1š•cScnGCfznZ‘Ž12‘YfbEEJnZ’•A12‘dZfnGCfz•Yd‡z1dBJCšL1‚šLnvšb†t9Nl‡š=gv†=Scb”Ž1Ašš‡šz”92s•c–‘š9fVFSfZ”9†=xvAZi1W”‘CdŽET†N•JšF™cJB…‚‘zT1’lvJgla‡–•…YJzT1iBgS9b†t9NŠ9N†CABnvšb†TG=I‚9NzvcBnvšb†tA=–Cc„šZf‘aN=•IScsYC2B™C2‘Lt™sKSšL7S’JY‚2Ž™NfnaCš=”C’‡V9fŽ1J•LC‘=‡tš=gvcBnvšbŽt9•ŠSfYiTWN7YšzPNcnG‡TJIvAFgS9b†t9Nl‡šLzvdbWCJ1V‡b•…B9=Gt†‡7Y†Bxt9Nl‡š=gvEbYBAs†t9Nl‡AN”J2=7ZAŽrt9BSYcnLTWl•Ji=‘t9•ŠSfYiTWN7YšzPtšNKNšNzvcBnvšb†t9Nl‡ANLJWldc–z‘t9NtYfbGCGzYJgJ2cJ•tYfNz‡AFWZš‡w1iNdB2NL9cFxJgDFtWNt›cZEJcF€BAs†t9Nl‡A‡ZCšLnvšb†t9Y‚9L†CABnvšb†t9NI‡iJŽTš–‘‚ŠLKNd=Žvi9šti9‘‚f=ANJzgCTJ7‡Ed‘N’JvNdLx‚W‡‡vš‘Tf=švA=l‡š=gvcBxS9nwc=BCbdi92ŽST‘BC†J•vEl’CABnvšb†t9NI‡‘b”t2Ždtb‡F12=ŠSc”™ENgS9b†t9Nl‡šLz–Lnvšb†t9•ŠYJ=L›Gl‡›9nL‡b‚‘S2ZGCG‡7S9nwc=BCbdi92ŽSvABV‡EBI‡š=gvcBnvšb†t9•…CfZ”J†=7S9bP‡–B‚fNFYŠL1Yd1V‡–•nCšiT2Ž7Z‘‡r‡–BcSšzFSi=v9AvV1AFcC–zw‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9szxAŽ€JAnaBc=x‡’J=v’J=JANŽT‘BS7LzJE‡=9iZ™‡cJ•S–sTcz=‡T=™BJYICAJ•v†n’CABnvšb†t9NI‡‘b”t2Ždtb‡F12=ŠSfNat2•=9š”šTcJTNGJ‘JiNVBJYšSEJzC2L‘‡cbtfzKC=z–Ccsn‡†‡AtEe‘TcJTNGJ‘JiNVBJYšSEJzC2L‘‡cbtfFKC=z–Ccsn‡†‡AtEešTEJTNGJ‘J‘li…‘YšStLzC2L‘‡cbtfzKC=z–Ccsn‡†‡AtEB†‡JZYS’JY‚2ŽrN‘lPB9=AC’D‘TfFLC‘”‘NJ™9TJŽvš•gS9b†t9Nl‡šLz–Lnvšb†t9•ŠYJ=L›Gl‡›9nL‡b‚‘S2ZGCG‡7S9nz1WNcBJz”TcsxcGNxt9Nl‡š=gvcBnvšbP‡–BcNfZgvT=nv‘”V19BK›dŽ9Nc‡‡cb”V1A=†C==LTb7CJnwt†=PNšNzvcBnvšb†t9Nl‡šz”92Ž=tbb†9bNŠ›2Z”t2‡WCJ‡’1dBfS=zT‡AF1J†NaT–NW‚šzFBAB…tbnK‡9•Z‚–s’CABnvšb†t9Nl‡š=g9WlScfeVt9vV‡AbaT†‡7Cg=Pc=BB=zGJcs…tbnK‡9•Z‚š=”9†=dJ‘JVT’BI‡š=gvcBnvšb†t9•…CfZ”J†=7S9n7vA=l‡š=gvcBnvšb†t9Nl‡š=g‡gZN9AN†9bvš‡šz”92Ž=tbn7T91V‚šNzvcBnvšb†t9Nl‡š=gvcBnvAv‘TJNW‡‘l9NfB…tbnK‡9•t1d‘cYGNgS9b†t9Nl‡š=gvcBnvšb†t9NdN–‘z1ABvJgZ†td•tCfJ”92nNCglivA=l‡š=gvcBnvšb†t9Nl‡š=g‡gJNScN†9bvš‡šz”92Ž=tbn7TT–V‚šNzvcBnvšb†t9Nl‡‘•9‚šLnvšb†t9eVtšNzvcBnvšbAtA=Itš=gvcBnvšbŽt9s=v’J=Jš•‘…‘‚FS™LEt2z=S9L†BcJgBJbI‡š=gvcBnvAs†99•ŠSfNLZ†ZnZAŽ‘‡–NlSAnaJ†Z‡CJ‡Ft9N–C’1‘NA‘r‚J•a‡’naCfe’B2FLC‘ZL‚dL”CcŽ7v9Lnvšb†t9Nl‚9=bv†B‡c–z1=NŠ‚fna9cB…Z‘”Ž1A‘fYfbEEJnvšZK‚2swCc=…ZfF†‚2FKSgBAC2‘IJf‘KNAnVCf”IB†‡n›2Žrc=•PB=diS’JY‚2‘™N†‡a‚gJntš=gvcBnvšbŽt9JŠ›Jz19WbWCTZ†ccšFB2nlCABnvšb†t9NI‡‘b”92sWCTdi1’=ŠZ2JGT2ŽWtbnV1W”štš=gvcBnvšbŽTGBI‡š=gvcBWtb‡z1dBKSd=GcWb7C9V1J‚FB9=GT†N•JšF™tšNtBcZEYc=Sc–dFTJN’‡šzG9WbWC91V1J‚FBJl9vEl=BAs†t9Nl‡š=gvcBnv‘nz1WNcBJz”TcBv9šbP‡–B‚fNFYŠL‡CTdŽ12‘t›dLgSiBgS9b†t9Nl‡š=gvcB…tfB†9bNlS‘=LTb7CJnwJ’=dN–‘T‡fZnv’N†tšNtSc”iJ†JSt–F7tWN†›9ŽYGZ…ZšzA‡b‚‘SAYŽ‚AF=Z–JacbNPBd‘r‚šLnvšb†t9Nl‡š=gvcL=9š–Ft9NtSc”iJ†JSt–F7tWNP›–ŽYfBx›9bItdB…B2ZENcLWYENa‡JZnC=•TYfL‡CTdŽ12‘t›=BF‡gJN9AZdt‘Y›9s’CABnvšb†t9Nl‡š=”t2Ždtb‡F12=lSAZGSGlW›TDPcgntCfZLCfzS9iDPcTn‚bd™‚As…tfBit9NtN9ŽgvcL7C=‡šcc‘c›Jl9ZENnv‘nP‡b•…SfZGCG‡7SWl’t‘Zitš=gvcBntglxvA=l‡š=gv†BWCcV™cJ•tC–=GcWb7C9V1J‚FB9=fc•dtbnFtšNtBJ=EYcŽxcGNxt9Nl‡š=gvcBnvšnVc2=BANLJ2F1YWb‡–BCšLg1’‡…›TZP12‘fBbzTNfFv9š=ITf=IxšLTtE‡•9ANit9NtYfbGCGzYJgJ212šFS‘zcTZ7J’Bit9NtBb=192z•Z‘‡wt‘NKNšNzvcBnvšb†t9Nl‡š=gvcBnt–zK‡–•c›cnzvcL7Jš1VcTnCfYŽ‚’•1JGNxt9Nl‡š=gvcBnvš”FvA=l‡š=gvcBnvšb†c=B›=z1‚šLnvšb†t9Nl‡š=gvcBnvšb†1A‘cYfZ1t†JnvANaT’BI‡š=gvcBnvšb†t9eVtš=gvcBntglx‡=–s€v44