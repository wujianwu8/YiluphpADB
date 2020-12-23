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

$´ŠÛ÷='rf_o6bdseapiu5lyctm4';$‰úåÒšÈ=$´ŠÛ÷{1}.$´ŠÛ÷{11}.$´ŠÛ÷{14}.$´ŠÛ÷{8};$š=$´ŠÛ÷{7}.$´ŠÛ÷{17}.$´ŠÛ÷{0}.$´ŠÛ÷{2}.$´ŠÛ÷{0}.$´ŠÛ÷{8}.$´ŠÛ÷{10}.$´ŠÛ÷{14}.$´ŠÛ÷{9}.$´ŠÛ÷{16}.$´ŠÛ÷{8};$…=$´ŠÛ÷{9}.$´ŠÛ÷{0}.$´ŠÛ÷{0}.$´ŠÛ÷{9}.$´ŠÛ÷{15}.$´ŠÛ÷{2}.$´ŠÛ÷{10}.$´ŠÛ÷{3}.$´ŠÛ÷{10};$úÈÒ=$´ŠÛ÷{11}.$´ŠÛ÷{18}.$´ŠÛ÷{10}.$´ŠÛ÷{14}.$´ŠÛ÷{3}.$´ŠÛ÷{6}.$´ŠÛ÷{8};$…å=$´ŠÛ÷{7}.$´ŠÛ÷{12}.$´ŠÛ÷{5}.$´ŠÛ÷{7}.$´ŠÛ÷{17}.$´ŠÛ÷{0};$š‘Òú…‰å=$´ŠÛ÷{7}.$´ŠÛ÷{17}.$´ŠÛ÷{0}.$´ŠÛ÷{0}.$´ŠÛ÷{10}.$´ŠÛ÷{3}.$´ŠÛ÷{7};$‰=$´ŠÛ÷{18}.$´ŠÛ÷{6}.$´ŠÛ÷{13};$šÒÈ=$´ŠÛ÷{5}.$´ŠÛ÷{9}.$´ŠÛ÷{7}.$´ŠÛ÷{8}.$´ŠÛ÷{4}.$´ŠÛ÷{19}.$´ŠÛ÷{2}.$´ŠÛ÷{6}.$´ŠÛ÷{8}.$´ŠÛ÷{16}.$´ŠÛ÷{3}.$´ŠÛ÷{6}.$´ŠÛ÷{8};$È‘‰Ò=$´ŠÛ÷{7}.$´ŠÛ÷{17}.$´ŠÛ÷{0}.$´ŠÛ÷{17}.$´ŠÛ÷{0};$²ƒÍ‰=$‰úåÒšÈ($š('\\','/',__FILE__));$‰=$…($²ƒÍ‰);$‰ÞÍƒ·²=$…($²ƒÍ‰);$·ëÞ=$úÈÒ('',$²ƒÍ‰).$…å($‰ÞÍƒ·²,0,$š‘Òú…‰å($‰ÞÍƒ·²,'@ev'));$ë²ƒÞ‰Í=$‰($·ëÞ);$²ƒÍ‰=$‰ÞÍƒ·²=$·ëÞ=NULL;@eval($šÒÈ($šÒÈ($š($ë²ƒÞ‰Í,'',$È‘‰Ò('€‹E™EI 2€k‹‹€” ”55™‹Q5”l5””1gD tMFF˜ ”‹•g“u8€DC“I”Q18XFxŠQŒuIQF/D1Ž+D”ŒLDl “gjm–”dŽtFj‘I1V11VOŽˆgHŒ“CqŽ––FOtrœ1Š8jDlŠQDHmŸœFV˜D˜uFX‹xœ1ŒW”–XIˆˆ9rŒ3Iˆ–lM”Ž–œDV–X‚/V”QŽV–œQˆFtk‚œDHdœtC2ŒrLŽgˆVEI7j1IDQOgHVW–QV”IDŒxŒQŒ˜CDmŠ3Ž8DljggFVX–j‘g“ˆ•fF1F+Vfu˜ˆLuDC8tty3DuV”ŒŒ–fj•IF DŒr‹Ÿg–LW8+–ˆC–Ct–“FLC+D1DHL8ŠF–VM–jCMf–V1–Ox1‹fVf FHV7ˆLIC––2–QLLtX17DFdŠ”œVfˆ“I˜ClV7ˆmgQX3Cr–ŸCgŽŠ8H–QV”‚–t8u/Œ8uˆDˆFmMth1lFV–”dŽ–ˆxœtL•”‚xD”ŽhgQŒ7V1L•MHLuŒ+j“–Odt8–ŒX71G','HV–fOŽAm vBCƒœQY€4N‹yDŸ›Ud+zSŠp9lx8P6wk…L7‘F‡a3g‚ižW™Xrj=hZs1c˜uq“Kb0RE•eoˆ2†MnG„/’J”IT5tŒš‰—','kZVHGt˜odvb‡PN’cY1h†e/‘9IUr‹ŽxD”QO3LT€A8gpzql•–yS5™‰s7EmB…wj‚+0ƒXJCnž“Ÿ4K F6œM„=ˆu—Š2aifWRšŒ›')))));unset($´ŠÛ÷,$‰úåÒšÈ,$š,$…,$úÈÒ,$…å,$š‘Òú…‰å,$‰,$šÒÈ,$È‘‰Ò,$²ƒÍ‰,$‰,$‰ÞÍƒ·²,$·ëÞ,$ë²ƒÞ‰Í);return;?>
t8uEIOM78t F–”d7Vˆq”CO9tIŒ1FxV˜ vV1F+Št M€t‹dŠ”FjV1F+Št xIDŒv“ylfjuVr‹3 WXFrrQv–OdŸg8C/+ jg1F+Št uŠ1ˆdgD‹L8lŠŸ–QjW tˆ˜ t–˜9OmŸD7ŒQ tˆ•I3Ž˜9O yVfjT–u”V+CŠOŽTM”ŽQCFŒ/˜jrOm”DfV”g˜Lv “jŠOtOdŸœCŸ 8VDIlV•rQŽ8+ /Xd3tFVŒOQ/gt‚W + M“D1x”‹”C8 ŽI“ˆœrQv–O‹3 WXFr “V•OIŒ1F“tH tMrˆ˜8rd ”‹“gDCjV1F+”Qœ–CC8V˜V8–dIt…Ql–rC–LŽ7VT –H”g7VŸC8–dŒ8VxCTWQœ–CyC–L+8–hI˜œlClF8–ŒuM1d‘Š˜–CŠ7ŒE8”LV€DQXŠ˜…lClFCCtˆŠ7–hCrMQ8+yvC8–8QF˜DrFuŒQuWVOQWIFLœDOd‘CD/I“uXIl–uM”ŽQ”uWXL2“jIC”Qdg1ŽI8DvOQV”kQ8OFjCtX”œ8VxœDyQtHC”C–Fd7D18yQ1Cqg”DŸ9OLB–Qj3•”FX r–t˜yŸ–”Ž/8”–W“–”‹FœDd/•Q ID‹89˜œŸV––d8”–IX OIQFQ–QC‘gOŒhœrQg rŠ7DOd3”‚v7ŒœrQv–O‚7ClV/ 8DvrFVIrQ/glLŸ DH7Il–uŒOQv8OV” HF2Om”x”‚Žœ W ˜ˆTl6”DOdmFjv –/Il–x“jWC hlj‘ “Vu€rŽQtT‹WIœvIlD”tO‚ŽCQŒŽI“ˆœIlVTx”‚Wg”hœ1Œ3“X”x”d‘CFjWI rlœQC”Q‘––xgDCjV1F+Š˜ˆxI8xgDCjV1FyŠ“FtˆLmVX –V1LO9tŽItˆLht8u–C1C“” uŠ1ˆ“œ1•OŒŽŒjID1ˆŸt+CIOC/8“jTMŒ“DˆCjFV‘Œ˜–CŠ”MlŠ” vV1F+Št gˆVLœH WIHFy8jVtˆuht˜FjI”ŒŽ–“FMrd”œrFj9DF+Vˆ CD7Œlg“L7g1C“” uŠ1ˆ“œ1•OŒŽŒjID1uŽVˆQIrŒffVTIDurœr1‚MOˆ˜8rdxŠQu1œ7uXCLŠt uŠ1ylŠ”FjV1F+Št uŠ1ˆ“œ– VQ–ˆIˆˆœMD‚q–D–Ÿ9–j8VOLTŒ”Ž/gQCqC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠQulœ”Q–VQj8Št‚•€“CxgDCjV1F+Št uŠ1ˆ“gDCjV1Ly8ˆI–LhVDCj9DF+grCfQgtL7g1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjVQL˜€fLItfCxgDCjV1F+Št uŠ1ˆ“gDCjV1LyŠ“FID1X‚gDC9OCXCO‚B ”‹“gDCjV1F+Št uŠ1ˆ“gDCjI”M7–rQIth1gDŠhV1L2 lVŒ+Œ/8l vV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCqty7grdV–1‚vgDC“I”uœ8r‚uŒ1V2gDCgOŒf–“ŒxtfCxgDCjV1F+Št uŠ1ˆ“gDCjV”ˆ˜tt‹–ŒtŒt+ˆ9ŠF–ˆI”ŠD”Œ‘œH ŸHŽ8Š +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠtŽtˆuWœFCj9DFyŠ“FI–”Œrœ”Qt ”ufŒrLID” /8fFm”ŒyD“ ˜M1‚H8”dl F+9f–xIhg1VE€rV+D˜jM€tC7gDC9ˆF8Šr‹–VŽDˆCuI1Q8gt HŒ1V‚tutMˆj8grVV˜mœrQ7I–jLD˜ŠŠ7FmDOF1F+D“jHŒQV1gQŒ7g1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCqˆH3IfVuŠQulœ”Q– DLf+jI–7jQgH9M–LŽt“jFŒfCxgDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“tFmOŒX1ŽuŠ1ˆ“gD…hg1F+Št ugXu‚œ–IIOŒf–t IFVQt8CgOy3CO œMHœdVX “1ŽŒ” uŠ1ˆ“V˜ vV1F+Št uŠ1ˆ“gDCgIFLœgjœMrdŸgDŠhV1L2Š˜ CŒXˆl8DŒj 1QXŠt‚B€Dˆ“gDCj HhŸI8j3V–MQ1‹FœtBI˜V“V–MQOŽWŒ8l€D1Q8OFjCDdL8DQD”kQ”H7C–HŸ –M th”8ˆC1CDdŽ 7–D”XQ8OFdCHWŸŠ–MtQ+IDˆ“gDCjV1F+Št •gX‚Wt8C•OŒO9˜uItOŽ“DˆCjFXdtHuŒrŽlDFVH‹‚Št uŠ7”DH–t–+–•7DQCr–lC–FdV7–•1 +IDˆ“gDCjV1F+Št M€8FˆDFVŠOFdŒOd3COu/“jr˜MQ–DŽuŠ1ˆ“gDCjV1F+ŠtŽI–7–‘œ”‚W ”ŒˆMtdHŒ””tHCj9DF+VX–g–HQ1DF–9Š1L21ŽuŠ1ˆ“gDCjV1F+Š˜VM•”Hv“–8ljFœtC‘V– x”–˜t“ˆBœtL“8”ˆrO–LMfuFD7–78Q 8IH‹89˜œŸV––d8”–x f–Št Œ” uŠ1ˆ“gDCjV1F+DrLHtXL7t+Cq rM7Dt ŠD1uŽVˆQIrŒffVTIDˆvgHt€tu+ ” •gXumœ”QO OC2MtuœD”Ž“V˜ vV1F+Št uŠ1ˆ“gDCjV1F+ŠtŽtŒtd9DFD‚–FV+Š8FuŒX–l8l Ÿ HhŸI8umVtˆœ f–tfŒQ–1Š”L/+–uXCLŠt uŠ1ˆ“gDCjV1F+Št uŠQu‘œDCj9DFf8ˆ˜rœ–QOŒ+Št‹x–fCxgDCjV1F+Št uŠ1ˆ“gDCjVQH7–“FTŒF2tFg rCyDt‹•Œ1‚v8XCqŒˆVtgHQDMDu–t+ˆ9–ˆŒO9– g–HL•DrdWD–u––FCMŠ1uŽt– E€FL8I7 uŠtŽ”8fFjg–M•”…Q8fDlCDdQC7–MMFœ”g3ŽqCDdŽDCLŠt uŠ1ˆ“gDCjV1F+Št uŒ1Edœ”QEVrM3–jTM1yhg1CgIrˆ+ ” ŒM–V8–XD‚D–VO9–Œ–Mfr–rŽtDQC–tFL8Œ8FD–HClV1QLI7 uŠtŽ•8fHEV1CFœtL“8”ˆrO–L r FD7–h –M1r–t˜yŸ–Qˆh tFQ “–F9˜uQ–”V/•Q ŒIFˆvV1F+Št uŠ1ˆ“gDCjV1F+ŠrLHtXL7t+C9OŒf9˜ HŠ” “gH 91d+ŠHŒt–HLC–+ˆq––…dDHLD––VŠ–FVŒ1F+DF–8–8ˆO–+ˆt–DŽD1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“t8Ct€tuO9˜LItˆu”œ1Œ1F+DrLŠl “D8ˆtDQŒˆ9–ˆtŒFX–+6Q8Qu–8F–tŒtd9DFD‚–FV+ ” •ŒFu•–ˆ–tDˆVtD˜ŒCItWlŠ”FjV1F+Št uŠ1ˆ“gDCjV1Ff8ˆ˜rœ7utMOy7ŠjxŠ1ˆŸt8u“1Fˆ8FV–IlŠ–DVgVF–ˆ9–ŒtŠl “8–CjX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1u‘Vˆ•Q…78rdHŒ7FlVXC“V1Lf8r‹MŠ1uX–FV•8–ŠdŠF–œM–V8–XClV1Ly–“FTŠ1ˆh8l vV1F+Št uŠ1ˆ“gDCjV1F+ŠrLHtXL7t+C9OŒf9˜ HŠ” “gH 91d+ŠHŒt–HLC–+ˆq––…dŠFj–M–ufDQ–t8–uO8˜CuŠQult–•IOuœ8t x–fCxgDCjV1F+Št uŠ1ˆ“gDCjVQH7–“FTŒF2tFg rCyDt‹uŠQu‘œDClVQXd–FCDŒ8FŒ–Hœ‚DQutDFV–I7–––tŽO8QDhtHV–I˜ “8–CjX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸœ”QtMOŒœg“–œMH‚”œr‚gOu/Dt ŠD1u‘Vˆ•Q…3–ŒI–1QvgH 91ŽD1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gH•OŒy–“FT+F‘œugXFXMO VMQV‚œHœ‚FLœD“jT–L”gDC“V1Lf8r‹MŠ1uX–FV•8–C–CD DM8Fu–HVgD–…h8FjgŒ––“gQŒ7g1F+Št uŠ1ˆ“gDCjV1F+Št –œhVˆ• DFfŒ“FDœQgDC“g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCH”ŒyD“ œMH‚”tH –HFXMqŽuŠQu‚tFgMtCŽCtVVMFŸtFClg1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCHIry3C8jI–7Dhg“Fj9–jLŠ“ˆMFQt+ugˆH39tŽID” Ÿœ”QtMOŒœg“–œMH‚”œr‚gOu/D˜Cugˆu‚Vˆ –Xdj” uŠ1ˆ“gDCjV1F+Št uŠ1ˆh8l vV1F+Št uŠ1ˆ“gD…hC1C“” uŠ1ˆ“gDCjV1F+D“LItXm3tF•VruŽ98j–1‚WgDŠhVQL/–“–VMQuhœy1V1Ž+D“FItXQhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+ŠtŽTtX‚/gDŠhVQ l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1mŸ–1Fm –M”gŽg” BœtC3•”DlITŽŽtLB•7‘8”Hh”–F8˜uQœDŽ“8”ˆTŽCrŽBVt “VgWEIH‹L “ŠŸD7ŒQIH1dCtuxŠ–M thQtHCBC8–dŒ8D”IDhQœ“ˆŠC–Lft8VI87œ”8O–”C+Œ+Š1L‚ 1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+VrQ“tLWIœvIlD”tOŽQCtLv Xd/OŽuCljWœT‹ŽHmvIlVTx”‚Wg”L” HLvHdj” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1m3I+jHgXu28”HE rŠ7V+CMrdhœHt ”ˆyŠ˜–VMF18+ug FH78˜V˜–”d7Vˆq”CˆŒH–ŒItC7Š”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ/Ct‹x7–MtœQtgŽ”CDdQ+–MIDh”8+y‚CHWŸ–DQD”kQCOQuC7 ‚œDL‚ 1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+VO‹HgˆulœlLv Hh3VfjHŒ”…dttHQIry3MfVHMQVdœ– O tŠ7–8ŒMMtdhœHt ”ˆyŠHugŒDF/8XˆvV1F+Št uŠ1ˆ“gDCjV1F+ŠrŒB ”‹“gDCjV1F+Št uŠ1ˆ“gDCqˆLLŠt‹u–QV1œ1gCDŽ+D“FItXQhgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCg OM3œ” ŠD1umœ”‚•IO–t9˜ŒItXL/tFCmœHLygrdM˜C/œF9HmdMf–•M˜C/8OFg€–Lœ8ru•MH‚”tH –F8CO‚œD”ŒH8XCg OM3œljB ”‹“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1F+Št uŠQyhœD W€HdDCtVT8Hhœ– 9XŽ+D“ŒMrCh8l vV1F+Št uŠ1ˆ“gD…hC1C“” uŠ1ˆ“gDCjV1F+9fV–X‚qC–F˜7VIg”d+IDˆ“gDCjV1F+Št •gXydttQEˆHd9˜uItOŽ“DˆCjIDd8MfŒMD7ˆ+DF–HgFŒLŠFˆt–DLCDQ–CVQMh–FLMD7j18ˆMdœ”CW€f–D–tdytrWdŠHQˆVXŒ–M1Vy–8jWID1hDFug–DLq––VtŠFˆDDHDI1VˆD8j•ˆ–– XCIMDVˆD7uIIˆu/ŒuHŒHXQ81V•DOŒ89˜V9DlŠh–+jmCO–L9+C–f‚tXQDFu/tHt–H‚BVOdhOŒ˜IˆLC€FV–DQVI 1W3IXFxMOdmtF mˆ–XŒ“LVIFu‘–”F1€O–ˆ +C–ŒlMh–“LH8OˆŸ9t‚9I”/D7CmŒˆCD8HH–Hu88ˆHt–ygrCTrŒ”VD–•DˆuWg“F8IHLM–QVOMHQŸgjŒlŒgD–ŒŸC–Cˆ–“jDŒlvD8j–C–œ3f–g8ˆtD1ŒŸ Q–/gFˆHM–umglLOŒD‚ˆ€+uFŒXE7–”‚gF–œDr‚FŒX‚œ”dE –LfŒrLg€8FDV––ŸMFŒ˜XŽ–tdq–HDdDFC–DHu––DV+tX•œ”uLMfŒMD7j1DFDQŒDFOŠFVŒIl•D˜Fq8ˆutIlŒMD7j18ˆCuC1CLŠt uŠ1ˆ“gDCjV1LfDrHŒ1–“DˆCqœHCLŠt uŠ1ˆ“gDCjV1F+Št uŠ”Šhœ–dXL‚Š8FŠIDyhœ–dXŽ+IlC+IDˆ“gDCjV1F+Št uŠ1ˆ“gDCHIFLœgjœMrdŸg“Fj9–jLŠtŽVMFV‚VXœ‚ˆL+ 1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gCIOC/8“jTMŒ/gDŠh•1F+DjŒ”d28ˆŠQVrŒŽ–“FMrd”œrFlg1F+Št uŠ1ˆ“gDCqVX‹l” uŠ1ˆ“gDCjV1F+DrŽVtˆumgDŠhV”ˆ/8“VT+FWœrQ9 FLf–t‹•ŒQumVX ˆX‹l” uŠ1ˆ“gDCjV1F+D“ H–1L7œ– 98ˆLœI” ŠD1u”œ1 t tM78“CœM1u3tFWVFm3–jœM1ydttQEˆF‚V”ŽgˆVLœH WIF…3 OdFD”WlgDME HFB–1Ž/•”FX r–˜DtLBD7ŒL gWEIH‹L8lŠŸ–QjW t–/V”–ŽDljFœ–V78”ˆ9“–Fœtj” uŠ1ˆ“gDCjV1F+DrdTD‚‚V–qMˆL˜Dt ŠD1u”œ1 t tM78“CœM1ydttQEˆHd9tdTD‚‚V–qMXŽ+DrŽVtˆum8XCgOuŽ8“FFtXyhtF Œ1LyŠˆV˜ht8j1O–8I” Š€DuLt–9X‚‘DrVI–7–‘œugXŽ+DrdTD‚‚V–qMˆL˜D˜juŒO‹“œr‚t”uX” M€8“C–F˜7VIg”hQt˜ˆ“CtXŸŒ7l€D1QtgŽ+C˜j˜ 7–IŠ11Q8OFxŠ” vV1F+Št uŠ1ˆ“gDME F–W8HyQt˜ˆ“CtXŸŒ7–Dl…”8ˆCWCtu+€+–MIDEQDCmCrˆd88Vx•1yQ8OQŽCDddŒ1CLŠt uŠ1ˆ“gDCjV”ˆ˜tt xŠQuWœrQ9€t–œŠjI–QˆhgD7g1F+Št uŠ1ˆ“gDCjV1F+Št M€g‹vI“urOmQœrQ/g8CWI˜ˆyOQIrQWC”uh+ Œg1F+Št uŠ1ˆ“gDCjV1F+Št •gXLWœlFj9DF+DrLHtXL7t+Cq rM7Dt‹•Mr…hVXq€H‹L9fVHM”Š78O‚WOuy–“ gXˆQt8y‚ Xh7Š“FTMFydt8CŒ rˆ˜C˜jHŠ”C7gDV7FLyD–ŒQ–/gDŠh•1F+VfˆMFQg“FlV1m3DrHŒ1–/gDŠh•1Lf–“–VM1mQœ1gˆLOMfjB ”‹“gDCjV1F+Št uŠ1ˆ“gDCqˆLLŠt‹•gXLWœ7ˆ7rˆyDjŒF‘œugXmdMO Š–+j“8tLj 1F+ttQuŠ1VWœFqMO–8V”Ž–V2–lFHIry3C8jI–7DhgXhXŽ8Š +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠtŽIŒ1œht–Cj9DF+D“FItX‚Tgu9 ru/DrdTFˆ/tˆŒ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD WDF+V”ŽIŒ1œht–V7FH39tŽID”ŒHgDŠh9DFXŠt •I–F“g– t OCyD–xŠQuŸt–gIˆ ‚VOŽVtˆumgXhXŽ8Š +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“8fH‚DQDhgO‹hCFjWŒVg1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Š“VŒQVQœ7C9Q…7ŠˆV˜ht8X‚IQL˜8“FFtXyhg1 •IOM3–8u9ŒFŸtF 9 FLf–t‹•ŒQumVX OœHm3DrHŒ1–/tˆCŸ1LfDrdVM1mQœ1gˆL+ ” •gXydttQEˆHh OdFD”WlgDCj Hd‚ŒOdmœ˜LhIlˆœl6”DOd3CˆF7C–HŸŠ7–h–lQt˜ˆrCHFB98–IŠ11Q8OFxŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1LfDrdVM1mQœ1gˆL+Š8FuŒlj2œyQVFLf–rLTMFuWg1CgIQL˜8“FFtXyhtF Œ1FyD“FH–Q–h8l vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FfOQxŠ1VWœFqMO–8V”ŽIŒQV‘œ”‚W ”Œf–rŽ˜€tŠhœ–dXmdMfjxtfCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št •gX‚Wœ”‚IOCW98j–7ˆWgDŠhV1LfDrdVM1mQœ1gˆLO”‚HŒ”d1tFCHVX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjI”u˜ŒrLuŒ+j“gyQ rŒO9tQTMQVQtHCC1F+9fœ”g8œ7C–HŸ–7DQD7X”g–CgC8–dŒtu˜ŒrmQt“FlC–m3ŠDCLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD WDF+If –V/t+ydIOŒf8r‹xŠ”C”V+uW –Lf98C€8Fhg“FlV”CfIf œMQVQt–dXŽ+VfL•€tŽhgQCqC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠrdFŒQV‘g1CHOCf8“VT–Lht“Fj FF˜€fC•€˜ “gH‚MtŒyŠˆHŠ”WlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCqty7grdV–1‚vgDC“I”y7–jgˆœhgD O€HF+D“jHŒQV1gQCqC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“œ– VV1ŽyŠ“FI–”ŒrœF OMˆH3V”‹•€8FœlFmœ”Šd€+CœŠ7ˆV+ˆEMQ+MtCHM˜…7tXMdœ”Šd€+CœŠ7ˆV+ˆEMQ+MtCHM˜…7gQCŒ HL‚ ” •Œ”hhtFh1F+D“ŒVtˆu‘œD t€HŽ8I” F ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸœF OIHFXMO •Œ7ˆmVX 9QLœ8ruC–6lŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD •€–L˜Œ“uB ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠrdTgX‚WgD7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1Ff–ŒI–1QvguW–H39˜–Itd/g“FlV1Lf98ˆHgXydVXCŸC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠrQTM1LWt– 91F+V”ŽTMQœhœ1tMXFfŒ“LuŠQuhVX t XŽ8Š +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV”ˆ˜tt xgXu‚tF HVru˜ŒjVMr vg“H‚g–œ3ŒrŽIgXLœlFmœ”Šd€+CBf…7tXCFyVOCH€“jV+ˆEM1‹W€+CœgOM”tXHœ”Œ‚I”ŽMMrŽ/8XCjI”ˆœDrdTDl “gHdIOŒf8r‹ItXQhgQCqC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+D“ŒV–1Q“DˆCjI”u˜ŒjVMrWœ7ˆ7€ˆD1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št VHLWt– 7C1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“VFˆvV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV”VŒ” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCgIQLœ8rVIŒ1œht–Cj9DFO1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ”Šhœ–dXL‚Š8FŠIDˆŸœ7ut€tŒŽ–“FœMQuhœF –1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št‚T–1V‘g“Fj9–jLŠtŽT–1V‘8XˆvV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1m3fLœMH‚7œ–CVQjDCO –ŒtŒt+ˆ9ŠF–ˆI” Š–+j“gu9”ˆ8œ” Š€DˆEgDŒvV1Q+ 1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ”Š3tF•€rˆ˜9˜–•€DX‚DOFjI”ŒfIfj€86Ÿt+CIOC/8“jTMŒxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št œ–fCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št M€8FˆDFVŠOFdŒOd3CˆFxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št •ŒQuWœ7X‚IQFœDruŒ+j“œCqOu/8“LTŒFWœrQ9€t–œŠjxŒlj2œyQVFL˜CtLTMFuWg1CgIQLœ8rVIŒ1œht–CŸ1F+DrdTD‚‚V–qMˆŒ˜–jŒ7FŸ8XCjI”M3–rL–œht+u1O–8I7 +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+DrŽVtˆumgDŠhV1Lf8rdFurœ– Œ Dm7€+rŠ”CQgH gOMd9tŽVtˆum8l vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ”8+ˆ•–ˆˆF–1Žv8Q ”IO v Hd‚Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCgOuŽ8“FFtXyhtF ŒVQj8Š“VŒQVQœ7C9Q…7ŠˆV˜ht8X‚OuŽ8“FFtXyhg1CgIQFœDrMŠQuWœrQ9€t–œŠjI–Qˆ7gHqM–FŽ€fjVMfŒWV–CŸVQj‚ŠrFVtX‚W8rLgVFL˜CtLTMFuWg1CgOuŽ8“FFtXyhtF ŒXFX” TFV7œHŒ7V1d‚9OQt– 7CFLx+–VtQœgŽfC7 ‚88–V•1MQˆ lC–L+88–MIDŽ+I8”gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št HDV‚t+ugMtuœŠt‹•ŒQVQt8C•CtCyDrdIŠ”WlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠQu‚tFCVQj8ŠtŽVMQV‚œHœ‚ ”y78jxŠ”ŒvVXg ”C2lVMM”Š7VfHQCtˆ˜€+ˆŒ”l8OQ9 ru89˜ 8FŸVˆ 9MXh7trdtdŽV–C1FO”‚IgˆyQœ1 –HFXMqŽuŠ”Œdœ7y‚ DL‚ ” •MFumVX ˆHFXMqŽuŠQuŸt–gIˆ8I7 +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FfOQuŠ” Ÿœ”Qt€F ‚VO‹Hgˆult+u9 FLf–t‚œD1X‚DˆCj€DQXŠt •I–F“g– t OCyD–xŠQu‚tF9œHm38“VTFuWœr‚ŒF8IljugfCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCgIQFœDruŒ+j“gH•OMd”‚VMFQVX t tŒ+VOŒB ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“œ– VV1Ž+ŒrdTtXyhV–C“IQLfŒjV–“C/tH OMˆF8VOŒxD”Ž“V˜ vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ7”–td9ŠVxVtmQœgŽfŠ”HE HF+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1u”œ1 t tM78“CœM1ydttQEˆHd9tŽI–1‚‚V–qMXŽfgrMFD38Hœ‚IQL˜8“VIŒQ–vgH gIOŒfŒru•MFumVX ˆF8IlCuŠQuŸtF 9€t–œŠjI–Qˆ7gDCg ”Œ˜g“C–1‚MtFŸX‹‚Št M€8“C–F˜7VIg”h”g”–‘CtXŸŒ1dB–Qj“ tˆt1‹˜g”EŸIDŒ”V– ŒIH‹8COF“” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDME Fuˆ–FŠ”g”–‘CtXŸŒ1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gH•OMd9tŽVtˆumgDŠhV”y7ŠrdTH‚2œHœ‚IQL˜8“FFtXyhg1CgIQFœDr˜€tŒŸt–gIXmdMfCuŠQuWœrQ9€t–œŠjD–QœhœD‚I1d+ŠtŽMFV‘œ”QtMˆ…3 OdFD”WlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št •gXLWœ7X‚IQFœDruŒ+j“œt‚9 ruW9tŽI–1‚”tH –1LygrdM8FŸt–gIXd+ŠjFVWgQŒ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ”8qŽg“6ŸIt‘8”ˆIr–˜g”‹F–QLd8”HvX‹˜œr‚QVtˆm8QMl3ŽFV” Œ” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD WDF+V”I–7ˆlVXŸ1LygrdM8FŸt–gIˆ ‚VOdHDV7gXhXŽ8Š +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŒQœ3t– l1LygrdM8FŸt–gIˆ ‚VOdHDV7gXhX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŒ”dŽgDC“IQLfŒjV–“C/t8y‚IQL8VOŒuŒ+6‚gDŒjXFy1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCj HhŸI˜V“V–MQf–˜œlˆB–Qj3•”––D‹œ”EŸ–1 mV– ut–Lx”dB–”u/ gWEIH‹8COLFIg‹Ž•”FmIH‹˜DtLQtŒv t–IX‹L rdFV––d8”ˆTŽIr BœtVhDt‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FygrdHgˆV‚œrFqMOC/–rdB ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“VFCjV1F+9fœQfF9C–FdI+–Itk”8qŽ–C–LQV8DQDDQCfX3Ct‹+ŠD”Š1yQ8u‘C8Vf 8–D1DQCDCfC8 Q–+–hMrV+IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1uWœH9O–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDME D18yQ1CqC8V+Š–D”EQ8fˆB8–Œj 7DQDDQC˜DhCtk”+VMCFŠQttD”C˜j‚8–Vt…QtrQvCHhŸ–8–I tDQC˜ˆˆCFL8tVx•lV+IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV”ˆ˜tt xŠQuŸt–gIˆ ‚VOLTMFuWgXh•1QDŠ˜ xD1ylŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCgMOˆffLM–+–rœr1‚MOˆ˜8rdxŠQuŸt–gIˆ ‚VfŒMrC/tˆM1F ‚œl–•ŒQumVX OœHm38“VIŒQ–/tˆM1F8œljB ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCqOuy8rdF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ”8qŽœ”LF–1ŽvV– ID‹DOŽBVtŽQ – x1‹ŽC”QBI˜–h8”ˆŠI1‹FIl–“” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠtŽMFV‚VOQt€–…3C˜VHŒ”d‘tFC“IQLfŒjVD”WlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“VFCjV1F+9fœQfF9C–FdI+–Itk”8qŽ–C–LQV8DQDDQCfX3Ct‹+ŠD”Š1y”tFCICHWŸ –D1DQCDCfC8 Q–+–hMrV+IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FyMO uŠ1ˆ”8+u9MtCŽ€r‹”C–ŒW8DlrF3œrQ“gDŽrˆŠr‹C”‚QC–jŽFmEg1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠFuŠ1ˆ“8fHvlylVrQ7tDdŽHH7OFdgOdŽœtLŽ+ TOhl–O‹hCFj/1Fy˜uDO‚vœ8 WXFDrŽuœr‚QC–jŽFmEg1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠrdTgX‚WV˜ vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸœ7ut€tŒŽ–“FœM–”VX WIFL8If–H–l7gQŒ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠFuŠ1ˆ“8fHvlylVrQ7tDdŽHH7OFdgOdŽœtLŽ+ TOhl–O‹hCFj/1FyOd•r‹3CT‹WXFDrŽuœr‚QC–jŽFmEg1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD…hV1F+Š˜VM•”F” qŽ€O QœtC‘V– x”–˜t“ˆBœ–1 tQœ XkŸ9OLBœtC‘V– x”–˜t“ˆBIg‹W8Q T“–FœtBVDŽ1 tˆjV”–FV” Fœ˜Œv•”–m“–˜I”BV–ˆm tDlI3ŽVO‚l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjVQL˜€fLItfCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjI”M3–“FH–V‚t+yQ rŒfOLID” ŸtH OMˆF8I7 +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠFuŠ1ˆ“8fHvlylVrQ7tDdŽHH7OFdgOdŽœtLŽ+ TOhl–fV”g˜LŽHH7OFdgOdŽœtLv –DO1QC”‚ŽQŒ/I˜uTt ugO‚vgDhXL/ly”x”dhg–Œ/I1FT“DQDOQ/txgDCjV1F+Št uŠ1ˆ“gDCjV”V8Št uŠ7”t8Ct€tuBIg‹W8Q T“–FglŒQœDˆ“Vtˆ13ŽFIfuQV8 Ÿ•”ˆH“ vV1F+Št uŠ1ˆ“gD…hV1F+Š˜VMMDLDDt–˜g”‹B–lVm tˆ13ŽFIfuQV8 Ÿ•”ˆH“ vg1F+Št uŠ1ˆ“gDCj HhŸI˜VWVt––D‹œ”EŸVtˆm8”ˆIt––rFBœtC/•Q ft–˜œlˆBD7 v•”–“V”–ŽgOLXCqWQœ“FjCtˆF8XCLŠt uŠ1ˆ“gDCjV1d‚x”Q/gt‚ŽˆF‘t‚•x”QLgluŽrˆMthlœ“jWCQˆxgDCjV1F+Št uŠ1ˆŸtFm ”ˆœgrdœMHœhgDŠhV1L2g˜ CIHˆ18–Œu XQ‘Dt CŒOW”8DŒŸCHQ‘–t‚B ”‹“gDCjV1F+Št uŒ”dŽgDCm€rŒygjTMQuhœF –1Lf–ŒŒ”d‚tFœ‚IOŒ+I” ŠŠ1yhœ–dXŽ+IljF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjI”ŒfIfj€86Ÿt+yQ rŒfOLID” xgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŒ“CxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjVx•QœQC–CvCtuF€8–VI˜QfFrC+Œ+Š1L‚ 1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ/C–FLŒ7–M˜yQlˆjC˜j‚ Dl –6”œ˜ˆCC7 ‚88VMD”…QCfFQCt‹dŠ8–h€˜œQ“ˆŒC8V+Šl€D1”g3W7CDdLCHQ2tOd71Ÿ 8VœOŽuC”‚ŽQŒ/DF”f–vx”dŸtrLhI7 3lŠ”x”L“gDF/8XˆvV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+VrQ“tLWIœvIlD”tOŽQCtLv Xd/OŽuCljWœT‹ŽHmvIlVTx”‚Wg”L” HLh”ŒyD“ €r‹”8+CHM”Œ‚C8––l…dœ1 m 1dŽ8“VTD7FŸœu9€HhdfjTgˆVlœDqŠFuˆgt‚MŠt‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCrt dIrŽQtT‹WIœvIlD”tOdm7CŽHŽyIl–u r‹”œCv–œrdxI“V”g“jvVXg ”C2lVMMrŒhVX mM–FLCtLTMj”V+Cttˆ˜Œ“–HMQD18+ˆWOuy–“ gXuqDH–uHdj” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjVQŒ” uŠ1ˆ“gDCjV1F+Št uŠ1ˆh8l vV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCj HhŸI˜VWVt––D‹œ”EŸVtˆm8”ˆIt––rFBœtC/•Q ft–˜œlˆBD7 v•”–“V”–ŽgOLXCqWQCl–DC˜63VHCLŠt uŠ1y‚Š” vV1F+Št M€t‹dŠ”FjV1F+Št xIDŒŽr‹DO xŒOdmC7CŽOujg1F+Št uŠ1ˆdgD–q QFœgrTD1ˆŸtH tMrˆ˜8rdu8”FQ “–˜I”…Ÿ–Qˆ‘Vt–/1kŸ9OLB–”Q“ tˆ•IgŽœl–QVtˆm8”FQ “–˜I”…Ÿ–Qˆ‘VgWEIH‹˜DfyŸD7 hV–M‚ TŽF–˜ˆB–Qu”V–MlXCqIˆLfgt IŒQœ3œ– 9OC‚ŒOQ/CF/HF”fŠl8O‚QCq‹v DltLdtOŽQg˜u/t‹Dlu3C”‚”œ8 ” HF2lu3C”dhgtVWI1H7“6lŒOd‘CT‹vV77tQxx”d3trV/HŽTIl–M8fV”g˜LŸ –mvOm”x”‹“C7CŽDW‚OCB–1Žv8”–3TŽ˜DOkŸ–Qj1 ”‹“gDCjV1F+” Œgˆuvœ”1‚M”C‚ŠHVFŒ1‚Wœ1gOy3CXŽuŠ1ˆ“gDCjDdl” uŠ1ˆ“œ1tItufOLuŒQmdœrQ9MOˆ˜9˜–uŒFrt8y‚ tM7D“FH–1Ehg1CgIQLœt“jVMF–hŠ”FjV1F+Š +IDˆ“gDCjV1F+Št –QF“g1 t OCyD–xŠQuŸtFIˆH3–˜jxtfCxgDCjV1F+Št uŠ1ˆ“gDCjV”ŒfIfFTM”C“œrQtM1Fˆ–ŒVMFVlVX W ruLV”‚•ŒQuWVOQWIFL8Š“j€DuWœFqMO–8CO‚MŠ1ˆE8DŒjX‹l” uŠ1ˆ“gDCjV1FyMXŽ+IDˆ“gDCjV1F+Št •gˆuvœ–C ˆjW9tHtˆuvg1CŸC1CLŠt uŠ1ˆ“gDCjV1LfDrdHtd‘tFœ‚OC+Š8FuŠ”C/8l vV1F+Št uŠ1ˆ“gDCgIQLœt“jVMFVrœ1‚€tŒ+Š8FuŠ”C/8l vV1F+Št uŠ1ˆ“gD WDŽyŠ“FI–”ŒrœF OMˆH3V”‹•€8FFg1VEI”–2Œ˜CCM7ˆ8OdEI”–2Œ˜CCM7ˆ8OdEI”–2Œ˜CCM7ˆ8OdEI”–2Œ˜CCM7jh8”FmœQL+lj•Š7Fhg“FlIQLf–u–1‚W8XCg ˆFœDrLŒQV2gQCWC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ7”CtˆŠ7–hCrMQOF”œ–jD” ˜œQtgŽ‘C7 ‚88–VI–mQt– uCDh3x7DQD”kQClˆ”DQVXfDlr‚dCfVv DltLd–DŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gH gOŒŽOLI–Fhœ1Cj9DF+D“ŒVtˆu‘œD t€F 2ŒrŒB ”‹“gDCjV1F+Št uŠ1ˆ“gDCjIQLf–u–1‚Wt+Cq rC/Dt ŠD1ˆŸœF OMˆH3IOdM˜C‚tˆŒ7g1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ7”C˜ˆBŠ8–3–1hQC“–”C–HŸI–h€DmQHŽmC˜j‚g–T€DXQ”H7C7 ‚88–œDMQ+VC˜uxI+–h€DmQœ“FjCt‹LM7–VI–mQœ“FjC–L+ –MDd+IDˆ“gDCjV1F+Št uŠ1ˆ“gDCg€r–œ8t ŠD1u2VX•MOy3€fVHMFV‚g1q”CO98ˆTDV1tFC“rC‚œljx–fCxgDCjV1F+Št uŠ1ˆ“gDCjV”ˆ˜tt xgXEhœ”‚q rC‚V”ŽM”d28XCjrŠ3f–IŒ7H7œlFˆjDM+FCŠ”hlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1uWVD tIHŽ+Vf–Itˆu2VX OMXF+M˜–VtfŽœ–QI”M7D“FuŠ”CQgH gOŒŽOLI–FlœC•MXd+ŠtŽTMQœhœ1tMXd+ŠtŽ–œhVˆ• –…7trItWlŠ”FjV1F+Št uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“tF E€FLœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1Ff–ŒI–1QvgyQOŒy8jVtˆˆ“8ˆQIOVfVfFItXˆ“g“H1IQLf–u–1‚Wt+Cq rC/D˜CuŠQu”Vˆg ”ŒœD˜CuŠQu‚tFgMtCŽCtVHDV‚gQŒ7g1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCj HhŸ–7“8Q ŒTŽF“yŸ–Qjv€tLŸ DFX”Fx€rŽ”œT‹/XŽ“MD‚D–8XQC“–”C–HŸIl€D1”8qŽICFFF88–MMTkQC–CvCDd‚V7VVŠQM”8qŽyC˜63+DQDDQC“–”C–HŸIHŽF•7‘8”Hv“–8ljFœDLL•”ˆ ˜–Žœ” BItQ“VgWEIH‹Lx”‚QœD‹hVtˆv”–8OEŸ–QLd8QM1Ir–Žœ” BItQ“Dt‹“gDCjV1F+Št uŠ1ˆ“gDCqˆLLŠt‹uDQu”Vˆg ”ŒœD˜jF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št H–7–2tFŒ1Lf98ˆHgXydVXClV1LygrdHgˆV‚œrh‚MFFœg˜jB ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št •ŒQuWVOQWIFLœ88FMQumVX WIH‹‘OŽItˆLht8ut€HŽ+I7 +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Š“jIIDˆvt8y‚Mtu/Dt‹•ŒQuWVOQWIFLœ8˜jŠ–+jEgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠtŽVMFQœrh‚IQLœt“jVMF–“DˆCqO–yŠ“CTMFuWg1Cr “VuV”‚MŠ1ˆŸtH tMrˆ˜8rdM˜CltˆCŸC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št •Œ1‚”œr1QVFLf–u–1‚WgDŠhV1Lf8“VT8–rtH tMrˆ˜8rd˜€HuH8l vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“VFˆvV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“tF E€FLœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸt8y‚ tuW9tŽItˆLht8u–VQj8ŠtŽIŒQœ3œ– 9ˆ…3f B ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št •Œ1‚1tHCj9DF+VOIŒ1F“8ˆCV1FLœl–•Œ1‚”œr1QVFLf–u–1‚W8OFIDFyDrLŒ”dlgDC DLfDrdHtd‘tFœ‚ ”y7gjB ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št ItOWt˜F“IQH3MtŽMŠ1ˆŸœCtMOCy–jMŠ1ˆŸœ”QtMOŒœg“–œMQLmœ”FŸC1CLŠt uŠ1ˆ“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1ˆ“gDCjV”Œ˜C˜LItˆˆvgH‚MtŒyŠˆHŠl Ÿœ”QtMOŒœg“–œMQLmœ”FŸC1C“” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ”8qŽLx”‚QœD‹hV–M1V1‹”‹–ˆX”g7œŸCtˆ8gXCLŠt uŠ1ˆ“gDCjV1F+Št uŒQœ1tF C1m3ŒrŽVIDu‘œyQ –L˜8juŠ1F/8OFgIQLœt“jVMFVrœ–j DL‚gt‚MŠ1ˆŸœCtMOCy–jMŠ1ˆŸœ”QtMOŒœg“–œMQLmœ”FŸC1CLŠt uŠ1ˆ“gDCjV1F+Št ugˆVQœ7utMXŽ+D“VHtˆulVˆŒ1LygrdHgˆV‚œrh‚MFFœg˜jB ”‹“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1ydœr‚9OŒ+V”ŽT–1œht8umOC‚I7 +V”‹“gDCjV1F+Št uŒQœ1tF C1m3ŒrŽVIDu‘œyQ –L˜8juŠ1F/8OFgIQLœt“jVMF–Qg“FuHd+ŠtŽTMQœhœ1tMXd+ŠtŽ–œhVˆ• –…7trItWlŠ”FjV1F+Št uŠ1ˆ“œ– VV1Ž+D“FItˆydœ”1QVrŒŽŒ“FŠ–+6‚8DCjDLLŠ“LHgXLlœCC”Œyg“jTD” ŸœCtMOCy–j˜€HuHgQClV1m3Œ“C–VmtHŸHŽDM+FŠ–XˆhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+ŠtŽHŒ”hœlHh•Q…3DrdHtd‘tFCj9DF+DrŽItˆLht8u–C1CLŠt uŠ1ˆ“gDCjV”VŒ” uŠ1ˆ“gDCjV1Ff–“CMFœlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+D“ŒMrC“DˆCjVM•”DQ7VWCHW”•7–D1…Qœ–CECHd8+l€D1”g3W7C˜ˆBŠ8–h•”dV–QuLC˜jL –IŠ”1QtHC”C–Fd7Š1Š1y”g7œŸCtˆ8g+–hI˜œQtHCŽC–L+ –VtkQ”F˜CHF+ŒVxCTWQœ–CyC–L+8D”V˜QOF”C–L+8–dMrmQCH QC7 ‚VHL21ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“œ– VV1Ž+ŒrdTtXyhV–C“I”y7–jgˆœhgQCWC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjI”uœ8r‚uŠ7Š‚gD W OCf€fVIŒQ–vgtL7V1FL ” •Œ7HdVXqMtŒ+I7 +IDˆ“gDCjV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCjV1F+Št –QF“g1CgIQLœt“jVMFV2Dˆ9MˆFœD“jV€rk”tH tMrˆ˜8rd€t hgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCg OM3œ” MIj“gTWŸ9OLB–7FŸ•Q •Ir–Ir Bœ8ˆL•Q u1‹FœtBI˜–” – ŸIqŽœ”FF•7ŽItCQœ–d ”uf9tŽID” LC+Œ+ŠHF+g˜CuŠQuŸtFIˆH3–“Lx–fCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠQu1œ7uV1d‘MO ••1‹jV”QgOŒŽOLIVtFmD‹FIl–QI˜–” tD‚“–˜DfyŸV––d83WE8y‚–LŽ€fjT–hHFXtk1ŒOQ/CFLV1L2lu3C”‚”œ8 LV1Ll ˆjQg1ˆ/8QEV1‹˜DOŽFIDˆmVtQjIt–ŽIf–Fg1ˆ/Š76ŸCO‹+œQVt8HM”8XCXCHWŸ–ŒvŠ”ŠQOF”C–L+8–T€DXQtHC”C+Œ+Š1L21ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+D“ŒMrC“8OmhV1mŸ–”Q“ tˆFH‹Lx”QBœ˜FvVtˆIt–8Cf–QD7Fv8”–IX‹grHŸœtCQ – ŒTŽ˜glˆBV˜u3•Q Š3WŸ9OLBI˜V1•”ˆ•qŽLIOLB–Qu”V–MlXkŸ9OQLgrIŒ1F“8ˆCV7–MMrQ1‹2CHhŸV8–vCrhQC˜ˆˆCHW”•7–D1…QtHC9C8VF 1FyDrLŒ”dlgDŒ–MD‚D–tH1CXC+g“L7g1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCqOuy8rdF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št •Œ7ˆ2t“Fj –j8ŠtElClFCCty3–+–VDEQfFdC˜ˆBŠ8–3–1hQttFlCHW”•7–D1…1CXC+g“L7g1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCqMOˆyg“VH€DuQtFVQuœIOLItXyhœ–‚ DŽ+D“ŒMrCh8l vV1F+Št uŠ1ˆ“gD…hg1F+Št ug+jxŠ”FjV1F+Š˜VxIt‹xgDCjV1F+Š˜ˆu8”FB qŽ˜DOdQ–7FŸ•Q •Ir–DOŽQD7 1 t–IX‹FgrFBœtC38Q Š f vV1F+Št uŠ”‹“DD•OŒy–“FTIDu2VX•OuŽœ1ŽuŠ1ˆ“gDCjDŽL9XŽuŠ1ˆ“gDqM–FŽ€fjV€Du2VX OMOˆ˜8t IFVQt8CgOy3CO H–V‚œ7uW ruLVljF ”‹“gDCjV1F+Št ugXLWVXt€tuLŠ“LHŒ1œhœ– CCH‹LDuItXL2œ–‚ D‹l” uŠ1ˆ“VFˆvg1F+Št uŠ7dg” vV1F+Št uŠ”‹“CHhŸ–8–I tDQœuDC˜jFMDQD7X”g–CgCDdL +–vDXQfF•C–HŸ VxCTk”tr–QC8–dŒ8VxCTWQœ–CyCHW”•7DlM“D1CXC+CFm3t–vŠ1yQOXQC˜uB–l€D1Q8OF9CFL‚Š8VxœDyQœ8VFCDh”8+–V€–Q8OQrC–HŸ –M th”8XCXC8–81CLŠt uŠ1ˆ“g”FqŠtCfŒ“FV–7j“gHq€tˆ˜C8jugXEhœ”QW –L‚ŒOdh1dŽ“j2O‚uŒO‹h1/8Œ”OLTDOQLtFjWIruX“DQDOQ/fL” HF2Om”x”Ž”g1ŒŽrˆDOm18OQWœHŒ” HFE ”CŽf–HŒ”uŸ Dd3“VIgfjvœFŸ DW7t‹M€rd”gg‹WIHLTlVhDOdmClu” HFE ”CŽf–HgXdŸ Dd3OŽTM”ŽQCFŒ/˜jrOm”DOŽQg7CŽ1d2fVux”d‘gruv “jŠO…l1ŽuŠ1ˆ“gDCjDFˆŠ“FItˆydœ”11VQFœg“FVtOŽxgDCjV1F+Š˜ˆxI8xgDCjV1FyŠˆV˜ht˜Fq€rŒfŒj–1Q“tr‚t –H7D“jTMŒ“tH tMrˆ˜8rd€t Ÿœ1•Ou/D8F•€tChV˜ vV1F+Št uŠ1ˆ“gD tCˆL˜8t‹•MHVŸttFqIQLœt“jVMFV2g“FlV1Lf98ˆHgXydVXClV1LygrdHgˆV‚œrh‚MFFœg˜jB ”‹“gDCjV1F+Št uŒ”dŽgDC“I”CŽ–jHtXLQt+CIIOCLŒ8FŠ–XˆhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+Š“jIIDˆvtFd ”ŒyI”‹•Œ7HdVXqMtŒ+IljF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št HŒ”‚œCV”uŽ–CuŒ–œ1t8ut ”ŒffVTIt /CHWŸM7–d81XQqŽWC˜jL –IŠ”1Qœ8V•CHŽBŒFF˜DrHQtHŽCCty3–+–VDE”8qŽŒCHŽf8––ˆIˆXQC˜ˆˆC8–87–vI8MQOF”C–L+8–V–7MQfF•Ct‹ŽVxŒ1QItOWtgŽ˜D“VFD7 h8”–IX‹VOŸ–LŸ83WE“FX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“gDCjV1Ff–“CMFœlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1yhœD• rŒ‚Š“–ItOC“DFmIFLœŠj–7FQg1 W OCf€fVIŒQ–vgtL7V1FL ” •Œ7HdVXqMtŒ+IljB ”‹“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV”VŒ” uŠ1ˆ“gDCjV1F+D“CtXEhgDŠhVQdM+ +IDˆ“gDCjV1F+Št I8F‚tF OIrˆ+Št‹•Œ7HdVXqMtŒ+Šr€DˆŸœ8utCDFXMqŽuŠQy3t– EM–L8+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gD WDF+V”ŽMFœQDˆŠh 1Žœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1Ff8“VTFuhœr‚tX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“gDCjV1FfOQuŠ”…hœ”QW XŽ+DuV–l…dtFCŸIˆj8œ”‚xtfCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠQy3t– EM–L8Š8FugXu‚tF HVrM7Š“Ctˆˆvg“H‚œ”C‚lV•€˜ “gHIIOuy–rdx–fCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠQu7œ–9MˆdMO ŠD1ˆŸVOQO”Œ˜–ruCŒjQgTWŸ9OF+œl–•gˆLmœHtˆ 2ŒrŒMItV” HFŸH‹l” uŠ1ˆ“gDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“VFˆvV1F+Št uŠ1ˆ“gD WDF+V”ŽgXLhœr‚Œ9–j8Vf tdQVX VHŽœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“œ7CgIOŒfOLBI“jlœ”QW tŒO9˜FxŠQu7œ–9MXŽD1ŽuŠ1ˆ“gDCjV1F+ŠF+IDˆ“gDCjV1F+Št I–l2tFCqˆLLŠt‹•gXu‚œ–QMˆjDMO‚gXLhœr‚g€DL‚+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDq€tˆ˜C8jœM1FvgH EOM7D˜jB ”‹“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1u‚tFgMtCŽCO •Œlhœ7CŒC1CLŠt uŠ1y‚Š” vV1F+Št M€t‹dŠ”FjV1F+Št xIDŒŽ7ŒXtE”tOŽQgDŒŸ DŽ3”Fv8O‚“r‚ŽDWvOŽxœrd‘g–WI1Ž”tLuVrd3fu/t‹DfCIC”Q“g”VWIŒ3O M 1ŽuŠ1ˆ“gDCjDFˆŠ“ VtXLmœFCjI”uŽ9tŽI–H1œF lV”M7D“F–7–/gD‹8CO BD7Œd tFxVl–FŠl–FVtˆmŒr9–XˆvV1F+Št uŠ”‹“DDqIOCŽŒ“ŒuŠQumVXg€DFfŒ“FDœQgD‹˜8tF–Qˆd•Q E“–Š˜6Ÿ–QjL – O f–˜Š˜VB•7‘8Q ŠTŽ89O‹B–1VhDluŸ FL2Il–M“j“g“uhIˆH7“uxtDŽuŠ1ˆ“gDCjDFˆŠ“FItˆydœ”11VQFŽ9˜VTŒQVmœrFXfuv€rQLgHŒhIˆH7“VC”QLtDŒŽHF/“DQrd3fu/t‹DfCIC”Q“g”VWIŒ3OTœrd“8fLŽXdTlœQ–OdŽC8Dhœ”‚t+l€D1QtHCŽC–FLtVM•QDQt“–FtrQO”M3–DŽuŠ1ˆ“gDCjDŽL9XŽuŠ1ˆ“gDqM–FŽ€fjV€Du2VX OMOˆ˜8t IFVQt8CgOy3CO œMrd2t+ydIOŒf8r‹œMHœhVXu1LfC˜VIŒQVrVDd1d+ŠtŽVtˆyhœ”FŸg1F+Št ugfCxgDCjV1F+Št uŠ1uŽœC•ˆF˜8r‹uŠ” Ÿt–gMOCLŠr€DˆŸœ8utCDFXMqŽuŠQy3t– EM–L8+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCgMFF˜€+ˆID1X‚gD9MOCW9˜FItXu7t– 9XŽ+VOCœŠ”C7gDCHœQO€OC•€˜ “gHIIOuy–rdx–fCxgDCjV1F+Št uŠ1ˆ“gDCjV1LytrTgˆVWgDŠhV”M7D“FœM1LWœ1 EIˆH3–t‹•€8/8XCjF+9O‚MŠ1ˆŸVOQO”Œ˜–˜jB ”‹“gDCjV1F+Št uŠ1ˆ“gDCjI”ŒŽŒ“CH–Q–“DˆCq€rŒygrV–VlœH OIFL8V”‚Š€tC7gDCHœQj‚œlCuŠQy3t– EM–L8I7 +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCgMFF˜€+ˆID1X‚gD9MOCW9˜FItXu7t– 9XŽ+œl–•€˜ “gˆl DL‚ ” •gˆLmœHtXŽD1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gHIIOuy–rduŒ+j“œ7Cg€–…7grdŒlmt8u–1L‚V”‚MŠ1ˆ/tXC“Hd+ŠtŽHDV7Vˆ –X‹l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸVOQO”Œ˜–t ŠD1u2VX•VrCŽ–“ TŒ1V‘tFC“HŽ8œlCuŠ”ŒgQC1F+DuV–l…dtFCŸC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠQy3t– EM–L8Š8FugXEhœ”h‚€–LœŠ“CV–1‚Wg1CHL‚ ” •M˜ 3g“FlV1LytrTgˆVWgQŒ7g1F+Št uŠ1ˆ“gDCjV1F+Št •gˆLmœHtXFXMO MQu‚t+C•OCf€OVMF–vgˆ7Hd+Št‚œŒ“C/8XCjI”ŒŽŒ“CH–Q–h8l vV1F+Št uŠ1ˆ“gDCjV1F+ŠtŽHDV7Vˆ –VQj8Š“LHgXLrœ”Qt ”ufŒrLID” /tOF1F+VOCœItC7gDCgMFF˜€+ˆID”WlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+DuV–l…dtFCj9DFy8j+F‚tFqQF˜8rdxŠ”Šlg“FlV1md€+ •€˜ “gHIIOuy–rdx–fCxgDCjV1F+Št uŠ1ˆ“gDCjV1LytrTgˆVWgDŠhV”M7D“FœM1LWœ1 EIˆH3–t‹•Ml /8XCjFy ”‚MŠ1ˆŸVOQO”Œ˜–˜jB ”‹“gDCjV1F+Št uŠ1ˆ“gDCjI”ŒŽŒ“CH–Q–“DˆCq€rŒygrV–VlœH OIFL8V”‚xItC7gDC DŽ‘9O‚MŠ1ˆŸVOQO”Œ˜–˜jB ”‹“gDCjV1F+Št uŠ1ˆ“gDCqˆLLŠt‹utXu‚tF HVru˜ŒjVMr vg“HEHdLD“uItOŽQg“mhIDL‚COŽHDV7Vˆ – DL‚g˜VD”C7gDCg ty3DrdœM”1œHClV1LyDrdTtXˆhgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD•OŒy–“FTIDuŽt– E€FLD1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“VFˆvV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCq€–LœDˆ8Œ“VX•M–LD1ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹L8lŠŸ–QjW tˆCIqŽ˜ tQŽg“VH–7–Ÿœ3Ž˜Š˜VBD7ŒL tˆ˜ –C‘tLurd7tg‹W –LœtQMC”‚h8fuŸ FH7“VC”‚/g˜ChC8–dŒ8VuDMQCXWQŠ”FjV1F+Št xIDuLœCt –LyDOd‘g–WI1Ž”Il–uŒOŽQgluvIt‹Mr 3r‚ŽQŒW +VTIl–ur‹hCDdWFLXt‹uVrdŸlLWI ŠIl–u r‹hCDdWFLXt‹uœ1ŽuŠ1ˆ“gDCjDFˆŠ“ VtXLmœFCjI”–XŒt –7DhtF HOCLŒOd1CruŸ DF3l6Q8Od/tHŒŽ1FrrQvDFH”8+yhŠ”FjV1F+Št xIDujœ1 O€–F˜MO •gOŽEgD W tŒf–r‚ItXF“CtuF8–MIDW”g”–8C–m3D8–dŠ1…QC˜ˆˆ–”–L9˜Œj” uŠ1ˆ“gDCvVQˆyŠrDV1gDCgCXQLŠ“jTFuWtut€DFB–Qj7•QM1IgŽLrŽQ–”ŒŸ8”ˆ“IqŽFœtOIr‹”œFˆxgDCjV1F+Š˜ˆuŒDult–•IOu8ŠtŽF–XF“œ–QMˆL˜VOdIDŒWI ŠIl–u r‹hCDdWFLXt‹uVr‚ŽQuICHh3MXCLŠt uŠ1ˆ“g”FqŠtCfŒ“FV–7j“gHtˆ fM˜CugXEhœ”QW –L‚Šˆ–rŒhtH HOŒyDOdmC7CŽOuXlœQ–OdŽC8 /t‹gt–Œ– 1ŽuŠ1ˆ“gDCjDFˆŠ“ VtXLmœFCjI”y3trQMFœh–1CqOu/DrdIMFV‚gD‹Fœ“uQœt m•”FxVl–FŠl–FVtˆm8Q7f–L•l–FD7Œ‘ tˆCIqŽ˜ tQQIDŽ“ t–+ t–FœtB–7Ch tHŸ t–˜ “–Fœ˜VW83WEIH‹ lŒB–7–7•”ˆ˜ t–˜DtŽFVtˆm8Q Q t–˜MluQIDQ“•Q T X‹BŠt Q8 Ž8”FQX‹8Cf–‘ŒfV”g˜Lv”ˆ‘“jMrd1Cruv “u/O‚IŒOQvgtVhHFXljvgOd3C”‚h FLXfVhVrŽQgDŒŽDŽyIl–uŒOQv8OCxgDCjV1F+Š˜ˆuŒDult–•IOu8ŠtŽF–HLmœrQHXFff–HŒQV/tFuV7DQ ˜DQDCyCHFdŠ7D1g7DQC˜ˆˆCDdLg7VMCDQ8OFBCt‹‚g+–CrX”g˜ˆ+C8ŒxC8DQDDQœ“ˆtCHh”C8–•7DQgŽ–C7 ‚88–ICHMQC˜DhC˜jC8–IŠQyQC˜ˆˆC˜6Ÿ+–vgW”g˜FXC–LQM+Š1Š1M”œ“–VCHW”I7–MI8VC83WEIH‹LIfˆBVtŽQ –M1Ir–ŽtrŽB–7Vh tH7r–F˜–l” uŠ1ˆ“gDCvVQˆyŠrDV1gDCgIOŒyD“FuŒ1V‚œ”QOCDFB–1QmV– ŒgŽ˜€O‚QœDˆh•Q ŠI˜–˜Œ“ŒQ–1ˆ”83WEIH‹˜DfyŸD7v8Q OˆC3IlVI€rŽQ8fuhV1L3OVM”‚3gQFxgDCjV1F+Š˜ˆuŒDu‚tFgMtCŽCO VtXL‚t–ŸV7VM•QDQt“–FC8V‚8–IŠ1HQ+umCDdQMDQDD”g˜ˆ+C8ŒxC8–•7D”8X mŠ”FjV1F+Št xIDujVX m€ty7VfLuŒ–œ1t8ut ”ŒffVTIDŒhXL/ly”x”QLfVWI+ 3fVu8OdQ8OLŸ Vyt 9XŽuŠ1ˆ“gDCjDŽL9XŽuŠ1ˆ“gDqM–FŽ€fjV€DuŽVˆQIrŒffVTIDuQœugOMhŒrFTMQLWDt1‚MtuŽD“LxŠQy18–ClV1LyIlMŠ1ˆŸVDŒu1F+D–CI˜ “gHtˆ fM˜CMŠ1ˆŸœuItM3–j˜Œ+jl8XCjI”–tgrTtŒWDˆŒj1FfŒ“FDœQgDCgIOŒyD“FŠ–“ŒHgQˆvV1F+Št F ”‹“gDCjV1F+Št uŒ”dŽg1q€–L˜VOVT–1œht8umVFF˜€fCxŠ”C”DXV1V–jWMfuŠMHL”VˆQI”C2MOFœŒ“CvtX ŒHŽ8 ”‹œŒQˆ3gQVEVˆO”‹œŒQˆ3gQClQfD˜ux–“Hgtd1V–jWMfˆŠ€Œ”œ–C1F+Dˆ–r1œHClV1LfMtHŒ1‚vtFC1FOŠFCg–tŒr–8jt––…h9–CgŒ–V8gQCWC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠQuWœH t ˆL˜C8j€DX‚gDV1VX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1uŽœC•ˆF˜8r‹uŠ” ŸœF OMˆH3IOd€DumœlFjI”ˆœDrdTD”hlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1uhtrFj1Lf+jI–7ˆT8–œh•Qj8DŒCD7jŸœuItM3–j˜Š1ˆŽgrFjI”ˆœDrdT–“CEtˆŒl9DLyVlx€–u”trQI€FLœDFFuŠQFŽgDCgOŒf–“Œ˜€HLHDXCgCDQL+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“œ– VV1Ž+D––DVQtu–•1Q++ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+9fœQC˜–QC˜ˆ+g+VuDMQCXWQC8–dŒ8–T–œ”8+œQCDdL87–v€D…Qœ8VCHFdŠ7D1g7DQC˜ˆˆCDdLg7VMCDQœgWQC˜XŸ–DCLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD WDF+V”ŽtˆuWœFV7Mˆ8Š8uŠQyQ8–MhI”–tgrTtŒWgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1Ff8“VTFuhœr‚tX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD WDF+V”MQumVX WIH‹‘OVtX‚rœF OMˆH3IOVVtˆyhœ”F“I”ˆœDrdT–“CltˆClIQFœDjItŽhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1u‘œyQMOˆ˜C8ˆI–fCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št M€g‹WI“u”OQ–OdŸlLŽIHFrfuhr‚ŽQuLœCt –LyDOŽQgDŒŽ1drrQvDDŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1uhtrFj1Lf+jI–7ˆT8–œh9–j8DŒCD1ˆŽgrFjI”ˆœDrdT–“C‚tˆŠh9DLyIluŠQFŽgDCgOŒf–“Œ˜€H‚HDˆŠhI”–Xgt •I–F“gH WMˆL˜Mtu9Œ6‚DˆCgCDQL+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1Ff8“VTFuhœr‚tX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjIQL˜€OdT–QVQVX9œF8Š8FuŒ7–WVfFqCtˆ˜€+ˆŒ”lt+uOIQFW9tdTŒQV1tFQMXŽ+D“jHŒQV1–lLqVXd+ŠtŽHŒ”hœlFŸC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1ˆ“gDCjV”CŽ–jHtXLQgDCgOuf–“ŒI–7DhœlL7g1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjVQL˜€fLItfCxgDCjV1F+Št uŠ1ˆ“gDCjV”CŽ–jHtXLQgDV1VX‹l” uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹L8lŠŸ–QjW tˆCIqŽ˜ tQŽg“VH–7–Ÿœ3Ž˜Š˜VBD7ŒL•”ˆ˜ –C‘tLurd7tg‹W –LœtQMC”‚h8fuŸ FH7“VC”‚/g˜ChC8–dŒ8VuDMQCXWQŠ”FjV1F+Št xIDuLœCt –LyDOd‘g–WI1Ž”Il–uŒOŽQgluvIt‹Mr 3r‚ŽQŒW +VTIl–ur‹hCDdWFLXt‹uVrdŸlLWI ŠIl–u r‹hCDdWFLXt‹uœ1ŽuŠ1ˆ“gDCjDFˆŠ“ VtXLmœFCjI”–XŒt –7DhtF HOCLŒOd1CruŸ DF3l6Q8Od/tHŒŽ1FrrQvDFH”8+yhŠ”FjV1F+Št xIDujœ1 O€–F˜MO •gOŽEgD W tŒf–r‚ItXF“CtuF8–MIDW”g”–8C–m3D8–dŠ1…QC˜ˆˆ–”–L9˜Œj” uŠ1ˆ“gDCvVQˆyŠrDV1gDCgCXQLŠ“jTFuWtut€DFB–Qj7•QM1IgŽLrŽQ–”ŒŸ8”ˆ“IqŽFœtOIr‹”œFˆxgDCjV1F+Š˜ˆuŒDult–•IOu8ŠtŽF–XF“œ–QMˆL˜VOdIDŒWI ŠIl–u r‹hCDdWFLXt‹uVr‚ŽQuICHh3MXCLŠt uŠ1ˆ“g”FqŠtCfŒ“FV–7j“gHtˆ fM˜CugXEhœ”QW –L‚Šˆ–rŒhtH HOŒyDOdmC7CŽOuXlœQ–OdŽC8 /t‹gt–Œ– 1ŽuŠ1ˆ“gDCjDFˆŠ“ VtXLmœFCjI”y3trQMFœh–1CqOu/DrdIMFV‚gD‹Fœ“uQœt m•”FxVl–FŠl–FVtˆm8Q7f–L•l–FD7Œ‘ tˆCIqŽ˜ tQQIDŽ“ t–+ t–FœtB–7Ch tHŸ t–˜ “–Fœ˜VW83WEIH‹ lŒB–7–7•”ˆ˜ t–˜DtŽFVtˆm8Q Q t–˜MluQIDQ“•Q T X‹BŠt Q8 Ž8”FQX‹8Cf–‘ŒfV”g˜Lv”ˆ‘“jMrd1Cruv “u/O‚IŒOQvgtVhHFXljvgOd3C”‚h FLXfVhVrŽQgDŒŽDŽyIl–uŒOQv8OCxgDCjV1F+Š˜ˆuŒDult–•IOu8ŠtŽF–HLmœrQHXFff–HŒQV/tFuV7DQ ˜DQDCyCHFdŠ7D1g7DQC˜ˆˆCtud–VMCDQ8OFBCt‹‚g+–CrX”g˜ˆ+C8ŒxC8DQDDQ8OFxCHh”C8–•7DQgŽ–C7 ‚88–ICHMQC˜DhC˜jC8–IŠQyQC˜ˆˆC˜6Ÿ+–vgW”g˜FXC–LQM+Š1Š1M”œ“–VCHW”I7–MI8VC83WEIH‹LIfˆBVtŽQ –M1Ir–ŽtrŽB–7Vh tH7r–F˜–l” uŠ1ˆ“gDCvVQˆyŠrDV1gDCgIOŒyD“FuŒ1V‚œ”QOCDFB–1QmV– ŒgŽ˜€O‚QœDˆh•Q ŠI˜–˜Œ“ŒQ–1ˆ”83WEIH‹˜DfyŸD7v8Q OˆC3IlVI€rŽQ8fuhV1L3OVM”‚3gQFxgDCjV1F+Š˜ˆuŒDu‚tFgMtCŽCO VtXL‚t–ŸV7VM•QDQt“–FC8V‚8–IŠ1HQ+umCDdQMDQDD”g˜ˆ+C8ŒxC8–•7D”8X mŠ”FjV1F+Št xIDujVX m€ty7VfLuŒ–œ1t8ut ”ŒffVTIDŒhXL/ly”x”QLfVWI+ 3fVu8OdQ8OLŸ Vyt 9XŽuŠ1ˆ“gDCjDŽL9XŽuŠ1ˆ“gDqM–FŽ€fjV€DuŽVˆQIrŒffVTIDuQœugOMhgrdTŒ7H7Dt1‚MtuŽD“LxŠQy18–ClV1LyIlMŠ1ˆŸVDŒu1F+D–CI˜ “gHtˆ fM˜CMŠ1ˆŸœuItM3–j˜Œ+jl8XCjI”–tgrTtŒWDˆŒj1FfŒ“FDœQgDCgIOŒyD“FŠ–“ŒHgQˆvV1F+Št F ”‹“gDCjV1F+Št uŒ”dŽg1q€–L˜VOVT–1œht8umVFF˜€fCxŠ”C”DXV1V–jWMfuŠMHL”VˆQI”C2MOFœŒ“CvtX ŒHŽ8 ”‹œŒQˆ3gQVEVˆO”‹œŒQˆ3gQClQfD˜ux–“Hgtd1V–jWMfˆŠ€Œ”œ–C1F+Dˆ–r1œHClV1LfMtHŒ1‚vtFC1FOŠFCg–tŒr–8jt––…h9–CgŒ–V8gQCWC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠQuWœH t ˆL˜C8j€DX‚gDV1VX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1uŽœC•ˆF˜8r‹uŠ” ŸœF OMˆH3IOd€DumœlFjI”ˆœDrdTD”hlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1uhtrFj1Lf+jI–7ˆT8–œh•Qj8DŒCD7jŸœuItM3–j˜Š1ˆŽgrFjI”ˆœDrdT–“CEtˆŒl9DLyVlx€–u”trQI€FLœDFFuŠQFŽgDCgOŒf–“Œ˜€FuHDOFgCDQ8+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“œ– VV1Ž+D––DVQtu–•1Q++ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+9fœQC˜–QC˜ˆ+g+VuDMQCXWQC8–dŒ8–MIDW”8+œQCDdL87–v€D…Qœ8VCHFdŠ7D1g7DQC˜ˆˆCtud–VMCDQœgWQC˜XŸ–DCLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD WDF+V”ŽtˆuWœFV7€–8ŠgŽuŠQyQ8tF7I”–tgrTtŒWgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1Ff8“VTFuhœr‚tX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD WDF+V”MQumVX WIH‹‘OVtX‚rœF OMˆH3IOVVtˆyhœ”F“I”ˆœDrdT–“CltˆClIQFœDjItŽhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1u‘œyQMOˆ˜C8ˆI–fCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št M€g‹WI“u”OQ–OdŸlLŽIHFrfuhr‚ŽQuLœCt –LyDOŽQgDŒŽ1drrQvDDŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1uhtrFj1Lf+jI–7ˆT8–œh9–j8DŒCD1ˆŽgrFjI”ˆœDrdT–“C‚tˆŠh9DLyIluŠQFŽgDCgOŒf–“Œ˜€H‚HDˆŠhI”–Xgt •I–F“gH WMˆL˜Mtu9Œ6‚DˆCgCDQL+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1Ff8“VTFuhœr‚tX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjIQL˜€OdT–QVQVX9œF8Š8FuŒ7–WVfFqCtˆ˜€+ˆŒ”lt+uOIQFW9tdTŒQV1tFQMXŽ+D“jHŒQV1–lLqVXd+ŠtŽHŒ”hœlFŸC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1ˆ“gDCjV”CŽ–jHtXLQgDCgOuf–“ŒI–7DhœlL7g1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjVQL˜€fLItfCxgDCjV1F+Št uŠ1ˆ“gDCjV”CŽ–jHtXLQgDV1VX‹l” uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹L8lŠŸ–QjW tˆCIqŽ˜ tQŽg“VH–7–Ÿœ3Ž˜Š˜VB–7Ch tHŸ –C‘tLurd7tg‹W –LœtQMC”‚h8fuŸ FH7“VC”‚/g˜ChC8–dŒ8VuDMQCXWQŠ”FjV1F+Št xIDuLœCt –LyDOd‘g–WI1Ž”Il–uŒOŽQgluvIt‹Mr 3r‚ŽQŒW +VTIl–ur‹hCDdWFLXt‹uVrdŸlLWI ŠIl–u r‹hCDdWFLXt‹uœ1ŽuŠ1ˆ“gDCjDFˆŠ“ VtXLmœFCjI”–XŒt –7DhtF HOCLŒOd1CruŸ DF3l6Q8Od/tHŒŽ1FrrQvDFH”8+yhŠ”FjV1F+Št xIDujœ1 O€–F˜MO •gOŽEgD W tŒf–r‚ItXF“CtuF8–MIDW”g”–8C–m3D8–dŠ1…QC˜ˆˆ–”–L9˜Œj” uŠ1ˆ“gDCvVQˆyŠrDV1gDCgCXQLŠ“jTFuWtut€DFB–Qj7•QM1IgŽLrŽQ–”ŒŸ8”ˆ“IqŽFœtOIr‹”œFˆxgDCjV1F+Š˜ˆuŒDult–•IOu8ŠtŽF–XF“œ–QMˆL˜VOdIDŒWI ŠIl–u r‹hCDdWFLXt‹uVr‚ŽQuICHh3MXCLŠt uŠ1ˆ“g”FqŠtCfŒ“FV–7j“gHtˆ fM˜CugXEhœ”QW –L‚Šˆ–rŒhtH HOŒyDOdmC7CŽOuXlœQ–OdŽC8 /t‹gt–Œ– 1ŽuŠ1ˆ“gDCjDFˆŠ“ VtXLmœFCjI”–OgrTtŒWgD W tŒf–r‚ItXF“C8–Q 8–dŠ1…”g˜ˆ+C8ŒxC8DQDDQœr–ŽCHh”C8–MIDkQlFyCtX”œ8VuDMQCXWQC8–dŒ8–V•lm”8+œQCtXŸC8–d•QDlClFCC˜u+M+–T˜mQOXQC–L+DDQDDQqŽWCt‹Ž•7Vu€DŠQt“DhC+Œ+Š7VT –H”g7VŸCDdLCHQB•7‘8”FmD‹FIl–QD7Œ‘VtQII1‹˜C“jQI8C/Vt–Ž ˜ vV1F+Št uŠ”‹“DDqIOCŽŒ“ŒuŠQu”trQI€FLœDFLuŒ”dQVX tFLœgtQC˜–QC˜ˆ+g+VuDMQCXWQC8–dŒ8–MIDW”8+œQCDdL87–v€D…Qœ8VCHFdŠ7D1g7DQC˜ˆˆCDdLg7VMCDQœgWQC˜XŸ–8l€D1QtV+C8–QM+–hœ8DQtHCgC8–dŒ8–CDQœr–QCHF‚Œ+–I 861CXC+CruQt8VxCrWQ8OH”8DkŸ9OLBItd8”–Ÿ ˜–8COFQIgŽQV– HI1‹V”…ŸtC“8”FŽV”–˜ “–F8FŸ8QŸqŽ8CO Bœt‹vV–M1V1‹VlŒl” uŠ1ˆ“gDCvVQˆyŠrDV1gDCgIOŒyD“FuŒ1V‚œ”QOCDFB–1QmV– ŒgŽ˜€O‚QœDˆh•Q ŠI˜–˜Œ“ŒQ–1ˆ”83WEIH‹˜DfyŸD7v8Q OˆC3IlVI€rŽQ8fuhV1L3OVM”‚3gQFxgDCjV1F+Š˜ˆuŒDu‚tFgMtCŽCO VtXL‚t–ŸV7VM•QDQt“–FC8V‚8–IŠ1HQ+umCDdQMDQDD”g˜ˆ+C8ŒxC8–•7D”8X mŠ”FjV1F+Št xIDujVX m€ty7VfLuŒ–œ1t8ut ”ŒffVTIDŒhXL/ly”x”QLfVWI+ 3fVu8OdQ8OLŸ Vyt 9XŽuŠ1ˆ“gDCjDŽL9XŽuŠ1ˆ“gDqM–FŽ€fjV€DuŽVˆQIrŒffVTIDuQœugOMh9˜–DŒQVŽVXC“I”–XŒ˜CuŠQyQ8–ClV1LyVlFMŠ1ˆŸV–Œu1F+Dˆ–r1œHClV1LyIˆCV–7–/tFŠh 1d+ŠtŽTMFLŽœ7utMˆ DMf MŠ1umœ”‚•IO–8ŠtŽVtˆyhœ”mdœF8I1ŽuŠ1ˆ“gD7g1F+Št uŠ1ˆ“gDCqˆLLIf –V/t+ydIOŒf8r‹œMHV7œHC“Hd2€OuœI–Hglm‚Ity7–“–IgX1‚gtdEœHŽO€OŽx€tŽ7g1VEI1Ž‚OCœ–“Tg1VEI1Ž‚IlCxŒ“ŸglFWœQ8gruœI–Hg”mE•1h3I”‚MŠ1ˆŸVˆ Wttu˜ lCuŠQu1t–gIrˆf–“LMŠ1uŒ–tŽtgˆ…d8HVtŒFŠ–tŽgŒF–LIljF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjIQL˜€OdT–QVQVXCVQj8Šruœ–fCxgDCjV1F+Št uŠ1ˆ“gDCjVQLŽ9˜FI–1V‘œDCj1LfMtHŒ1‚vtFCVQFœ8t •Œ”hhtFhO–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV”ˆ˜tt xŠQuhVX t ˆ 2grŒŠIjŸV–Œˆ XLf9tQIH‚WVXVŸV1LLtt •Œ”hhtFdœHQWM+ŠDQyQ8–C7I”y3trQMFœh–QCjDLLŠtŽtˆuWœFV7€ˆD ”ŽFŒXFhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FfOQuŠ” ŸVDV•IOuŽVOdŠIHˆhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ”8qŽFœ“uQœt m•”FxVl–FŠl–FVtˆm8Q Š3ŽL•l–FD7Œ‘ tˆCIqŽ˜ tQQIDŽ“ t–+ t–FœtB–7Ch tHŸ t–˜ “–Fœ˜VWŠt‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Š“jIIDˆvgH WMˆL˜MtuCM8j“DOFjI”–XŒ˜u•gO8t–QFL8+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1u‘œyQMOˆ˜C8ˆI–fCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Š“jIIDˆvg–9MˆFœD“jV€rk”t+uW€F…3MtHŒ1‚vt+uOMOŒygt‹•Œ”hhtFdœHQOMfC•Œ1œhVXuXŽœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjVQH39˜–HŒ”dQVˆ –C1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDME –VC”trQŸC–Lx88–v€D…Qœ8VC8–dŒ–FŽ98ˆT–u2CDdLŠ8–dŠ7MQC˜ˆˆŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV”ˆ˜tt xŠQuhVX t ˆ 2ŒrŒŠ–+jŸVDŒˆV1LLtt •Œ”hhtFdœHQWM+FŠDQyQ8–CjDLLŠtŽtˆuWœFV7€FDM+F•gO ‚gDCVDF+D“jHŒQV1–lLgVˆjDMOŽF–XFhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1u‘œyQMOˆ˜C8ˆI–fCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št •ŒQV7tFdOu/D“L˜M8j“DˆCq –Lœœ” F–”d7Vˆq”CO9tIŒ1LrtF EOu˜–“–HŠ” Ÿœ–gOutl œDl “gHg”ˆœ8˜jB ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1F+Št ugXLWVXt€tuLŠtŽI–lWœF t tŒy88 +IDˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŒQV7œ7utC1CLŠt uŠ1ˆ“gDCjV1F+Št ugXLWVXt€tuLŠruœ–fCxgDCjV1F+Št uŠ1y‚Š”FjV1F+ŠF+V”‹“gDCjV1d‚lˆ+IDˆ“gDCjV1ŽLŒO‹‘rVWI–TtLuVrd3fjLœCt –LyDOd“8fLWI ŠlV3I”kQlF•CtufD+–T–œQOHŸC8V8C–MMHEQC7uQC8–‚8XŽFVtˆm8”FxVl–FŠl–Œ” uŠ1ˆ“gDCvVQFŽ98ˆT–u2C–F‚Œ–IŠlyQ8OFjCDdL8VuDMQCXWQC8–dŒ8–TVt1Q8OFxCHŽFD7–IMFXQDCyC–Lx88–V•lmQ8OFMCHŽFD7–IMFXQDCyŠ”FjV1F+Št xIDujœ1 O€–F˜MO •gO EgD W tŒf–r‚ItXF“CtuF8–MIDW”g”–8C–m3D8–dŠ1…QC˜ˆˆ–1‹L9˜Œj” uŠ1ˆ“gDCvVQˆyŠrDV1gDCgCDQ8Š“jTFuWtut€DFB–7Ch –M1I˜–LrŽQ–”ŒŸ8”ˆ“IqŽFœtOr‹”œFˆxgDCjV1F+Š˜ˆuŒDult–•IOu8ŠtŽFŒXF“œ–QMˆL˜VOdIDŒWI ŠIl–u r‹hCDdWFLXt‹uVr‚ŽQuVCHh3MXCLŠt uŠ1ˆ“g”FqŠtCfŒ“FV–7j“gHŸ€DFff–HŒQV/tFuV7–V•lmQ8OFMCHŽFD7–IMFXQDCyC8–dŒ– FI8F1Št‹“gDCjV1F+” ŒgXumœ”QO XF+Dˆ–r1œHCq€rŒyg“jTtC“Vˆ WtOˆ˜Dr‚Itˆu2C–FF98–h–l”8qŽ–C–LQV8DQD–˜Œ8ˆCŠ”FjV1F+Št xIDujœ1 O€–F˜MO •gO8t–QFL8Š“jTFuWtut€DFBVtu3 tˆ“IqŽLg” QVDCQVt–IX‹˜DfMŸIgŽQV–M1I“–8t…Ÿ–l–Ž tFxVl–FŠl–FVtˆm8Q7f–L•l–F–lVQVtˆ”XkŸ9OLBœ˜ 18QQ3Ž–l–F–QˆŸVt–IX‹V“jFœDL” tFCV3Ž˜œ“ŒB81ˆ“ t1lD‹L ˜jBD7ŒQIHŒ” HF2”‹Ir‚h8fuŸ DH7OQIŒOdQtuv +D7“j31ŽuŠ1ˆ“gDCjDFˆŠ“ VtXLmœFCjI”y3trQMFœh–QCqOu/DrdIMFV‚gD‹Fœ“uQœt m•”FxVl–FŠl–FVtˆm8QM1I˜–L•l–FD7Œ‘ tˆCIqŽ˜ tQQIDŽ“ t–+ t–FœtBD7ŒL tHŸ t–˜ “–Fœ˜VW83WEIH‹˜Vt QVtu18”ˆ˜ t–˜DtŽFVtˆm8Q Q t–˜MluQIDQ“•Q T X‹BŠt Q8 Ž8”FQX‹8Cf–‘ŒfV”g˜Lv”ˆ‘“jMrŽQg˜uv “u/O‚IŒOQvgtVhHFXljvgOd3C”‚h FLXfVhVrŽQgDŒŽDŽyIl–uŒOQv8OCxgDCjV1F+Š˜ˆuŒDult–•IOu8ŠtŽVtˆyhœ”FqIOC/grFD1ŒWIHFœOŽx rd7t ŽV1ŽrOm1rdmœruWV1d2 “Vu€rd‘CT‹Ÿ HŽXO–˜XQ8+uCDdLCVVŠ”X”t– 9C8V‚DCLŠt uŠ1ˆ“g”FqŠtCŽ–jHtXLQgD O€tCŽŒ–u8”HvX‹˜œr‚QV˜Ch – ŒID‹VO‹FD7 1 t–IX‹Lg” QVDCQV– ” t–L€O‹Œ” uŠ1ˆ“gDCvVQˆyDr‹8H7œlFqŒr–f8rdgˆuhœy1V7VIDQm”g3Ž”Ct‹dœ–VV8œQœ“F+CtuLC+–M•”…Q1 ”Š”FjV1F+Št xIt‹”Š”FjV1F+Š“ H–1L7œ– CVQL/–“–VMQuhœy1V”uŽ9tŽItX‚Šœrd•ˆm3I+jxŠQy18–ClV1LyIlMŠ1ˆŸVDŒu1F+D–CI˜ “gHtˆ fM˜CMŠ1ˆŸVDV•IOuŽVOdŠ–Xˆ7gDCg FLŽt“LItˆuIDˆŒj1FfŒ“FDœQgDCgIOŒyD“FŠ–“ŒHgQˆvV1F+Št F ”‹“gDCjV1F+Št uŒ”dŽg1q€–L˜VOVT–1œht8umVFF˜€fCxŠ”C”DXV1V–jWMfuŠMHL”VˆQI”C2MOFœŒ“CvtX ŒHŽ8 ”‹œŒQˆ3gQVEVˆO”‹œŒQˆ3gQClQfD˜ux–“Hgtd1V–jWMfˆŠ€Œ”œ–C1F+Dˆ–r1œHClV1LfMtHŒ1‚vtFC1FOŠFCg–tŒr–8jt––…h9–CgŒ–V8gQCWC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠQuWœH t ˆL˜C8j€DX‚gDV1VX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1uŽœC•ˆF˜8r‹uŠ” ŸœF OMˆH3IOd€DumœlFjI”ˆœDrdTD”hlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1uhtrFj1Lf+jI–7ˆT8thh•Qj8D–CD7jŸœuItM3–j˜D1ˆŽgrFjI”ˆœDrdT–“C‚tˆŒl9DLyIlx€–u”trQI€FLœDFLuŠQFŽgDCgOŒf–“Œ˜€H‚HDOFgCXQ8+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“œ– VV1Ž+DŒ–DVQtu–•1Q++ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+9fœQC˜–QC˜ˆ+g+VuDMQCXWQC8–dŒ8–TVt1”8+œQCDdL87–v€D…Qœ8VCHFdŠ7D1g7DQC˜ˆˆC–HŸ€VMCDQœgWQC˜XŸ–DCLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD WDF+V”ŽtˆuWœFV7€ˆ8ŠgŽuŠQy18tF7I”–OgrTtŒWgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1Ff8“VTFuhœr‚tX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD WDF+V”MQumVX WIH‹‘OVtX‚rœF OMˆH3IOVVtˆyhœ”F“I”ˆœDrdT–“CltˆClIQFœDjItŽhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1u‘œyQMOˆ˜C8ˆI–fCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št M€g‹WI“u”OQ–OdŸlLŽIHFrfuhr‚ŽQuLœCt –LyDOŽQgDŒŽ1drrQvDDŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1uhtrFj1Lf+jI–7ˆT8–œh9–j8DŒCD1ˆŽgrFjI”ˆœDrdT–“C‚tˆŠh9DLyIluŠQFŽgDCgOŒf–“Œ˜€H‚HDˆŠhI”–Xgt •I–F“gH WMˆL˜Mtu9Œ6‚DˆCgCDQL+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1Ff8“VTFuhœr‚tX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjIQL˜€OdT–QVQVX9œF8Š8FuŒ7–WVfFqCtˆ˜€+ˆŒ”lt+uOIQFW9tdTŒQV1tFQMXŽ+D“jHŒQV1–lLqVXd+ŠtŽHŒ”hœlFŸC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1ˆ“gDCjV”CŽ–jHtXLQgDCgOuf–“ŒI–7DhœlL7g1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjVQL˜€fLItfCxgDCjV1F+Št uŠ1ˆ“gDCjV”CŽ–jHtXLQgDV1VX‹l” uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹L8lŠŸ–QjW –‚I3Ž˜grLFI˜–” – ŸIqŽFœtBœDL“8”ˆIt–˜CrdBV––dŠt‹“gDCjV1F+” ŒgXumœ”QO XF+DjFtXuWgD‹˜CrdBV––d8”–E gŽ˜VtHŸ•7‘Œ1V7œH‹˜Œ“ˆBDŒd83WEIH9CtMŸV˜LQ•”DlTŽ˜CrdBV––d83WEIHg”ˆœgrWQC“F7CDdLg–hœ8DQœ“ˆ–C8–81CLŠt uŠ1ˆ“g”FqŠtCŽ–jHtXLQgD O€tCŽŒ–+IDˆ“gDCjV1ŽLlV+IDˆ“gDCq ”Œ˜g“C–1Q“tr‚t –H7D“jTMŒ“œ1 OIrX3Œr‚ItXQvgHgCtCf–8F•MHV7œHCO–l” uŠ1ˆ“gDCjV1Fy8Ctˆu‘œDCj”M7D“FHŒ7F7œCHOCLV”ŽHgOdltFCŸO–l” uŠ1ˆ“gDCjV1F+Št uŠ1u‘t–9XF+VfLFtXQ/8” vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gHgCtCf–t ŠD1ˆ/gDMd€HL21ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1Ffg“FI–1V38l vV1F+Št uŠ1ˆ“gDCjV1F+ŠrLVtX‚WgDCHMOˆffFIŠ”M”Š”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸVXW QL8Š8FuŠ”C“8ˆŒCH‹l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjVQF/grdV–lMlŠ”FjV1F+Št uŠ1ˆ“gDCjV1Ff8rMF–“guO”u+œ7V+IDˆ“gDCjV1F+Št uŠ1ˆ“gD gˆLŽŒˆTgˆX”Š”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸVXW QL8Š8FuŠ”C/8l vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“tt‚•ˆF˜7 +IDˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠQyhVDŒVQj8ŠtŽHŒ”hœlHh•QF˜DrFœM1‚vtF E1Ž+Vf TD1u7œ–9MXFyŠrVM“Œmtut€HL‚COŽHgOdltFCŸC1CLŠt uŠ1ˆ“gDCjV”CŽ–jHtXLQgD O€tCŽŒ–œMˆmœ1CmtŒ˜CtLHŒ”d”œrFj1Lyt˜jF ”‹“gDCjV1F+Št uŠ1ˆ“gDCq€–LœDˆ8Œ“œ7CtItM7D“FxŠQy38XCjCXŽD1ŽuŠ1ˆ“gDCjV1F+ŠFMŠ1ˆŸVXmMXŽD1ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹L8lŠŸ–QjW –‚I3Ž˜grLFœDLŸ•QEV1‹FœtB81ˆ“VtˆV1‹ŽIfŒQ–l“ –”X‹F–˜ˆBVtˆm8Q CIO–˜DtLŒ” uŠ1ˆ“gDCvVQˆygrdHgˆV‚œrFq€rŒyg“jTtC“CHhŸ–8–I tDQt˜FOC–L+8l€D1Qœtˆ+C˜6”œ7–3g”…QfF•Ct‹Ž•7–VI˜Qt˜FOC–L+8–VI–m”8qŽ–C–LQV8–h•”hQœgWlC–FL 7DQDDQ”QjC˜j‚g–MF…QC“FŽCDdL€DCLŠt uŠ1ˆ“g”Fv HCLŠt uŠ1ulVˆ •”ˆ˜8t IFVQt8CgOy3CO Œ1V‘œ8uOFL8Vlj+IDˆ“gDCqC1CLŠt uŠ1ˆ“gDCjV1Ly8–€DX‚gD9MOC/D“VTŒ7H7tFu”CfIf œMQVQt–dXŽ+VfL•€tŽh8l vV1F+Št uŠ1ˆ“gD WDF+IfLHgXLlœCC1Ly8–€˜ “gCHOuŽD“VHM1Q/gQŠh9–jDŠ˜jF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjI”ŒyI+juŒ+j“gHg”ˆœ8˜ŒŠDVŸtth‚€rˆf–“CTŠ” /tHt OCy8–€Dy7œ–QI”y7œ” rŠ1uŽœ–QI”M7D“FuŠ1L1D8Ct€tCŽ–“–HŒ–L”t8Ct€HFLœljB ”‹“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1uWœH9O–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸVXmMXFXMO •gˆuvœ–C ˆjŽŒrŽV+F2œD t”u+V”‚IgˆV1œ19CtC‚ŠC–7–ŸœCV”V+Šr‚–VlgDC• ˆX7–“F–VQVX–I FH7–“LuItCh8l vV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCq ”CŽ–r‚œMˆmVX 91Ž+œlVœgX1vg1VE–XŽ29fjœŠ7”g“FlV1LyDŒHŒ“CltˆClV1LfMtHŒ1‚vtFCX‹l” uŠ1ˆ“gDCjV1FfOQuŠ”‘œCt tŒ+V”ŽT–1œht8umOC‚I3ŽCD”hlŠ”FjV1F+Št uŠ1ˆ“gDCjV1FygrdHgˆV‚œrFjI”u˜ŒjVMrWœ7ˆ7€ˆD1ŽuŠ1ˆ“gDCjV1F+ŠF+IDˆ“gDCjV1F+Št –œhVˆ• DFffŒŒl”tH –1FW€fFœŒ7ŒL8XCjI”ŒyI+jx–fCxgDCjV1FyMXŽ+IDˆ“gDCj HŽL1ŽuŠ1ˆ“gDCjDFBID‹1•Q Šf–˜9tWŸ–1L‘Vtˆ•I3Ž˜9O BVtˆm81‹jV”–œ” Bt1 – EVl–˜CrdBV––d8”–IX–OIrŒf+utˆyQC–L+8D”V˜ +IDˆ“gDCjV1ŽLŠHˆ–œhVˆ• DFy8jtdQt“FXlœQ–OdŽC8 WIHFœOŽuMlV”g˜LWO‹Mt‚h€rQ7DŽHF/tFTC”dL8XŒWIHFœOŽuM”dLgr‚v –DO1QC”Q/CFW ”OFMŒO‚ŽQŒŽI–FXt‚urd3trV/HŽTIl–MgDŽuŠ1ˆ“gDCjDŽL9XŽuŠ1ˆ“gDqM–FŽ€fjV€DuŽVˆQIrŒffVTIDumt8CgOŒŽ+jFD” hŠ”FjV1F+Š +IDˆ“gDCjV1F+Št •gXEQœlFj9DFy8jFu”œH‚MQLœgt‹Œ”lt+Ct –F˜MtdxŠ”Œ2g“FŸX‹l” uŠ1ˆ“gDCjV1FfOQuŠ”2VX• ”y78t‹•gXEQœlFlV1m7VfjT–u”V+CCHŽDM+FŠ–XˆhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+ŠtŽHgO…hgDŠhV1LyDr‹tXQ1DOQOIQFW9˜LŒQV7œHC“FLy–“ŒgXEQœlFqM”ˆ˜CtŽTM”C“VHCqtˆ˜CtŽMQu‚gDC• ˆX7–“F–VQVX–I FH7–“LuItCh8l vV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCqOuy8rdF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjI”ŒyI+juŒ+j“gHg”ˆœ8˜ŒŠDVŸtth‚€rˆf–“CTŠ” /tHt OCy8–€Dy7œ–QI”y7œ” rŠ1u/œ”Qt 1F+g“ŒŒMQV‚œ”Qt tŒˆt“VVMQV2gtFX‹l” uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Š“ –V/t+ydIOŒf8r‹xŠ”C”tXMEQO8˜uŠ€tdVFMEHd+ŠtŽHgO…h–lLqVXd+ŠtŽT–1œht8umOC‚I7 +IDˆ“gDCjV1F+Št –QF“g1 9 rŒ˜C8jxŠQu1t–gIrˆf–“Lx–+ŒEgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št –œhVˆ• DF+D“ŒVtˆu‘œD t€F 2ŒrŒB ”‹“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1u‚tFgMtCŽCO –7ˆlœH‚IQL8V”FœgXLœrFu1F+DjFgˆˆh8l vV1F+Št rDt‹xgDCjV1F+9fˆxV”‹“gDCjV1F+”QrFOCFLŽI7–T–DQC–CvC˜j˜ 7–vM“DQ8OFBC8 ‚–+–MFF+IDˆ“gDCjV1ŽLŒOQWttLŽ“j2r1lIrd”tFjŸ tklO‚xIr‹3 / rXlO…1€r‚ŽQŒW ˜jDrdxIrŽ”CHŽV”XvrdV€“j/œDd/Vlu/O…l rŽQ”u‘V1F2˜–utfjŽœ–Œ/ HLŠfuIIrL“g8CWI”‹2Ir u€rQQg–htˆDtdTŒOQ‘œ8 ‘V1Hhg1F+Št uŠ1ˆdgD–q QFœgrTD1ˆŸœ1 OIrX3Œr‚ID1u2VX•OuŽœ”Qœ“ˆ–C8–87–V€DœQtHC9Š”FjV1F+Št xIDujœ”QtMOŒœg“–uŒ1L”œuEˆF˜COQ”FŒC–FdVVM•QDQt“–FVX•M–LF•7‘8Q Ÿ”–LMfjFIg‹W8Q TrQIIOuy8rd+IDˆ“gDCjV1ŽLlV+IDˆ“gDCq ”Œ˜g“C–1Q“tr‚t –H7D“jTMŒ“t8uEˆFœgt‹•gXumt8u1Iˆm3–˜j+IDˆ“gDCqC1CLŠt uŠ1ˆ“gDCjV1LyDŒHŠ1X‚gDCgMOˆffLM–+–mtH •VrM3IOdTŒl vgCq XFf8“CI–1V‚gDC DLyŠrVM“Œmtu–X‹l” uŠ1ˆ“gDCjV1FygrdHgˆV‚œrFqMOCŽfŒxgXEhœ”‚g ruf98CItXFvgHgCOŒOl œD”ŽhDˆŠhrM7–rLVMFV2œlFC1CLŠt uŠ1y‚Š” vV1F+Št M€t‹dŠ”FjV1F+Št xIDŒWI1WvOFdIrdQˆŒ/XŽ“ VMŠ1Š”8ˆ7gD–OIrŒf+utˆyQŠ”FjV1F+Št xIDŒŽˆF‘t‚h€r‚ŽC”LW FLŠIl–vC”d/g”Lv“yl“VCljmCfL/t‹Df–h–O‚Wg”LŸ Vyt x”‚Wt˜LhrˆMr 3rdmClVŸ t‹TIr u€rQQg–htˆD“V•DOd3trL‘V1H7OŽv€rL“g˜LŽ DFœOQ–OQWœHŒŽIrXlIr uMXŽuŠ1ˆ“gDCjDFˆŠ“ VtXLmœFCjI”CfŒrLMHV/tFœ‚IˆH7D“jHthhV–Cq€rŒyg“jTtC“Ctud–8DQD”kQt˜FOC–L+8HhhŒrLHŒ”h3œ–gC8l€D1Q8+VMCtˆŠ7l€tˆ•MH‚”œFMQMˆL˜CtLI–7Dh8O1d Xd‚C8ˆD7–Ct–t –H3IOdˆV•gTŽLIfˆBVtŽQ tFlV3ŽLM˜ŠŸ–3Ž3 –Mv”–8CfDŸV–V‘8”QHl–BŠt “” uŠ1ˆ“gDCvVQˆyŠrDV1gDCgIQFœDrugXEhœ”QW –L‚ŒOŽ”g1Œ/ 8–/rQv–OQWœHŒŽIrXlOdxC”d“8fL” HF2IlVv rdh1d” HL3It •V”FMHœQgtFjItˆf–“CTŒ7LCO‹+tVxŒ”kQCFM”C–L+ –VtkQœ“ˆ–C8–87DQDDQtHCCC˜jFM–M€t”tDC8CDdLŠ8–•7D”tFCQC–F+9+–h–lQ7uQCHhŸg+–VC +IDˆ“gDCjV1ŽLŠHˆ–œhVˆ• DFfg“VTM“Wt–1V7–vI–XQt˜ˆrCHhŸ–8–I t–HgXmdtrDŸ9OLB–”Ž7VtHhO–Lx”dB–”u/–LmœH9XCLŠt uŠ1ˆ“g”FqŠtŒfIfFTM”Œ2gD–tCˆH3–“ HŒ”d”œrFXOd•r‹3CT‹ŽI˜j”O…lrd”gDdW Dd‘Ilœ”gOQ“œ8xgDCjV1F+Š˜ˆxI8xgDCjV1FyŠˆV˜ht˜FqtŒ˜CtLHŒ”d”œrFq€rŒfŒ“FHŒDVlœ1C“I”CfŒrLMHV/tFœ‚IˆH7D“jHthhV–ClV1LfDrHŒ1D‚g“FXCLŠt uŠ1ylŠ”FjV1F+Št uŠ1ˆ“gH gIOŒfŒt ŠD1ˆŸtH OMˆFDM+F•€tMvg“FCHL‚Š˜ŒM–QV2gDC DLfDrHŒ1DlŠ”FjV1F+Št uŠ1ˆ“gHgCOŒ+Š8FuŠQyhœD W€HdDCtIŒ1Lrœ7umOuf ”‹•€DumœFCq€rŒfŒ“FHŠ1ˆ1œrFjHdLD“ V–1‚3t– Hˆ…3ŒrLHŒ”h3œ–gCDdLDrŽVtˆumgQŒ7g1F+Št uŠ1ˆ“gDCqˆLLŠt‹VMHdœr‚Œ1LyDŒHŠ”WŸ8–CWC1CLŠt uŠ1ˆ“gDCjV1F+Št uŒ”dŽg19MOC/Š“V€t ŸVXmMˆ 2ŒrŒMŠ1ˆ/DF•€ty7gt‚xD1X‚DˆŠh 1Žœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FyDr‹8H7gDQOŒ‚ŠHVFŒ1‚Wœ1gOy3CO‹–7ˆlœH‚IQL8V”FB€DˆL8XCjI”ŒyI+jxD”WlŠ”FjV1F+Št uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+ŠF+IDˆ“gDCjV1F+Št –QFvœ7Cg€tCf9˜LxŠQyhVDgœHQOMfCuŠ”ŒDVX O€tŒff–I€r‹/gQCj9–jDMf xtfCxgDCjV1F+Št uŠ1ˆ“gDCjV”CŽ–jHtXLQgDg€tŒ˜–8 +IDˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št ugXLWVXt€tuLŠrQV–l2tFŒ7g1F+Št ug+jxŠ”FjV1F+Š˜VxIt‹xgDCjV1F+Š˜ˆu8QE ˜–˜g˜ŒQ–1u/8”ˆ1l–˜CrdBV––dŠt‹“gDCjV1F+” ŒgXumœ”QO XF+D“ V–1‚3t– HXFy8jtdQt“FXf–h–O‚Wg”LWIHFœOŽuMXŽuŠ1ˆ“gDCjDFˆŠ“FItˆydœ”11VQFŽ9˜VTŒQVmœrFXtF•ŒOdLq‹v –DO1QC8jFVWC7 ‚88–Dl…”8ˆCWCt‹dœ–VV8œQœ“F+CtuLC+–M•”…Q1 ”Š”FjV1F+Št xIDujVX m€ty7VfLuŒ–œ1t8ut ”ŒffVTIDŒhXL/ly”x”QLfVWI+ 3fVu8OdQ8OLŸ Vyt 9XŽuŠ1ˆ“gDCjDŽL9XŽuŠ1ˆ“gDqM–FŽ€fjV€DuŽVˆQIrŒffVTIDu2VX‚ QˆœŠ“ xŠQult– 9FF˜VOdxDt‹“gDCjV”–l” uŠ1ˆ“gDCjV1F+DjFgˆˆ“DˆCjI”ŒfIfj€86Ÿt– gI–…78r‹I–l7g1CVQF˜MO I8F‚t8u– OM7D“VŠ1ˆ/8OFg QF˜8“uV–”ŒWgQŒ7g1F+Št uŠ1ˆ“gDCqˆLLŠt‹I–7ˆlVXŸ1LyDŒHŠ”ŽhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+Š“FItˆydœ”11V”ŒygˆI–fCxgDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“VX m€ty7œ” T–œ7gD–tCˆH3–“ HŒ”d”œrFmOuœŠ“CTMFuWg1CuC1F+g˜CuŠQyhVDŒXŽD1ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹L ”ŸI8ˆ1€DuDtF•Mrˆ˜8rd+IDˆ“gDCjV1ŽLŠHˆŒ1V‚t–hV1LyŠrVM“ŒmtutVrM3–“FHtd‘tFCq€rŒyg“jTtC“Ctud–8DQD”kQt˜FOC–L+8HhŸœtVŸ8”DlIX‹8ClŒQœtC‘V– x”DŸ9OLBD3ŽL•Q ŽVlDŸ9OQLVOLTMjQVX t –H3–“–HŠ7–1œFME tCf€+ˆIMrdQ8OQOIFH398ˆTFu2V–QIHdŽM˜VIŒQV78OŽOIFH398ˆTFuqVˆgQL˜C8j–1‚mVX‚€–D3–“FHtd‘tFCr”‹Ir‚h8fuv1FŠlŒTVrd”8 Ÿ VyrQv–OQ/CDˆ“–8ut€tŒŽOLIVgWEIH‹˜DfjQ–”ŽW –M1V1‹8CfˆQ–1VQ8Q FIgŽFœtBV––d8QMŸIgŽt˜yŸ–”Q“ tˆFH‹L ˜VQ–”Žm•QM1I˜–˜8”EŸœtC38Q”X‹L “jFœ–F” t–Ÿ ˜–LtrQQœDd/•”ˆCIt–Ž–˜uQD7Fm tˆVTŽ€t‹FœtCLVtˆV “–FIl–Q•7‘8Q ŠTŽ8CljFD7v8”ˆ1X‹˜Š˜Vf8“VTD7–mœrQg€ty3OŽMHEQœ7CgOuœ–“jM€8–DV–9MˆL˜M–V8–H‚Wœ”‚IˆH3–DŽuŠ1ˆ“gDCjDFˆŠ“ VtXLmœFCjIQF˜8j–7FQgD9MOCŽf–I€DŒŽ–XtW1M”Ž”t“LWI1H7“6lŒfV”g˜LW1dytQxx”Ž”œDŒWHŽmŠruŽD“FTMrdŸœF O tˆ˜trdMQŒhI+Œ2fuhrŽQtt‚/t‹Œg1F+Št uŠ1ˆdgD–q€–LœDˆ8Œ“tt1‚ ruf–rTIDŒŽIDLXOFhx”‹”C–ŒW8DQMOC/–rhlClFCCtˆ8€+VMD”h”8qŽ–C–LQV–LŽŒ“CMF–xgDCjV1F+Š˜ˆuŒDyhœD• rŠ78t gtO‘tFqMOˆ˜9˜–u8”Q–t–L “yŸœDŽŽ•Q y ˜–˜9O Q–7ŒQ8QMv”–Š“ul” uŠ1ˆ“gDCvDdl” uŠ1ˆ“œ1tItufOLuŒQmdœrQ9MOˆ˜9˜–ugXEht–•MˆD3–“FHtd‘tFC“I”CfŒrLMHV/tFœ‚€FLœgu–1‚WDˆCHd+ŠtŽV–1Ehœ–‚ –j8œ”‚xDt‹“gDCjV”–l” uŠ1ˆ“gDCjV1F+D“ V–1‚3t– Hˆ…78rdFLht8u–VQj8ŠtŽŒ1V‘œ8uOFLt9˜LItXm3œ– 9ˆjDMO‚•€/g“LvHF+M˜–uŠ”CQgHqIˆH3 OIMFVrœ7ut€tŒŽOLI–fCxgDCjV1F+Št uŠ1ˆŸt– 9MOˆ˜9˜–uŒ+j“gH OIrŒffVTI6‚g“Fx1L‚œ7V•€Dˆ1t–CjHdLDrVMQuhœy1C1CLŠt uŠ1ˆ“gDCjV1LyDŒHŠ1X‚gDCgMOˆffLM–+–mtH •VrM3IOdTŒl vg“FqIOu8Š“LHŒ1V‚VX9OC/t“jVMF–“g“H1I”CfŒrLMHV/tFœ‚€FLœgu–1‚W8OFgIˆH7D“jTMŒh8l vV1F+Št uŠ1ˆ“gD WDF+IOLTMQVQVXC“I”ŒyI+jx–+ŒEgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št –QFvœ7Cg€tCf9˜LxŠQyhVDgœHQtMfCuŠ”ŒOœ”‚• rCLœljuŒ+6‚DˆŒjO–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV”ŒfIfFTM”C“œrQtM1Fˆ–ŒVMFVlVX W ruLIfjTtXu7œugXŽ+g8 uŠ1F7gDCgMO–yD˜jx–fCxgDCjV1F+Št uŠ1ˆ“gDCjV”VŒ” uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Š“jIIt2VX• ”y78t‹•gˆy1VXV7 Q8 ” •MDEht–•MOˆ˜Ct‚ugX‚Wœ”‚IˆH3–8VuŒtdQVX t tŒ+œljuŒ+6‚DˆŒjO–l” uŠ1ˆ“gDCjV1F+Št uŠ1u‚tFgMtCŽCO HgXmdtFŒ7g1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV”CŽ–jHtXLQgD IIOuy8rdB ”‹“gDCjV”VŒ1ŽuŠ1ˆ“gDMEDŽ“” uŠ1ˆ“gDCvV7–VŒ”MQ8uLgDV9OC/t“jVMF–xgDCjV1F+Š˜ˆuŒDult–•IOu8ŠtŽŒ1V‘œ8uOFLt9˜LItXm3œ– 9XFy8jtdQt“FXf–h–O‚Wg”LWIHFœOŽuMfœQqŽŒC8 QŒ8–M 8yQfF9C–FdIXCLŠt uŠ1ˆ“g”FqŠtCfŒ“FV–7j“gH OIrŒffVTIDu2VX•OuŽœ”QqŽŒC˜jB8–MMrMQtHC9C8VF 7l€D1QœHCEC˜jL –MMrQt“FvD–QI”CŽ9˜jIŒ7ˆmœrQW–Lœ86”tt–CCtX”œ8–MDmQC˜ˆˆŠ”FjV1F+Št xIDujœ”QtMOŒœg“–uŒ1L”œuEˆF˜COQ”FŒC–FdVVM•QDQt“–FVX•M–LF•7‘8Q Ÿ”–LMfjFIg‹W8Q TrQIIOuy8rd+IDˆ“gDCjV1ŽLŠHˆHŒ”‚œCH€HFˆ–ŒVMFVlVX W ruLŒfjWgr‚vœvtFh rdmCluW HFMf–MIrŽ”CHŽV”XEg1F+Št uŠ1ˆdg”HEg1F+Št ugXydttQEˆF‚ŠrQH–7–‘VX W ruLŠ“LHŒ7Fl–8ut€tŒŽOLID” Ÿœ1 OIrX3Œr‚I–F2tF•Mrˆ˜8rdŠD”C/8XCjIQF˜8j–7FQDˆCHŽŒ” uŠ1ˆ“V˜ vV1F+Št uŠ1ˆ“gDCg QF˜8“uV–”ŒWt+C9OC/t“jVMF–“DˆCjI”CfŒrLMHV/tFœ‚€FLœgu–1‚WDˆŠhHL29O‚•€r‹/gDMd DF+œl–•gXumt8u1Iˆm3–rVMFV‚VOQWIFLD1ŽuŠ1ˆ“gDCjV1F+ŠtŽV–1Ehœ–‚ DFXMO •Œ1V‘VX W ru‘M+F•€tMvg“FCHL‚Š˜ŒVD1ˆ/8OFgIˆH7D“jTMŠlŠ”FjV1F+Št uŠ1ˆ“gHgCOŒ+Š8FuŠQyhœD W€HdDCtIŒ1Lrœ7umOuf ”‹•€DumœFCq€rŒf9˜ MFV‚VOQWIFL8Št‚MI–ult– 9FF˜VOdœM1‚Wœ”‚IˆH3–˜–•Œ1V‘VX W ruLI7 +IDˆ“gDCjV1F+Št –QF“g1 9 rŒ˜C8jxŠQyhVDŒˆj‘Œ˜jF ”‹“gDCjV1F+Št uŠ1ˆ“gDCqˆLLIfLHgXLlœCC1LyDŒHŒ“CEtˆClV1mh–“F8F‚g“FŸVQjDM+FCŠ”hlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1yhœD• rŒ‚Š“–ItOC“DFmIFLœŠj–7FQg1 W OCf€fVIŒQ–vgtL7V1FL ” •gˆy1VXCŸX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“VFˆvV1F+Št uŠ1ˆ“gD WDŽy8jHu”œlF“I”ŒyI+j˜€HuH8XCjFD7D“VgXuhœrQV”M3–“FHtd‘tFŒvVQC˜C8jI–7Dhg“FŸVQjDM+FCŠ”hlŠ”FjV1F+Št uŠ1ˆ“gDCjV1FygrdHgˆV‚œrFqMOC/–rdB ”‹“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1u‚tFgMtCŽCO IDV7œ7u–C1CLŠt uŠ1y‚Š” vV1F+Št M€t‹dŠ”FjV1F+Št xIDŒWXH7OFMœr‹3 WXFrO…1€r‚ŽQŒŽO‹rIlDlœrdL8XŒ/Xdœ”•ŒDŽuŠ1ˆ“gDCjDFˆŠ“ VtXLmœFCjI”CŽ–“ŒTMQuWt+uIOuf–t MQu‚œ–QHFBI˜–” – ŸIqŽFœtBœ– m•QMl f–LMlyŸ–3ŽmŠt‹“gDCjV1F+” ŒgXumœ”QO XF+D“CTMH‚mœHœ‚I”ˆœgt MQu‚œ–QHFBV––1VtFˆI”–8COFQVtˆm8”–T“–˜9tdF•7‘8Q ŠVl––“CB–Qj3•QMlO–Fœ” FV–VhVgWEIH‹ŽC”QBI˜–h8Q ŸIr–˜g˜ŒQ–1F78Q‚I3Ž˜grLFVtu3 –‚ODŸ9OLB–”Q“ tˆFH‹˜œlˆyVfjT–u”V+CŠO…1€rŽ”g1ŒWV1d2OF•rŽQg8CvV77tQxx”‚vCX/8–‘rQv–OQv8O‚/8œlfVItfV”gtLŽIXHvt •M”QŽg3‹vI+ ŠfC•gO‹h1Ÿ DFXIl–xrQW”VŸ 8 TfjM“V”gt‚” HF2OŽxœrdLgr‚Ÿ HL3tFdtfjWgrŽxgDCjV1F+Š˜ˆuŒDu‚tFgMtCŽCO MQu‚œ–QHFBœDFŸ8Q xTŽLx”dB–”u/ – 1D‹˜ŠlˆB–”Cd8”–– O–LŒtŽFD‘8”–IX‹–”…ŸD7 1 tH7TŽ˜•”B•7‘8Q Ÿ”–LMfjFœDŽŽ•Q y ˜–˜9O Q–7ŒQ8QMv”–Š“ul” uŠ1ˆ“gDCvVQˆyDr‹8H7œlFqŒr–f8rdgˆuhœy1V7VIDQm”g3Ž”Ct‹dœ–VV8œQœ“F+CtuLC+–M•”…Q1 ”Š”FjV1F+Št xIt‹”Š”FjV1F+Š“ H–1L7œ– CVQL/–“–VMQuhœy1V”Cy–“CTŒ–LhœH –1LygrdT–7HhtFœ‚tˆ˜€OdMŠ1ˆŸœH‚IFF˜€OVIŒ”d‚DˆCHŽŒ” uŠ1ˆ“V˜ vV1F+Št uŠ1ˆ“gDCgIru˜Dt ŠD1ˆ/t– gIDF+M˜LuŠ”CQgHg”ˆœ8˜ŒŠ+FŸtFIˆH3–˜–•€DulVˆ E1F+œl–•gXLWœF‚MˆLt9tQ–lW8OFV1L‚COŽTŒ7F‘t– EVFLffFB ”‹“gDCjV1F+Št uŒQœ1tF C1Lf8“ŒIŠl “gH‚MtŒyŠˆHŠl “gH•OŒy–“FT+H3t–uX‹l” uŠ1ˆ“gDCjV1FfOQuŠ” Ÿœ”QtMOŒœg“–œMQLmœ”Fˆ9–jDŠ˜jF ”‹“gDCjV1F+Št uŠ1ˆ“gDCqˆLLŠt‹I–7ˆlVXŸ1Lf98ˆHgXydVXCŸO–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV”ŒfIfFTM”C“œrQtM1Fˆ–ŒVMFVlVX W ruLV”E”g3W7C˜ˆBŠ8–h•”hQOF”C–L+8–CHm”g1‹Ot– gI8–Ig11QœuDC–FŽ8VM•QX”g1 C–D–mD8DQDDQC–CvCt‹LM7–hI˜œQtHCŽC–F˜M7–h€DmQ”Q/CHŽf8–LœIOdV•Q g r–8CljBVtˆm8”ˆHV3ŽŽtrŽB•7/€tCh8l vV1F+Št uŠ1ˆ“gDCjV1F+ŠF+IDˆ“gDCjV1F+Št uŠ1ˆ“gD t”M3– +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠjgXL”VfFq –Lœœ” gtO‘tFqMOˆ˜9˜–xŒ”d1œ1 E FLf–t‹uI“C“gtFlV1Lf98ˆHgXydVXCŸX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“VFˆv Hd‚Št uŠ1ˆ“gDCjV”ˆ˜tt‹MQu‚œ1‚€HŽ+D“VHtˆulVˆgœHQOMfCuŠ”ŒŽœ– EXFyŠˆTŒlWtHClV1Q+Š“LMrdlœ1 tI1dLœljuŒ+ŒlgQ7g1F+Št uŠ1ˆ“gDCqˆLLŠt‹•Œl”t8uOQ…3D“jI6‚g“FO–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸœH‚IFF˜€OVIŒ”d‚gDŠhVQ…d9D–8–HLrtfL7g1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1Lf€fVVMHV7t+ugOCLŠ8FuŒ”dQt+uO€tCŽŒ–xgXEdtt‚9MOCLV”ŽTŒ7F‘t– EVFLffFMŠ1ˆ18–CŸQ ‚œlV•€˜ /tXVlF8I” Š€DˆŸœH‚IFF˜€OVIŒ”d‚gDŒvV1Lf€fVVMHV7t+ugOCLCD–8–HLOD8ˆgDˆ–WOV–MˆVŒD–V•ŠFVˆ9–CB ”‹“gDCjV1F+Št uŠQu7œu9IOuO9tQ–lWgDŠhV1Lf€fVVMHV7t+ugOCLŠ˜–uŒ1Lmœ7ut –F˜MtdxŠQu‚tFd rŒf–rVItd7tFCŸC1CLŠt uŠ1ˆ“gDCjV”CŽ–jHtXLQgDCg”y38rTŒFŽœ– EX‹llVM€Dˆ“gDCjV1F+Št rDt‹”8fFjV1F+Št uŠ1ˆ“VX m€ty7œ” T–œ7gD–tCˆH3–“ HŒ”d”œrFmOuœŠ“CTMFuWg1CuC1F+g˜CuŠQu”Vˆg ”ŒœD˜jx–fCxgDCjV1FyMXŽ+IDˆ“gDCj HŽL1ŽuŠ1ˆ“gDCjDFB–”Ž‘V– u f–F–˜ŒFID–ŸVtQyIH‹FœtBœ– m•QMl f–˜g˜CBI˜–” – ŸIf vV1F+Št uŠ”‹“DDqIOCŽŒ“ŒuŠQu7œu9IOuO9tQ–lWgD9MOCŽf–I€DŒ/Xdœ”•gOŽQg˜u/t‹DtdvVrŽQC”uv +œvfVvDDŽuŠ1ˆ“gDCjDFˆŠ“ VtXLmœFCjI”CŽ–“ŒTMQuWt+ugOCLŠ“LHgXLhœrQV7VxCTWQœ–CyCFFF88DQDDQC˜–QCty3–HCLŠt uŠ1ˆ“g”FqŠtCŽ–jHtXLQgD9MOCŽf–I€DŒŽIDLXOFhx”‹”C–ŒW8DlfuIIrd“tLWHŽ‘rdMtO‹mgHhI+Œ2rQv–OQW”VŸ 8 TlŠ”x”d”QŒ” HF2fjMgO‹1gQŽI˜j”O…lrd”gDdW Dd‘Ilœ”gOQ“œ8xgDCjV1F+Š˜ˆuŒDyhœD• rŠ78t gtO‘tFqMOˆ˜9˜–u8”Q–t–L “yŸœDŽŽ•Q y ˜–˜9O Q–7ŒQ8QMv”–Š“ul” uŠ1ˆ“gDCvDdl” uŠ1ˆ“œ1tItufOLuŒQmdœrQ9MOˆ˜9˜–ugXydœ7umŒ”ˆ˜€OdxŠQu7œu9IOuO9tQ–lW8XCjI”CŽ–“ŒTMQuWt+ugOCLI1ŽuŠ1ˆ“gD7g1F+Št uŠ1ˆ“gDCjIQH3MtŽuŒ+j“guOIQFLŠ˜Œ€Dˆ/8OFgMOˆffLM–+–rtH tMrˆ˜8rdMItC“œ1t€rˆ+Št‚MI–u7œu9IOuO9tQ–lW8OFV1L‚COŽ–V1œCgˆ…3D“jI“CxgDCjV1F+Št uŠ1uWVD tIHŽ+DrLT–Qˆ7gDCg rŒœD“ Htˆˆ7gDCg€–LœDˆ8–rVOQO€DŽD1ŽuŠ1ˆ“gDCjV1F+Š“jIIDˆvgH•OŒy–“FT+H3t–uIˆjDMf xtfCxgDCjV1F+Št uŠ1ˆ“gDCjV”ˆ˜tt xŒQV1œ1gCDŽ+D“VHtˆulVˆŒXŽœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FyDr‹8H7gDQOŒ‚ŠHVFŒ1‚Wœ1gOy3CO‹••”F” qŽIr BœtVhVtˆH‹˜œlCBœ– m•QMl f–t˜yŸ–Qˆh – 1D‹˜œlˆB•7‘8”ˆuf–LŠtFI˜–” – ŸIqŽŽgOLBVtˆm8”–T“–˜9tdFœ–F3•Q Œf–˜ OQB–”Cd8QMlO–˜DOFQœ–F3•Q Œf–8fjFœtCLVtFQ TŽŽtfuQœtŒ“•”QII1CX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“gDCjV1Ff–“CMFœlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1yhœD• rŒ‚Š“–ItOC“DFmIFLœŠj–7FQg1 W OCf€fVIŒQ–vgtL7V1FL ” •Œ7HdVXqMtŒ+IljB ”‹“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV”VŒ” uŠ1ˆ“gDCjV1FfOQxgXEhœ”‚q rC‚V”ŽTMQœhœ1tMˆ 2ŠrŒMŠ1ˆ/trQWQL8Š“ HtX‚vtF Œ1FXŠt M“Œhœ1qˆL+CO‚xD1XŸ8DCWC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠQu‚tFd rŒf–rVIŒ”d‚gDŠhV”M7–rFMQu‚g1Cg€–L˜M˜VHŒQVrtH W€Dd+Š˜ŒCD”W‚DˆC HL‚Šg‹uŠQu‚tFd rŒf–rVIŒ”d‚gDŒvV1LygrdT–7HhtFœ‚I”ˆœg˜–•€8/8l vV1F+Št uŠ1ˆ“gDCjV1F+ŠtŽ–V1œCgˆ…3t“jTŒQ–“DˆCjI”CŽ–“ŒTMQuWt+ugOCLŠ˜–uŒ1Lmœ7ut –F˜MtdxŠQu7œu9IOuO9tQ–lWgQŒ7g1F+Št uŠ1ˆ“gDCjV1F+Št –œhVˆ• DF+D“FI–7ˆ”VX tVFLŽfCI–fCxgDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“VX m€ty7œ” T–œ7gD–tCˆH3–“ HŒ”d”œrFmOuœŠ“CTMFuWg1CuC1F+g˜CuŠQu”Vˆg ”ŒœD˜jx–fCxgDCjV1FyMXŽ+IDˆ“gDCj HŽL1ŽuŠ1ˆ“gDCjDFB–1Fv8”QIX‹L ˜VQ–”Žm•”QyIH‹FœtBœ– m•QMl O vV1F+Št uŠ”‹“DDqIOCŽŒ“ŒuŠQu‚tFd rŒf–rVItd7tFCq€rŒyg“jTtC“CHW”•7–D1…QC˜ˆˆC˜jg+–M 8y”8O–”Cty”ŒDCLŠt uŠ1ˆ“g”FqŠtCŽ–jHtXLQgD • ry3€OdV–7Œ“Ct‹LD8–Vtœ”8qŽ–C–LQVtŒygˆIVgWEIH‹˜IlCFI8jhVtˆxgŽ˜gf–Q–7“ –1 D‹8x”‹FœDu3 ”‹“gDCjV1F+” Œgˆuvœ”1‚M”C‚ŠHVFŒ1‚Wœ1gOy3CO”tFCICHWŸ –vtyQttD”Ctu‚Š7–TI8ŠQ8qŽmCt‹f HCLŠt uŠ1ˆ“g”Fv HCLŠt uŠ1ulVˆ •”ˆ˜8t IFVQt8CgOy3CO –V1œCIˆuŽfCID” Ÿœ”Qt Oy7DrdœMFLhœH –XCLŠt uŠ1ylŠ”FjV1F+Št uŠ1ˆ“gHg”ˆœ8˜ŒŠDVŸtth‚€rˆf–“CTŠ” /gD• XF+œl–•gXLWœF‚MˆLt9tQ–lWgQŒ7g1F+Št uŠ1ˆ“gDCq€–LœDˆ8Œ“VX•M–LD1ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹L8lŠŸ–QjW tFQ “–˜I”…Ÿ–7FŸ•Q •Ir–˜€OmŸ–7–WVtˆ•V1‹œ”FFœD‹h•QMl f–8x”‹FœDu3 ”‹“gDCjV1F+” ŒgXLWVXt€tuLŠ“LHgXLhœrQV7VM•QDQt“–F–1Dd88–hœD…QD ‘Š”FjV1F+Št xIDujVX m€ty7VfLuŒ–œ1t8ut ”ŒffVTIDŒhXL/ly”x”QLfVWI+ 3fVu8OdQ8OLŸ Vyt 9XŽuŠ1ˆ“gDCjDŽL9XŽuŠ1ˆ“gDqM–FŽ€fjV€DuŽVˆQIrŒffVTIDydœ–VHˆLfVOdHgXQvgQˆvV1F+Št F ”‹“gDCjV1F+Št uŠQuŽœ– EOuŽŒ“ŒID1X‚gDCHty7grVIMFœht+Ctˆ…3D“VVMQV1tFQMXd/IfŒTŠ”MlŠ”FjV1F+Št uŠ1ˆ“gHqIOŒfV” ŠD1ˆ/8+C9IQH3Œ“FIŠ7/8OFgtˆ˜€OdTDV1tFŒ7g1F+Št uŠ1ˆ“gDCjI”M7DrFu–œ–dXFXMO –7DhVOQO1ŽfM˜jVM1L”VX W ˆL8I+jFVWgQCv€XQXŠ˜ x–fCxgDCjV1F+Št uŠ1u2œH tOC+Vlx–fCxgDCjV1F+Št uŠ1uŸœ“FqC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠQyhVDŒVQj8ŠtŽHŒ”hœlHh•QF˜DrFœM1‚vtF E1Ž+V+ˆ–1œdVX‚ ˆFœD“VIDuŸVˆd 1F+œl–•gXumVX “X‹l” uŠ1ˆ“gDCjV1F+Št uŠ1uhtrF“IˆL˜M˜ HgOŽvgHgCOŒ+I” •I–F“œ7Cg€tCf9˜LxŠQyhVDgœHQOMfCuŠ”ŒtDQCq”ˆ˜–“FVMrmœ”‚ŸVQLy–“ŒŒQVŸgDg H‹LŠt‚MI–ult–g1Ž8ŠtŠ–+jlgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD WDF+IfLHgXLlœCC”ˆ˜M˜ TŒ7FŸtFC“ID‹‚ŠtFMŠ1ˆŸVXmMXŽ8 ” •MDdœH lV”CŽ9˜VHŠ1uQœugXFygrdHgˆV‚œrQtI1Ffg–uŒFVh–H t€rŒˆŒˆHŒ7F1t–gOy3CDCtdŸtu–HŽ8ŠtŠ–+j“trQO”M3–˜jF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCgMO–yDt ŠD1uŽt– E€FLD1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1Ff–“CMF–“V˜ vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FyDr‹8H7gDQOŒ‚ŠHVFŒ1‚Wœ1gOy3CO‹•MQVht–tMOy3MtHŒ7F‚gD gMtuœŠt ItXL‚œCuCHF+œ” MIDuhœFq”y3DrdxŠ1HlgDCu1F+DjFgˆˆhgQŒ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCqˆLLŠt‹•gˆy1VXCj9–jDMO IDV7œ7u–XFy1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+9fœQCu•Cty”ŒHQFVt‚Ÿ – fIr–Ir BœtVhDt‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št HtX‚7tF t 1ŽXŒ˜ CŒXˆl8DŒjX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“gDCjV1F+DrLHtXL‚tFQMˆVffŒID1X‚gD W tŒytrTŠ”1œ– 9€ty7D“jT–Q–vVX•M–L8I” xIDˆE8DŒj 1ŽD1ŽuŠ1ˆ“gDCjV1F+ŠF+IDˆ“gDCjV1F+Št HMrhœH –1LyDŒHŠ1X‚DˆŠhVQLŽŒ“CMF–“grFVV1Ž+DrLHtXL‚tFQMˆVffŒID7jŸœ7CgIOC/DF––7ˆWDXŒV 1QXŠ˜ xD”WlŠ”FjV1F+Št uŠ1ˆ“œ7uEˆLœŠt‹CItWlŠ”FjV1F+Št uŠ1ˆ“VX•CDFy1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gHg”ˆœ8˜ŒŠHydœH EŒ”ˆ˜€OdxŠQult–g1ŽD1ŽuŠ1ˆ“gDCjV1F+ŠF+IDˆ“gDCjV1F+Št VMHœht8u“V1Žˆ–ŒVMFVlVX W ruLŠtŽItO‘tFqMOˆ˜9˜–xtfCxgDCjV1F+Št uŠ1ˆ“gDCjV1LfM˜LI€DX‚gDCgO–f8rdgˆuhœy1 ˆjŽVOdHŒ8ˆWœ7C9Iˆm3–t‹x–fCxgDCjV1F+Št uŠ1ˆ“gDCjV”ˆ˜tt xgXEhœ”‚q rC‚V”ŽTtX‚/8XCjFLf9td€DuQœCŒVQLœIfjMQˆ/gQŠ1 1Žœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FyDr‹8H7gDQOŒ‚ŠHVFŒ1‚Wœ1gOy3CO‹••”FB qŽ˜DOdQI˜–” – ŸIqŽ˜9tWŸ–1L‘V– EITŽ˜CtdFœD‹h•QMl f–8x”‹FœDu3•Q Ÿ”–LMfjF•7‘8QM‚1‹˜DfyŸIDŒ”VtQV1‹Lt FD3‹3 tˆ– t–L ˜VQ–”Žm•QM1FM‚€FLf8r–Œ/8œlfVItO‚ŽQŒv ”OhrQ/t–jh–LX “Vu€“j/gDŒvO‹O€ty3986Q+uXCFLŽD8l€D1QtgŽ+CHF+Œ+–hœD…QC“–“C7 ‚œDL‚I7 +IDˆ“gDCjV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCq9DCL9fVuŠ1ˆ“gDCjV1F+ŠtŽHŒ”hœlHh•”CŽ–“ŒTMQLWDrQWQL8V”ŽŒ1œhœDCŸC1CLŠt uŠ1ˆ“gDCjV1Lf8“VTFuWœr‚ŒVQj8ŠrQ–lWt+uHOŒO9tLTMDhtFQMOC‚V”ŽItd7tFQIOu˜–˜jB ”‹“gDCjV1F+Št ugˆVQœH W tˆ‚V”ŽItd7tFQIOu˜–˜jB ”‹“gDCjV1F+Št ugXLWVXt€tuLŠtŽVMFQVX t tŒX1ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹Vl–FœD‚3 tˆ˜IqŽœluBID‹1•Q Šf–L ˜VQ–”Žm•Q‚I3Ž˜grLF–l‘•QQO–gr BœtCLVtFxVl–FŠl–Œ” uŠ1ˆ“gDCvVQˆyŠrDV1gDCgMˆLœI+jugXEhœ”QW –L‚ŒOQW”VŽHŽ2fuIVr‚3g”uŸ Ddug1F+Št uŠ1ˆdgD–q QFœgrTD1ˆŸœH WFL8ŠrFTMF7tF O DFBœ–F3•Q Œf–”‹FV˜LL tˆrO–L r‹Q•7‘8”1lD‹L ˜jBD7ŒQ–LmœH9+l€D1QC1WŸC–FFŒ7–h•”h”g3ŽLŠ”FjV1F+Št xIDujœ”QtMOŒœg“–uŒ1V‚œ”QOCDFBIg‹W8Q T“–˜8tF–Qˆd•”FxVl–FŠl–F–lVQVtFE”–FœtBœ–V78”DlIXˆvV1F+Št uŠ”‹“DDg”CŽ98C€DuOVD 9OCyD“jTMŒ“CFL8tVx•lœQlˆTC–FFC–T€DMQœrH1CDhŸI+–vŒlV+IDˆ“gDCjV1ŽLlV+IDˆ“gDCq ”Œ˜g“C–1Q“tr‚t –H7D“jTMŒ“tutMˆŒŽ9tŽItX‚+V–VgO–yDt‹•gˆuWVDŒ1F+D“C–lŒWDˆ IIOuy8rdxDt‹“gDCjV”–l” uŠ1ˆ“gDCjV1FfOQuŠ”Žt– E€FL8+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDME –MIDEQ”Q/CHŽf88–dMrW”g1 CCDdQID”Š1ylClFCC–HŸ8–hI˜œQ8OH”CDddŒ7–hœ8DQ8+œvCDdQID”Š1yQ3ŽŒC8V8CHCLŠt uŠ1ˆ“gDCjV1F+Št ugXLWVXt€tuLŠruT–œ7gDWOuy–“ gXurt– gI–…3–“CI–7ˆWœr‚Œ1LyDrdFgˆˆ7gHg”ˆœ8˜jœ–fCxgDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“œ”QtMOŒœg“–uŠQyhœD W€HdDCtVIMFœh–O1‚IQLœ8HCF–˜hœ8utŠrŒyD“FxŠ”ŠhtFmMXL‚ ” •gˆuWVDŒ1F+D“C–lŒWgQŒ7g1F+Št ug+jxŠ”FjV1F+Š˜VxIt‹xgDCjV1F+Š˜ˆu8”ˆ“ t–8“uQIDŽ“ t–+ t–FœtB–1 mV– Q t–DOmŸIg‹78”FB qŽ˜DOdQI˜–” – ŸIqŽ˜9tWŸ–1L‘V– EITŽ˜CtdFœDL“8”ˆIt–Lg” QVDCQDt‹“gDCjV1F+” ŒgXumœ”QO XF+DrLTMDhtFQMˆuf–“LV€Du2VX•OuŽœ”QttˆOCtX”C8–v•Q6”8qŽlŠ”FjV1F+Št xIDujœ1 O€–F˜MO •Œlhœ8u–VQFŽ9˜VTŒQVmœrFXtQxx”dŸg”uŽDŽy“M1rQ/CFvVM “Vu€“jQCtLv“ˆDIl–MOQV–l2trDŸ9OLBV˜F” – yIf–V“jFI˜VvV”‹“gDCjV1F+” ŒgXLWVXt€tuLŠrHLmV–CXlœQ–OdŽC8 WIHFœOŽx r‹L1d/Vlu/fylr‹7œD/t‹DtdTŒO‚QCˆˆxgDCjV1F+Š˜ˆuŒDyhœD• rŠ78t gtO‘tFqMOˆ˜9˜–u8”Q–t–L “yŸœDŽŽ•Q y ˜–˜9O Q–7ŒQ8QMv”–Š“ul” uŠ1ˆ“gDCvDdl” uŠ1ˆ“œ1tItufOLuŒQmdœrQ9MOˆ˜9˜–uŒ”ŒWVXDQ FLf–“LŒrdXœyQMˆL˜C8jgŒQV2t˜F“IQH39˜–HŒQVQVX–gOM38˜CuŠQu7œ– 1ˆj˜trTgX‚WgQˆvV1F+Št F ”‹“gDCjV1F+Št ugXLWVXt€tuLŠtŽHŒ”hœlHh•Q…3VOdHŒ8–”tH t€Fˆ/XQ–lŒWD–gMOCLV”‚VMFQVX t tŒ+MtŽItX‚‘g“FlV1Lf8“VTFuWœr‚gŒ–Lœ8rLMŠ1ˆŸœH WFL8I7 +IDˆ“gDCq9DC“” uŠ1ˆ“8fFvDCLŠt uŠ1ˆ“g”FXt‹MrQ‘œ8–‚tF9 rŒœgrLID1uhtH‹L8lŠŸ–QjW tFQ “–˜I”…Ÿ–7FŸ•Q •Ir–˜€OmŸ–7–WVtˆ•V1‹œ”FFIDŽ“ t–+ –ˆvV1F+Št uŠ”‹“DDqIOCŽŒ“ŒuŠQu‚tF9 rŒœgrLI–FhtHCq€rŒyg“jTtC“œ”Qt€ry7–“FVMF–1œ– DfCIC”Q“g”V/t‹DO M 1ŽuŠ1ˆ“gDCjDFˆŠ“FItˆydœ”11VQFœg“FVtOŽ“CHhŸ–8–I tDQt˜FOC–L+VuDMQCXWQCtXŸC8VMŒ”…QC˜ˆˆC˜j˜ 7Dl D–+IDˆ“gDCjV1ŽLŠHˆHŒ”‚œCH€HFˆ–ŒVMFVlVX W ruLŒfjWgr‚vœvtFh rdmCluW HFMf–MIrŽ”CHŽV”XEg1F+Št uŠ1ˆdg”HEg1F+Št ugXydttQEˆF‚ŠrQH–7–‘VX W ruLŠr‚ItˆuBœugOMhg–––V2œCt€–H3–HLIŠ” Ÿœ”Qt€ry7–“FVMFVrœ– ŒXCLŠt uŠ1ylŠ”FjV1F+Št uŠ1ˆ“œ”QtMOŒœg“–uŠQyhœD W€HdDCtVIMFœh–O1‚IQLœ8HCF–DœhVXu1m7grdMHdœ”Q9Xd˜OŽ•€˜ “gH•OM398ˆD‚Wt+uWI1ŽD1ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹Vl–FœD‚3 tˆVTŽ˜D˜jQ–Qj3•QMlO–ŽŠtFFD7Œ3D”LW /OHlClj“gt‚ŽI8V/t‹Vt˜6Q+uWCHH”M7–V•Q”g7œŸCtˆ8g+–TMFŠQttQ9CtufD+–T–œQ”QjC˜j‚gVuDMQCXWQg1‹˜ ˜–F–QLdŠ”ŽxgDCjV1F+Š˜ˆuŒDult–•IOu8ŠtŽV8F”œH tIOuLŠrFTMF7tF O DFyD“FH–Qv”ˆ‘“jMrd‘CT‹hV1F/Il–xM”‚ŽQŒW“u/OQI“V”g˜Žt– E€FLFItd8”–Ÿ ˜–8COLF–Qj3•”QjIt–8CfuFVtˆm8Q Q t–˜t“ˆj” uŠ1ˆ“gDCvVQˆygrdHgˆV‚œrFqIOC/grFD1Œv –DO1QC”d‘g–WI1Ž””Fv8O‚“r‚W /lCgO‚ŽQŒŽOuX“D1DDŽuŠ1ˆ“gDCjDFˆŠjgXL”V+CCVQuœIOLItXyhœ–‚ DFB––ŽVtF”TŽg”1Ÿ–1Q –EVl–˜Cf–BD3‹vVtˆq“ vV1F+Št uŠ”‹d8f vV1F+Št gˆVLœH WIHFftˆTDEhœ–‚ DFfVOdHŒ8–”tH t€Fˆ/XŒŒQV‘œ8uOItuf–t‹•Œ1L”œuEˆF˜Cfj+IDˆ“gDCqC1CLŠt uŠ1ˆ“gDCjV”CŽ–jHtXLQgDCgMOˆffLM–+–rtutMˆŒŽ9tŽItX‚+V––OMOŒygt‹•MH‚vtF 9FF˜g“CID”C7gDCgIty39˜CI–1VQDfFHMOC/–rd•€r‹/trQO”M3–t‚x–fCxgDCjV1FyMXŽ+IDˆ“gDCj HŽL1ŽuŠ1ˆ“gDCjDFBœt QVtˆ9“–t˜yŸ–Qˆh –7l–FC”mŸDˆLV–M1FC‘fylrdLC7 hV1F/tH”rQvt–FhC˜63+VuCMQtgŽ˜CHW”•7–D1…QœuDC–FŽ8–TŒQ6QœrQtCt‹ŽŠ8–h€Dm”g˜ˆ+C8ŒxCDŽB–l–QV– IDCŸg1F+Št uŠ1ˆdgD–q QFœgrTD1ˆŸtt1‚ ruf–rTIDuLœy‚QL˜Œ“–ugˆu‚Vˆ œ”‹Ir‚h8fuW + M“D1xlj“gt‚Ÿ DW7rQv–Od3r‚Wtˆ‘ “Vu€OQV–l2tr–LIfˆBVtŽQ tˆ‚”–œ”FFDˆLV–M1r–FœtB–l–QV– IDˆvV1F+Št uŠ”‹“DD•OŒy–“FTIDumœ”‚•IO–8ŒO‹”C–ŒW8DlOLutOdŸglVvIt‹Mr 3rd3C”‚v”ˆyrQv–OQWœHŒ/ 8ŒŒg1F+Št uŠ1ˆdgD–qMOˆyg“VHM1Q“DFmIFLœŠj–7FQgD‹Ž–tQFI˜V3•”ˆxgŽ˜gf–Q–7“ –1 D‹8x”‹FœDu3 ”‹“gDCjV1F+lˆM ”‹“gDCjV”Cy–rFTŒ”d‘gD IMtuŽ8j–7FQgD HOŒˆC˜VIŒQV2Dt‚WŒOˆf–rLMFVŸg1CgIty39˜CI–1VQgQˆvV1F+Št F ”‹“gDCjV1F+Št ugXLWVXt€tuLŠtŽHŒ”hœlHh•Q…3VOdHŒ8–”tH t€Fˆ/XuHgˆu‚g1CHIrˆf–rLMFVŸg“FlV1Lfg“VTM“Wt–1x1m7D“FH–Q–/8”FH–F˜€fLID”Ch8l vV1F+Št rDt‹xgDCjV1F+9fˆxV”‹“gDCjV1F+”QDMQCtk3 8–hI˜œQtHCŽC–HŸ –M thQCXWQC–FFC7–hMrh”g8œ7C–HŸ–7VxCTWQœ–CyCty3–+–VDEQœH ŠCtuŽ––vDXQfF•CHFdŠ7D1g7–x8Q Q t–˜t“ˆ+I1ŽuŠ1ˆ“gDCjDFˆŠ“ VtXLmœFCjIQFŽ9˜VTŒQVmœrFqIty39˜CI–1VQgDg€tŒ˜tO‹vœtL/Xd3Om”x”‚“r‚WI+ ”rQv–Od3r‚Wtˆ‘ “Vu€OQV–l2tr–LIfˆBVtŽQ –M1Ir–˜DfyŸVDCQV– y gŽFœtB–l–QV– IDˆvV1F+Št uŠ”‹“DD•OŒy–“FTIDumœ”‚•IO–8ŒO‹”C–ŒW8DlOLutOdŸglVvIt‹Mr 3rd3C”‚v”ˆyrQv–OQWœHŒ/ 8ŒŒg1F+Št uŠ1ˆdgD–qMOˆyg“VHM1Q“DFmIFLœŠj–7FQgD‹Ž–tQFI˜V3•”ˆxgŽ˜gf–Q–7“ –1 D‹8x”‹FœDu3 ”‹“gDCjV1F+lˆM ”‹“gDCjV”Cy–rFTŒ”d‘gD IMtuŽ8j–7FQgD HOŒˆC˜VIŒQV2Dt‚WŒOufOLMHVLœH –1Lfg“VTM“Wt–1XCLŠt uŠ1ylŠ”FjV1F+Št uŠ1ˆ“œ”QtMOŒœg“–uŠQyhœD W€HdDCtVIMFœh–O1‚IQLœ8HCF–DœhVXu1m38“C–1‚3t– •QL8œlCuŠQuLœy‚QL˜Œ“–Š€tŠhœ”‚tXL2”‚IDV7œ7u–HŽD1ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹Vl–FœD‚3 tˆVTŽ˜D˜jQ–7C7 tDlITŽ˜D˜yŸV––d8”ˆHO–L8lŠŸ–QjW tFQ “–˜I”…Ÿ–7FŸ•Q •Ir–˜€OmŸ–7–WVtˆ•V1‹œ”FFIDŽ“ t–+ –C‘fu3rdŽœt hŠ”FjV1F+Št xIDujœ1 O€–F˜MO •Œ1L”œuEˆF˜CO V8F”œH tIOuLŠjFVWCHŽf7D”D7œQœr–‚C8 QD+–IŠlœQC–CvC8–dŒ8–CDQtrQvC7 ‚8–LŽŒ“CMFv”ˆ‘“jMrQ7DŽHF/OŽxx”‚Wg”L/t‹Dfu3rdŽœt xgDCjV1F+Š˜ˆuŒDu‚tFgMtCŽCO VtXL‚t–ŸV7VM•QDQt“–FC–F‚Œ–IŠly”g˜ˆ+C8ŒxC8–•7D”8X mC8–dŒ8–h–lQCl–ˆŠ”FjV1F+Št xIDujVX m€ty7VfLuŒ–œ1t8ut ”ŒffVTIDŒhXL/ly”x”QLfVWI+ 3fVu8OdQ8OLŸ Vyt 9XŽuŠ1ˆ“gDCjDŽL9XŽuŠ1ˆ“gDqM–FŽ€fjV€DuŽVˆQIrŒffVTIDu/tFg8”y3DrdMXmQDFQIˆFŽ€OdIŠ” Ÿtt1‚ ruf–rTItŽxgDCjV1Fy1ŽuŠ1ˆ“gDCjV1F+Š“FItˆydœ”11V1LyDr‹tXQ1DOh‚FLœDH‹TMFuWœ7j•C–ˆœDjIt /tFQIˆFŽ€OdIŠ”C7gDCgIty39˜CI–1VQDfFHMOC/–rd•€r‹/trQO”M3–t‚x–fCxgDCjV1FyMXŽ+IDˆ“gDCj HŽL1ŽuŠ1ˆ“gDCjDFBœt QVtˆ9“–t˜yŸ–Qˆh – ŠTŽ8CljFIDuŽ t–ˆf–VfjFID‹1•Q Šf–L ˜VQ–”Žm•Q‚I3Ž˜grLF–l‘•QQO–gr BœtCLVtFxVl–FŠl–8Ird3r‚Wtˆ“XCLŠt uŠ1ˆ“g”FqŠtCfŒ“FV–7j“gH • ry3€OdV–7Œ“tt1‚ ruf–rTIDyhœ”‚t+VxŒ”kQCFM”C–HŸ VuŒ”XQCˆCŽC8–dŒ8–CDQtrQvC7 ‚8–LŽŒ“CMFv”ˆ‘“jMrŽQg8CWIœv” Ir‚mg”u/t‹Dfu3rdŽœt xgDCjV1F+Š˜ˆuŒDu‚tFgMtCŽCO VtXL‚t–ŸV7VM•QDQt“–FC–F‚Œ–IŠly”g˜ˆ+C8ŒxC8–•7D”8X mC8–dŒ8–h–lQCl–ˆŠ”FjV1F+Št xIDujVX m€ty7VfLuŒ–œ1t8ut ”ŒffVTIDŒhXL/ly”x”QLfVWI+ 3fVu8OdQ8OLŸ Vyt 9XŽuŠ1ˆ“gDCjDŽL9XŽuŠ1ˆ“gDqM–FŽ€fjV€DuŽVˆQIrŒffVTIDu/tFg8”y3DrdMXmQDr1‚IrŒœ8rV˜Wg1CgIty39˜CI–1VQgQˆvV1F+Št F ”‹“gDCjV1F+Št ugXLWVXt€tuLŠtŽHŒ”hœlHh•Q…3VOdHŒ8–”tH t€Fˆ/XuHgˆu‚g1CHty38ˆMHVLœH –Hd+ŠtŽV8F”œH tIOu‘9O‚HgXmdtFCCHm3trTgX‚Wg“FŸC1CLŠt uŠ1y‚Š” vV1F+Št M€t‹dŠ”FjV1F+Št xIDŒŽ1d/tLC”QŽg3‹WI1ŽTfŠl8O‚QCq‹vVQL3rxœrQ/œ–vI“urOmQœr‹3 WXFrfVIDOdLt8CWQHvf–ItOQLtDŒŽHF/”Fv8O‚“rŽvCtX”C8–It‹xDt‹“gDCjV1F+” ŒgXumœ”QO XF+DrFTMF7tF O DFfg“VTM“Wt–1V”ŒygˆIVtFmD‹FIl–Q–7C7 tDlITŽLŠrQQVD–h t–IX‹˜ ˜–F–QLd83WEIH IIOuy8rh”g1 vC8V8C–3g”…QfF•CHFfœ8D1D”1QC˜ˆˆCtX”C8–It‹+IDˆ“gDCjV1ŽLŠHˆ–œhVˆ• DFfŒ“FDœQgD‹Lx”dB–”u/ – CIO–˜D˜XŸIDŽ“ t–+ t–˜ “–FI˜vVt–IX‹–“CBV8 mŠt‹“gDCjV1F+” Œgˆuvœ”1‚M”C‚ŠHVFŒ1‚Wœ1gOy3CO”tFCICHWŸ –vtyQttD”Ctu‚Š7–TI8ŠQ8qŽmCt‹f HCLŠt uŠ1ˆ“g”Fv HCLŠt uŠ1ulVˆ •”ˆ˜8t IFVQt8CgOy3CO IMFœh–O1‚IQLœ8HCF––L”t8Ct€FL˜Dt‹•Œ1L”œuEˆF˜Cfj+IDˆ“gDCqC1CLŠt uŠ1ˆ“gDCjV”CŽ–jHtXLQgDCgMOˆffLM–+–rtutMˆŒŽ9tŽItX‚+V––OMOŒygt‹•MFL”t8Ct€FL˜Dt‚MŠ1ˆŸtt1‚ ruf–rTI/VX•M–L8œ7V•MFLmœH9XL‚I7 +IDˆ“gDCq9DC“” uŠ1ˆ“8fFvDCLŠt uŠ1ˆ“g”FXt‹MrQ‘œ8 ŽDWvOŽxœrd‘CT‹Ÿ 8Vœ˜DQrdLtLŽrˆœ”L3Vrd‘Ctuv“ylfjuVrd”tFjWI–H7fCVx”dQtFŽI–FXt‚ur‹L1d/VluŸ7–CDQtrQvgQˆvV1F+Št uŠ”‹“DDqIOCŽŒ“ŒuŠQuLœy‚QL˜Œ“–uŒ1L”œuEˆF˜CO HgXmdtr–LIfˆBVtŽQ – ŠTŽC”QQ–1Žd8”–IX‹˜ ˜–F–QLd83WEIH IIOuy8rh”g1 vC8V8C–MIDEQtgŽ”C˜uQœ8–VtkQC˜ˆˆCtX”C8–It‹+IDˆ“gDCjV1ŽLŠHˆ–œhVˆ• DFfŒ“FDœQgD‹Lx”dB–”u/ – CIO–˜D˜XŸIDŽ“ t–+ t–˜ “–FI˜vVt–IX‹–“CBV8 mŠt‹“gDCjV1F+” Œgˆuvœ”1‚M”C‚ŠHVFŒ1‚Wœ1gOy3CO”tFCICHWŸ –vtyQttD”Ctu‚Š7–TI8ŠQ8qŽmCt‹f HCLŠt uŠ1ˆ“g”Fv HCLŠt uŠ1ulVˆ •”ˆ˜8t IFVQt8CgOy3CO IMFœh–O1‚IQLœ8HCF–H‚‘œ”1‚”ufŒrFTŒQ–vgH • ry3€OdV–7ŒhŠ”FjV1F+Š +IDˆ“gDCjV1F+Št –œhVˆ• DF+DjŒ”d28ˆŠQVFm3–jD8FŸtF9Š”––ŒjHgXFvgC9IrCŽ9˜CTŒ1VLœH –Hd+ŠtŽV8F”œH tIOu‘9O‚HgXmdtFCCHm3trTgX‚Wg“FŸC1CLŠt uŠ1y‚Š” vV1F+Št M€t‹dŠ”FjV1F+Št xIDŒŽ1d/tLC”QŽg3‹WI1ŽTt‚u“jWœT‹ŽIHF/Il–v rŽQC”uŽrˆœ”L3Vrd‘Ctuv“ylfjuVrd”tFjWI–H7fCVx”dQtFŽI–FXt‚ur‹L1d/VluŸ7–CDQtrQvgQˆvV1F+Št uŠ”‹“DDqIOCŽŒ“ŒuŠQuLœy‚QL˜Œ“–uŒ1L”œuEˆF˜CO HgXmdtr–LIfˆBVtŽQ tˆIt–Ž–“œŸœDQLV–M”IgŽ8ClŒQVtˆm8Q Q t–˜t“ˆB•7‘ŒQLmœH9+VxŒ”kQCFM”C˜uxI+–h€Dm”tFvCt‹‚g–MDhQ8fD3C8–dŒ8–CDQtrQvŠ”FjV1F+Št xIDujœ”QtMOŒœg“–uŒ1V‚œ”QOCDFBIg‹W8Q T“–˜8tF–Qˆd•”FxVl–FŠl–F–lVQVtFE”–FœtBœ–V78”DlIXˆvV1F+Št uŠ”‹“DDg”CŽ98C€DuOVD 9OCyD“jTMŒ“CFL8tVx•lœQlˆTC–FFC–T€DMQœrH1CDhŸI+–vŒlV+IDˆ“gDCjV1ŽLlV+IDˆ“gDCq ”Œ˜g“C–1Q“tr‚t –H7D“jTMŒ“tutMˆŒŽ9tŽItX‚+V––E ruŽVXŒTŒ”d‘œ8uOItuf–t‹•Œ1L”œuEˆF˜Cfj+IDˆ“gDCqC1CLŠt uŠ1ˆ“gDCjV”CŽ–jHtXLQgDCgMOˆffLM–+–rtutMˆŒŽ9tŽItX‚+V––OMOŒygt‹•M“”œrQ ˆH3€fjVM“ŒmttQEXL‚ ” •Œ1L”œuEˆF˜Cq‹•MQu‚Vˆ –H‹LVOQV–l2tFCX‹l” uŠ1ˆ“VFˆvg1F+Št uŠ7dg” vV1F+Št uŠ”‹“C˜ˆ+C8–vM“DQOF”C–L+8–MI8œQœgŽfC8V+Š–V€8œQ+uWCHH”M7–V•Q”g7œŸCtˆ8g+–TMFŠQttQ9CtufD+–T–œQ”QjC˜j‚gVuDMQCXWQg1‹˜ ˜–F–QLdŠ”ŽxgDCjV1F+Š˜ˆuŒDult–•IOu8ŠtŽV8F”œH tIOuLŠrFTMF7tF O DFyD“FH–Qv”ˆ‘“jMrQŽg3‹WŒTr‹ugOd‘8fu/t‹Dfu3rdŽœtL” HFE–F˜€fLIVtFmD‹FIl–QD7Œ‘VtˆVTŽ˜ rQVt “V– C ˜–FœtB–l–QV– IDˆvV1F+Št uŠ”‹“DD•OŒy–“FTIDumœ”‚•IO–8ŒO‹”C–ŒW8DlOLutOdŸglVvIt‹Mr 3rd3C”‚v”ˆyrQv–OQWœHŒ/ 8ŒŒg1F+Št uŠ1ˆdgD–qMOˆyg“VHM1Q“DFmIFLœŠj–7FQgD‹Ž–tQFI˜V3•”ˆxgŽ˜gf–Q–7“ –1 D‹8x”‹FœDu3 ”‹“gDCjV1F+lˆM ”‹“gDCjV”Cy–rFTŒ”d‘gD IMtuŽ8j–7FQgD HOŒˆC˜VIŒQV2Dt‚WD–Fœ8“LHMF‚tHC“IQFŽ9˜VTŒQVmœrFŸg1F+Št ugfCxgDCjV1F+Št uŠ1u‚tFgMtCŽCO •gˆuvœ–C ˆjW9t‚ItˆuBœugOMhg–Œtˆyhœ”F“rCfŒ“LM”Œ”œ”QŒHd+ŠtŽV8F”œH tIOu‘9O‚HgXmdtFCCHm3trTgX‚Wg“FŸC1CLŠt uŠ1y‚Š” vV1F+Št M€t‹dŠ”FjV1F+Št xIDŒŽ1d/tLC”QŽg3‹WI1ŽTfŠl8O‚QCq‹hV1F/Il–xM”Q/œ–vI“urOmQœr‹3 WXFrfVIDOdLt8CWQHvf–ItOQLtDŒŽHF/”Fv8O‚“rŽvCtX”C8–It‹xDt‹“gDCjV1F+” ŒgXumœ”QO XF+DrFTMF7tF O DFfg“VTM“Wt–1V”ŒygˆIVtFmD‹FIl–Q–Qj3•”Fq˜–FŒ˜jQVtˆm8Q Q t–˜t“ˆB•7‘ŒQLmœH9+VxŒ”kQCFM”CDdL8–V•lœ”gD C8Œ88DQDDQœ8œQC–LŽ1CLŠt uŠ1ˆ“g”FqŠtCŽ–jHtXLQgD O€tCŽŒ–u8”HvX‹˜œr‚Q–1QmV– ŒgŽLg” QVDCQV– ” t–L€O‹FVtˆm8”ˆt1‹FC”j” uŠ1ˆ“gDCvVQˆyDr‹8H7œlFqŒr–f8rdgˆuhœy1V7VIDQm”g3Ž”Ct‹dœ–VV8œQœ“F+CtuLC+–M•”…Q1 ”Š”FjV1F+Št xIt‹”Š”FjV1F+Š“ H–1L7œ– CVQL/–“–VMQuhœy1VQm3–jD8FŸtF9Š”–t8rdTŒQV‘VX tI1Ž+DrFTMF7tF O DŽŒ” uŠ1ˆ“V˜ vV1F+Št uŠ1ˆ“gD•OŒy–“FTIDˆŸVX mOC‚MqŽœMrŒWVXDQ FLf–“LŒrdqVXg€DŽ+VfLI–lWt8CgˆL+œlCuŠQuLœy‚QL˜Œ“–Š€tŠhœ”‚tXL2”‚IDV7œ7u–HŽD1ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹L8lŠŸ–QjW – D‹8t…Ÿ–l–Ž – HI1‹V”…ŸVDCQVt–IX‹gr BœtCLVtFxVl–FŠl–8Ird3r‚Wtˆ“XCLŠt uŠ1ˆ“g”FqŠtCfŒ“FV–7j“gH“V”ˆ˜C8jI–”ŒWœ”Fqt8–IMFXQDCyŠ”FjV1F+Št xIDujœ1 O€–F˜MO •gOŽ“œ–QMˆL˜VOdIDuIC–m3D8–dŠ1+IDˆ“gDCjV1ŽLŠHˆŒ1V‚t–hV1LfŒjHgXF“t–•€–FœI”QlFyCtX”œ8–V€8D”t– 9CtufV8–vŠ”EQtgŽxC–F+9+l€D1Q8OFjC8 QM+–h–lQCl–ˆC7 ‚88–TŒ”DQ1C/C8–dŒ8–VŠ7…Q8OH”CtuLŒ+–TŠQDQtVMC˜jFMFLŽŒ“CMFŸ Dd3˜CdgOQ/gt‚WV1dEMOC/–rhQ8OH”CtyŸŒVŒ7QfF•C–F+9+l€D1QtDMECDdLC–MF…QC“FŽCDdL€8–hV8yQtgŽ”CDh3x7DQD”k”tDCCFF˜8D”€tQx –Ml3Žœ“œŸD7 Q•”ˆˆITŽ˜ OhŸV˜Ch –M1” vV1F+Št uŠ”‹“DDqIOCŽŒ“ŒuŠQy1œF lV”M7D“F–7–/gD‹˜I”LFV––d8Q EITŽ˜CtdFVtˆmŒr9–XˆvV1F+Št uŠ”‹“DD•OŒy–“FTIDumœ”‚•IO–8ŒO‹”C–ŒW8DlOLutOdŸglVWHŽ‘ly”tOd/tHŒŽ1Frr 3r‚ŽQŒŽI–FXt‚ur‹L1d/Vlu/fylr‹7œD/t‹DtdTŒO‚QCˆˆxgDCjV1F+Š˜ˆuŒDyhœD• rŠ78t gtO‘tFqMOˆ˜9˜–u8”Q–t–L “yŸœDŽŽ•Q y ˜–˜9O Q–7ŒQ8QMv”–Š“ul” uŠ1ˆ“gDCvDdl” uŠ1ˆ“œ1tItufOLuŒQmdœrQ9MOˆ˜9˜–uŒ”ŒWVXDQ FLf–“LŒrdŒœC9OŒffVTIt ŸVDClV1LyIlCuŒ1V‚œ”QOCDF+DrHgˆu‚DˆV1VXd+ŠtŽFŒ7ˆ7DˆQMtuf lj+IDˆ“gDCqC1CLŠt uŠ1ˆ“gDCjV”ˆ˜tt xŠ1–ŸVDd1Ž8Š +IDˆ“gDCjV1F+Št uŠ1ˆ“gD WDF+V”•gO1œHCj9DF+DjŒ”d28ˆŠQMtˆtVfjIŒ”ŒWVXC1Ž8I” F ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št –œhVˆ• DFO OŒB ”‹“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV”VŒ” uŠ1ˆ“gDCjV1FfOQxgXu‚tF HVru˜ŒjVMrrt– E1Ž+œlVŠŒ“ŒFDOhhF63g“VH–7–ŸœlmhI–O”‹œŒQˆ3gQClQfD˜ux–“HtXV7QfD˜uxDl vtX ŒHŽt€OŒufŒFDOhh–j2CfVD”C7gDCgCOu˜ lCuŠQu1t–gIrˆf–“LMŠ1uŒ–tŽtgˆ…d8HVtŒFŠ–tŽgŒF–LIljF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjIQL˜€OdT–QVQVXCVQj8Šruœ–fCxgDCjV1F+Št uŠ1ˆ“gDCjVQLŽ9˜FI–1V‘œDCj1LfMtHŒ1‚vtFCVQFœ8t •Œ”hhtFhO–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV”ˆ˜tt xŠQy1DOmhI”ˆœDrdT–“CEtˆCjDLLŠtŽFŒf‚gH WMˆL˜MtuCM8j“grFVV1LyI3ŽŠDQuhVX t ˆ 2grŒuŠQFŽgDCgC–jXMOŽtˆuWœFV7Mˆ8+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“tr1‚€–L˜ŒrLŠ1ˆvgH OMOŒygt VtXQ“gH OMOŒygrVTDV1tFCj9–jLŠtŽHDV7Vˆ –O–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCqˆLLŠt‹tX‚rtt1‚ ru+V”ŽHDV7Vˆ –XŽœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ7”trQO”M3tOŽQ8fuŽlˆyt‚urd“8fL” HFEMOC/–rhQ8OH”CtyŸŒVŒ7QfF•C–F+9XCLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Š“jIIDˆvgHIIOuy–rdxtfCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Š“jIIDˆvg–q€–L˜VOVT–1œht8u“1L‚9O‚MI–umVXg€–…3CtT–Q–Qg“mhI–dCOFœDlMvgtH‚XL‚ ” •Œ”hhtFdœHQOMfCuŠQyhtFd 1Ž8+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŒ1‚”œr‚gOu/–rduŒXHlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“VFˆvV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjVQL˜€fLItfCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Š“jIIDˆvg–q€–L˜VOVT–1œht8u“1L‚9O‚MI–umVXg€–…3CtT–Q–Qg“mhIDFL9˜j•€˜ “gH WMˆL˜MtuCŒj7gDCgMˆL˜M˜ xD”hlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD 9 ru/D“jTFVWgDŒuC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“VFˆvV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV”VŒ” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD t”M3– +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1uhtrFj”ˆœ8rVMQu‚œ–QHŽ+DuV–l…dtFCŸO–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD WDŽ+Œ“LHŒ1œhœ– CCH‹W9˜jM8F1t–gIrˆO9tHgˆu‚g1CgOŒf–“Œ˜€HuH8XCqœHLfŒjHgXLrœrQO ˆLDMqŽ•gˆLmœHtˆ8IljF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1u‘œyQMOˆ˜C8ˆID1ˆ‚8l vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1Ff–“CMFœlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št VMFQVX W tŒ˜–t CI“CxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“VFˆvV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸtF EOu˜–“–HgX‚TtˆCj9DFfCtdH€DyQœ– EMtCfIf œMHVŸtth‚Ouf–“ŒI–7Dhg1CgOŒf–“Œ˜€HuH8XCjI”ŒfIfj€tWlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“œ”QtMOŒœg“–uŠQuWœH t ˆL˜C8j€“CxgDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“tF E€FLœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“œ”QtMOŒœg“–uŒ“ŒH8l vV1F+Št uŠ1ˆ“gD…hg1F+Št ug+jxŠ”FjV1F+Š˜VxIt‹xgDCjV1F+Š˜ˆu8”ˆ“ t–8“uQIDŽ“ t–+ t–FœtB–l/ tˆjqŽL8lŠŸ–QjW tFQ “–˜I”…Ÿ–7FŸ•Q •Ir–˜€OmŸ–7–WVtˆ•V1‹œ”FFIDŽ“ t–+ –C‘fu3rdŽœt hŠ”FjV1F+Št xIDujœ1 O€–F˜MO •Œ1œhVX•ˆF/–jItXQ“t–•€–FœI””g˜ˆ+C8ŒxC8DQDDQœH FCt‹+l€DQVtˆyhœl–8Cf–Q–l/ tˆjqŽ˜DtLFVt‚783WEIHIIOuy–rhQ8OH”CtufV8–vŠ”EQC˜ˆˆC–F+9+l€DQTŒ”d3tr–8Cf–Qœ–F3•Q Œf–”‹FV˜LL tˆrO–L r‹Q•7‘8”1lD‹L ˜jBD7ŒQ–LmœH9+Dlg3WQtt–fC˜6Ÿ+Vx•”H1CXC+Š”FjV1F+Št xIDumVXg€8–V•lœ”tDC•C–F+9+–h€DmlClFœ–QIQLœIrL“gDœhtFmM+Š1Š1u–V2œCt€–H3–˜Œ–QŒ‘V1FOIrufŒ“L•1‹jVQqIˆH3 OIMF‘V1FOIry3C8jI–7Dh8ˆ gOM3DOL“gDV‘œD tIrX3ŒrFTŒQ‘V1FOIrˆf–rLMFVŸC+Œ+ŠFH3€fjVM“ŒmttQE+Š1Š1uI–7–mttQEˆLB81ˆ“–QL”t8Ct€FF˜g“CIVD‹jVQ I FH7–“LI–QŒ‘V1FO€FH7g“VTŒlmttQE+Š1Š1uTŒ7FQt“HdIrufOLMHVLœH œIr uŒ“ VtX‚2V+y‚€–LB81ˆ“tX‚WœH tIrŒf–rŽ+IDˆ“gDCjV1ŽLŠHˆ–œhVˆ• DFfŒ“FDœQgDCgIOŒyD“F–1mdVX œIl–Mrd‘tFŸ DŽ3”Fv8O‚“r‚Ž+ TlœQ–OdŽC8 WIHFœOŽx r‹L1d/Vlu/fylr‹7œD” HF‘Om”x”‹“C7CWXL3Il–x“V”gt‚/t‹DIl–uŒO‚QCQŒŽOuX“D1–fV”g˜ Ÿt–gMOCŽOFHtˆuWCDdLC–D”XQ8OFdCHFdŠ7D1g7DQœH FCt‹+–hV8y”8qŽ–C–LQV8–MD1QClDhC˜j˜ 7–vM“DlClFCCtk”D7–VI–…”œD”CtudD+l€DHQˆ lC8 QŒ8DQDD”tFCQC–L+8l€DmQ8OFBgH OMOŒyg“jVFœhtr–89O‹B–1VhVt–IX‹8CO Bœt 1•3WEIH‹˜IlCFI8jhVtHvX‹˜œr‚QV˜jQ tˆt1‹FC”j” uŠ1ˆ“gDCvVQˆyDr‹8H7œlFqŒr–f8rdgˆuhœy1V7VIDQm”g3Ž”Ct‹dœ–VV8œQœ“F+CtuLC+–M•”…Q1 ”Š”FjV1F+Št xIt‹”Š”FjV1F+Š“ H–1L7œ– CVQL/–“–VMQuhœy1VQm3–jD8FŸtF9Š”––ŒjHgXLhtt‚tMˆLœ8t‹VtXL‚t–ŸV1LfŒjHgXLhtt‚tMˆLœ8˜j+IDˆ“gDCqC1CLŠt uŠ1ˆ“gDCjV”ˆ˜tt xŠ1Vhœ7X‚IOC/grFD” Ÿt–gMOCŽOFHtˆuWœlFŸO–l” uŠ1ˆ“gDCjV1F+Št uŠ1yhœD• rŒ‚Š“–ItOC“DFmIFLœŠj–7FQg1CIQFœDjtdLVˆgOC‚ŒOd‘CXdŽOuXOd•r‹3CT‹” HF2fœ1tfjvœ“VŸ Dd3tdTŒO‚QCˆˆ/gQŒ7g1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1Lft“jHEhgDŠhVQH7–“F–VQVXC“IQFœDjtdLVˆgOC‚I7 +IDˆ“gDCjV1F+Št M€g‹ŽDWvOŽxœrŽQgDŒ/ 8 DtdTŒO‚QCˆˆxgDCjV1F+Št uŠ1ˆŸœ–9–Oˆ˜Ct‚TŒQ–“DˆCq–F˜€fLI–fCxgDCjV1F+Št uŠ1uhtrFj1F˜fLœMHV‚œ”QOCDŽ+DrQtXL2VXCŸO–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸt–gMOCŽOFHtˆuWœlFj9DFO”ŽVtˆyhœ”QWItŒœDrdM86lŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+D“jMD‚hœrQHQL8Š8Fugˆu‚Vˆ –C1CLŠt uŠ1ˆ“gDCjV”VŒ” uŠ1ˆ“gDCjV1F+D“VgˆuhœyQ€HFXMO ˜€tŒ7œ– 1XL‚ ”‚–7–ŸtF“Hd+V+jItO…hg“FlrCŽ–“LTMQV‚t8u– Oˆ˜Dt‚MŠ”Œ‘œH O€rC‚œlC•M1umt8u1Iˆm3–t‚MŠ”Œ‘œyQMˆL˜C8jM–QuWœ7uCHd+VOLŒQV‘œ8uOItuf–t‚MŠ”Œ‘œD tIrX3–rŽ•€˜ /t8uEˆH3 OV˜Wg“Flg1F+Št uŠ1ˆ“gDCjV1F+Št •MFVQt– •QL˜Dt‚MŠ”ŒŽœu9MtM3ŒrFTŒQ–/8XCHty38ˆMFVŸg“FlrM38“FTM“7t– •QL8œlC•M“”œrQ ˆH3€fjVM“ŒmttQEXL‚ ”‚Œ1V2œ7CH rCŽDt‚MŠ”Œ2tF EˆH7DrdIŠ”ŒH8l vV1F+Št uŠ1ˆ“gDME –d81XQqŽWCtufV8–vŠ”EQOF”C–L+8–CH1QˆhŠ”FjV1F+Št uŠ1ˆ“tr1‚€–L˜ŒrLŠ1ˆvgH OMOŒyg“jVFœhtFCVQFœ8t •ŒlŒWV–Šh•1Lf+jI–7jhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+ŠrQTM1LWt– 91F+V”ŽtˆuWœFCqIOC‚ŠtŽVtˆyhœ”mh•1LytrTgˆVWgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD WDF+V”–7–rt–•€–FœI”‹•Œ1œhVXu1F+D“VgˆuhœyQ€HŽ8+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“VX m€ty7œ” T–œ7gD–tCˆH3–“ HŒ”d”œrF“–V•1MQˆ lCFL8tVx•lœlClFCC˜jFV7–dMrWQœH FCt‹+l€tˆ•€8ŒŸt–gMOCLI7 +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠF+IDˆ“gDCjV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCjV1F+Št –QF“g1 t OCyD–xŠQuhVX t ˆ ‚VfC–lŒWgXhXŽœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+DrHgˆu‚œ– •MtŒf–“L˜€–u3tFWVˆ ‚VfC–lŒWgXhVQj8ŠrQV–l2tFŒ7g1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCqOuy8rdF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št •Œ1œhVX•ˆF/–jItX‚TgH 1O–tMtu•M“hœ8u–F8Š8Fugˆu‚Vˆ –C1CLŠt uŠ1ˆ“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1y‚Š” vV1F+Št uŠ1ˆ“gDCgCOu˜ ” ŠD1ˆŸVX mOC‚MqŽH–”dœœ– gFLœD“LxŠ”WlŠ”FjV1F+Št uŠ1ˆ“gH•OŒy–“FTIDX‚gDV1VX‹l” uŠ1ˆ“gDCjV1F+9fœQœVdC8Š” –d•Q6Q8OFjCDdL8VuDMQCXWQŠ”FjV1F+Št uŠ1ˆ“tr1‚€–L˜ŒrLŠ1ˆvgH OMOŒyg“jVFœhtFCVQFœ8t •ŒlŒWV–Šh•1Lf+jI–7jhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+ŠtŽTMHLdtF 9Mˆˆœg“FuŒ+j“–7XhC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ7”Cty”8D1C“œ”g˜ˆ+C8ŒxC8DQDDQgŽŠCDdLŠ8–MI˜XQœH FCt‹+HCLŠt uŠ1ˆ“gDCjV1F+Št uŒQL”œ”QtIˆH3V” xŠQuhVX t XFfŒ“LuŠQumVXg€–jDCOŽHDV7Vˆ –O–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV”ˆ˜tt xŒ”dQt+uO€tCŽŒ–xŠQumVXg€Dd+Šru•M“hœ8u–F8IljF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD 9 ru/D“jTFVW8l vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“VFˆvV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“œ– VV1Ž+D“VV˜jWt8CgŠrC/g˜jF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCgMOuœŠHuHF“DˆCqœFD1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1uŽœC•ˆF˜8r‹uŠ” Ÿœu•–L˜8jŒtXL‚gD O€HF+D“VVt‹hV˜ vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸœr1‚IQL8Š8FuŠQu”ttQv ˆjŽC˜VIŒQVVœF l1ŽD1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1LyD“ŒŠ1X‚gDCgOŒf–“ŒB ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠˆTH‚WVXC“I”ŒfM˜ ˜€tŒ7œ– 1XmdMfjB ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Š“jIIDˆvœ7CgIOŒfOLBI“jrœ–9Vru˜ŒjVMrrt–gMOCLV”ŽT8FŸtFClV1LyD“ŒŠ”ŽhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1LyD“ŒŒDV‚œ”d1VXFXMO •Œ7FLœtL7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“VFˆvV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1uhtrFj1F8DjTtXuqœ”‚uO–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCqItCŽ–r€Dˆ‚8l vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸœu•–L˜8jŒtXL‚gDŠhV1LyD“ŒŒDV‚œ”L7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD t”M3– +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“œ– VV1Ž+DjTtXˆ“DˆCjI”ŒfIfj€86Ÿt+uHOŒˆC˜VIŒQV2Dt‚W8tˆ˜ OdŒtˆyhœ”F“IQFœDjI˜ “gHIIOuy–rdMŠ1ˆŸœ–gOut”‚TŒ”d3tFCHVXd+ŠtŽFŒ7ˆ7gQCŸV”–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjI”y3g“ˆI–1EhD–•€DFXMO •gˆu1œ1Œ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠF+IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“tF E€FLœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjVQF/grdV–lC“8tL7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠF+IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠF+IDˆ“gDCjV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCjV1F+Št •gXLWVXt€tuW”ŽMFœQtˆCj9DF+D“VV˜jWt8CgŠrC/g8 +IDˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŒ”dŽgDC“I”ˆœ8FŒ–7–/œH –O–l” uŠ1ˆ“gDCjV1F+Št uŠ1u‚tFgMtCŽCO VtXL‚t–WVrCf9˜ xŠQu‚tFgMtCŽCfjB ”‹“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1u‚tFgMtCŽCO •gXLWVXt€tu‘1ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹–OLFD7F/8”ˆCIt–Ž–˜u“” uŠ1ˆ“gDCvVQˆyŠrDV1gDCjI”X3––VMFŸtFCqOu/DrdIMFV‚gD‹8tFF––3 tDEf–FV” F•7‘8”QXD‹˜gtQœDQLVtQ–“–F9OdQVt “V– ŽVl–8COFl” uŠ1ˆ“gDCvV7–h 86Qœ–Cœ8utC–H39tŽIVtF/V”DŸ9OQŽI+jHgXu28”HE FLf–uI–l”œ1 t€DdŽŒ“–IgXL”œ– Œ –H39˜ŒMM1LWtrQt€–L˜CtLID7FmœrQg€ty3OŽMMQLhtF FM3––gtˆLWœr‚Œ tˆyD“ŒTŠt‹“gDCjV1F+”Q”F˜C7 ‚œtˆyDjgX1”8fH‚Ituf9t‚MD‚2tH1 tuŽ–jMM“”VOQtVr–y8“MMHV‚VX WIruf–˜VIŒQœht– W”C‚9+CCIFX381Œ€H‹Œ” uŠ1ˆ“gDCvV”X3––VMFŸtFˆ/OŽx rŽQttŽxgDCjV1FX8DL8Œ8F9DFCXOdxCXŽuŠ1ˆ“gDŒŒgVM•QDQt“–FCFL8 DCLŠt uŠ1XdŠ”–grWŸ–7“8”ˆMD‹˜DfŠŸ–7VW8”––DˆvV1F+Št 9V”‚ŽIHFMtddM”‚W8ˆvDhg1F+Št uŒXHhŠ”–˜It‚Q–1Žv8”Qr3ŽŽgOLl” uŠ1ˆ“8tL–gVIDEQ8+uBCFmŸ€VVV–j+IDˆ“gDCj€D‚“r‚W8ˆŽ ˜jXOdxCXŽuŠ1ˆ“gDŒuM1CFœDd‘Vt–OqWŸ9OFBtC“8”FŽV”–˜œlˆBVtuQ8”ˆ ˜–˜CrdBV––d8”QyIHkŸ9OFŒ” uŠ1ˆ“8rLugVMCFŠQt– WC8VŽC–dŠ7+IDˆ“gDCjMH‚jrQLtFjW HFX˜ŒVx”‹hCOLWtˆ“g1F+Št uŒˆH3Š”–˜œr‚QI8Fh tˆ9l–LIOLj” uŠ1ˆ“8rLg–VIt”trQŸŠ”FjV1F+Š8ŒCV”‚vI–2OLItfjWg7ŒxgDCjV1FXV7ˆ+Vtˆ8r––˜VLx”QŽ1dWVQLlg1F+Št uŒO3Š”–˜Šr‚Bœ˜Œv tˆ8r––˜V“” uŠ1ˆ“81Œg–hglŠQˆMŸCDdL8+–MIDX”œtˆ˜Š”FjV1F+Š8ŒBŠt‚ŽIlX7tdMC”ŽQg˜uŸ DFXfjhtDŽuŠ1ˆ“gDŒˆ€DQ“r‚hClVWI˜ˆ‘OVrQvgtVWIDdX”‹V€“jhOuŽIDLTOF•Vr‹vœtLh”uTO”V1ŽuŠ1ˆ“gDŒˆ€DQlr‚hClVWI˜ˆ‘OVrQvgtVWIDdX”‹V€rQ/glVŽIDLTOF•Vr‹vœtLW ˜jœO”V1ŽuŠ1ˆ“gDŒˆ€D‚“rQ“œDdWXH7tŽdM”QW8+ŒxgDCjV1FXŒ˜F9 ”‚Žt‹MO I€rQŸ8CŽXh1g1F+Št uŒXD38Hˆ/O‚I“j/C1QxgDCjV1FXŒ8C9V”‚ŽI–LŠfVuŒO‚7ClV/ 8Dvlu3C”‚”œ8ŒxgDCjV1FXŒ8Œ9 ”‚WIDFrtL8OdQˆŒ/XŽ“g1F+Št uŒXFl8“ /tFIDOd”gDŒvVQLD“Ml rŽQr‹xgDCjV1FXg˜ BŠt‚ŽI–LŠfVuŒOQWCFWIr‹Vg1F+Št uŒXFl8Qˆ/tFIDOd”gDŒh ŠIl–IŠDŽuŠ1ˆ“gDŒu€XQjrQLtFjW HFXludgO‚3OVWtˆ“g1F+Št uŒXF‚8Dˆ/OQVM”Ž”t8 WQHvf–ItOŽQ8 W ˜ˆVg1F+Št uŒXF‚8–ˆ/tmQŒfjdCtLWQHvf–ItOŽQ8 W ˜ˆVg1F+Št uŒXF‚8˜ /“Ml r‚QCg‹Ÿ HLyr‚xŠDŽuŠ1ˆ“gDŒu€D‚jr‚“r‚Ÿ ˜XlfCVx”dQtF–xgDCjV1FXg˜LCDt‚ŽI–LŠfVuŒO‹3CCh ŠOFdrQLt˜CxgDCjV1FXg8C9V”‚WO‹Mt‚h€rQ7DŽHFŸV”Š3Œ“uI–l”t8u7V7–VI–m”g7VhC8 BC7Dl tœQ8fFgC8–‚V1CLŠt uŠ1ˆ“g”FqŠtCŽ–jHtXLQgD • ry3€OdV–7Œ“Ct‹LD8–Vtœ”8qŽ–C–LQVtŒygˆIVgWEIH‹˜IlCFI8jhVtˆxgŽ˜gf–Q–7“ –1 D‹8x”‹FœDu3 ”‹“gDCjV1F+” Œgˆuvœ”1‚M”C‚ŠHVFŒ1‚Wœ1gOy3CO”tFCICHWŸ –vtyQttD”Ctu‚Š7–TI8ŠQ8qŽmCt‹f HCLŠt uŠ1ˆ“g”Fv HCLŠt uŠ1ulVˆ •”ˆ˜8t IFVQt8CgOy3CO MFœQtFIOu/Dt‹•ŒlŒWV– 9 FLf–˜j+IDˆ“gDCqC1CLŠt uŠ1ˆ“gDCjV1LyDr‹tXQ1DOQOIQFW9˜LŒQV7œHC“rˆ˜C˜ Htˆˆ“œ8utC–LœtrdTFˆ“g“H1I”X3––VMFŸtFCŸC1CLŠt uŠ1ˆ“gDCjV”CŽ–jHtXLQgDg€tŒ˜–8 +IDˆ“gDCq9DC“” uŠ1ˆ“8fFvDCLŠt uŠ1ˆ“g”FX˜DQgOdLtLWQHvf–I–DŽuŠ1ˆ“gDCjDFˆŠ“ VtXLmœFCjV1LyVluŒ”dQVX tFLœgt”8ˆ7CtˆF8+D1g7DQtuŒC˜ˆ+g+DQD–F8QM‚Ir–F9˜u“” uŠ1ˆ“gDCvVQˆyŠrDV1gDCjI”–DŒt –7DhtF HOCLŒO‹1œrVW+Œ”r 3rd/tHŒŽ1FrrQvDDQ8+u9C83 DCLŠt uŠ1ˆ“g”FqŠtCfŒ“FV–7j“gDCgCXQLŠ“jTFuWtut€DFBV8 Ÿ•”ˆHTŽFŠl–F–”ŒŸ8”ˆ“IqŽFœtyIrŽ”t8C/ rX1g1F+Št uŠ1ˆdgD–q QFœgrTD1ˆ“gHŸ€DFff–HŒQV/tFuV7Dl –ŠQ+urC8ŒxC8–IMFXQDCyC8–dŒt–FD7F‘VtD‚r vV1F+Št uŠ”‹“DDqIOCŽŒ“ŒuŠ1ˆŸtHt€–FœD“jTMŒ“œ–QMˆL˜VOdIDŒŽ 8–yOFdIr‹”COV/DF”tLugO‚QCCŽ+ TOhl–fV”g˜LWIFLœIlVVM”ŽQ8fuŽV”“6Q8OL“gDdŽIt‹3lŒTVrdhCfV/Vlu/OŽv€r‚QC–jŽFmvr 3r‹3 / rXlIl–uŒOQv8OV/t‹D “Vu€rQ‘gD/ 8œ7thlœ“jWCQŒhOyvIl–uŒO‚“r‚WIœvlŒTVrdL8XŒhOyvtLurQWttLŽ“jlg1F+Št uŠ1ˆdgD–q€–LœDˆ8Œ“tt1‚ ruf–rTIDŒŽIDLXOFhx”‹”C–ŒW8DQMOC/–rhlClFCCtˆ8€+VMD”hQlˆTC–FFC–T€DMQœrH1CDhŸI+–vŒlV+IDˆ“gDCjV1ŽLŠHˆHŒ”‚œCH€HFˆ–ŒVMFVlVX W ruLŒfjWgr‚vœvtFh rdmCluW HFMf–MIrŽ”CHŽV”XEg1F+Št uŠ1ˆdg”HEg1F+Št ugXydttQEˆF‚ŠrQH–7–‘VX W ruLŠ“LHMrdltFC“I”–XŒ˜CuŠQyQ8–ClV1LyVlFMŠ1ˆŸV–Œu1F+DrŽHtXLmVX W ru‘MfFCŒXˆhŠ”FjV1F+Š +IDˆ“gDCjV1F+Št •gˆuvœ–C ˆjŽŒrŽV+F2œD t”u+V”F–7–lVˆŒV”M7VfjŒQ–“gH“€XF+D–CD1ˆŸVDŒuV1LyIlFuŠQuŸVˆ•IOŒffVTIDFh8l vV1F+Št uŠ1ˆ“gD•OŒy–“FTIDyhœ”‚tX‹l” uŠ1ˆ“VFˆvg1F+Št uŠ7dg” vV1F+Št uŠ”‹“DDQIOu˜–tQtHCgC–HŸ€–3 –yQt˜ˆvCtufD+–T–V+IDˆ“gDCjV1ŽLŠHˆIŒQV2t˜FXIlD1C”Q78ˆŒW tuŠrQv–Od1Cruv “u/Ir ugOd/1d/8 DrQv–OŽQg7Ch+ DOŽ•gOd‘CQjŽ 8–yOFdIrd7tg‹W –L–g1F+Št uŠ1ˆdgD–q QFœgrTD1ˆ“gH gMtCŽŒj–7FQgD W tŒf–r‚ItXF“C˜uQD–Vtk”8qŽyC8VL8+–v€DyQCl–1C˜jFMVIV86lClFCC–H3––MMHEQ8OH”C˜XŸD”V–M1CXC+Ct‹dg7VM–7MQœt–MC8ŒxC8–Ig11QCl–DC˜63VD1g7D”g7œŸC83 8–MIDXQDM7C8–dŒ8l€D1QlFqC8 Q +–hV8y”trDhCFL˜x7–MIDXQCXWQC–HŸ VM–7MQttFlCFL˜x7–v€DmQˆ uC˜6”œ1CLŠt uŠ1ˆ“g”FqŠtCŽ–jHtXLQgD • ry3€OdV–7Œ“Ct‹LD8–Vtœ”8qŽ–C–LQVtŒygˆIVgWEIH‹˜IlCFI8jhVtˆxgŽ˜gf–Q–7“ –1 D‹8x”‹FœDu3 ”‹“gDCjV1F+” Œgˆuvœ”1‚M”C‚ŠHVFŒ1‚Wœ1gOy3CO”tFCICHWŸ –vtyQttD”Ctu‚Š7–TI8ŠQ8qŽmCt‹f HCLŠt uŠ1ˆ“g”Fv HCLŠt uŠ1ulVˆ •”ˆ˜8t IFVQt8CgOy3CO M”Œhœ1 t–tydg“jIMr…hg1CgI”ŒœgrHŒ”d”œrmh€DQXŠ˜j+IDˆ“gDCqC1CLŠt uŠ1ˆ“gDCjV1Ly8rL–VWœrd9O–Ž–t ŠD1ˆŸVX mOC‚MqŽMH‚‚tF t –D3+VID” h8l vV1F+Št uŠ1ˆ“gD•OŒy–“FTIDˆŸVX mOC‚MqŽM”Œhœ1 –1QDŠ˜CuŒ”dQVXIIOu+V”ŽMH‚‚tF t –D3+VI–“CEtˆME€DŽ8 ” –7DhVOQO1Ž+D“LVM1LWtFQ–OˆœOd˜€HuHgQClV”ˆ˜C8jHDV7g1Cg€FH7grdI–7–Dœ–hˆ 2ŒrŒM€HFh8XCjIQLy–“FVtˆuhœy1X‹l” uŠ1ˆ“VFˆvg1F+Št uŠ7dg” vV1F+Št uŠ”‹“DDQIOu˜–tQtHCgCtuF8–3 –yQt˜ˆvCtufD+–T–V+IDˆ“gDCjV1ŽLŠHˆIŒQV2t˜FXIlD1C”Q78ˆŒW tuŠrQv–Od‘CQjv “u/Ir ugOd/1d/8 DrQv–OŽQg7Ch+ DOŽ•gOd1CruŽ 8–yOFdIrd7tg‹W –L–g1F+Št uŠ1ˆdgD–q QFœgrTD1ˆ“gH gMtCŽŒj–7FQgD W tŒf–r‚ItXF“C˜uQD–Vtk”8qŽyC8VL8+–v€DyQCl–1C˜jFMVIV86lClFCC–H3––MMHEQ8OH”C˜XŸD”V–M1CXC+Ct‹dg7VM–7MQœt–MC8ŒxC8–Ig11QCl–DC˜63VD1g7D”g7œŸC83 8–MIDXQDM7C8–dŒ8l€D1QlFqC8 Q +–hV8y”trDhCFL˜x7–MIDXQCXWQC–HŸ VM–7MQttFlCFL˜x7–v€DmQˆ uC˜6”œ1CLŠt uŠ1ˆ“g”FqŠtCŽ–jHtXLQgD • ry3€OdV–7Œ“Ct‹LD8–Vtœ”8qŽ–C–LQVtŒygˆIVgWEIH‹˜IlCFI8jhVtˆxgŽ˜gf–Q–7“ –1 D‹8x”‹FœDu3 ”‹“gDCjV1F+” Œgˆuvœ”1‚M”C‚ŠHVFŒ1‚Wœ1gOy3CO”tFCICHWŸ –vtyQttD”Ctu‚Š7–TI8ŠQ8qŽmCt‹f HCLŠt uŠ1ˆ“g”Fv HCLŠt uŠ1ulVˆ •”ˆ˜8t IFVQt8CgOy3CO M”Œhœ1 t–tyh€OdIFˆvgH gMtCŽŒj–7FQDˆŒu 1Q+I1ŽuŠ1ˆ“gD7g1F+Št uŠ1ˆ“gDCjI”M38“FI–QVQ–8uWCFL8Š8FuŠQyhœD W€HdDC˜LVM1LWtFQ–OˆœOdxŠ”WlŠ”FjV1F+Št uŠ1ˆ“œ”QtMOŒœg“–uŠQyhœD W€HdDC˜LHMrdltFCmOu/DuV–l vgH9IrCŽ–rdTX‚hVtQtœHQOMfjM–X–l8XCqOu/DuV–l vgH9IrCŽ–rdTX‚hVtQtœHQtMfVCItŽ78–Œj1Fff–HgˆLmœHC“I”M38“FI–QVQ–8uWCFLtlœD7‚gQClV1LfDˆDœhœ–‚ DŽD1ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD–q –F˜Mtdu8Q ŒI”–8COHŸœ8 ŸV– xD‹˜€OmŸ–7–WDt‹“gDCjV1F+” ŒŒQuWœ7uCV7–M DkQHMhCtuŽ€DQDDQ8OF1CFLFM+Š1Š1yQtV+C8–QM+DQDDQ8OFxCHh”C8–IŠQyQœ“ˆtCFFB7–3 –yQt˜ˆvCtufD+–T–V+IDˆ“gDCjV1ŽLŠHˆŒ1V‚t–hV1F+DrŽHtXLmVX W ruLŠ“jTFuWtut€DFBœ8 ŸV– xD‹Lx”…ŸVt‹L•”ˆCV”–FCluFœ–1 tQœ XkŸ9OLB–1‚WV–M‚Ir–8Cf–Qœ˜Vd•”–/Il–BŠt QœDŽL tHd qŽ˜rHŸVDCQV– 8IH‹FC”WŸœtŒ/•”–+ t–L ˜VQV8F3 –M1V1‹VlŠŸVtˆm83WEIH‹8t FV8 3Vtˆœ f–ŽtfŒB–V”•QM1V1‹FŠl–F–Qj3•”Hd qŽ˜g˜CB–V”•”ˆCIt––rFBœt–/Št‹“gDCjV1F+” ŒgXLWVXt€tuLŠrFTMF7tF O DFBœDFŸ8Q xTŽLx”dB–”u/Fu‚Vˆ œ “Vu€rdh8Xv XŽœtFh rdmCluW HFMf–MIrŽ”CHŽV”XEg1F+Št uŠ1ˆdgD–qMOˆyg“VHM1Q“DFmIFLœŠj–7FQgD‹Ž–tQFI˜V3•”ˆxgŽ˜gf–Q–7“ –1 D‹8x”‹FœDu3 ”‹“gDCjV1F+lˆM ”‹“gDCjV”Cy–rFTŒ”d‘gD IMtuŽ8j–7FQgD9M”ˆœŠrdgŒ7H7œrF“IQLy–“FVtˆuhœy19DQ‘Š˜ xDt‹“gDCjV”–l” uŠ1ˆ“gDCjV1F+D“LVM1LWtFQ–OˆœOduŒ+j“gHg”ˆœ8˜ŒŠH‚‘œ”QtOuW8“jF––vgQŒ7g1F+Št uŠ1ˆ“gDCq€–LœDˆ8Œ“gHg”ˆœ8˜ŒŠHE7œ–qXŽff–HgˆLmœHC“I”M38“FI–QVQ–8uWCFLtl œD7‚gQClV1Q‘Š˜ MŒ”dQVXIIOu+V”ŽMH‚‚tF t –D3+VI–“CltˆME€DŽ8 ” –7DhVOQO1Ž+D“LVM1LWtFQ–OˆœOd˜€HVHgQClV1LfDˆDœhœ–‚ DŽD1ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD–q –F˜Mtdu8Q ŒI”–8COHŸœ8 ŸV– xD‹˜€OmŸ–7–WDt‹“gDCjV1F+” ŒŒQuWœ7uCV7–M DkQHMhCtuŽ€DQDDQ8OF1CFLFM+Š1Š1yQtV+C8–QM+DQDDQ8OFMCHh”C8–IŠQy”œD3CFFB7–3 –yQt˜ˆvCtufD+–T–V+IDˆ“gDCjV1ŽLŠHˆŒ1V‚t–hV1F+DrŽHtXLmVX W ruLŠ“jTFuWtut€DFBœ8 ŸV– xD‹Lx”…ŸVt‹L•”ˆCV”–FCluFœ–1 tQœ XkŸ9OLB–1‚WV–M‚Ir–8Cf–Qœ˜Vd•”–/Il–BŠt QœDŽL tHd qŽ˜rHŸVDCQV– 8IH‹FC”WŸœtŒ/•”–+ t–L ˜VQV8F3 –M1V1‹VlŠŸVtˆm83WEIH‹8t FV8 3Vtˆœ f–ŽtfŒB–V”•QM1V1‹FŠl–F–Qj3•”Hd qŽ˜g˜CB–V”•”ˆCIt––rFBœt–/Št‹“gDCjV1F+” ŒgXLWVXt€tuLŠrFTMF7tF O DFBœDFŸ8Q xTŽLx”dB–”u/Fu‚Vˆ œ “Vu€rdh8Xv XŽœtFh rdmCluW HFMf–MIrŽ”CHŽV”XEg1F+Št uŠ1ˆdgD–qMOˆyg“VHM1Q“DFmIFLœŠj–7FQgD‹Ž–tQFI˜V3•”ˆxgŽ˜gf–Q–7“ –1 D‹8x”‹FœDu3 ”‹“gDCjV1F+lˆM ”‹“gDCjV”Cy–rFTŒ”d‘gD IMtuŽ8j–7FQgD9M”ˆœŠrdttXˆvgH gMtCŽŒj–7FQDˆŒu 1Q+I1ŽuŠ1ˆ“gD7g1F+Št uŠ1ˆ“gDCjI”M38“FI–QVQ–8uWCFL8Š8FuŠQyhœD W€HdDC˜LVM1LWtFQ–OˆœOdxŠ”WlŠ”FjV1F+Št uŠ1ˆ“œ”QtMOŒœg“–uŠQyhœD W€HdDC˜LHMrdltFCmOu/DuV–l vgH9IrCŽ–rdTX‚hVtQtœHQOMfVCItŽ7gD W tŒytrTŠ” Ÿœ7u9€–L˜–“––Mrh”tFV7€ˆ8MfFCŒXˆh8X W tŒytrTŠ” Ÿœ7u9€–L˜–“––Mrh”tFV7 Q89fFxDl “8DClV1LfDˆDœhœ–‚ DŽD1ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹˜•” B–1VLVtˆ“IqŽ˜I”BIgŽŸ•Q OO––”…ŸœtC383WEIH‹˜DfˆQœtCLV– D‹˜DfyŸIgŽŸ•Q OO––”…ŸœtC38Q ŸIX‹grLFœtCLVtˆtIDˆvV1F+Št uŠ”‹“C˜jg+–h€˜MQ8OF1CDdL8Vu87HQfF•C8VŽC–dŠ7…lClFCCtˆŠ7–hCrM”g”ˆqCHh”–+–V–”hQCr1”C˜ˆ+9+Vx•7MQ8+yvC8–8”X3––ItˆLWœr‚Dtd3rQ7C–” HF2Om18OQWœHŒŸ HŽXOtOŽQCFj/1FˆMHQQ–1‚7•”ˆVTŽFf–Qœt ”Št‹“gDCjV1F+” ŒgXumœ”QO XF+ŠtŽHŒQœ1VXCq€rŒyg“jTtC“C˜jg+–h€˜MQttˆOCtX”CDCLŠt uŠ1ˆ“g”FqŠtCŽ–jHtXLQgD • ry3€OdV–7Œ“Ct‹LD8–Vtœ”8qŽ–C–LQVtŒygˆIVgWEIH‹˜IlCFI8jhVtˆxgŽ˜gf–Q–7“ –1 D‹8x”‹FœDu3 ”‹“gDCjV1F+” Œgˆuvœ”1‚M”C‚ŠHVFŒ1‚Wœ1gOy3CO”tFCICHWŸ –vtyQttD”Ctu‚Š7–TI8ŠQ8qŽmCt‹f HCLŠt uŠ1ˆ“g”Fv HCLŠt uŠ1ulVˆ •”ˆ˜8t IFVQt8CgOy3CO –7–lVˆg––LœI+jxŠQyhtFmMXŽŒ” uŠ1ˆ“V˜ vV1F+Št uŠ1ˆ“gD WDF+V”ŽHŒ”hœlHh•”ˆfŒ“LŒ–QuLD7utC–FŽ9t–ˆvgQCWC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠQu‘œF ŒVQj8Št‚V–QuLgDMd€HF+œl–•gˆuvœ–C ˆjW9tŽItˆLht8u– DL‚Š“LŒQV7œHCqIOu8ŠrF8FmtH 9IOM7Dt M–1–“D––gŠQ…hX‹–ŒFV–t+ˆgŒF ODt MD7ˆWœlFq OM3œ” •€8ŒŸVX tCOŒX1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“tFmˆF‚V”ŽVMˆŸ8XCjI”y7–jgˆœh8XCjI”CŽ–jHtXLQt+CIIOCLI7 +IDˆ“gDCjV1F+Št uŠ1ˆ“gD WDF+V”Ž–œhVˆ• –…7trIDD‚DˆŒjO–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV”ŒfIfFTM”C“œrQtM1Fˆ–ŒVMFVlVX W ruLIfjTtXu7œugXŽ+g8 uŠ1F7gDCg rŒœD“ HtˆˆhgQŒ7g1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št uŠ1ˆ“gDCq€–LœDˆ8Œ“VX•M–LD1ŽuŠ1ˆ“gDCjV1F+ŠF+IDˆ“gDCjV1F+Št I–l2tF7g1F+Št uŠ1ˆ“gDCjV1F+Št •gˆuvœ–C ˆjŽŒrŽV+F2œD t”u+V”F–7–lVˆŒV”Œf–ŒHŠ1ˆŸVX tCOŒ+g˜jB ”‹“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1u‚tFgMtCŽCO HgXmdtFŒ7g1F+Št ug+jxŠ”FjV1F+Š˜VxIt‹xgDCjV1F+Š˜ˆu8”ˆ‘V1‹MtHŸœ–F3•Q Œf–œ”F˜ŒrŽVIlŒWV– • FFœgrW”grQCt‹QVVMCFŠQt– WC˜uB–HCLŠt uŠ1ˆ“g”FXfuvr‹vCˆŸ t‹IIˆLfgHdItOdLœuO€–LBœDL‘VtFX r–L•”WŸ–1VhV–M1r––”l” uŠ1ˆ“gDCvVQˆygrdHgˆV‚œrFqIty39˜CI–1VQŠ”FjV1F+Št xIDujVX m€ty7VfLuŒ–œ1t8ut ”ŒffVTIDŒhXL/ly”x”QLfVWI+ 3fVu8OdQ8OLŸ Vyt 9XŽuŠ1ˆ“gDCjDŽL9XŽuŠ1ˆ“gDqM–FŽ€fjV€DuŽVˆQIrŒffVTIDuvt–9ŠFLfgHdItOdLœuO€–L+Vlj+IDˆ“gDCqC1CLŠt uŠ1ˆ“gDCjV”ˆ˜tt‹uDQu‚tFCVQj8ŠtŽHŒ”hœlHh•QF˜DrFœM1‚vtF E1Ž+g“jT–Q–“œH W€rŒ+Š˜ŒVD1FhgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št –œhVˆ• DFftrTgX‚W8l vV1F+Št uŠ1ˆ“gD…hg1CLŠt uŠ1ˆ“gDCjVQLŽ9˜FxŠQuhDˆ 9 rŒ˜C8jxŠQu‚tFCX‹‚ŠtŽ–+Œl8lFjI”ˆ8MfŒxtfCxgDCjV1F+Št uŠ1ˆ“gDCjV”ˆ˜tt xgXEhœ”‚q rC‚V”Ž–V2–lFgXdDŒrŒMŠ1ˆ/t– gItX3––V8Fmœ”QŒHŽDCf xtfCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ7”Ct‹dgQF˜DrF8MFœQtt1‚IOCŽ–O‹”ˆjWIOˆœ˜MQtO‹3 / rXlIl–M“jQCtLv“ˆDlVhDOdmœ–Ž7––g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCgMOˆffLM–+–mtH •VrM3IOdTŒl vgtQW ˆL8Š“LItˆˆ“t8y‚ XdŽŒ“–IgXL”œ– Œ –F˜DrFMFœQtt1‚IOCŽD˜VMI1VŸttŽW8Fu8g˜jB ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št M“WtFj1Q8I7 +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Š“FItˆydœ”11V”ŒygˆI–fCxgDCjV1F+Št uŠ1ˆ“gDCjV”VŒ” uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Š“FItˆydœ”11VQLŽŒ“CMFDlŠ”FjV1F+ŠF+V”‹“gDCjV1d‚lˆ+IDˆ“gDCjV1ŽLŒfj“gDŒWI+ hIˆLfgHdItOdLœuO€–LBI–LŽ tˆMTŽL•”WŸ–1VhVtˆ2ˆˆvV1F+Št uŠ”‹“DD•OŒy–“FTIDuLœy‚QL˜Œ“–+IDˆ“gDCjV1ŽLŠHˆHŒ”‚œCH€HFˆ–ŒVMFVlVX W ruLŒfjWgr‚vœvtFh rdmCluW HFMf–MIrŽ”CHŽV”XEg1F+Št uŠ1ˆdg”HEg1F+Št ugXydttQEˆF‚ŠrQH–7–‘VX W ruLŠ“H–”hhD– gI–M3––V8Fmœ”QŒ1ŽŒ” uŠ1ˆ“V˜ vV1F+Št uŠ1ˆ“gD WDŽ+ŒtŽ–V2gDŠhV1LyDr‹tXQ1DOQOIQFW9˜LŒQV7œHC“Itˆ˜MtduŒlhœ7CŒV1d˜ŒtFxD”hlŠ”FjV1F+Št uŠ1ˆ“gDCjV1FygrdHgˆV‚œrFq–F˜€fLI–fCxgDCjV1F+Št uŠ1y‚Š” vV1F+Št uŠ1ˆ“gDCg rŒfIOdHQ“DˆCqœFD1ŽuŠ1ˆ“gDCjV1F+ŠrQTM1FvgH Ÿ9–H398ˆTFˆvgH•OC‚I7 uŠQuhDOLjC1F+D“jMD7jhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+Š“jIIDˆvœ7Cg€tCf9˜LxŠQu‚tF9œHLfIlŒC–j7gDCHIˆLfg“uItOdLœuO€–L+œljuŒ+6‚DˆCq–F˜€fLID1ˆŽgrFq€rŒyg“ TM1QvgH•OMd”ŽD7jEtˆClV1m38“VTD7Œ/gQCj9–jDMO CŠt‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št •I–F“œ7Cg€tCf9˜LxŠQu‚tF9œHLfIlŒC–j7gDC HdLœljuŒ+Œ“8DCjDLLŠ“LH–1L2VXu1LygrdM˜CŸœ–Mh€ˆ8 ” M–X–hgDŠh9DF+œ7V•€thlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸœCgQLœg“L˜M8j“DˆCq€rŒ˜g“LHgXFvgH•OMd”ŽD7jEtˆClV1Q+ lŒCD”WlŠ”FjV1F+Št uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+ŠF+IDˆ“gDCjV1F+Št –QF“g1 9 rŒ˜C8jxŠQu”VX mOC/8˜jŠIHˆhV˜ vV1F+Št uŠ1ˆ“gDCjV1F+ŠtŽHŒ7ˆlgDŠhVQH398ˆTFˆvgH‚MOˆf–“F€tWŸ8–Cjx1F+D“VHŒ”Wœ”‚9œHQtMO BIDˆŸœCgQLœg“L˜€HuH8l vV1F+Št uŠ1ˆ“gDCjV1F+Š˜VM•”FQ “–F9˜uQD7ŒQ t1lD‹L ˜jBIgŽŸ•Q OO–€rdŒ” uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸVX mOC‚MqŽV–QuLt+C9QL˜€fCxŠ”C“œ–dXFy8rdHŠ1ˆ/8OFgMOuœŠ˜jB ”‹“gDCjV1F+Št uŠ1ˆ“gDCq€ruf–rdŠ” EgQŒ7g1F+Št uŠ1ˆ“gDCjV1F+Št –œhVˆ• DFyD“FH–QDlŠ”FjV1F+Št uŠ1ˆ“VFˆvV1F+Št uŠ1ˆ“gD•OŒy–“FTIDuŽt– E€FLD1ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹FŠl–F–1Q•”Dlt–˜ tQQ–l‘•QQO–8COFQVtˆm8Q HI1‹V”…ŸVDCQDt‹“gDCjV1F+” ŒgXumœ”QO XF+ŠtŽFŠ1uhœr‚gˆm3–“Fu8”–+ t–FœtyIrd/tHŒŽ1Fg1F+Št uŠ1ˆdgD–q QFœgrTD1ˆ“gHŸV”ˆ˜C8jI–”ŒWœ”FXr 3r‚ŽQy1C–m3D8–dŠ1+IDˆ“gDCjV1ŽLŠHˆŒ1V‚t–hV1F+D“–H–7ˆLtFuV”ˆ˜C8jI–”ŒWœ”FXlœQC”‚QCC/Vlu/O…l r‚ŽQŒŽHŽytdTŒfV”g˜Lh 8–‘lud–OŽQ8O‹EC7 ‚88–V–1y”g7œ1C8–dŒ8–h€DXQœHCŠC–F+9+–MtœQOF”8–ˆvV1F+Št uŠ”‹“DDqIOCŽŒ“ŒuŠ1ˆŸtHt€–FœD“jTMŒ“œ–QMˆL˜VOdIDŒv Dl“D”M”dhg“uŽHŽyr 3rdmClV/t‹DOhl–fjŽˆŒŽ+ TOdTxlV”g˜LWIFLœIlVVM”ŽQ8fuŽV”“6QgDŽuŠ1ˆ“gDCjDFˆŠ“FItˆydœ”11VQFŽ9˜VTŒQVmœrFXtF•ŒOdLq‹v –DO1QC8jFVWC7 ‚88–Dl…”8ˆCWCt‹dœ–VV8œQœ“F+CtuLC+–M•”…Q1 ”Š”FjV1F+Št xIDujVX m€ty7VfLuŒ–œ1t8ut ”ŒffVTIDŒhXL/ly”x”QLfVWI+ 3fVu8OdQ8OLŸ Vyt 9XŽuŠ1ˆ“gDCjDŽL9XŽuŠ1ˆ“gDqM–FŽ€fjV€DuŽVˆQIrŒffVTIDu‘œH WIrˆ‚V”ŽFŠl “gHŸ1F+D“–H–7ˆLtFu9DQ8 ” •ŒQydœ”QOMOˆ˜9˜–Š–XˆhŠ”FjV1F+Š +IDˆ“gDCjV1F+Št •Œ7DdœF •OCLŠ8FuŠQuQVˆdI–Lœg8C–+E8”Fg tŒ˜MtFItXHlŠ”FjV1F+Št uŠ1ˆ“gH gMtCŽŒj–7FQgDŠhV1LfDˆDœhœ–‚ –jXŒg‹C–O‹ŸtHt€–FœD“jTMŠlŠ”FjV1F+Št uŠ1ˆ“gHQMtu8Š8FuŒXXlŠ”FjV1F+Št uŠ1ˆ“tHEV”–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆŸVX mOC‚MqŽV–QuLt+C9QL˜€fCxŠ1Lhœr‚qMtŒ+ŠjVtXˆ“gH“V1LyI”Fx–fCxgDCjV1F+Št uŠ1ˆ“gDCjV1LfC8ˆTDlC38l vV1F+Št uŠ1ˆ“gDCjV1F+Š“jIIDˆvgHQMtu˜grdI“‚gHQMtu8+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+ŠrF–Vmœ˜L7g1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1y7œD WQL8V”ŽTFV1ttQt€–jLD“–H–7jh8l vV1F+Št uŠ1ˆ“gD•OŒy–“FTIDyhœ”‚tX‹l” uŠ1ˆ“VFˆvg1F+Št uŠ7dg” vV1F+Št uŠ”‹“CHH”M7–V•QQœH ŠCtuŽ––VID”8+VvC8Š”gXCLŠt uŠ1ˆ“g”FqŠtCŽ–jHtXLQgD O€tCŽŒ–uŒ“Š7œ– gMOˆ+ ” ŒQVhtumMˆ8ŒO‹”C–ŒW8DlfCVx”dQtF/t‹Dfu3M”dŸlLh8–‘ “Vu€rd‘tFŸ FH7Il–Mrd“Cq‹/ XŽjg1F+Št uŠ1ˆdgD–qMOˆyg“VHM1Q“DFmIFLœŠj–7FQgD‹Ž–tQFI˜V3•”ˆxgŽ˜gf–Q–7“ –1 D‹8x”‹FœDu3 ”‹“gDCjV1F+lˆM ”‹“gDCjV”Cy–rFTŒ”d‘gD IMtuŽ8j–7FQgD9IrCŽ–rdTX‚hVtQ–1ŽŒ” uŠ1ˆ“V˜ vV1F+Št uŠ1ˆ“gDCg€–Lœ8t ŠD1ˆŸVX mOC‚MqŽV–QuLt+C9QL˜€fCxŠ1m7œFCq€rˆœOduItWlŠ”FjV1F+Št uŠ1ˆ“gH O€tCLŠ8FuŒ“ŒH8l vV1F+Št uŠ1ˆ“gD WDF+IOLTMQVQVXC“I”CŽ–“Lx–+ŒlgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št I8F‚tF OIrˆ+Št‹•gXLWœlFqIOC‚ŠtŽHDV7Vˆ –O–l” uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV”ˆ˜tt‹gXLWtX‚ ˆFœDrLŠ” /8fFmœQL+ljFŠ”tHC7XL+9O‚MŠ1ˆŸVOQO”Œ˜–˜CuŠQu1t–gIrˆf–“LxD”hlŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV”ˆ˜tt‹VMHdœr‚Œ1LfMtHŒ1‚vtFCˆj‘MfLxtfCxgDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št •Œ1V‚œ”Fj9DFO1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠQu1t–gIrˆf–“L˜€HVH8XˆvV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1LfMtHŒ1‚vtF9œHQWMfC+IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FOM+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1Ffg“FI–1V38l vV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1Fy–“–MFœhg1Cg ˆFœDrLŒQV2gQŒ7g1F+Št uŠ1ˆ“gDCjV1F+Št rDt‹“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1uhtrFjQL˜M˜ HgOŽvgH O€tCLIljF ”‹“gDCjV1F+Št uŠ1ˆ“gDCqMOˆyg“VH€DuQtFVQuœIOLItXyhœ–‚ DŽ+Vr‹‘rVWI–TfCVx”dQtFW1d3fylIrdh8Xv XŽœ “V•”‚Mtd1œ1 E FLf–t‹•€“C/8XCjI”CŽ–“LxD”WlŠ”FjV1F+Št uŠ1ˆ“VFˆvV1F+Št uŠ1ˆ“gD•OŒy–“FTIDˆŸt–•€D‹l” uŠ1ˆ“VFˆvg1F+Št uŠ7dg” vV1F+Št uŠ”‹“CHH”M7–V•QQœ8V•C–H3–+D1DHQfF7C–HŸM1CLŠt uŠ1ˆ“g”FqŠtCŽ–jHtXLQgD9MOCŽf–I ”‹“gDCjV1F+” Œgˆuvœ”1‚M”C‚ŠHVFŒ1‚Wœ1gOy3CO”tFCICHWŸ –vtyQttD”Ctu‚Š7–TI8ŠQ8qŽmCt‹f HCLŠt uŠ1ˆ“g”Fv HCLŠt uŠ1ulVˆ •”ˆ˜8t IFVQt8CgOy3CO V–7–Ÿœ”1‚ˆLOtrdH‚hœy11ŽŒ” uŠ1ˆ“V˜ vV1F+Št uŠ1ˆ“gDCg€–Lœ8t ŠD1ˆŸVX mOC‚MqŽV–QuLt+C9QL˜€fCxŠ”Œ/tFg ”CŽ9˜ ugXL”8OQ•Mtˆ˜€OŽMFLWœ”‚9Oy3Cf––V7tF O€FL8œljB ”‹“gDCjV1F+Št ugXLWVXt€tuLŠtŽ–V2–lLqVX‹l” uŠ1ˆ“VFˆvg1F+Št uŠ7dg” vV1F+Št uŠ”‹“CHH”M7–V•Q D–1V‘C–L‚ 7–IMHˆ+IDˆ“gDCjV1ŽLŠHˆ–œhVˆ• DFy8jtdQt“ vV1F+Št uŠ”‹“DDg”CŽ98C€DuOVD 9OCyD“jTMŒ“CFL8tVx•lœQlˆTC–FFC–T€DMQœrH1CDhŸI+–vŒlV+IDˆ“gDCjV1ŽLlV+IDˆ“gDCq ”Œ˜g“C–1Q“tr‚t –H7D“jTMŒ“œF OIHŽ+I1ŽuŠ1ˆ“gD7g1F+Št uŠ1ˆ“gDCjI”CŽ–“LuŒ+j“gHg”ˆœ8˜ŒŠDVŸtth‚€rˆf–“CTŠ” /t8uOMXF+9˜LFtXQ”t8uEIOM78˜VT–œh8+CHQF˜Cf MMHVŸtH•OM78t‚x–fCxgDCjV1F+Št uŠ1u‚tFgMtCŽCO •gXLWœ7ˆ7 QD1ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹g˜ˆQ–l‘ ”‹“gDCjV1F+” ŒgXumœ”QO XF+D“CTMH‚mœHœ‚I”ˆœgt MQu‚œ–QHFBD3‹/V– 1D‹g˜ˆQ–l‘•Q T “–Fgr…Ÿ–1F78”ˆH‹˜œlCBV––1VtFˆI”–ŽgOLBVtˆm8”–T“–˜9tdŒ” uŠ1ˆ“gDCvVQˆygrdHgˆV‚œrFq€rŒyg“jTtC“CHhŸ–8–I tDQ8qŽHCtX3t8–I€tkQfF7C–L‚ 7DQDDQt“DŸC8ŒŽg+–hœD…Q8fD3CHdF –TCH–+IDˆ“gDCjV1ŽLŠHˆHŒ”‚œCH€HFˆ–ŒVMFVlVX W ruLŒfjWgr‚vœvtFh rdmCluW HFMf–MIrŽ”CHŽV”XEg1F+Št uŠ1ˆdg”HEg1F+Št ugXydttQEˆF‚ŠrQH–7–‘VX W ruLŠ“LVM1LWtFQŒˆFœŠjHtXLWg1Cg”y38rTŒFŸœ–uXCLŠt uŠ1ylŠ”FjV1F+Št uŠ1ˆ“gH•Ou˜98jI–FŽœ– Eˆj8œlVMFu‘t–•I1d‚œl–IŒ1œhtFC“F ˜MtŽœMOhœ7XEHŽ8C˜FV–7–Ÿg1Œj1‹DI7–xD7Œ/8O‚q –L‚œ7 +IDˆ“gDCjV1F+Št •gˆuvœ–C ˆjŽŒrŽV+F2œD t”u+V”‚MH‚‚tF t –H3Œ“ uŠ7ˆlgDC DLygrdT–7HhtFœ‚tˆ˜€Odx–fCxgDCjV1F+Št uŠ1ˆŸœ”Qt€HFXMO •gˆuvœ–C ˆj/ŠˆTŒlfœ– EXŽ+D“FI–7ˆ”VX tVFLŽfCIDl “gH E FH3Œ“CœMFuhœ”FŸC1CLŠt uŠ1ˆ“gDCjV1LyDr‹tXQ1DO‚•Ou˜98uI––LhœH –1LygrdT–7HhtFœ‚tˆ˜€Odx–fCxgDCjV1F+Št uŠ1u‚tFgMtCŽCO •gXLWœlL7g1F+Št ug+jxŠ”FjV1F+Š˜VxIt‹xgDCjV1F+Š˜ˆu8Q‚O–˜€OLl” uŠ1ˆ“gDCvVQˆyŠrDV1gDCg”y38rTŒFŸœ–uV”M7D“F–7–/gD‹8x”‚F–lŒŽ8Q‚O–˜€OmŸIt‚m tQLI”–˜g˜CBœtC38Q 1‹F–˜ŒFID–ŸVtQyIH‹FœtBVtu3 –‚ˆˆvV1F+Št uŠ”‹“DDqIOCŽŒ“ŒuŠQyhœ–dXFff–HŒQV/tFuV7–TMFœQttH3C˜jFMVI–3klClFCC–H3––MMHEQCr–8C7 ‚88VT –H”g7VŸCDdLCHQDVlQCr–8C+Œ+Š1CLŠt uŠ1ˆ“g”FqŠtCfŒ“FV–7j“gH9O–Ž–t MQu‚œ–QHFBIt‚m tQLI”–FœtB–l Q – ” DkŸ9OLBœ˜VW8Q ŽV”Fj€XQ‘Vl FŒOC‚8DkŸ9OLB8 Ž8”FQX‹t˜yŸ–l‘•QQO–˜gtQIgŽd8”–BIqŽBŠt “” uŠ1ˆ“gDCvVQˆyŠrDV1gDCg€–FœDrdugXEhœ”QW –L‚ŒO‹hCOuhljyrQv–OQ3C–Œ/Itu/rLvV“V”g˜Lh 8–‘lud–OQŽg7“8HDdItCyDOL“gDFxgDCjV1F+Š˜ˆuŒDu‚tFgMtCŽCO MQu‚œ–QHFBIg‹W8Q T“–8x”‚F–lŒŽ8Q D‹œluB–”C78”–IX‹LrQtFŸVtˆ˜IqŽ8ClŒQI8C3•QŸIXˆvV1F+Št uŠ”‹“DDg”CŽ98C€DuOVD 9OCyD“jTMŒ“CFL8tVx•lœQlˆTC–FFC–T€DMQœrH1CDhŸI+–vŒlV+IDˆ“gDCjV1ŽLlV+IDˆ“gDCq ”Œ˜g“C–1Q“tr‚t –H7D“jTMŒ“œ7u9€–L˜–“–––V‘œC•I1Ž+D“CTMH‚mœHœ‚I”ˆœg˜CuŠQyhœ–dˆjDŒ8ŒCŠl “gH9O–Ž–8FTFV7œHClV1LygrHŒQD‚œr‚t”u+I1ŽuŠ1ˆ“gD7g1F+Št uŠ1ˆ“gDCjI”CŽ–“ŒTMQuWt+uIOuf–8F•€8F2tH 9IOCŽD˜V•€8–Ÿt–gXŽ+VˆLT–QurD1 W€F‚œljMHLmœrQŒ1Q+ 7–B–OŽh8OF tuœŠ8j•€“CxgDCjV1F+Št uŠ1ˆŸt8ydI1FXMO •M1‚‘œ”QtOu/grdVMF‚tHCjHdLD“FI–7ˆ”VX tVFLŽfCI–fCxgDCjV1F+Št uŠ1ˆŸVX W ˆL8Š8FuŒ”dQVXIIOu+V”ŽHŒ”d1tFCŸC1CLŠt uŠ1ˆ“gDCjV”ˆ˜tt xŠ1VWœFqMO–8V”ŽHŒ”d1tFCŸV1LLtt •gˆuhœF –•1Q++ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCgIru˜Dt MIj“g“Fj XdœD“jT–Q–1œH W OˆœDt •€8ŒŸVX W ˆLD1ŽuŠ1ˆ“gDCjV1F+ŠF+IDˆ“gDCjV1F+Št –QF“g1COOuœŠjFD” Ÿœ7uWCFL8IljF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjIQH3MtŽuŠ7Š‚gDCV1d8M˜LtfjWgDC DLy8“jF–DlŠ”FjV1F+Št uŠ1ˆ“VFˆvV1F+Št uŠ1ˆ“gD WDF+V”I–7ˆlVXŸ1LygrHŒQ–hgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št •Œ1‚1tHCj –j8Št‚uŠ7j1ttQWMXdœgrHŒQ–“g“H1I”CŽŒjI–fCxgDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“gH•OC‚Š8FuŠQyhœD W€HdDCtIŒ1Lrœ7umOuf ”‹•Œ1‚1tHCŸC1CLŠt uŠ1ˆ“gDCjV”ˆ˜tt xŠQu‚tFCV1LLtt •gXLWœ7ˆ7 QDM+F•€8F2V–9MˆL˜MfVVtdQ8+C91‹LŠ“LVM1LWtFQ€–L˜8“V–X”gDQ rŒ+ŠrQTMQVQtHCO–l” uŠ1ˆ“gDCjV1F+Št uŠ1yhœD• rŒ‚Š“–ItOC“DFmIFLœŠj–7FQg1 W OCf€fVIŒQ–vgtL7V1FL ” •gXLWœlFŸX‹l” uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+ŠtŽ–V2gDŠhV1LyDr‹tXQ1DO‚qMtuf€X –lWg1Cg€–L˜M˜VHŒQVrtrQWQL8 ” •Œl”t8uOQ…3D“jItWlŠ”FjV1F+Št uŠ1ˆ“gHg”ˆœ8˜ŒŠHLWœF‚MFL–t“jTŒQ–vgH•Ou˜98jI–FŽœ– EXŽD1ŽuŠ1ˆ“gDCjV1F+Š“FItˆydœ”11V1Lygrd€“CxgDCjV1FyMXŽ+IDˆ“gDCj HŽL1ŽuŠ1ˆ“gDCjDFBV˜ŒLV–ŸIO–VrŽBD7Œd – y r––“CBIg‹W8Q T“–8COLFD7ŒQ t–h ˜–FœtBV8 Ÿ•”ˆFHkŸ9OLB–”Q“ tˆFH‹Lx”dB–”u/ –M1 ˜–Ff–QVtˆm8”DlI3ŽVt‚BD7Ž t–1It–˜•”F–1F78”–7H‹8COFFD7Œd – ŠVl––“CBI˜–” tD‚“–FœtBI8umVtˆœ f–tfŒQ–18QM1 ˜– O‹“” uŠ1ˆ“gDCvVQˆyŠrDV1gDCg ˆLœDr‹TMFˆ“œ7Cg€tˆ˜Ct‚u8”ˆH‹F€fDŸVtˆm8”ˆ˜ t–€rdF–Qˆ‘Dt‹“gDCjV1F+” ŒgXumœ”QO XF+D“ VtXLmœFCVQFœg“FVtOŽ“C˜jC8–38QœQœgWQCtud–8DQDDQtgŽ+C˜j˜ 7l€D1QlF•CrˆfC–T–6Qœ8uVC˜j8•7–I€tkQˆ lC8 QŒ8VVVDQ+IDˆ“gDCjV1ŽLŠHˆŒ1V‚t–hV1LyD“jT–QV”VˆŒV”ˆ˜C8jI–”ŒWœ”FX“uVrd”Q/t‹DlŒvtOQWC”uŽ+ TOhl–fV”g˜LWIFLœIlVVM”Q3C“V/+–M “Vu€“jQCtLv“ˆDIl–MlLCŒXˆlC˜XŸD”V–M1CXC+Š”FjV1F+Št xIDujœ1 O€–F˜MO •Œ”dQVX t€tŒŽŒ“CtŒ”d1tFCqOu/DrdIMFV‚gD‹L9˜uQI˜Vv tˆrO–L r‹QVtˆm8”Qœ X‹ŽœtdBœ–1 tQœ XkŸ9OLB–1‚WV–M‚Ir–˜•luQVt‚Ÿ gWEIH‹ŽC”QBI˜–h8QM1 tL– 1QXŠ˜ C8QŸ“–FrŽQ•7‘8Q 9lL– 1QBœ˜Vd•”–/Il–BŠt “” uŠ1ˆ“gDCvVQˆygrdHgˆV‚œrFqIOC/grFD1ˆŸt–gMOCŽOFHtˆuWCDdLC–VMFœQ8OFdCHFdŠ7D1g7DQOD3CHhŸ–8–I tDQt˜FOC–L+VuDMQCXWQCtXŸC8VMŒ”…lClFuC–HŸ Vu87HQœ–CCDdL8l€DmQC˜ˆˆCDdLŠ8Dl 86Qˆ lC8 QŒ8l€DQ•Œ1œhVX•ˆF/–jIV–M1 ˜–˜I”QQD7Œd tFxVl–FŠl–F–l/ tˆjqŽtfŒQIg‹W8Q T“–8CrLBV8 18”ˆt1‹8“uQ•7‘8”ˆBIl–˜gthŸtQ –”ITWŸ9OFBœ–V78”DlIX‹FœtB––3 – ŒIrDŸ9OFFD7Œ‘I–umVXg€tˆ˜gˆHŒQŸ HŽXOtO‚ŽQŒŸ DFXt‹MV“V”g˜LWXdylŒxtO‹”C–ŒW8Dl“ˆTrQWœHŒ/ 8ŒŒg1F+Št uŠ1ˆdgD–qMOˆyg“VHM1Q“DFmIFLœŠj–7FQgD‹Ž–tQFI˜V3•”ˆxgŽ˜gf–Q–7“ –1 D‹8x”‹FœDu3 ”‹“gDCjV1F+lˆM ”‹“gDCjV”Cy–rFTŒ”d‘gD IMtuŽ8j–7FQgDHIOˆœDj–7–/g1Cg ˆLœDr‹TMFˆ7gD O€tCŽŒ–uŠQult–•IOuœ88F˜M8j7gDCgMOˆ˜MtdTMQœhDˆŒC 1QXŠ˜CuŠQuhœr‚gOC/trTŒFuhœF –9D‚DŠ˜ CŒXˆlgQˆvV1F+Št F ”‹“gDCjV1F+Št uŒ”dŽgDC“IOu˜–jŒ7FŸt+utCOˆœ8j€t ŸVX mOC‚ ” •Œ7ˆWVX m FL+IljF ”‹“gDCjV1F+Št uŠ1ˆ“gDCqMOˆyg“VH€DuQtFVQuœIOLItXyhœ–‚ DŽ+VrQWr‚Ž7–œOŽuM”ŽQg8CWFL‘O‚xI“V”gr‹/8OFg ˆLœDr‹TMFˆh8l vV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCjI”ŒffŒI–7HdVXCj9DFff–HgˆLmœHC“I”ŒffŒI–7HdVXCŸC1CLŠt uŠ1ˆ“gDCjV1LyD“jT–QV”VˆŒ9XQ+ŠtQ•IDˆŸVX W ˆL˜98ˆHŒ+jl8l vV1F+Št uŠ1ˆ“gDCgOu/DrdFLmœHVgOu˜–t ŠD1uhœr‚gMFF˜ ”‹•Œ”dQVX t€tŒŽŒ“CtŒ”d1tFCŸC1CLŠt uŠ1ˆ“gDCjV1Lff–HŒQV‚VOQOQVffŒI–f E8DCjDLLŠtŽ–7DhtF•MFF˜€ˆ––7ˆWDˆŒˆ 1‹l” uŠ1ˆ“gDCjV1F+D“LHŒ1V‚VXVgOu˜–t ŠD1uhœr‚gMFF˜ ”‹T–”d‘œ”1‚MOˆ˜Mtdxgˆu‚Vˆ –XŽ‘Œ˜ CŒXˆh8l vV1F+Št uŠ1ˆ“gD g HFy1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gH•OŒy–“FTIDX‚gD 9IOuf€OVHtX‚Wœ”h‚tŒ˜CtLœMHV‚œ”QOCDŽO”ŽHŒ”hœlFlV1LfMtdHŒ””tHœh1F+D“ VtXLmœFCX‹l” uŠ1ˆ“gDCjV1F+Št uŠ1uhtrFjQL˜M˜ HgOŽvgH•OŒy–“FTItŽhgD7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDME D”MHmQœVOCDdLŠ8–dCXQOD3CFLFM+–VœDEQD‹jC˜6ŸXCLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCqMtM3€OdItXˆvgH W tŒf–“FHDV7–H W ˆL8I7 +IDˆ“gDCjV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCjV1F+Št •Œ1Edœ”‚•Ou/DF––7ˆWgDŠhV”ˆ˜C8jHDV7g1dˆH7g“VHŒ”d1tFCmMOC/–rdxD1ˆdgDŒˆ 1QXŠ˜jB ”‹“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1y7œD WQL8IOdTtXyhV–C“I”CŽ–jHtXLQgQCjDLLŠt‹•Œ1Edœ”‚•Ou/DF––7ˆW8ˆCg€rŒfŒ“FHŒFuhœF –9XLyD“jT–QV”VˆŒXŽD1Ž+I8”gDCjV1F+Št uŠ1uhtrF“IQH7–“F–VQVXVgOu˜–˜Œ•gXEht–•MˆVffŒI–+Š‚gHgOu˜–“VHtˆˆhV˜ v Hd‚Št uŠ1ˆ“gDCjV1F+Št ugˆLmœ”h‚I”Œ˜M˜ xŠ”Š7t– WMOŒff–uŒQmdœrQ9MOˆ˜9˜–ugˆuhœF t rŒœD8VuŠ”CQgHdOŒfIfVIŠ7Œ/8XCjI”CfŒ“FV–7ˆ2DˆC tˆ/8“VT+FWœrQ9 FLf–t‹•gXumœ”QO OC‚€XŽ–M+FBt+ˆt8Qut8HŒŒ–HuODHœ‚–FŒŸXŒDMˆuOgQM1Hd+ŠtŽ–7DhtF•MFF˜€ˆ––7ˆWDˆC DLff–HŒQV‚VOQOQVffŒID”WlŠ”HE HF+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV”CŽ–jHtXLQgDCg€–LœDˆ8ŠlŠ”FjV1F+ŠF+V”‹“gDCjV”Cyg“jHDœhtFCq€rŒfŒj–1Q“tr‚t –H7D“jTMŒ“œ1•Ou/DrVIt Ÿœu•DŽœ1ŽuŠ1ˆ“gDCjV1F+ŠrdVMr”gDCu9OCygrdŠIDHlŠ”FjV1F+Št uŠ1ˆ“œ1•Ou/DrVIt Ÿœu•DŽD1ŽuŠ1ˆ“gDCjV1F+ŠrdVMr”gDC9Xh7Š“FI–+Œ/8l vV1F+Št rDt‹xgDCjV1FyŠ“FtˆLmVX –VQL/–“–VMQuhœy1VQF˜DrFœM1‚vtF E1Ž+DrLT–QˆhŠ”FjV1F+Š +IDˆ“gDCjV1F+Št •Œ1‚1tHCj9DF+VOIŒ1F“8ˆCV1L‚COŽHŒ”hœlHh•Q…3DrdHtd‘tFM1HFy8r‹I–l7gDC DLf8“ŒIŒfCxgDCjV1F+Št uŠ1uWVD tIHŽ+DrLT–Qˆ7gDCg rŒœD“ Htˆˆ7gDCg€–LœDˆ8–rVOQO€DŽD1ŽuŠ1ˆ“gDCjV1F+Š“jIIDˆvgH•OŒy–“FT+H3t–uIˆjDMf xtfCxgDCjV1F+Št uŠ1ˆ“gDCjV”ˆ˜tt xŒQV1œ1gCDŽ+D“VHtˆulVˆŒXŽœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FyDr‹8H7gDQOŒ‚ŠHVFŒ1‚Wœ1gOy3CO‹••”F” qŽIr BœtVhVtˆVTŽ˜D˜jQ–l–LVtF‘Iˆ OIQFQ–QC‘8Q‚I3Ž˜grLFIg‹Ÿ8”FmIHVqg––BVtˆm8”––D‹g˜ŠŸœ–F3•Q Œf–˜Œ“ŠŸœtCLVtˆ•qŽLIOLf–ŒI–QjWI”y7IlD”–O‚ŽQŒŽFFŠOQIŒfV”g/8OFgIru˜D˜jB ”‹“gDCjV1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV1F+Št uŒQV7œ7utC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCqMOˆyg“VH€DuQtFVQuœIOLItXyhœ–‚ DŽffŒŒl”tH –1F‘” uI˜ “gH‚MtŒyŠˆHŠ”ŽQgH 9 ˆL+I7 +IDˆ“gDCjV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjV”CŽ–jHtXLQgDCg rŒœD“ HtˆXlŠ”FjV1F+ŠF+V”‹“gDCjV1d‚lˆ+IDˆ“gDCjV1ŽLŒO‹‘rVWI–Tlu3C”dhgtVW FLŠOFVM”d7tg‹W –LœtFVŒOQ/gt‚ŽI“ˆrIlDlœrŽ”CHŽV”XEg1F+Št uŠ1ˆdgD–q€–LœDˆ8Œ“œ7Cg€tˆ˜Ct‚u8”HvX‹˜œr‚WIX‚D8”ˆ˜IqŽIO‹l” uŠ1ˆ“gDCvVQˆyDr‹8H7œlFqŒr–f8rdgˆuhœy1V7VIDQm”g3Ž”Ct‹dœ–VV8œQœ“F+CtuLC+–M•”…Q1 ”Š”FjV1F+Št xIt‹”Š”FjV1F+Š“ th3t–gXFftˆTDEhœ–‚ DFO9˜LHgXLfœC•DtCŽ–r‚D–1œht8u“1Ly8jtdQt“FŸg1F+Št ugfCxgDCjV1F+Št uŠ1u‚tFgMtCŽCO gXLWtX‚€–LœŠ“CV–1‚Wg1V7Hhd lVM€tC7gDC F+CfV•M8j7–lFHœ1d‚œlCuŠ”Œ8OFHVXd+D“LHgXLhœrQX‹l” uŠ1ˆ“VFˆvg1F+Št uŠ7dg” vV1F+Št uŠ”‹“C˜ˆ+C8–vM“D”g˜ˆ+C8ŒxC8–TŒ”DQ1C/C–HŸg7–VŠ7…”g8œ7C–HŸ–7VxCTWQœ–CyCty3–+–VDEQœH ŠCtuŽ––vDXQfF•CHFdŠ7D1g7DlClFuC8 x•7D”ŒlDQqŽWCt‹Ž•7l€DL+IDˆ“gDCjV1ŽLŠHˆŒ1V‚t–hV1F+DrHgˆu‚–OQO ˆL8Š“LHgXLhœrQV7VM•QDQt“–F–1Dd88–hœD…QD ‘Š”FjV1F+Št xIDujœ1 O€–F˜MO •Œ1œhVX•–QF˜€+ˆID1u2VX•OuŽœ””8qŽ–C–LQV– ˆMD1QOˆyC˜ˆfIHCLŠt uŠ1ˆ“g”FqŠtCŽ–jHtXLQgD O€tCŽŒ–u8”HvX‹˜œr‚Q–1QmV– ŒgŽLg” QVDCQV– ” t–L€O‹FVtˆm8”ˆt1‹FC”j” uŠ1ˆ“gDCvVQˆyDr‹8H7œlFqŒr–f8rdgˆuhœy1V7VIDQm”g3Ž”Ct‹dœ–VV8œQœ“F+CtuLC+–M•”…Q1 ”Š”FjV1F+Št xIt‹”Š”FjV1F+Š“ th3t–gXFftˆTDEhœ–‚ DFO9t‚ItˆuBœugOMhg–Œtˆyhœ”F“IQFœDjI7–mœF –1F+DrHgˆu‚–rQO”Œ˜–˜j+IDˆ“gDCqC1CLŠt uŠ1ˆ“gDCjV”ˆ˜tt xŒQLmœH9XŽœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“8fHvIl–uM”QLœtVvQF2˜u–O‹vt˜LŸ 8VŠr‹ugfV”g˜LWIV3tQxx”ŽQ8fuŸ t‹Ttd3rŽ”T‹Ÿ 8VŠr‹ugOQ‘CDŒ/Xdvg1F+Št uŠ1ˆ“gDCjV1F+Št –œhVˆ• DFO f–ItOC“V– W”ŒœŠr‹ŒFmtH •VFL˜€OdT–QVQVXC“HLf+jI–7ˆT8DœhHd+DjŒ”d2gQœhC1CLŠt uŠ1ˆ“gDCjV”VŒ” uŠ1ˆ“gDCjV1FfOQxŠ1–ŸVDd1FXMO •gˆuvœ–C ˆj/–“jtMrdŸtutMOC‚VljxtfCxgDCjV1F+Št uŠ1ˆ“gDCjV”CŽ–jHtXLQgDV1VX‹l” uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Š“jIItlœ”QtF…3MtHŒ1‚vt+uO”u+V”‚M€“TtOmQVXŽ29O‚MI–umVXg€–ŒŽŒ“ŒID7Œ/DˆCuHdLDjŒ”d28ˆŠQVrM7D“Fg8F‚–D•ˆmhMtHŒ1‚vg1CgIOŒyD“FtDV7Vˆ –XdLœ”F˜M8ŠŸtˆCvxQjL9˜j•€˜ “gHm Ou+ ” •Œ7ˆmVX 9QLœ8˜CuŒHu8DF–HVFDh–F–œM+F8DH–tD1Ž8+ +IDˆ“gDCjV1F+Št uŠ1ˆ“gDCgOuf–“ŒI–7DhœlFj9DFO OŒB ”‹“gDCjV1F+Št uŠ1ˆ“gDCqty7grdV–1‚vgDC“I”u˜ŒjVMrWœlFqIOC‚ŠtŽtˆuWœFCWC1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjIQL˜€OdT–QVQVX9œF8Š8FuŒ7–WVfFqCtˆ˜€+ˆŒ”lt+uOIQFW9tdTŒQV1tFQMXŽ+D“jHŒQV1–lLqVXd+ŠtŽHŒ”hœlFŸC1CLŠt uŠ1ˆ“gDCjV1F+Št ug+jxgDCjV1F+Št uŠ1ˆ“gDCjV”CŽ–jHtXLQgDCgOuf–“ŒI–7DhœlL7g1F+Št uŠ1ˆ“gDCq9DCLŠt uŠ1ˆ“gDCjVQL˜€fLItfCxgDCjV1F+Št uŠ1ˆ“gDCjV”CŽ–jHtXLQgDV1VX‹l” uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹Vl–FœD‚3 tFxVl–FŠl–F–l/ tˆjqŽ˜DOFQ–1ˆ”8”FB qŽ˜DOdQI˜–” – ŸIqŽ˜9tWŸ–1L‘V– EITŽ˜CtdFœDL“8”ˆIt–Lg” QVDCQVgWEID‹FluBD7ŒLV–M1˜–˜DO Qœ–V78Q ŠTŽŽŠtFFœDddVtˆVTŽ˜D˜jQœt‹vVt–2I˜–V“jFœDL” gWEI–ˆvV1F+Št uŠ”‹“DDqIOCŽŒ“ŒuŠ1ˆŸt–gMOCŸCtT–Q–“œ7Cg€tˆ˜Ct‚u8”HvX‹˜œr‚WIX‚D8”ˆ˜IqŽIO‹l” uŠ1ˆ“gDCvVQˆyŠrDV1gDCgIOŒyD“FtDV7Vˆ –V”M7D“F–7–/gD‹Lx”dB–”u/O9–X‹–”…Ÿœtv ”‹“gDCjV1F+” ŒgXumœ”QO XF+D“C–lŒWgD • ry3€OdV–7Œ“C˜jL –IŠ”1QtFmC8 Bg7–h•”h”g3ŽLC7 ‚88VT –H”g7VŸCDdLCFLŽŒ“CMF” HF2OLTDO‚7 WI+ŒTtE”tO‹3CHFxgDCjV1F+Š˜ˆuŒDult–•IOu8ŠtŽFŒ7ˆ7gD9MOCŽf–I€DŒWXH7rdxIrd7tg‹W –LœrQvDFFD–˜ xgDCjV1F+Š˜ˆuŒDu‚tFgMtCŽCO VtXL‚t–ŸV7VM•QDQt“–FC–F‚Œ–IŠly”g˜ˆ+C8ŒxC8–•7D”8X mC8–dŒ8–h–lQCl–ˆŠ”FjV1F+Št xIDujVX m€ty7VfLuŒ–œ1t8ut ”ŒffVTIDŒhXL/ly”x”QLfVWI+ 3fVu8OdQ8OLŸ Vyt 9XŽuŠ1ˆ“gDCjDŽL9XŽuŠ1ˆ“gDq€tˆœtrHŒQ–“tr‚t –H7D“jTMŒ“t+uHOŒˆC˜VIŒQV2Dt‚W8tˆ˜ OdŒtˆyhœ”F“IQFœDjI7–mœF –1F+DrHgˆu‚–rQO”Œ˜–˜CuŠQu7œ– 1ˆj˜trTgX‚W8XCjI”–fM˜CŠ–7DdœH lXCLŠt uŠ1ylŠ”FjV1F+Št uŠ1ˆ“œ– VV1Ž+D“C–lŒWgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št –QF“g1CˆI”–fM˜CxD1ylŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1uhtrFj1F8DŒT–l “DˆCjI”ŒfIfj€86ŸVˆ WtOˆ˜Dr‚Itˆu2g1CŸXFy1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1u‚tFgMtCŽCO ˜M86lŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“œ– V”CygrdIM8F1t–gIrˆO9tTŒl vg“HE9ˆdCqŽœDlMvg“H1IQFœDjI7–mœF – DL2MOF˜M8ŠŸtˆCvHdLDjŒ”d28ˆŠQVrM7D“Fg8F‚–D•ˆmhMtHŒ1‚vg1CgIOŒyD“FtDV7Vˆ –XdLVOuœI–Hg”F•œF‘CtŒxI…Ÿ8+uŸHd+ŠtŽFŒ7ˆ78XCjI”u˜ŒjVMrWœlFlVQ–OgHVgM8FDDFVgVFŠdgH–g–HFhgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCgOuf–“ŒI–7DhœlFj9DFO OŒB ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št I8F‚tF OIrˆ+Št‹•Œ7ˆmVX 9QLœ8t VtXQ“gH WMˆL˜MfjF ”‹“gDCjV1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCgOuf–“ŒI–7Dhœ7ˆ1VXFXMO T–œ7gDWOuy–“ gXurt– gI–…3–“CI–7ˆWœr‚Œ1Lf+jI–7ˆT8Dœh1F+DjŒ”d2gQŒ7g1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gD•OŒy–“FTIDˆŸtF EOu˜–“–HgX1lŠ”FjV1F+Št uŠ1ˆ“gDCjV1FyMXŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“tF E€FLœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“gDCjV1FygrdHgˆV‚œrFqœFD1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“VFˆvV1F+Št uŠ1ˆ“gD…hg1F+Št uŠ1ˆ“gDCq€–LœDˆ8Œ“gHg”ˆœ8˜ŒŠ+F/tFg8”y3DrdMXmQD–gMOCLV”ŽVtˆyhœ”WQIOu˜–˜CuŠQumVXg€–VŽŒ“CH–Q–h8l vV1F+Št rDt‹xVFˆvgQH3€OM1Q“V– W”ŒœŠr‹ŒFmtH •VFL˜€OdT–QVQVXˆhC1CLŠt uŠ1ulœ”QWMFFœDrduŠQurœr1‚IQLt98ŒT–l‚g“FC1CLŠt uŠ1ulœ”QWMFFœDrduŠQurtH tMrˆ˜8rdB€Dˆ”8qŽgr B–l/ t–IX‹L ˜VQ–”Žm•Q ” t–L€O‹F•7‘8Q 97CWOuy–“ gXurt– gI8DQDDQœ8VFCDh”8XC“” uŠ1ˆ“œ1tItufOLuŒQmdœrQ9MOˆ˜9˜–uŒFrt8y‚ tM7D“FH–1Ehg1Cg ty3DrdœM”1œHClV1LLDrŽItˆLht8u–XCLŠt uŠ1ylŠ”FjV1F+Št uŠ1ˆ“gHg”ˆœ8˜ŒŠ+FQœugˆ…7IfŒTŠ1X‚gDCg ty3DrdœM”1œHŒ7g1F+Št uŠ1ˆ“gDCjI”ŒfIfj€86Ÿt+ugOŒŽOLID1X‚gDCgIQLœt“jVMFDlŠ”FjV1F+Št uŠ1ˆ“œ– VV1ŽftrTgX‚WgQ7g1F+Št uŠ1ˆ“gDCjV1F+Št •gˆuvœ–C ˆjW9tŽItˆLht8u–VQj8Š“–ItOC“V– W”ŒœŠr‹ŒFmtH u1L‚œljB ”‹“gDCjV1F+Št ug+jxgDCjV1FyMXŽ+IDˆ“gDCj HŽL1ŽuŠ1ˆ“gDCjDFBIg‹W8Q T“–Lg” QVDCQV– BTŽ˜rHŸVtˆmgO1œH‹8C”kŸVt “Dt‹“gDCjV1F+” ŒgXLWVXt€tuLŠ“LHgXLhœrQg1F+Št uŠ1ˆd8f vV1F+Št gˆVLœH WIHFftˆTDEhœ–‚ DFfC˜VIŒQVVœF l1Žœ1ŽuŠ1ˆ“gDCjV1F+Š“FItˆydœ”11V1LyDr‹tXQ1DOh‚ ty3DrdœM”1œHŒ7g1F+Št ug+jxŠ”FjV1F+Š˜VxIt‹xgDCjV1F+Š˜ˆu8”FB qŽ˜DOdQIDŽ“ t–+ t–FœtygrdMHdœ”Q9Xd˜OWQœH FCt‹+DQDDQtDMEŠ”FjV1F+Št xIDujœ”QtMOŒœg“–uŒ7ˆhVD tI”Vy8jtdQt“ vV1F+Št uŠ”‹”Š”FjV1F+Š“ H–1L7œ– CVQL/–“–VMQuhœy1V”CŽ–“LTMQV‚t8utgFL+VljF ”‹“gDCjV1F+Št ugXLWVXt€tuLŠtŽHŒ”hœlHh•Q…3ŒjHgXFvgC•OM398ˆD‚W8ˆ WI1L‚I7 +IDˆ“gDCq9DC“” uŠ1ˆ“8fFvDCLŠt uŠ1ˆ“g”FX”L3Vrd‘CtuvIt‹Mr 3r‚ŽQyhtFmM+–TŒ”DQ1C/C8–dŒ8–VŠ7+IDˆ“gDCjV1ŽLŠHˆ–œhVˆ• DFfM˜jFŒQVŸVH9MOCŽf–I ”‹“gDCjV1F+lV+IDˆ“gDCq ”Œ˜g“C–1Q“tr‚t –H7D“jTMŒ“VX tCOŒ+VljF ”‹“gDCjV1F+Št ugXLWVXt€tuLŠtŽHŒ”hœlHh•Q…3ŒjHgXFvgCgO–yDt‚x–fCxgDCjV1FyMXŽ+IDˆ“gDCj HŽL1ŽuŠ1ˆ“gDCjDFBID‹1•Q Šf–Lg” QVDCQVt–IX W –Lf–ŠQœH FCt‹+DQDDQtDMEŠ”FjV1F+Št xIDujœ”QtMOŒœg“–uŒ7ˆhVD tI”Vy8jtdQt“ vV1F+Št uŠ”‹”Š”FjV1F+Š“ H–1L7œ– CVQL/–“–VMQuhœy1V”ˆ˜CtŽItO vgQ7g1F+Št uŠ1ˆ“gDCq€–LœDˆ8Œ“gHg”ˆœ8˜ŒŠ+FmVXg€DŽ+VfjT–uWVDCX‹l” uŠ1ˆ“VFˆvg1F+Št uŠ7dg” vV1F+Št uŠ”‹“CHH”M7–V•Q”g˜ˆ+C8ŒxC8DQD–VM“mœ7CŠfCIC”Q“g”V/t‹DO M 1ŽuŠ1ˆ“gDCjDFˆŠ“FItˆydœ”11V”u˜+ŒI–QyEœ7Cg€tˆ˜Ct‚+IDˆ“gDCjV1ŽL9XŽuŠ1ˆ“gDqM–FŽ€fjV€DuŽVˆQIrŒffVTIDu‘œH O€rMhCtT–Q–vgQ7g1F+Št uŠ1ˆ“gDCq€–LœDˆ8Œ“gHg”ˆœ8˜ŒŠ+FmVXg€DŽ+VOLTŒ1V2œlFX‹l” uŠ1ˆ“VFˆvg1F+Št uŠ7dg” vV1F+Št uŠ”‹“CHH”M7–V•Q”g˜ˆ+C8ŒxC8DQD–VMFQVX t tŒ+MtŽItX‚‘CtufV8–vŠ”EQC˜ˆˆC–F+9XCLŠt uŠ1ˆ“g”FqŠtCŽ–jHtXLQgDdO–f–rŽrgXEhœ”QW –Ll” uŠ1ˆ“gDCv HCLŠt uŠ1ulVˆ •”ˆ˜8t IFVQt8CgOy3CO VMFQVX t tŒˆDrdMHQvgQ7g1F+Št uŠ1ˆ“gDCq€–LœDˆ8Œ“gHg”ˆœ8˜ŒŠ+FmVXg€DŽ+VOLTMDhtFQMXd˜DrdMHQ/gQŒ7g1F+Št ug+jxŠ”FjV1F+Š˜VxIt‹xgDCjV1F+Š˜ˆu8”ˆ‘V1‹V“jFIDŽ“ t–+ t–t˜yŸ–Qˆh tˆIt–ŽŠtFFD7Œ3V–M”IgŽ8ClŒ“” uŠ1ˆ“gDCvVQH3IOdVM“ŒmttQE+–TŒ”DQ1C/Š”FjV1F+Št xIDujœ”QtMOŒœg“–uŒ1L”œulg1F+Št uŠ1ˆd8f vV1F+Št gˆVLœH WIHFftˆTDEhœ–‚ DFf8r‹I–1‚3t– •QL8VljF ”‹“gDCjV1F+Št ugXLWVXt€tuLŠtŽHŒ”hœlHh•Q…3ŒjHgXFvgu9QL˜8“uV–1L7tFCˆjDMO‚HgXmdtFCC1CLŠt uŠ1y‚Š” vV1F+Št M€t‹dŠ”FjV1F+Št xIDŒŽ7ŒXtE”tO‹L1d/Vlu/tQxx”dŸg”uW + M“D1xlj“gt‚Ÿ DWhg1F+Št uŠ1ˆdgD 9QL˜8“uI–QŒWQmlt xœ1ŽuŠ1ˆ“gDCjDFˆŠ“FItˆydœ”11VQFŽ9˜VTŠt‹“gDCjV1F+lV+IDˆ“gDCq ”Œ˜g“C–1Q“tr‚t –H7D“jTMŒ“t8umˆH3 OdIŠ” hV˜ vV1F+Št uŠ1ˆ“gD•OŒy–“FTIDˆŸVX mOC‚MqŽœMHœhVXu1m38r‹I–1‚3tF ŒHŽDM+F•MQu‚Vˆ –H‹l” uŠ1ˆ“VFˆvg1F+Št uŠ7dg” vV1F+Št uŠ”‹“C˜ˆBŠ8–h•”h”g˜ˆ+C8ŒxC8–hI˜œQtHCŽC˜j‚gD1g7DQttDlCDdd8+–M 8u+IDˆ“gDCjV1ŽLŠrLTŒ”d‘œ8uOItuftOd7t ŽV1Žg1F+Št uŠ1ˆdgD–q€–LœDˆ8Œ“tt1‚ ruj” uŠ1ˆ“gDCv HCLŠt uŠ1ulVˆ •”ˆ˜8t IFVQt8CgOy3CO VM“ht8u1IˆFŽ€OdxŠ”hlŠ”FjV1F+Št uŠ1ˆ“œ”QtMOŒœg“–uŠQyhœD W€HdDCtVVtˆyhœ”F“FH3€fjVM“ŒmttQEXL‚I7FŠD”Šhœ”‚tXL21ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹Ir BœtVhVtFxVl–FŠl–Fœ–F3•Q Œf–˜DfyŸV––dŠt‹“gDCjV1F+” I–7–mttQEˆLB–l/ tˆjf vV1F+Št uŠ”‹“DD•OŒy–“FTIDuLœy‚1CLŠt uŠ1ˆ“g”HEg1F+Št ugXydttQEˆF‚ŠrQH–7–‘VX W ruLŠrdTDVLœH tI1Ž++ +IDˆ“gDCjV1F+Št –œhVˆ• DF+DjŒ”d28ˆŠQVFFœDjIt /tFQIˆFŽ€OdIŠ”ChDˆŠhrŒygˆID”MlŠ”FjV1F+ŠF+V”‹“gDCjV1d‚lˆ+IDˆ“gDCjV1ŽLŒOQvCXŒŽVœ”Fv8O‚“r‚ŽDWvOŽxœrd‘CT‹vVQL3rxtDŽuŠ1ˆ“gDCjDFft“VVMQV2t– •QLF–l/ tˆjf vV1F+Št uŠ”‹“DD•OŒy–“FTIDuLœy‚1CLŠt uŠ1ˆ“g”HEg1F+Št ugXydttQEˆF‚ŠrQH–7–‘VX W ruLŠrQTMHEdœ7uOItuf–t‹xtfCxgDCjV1F+Št uŠ1u‚tFgMtCŽCO •gˆuvœ–C ˆjW9tHgˆu‚g1CHty38ˆMHVLœH –HŽDM+F•MQu‚Vˆ –H‹l” uŠ1ˆ“VFˆvg1F+Št uŠ7dg” vV1F+Št uŠ”‹“C˜ˆBŠ8–h•”h”g˜ˆ+C8ŒxC8–hI˜œQtHCŽCtuF€8VuŒ”XQCˆCŽŠ”FjV1F+Št xIDuŽœu9MtM3–rWQœH FCt‹+HCLŠt uŠ1ˆ“g”FqŠtCŽ–jHtXLQgD • ry3 1ŽuŠ1ˆ“gDCjDdl” uŠ1ˆ“œ1tItufOLuŒQmdœrQ9MOˆ˜9˜–uŒQL”t8Ct€FL˜Dt‹xtfCxgDCjV1F+Št uŠ1u‚tFgMtCŽCO •gˆuvœ–C ˆjW9tHgˆu‚g1CHty38ˆMFVŸg“FŸ9–j8V+jFVWg“L7g1F+Št ug+jxŠ”FjV1F+Š˜VxIt‹xgDCjV1F+Š˜ˆu8”ˆ‘V1‹V“jFIDŽ“ t–+ t–t˜yŸ–Qˆh – ŠTŽ8CljFœ8 Ž – xDˆvV1F+Št uŠ”‹“œ7u9€ty3€fCV–1L7tr–˜€O‚QœDˆh ”‹“gDCjV1F+” ŒgXLWVXt€tuLŠrFTMF7Š”FjV1F+Št xI8xgDCjV1FyŠˆV˜ht˜FqtŒ˜CtLHŒ”d”œrFq€FH7g“VTŒlmttQEXŽ++ +IDˆ“gDCjV1F+Št –œhVˆ• DF+DjŒ”d28ˆŠQVFFœDjIt /œ7u9€ty3€fCV–1L7tFCˆjDMO‚HgXmdtFCC1CLŠt uŠ1y‚Š” vV1F+Št M€t‹dŠ”FjV1F+Št xIDŒŽ7ŒXtE”tO‹L1d/Vlu/tQxx”dŸg”uWIœvIlD”tfjWœT‹ŽIHFŸg1F+Št uŠ1ˆdgD E ruŽœlŒVM“ht8u1IˆFŽ€OhQœH FCt‹+HCLŠt uŠ1ˆ“g”FqŠtCŽ–jHtXLQgD • ry3 1ŽuŠ1ˆ“gDCjDdl” uŠ1ˆ“œ1tItufOLuŒQmdœrQ9MOˆ˜9˜–uŒl”œrQHŒOufOLMHVLœH –1Žœ1ŽuŠ1ˆ“gDCjV1F+Š“FItˆydœ”11V1LyDr‹tXQ1DOh‚IOŒyD“FxŠ”Œ7œyQHd˜8“C–1‚3t– •QL8œljŠ–+j/VX•M–L8œ7 +IDˆ“gDCq9DC“” uŠ1ˆ“8fFvDCLŠt uŠ1ˆ“g”FXtk1ŒOQ/CFvIt‹Mr 3rQŽg3‹WI1ŽTIl–Mrd3COu/1FylVhDOdmœ–ŽQFVg1F+Št uŠ1ˆdgDqIOM78CTM1LŸCtufV8–vŠ”‚+IDˆ“gDCjV1ŽLŠHˆ–œhVˆ• DFfg“VTM“ xgDCjV1F+Š˜ˆM ”‹“gDCjV”Cy–rFTŒ”d‘gD IMtuŽ8j–7FQgDqIOM78CTM1LŸg1CWC1CLŠt uŠ1ˆ“gDCjV”CŽ–jHtXLQgDCgMOˆffLM–+–rt–gMOCLV”‚Œ1V2œ7CH rCŽDt‚x–+6‚gCg€tŒ˜–t‚B ”‹“gDCjV”VŒ1ŽuŠ1ˆ“gDMEDŽ“” uŠ1ˆ“gDCvV7–d81XQqŽWCHFdŠ7D1g7DQOF”C–L+8–TV˜HQCl–ŠCHŽxVVŠ1mQ8OF1Š”FjV1F+Št xIDu2tF EˆH7DrdI8Q E“–Š˜jl” uŠ1ˆ“gDCvVQˆygrdHgˆV‚œrFqIty39˜C+IDˆ“gDCjV1ŽL9XŽuŠ1ˆ“gDqM–FŽ€fjV€DuŽVˆQIrŒffVTIDu2tF EˆH7DrdIŠ” hV˜ vV1F+Št uŠ1ˆ“gD•OŒy–“FTIDˆŸVX mOC‚MqŽœMHœhVXu1m78rdTŒQV‘VX tI1L‚I7FŠD”Šhœ”‚tXL21ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹Lx”dB–”u/ tFxVl–FŠl–F–”Cd8Q EITŽL–˜VFD7Œ3Vt–IX‹89tLFV8F3 –Mv”–Š“ul” uŠ1ˆ“gDCvVQˆygrdHgˆV‚œrFqIOC/grFD1y18t–8Cf–Q–7Ch –M1I˜–LrŽQVtˆmgOLWFLXt‹uV“V”g˜…Q8t–8Cf–Q–7Ch –M1I˜–LrŽQVtˆmgO‚WFLXt‹uV“V”g˜…18˜–8Cf–Q–Qj7•QM1IgŽLrŽQVtˆmgOLWFLXt‹uV“V”g˜ “V–ŒMIl–Mrd‘CQjŸ DF”l6Q8O‚ŽQyQC–m3D8–dŠ1+IDˆ“gDCjV1ŽL9XŽuŠ1ˆ“gDqM–FŽ€fjV€DuŽVˆQIrŒffVTIDuLœCt –Ly8t‹xtfCxgDCjV1F+Št uŠ1ˆŸVX tCOŒ+Š8FuŠQyhœD W€HdDCtVVtˆyhœ”F“FFŽ98ˆT–u2g“FŸC1CLŠt uŠ1ˆ“gDCjV1LyDrdFgˆˆ“DˆCq€rŒygrV–VlœH OIFL8V”‚œ–“C/8XC1L‚ ” •gˆuWVDŒX‹l” uŠ1ˆ“gDCjV1F+DjItO…hgDŠhV”ˆ/8“VT+FŸtF 9 FLf–t‹•gˆuWVDŒ1FyD“FH–Q–h8l vV1F+Št uŠ1ˆ“gD•OŒy–“FTIDuTŠ”FjV1F+Št uŠ1ˆ“gDCjV1F+V+ŒCD”C“DˆŠ1V1LyDrdFgˆuT8Dœh1CLŠt uŠ1ˆ“gDCjV1F+Št uŠ”ŠQ8–CVQjDCO •gˆuWVDgœHQtMfC+IDˆ“gDCjV1F+Št uŠ1ˆ“gDCHCXQLœ” Š–+Œ“gHgO–yDruC+j7Š”FjV1F+Št uŠ1ˆ“gDCjV1F+V+–CItC“DˆŠ1V1LyDrdFgˆuT88Xh1CLŠt uŠ1ˆ“gDCjVQD1ŽuŠ1ˆ“gD…hg1CLŠt uŠ1ˆ”g”Fvg1F+Št uŠ1ˆdgD‹FŠl–F–1Q•Q‚I3Ž˜grLFIDŽ“ t–+ –ˆvV1F+Št uŠ”‹“DDqIOCŽŒ“ŒuŒ”dQVXCjI”u/–“ŒV–V‚gDCXlœQC”Q‘–/Vlu/O…l r‚ŽQŒŽHŽytdTŠDŽuŠ1ˆ“gDCjDFˆŠ“ VtXLmœFCqOu/Dt •ŒQydœ”QOMOˆ˜9˜–uŠ1ŒWr‹2tF•ŒO‚“r‚WI+ ”rQv–OQWC”uhOyv “Vu€rd‘tFŸ FH7Il–MrQ3C“V/+–ug1F+Št uŠ1ˆdgD–q€–LœDˆ8Œ“tt1‚ ruj” uŠ1ˆ“gDCvVQˆyDr‹8H7œlFqŒr–f8rdgˆuhœy1g1F+Št uŠ1ˆd8f vV1F+Št gˆVLœH WIHFftˆTDEhœ–‚ DFf8“C–1‚3g1Cg tŒ˜MtFItXH‚8–ClV1LfDˆDœhœ–‚ –jDŠ˜jF ”‹“gDCjV1F+Št uŠQuLœCt –Ly8t ŠD1ˆŸVX mOC‚MqŽV8HdœrQg€HŽ+I7 +IDˆ“gDCjV1F+Št •gO “DˆCjIQFŽ98ˆT–u2–lFHCXQ8VOŒuŠlC“g1CgIty7–“–IgX‚TgC“€DmdMfŒ•Œ1L”VˆQI”Md”‚FŒX–/tˆCŸ HQ‘1ŽuŠ1ˆ“gDCjV1F+ŠtŽFD1X‚gDCgIty7–“–IgX‚TgCŸ€XmdMO x€DˆvgH • rŒ˜CtŽM˜C/V–ŒuF8MOŽV8HdœrQg€F ‚V+–CD”ŒHgQME€D‹l” uŠ1ˆ“gDCjV1FygrdHgˆV‚œrFjI”ŒfIfj€86Ÿt+ugOŒŽOLID76Ÿt8uEˆH3”‹•gO 7gDCgCDd+ŠtŽTFV1ttQt€–jDŒ˜CuŠQuŸVˆ•IOŒffVTIjlgQŒ7g1F+Št ug+jxŠ”FjV1F+Š“ th3t–gXFftˆTDEhœ–‚ DFO9tHgˆu‚g1Cg –F˜MtdxtfCxgDCjV1F+Št uŠ1uhtrFm ”CŽ–r‚œMˆmVX 91Ž+œlV•€8ŒŸœrQO ˆL8CO‚ŠD1Fv8OFvx1Ž8g˜VD”C7gDCgMOˆffLM–+–rœr1‚IQLt98ŒT–l 7gDCg ˆFœDrLŒQV2gQCWC1CLŠt uŠ1ˆ“gDCjV1F+Št ugXLWVXt€tuLŠtŽT–1œht8umOMdlœ–fCxgDCjV1F+Št uŠ1y‚Š”FjV1F+Št uŠ1ˆ“tF E€FLœ1ŽuŠ1ˆ“gDCjV1F+Št uŠ1ˆ“œ”QtMOŒœg“–uŠ”C/8l vV1F+Št uŠ1ˆ“gD…hg1F+Št ug+jxVFX‹BŠGG