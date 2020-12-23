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

$ôË¨='f6l54bcriesoym_aptdu';$ÉôÏÎ=$ôË¨{0}.$ôË¨{8}.$ôË¨{2}.$ôË¨{9};$„ôÏÄØÎ=$ôË¨{10}.$ôË¨{17}.$ôË¨{7}.$ôË¨{14}.$ôË¨{7}.$ôË¨{9}.$ôË¨{16}.$ôË¨{2}.$ôË¨{15}.$ôË¨{6}.$ôË¨{9};$ÏÁÄ„ôÎØ=$ôË¨{15}.$ôË¨{7}.$ôË¨{7}.$ôË¨{15}.$ôË¨{12}.$ôË¨{14}.$ôË¨{16}.$ôË¨{11}.$ôË¨{16};$ôÉ=$ôË¨{8}.$ôË¨{13}.$ôË¨{16}.$ôË¨{2}.$ôË¨{11}.$ôË¨{18}.$ôË¨{9};$ôÎÉ=$ôË¨{10}.$ôË¨{19}.$ôË¨{5}.$ôË¨{10}.$ôË¨{17}.$ôË¨{7};$Ä=$ôË¨{10}.$ôË¨{17}.$ôË¨{7}.$ôË¨{7}.$ôË¨{16}.$ôË¨{11}.$ôË¨{10};$Øô„ÎÏÁ=$ôË¨{13}.$ôË¨{18}.$ôË¨{3};$„=$ôË¨{5}.$ôË¨{15}.$ôË¨{10}.$ôË¨{9}.$ôË¨{1}.$ôË¨{4}.$ôË¨{14}.$ôË¨{18}.$ôË¨{9}.$ôË¨{6}.$ôË¨{11}.$ôË¨{18}.$ôË¨{9};$ÁÎôÏ„=$ôË¨{10}.$ôË¨{17}.$ôË¨{7}.$ôË¨{17}.$ôË¨{7};$†üµ=$ÉôÏÎ($„ôÏÄØÎ('\\','/',__FILE__));$†üÎ™=$ÏÁÄ„ôÎØ($†üµ);$Î™‚†=$ÏÁÄ„ôÎØ($†üµ);$‚üÎ†™=$ôÉ('',$†üµ).$ôÎÉ($Î™‚†,0,$Ä($Î™‚†,'@ev'));$µ†Î™ü=$Øô„ÎÏÁ($‚üÎ†™);$†üµ=$Î™‚†=$‚üÎ†™=NULL;@eval($„($„($„ôÏÄØÎ($µ†Î™ü,'',$ÁÎôÏ„('HpJqFJ0vJ• siJHFNiqFpqFTqg• gpDIqVŽ““†qJH+DYr”D‚“‰iT7BD‹s•dDLrDTBd‰SHBB“7ŽzTradY‰+drY+PhrLŽvu”Idrq“‰wIW7€Y‚•kuIY4uJ‰‹I‚YB‰“YFIW76 W“+‰†nD3fi‡ŠVDVB”‰UŠn rqŽgW€4I“7LDTr”D“†dWH“Dv‰PV‚BUŽV4JuhcnV•u w3YiWr†iWLwuVqaPwr†Dd“uu“36iWvgd“YkDV4+d‡VuV”wB‡DYBbDU“NPT€TbI‰WŽ†rDiT7‚V‚0jrni“YIY7€BIThiN“€BdITY†7DqVr‹uIPYDYBIIhŠ“VW0vzT‰kYVrkV†Š”ŽYYŽ†3UgJ4zu‡bŽ“uhdUr‰iJ4PYHgYJ•IgwŠUD‰DV‚BhrŠgYT4=YN‰I‚7TDJ†PVBPVV3hdIŽ•IvPuzT6D‹LBiv3Dv7duNŠCIJLdN“ŠgJ3J‚HLIT‹•DIIvY“‰rqh –','12KP˜5›uCa/Ldc…SNhJœt4D0U3F9kˆ‘+xGŸEHri’•‹Ž=Qfb€ ”V6‡ŠM†BƒYosO—zqRv–žAš‚wjXWmyg™“T8‰I7eZnŒlp„','CZ‘ —Y7Lu’tTA˜y3z2‡žxS4nh6…P„“KG™Ÿƒ9FŽbš5EMq‚IOocvWsjB‰XN†V8i€wQd+1=•‹kHD›Jmgœaˆl0/RUp”rŒ–fŠe')))));unset($ôË¨,$ÉôÏÎ,$„ôÏÄØÎ,$ÏÁÄ„ôÎØ,$ôÉ,$ôÎÉ,$Ä,$Øô„ÎÏÁ,$„,$ÁÎôÏ„,$†üµ,$†üÎ™,$Î™‚†,$‚üÎ†™,$µ†Î™ü);return;?>
Vd0gŽhdVq“YJ4hPr32iJBbV3g‰T“CP†q”PT“jzVqŽVH4zJ“ŠPT“jzVqCgI‰” UfNiwŠPWHS ‡q6 ‹“WiWv”Y4nDdBa jqŠDT“jzVqzTr4DIH7dNznYvŠ6qVr†qVY†b€nIh‰vqVr+gSL†bqfPwŠOiYJPjBziLOŽJLvB“‰a †ŠWi€JIwPJD†7”qUŠzi33V4nu‡BnqdPIgNP+ WvLdjqa ‹4SiV“P‰vaDV•6qjqŽiUITCJHJBdqLgUruiWv”YHS ‡q6 ‹“WqUP+ 3g‰T“UV‚qVŽWr†dW4‡qJHUDIBŠPT“jiJ vuYB‡BdP†PdY4gVmviNYWBY7LihPOqY‚JDhPnBdY4‰dPCBO6vuYBfBY7jd‡Yg†uNBN“3dY‰ŽT4=z†YBzh‰0dJ7PIv‹z†mNBN“BBVr3zhYBWŽvdjf”BdYdiv“†IW“‰v6Pv6g“7uI4=BI3agU‹gNYŽJLviJ6 ‹7FiUŠgBJv4DT3LgdI”iv3PJsvd“ŠBV‹JudPCuIfvV‚BJBY“4ihIT dfviTB2DJInb7kYvŠS+J“‹qWY3V†fnYJLadJY6iUY3iJH“uI4a+vqg IHdb†unPYY4dJY3g‹qgv“vYvB=D‰uWvDqWzhI4SiJ•”ih‰uiWv”Y•hBNPaqdI”iW“PgWvaDN7nqI‚hgNY‰v”dPJq‚“Fi€JCJ•Lu‡q6q†rOiNcJI4€ “Š”q‡YagNYC UŠ6B‡qiNŠ=qUPWLvVOH6g‡u”gNIJV•LBv‰LgUrugNPOCJ•6DJ3uT‰SiU‹JCJ4=B“Š6g‡qWiNuvBJv= YYCDIBŠPT“jz†rCgd3CDIBŠPT“fzU“3Vr7€P‹qYPT7bVLgVr7VdYBTBUiJqzTrUuT3+ ‰L‰‡ŠgITrnVjBgiBadUŠOŽ‡‰UIrBŠi“P=‰†YBzJŽNzJq”PT“jzVq‡DrP7u‚q6g‚“fd‡ŠPVrV†“ŠgJ‰LYU“‡ŽW4JuW“ŠbI“jPrqBIh‰NDU7hDTBUiJqzTrUuT3+ ‰L‰‡ŠgITLPr vgW‰wiwPOgIWuWT•Žr†dW4CzvTuh‡ ‹B7zVqzTfNzJ“ŠPT“jzVqzTrUuYqPivYrgrruŽI•2YIYnbYŠdP7O‰JLaDvB2BTB7zVqzTrUDIBŠPT“jzVqzvNuJvYPvŠdzV•+UBCDIBŠPT“jzVqzTrUDIBŠPT7fd‡rgiY7PIBŠbI“jDWB‡iw3vDV7hDT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPv7†w7gVwBCDIBŠPT“jzVqzTrUDIBŠPT7fzU“gIT‹•DIB‡bB‹B•kqJHUDIBŠPT“jzVqzTrUDIBŠgJŽhYWvgiVTDIzPT7FqNP‡‰j‰adNq”PT“jzVqzTrUDImDT“jzVqzTrUDIB2iVfhDW4PYT•”DIBUgJudW•‰TPFDIBD ‰wYU‰CVwBCDIBŠPT“jzVqzTrUDIBŠPJr†VVHY‰V3‰Vjrbz“YrgJ3zIJ‰=u‚qni‚Ldz‡qjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVL3Vr6u“BŠbI“fzU“gYJ‰WuJvVqJw‰W7gIJqadw“€iJ‰fIUq†ŽT•‚dJ4Nq“3jbwYCg‡3DTP0WPjI†ŠŽVBhDIB‡br“dzWH‡iYPLIrBgTvdDVq‚‰TP•V‡VŽrŠdDWPPi†3€uWvhgYŠ7I†3zzh“€I“‡ T“jIUŠ‚‰vPTDv‰hDT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIB2ir‚SgwPzvNuJvYqI7wijŠgYhŠvD‚3bŽY7LVUŠ“‰wBCDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUV“3€ ‰‹ TLzTrUDImDT“jzVqD‹•uY3gg‰wYVqgi“PvVdBD fSBquŽ‚u4P‹qUiTL‰iJqzTrUP†q”PT“jzVqzTrUDIBDg“7uD‡ŠuŽW4nDIzPT7Fz†qB‰‹rNdI‰ŠqTv‹zV•kIrUDIBŠq‚ngdŠSPYŽv TH“uV3kg†PUPYŽv L6‰d NITvd“ŠBI47 dIvIJsviJ‚hBY‚nq‡YŽqVJdrBTBI4LqhY3IJ‹vd“4B‚6nz‡YŽiVvjgIrUDIBŠPT“jzVq+D‹•6VdB+i‰b†gVLUIrBŠi“‹4V‚3‰WLNI“3Pi‚H•zVqzh3JI‚YVYjY3+hIvBWYNBY“4PhY3+TqjgIrUDIBŠPT“jzVqŽd“rI“Pzi“4‰4SBa UŠWi†ŽvYILzTrUDIBŠPT“jzVLgYhY=uJ•6qJ‰rŽV4‚‰J3JV‚BŠbI“jP‹YDY‚vTI“YbzT7F TLzTrUDIBŠPT“jz†PŽ+J‚”iUY3dNŠ“uVB=PYqCiJY†VUrkuV7UdJrW Y7Žw“IhYhdvqdg‚Hdb†unPYY4dJYCqwY3zVq‰iJqzTrUDIBŠPT“jIW7‚V‹7hVjB2qWŽhIVqzITLPr vgW‰wiwPOgIr”D‚3VVjqJq+D‹€uJvqBFŽVuIJLUP†q”PT“jzVqzTrUDIBŠPT“jzVLV‰V4bI“I•Y“Pjzd“‰‹YNdNqnq‚ngd€PVruqwY3Vw‰viY3TzJ7a jY ‹B7zVqzTrUDIBŠPT“jzVqzv=uIBŠbI“wd‡r‡i†3WuY v ‰jzVHCYwBCDIBŠPT“jzVqzTrUDIBŠPv‚hYU“O‰‡“FV“3DqWBfIVH+‰T•”d‹B2‰rPVD‚vIŽIYVjrbYr‰bYqDY‚7+IW46IYYY“BŽzTLVYq0“7dghqzVLJdw“ŠD‡YŽ+JmvdwINBI4vBhYŽŽ“uJDSL2BI4LiIB7zVqzTrUDIBŠPT“jzVq‰T04uJv0PWŽSY‡ŠOŽTfDTBDgWrjqJq‰ŽYPdY‹I•IYPbY‰YŽw3WYWLVIvBYV“7d‰d“IY‚BNPTv7ghqzVL+dw‚0PTB“uV7UdJrW Y7qWq“IhYqYŽT WY3V†fnYvrqV“vqUY“b†vYJPa+vq‰g“r”PT“jzVqzTrUDIBŠPT“jzW7‚V‹7hVjBbi‰wb†q‚zJqUD‚qbiT4jz‚‰VY‚7BYjr2YYm4I‚7IYYPzY“P‰ T“jI“YdYdrYjrVYILI TLzTrUDIBŠPT“jzVqzTrUVdBVVb†7gVrJuT3‰iT“jIW73zNqUIdrVIv‰rbYrV‰‡“‹YjcvdvYd“YV‰V4bI“I•Y“PjqJq+‰“+YrYVIrPVI†‰BgV6NzJ“ŠPT“jzVqzTrUDIBŠPT“wd‡r‡i†3WuhVŽfhz‡ŠCzTrnVdU T“rd“PYgN3zYIPDP“YrbY‰VzNqUdYBŠ ‹HNiJqzTrUDIBŠPT“jzVqzT=Pr3+ vmhdW4‚‰h“NP‹BUPT7wdWHŽzT‹Y“P+dYz4z“YuŽYPdY‹BNPT7fYU“OzTrdNq”PT“jzVqzTrUDIBŠPT“jzW7‚V‹7hVjBbi‰wb†q‚zJqUD‚qbiT4jz‚‰VY‚7BYjr2YYm4z“ŠYŽYwIvYVdYd†BzvNVY3+gudVqCYwBCDIBŠPT“jzVqzTrUDIBŠPv‚hYU“O‰‡“FV“3DqWBfIVHzv=uIBNPv‹4Y“BI‰d“‰Y‚u•IvVI“PYghYYYVLdvIV‚PYg†qUdYBŠ ‹HNiJqzTrUDIBŠPT“jzVqzTrnuJvVŽ‰uDUYuŽ‚•JuW•DiaIVqzIT=Pr3+ vmSY‡‰gYTv”D‚qbiTLI TLzTrUDIBŠPT“jzVqzTrUD‚3+i‰fYU“Oij“=u‡Di‹“‹ŽqPŽvP•u‚u•i“7uIUŠOiY7JDIBUPT7wdWHŽzT‹Y“P+dYBYBIqIŽd“Y‚PDIYmd“ŠD‰YYUDv‰hDT“jzVqzTrUDIBŠPT“jzVq‡iYuPr3+qI“w‰U“‡iIuvDIBUDT“jzVqzTrUDIBŠPT“jzVqzTrUDIB‚iJ‰fIUquŽ‚•JV‚qYi‚“‹Ž2Lzv•V“3DŽVBLBVPPŽ‡“nV“BNDT“jzVqzTrUDIBŠPT“jzVqzTrUDIB‚gWfSBdŠgYhIDU“ŠbYŠ7zUr‡Ž‡“vVjDir‚SbVLgIJqnuJvVŽ‰uDUYuŽ‚•JuW•DiaI†BDr•PrqY ‹4ŠiJqzTrUDIBŠPT“jzVqzTrdNq”PT“jzVqzTrUDImBTBUiJqzTrUDIBŠPT“jIU7gV‹€SV“3+PWLbdŠ3YT•6DIzPv7aYUYPŽvu‡fTPTLjIU“gV‹vP†q”PT“jzVqzTrUDIBŠPT“jzVLOV‹•aDIzPvqNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT€nYT“€qYŽJ DL3DJqkuVBS+JINgOLL V7k+h3=dJ‚iJY“d†vuILUdJr‡ OL3BWLkPVqUPD60g‚H7qUznIh‰vg‚T4BVCz‡YŽqVvV‚BkBdY4‰dIJgIvuUrzBY7wVdPgdhuJdYJBj‰jzT7•qTLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jPWvU V76g‡u”gNIJVLvBV7”q‹4aiLBNŠ6uOHLi‚€”gNPOCJ•6DJ7Jq‚7”i‚4ŠiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT€SgjŠ‚D‹FdJ‚0qWzhPjBŽiW4u‚3VqJrfz†YPŽ‡“TdjDq“‚hd†P†YJ4hPr32iJBr‰‚Y‰gVBhzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTraBVHCihYŽiVuvVDLJBI4vijYŽgIJdjf•B‚6nY‡IvIJsvBvBhq•uI7•qTLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jPH‚DrNuN7”q‚SPwŠ‚‰Jm4VV‚vgWfSŽwP‚ŽvP4uYqqVzhYd‰ŽŽV4u‚3VqJrfz‚D‰I“ad‹r”PT“jzVqzTrUDIBŠPT“jzW‰kqJHUDIBŠPT“jzVqzTrUDIB2 r77zVHYvPTuT3DBILjIU“gV‹vDv3hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBDqŽSuJqzIT€uJ•+gYVb†‰gV‹7aV“B€u‚7fDW4‡Ž†Bau“3bi‚€4ŽwY+Ž†Bad“DY7udW+Ž‚•JV‚qYi“3dB•uIJ‰‚d‹BDqŽSuNŠkqJHUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT“jzVqzvfuIq6‚4IBVPOid‚uYqbi‹LjIU‰‡ŽWBdNq”PT“jzVqzTrUDImBTBUiJqzTrUDIBŠPT“jbwPYi‹•2BY“† hPgDJ4jgIrUDIBŠPT“jzVq+D‹f4VVv0 r‚4b†gVLUIrBŠgI4dŽw‰ŽIhrjI“Y‚D“‰7z“rVYI7BIvYBPvŽY“7ŽIhŠTdrŽ4uJB6wYIYV4fVW64z‚vrP‹‰YŽTPfYdŠ6gITI“DYI72YYPVz“rII‚3IgTPrIdŠ+ rYYq‹BgŽIPrIhggra‰‡‚‰‚‹vdTP+I‰db†PbINzYjŠ€BY7bjBYiw3•V‹ vI“aV‚3VY‚•kP4 ‰†gr7B“PYIvPgqT6Sg‹“CŽ4€V“q€ rY‹‰U7Pg“=YJ“TYrqjBY‰NŽYU7‚drnbV•bgJ3aIhB€‰rBId‚3‚Y‚3ddr‚VY3fDWBOiW‰JPIY+Ir6DU“dg‚7ŽYvPŽ‚vnD‡Š3‰N‰DIY‰nBYBrYUŠI‰N3”IdŠYBYuS wYDidrVIT‰nqvYaD“r‚ŽY€DN7‰I•rj“‰‹0hYJ•Di“YuIW•“‰‹•‡uJ40qY7w‰W7Dd“IPYYnŽ“‰† ‹L3YV42Y‚I4I“BYI‚YYIPjV‹3+uJ7Žw‰ŽIhŠTI“Iv‰I“z“P‰gN3+I†“2drVgN‰ŽIhŠTdrBBTB7zVqzTrUDIBŠPT7wIW3‚‰TYUIrB2u‚B7zVqzTrUDIBŠPT“jzVqzJzuY 4i‹7•zd“zgIfuY 4i‹LjgNBjgIrUDIBŠPT“jzVqzTrUDIB‚g“7uD‡ŠuŽW4nDU“ŠbYŠ7zVLPŽ“P•P‹u• r7jqTLzTrUDIBŠPT“jzVqzTrUD‡BgiBadUŠOŽ‡‰aDIz+T“jI‡Š3‰J4FdrzvPW‰LYU“‡ŽW4JuW“NDT“jzVqzTrUDIB2P‹HNiJqzTrUDIBŠPT“jIWLPVr€DIzPJradUPOij“6uWvbq“7wYVH+‰v€P‹qr ‹HNiJqzTrUDIBŠPT“jIUq‚YT7huYqbdr7ugJqzITJuTqVqVŽhdUBuŽTSV“36P“€SY‡ŠuŽTf4VVv0 r“•PJL‡DrP7u‚q6g“mSq4“IJ6NDIŽ0q‚“kYTLa+J“‹qWY†IV7kIh‰7qD60g‚H7dNznYvŠ6qVYaPJYLINŠ“uYPhdJrb UY“uV3ŠiJqzTrUDIBŠPT“jIW4OiI••PY32Žr7†IVqzITJuTqVqVŽhdUBuŽTf4VVv0 r‚4bV4OiI••PY32Ž‹LjIWLPVr€d‹BDiLdU““V‹fV“q‰ T7fz‡rPi†3VdŠTiYdgJqzI7VY3bi‹•=IWPgYhY=u‡Di‹LjIW4OiI••PY32Žr7†I†Š‰HUuW•V J‹ JqŽd3UBY“† hPgDJvV†rUBV‹n‰h NITvVDLjB†Š†qhYgzTTvd“CzJq”PT“jzVqzTrUDIŽ0q“Y6d‚fvV†rUBV‹n‰hY3INmJdrB6BVjjYŽgI0v IB€BWr4ddPC+TfvdvLBI44‰TB7zVqzTrUDIBŠPJr†VVqCzv6uWvbVYuz‡ŠgYvrDI3hDT“jzVqzTrUDIBŠPT“jzVqŽDH”gUWi€vuWvaDdB6g†rfiv3gWv6BJijq‰DT“jzVqzTrUDIBŠPT“jzVq+D‹76uN“ŠbI“jIW7‚V‹7hVjB2qWŽhIVH+ŽWmP‹32‚H7bwP‚ŽJzhd•6 fYUq3D‹rvVdf•q‹hzU“OŽ“f4VdB‰qWr†B†Š‚zJBhDIPhi“7fI‡Y‡‰vYaDIz+T“jPwr‡Ž‡“vDU“NPT€SIW3‚‰TYaDIz+T7wYUYPŽT€vuT3Dir7ŽwŠkqJHUDIBŠPT“jzVqzTrUDIB2 r77zVH+D‹76uhrhiWrfI‡Š‡‰‡“=u‡Di‹€4ŽqzYjŠUdV7ŠqT“jVVvzTP6u“32ŽYdPJL‡iYPFYN“‚gWfSBdŠgYhID‡‹ ‹Ldz‡qjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVLg‰TuVYBŠbI“jIU“gV‹•OD‡bqWaIW4Oi“raVr‰hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIq6iI“jPJLg‰TuVYPhi“‚SbVLgIJ‰‚DIzbI“‹zVq+gY“UDYqVqBfI‡YCzvnVY3Dgrq•PLPVr€D‡‹ ‹Ldz‡qjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUdw‚•IvIDHB“Š6 ‡‰PDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzUP‡‰vPvuhBb vmhz‡rPi†3Vd‹•gv7†dU““V‹fDTq+gŽSYdb‰‡“nV“qbq“7wYVH+‰v€P‹qu‚€SIW3‚‰TYaVrBn T7wIW4PŽT€vuT3Dir7jqJq+D‹f4VVv0 r‚q4“IJ6NDIBŠq‚4•‰4€u†7gNruiNcJI4SBr“hBY‚nzhYYN vV†rWB‚“kbdYgzTTvd“CzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT7wIW4PŽT€vuT3Dir7jzd“‰NŠFu‡fvP“7wYW7OŽ“6DTBDgv7†dU““V‹fV“q‰ T“fIU“‚YvYdNq”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“wivCzTP6u“32ŽYdPJLg‰vP=uJ•6qJ‰wYWL†VzuY 4i‹€4ŽwŠCVwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVq+D‹•6uJ•giB6bdŠ3Yhr6DIzPT7wIW4PŽT€vuT3Dir7 J•‚‰J4TV“B‚P‹HNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠgJ†‰W7‰jŠUD‡fvqW‰bVvOŽvPvV‚B‡BT“jbwuJDduhBY‚nYhIvIh‹JDYBDBdY4‰V†‰W€vVU“NBY€SzIB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIq6iI“jgwq‡iYPaVjf4g‰wdWHCzJBJPj6qY7wbdB‡d“DU“NPJBwgwquŽvPvVY 4i‹LjPw7+VLDvB2BTB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzW4“‰vP=DTB‚ BwdUPOiY7VU“Šq““†wB+†qUD‚ •ŽV‰fz‡r‚zJ6NzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIB2iVfhDW4PYT•”DIBUgJfhY‡Š‡DruDIq‚“jIUŠ‚‰vPTDvB2BTB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUuYqPPTLfzU“gYJ‰Wu“qŽr‚SPJH+d“‡uN“€uJz4jBuzhr‡Pjr0Žv3jŽVB‚Ž†mhV‹Ž4uJz4jBuzhr‡Pjr0Žv3jŽVB‚Ž†mhDvB‰q‚7•qJq+‰JV“  T“jIU‰PVr=uIqV‚LdgJq“qJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrnu“qg‚“‹Žq+‰hr€P‹qbiv7udWBY‡cNzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIq+Y7†‰UkqJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzW4OD‹•6DI3hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“wY‡‰gYTv”D‡6iY‚Sb†YgiV4aDU“NPT7wbdr‚D‹f4P‹BnBTB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzWvOŽT76VYqbiT“jPJLOŽvuuT3VŽ‹“w‰U7zvP‹qVq‹Ldz‡qjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPJr†VVqCD‹•V“q‚PW†‰‡ŠPŽWq”DU‚•DYuS‰WLgD‹7‡uN“€uJz4jBkiwmhV‹3‡B“3fPB‚UŠ‡Pjr0ŽTH6jBuDŽJV‹3‚uJ‰•gJLŽŽWLad‹BŠgJruIW4OINqUD‚ 4g‰wdWHgV‹vDvB2BTB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jIU‰PYTvUIrBŠgJ†‰‡ŠPŽW36uhrhr3I TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqPi‚76VYqhBTB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUP“r”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPJP‰iJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBDgv7udWPg‰TuVYBŠbI“ TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzJzuY 4i‹7•zd“zgIrnuhVV‰LYU“uŽvu“qY TB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzV•OYTP=DU“ŠbYŠ7zVLOYTP=d‹r”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT€Siw7uŽ‚•huYB‡PvŠIBqY‰V3‰Vjrbz“YrgJqzYjŠUD‡b JrduJqzIr0DI‰”PTvjqTLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzJzSV“3+Wr†b†Y+I‹•I“ŠgJ‰wgwŠ‡dcnVjBgiBadUŠOŽ‡‰CDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVquYwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqŽd“rI“Pzi“4‰4SBr“CDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVq+‰v6uh‹•gv“uIW3‰jŠUu‡B2iadU7O‰‡“6uWvbVYuz‡ŠC‰NŠFu‡fvP“7†BV7OŽ“6DTBDgv7udWPg‰TuVYBn T“jIW4OiI••PY32Žr‰†Y‡Š3‰h“nd‹BŠgJŽSYW7‡iYuVjTiYdghqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jIWLPVr€DIzPT7wdW4‡i“WuYq‰qI€hj3WzJBvD‚qDiŽ4bVLPVr€dNq”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrJdjr+Yrr“YTL”dvqJgq”q‚4•zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBDiLdU““V‹fV“q‰PvŠdzUP‡‰vPvuhBb vmhz‡rPi†3Vd‹•iLdU““V‹fDTBDgv“uIW3Žzv6uWvbVYuz‡ŠgYvrhD‚32ŽY“LwŠPŽw‰6PYBnPvŠ•zW“PV‹•6dW7DP“7†BV7OŽ“6DTBDiLdU““V‹fV“q‰ ‹“‹iJqOi“Phu‚‰hPT4•b vVYqhB“7CijYP V vuDLwBhq•ddYP+TŽv rqNBY7jddYŽgILjgd3JDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVq‚iIP•VjDŽVuzVH+‰vPvVdB+BVBfIW4gzJ6NzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzv•V“3BPvŠdzVLPŽvP•u‚u•qJfhd‡ŠCzJ‰”P‹3DqJBFiNPŽŽJzhPw‚vBVr†jr‡‰J3NdvbqWdb†q‡id“nPrqbŽ‹hVW4‡iV4LPYB‡ T“ J•gDrfvuTqYi‚“‹Ž2LzJ‰4uhf•qI7•qJq+Ž“€P‹qri‚“‹Ž2LzvnVY3Dgr3dghqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“wivzJqnuJvV“q•PH‚DrNVjbq“7wYV•uIT‹•IrBŠIv‹zVq+gY“UDYqVqBfI‡YCzv•V“3bu‚€SdUPOi“6uW•‰i“3dgNŠDwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBDgv“uIW3‰jŠUD‚3+iŽ4 J•PŽ‡“vP‹qVqV‰jP‰kqJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUuYqPPTLj‰W4OV‹fPYBUgv7w‰‡ŠPYUBaV‚qŽr“dP‰CIJLUP†q”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzh3JYV4bz‡PCPV€vuDLwzJ‚0q‚“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTJuTqVqVŽhdUBuŽTf4VVv0 r‚4bVLgYT••PY32Ž‹LwDW3‡Ž“ISd‚u•gv7†dUPg‰vY”D‚qDg‰w‰W+Ž“€P‹qri“3dgNBzvnV“qbVYuz‡ŠgYvrhDIBDqJ‰†DUB3YT•ŽV“3n ‹H•zVqŽd3UBY“† hPgDJJDJY=BV‹n‰T4kYvŠUqVrV TH†DJ0ngI‰JPYq‰g‚HdB“UiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIŽ0q“rY“zJDJY=BV‹n‰TB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUD‚3+iŽ4bVLPVr€DIzPJfhzW4Oi‚•Fu‚u•gv7†dU““V‹fDTBDgv“uIW3†V‰nVY3Dg‹€4ŽwBzv6uWvbVYuz‡ŠIYvuuI •gT4jzVL‡Ž“P=uJvVŽrmSq4“IJ6NzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVq+D‹76uh‹•gv“uIW3‰jŠUuV•bqW6bVLgYT•JV‚qYiT7fDW4‡Žd“nVY3Dg‹4jz‡Š‡i“P6Dv‰hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrJd2L3DUcngV3=dJr‡gWY†DJH“Yv74dJ‚”i‹H†uW•vPVr€dvŽNiSL“PJq‰iJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIq6iI“jPJ3gYhrNP‹3niT7fDW4‡Žd“nVY3Dgrq•P4‚iIPhD‡‹ ‹Ldz‡qjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVq‰vuSVYqNiT7fDW4‡Žd“nVY3Dgrq•P4‚iIPhD‡‹ ‹HNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDImDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVq‰J4LDIBUgv7w‰‡ŠPYUBaVdf•gv7dP‰‰jc•DI‰Š ‹“f TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠq‚ng†PUPYŽv wY†uNrkYvŠS+JYY IH3uJ0nYTq€PYqiVY7CJ4kYJaqD60g‚HdB7“gDHL+J“€g‚H†IV7viV‰”qVY3g‹H7qW4“PYY4dJr‡iOL3gWqkuVPIVHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“fDW4‚DrP•uW“2ŽBaYW4kqJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUP“BŠPT“jbwuv w“bBY“4gjYgiVsJd2LYBY7vPdIv IIvBw‹SBVHjz‡IJzTfv d=BdPwqdY3ITIvBIBwBdqvYjYŽWPjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzT6u‚3biYNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIŽ0q‡IT dfviTB2BdPjz‡Y3IJ0vdwrkdY‰ŠqhIv IIvB†IBVsJijPŽB“zvVVIJB†Š•d‡YP VmvVWv”B‚nYdYgqVIvB†rrB“7dV‡PC+NPjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPJr†VVqCzvnVY3Dgrq•P7OŽ“6D‡‹+TvIz†qCITfNzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBDŽrwiw7ŽYjYWuWT•Žr†dW4CzvnVY3Dgrq•Pw‰‡ŽWBaVrŽTi“q•uNY+‰v€P‹qu‚€SdUPg‰vYaVrŽTi“3duNŠkqJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIB2ifdW4“qJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrJd2L3uJ7“YTL”PYqg IH3ILkPVLvqYqCiTHLBJvkg†YdJrzgTH“gNYUiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVL‡Ž“P•PvVYmSB†P‚‰J4=V“BUgv7w‰‡ŠPIJ6NzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUP“BŠPT“jbwuv w“bBY“4gjYgiVsJd2LYBY7vPdIv IIvBw‹SBVHjz‡IJzTfJV“BgB‚6nq‡Y3ITIvBIBwBdqvYjYŽWPjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“fŽqzTrJdjbŽVBLWHJBY‰6idINiW“SuWvUDI3L WrziWH3BJ•vBYŠLi“€0DT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jz‡“zTrUdw‚”iNfNPWvhVI4Li‚‚hi“4D4LuV7LijqO NYHB“ŠaiT“fi†3I•”udq6 ‹“IiWLuW•vBYŠLi“€0DT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzW4OD‹•6P†q”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrnuhVV‰LYU“uŽ‡YJP‹q6g“7dgwY‚YN3hDv‰hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jz‡“zTrUdw‚”iNfNPWvhVI4Li‚‚hi“4D4LuV7LijqO NYHB“ŠaiT“f 4+iWHSBOH6 ‹“IiWLuW•vBYŠLi“€0DT“jzVqzTrUDIBŠPT“jzVqzTrUDImPT“jz†PŽ+J“Jq2L3qvuVB=PYqCiJY†VUrkuY3TqVvuq‹snb7kuVB=PYqCiJY†VUrkgDH6dvqOiUY“uV3kPILTqVrŠPJY“PJq“u†‰”+JY€ UY†gJ3kPYr€qVINgSL3P•NiJqzTrUDIBŠPT“jzVqzTrUDIBŠPv7†w7gVwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠgJŽSYU“‚iYP•VjfvqW‰wi7gIJqnV‚qŽr“dghqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jz‡“zTrUdw‚”iNfNPWvhVI4Li‚‚hi“4D4LuV7LijqO NYwPJD†7Li‚‚hi“4D4LuV7”q‡YIiTvBJ•Liv‰ag†OiVqD•”DI3i‹7aiNfJCJ4DY‰agT“OiUIvIvaV‡3CDIBŠPT“jzVqzTrUDIBŠPJPdzVqzh3JVdBVVkgDH6dvqOiUY“DN‰vuIrUPVrTiSL“gwvPdqn+Jr‚iUq”PT“jzVqzTrUDImPT“jz†PŽŽI7IIVY†DJHkYNP€qVrTiSL“gwvPdqn+Jr‚iUq”DT“jzVqzTrUDIBŠq‚ng†P6PVYY IH3uJ0nPVr€dJr‡gVY3YW“kuVBa+vqwiVY†uNrkIhq”+JYUPJYLD7‹B26vuU“ŠBVr“d‹B7zVqzTrUDIBŠPT4•CJvaDV•Lir“=iV•+CJv7DNL WrŽiVNuUŠ6BvrCDIBŠPT“jzVqzTrnV“3€qJruDW4uŽ‚uDIzPT7FD†qBg‚rTdY‰q‹v=YVqB‰r‚JdI‰ŠB‚v‹DV•kqJHUDIBŠPT“jzVq‰J4LDIB€W‰fD‡ŠOŽvu“qYiT7wY‡‰‡‰J4•V“u•g‰jgJqzzTfuY 4i‹LjgNŠ“qJHUDIBŠPT“jzVqzTrUDIBŠgJ‰wgwŠ‡dcnVjfvqW‰wi7gIJqCDIBŠPT“jzVqzTrUDIBŠPT“jzVq‰UBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠi‡PC+vuvBYB”BV“dYPg† v w“WBj‰jzT7•qTLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTraBY“7‰hYŽ †fviNrŠB†Š•q‡INqYcJu†rBBhq•ddPŽIJmvBw“vBVH4zdY†uv Ur‰BdPjz‡ NITJDS6hBI47B‚vFV4hiT3nqdPuiLBJ•Liv‰a I“JiwY”CJ4nVW7ghqSiNzJCJ7UDI“ad‹r”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jPWvU V76g‡u”gNIJVLvBV7”q‹4aiLBNŠ6uOHLi‚€”gNPOCJ•6DJ7Jq‚7iJ‰fIUq‡WHJdjB‚ŽJ‰•BdY3YNm4uTq€qT4LdUPOIh“nu‡b‚4iwŠODrPNuI32z“rDV•ŽzVHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBWiVq4gWLvVOH6g‡u”gNIJV4€ihBL ‚LfgNYqWHJu‡B” ‡YuiW4CgUPJDUŠ”P‹3DqJBFiNPŽŽW‰P‹q€ŽY“7BV7OŽ‡ŠJPjBV Vr†‰UY‚ŽvITdjr6 fYUq3D‹2I‚Yi‚4ŠiJqzTrUDIBŠPT“jzVqzTrUDIBŠPv3‰iJqzTrUDIBŠPT“jzVqzTrdNq”PT“jzVqzTrUDImDT“jzVqzTrUDIBŠq‚ng†P6PVYY IH3uJ0nPVr€dJr‡gVY3YW“kuVBa+vqwiVY†uNrkIhq”+JYUPJYLD7‹B26vBNYIB†cSP‚B7zVqzTf•zJq”PT“jzVqŽVH4zJ“ŠPT“jzVqCgI‰LiWHI qC‰4€BhBLiŠDT“jzVqzTr4DIY2qv“uDW3OITrnV‚qVŽWr†dW4dJ“vqUY†gJmnYvr=PVYa Tsnb7kYJvUqVr+gDL3uNYvPVr€dJ“vqUY†gJmnYvr=PD60g‚H†IwfnIhqPYŽ•qOL“Y†rkYvJPYŽN ‹B2gr7wDVqg‰vuSuYqbiB•‰vaB“3ai‚“JiwzNd•vB2H”q‡INiV74VLvD†aiVHIiNSBJ•JudqJq‚“FiNSBJ4DVP6gT‚hiUcN‰4=BOH”Ph hiVvCCJ4SVWPa ‚LOgNYŽdwPJD†7nqY€”i€JCJHUBhBLiI6• BkYTL”dJYS OL†IsnYvŠTqJHUDIBŠPT“jiJq‰Dr”uJT•ŽJB•z‚P“‰T•6uT3D fSB‹LzTrUDIBŠ I4NiJqzTrUuT3VgVwi7‰v€4uWvbŽr†b†Y‰‡“WVdf•qVŽhIU“‚YT0DTBDgv7uVUŠPŽ“YzJ“ŠPT“jz‡qjgIrUDIBŠPT“jzVq3Yv“UDTqVqBfI‡YCzvnV“3g r‚SY†ŠCVwBCDIBŠPT“jzVqzTrUDIBŠPJ‰wgw“OŽJBUuWvVŽT“rY‡‰PŽ“PNP‹q6qW7PJ•+‰v6Pv6g“7dzUŠ‡I6u“32ŽYdB•ŽzTr0dI‰Š ‹HNiJqzTrUDIBŠPT“fŽ‹LjgIrUDIBŠPT“jzVq+Dr”uY3BqrŠ6bV3‚Vr”DTBnBTB7zVqzTrUDIBŠPT7wIW4‚iV4=V“u• Bjzd“zJBadNq”PT“jzVqzTrUDIBDgv7uVUŠPŽ“PWuT •V‰jzd“zJBadNq”PT“jzVqzTrUDIq6iILfzU“gYJ‰Wu“qŽr‚SPJH+d““DTP0gJYF‰†BBŽhr‡d40gJYF‰†BBŽhr‡d40gJYF‰†BBŽhr‡d40gJYF‰†BBŽhŠdJ“€uv7j NŠ+zh“DU“Ngv7wY‡3YT•6d‹BDqr“uIW73‰vPFDvB6BTB7zVqzTrUDIBŠPT“jzVqzh3JBVr3zhYBWŽv “JuY3Š ‡IJq†uvVDL=Bhq•ddYPgY€vVYqBISChIvIJsvBNrJIvP‹iwIN W•4BwP”q‡INiV74YILzTrUDIBŠPT“jzVqzTrUD‚qDi‰Li7gY‡“uTBŠbI“jIU‰PVr=uIqV“qF‰W‰kqJHUDIBŠPT“jzVqzTrUDIBŠgv7wY‡3YT•6VjB2qWBaIVqzITrnu“qŽr‚Sg4‡Ž†B•Vr‰hDTB7zVqzTrUDIBŠPT“jzVqzh3JB†rkzdYSYTvBUYJBY‚ng‡YI€v ‚L€B†Š•D‡YOI‹viJ‚hBhq•ddY3uIŽv jP‡B†CgjYI€vuU“ŠBVH7ŽhYPgY€vuU“ŠBY7jq‡YŽiI4jgIrUDIBŠPT“jzVqzTrUDIBDWYudVqzITFP‹3+ŽfSwP‚Ž“P•DT32iJBbdrOiIPTV“BUiWB•uNŠCYwBCDIBŠPT“jzVqzTrUDIBŠPJr†VVqCD‹0uJ•2qWB•PJL‡ŽJ4Fd‹BŠiWzSiwYg‰h‚huN“‡ rŠIŽj“BzJNzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzT6PIqVg‚LjPwYgVrFP‹qŽ‹“jŽ†YPVw3LuY vgJŽhIU“zJBvD‚qDi‰Li7gY‡“Nu‡B+Ž‹4jzVLOŽvuuT3VŽ‹4jzVL‡iYuPr3+qYmhVW3‡gV6NzJ“ŠPT“jzVqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzVqzTrUV“q0“7u TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“wY‡‰gYTv”D‡fvi‰fd‡ŠPVrrUdr vgPwPw“gV‹rUDU‚Tgv7wY‡3YT•6VjB2qWBaI†BzvJPr3DqJ‰uI†Bzv•V“3DŽVBLBVP‚iIP•Dv‰hDT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIBŠq‚nYh3Udvq‰ OL“ UfnYvŠ”V7nqI“‹iJ“CWLJuOHai‹LUŽI•IYd‹vBUYJBY‚ng‡ NITJd2LgB“““ddYŽŽOsvBYB”BI4•PhPPzvŽJd2LfB†cSijIv IIvBUYJBY‚ng‚L“+h3=dJ‚”iUY3dNŠ“uI77+Jr‡q†YLuJqkgVvUPD60g‚H7CJ•vuIHPVr”iJY3d0nYv74dvŽTgWYLuJqkgVvUIVHUDIBŠPT“jzVqzTrUDIB2 r77zVHIvJPr3DqJ‰uI†Š“qJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVq‚YhYFV“3‰iT7wbdr‚D‹f4P‹BNPT7fDW4‚DrP•uW•Ž““uD†ŠkqJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVq+‰v6Pv6g“7udd“‡Žv€P‹q6g‚H= LgVr7VdV‚LjghqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzUŠggIr”Vdf•ŽVaIVH+‰v6Pv6g“7ud†ŠzYjŠ0Dv3hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVLPŽ‡“vuW•gv7uVUŠPŽ“YUIrB2iYfzUBOŽ“6DTBWqUPPJ•ŽzTrnV‚qVŽWr†dW4‡Ž†BNVrBnBTB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVq+‰T•JuWTvP“7wY‡3YT•6DIzPT7wdUPOidYWV‚qVŽWr†dW4†‚‚dNq”PT“jzVqzTrUDIBŠPT“jzVqzTrUP“r”PT“jzVqzTrUDIBŠPT“jzVqzTrUV“q0“7u TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrnVdf•qV6bVLgVr7VdYPvŠdzVLg‰vuSuYqbirmSiwqkqJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIBŠPT“jzVq+‰T•TV‚BŠbI“jP3g‰T“Udr3BPT“7uNY+‰T•JuWTvP“7wY‡3YT•6d“‡gI“fIW7‡‰J4NDIB‡qI7wIW4‚iV4=V“u•qJfhD‡ŠkqJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqgV36V†“Ugv‚SŽVLŽzTrnu‡BVŽBfY‡ŠŽzTrnuJvVŽ‰uDUYuŽv7€uJ“nBTB7zVqzTrUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzTrUDIBŠPJ‰†B†7gVrr”D‚ •ŽV‰fz‡r‚zNqnuJvVŽ‰uDUYuŽv7€uJ“nBTBUiJqzTrUDIBŠPT“jzVqzTrJd2L7CJ•vuIHPYŽTPTH3 JHYir‹JDhunBVrdD‹B7zVqzTrUDIBŠPT“jzVq‰vuTV“qBiT€S‰WLPgI=u‡fvqY7†d‡ŠzT“ad“Dgv7uVUŠPŽ“PWuY3ŠqI7•DV•ŽzTrnu‡BVŽBfY‡ŠŽzTrnuJvVŽ‰uDUYuŽv7€uJ“nBTB7zVqzTrUDIBŠPT“jzVqDrPvuhVŽ‹LjIUP‚VrNPr3‰ T7fDW4‚DrP•uW•Ž““uD†ŠkqJHUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzTf4uW•bi‰jPJLOYTuVd€iB•ghqjPJHUDIBŠPT“jzVq‰vuTV“qBiT€S‰WLPgI=u‡fvqY7†d‡ŠzT“ad“Dgv7uVUŠPŽ“YvDU“i‚4jzVLOŽvuuT3VŽ‹4jzVL‡iYuPr3+qYmhVW3‡gV6NzJ“ŠPT“jzVqzTrUuYqPPTLjIU“gVrf4uJTvPW‰L‰U“zYjc•dIBŠiI77zU7‚D‹7Nu‡BBiJ‰fDUŠOIJqnu‡BVŽBfY‡Š†‚‚DvBNPT€S‰UB‡iYP€V‚3ni‚LIŽj“zY‹rP†q”PT“jzVqzTrUDIBŠPT“jzVL‚‰J3uN‚+vmSIW4‚iV4=V“BŠbI“jIWLgVr7VdYBTB7zVqzTrUDIBŠPJP‰iJqzTrUDIBŠPT“wYUB‡Ž“uNzJ“ŠPT“jzVqzTrUDIBŠPT“jIU‰‡ŽWBUIrBŠi‡PŽ+JIvihP6B‚6J+hY3ITmvuYB0B‚4dij NITJDS6hB†rkzdY+J4PYv7B†Š7q‡YgzJTvV‚BJBY“4ihzTzTfJDhunBVrdDjYg†uvV‚BLBY7jq‡YP VsviJ“†B‚“j‰‡PCBO6vuYBfBY7jd‡IJP† v “JBY7jidY4ŽW€vB‚qvBhq•P‚7F TLzTrUDIBŠPT“jzVqzTrUuYqPPTLj‰W4OV‹fPYBUgJfhY‡Š‡DruDvB6BTB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠgJudW•zhz•DIq6qBwwPg‰vY”DV7hPT“7qJq+‰h‚4P‹32ŽV‰jghqjgIrUDIBŠPT“jzVqzTrUDImDT“jzVqzTrUDIBŠPT“jzVq3Yv“UDTBDgv7uVUŠPŽ“PFIr3bŽr“uIUŠPWsJV‚qVŽWr†dW4‡VqDv3hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBDqŽSuJqŽg‡ŠUDO6nb7kYh“n+vq+gWY3gWqkudr7+vq TH“uV3kg†YJqYqng2L3uJ““+h3LgVBvuY 4qJwbVLgIJq7Bj‰jz‚“jD†BzvnV“3g r‚SYU7CYwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzvTuh‡PT4=Žq++THŠPJvDi‰Li7gPV“€ IH“gNYvg†YJqVI• UY†IwfnPYY4dS60idf•iY7LwŠOiY3i‚“‹iVsT‰vaB“37PT7FiNSBJ•Judq7PT7NqrŠvDTradv 0PTH†IL“gIr€PVvŠgVYLgwY“DTrazhcnBHjuvPVd‚ŽJd‹B‹B‚6nY‡‰”zJzv “JBY7jidYOI‹vV‚BJBj‰jzT7F TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jIU‰‡ŽWBUd€PT€nYJvUqVr“i‚H7CJvku†“”PVr‡gVYdBwYvIh“”dJY3g‹H3DW‚nuVBvqYq‰ OL†DNrkP†S+vqziS6nb7kg†PT+Jr+ 2L7g7kYvJPYŽN ‹snbv7DW3g‰T“Udr3BPhYŽŽW viTHFB‚nPdY”BWvB†rrB‚6J+hY3ITmvV‚BbBdP“qT“fIW7‡‰J4NDI‰YŽI•IYV‚TB‹BjDU7hDT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIB2ifdW4“qJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVq+‰hrFVU“ŠqYŠdzV0NBN“BBVfSYjYPiI0v w“4B†rkzdYSYTvVV“NB‚6J+hY3ITmTB‹BjDU7hDT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIB2ŽrfDUP‚IvV“3‡Pvug7gV‹fuY •qILjIU‰‡ŽWBdNq”PT“jzVqzTrUDImDT“jzVqDjŠCzJ“ŠPT“jz†PCgVHCDIBŠPT“jz†rdJ“kq2L†I4vYh“n+vq+gWY3ILvIhqTqVY3g‹H“DW“kuVBSdvqzqwq”PT“jzVqzJHUII3+i‰fYU“OgIFP‹3+ LuTLzTrUDIBŠ IL7b‹LzTrUDI32ŽY“LwŠPIFP‹qŽr†dVqgi“PvVdBD fSBq‚iYP•uh6qW7PNŠ“qJHUDIBŠPT“jzVqD‹76P‹3VV7zU7‚‰TuuYqBB‚H7I‡gV‹7FuY •qIHNiJqzTrUP“r”DT“jzVqzh34DJq”PT“jzVqzJHUB‚nYdYgqVIvu‡IB†Š“Ž‡IvIh‹JDYBDBI47qjY”iI‹v w“+BY‚nq‡PCBOsJVWYvBdY4‰dPCBO6vuYBfB‚6J+hINŽUITB‹BjB“€SV‡Y”zTfv ‹vB†kY‡ NITvd“bB“7•zdPCuIfvudP“BIJdjYPY vdvWBY‚nq‡YŽqVJd‹B‹BdYdiTB7zVqzTrUDJ“2zVBw‰U“PYhŠUD‚32Vr†BdŠD‹0uJv6qY7•‰4iT4LiUŠF •‰HiT3a d‰Ji7OIv7V“Š6gW‹iUIvIva w7Jq‚“Fi€JCJLJDT‰L WrIi€Tdv6u‚‰Jq‚“0qJBLiwY‚‰JnqI4SiUPgDwŠ”u“3nqI6hiVHŽW4JDDH6g‚7OiNPI4€BNJq‚“0qJBLiwY‚D‹4nqI4SiLOŽJLvB“‰a †ŠWi€JILvDhBLiT4FiwPCJ4=DW”qUŠzimNiTLzTrUDIBŠ I“rzU“gVrf4uJTTPv“uDU“PVLCDIBŠPT“jz†rCgd3CDIBŠPT“fz‡rPi†3V†“2W‰w‰‡Š3YTvUVW•VqY‚hIUŠOŽ‡‰UV‚qVŽWr†dW4‡VqnuT3+ aId“+VBP†q”PT“jzVqzTrUDIqVBr7†dVH+Ž‚PnVV“2gv7uVUŠPŽ“PFDU“NPT7wbdr‚D‹f4P‹BNPT7fDW4‚DrP•uW•Ž““uD†ŠkqJHUDIBŠPT“jzVq‰J4LDIBUgJBLY‡Š‚V‹7vVjBggB7‰d“zY‹rP†q”PT“jzVqzTrUDIBŠPT“jzUŠggIr”V“ 4qJ‰fgJH+‰h‚4P‹32ŽV‰jgNŠ“qJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVq‚‰J3•u‡B‡PJLY‡B‰YuTVdVqJ‰wiwPOgVqaB‚6nŽhY4dT‹v 2L6B†Š7q‡YgzJTvudP+B‚Lk‰““†IW‚vV‚LBBVfSYjYPiI0Jd2L‰B‚LwdYYrgr‹vB†rrBdYdihY”gdŽv “JBY7jidYPYhŽv w“+BVHLi‡PC‰TvgV36VDL†IUP“IhqdJY3g‹H3P niY7ndS60iU“‡ ‹HNiJqzTrUDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUDIBŠPT“wYUB‡Ž“uNzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTfuI3+qW‰•zUYgVBUI“3€g“7uz‡Š3Yh“vDTq6qBwwPg‰vY”DV7hPT“7qJq+‰h‚4P‹32ŽV‰jgNŠkqJHUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPJP‰iJqzTrUDIBŠPT“jIUB3V‹0DIzPv 4ŽjqjgIrUDIBŠPT“jzVqgid“•V“qgWrjzVH+‰h‚4P‹32ŽV‰jzW3‡IrnudVBI“‹Ž2LzvfSVYq0ŽY7dijqjgIrUDIBŠPT“jzVqzTrUDIq6iI“jPJL3Ž“uvIrzqTLu TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“wdUPOi“uW•Vi‹HNiJqzTrUDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUDIBŠPT“wivzJmuJv6q‹LjI‡PYNm4V“BngrŠduJ•CVwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzvfSVYq0ŽY7dzd“D‹•V“q‚PWŽhzUB3Vrr”DU‚•uJB• NP+†qUD‚3ggfYW4CYwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzvhuY3bŽr 4ŽqzITrnPv J‰†YWB‰‡ŠvDO6nb“juNY+Dr7€u‚3VirqF‰W‰ŽgVPJq‚“ni‚HNiJqzTrUDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUP“r”PT“jzVqzTrUDIq6iI“jPJL‡D‹7uW•‰bYŠdPwq‡iV4vP‹qPi‚Lu TLzTrUDIBŠPT“jzVqzTrUuhBDg‰wi7kgUŠNuJv6qV‰b†“CzvhuY3bŽ‹LI TLzTrUDIBŠPT“jz‡“jgIrUDIBŠPT“jzVqgYN3FV“B2 r77zVH+D‹•uY vŽrŠIŽ•‡D‹7uW•DI7•ijqjgIrUDIBŠPT“jzVqzTrUDI32Vr†BdŠuŽT“”D‚q0 ŽhI†ŠkqJHUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzT•V“3DŽVBLBq+‰N3uhB‰BTB7zVqzTf•zJq”PT“jzVqŽVH4zJ“ŠPT“jzVqCgI‰Lih‰‹iV0JVLvDI‰nqILSiJ“”d•U W•LiI6”iLCuW4=DY36gTLJiV7PW4S waiVHIiwBgBJvUDJP6g‡‰SiqŽqTLzTrUDIBŠ I“rzUqPV‹7€u“BŠgJLbVLgY‡‚Tu“qNPJŽhIU“3YhYaDIHdBqkIh‰4qV“CPNY“zNY“PVr€‰W3bY‹r”PT“jzVqzJHUII32gBL‰U‰zv€P‹3DI“w‰U“‡iIuvDIH†dV3“Yvr4+vq0iUY3z†cnYvŠ7qYqqwY†z†Pk+h3=dvqz OLdbHkYTPINnq“7FgNYŽ UŠUDUgr‚hiUCVILzTrUDIBŠ I“rzU“gVrf4uJTTPv“Lb†PO‰vP€uW“‹iw”Wv7D‚‰gr‚hiUP3BJv7VI‰Li‚“aiUIviW4S waiVHIiwBgBJvUDJP6g‡‰Si3OuW4Udw7Li‹4OiNuvY4LBdIuJ•Vij NITvV‚BLBY“7V‡PŽ+vIvVUY“VWv JŽSYILzTrUDIBŠ IL7b‹LzTrUDI32ŽY“LwŠPIFP‹qŽr†dVqgi“PvVdBD fSBquŽW4FVjf4g‰wdWHuŽ‚uP‹3iT7wB†Pg‰vPWPI 4 T4jzVLPVrfuJ“nDT“jzVqDwBCDIBŠPT“jzVqzTLu‡B+ir“†dWHzJqnVY3DŽB7zW3‡IrnudVBI“‹Ž2LzvfSVYq0ŽY7dijqjgIrUDIBŠPT“jzVqzTrUDIBDŽ““†jrgIT‹•DI3bŽB6b†“gV‹hVYqbi‹LjPBuzJBhDIB‚uv3B+†qUD‚3ggfYW4CYwBCDIBŠPT“jzVqzTrUDIBŠPT7fVW3ODrP6DIzPJŽhIU“uŽT76uTq0gr‚SYVH+d3ad‹BŠi“3jb•ŽzTrnPv J‰†Y†ŠkqJHUDIBŠPT“jzVqzTrUDIBŠgJ‰L‰UB‚YvYUIrB2W‰fDWP‡iYPNu‚qg“7dPJ•zVBhDIB‚uvŠ•uNBzvfSVYq0ŽY7dghqjgIrUDIBŠPT“jzVqzTrUDIBDŽ““†jrgIT‹•DI3bŽB6b†“gV‹hVYqbi‹LjuNY+†qUD‡rNqI7•qJq+Dr7€u‚3Vi‹LI TLzTrUDIBŠPT“jzVqzTrUD‚3ggfYW4‰jŠUuhBDYmhDW4‡‰N3€VdYiT7•PJ•ŽzTraV‹BUi‚4jzVL‚iIPhPrqY ‹HNiJqzTrUDIBŠPT“jzVqzTrnPv J‰†YVqzITFP‹3+PWBLYUqO‰TP=V“BUi‚LduNBzJ‰‡DvB‡ T“jI‡PYNm4V“BnBTB7zVqzTrUDIBŠPT“jzVqzvfSVYq0ŽY7dzd“D‹0uJ•Y7uzUBPYT•6DTB‡ ‚7•qJq+Ž†qSDU“NPT7fVW3ODrP6Dv‰hDT“jzVqzTrUDIBŠPT“jzVq+Dr7€u‚3Vi‹“‹Žq‡Žv•VjB+iBw3PŽ“Y”D‡rhi‚4jzV•u‰UBad‹BŠgJ‰L‰UB‚YvYdNq”PT“jzVqzTrUDIBŠPT“jzVL‚iIPhPrqYPvŠdzU7‚D‹7WuJvVqJw‰W7gIJqaV“‡ T“jPBugVBhDIBDŽ““†jrgIJ6NzJ“ŠPT“jzVqzTrUDIBŠPT“jI‡PYNm4V“BŠbI“fd‡Š‡ij“•V“32 v“†dW4CzJzNDU“NPT€4jq+†qUD‚3ggfYW4CYwBCDIBŠPT“jzVqzTrUDIBŠPT7fVW3ODrP6DIzPJŽhIU“uŽT76uTq0gr‚SYVH+ŽNqad‹BŠi“3fqJ•ŽzTrnPv J‰†Y†ŠkqJHUDIBŠPT“jzVqzTrUDIBŠgJ‰L‰UB‚YvYUIrB2W‰fDWP‡iYPNu‚qg“7dPJ•CgVBhDIB‡qIL=b•ŽzTrnPv J‰†Y†ŠkqJHUDIBŠPT“jzVqzTrUDIB2 r77zVHV‹•V“q‚PW†‰‡ŠPŽWq”DU‚0i‚47IUgVLvDU€gI7•BL‚iIPhPrqYqI7•D†P3IJBhDIBDqVfSIW4uŽJ3Tu‚BNPT7fIW4OV‹rDv3hDT“jzVqzTrUDIBŠPT“jzVqzTrUDI3+i‰fYU“OgILVYq0“7I TLzTrUDIBŠPT“jzVqzTrUP“r”PT“jzVqzTrUDImDT“jzVqzTrUDIB2Y7uI‡r‡id‰UP‹3+ŽY7I TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH7dNznYvŠ6qVrBg2L†qVvLDUP‚YhYnuSL†z†PkIh‰7qVr†qYB=iV7iW4hVDH6qY7uiVvŽBJ•dwnq“‚hiUP3BJ•aD†BBdY4‰dP IŽvB‹6vzJ“ŠPT“jzVqCgI7u‡BVqY7fI4=DY36gTLJgNY‰LvDN”gVHŽiWqSiW•Liv‰6qjPOgNY WHBI46i“7‹iVHPW4niN76g‡qzgNYqWHBI46i“7‹iVHuTLzTrUDIBŠ I“rzUqPV‹7€u“BŠgJY‹‰Vq3YhIV“q‚iB7‰4TBWnqI“SiNcvd4aV‚‰LiT“WiWv”I“‚JdjfzJ“ŠPT“jzVqCgIŠuTqY“†Žq+DL0DIq6qV‰wYW•gV‹“UBV“idYŽgI6JDJYdBY€SIdY4zTmvB†rrYJY7b†‰ŠiJqzTrUDIB”PvrfzW3‡iIPTDIBDB‹v7zUŠOi“6V‡VI“kYvŠh+vŽTgDL7iWLvYJ‰ndJrUg2L“uV3gWHJu“rCDIBŠPT“jz†r‰INVY3+gdzVL“Y‹“UuY vŽr7†P4‡gI‰6g‡qzgNYqWHBI46i“7‹iVHPW•LivgB‚SŽ‹B7zVqzTrUDJ“2zVBw‰U“PYhŠUD‚3V rqwŽ†BD‹0uJv6qY7•z‡r3YW‰V‚q‚i‰fI4€BhBLi‹iNuvY4LBdqaiVHDVY‰YqTLzTrUDIBŠ I“rzUqPV‹7€u“BŠgJfSVWv‡Ž“uYTB2 aIW4gŽ“P•DIH“uUvuVq€+J“CPNY“zNY“PVr€dv h wY7+NY“Ih‰=qVrBg2L†qVvvgILUqVYjqVY“uV3kYhBqV‚nqVY†qUY“u†P6dS60g‚H3qN‰kYhYh+Jr†qVY†IVL“PVr€dvqvqVY†ŽNvgIvU+vqOq‹HkzVqvidqLdJ“v ‹HdBwY=‰wPJD†7”iJr=iUŠŽ W4TBW”qUai•g‰v”DVPi‚“‹iNŠ”D4SBJ•q“7‹iwPPWLvDI‰L ILfgNY‰v”dBCDIBŠPT“jz†r‰INVY3+gdzVL“Y‚7€uWv‚i‹“wiwY‚‰vPaV“3PhIvq†Iv IBfB‚“4zhITDhIvB†rrBI47DhPŽB‡Ivd“kBVH•DjY3BW‹JD†rjBd‰CBdIv IIvuUrVB‚JBdY3+hIv DLYBhq•ddYgB‚ŽvB†IB†Š3BdYgzvfvB†rrB†cnijY”iD6JD†“‹BY7vŽjzTzTŽJuUYPB‚6JghYŽgdPBdS60g‚H7gwrkPVLvqYŽTgWYLVWLkYhPqV‚hiWY“i†YNiJqzTrUDIB”PvrfzW3‡iIPTDIBDg‰fIU“‰TP•uJvBI“kYTv€PYq‰ DL†•vuIr+vqzg†Y†‰U‰vYTrJdS60g‚H†IwfnIh3”dvq rBSgNPgWLvdwPT7S 3PŽJ•SDv“CDIBŠPT“jz†r‰I•V“3DŽVBLBqPV‹7•VY3nPhPŽ+vIvVUY“BdP•idYgzT‚v j€BI4vŽ‡Iv IIJD†rjBd‰CBdY3+hIJd‹q€zJ“ŠPT“jzVqCgIŠP‹q€VfhPw7‰YuTVdVqJ‰wiwPOgI‰i‹7aiNfJCJv7 wP6gjqSiwPd4vd7nq‡PfiVq3b‹LzTrUDIBŠ IL7b‹LzTrUDI32ŽY“LwŠPILPr vgW‰wiwPOgIvu‡DiŽ‰W“OŽv76IVT•ŽVLIU7CzvfTdYBNPT7fgN3ŽzTrnPI‰ T“jI‡YBg†qUD‚3V rqwŽ†BŽzTrnu‡giVŽSY‡Š†‰jŠNd‹BŠgJYVDW3OiV‰6Ir‰Š T“w‰U“‡iIuvDIBDg‰fIU“zYU‰‚Dvr”PT“jzVq“qJHUDIBŠPT“jzVq‰J4LDT32Y7†PPOYTuVd€P““†wBCzJBJI‹PTPYŠ6ŽwzŽ‚7JPr vgJBFŽ“u‰UB”V‹q‰ ‚LdqJHu‰vrSDvP0Pr3 JHu‰vrSDvBNiv3wI†CYU3‚DV4TPYŠ6Žwrz‡‰JuYB‡ T“jI‡r3YW3Tu‚BNPT7wŽV3‚‰T•”V“3B T“z“BDYV‰WYdŠVYYmbYBD‰YPdDvB6BTB7zVqzTrUDIBŠPT“jzVqzv6u‚qVqr7†BdŠ‡I‹•DIPTP‹HNiJqzTrUDIBŠPT“jzVqzTLu‡B+ir“†dWHzJqnu“qŽr‚Sg4‡I€uN“ŠgJruIW4OIJNzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTVW“ŠiT7wijŠgYhrOdYu+vŠdI‡‰BIhŠnu‡giVŽSY‡Š†zTrLDW“ŠgJruIW4OYUB0Vr‰NbI7fPN3CYJVWvg“7uI““zv“LDIBD ‰wYU‰†‚7‚I‹BDBIv7ijqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUuYqPPTLjI‡YYiIPvV‡Y+TvjijqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jbwuvB†YvB†rjDjP IŽvB‹6vBdY4‰dYO YuJdjuvBI47dhY”ImvudP3B‚“4zhITDhIvB†rrBI47DhPŽB‡IvuD6vB†‹nYIB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIq6iI“jPJL3Vr6u“PhŽr3dzd3zvfvdYŽgJYVDW3OiV‰6Dv3hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“wdUPOi“uW•Vi‹HNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIq6iI“jPJ3‡Žv€P‹q6g‚H= P3V‹•Wu“qŽr‚SgPPVrfuJ“UgJruIW4OYUBNVrBNgv“uI‡Š‡gVLP†q”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzT=u‡fvŽr†BdrgYwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqŽDH6gUJ v3Y4niN7Lg‚“Wiw W•Liv7u‡BVqY7fILvDI‰LiT4WiWv”IILzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTVW“ŠiT7wijŠgYhrOdYubYŠdI‡‰BITrLDW“ŠgJruIW4OYUB•VrzbI7fgN3zv“LDIBD ‰wYU‰†‚•‚IrzgJY‹DVq+gY“UD‚q6Žr7†ŽVb‰‡c•IrBDBIv7ijqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“wdUPOi“uW•Vi‹HNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠgv7†4OYvPvP‹3bu“3dzd“‰hY6Pw“2BVr†jr‡‰J3NVjgv“6bV4O‰vPTV“ vŽ‹LjIUŠ‚‰vPTYN72P‹4jzVL‚‰J3uN“nBTB7zVqzTrUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzTrUDIBŠPJBLY‡Š‚V‹7vDIBDiwYU‰gYhIuN7hDT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPv7†w7gVwBCDIBŠPT“jzVqzTrUDIBŠPJBLY‡Š‚V‹7vDIPTP‹HNiJqzTrUDIBŠPT“fŽ‹LzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH7dNznYvŠ6qVrBg2L†qVvLDUP‚YhYnuSL†z†PkIh‰7+Jr†qYB=iV7iW4hVDH6qY7uiVvŽBJ•dwnq“‚hiUP3BJ•aD†BBdY4‰dP IŽvB‹6vzJ“ŠPT“jzVqCgI7u‡BVqY7fI4=DY36gTLJgNY‰LvDN”gVHŽiWqSiW•Liv‰6qjPOgNY WHBI46i“7‹iVHPW4niN76g‡qzgNYqWHBI46i“7‹iVHuTLzTrUDIBŠ I“rzUqPV‹7€u“BŠgJY‹‰Vq3YhIV“q‚iB7‰4TBWnqI“SiNcvd4aV‚‰LiT“WiWv”I“‚JdjfzJ“ŠPT“jzVqCgIŠuTqY“†Žq+DL0DIq6qV‰wYW•gV‹“UBV“idYŽgI6JDJYdBY€SIdY4zTmvB†rrYJY7b†‰ŠiJqzTrUDIB”PvrfzW3‡iIPTDIBDB‹v7zUŠOi“6V‡VI“kYvŠh+vŽTgDL7iWLvYJ‰ndJrUg2L“uV3gWHJu“rCDIBŠPT“jz†r‰INVY3+gdzVL“Y‹“UuY vŽr7†P4‡gI‰6g‡qzgNYqWHBI46i“7‹iVHPW•LivgB‚SŽ‹B7zVqzTrUDJ“2zVBw‰U“PYhŠUD‚3V rqwŽ†BD‹0uJv6qY7•z‡r3YW‰V‚q‚i‰fI4€BhBLi‹iNuvY4LBdqaiVHDVY‰YqTLzTrUDIBŠ I“rzUqPV‹7€u“BŠgJfSVWv‡Ž“uYTB2 aIW4gŽ“P•DIH“uUvuVq€+J“CPNY“zNY“PVr€dv h wY7+NY“Ih‰=qVrBg2L†qVvvgILUqVYjqVY“uV3kYhBqV‚nqVY†qUY“u†P6dS60g‚H3qN‰kYhYh+Jr†qVY†IVL“PVr€dvqvqVY†ŽNvgIvU+vqOq‹HkzVqvidqLdJ“v ‹HdBwY=‰wPJD†7”iJr=iUŠŽ W4TBW”qUai•g‰v”DVPi‚“‹iNŠ”D4SBJ•q“7‹iwPPWLvDI‰L ILfgNY‰v”dBCDIBŠPT“jz†r‰INVY3+gdzVL“Y‚7€uWv‚i‹“wiwY‚‰vPaV“3PhIvq†Iv IBfB‚“4zhITDhIvB†rrBV4Y‡PŽB‡Ivd“kBVH•DjY3BW‹JD†rjBd‰CBdIv IIvd“CB‚JBdY3+hIv DLYBhq•ddYgB‚ŽvB†IB†Š3BdYgzvfvB†rrB†cnijY”iD6JD†“‹BY7vŽjzTzTŽJuUYPB‚6JghYŽgdPBdS60g‚H7gwrkPVLvqYŽTgWYLVWLkYhPqV‚hiWY“i†YNiJqzTrUDIB”PvrfzW3‡iIPTDIBDg‰fIU“‰TP•uJvBI“kYTv€PYq‰ DL†•vuIr+vqzg†Y†‰U‰vYTrJdS60g‚H†IwfnIh3”dvq rBSgNPgWLvdwPT7S 3PŽJ•SDv“CDIBŠPT“jz†r‰I•V“3DŽVBLBqPV‹7•VY3nPhPŽ+vIvVUY“BdP•idYgzT‚v j€BI4vŽ‡Iv IIJD†rjBd‰CBdY3+hIJd‹q€zJ“ŠPT“jzVqCgIŠP‹q€VfhPw7‰YuTVdVqJ‰wiwPOgI‰i‹7aiNfJCJv7 wP6gjqSiwPd4vd7nq‡PfiVq3b‹LzTrUDIBŠ IL7b‹LzTrUDI32ŽY“LwŠPILPr vgW‰wiwPOgIvu‡DiŽDW4O‰h‚hIVT•ŽVLIU7CzvfTdYBNPT7fgN3ŽzTrnPI‰ T“jI‡YBg†qUD‚3V rqwŽ†BŽzTrnu‡giVŽSY‡Š†‰jŠNd‹BŠgJYVDW3OiV‰6Ir‰Š T“w‰U“‡iIuvDIBDg‰fIU“zYU‰‚Dvr”PT“jzVq“qJHUDIBŠPT“jzVq‰J4LDT32Y7†PPOYTuVd€P““†wBCzJBJI‹PTPYŠ6ŽwzŽ‚7JPr vgJBFŽ“u‰UB”V‹q‰ ‚LdqJHu‰vrSDvP0Pr3 JHu‰vrSDvBNiv3wI†CYU3‚DV4TPYŠ6Žwrz‡‰JuYB‡ T“jI‡r3YW3Tu‚BNPT7wŽV3‚‰T•”V“3B T“z“BDYV‰WYdŠVYYmbYBD‰YPdDvB6BTB7zVqzTrUDIBŠPT“jzVqzv6u‚qVqr7†BdŠ‡I‹•DIPTP‹HNiJqzTrUDIBŠPT“jzVqzTLu‡B+ir“†dWHzJqnu“qŽr‚Sg4‡I€uN“ŠgJruIW4OIJNzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTVW“ŠiT7wijŠgYhrOdYu+vŠdI‡‰BIhŠnu‡giVŽSY‡Š†zTrLDW“ŠgJruIW4OYUB0Vr‰NbI7fPN3CYJVWvg“7uI““zv“LDIBD ‰wYU‰†“‚I“DBIvdijqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUuYqPPTLjI‡YYiIPvV‡Y+TvjijqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jbwuvB†YvB†rjDjP IŽvB‹6vBdY4‰dYŽgI6JdjuvBI47dhY”ImvudP3B‚“4zhITDhIvB†rrBV4Y‡PŽB‡IvuD6vB†‹nYIB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIq6iI“jPJL3Vr6u“PhY3dzDLzvfvdV“hgJYVDW3OiV‰6Dv3hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“wdUPOi“uW•Vi‹HNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIq6iI“jPJ3‡Žv€P‹q6g‚H= P3V‹•Wu“qŽr‚SgPPVrfuJ“UgJruIW4OYUBNVrBNgv“uI‡Š‡gVLP†q”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzT=u‡fvŽr†BdrgYwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqŽDH6gUJ v3Y4niN7Lg‚“Wiw W•Liv7u‡BVqY7fILvDI‰LiT4WiWv”IILzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTVW“ŠiT7wijŠgYhrOdYubYŠdI‡‰BITrLDW“ŠgJruIW4OYUB•VrzbI7fgN3zv“LDIBD ‰wYU‰†‚•‚IrzgJY‹DVq+gY“UD‚q6Žr7†ŽVb‰‡c•IrBDBIv7ijqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“wdUPOi“uW•Vi‹HNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠgv7†4OYvPvP‹3bu“3dzd“‰hY6Pw“2BVr†jr‡‰J3NVjgv“6bV4O‰vPTV“ vŽ‹LjIUŠ‚‰vPTYN72P‹4jzVL‚‰J3uN“nBTB7zVqzTrUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzTrUDIBŠPJBLY‡Š‚V‹7vDIBDiwYU‰gYhIuN7hDT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPv7†w7gVwBCDIBŠPT“jzVqzTrUDIBŠPJBLY‡Š‚V‹7vDIPTP‹HNiJqzTrUDIBŠPT“fŽ‹LzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH7dNznYvŠ6qVrBg2L†qVvLDUP‚YhYnuSL†z†PkYhBqV‚nqYB=iV7iW4hVDH6qY7uiVvŽBJ•dwnq“‚hiUP3BJ•aD†BBdY4‰dP IŽvB‹6vzJ“ŠPT“jzVqCgI7u‡BVqY7fI4=DY36gTLJgNY‰LvDN”gVHŽiWqSiW•Liv‰6qjPOgNY WHBI46i“7‹iVHPW4niN76g‡qzgNYqWHBI46i“7‹iVHuTLzTrUDIBŠ I“rzUqPV‹7€u“BŠgJY‹‰Vq3YhIV“q‚iB7‰4TBWnqI“SiNcvd4aV‚‰LiT“WiWv”I“‚JdjfzJ“ŠPT“jzVqCgIŠuTqY“†Žq+DL0DIq6qV‰wYW•gV‹“UBV“idYŽgI6JDJYdBY€SIdY4zTmvB†rrYJY7b†‰ŠiJqzTrUDIB”PvrfzW3‡iIPTDIBDB‹v7zUŠOi“6V‡VI“kYvŠh+vŽTgDL7iWLvYJ‰ndJrUg2L“uV3gWHJu“rCDIBŠPT“jz†r‰INVY3+gdzVL“Y‹“UuY vŽr7†P4‡gI‰6g‡qzgNYqWHBI46i“7‹iVHPW•LivgB‚SŽ‹B7zVqzTrUDJ“2zVBw‰U“PYhŠUD‚3V rqwŽ†BD‹0uJv6qY7•z‡r3YW‰V‚q‚i‰fI4€BhBLi‹iNuvY4LBdqaiVHDVY‰YqTLzTrUDIBŠ I“rzUqPV‹7€u“BŠgJYDW3OiV‰6DIq6qV‰wYW•gV‹“UBdYvqdY4zTmJD†rjBd‰CBdIv IIvuWYLB‚JBdYŽgIsviN“fBV‹JudP IŽvB‹6vBdY4‰dYP+N€JdjuvBV‹nBdY4+vINBN“BB†jŽjYOi†€v ‹vBY7jI‡Iv IIv 2L6BVHL+hPIzvVUIBj‰jzhPOqY‚JDhPnBI47B‚vk+h3=dJ“€ IH“gNYvIh‰=PVvggTH†BUŠvgdBaPVYLq†q”PT“jzVqzJHUII32gBL‰U‰zvJVWvg“7uI“7‰J4vP‹qVi“7uDV vB†YvB†rjDjP IŽvB‹6vBdY4‰dYŽgI6JdjuvBI47dhY”ImvudP3B‚“4zhITDhIvB†rrBI47DhPŽB‡IvuD6vB†‹nYd NITvV‡PjBdYvŽjYudIvV‚BDBdY4‰dY3B‡IvuWYvB‚“•‰jYgqdcTB‹BjBWvVdPCBW6vd‚JdIsnb7kgV34dJYnq†YdB“vgDLvPYq‚gTH3PJmniVBUdJ“LPJY†qUY“id“ndv ni2LdBqkuVH”PYŽTPTH3PN‰NiJqzTrUDIB”PvrfzW3‡iIPTDIBDg‰fIU“‰TP•uJvBI“kYTv€PYq‰ DL†•vuIr+vqzg†Y†‰U‰vYTrJdS60g‚H†IwfnIh3”dvq rBSgNPgWLvdwPT7S 3PŽJ•SDv“CDIBŠPT“jz†r‰I•V“3DŽVBLBqPV‹7•VY3nPhPŽ+vIvVUY“BdP•idYgzT‚v j€BI4vŽ‡Iv IIJD†rjBd‰CBdY3+hIJd‹q€zJ“ŠPT“jzVqCgIŠP‹q€VfhPw7‰YuTVdVqJ‰wiwPOgI‰i‹7aiNfJCJv7 wP6gjqSiwPd4vd7nq‡PfiVq3b‹LzTrUDIBŠ IL7b‹LzTrUDI32ŽY“LwŠPILPr vgW‰wiwPOgIvu‡DiŽb†YI‰vPLP‹BUgJY‹‰†BzvfvdYBNPT7fPN“ŽzTrnPY‰ T“jI‡r3YW3Tu‚BNPT7fgrBPYhYaV“zqT4jzVLOŽ“7LuhVŽrqIŽwqŽzT€uJ•+gYdzVLPVrfuJ€4u“3dgTLzTrUDI3hDT“jzVqzTrUDIB2 r77gwq‡iYPaVjf4g‰wdWHuŽ‚Phu‚BUi‚4Fug‡Y‚DN€•gVfhYUYgD‹T•DV40u‚LLCVLhDTP0gTL•iBuYU3ODTP0gTL•gNBC‰U3nDN“6uv3dDWug‡Y‚DJ€0+TSgJ•ŽzTrnPrq6VV†qNBzvTVY3DgWrwYU7ŽzT‰YVLVDrm4d‚PV‰‡“zYVLD‰“Y7gNŠ“qJHUDIBŠPT“jzVqzTrUDIBŠgv7†4OYvPvP‹3BPvŠdzWuYwBCDIBŠPT“jzVqzTrUDIBŠPv7Lb†“gYTP=uIBŠiT7wŽV3‚‰T•”V“3BPv“udVq+‰JV“  YNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPJr†VVqCzvP‹qVqrqFDW‰zg‡ŠnPY‰rq‹7wbVvgi‚•6P‹PnPT77VVq+‰JV“ 4u‚v6Žj3zIvfvdYBhgJfSVWv‡Ž“uYvBŠiI77zVL3Vr6u“Phr3IqJL“‰‹“P†q”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“wivzJqnPIP+gLP4zg‚rP†q”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrJd2L“uUvuVq€+J“CPNY“zNY“PVr€dvqz SL7+NY“Ih‰=qVrBg2L†qVvvgILUqVYjqVY“uV3kYhBqV‚nqVY†qUY“u†P6zVHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzUŠggIr”D‚q6Žr7†ŽVBŽdŠUI“ŠgJY‹‰†+D3dVY vi“7dijqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzT=u‡fvŽr†BdrgYwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDImDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzUŠggIr”DY3bŽr“uIUŠPWsJVj6“mSŽV3‚‰T•”VjŽ‰fDVH+‰JV“ 4u‚vŽwB+‰TuP‹3 ‹Lu TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPv‚Sb†Y‚‰J4vPrqYBTB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIŽ0q‡YPB‡ JVWvnBY7CddY”ImvudP3BdY4‰Y“LbdrOiYFBI47zdY4zhŽvB†rrzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPJr†VVqCzvP‹qVqrqF‰W‰zYjŠnPI‰rPT77VVq+‰JV“ 4u‚v6Žj“zIvfvdYBŠiI77zVL3Vr6u“Ph“3IŽj“+Dq•DIBPiI“jIUŠ‚‰vPTYN7DPrŠIŽL“Y‹“P†q”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzT=u‡fvŽr†BdrgYwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVq+‰vPhV“ 4iaIU7†ŽdŠUIrB2qY7uuJq“YJ4hPr32iJBbV3g‰T7WV“q0i†YUY‚zJqnuY3DiV NquINqUD‚3DiJrud†ŠkqJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT“jzVqD‹76P‹3VV7zVLgYN36u“qVqV‰fddqjgIrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVq‰vPhuhVBTB7zVqzTrUDIBŠPT“jzVqD‹76P‹3VV7zWuYwBCDIBŠPT“jzVqzTf•zJ“ŠPT“jz‡“jPJHUDIBŠPT4•iNrjgIrUDIBŠPTL7‰H= WP6g‡YOiV7PW4S wŠ7u‡BVqY7fI4Udw76g‡qziNPSgJsviN“+BVwIjYOiYuv ‚nBdPdB‡YŽŽ‚0vBhvBdY•d‹L“PVr€dJ“CPNY“zNY‰iJqzTrUDIB”Pv“LbdrOiYFBY“•‰‡YgzNfvd“ŠBI47 dP IŽvB‹6vBdY4‰dYOPVTvd“CB‚L“IhYgŽ“‹v IBfBY7CddYP+N€vd“ŽB‚L“IhYgŽ“‹v IBfzJ“ŠPT“jzVqCgIŠuTqY“†Žq+Dq0DIq6qV‰wYW•gV‹“UBV“idYŽgI6JDJYdBY€SIdY4zTmvB†rrYTH7b†‰ŠiJqzTrUDIB”PvrfzW3‡iIPTDIBDBIvdzUŠOi“6V‡VI“kYhBqYŽTg†Y7iWLvYJ‰ndJrUg2L“uV3iWHJu“rCDIBŠPT“jz†r‰INVY3+gdzVL“‰‹“UuY vŽr7†P4‡gI‰6g‡qzgNYqWHBI46i“7‹iVHPW•LivPB‚SŽ‹B7zVqzTrUDJ“2zVBw‰U“PYhŠUD‚3nI“wiwY‚‰vPaV“3PhYP+N€vd“ŽB‚L“IhYgŽ“‹v IBfBdY4‰Yq“gd“TzVHUDIBŠPT“jiJq‰D‹€uJvq‹“jI‡r3YW3Tu‚B2W‰fDUŠOiVBUPrq6Vr†IW•gVrFBY““bdYYN Jd2LYBY7vPdIv IY†‰drBzJ“ŠPT“jzVqCgIŠuTqY“†Žq+D3dVY vi“7dzUŠOi“6V‡VI“kPVSqVrUg2L7DJqvPIBvPVY3g‹H†IwŽngDLvPYŽTgUY3dVmnYNYLqV“CPNY“zNY“PVr€dv h wY7+NY“YNPvPVrJi‹snb7ku†qTdv v SL3YNY“YvrnPVY3g‹H3PUŠ“uI7JqV“BPSL†uU‰kdTrUqVTNiIH7q†ŠkIh‰vg‚‰Jq‚“FiJH3gW•dwnqI‚h vg‰4v V”qjIhiUŠS TLzTrUDIBŠ I“rzUqPV‹7€u“BŠgJfSVWv‡Ž“uYvB2 aIW4gŽ“P•DIH“uUvuVq€+J“CPNY“zNY“PVr€dvŽTg†Y7+NY“Ih‰=qVrBg2L†qVvvgILUqVYjqVY“uV3kIh‰7qV‚nqVY†qUY“u†P6dS60g‚H†PVqvPVTdJr†qVY†IVL“PVr€dvqvqVY†ŽNvgIvU+vqOq‹HkzVqvidqLdJ“v ‹HdBwY=‰wPJD†7”iJr=iUŠŽ WLvD†”qUai•g‰v”DVPi‚“‹iNŠ”D4SBJ•q“7‹iwPPWLvDI‰L ILfgNY‰v”dBCDIBŠPT“jz†r‰INVY3+gdzVLPVrfuJ“2gBaDW3“IT‰6g‚“uiLCqW4hV‡qLPTLWi€T W4€uW6PT4FqUPW4=BOHnq‚L‹i33Y†‹vdj‡BI47B‡PPzJ‹JVYqbBdP•iIB7zVqzTrUDJ“2zVBLY‡Š‚V‹7vDIqVBL‰‡YdJ‚”i‹H†uW•vP†BqYq‰gIH3PH“IhqTqVY3g‹H7DJqvPIBvPYqJqVY7H‰iJqzTrUDIB”PvrfIWH‡id‚huN“2‰WYwdW4‡Dru‡fTPhPgIv€JDSLJBVH4u‡YPPduvuU“jBV7BjYŽ+JmviTqJzJ“ŠPT“jzVqCgVHJzJ“ŠPT“jzUq‚YT7huYqBPv7aYUYPŽvu‡fTPJLbVLgV‹•zuW4+ r€SgjŠCzvfTdYBNPT7fgN3ŽzTrnPI‰ T“jI‡YBg†qUD‚3V rqwŽ†BŽzTrnPIP+gLP4zY‹rhDIBDq“7LVU7gVrgIr‰Š T“w‰U“‡iIuvDIBDg‰fIU“zYU‰‚Dvr”PT“jzVq“qJHUDIBŠPT“jzVq‰J4LDT32Y7†PPOYTuVd€P““†wBCzJBJI‹PTPYŠ6ŽwzŽ‚7JPr vgJBFŽ“u‰UB”V‹q‰ ‚LdqJHu‰vrSDvP0Pr3 JHu‰vrSDvBNiv3wI†CYU3‚DV4TPYŠ6Žwrz‡‰JuYB‡ T“jI‡r3YW3Tu‚BNPT7wŽV3‚‰T•”V“3B T“z“BDYV‰WYdŠVYYmbYBD‰YPdDvB6BTB7zVqzTrUDIBŠPT“jzVqzv6u‚qVqr7†BdŠ‡I‹•DIPTP‹HNiJqzTrUDIBŠPT“jzVqzTLu‡B+ir“†dWHzJqnu“qŽr‚Sg4‡I€uN“ŠgJruIW4OIJNzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTVW“ŠiT7wijŠgYhrOdV+vŠdI‡YBIhŠnu‡giVŽSY‡Š†ITrLDW“ŠgJruIW4OYUB•Vr‰NbI7fgN3CYJVWvg“7uI“7zv“LDIBD ‰wYU‰†‚•‚I“DB‹vdijqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUuYqPPTLjI‡‰YiIPvV‡Y+TvjijqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jbwuvB†YvB†rjDjP IŽvB‹6vBdY4‰dYOPVTJdjuvBI47dhY”ImvudP3B‚“4zhITDhIvB†rrBY‚n‡PŽB‡IvuD6vB†‹nYIB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIq6iI“jPJL3Vr6u“Phr3dzDLzvfTdV“hgJYDW3OiV‰6Dv3hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“wdUPOi“uW•Vi‹HNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIq6iI“jPJ3‡Žv€P‹q6g‚H= P3V‹•Wu“qŽr‚SgPPVrfuJ“UgJruIW4OYUBNVrBNgv“uI‡Š‡gVLP†q”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzT=u‡fvŽr†BdrgYwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqŽDH6gUJ v3Y4niN7Lg‚“Wiw W•Liv7u‡BVqY7fILvDI‰LiT4WiWv”IILzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTVW“ŠiT7wijŠgYhrOdYubYŠdI‡‰BITrLDW“ŠgJruIW4OYUB•VrzbI7fgN3zv“LDIBD ‰wYU‰†‚•‚IrzgJY‹DVq+gY“UD‚q6Žr7†ŽVb‰‡c•IrBDBIv7ijqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“wdUPOi“uW•Vi‹HNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠgv7†4OYvPvP‹3bu“3dzd“‰hY6Pw“2BVr†jr‡‰J3NVjgv“6bV4O‰vPTV“ vŽ‹LjIUŠ‚‰vPTYN72P‹4jzVL‚‰J3uN“nBTB7zVqzTrUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzTrUDIBŠPJBLY‡Š‚V‹7vDIBDiwYU‰gYhIuN7hDT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPv7†w7gVwBCDIBŠPT“jzVqzTrUDIBŠPJBLY‡Š‚V‹7vDIPTP‹HNiJqzTrUDIBŠPT“fŽ‹LzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH7dNznYvŠ6qY •gSL†DW7“g†YJqYqng2L“uV3kuI7UdJr‡gVY†BW4kPYY4zVHUDIBŠPT“jiJq‰D‹€uJvq‹“jI‡Š“V‹6DIH†BW4kPYY4dJY0qDL†PV‚n+h3=‰TPhu‚H†‰UrkiI‰4dS60g‚3bBVŽnP†7v+JINiOL†BW4kPYY4dS60g‚3DiJruDW6vBU“hBI47D‡YudIvuUrYBdYdiTB7zVqzTrUDJ“2zVBLY‡Š‚V‹7vDIqVBL‰‡YjgIrUDIBŠPTL7iNPjgIrUDIB2qJ‰†DUB3YTvUVW•VqY‚hIUŠOŽ‡‰UuTqgW‹S‰W•gV‹v”D‚3DBVBwYd“+Ž‚Phu‚B‡ YNiJqzTrUDIBŠPT“fd‡B3Vr=uIBŠiJŽhIU“‚‰h“hu‡B‚iB7PJL‚D4NV“Bn YNiJqzTrUDIBŠPT“jzVqzT=VY3bi‹“jPw7“V‹vadJq”PT“jzVqzTrUDIBŠPT“jzVqzTrUD‚3DBVBwYVqzITraDIŽ4‚7F TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“wDU“gYTPSdNq”PT“jzVqzTrUDIBŠPT“jzW7PV‹•6DIB‚Žrwiw“gzJŽJzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTrnP‹36qv7dzd“zJBUdr‰Bi‚HNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPv“aDW4PYNŽNzJ“ŠPT“jzVqzTrUDIBŠPT“wdW3‡Ž“YUD‡ JjuhPjgIrUDIBŠPT“jzVqzTrUDIqDir7L‰‡rODr‹JzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTrnP‹36qv7dzd“zJBadNq”PT“jzVqzTrUDIBŠPT“jzVqzTrUVV•+ir“† hqjgIrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzvfPI3‰PvŠdzVL‚‰J3uN‚+v“†IW“uŽT•”V“q0 TLjPwqOIThuY3bŽ‹“fzW3PŽU‰€V‡V‚7•BL‚D4NV“BnBTB7zVqzTrUDIBŠPJBLY‡Š‚V‹7vDIqVBL‰‡YuŽ‡r€uTB€iV‰†BV7‚‰J4JuW“ŠiT7fV†Š“qJHUDIBŠPT“jzVqzTrUDIB2Y7uI‡r‡id‰UuhBVgVŽhIU“CzvfSd‹BŠB‹LI TLzTrUDIBŠPT“jz‡“ŽzTrnP‹3€Ž‹LI TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH7dNznYvŠ6qY •gSL†DW7“uI7n+v 0PTH“uV3kdTrUPVr‡PTHLgw‰vYN3UqY Ji‹H“Y†rkPVr€dvqBgY†IV7‰iJqzTrUDIB”PvrfDW4‚DrP•uW“2W‰fDUŠOiVBUB‚nYdYgqVIvV†“BY7jd‡ NITvuVrjB†cJuhYSDJmv w“+BVHL+hYPg† vV†“BY7jd‡YPgY€Jd2LYBY7vPdY+JvuD6NBY“7qhIv IIviJvŠB†Š•D‡Y3Ž“mvBU“LBI47IB7zVqzTrUDJ“”q‚B7zVqzTNPrq+ Jr†dVqgi“PvVdBD fSBq‡‰TP=udi“7dPNŠjgIrUDIB2BTB7zVqzTrUDIBŠPT7fd‡Y‡I‹•DI3bŽBaIUPO‰h‚hV“3iJBwgwquŽvPvVY 4i‹LjPw7+VLdNq”PT“jzVqzTrUDIq6iI“jgw7‚D‹7Nu‡BBiT7fd‡Y‡†qUD‡B‚ LIUP‚ŽTvaDvzbYŠIz†Š“qJHUDIBŠPT“jzVqzTrUDIBŠgJ‰fgjŠ‰jŠUD‚3DiJrud†‰ziIPnVV•WrwYUBOzJqaV‚3VqBfd‡Y‡IfhuY vgJfhuJqWzTLuY vgJŽhIU“zT7TIdBVVBLYUY‚‰Y7JVdBV‚“7uNŠkqJHUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzT6u‚3biYNiJqzTrUDIBŠPT“jzVqzTrnP‹3€Ž‹“‹Žq+Dr”uY3BqrŠL‰WLPij“FuIqV JjPJ•gDrPTuT3bBVB•z‡B3YhYnu‡B‡PJPjzW•‡iYPNDIB+qr‹hYU“‡iYPvP‹Ygq“‚hYU7gVBdNq”PT“jzVqzTrUDImDT“jzVqzTrUDIB2qJBLYW•uŽ‡r€P‹qbiTLjuNPuD‹T”DTP0Y‹LFbwŠuzh3JDU“NPT7fI‡‰‚‰UBNVrBNPT7wŽV3‚‰T•”V“3B ‹HNiJqzTrUDIBŠPT“wivzJ3=u‡BVqV‰jPJLOYTuVd€iB•gSLBIJNzJ“ŠPT“jzVqzTrUDIBŠPT“fDW4‚DrP•uW“ŠgJ†‰‡ŠPŽW36uhrhr3I TLzTrUDIBŠPT“jz‡“jgIrUDIBŠPT“jzVq‡iYuPr3+qI“wiw‰‡‰N3JV‚qYiT“6w“u‰h‰7d‹BŠgJ‰fgjŠCYwBCDIBŠPT“fŽ‹LjgIrUDIBŠq‚L7iTLzTrUDIBŠ I“kgIHT+vqziwY†bV6nYT7=PVr+gSL†bqkPVr€dTHŠPJY3uJqkiV3TqYq0PNY†BW4kPYY4dJY3g‹YgW‰wij3VrfvBY7jd‡IJP†qjgIrUDIBŠPTL7z‚r‡iYuPr3+qI“fd‡Š‡iV4vVU“‹iNuvY4LBdq6g‚“uiLŽNPJD†76 HŽiV•Wvh I3Li‚“aiV“OBJ47d‹‰6g‚“uiLŽJ47DW•”q‡YIiTvBJvaB“36 ‡qJi“Ž‰•Liv‰LgY“‹iV•iW4SVWPa ‚LOgNYŽDILzTrUDIBŠ IL7b‹LzTrUDI32ŽY“LwŠPILPr vgW‰wiwPOgI€VdBD ‰LijŠ“IJqzJ“ŠPT“jz‡qjgIrUDIBŠPT“jzVq+D‹0vuN“ŠbI“fd‡Š‡i“Ju‚ •Žv7uDVH‡‰J3NVjBVqY“†ŽV4CzJ‰FDU“n ‹HNiJqzTrUDIBŠPT“wivzJ3FP‹3+qJfhdVH+D‹0vuN“NPT€hPwŠOiYJPjBBi‚LIŽj“zY‹rP†q”PT“jzVqzTrUDIBŠPT“jzVL‚DmDIzPT7fIWH3V‹vTIvgv“6b†73‰vPhu‚BUi“7fYU‰‡D‹0vuN“2ŽJr†BVLOŽJBUP‚B2iVr†BVL‡Žv•DIB+qr‹hYU“‡iYPvP‹Ygq“‚hYU7gVBdNq”PT“jzVqzTrUDImDT“jzVqzTrUDIB2ifdW4“qJHUDIBŠPT“jzVqzTrUDIBŠgJ‰fgjŠ‰jŠUD‚3DiJrud†‰ziIPnVV•WrwYUBOzJqaV‚3VqBfd‡Y‡IfhuY vgJfhuJqWzTauJvVqT“jDU‰‰ŽvP•uJvVqV‰rVUPPŽvPFDV“‡ ‹HNiJqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzUq‡iYPaVjf4g‰wdWHCzJBJV‹Ž0iv3d†zV4‡P“Ž0i‚4jzVL‚DmYN72P‹4jzVLOYTuVd€iB•ghqjgIrUDIBŠPT“jzVq3Yv“UDTqbqW‰†BdŠCzvTVY3DgWrwYU7CYj‰0Dv3hDT“jzVqzTrUDIBŠPT“jzVq‡iYuPr3+qI“jIU‰PVr=uIqV“qF‰W‰kqJHUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzT•V“3DŽVBLBq3YhrNu‚ •gv7dPJ“uD‹7‡uW“ T“jI‡Š“DrrdNq”PT“jzVqWIVHCDIBŠPT“jbwrCPJHUDIBŠPT“jiJ v W“B“7LghYO YIvBYB”B†Š†qhY”ŽUIvd“kBdq•YjY3Ž““jgIrUDIBŠPTL7‰v6VV7LiUŠFiWTNgW4JV“ŠnqVsNi•CgWHS ‡qaqW‹N mTW•Liv‰6q†ŠIiW4CgWLJB‚3LPJ‹”iW4PUŠauI4aPNaimNqWLviJ=PT“Fi†YVwŠLuY‰aq‚7ziwggW7UDdB6gJHFgWqWvvDY3iVrIiV4O‰v=udq=PT‚DT“jzVqzTr4DIY2qv“uDW3OITrnuTqgW‹S‰W•gITFP‹3+ LuJ vuUrYBdYdihYPIuvV‚BbzJ“ŠPT“jzVqCgIŠuJvVŽ‰uDUY‰T7Ju‡0ir“†B viJ“‰BY“4P‡PŽ+vIvVUY“P‹3+ŽY7“+h3=dvqn JY7ŽwŠ“gDH6dvqOiWvggfdW4jgIrUDIBŠPTL7iNPjgIrUDIB2qJ‰†DUB3YTvUVW•VqY‚hIUŠOŽ‡‰UVd0ir“uDVH+D‹€VdTgr€SY†ŠjgIrUDIB2BTB7zVqzTrUDIBŠPT7fI‡‰‚zT‹•DIBDŽrwiw7ŽYjY€V‚q+PWŽSg4O‰Nq”D‡B2q‹“wdUBgYTP•DIB‡qI7fzW3PŽU‰€V‡Y ‹HNiJqzTrUDIBŠPT“fDW4‚DrP•uW“2ŽBLiw‰CD‹0uJ•DqWwbdBgV‹“”D‚3DB‰ NquIJLIrziWŽhYW7PŽ“PFuN“‡BTB7zVqzTf•zJq”PT“jzVqŽVH4zJ“ŠPT“jzVqCgI‰6gT6”i“4gW4v r‰ai‹LUq‡PŽzTzJdr hDIYgW‰wij3VrfvzJ“ŠPT“jzVqCgI‰Lir“=iV•W•LBJ76q“7zgNY”BJ4aDJ7” UfNiUP3BNŠ€Bw7aiVHIiwYY•6DJ7nq‡PfiVq3CJ•6V†7iWrŽiWqSiW4€BNPnqVHOgWqWvvDY3iVrIiUP+I4SVW7=PT‚hiL”W7UD†7LqI“u v3Yv6u‚‰LgW‹NgWqŽ‹LzTrUDIBŠ I“rzUqPV‹7€u“BŠgJBw‰W73Ž‚PaV“u•gr‚hIUŠ‚iVPYB2W‰fDUŠOiVBUBV4YdIvIJsvV†“BY7jd‚‰W7‚‰JSuY3DBd NITvdjPŽBVr3zh NVr+Ž‚•Ju“ŽvŽr7†BV7gYhIdT4q‹4•Bdr3IhYBVY3VqY‚Sg4‡irP+DOL7gwrkPVLvqV“NPSL7Ž†znYSLSqYŽ”iJYdBwInPYP=dJv‚iNYkzVqUiJqzTrUDIB”PvrfzW3‡iIPTDIBDgv“uIW3D‹0uJv6qY7•‰LJDT‰aqdYaiWv”Yv6u‚‰LgW‹N 4CBJ4Udw7Jq‚“FgNP”qW4iT4Jq‚7SgVq+PJ“‡Ž‚uvDV“ŠgVrwYUBO‰h37BHjV‡PC‰JsvB“ŽJBY7jq‡YP VsvuUrYBdYdihIv IIvV‚BBB†Š“Ž‡YŽV JVIBdBI47zdY3+hIJV“BvBY“jbjYYN vihvB‚nDjYPB‡qjgIrUDIBŠPTL7z‚r‡iYuPr3+qI“wDUPOŽU36VY TPhY”gY‹vV†rWB‚nYdYgqVY‚D‹€4VWInb7kYJLhPV‚ Y7CJ4kYJaiY7€u‚3bi‹B7zVqzTrUDJ“2zV‰wgw“OŽJ‰FDIYVBr‚SYUq‚‰J4JuW“‹ 4+iWHSBOHLg†ŠJimN W4JDI46qI4=gNuJDvUud3CDIBŠPT“jz†rCgd3CDIBŠPT“fz‡rPi†3V†“2iV‰†BV7‚‰J4JuW“2W‰w‰U“‚‰IPNuTBUgJBw‰W73Ž‚PaV“u•gr‚hIUŠ‚iVPYBNPT7wIW3‚‰TI•DU“‡ ‹B7zVqzTfNzJ“ŠPT“jzVqzTrUD‚qDg‰w‰VqzITrnV‚qŽr“IŽj“+VŽ”DU“‡B‚7•z†‰ŽYvPFDIB‡qI7wIW3‚‰TINzJ“ŠPT“jzVqzTrUD‚3DB‰jzd“zvfuIq6‚4IBV3g‰T7Wuh€iwqJH+I€u“B2W‰w‰U“‚zTrTuW“Ši‚47IUqPYT•SVYq‚irmS‰W7‚‰JSuY3DBI47IWLPVr€Dv‰hDT“jzVqzTrUDIB2 r77zVHPŽ‡‚4uW•‰iT7fI‡‰‚zJ6ndYB6BTB7zVqzTrUDIBŠPT“jzVq‰J4LDT3bŽBazUP‡VqnP‹3€ŽrqF‰W‰ŽzTraI“3+VfhDV•CIT‹•IrzqTLu TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“fIWH‡id‚hDI vi‰•z‚P“‰T•6uT3D fSBH3YhrNu‚ •gv7dPJ“kIr7d‹BŠgJ‰fgjŠCIJ6NzJ“ŠPT“jzVqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jz‡“jgIrUDIBŠPT“jzVq3Yv“”uhBDVBwb†7CzvfPI3Du‚vŽwBzJ‰IP‹qV‰wiwYgWHaDvBŠbYŠIŽwqCVwBCDIBŠPT“jzVqzTrUDIBŠPJBLY‡Š‚V‹7vDI3DV‰†YdqjgIrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqD‹76P‹3VV7zWvPYN3FV“‰hDT“jzVqDjŠCzJ“ŠPT“jz†PCgVHCDIBŠPT“jz†rdv 0q†Y†D†‰vYTadJrTiNY†BW4kPYY4zVHUDIBŠPT“jiJq‰D‹€uJvq‹“jIUqPYT•SVYq‚i‹“fd‡Š‡iV4vVU“‹iwYY•6DJ76g‚“uiLŽ‹LzTrUDIBŠ I“rzU“gVrf4uJTTPv“Lb†PO‰vP€uW“‹iV“+‰47 2H”q‡YIiTvBdŠ‡i“P6Bhq•ddY3INmJdrB6BVH4u‡YPPduvuU“jBV7BjYŽ+JmviTqJzJ“ŠPT“jzVqCgIŠP‹q€VfhPw7‰YuTVdVqJ‰wiwPOgI‰i‹7aiNfJCJv7 wP6gjqSiwPd4vd7nq‡PfiVq3b‹LzTrUDIBŠ IL7b‹LzTrUDI32ŽY“LwŠPILPr vgW‰wiwPOgIFP‹ •qvruzUqCzvNVYqb ““†P4CIVHUDIBŠPJYNiJqzTrUDIBŠPT“jI‡Š“DrrUIrBŠgJ‰wgwŠ‡dcnVYqDgYmhdWHgYN3hDTB‡Pv“†Žqgid“•VdYqŽhIUP‡zTrad“Dqv“†dUPYJ‰6Dv‰hDT“jzVqzTrUDIB2 r77zVHgYhrNP‹3niT7fI‡‰‚zJLP†q”PT“jzVqzTrUDIBŠPT“jzU“gVrf4uJTTPJ‰fD‡rgYwBCDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUP‹q€VfhuJqOiYuhDIYVBr‚SYUq‚‰J4JuW“€ uzUBOŽ“6DTBBT“jD†BzvfPI3‰ ‹LI TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH7qJ ngdrTIIV“3+ŽWr†dW4jgIrUDIBŠPTL7z‚r‡‰TP•VY PT7fzW3PŽU‰€V‡VPWŽSYU“‚iV4=V“B2W‰fDUŠOiVBUBV4YdIvIJsvV†“BY7jd‚nuVPndJINg‹HdBN‰vuVB=PYqCiJInb7kISL7+vqLPNInbv7P7OŽ‡ŠvP‹qVqY‚SYUY‚zhYTu“Ž0qVBwjrgŽW4vdvg“‚SbdrOi“FPY vg‚4LŽ†Pg‰vPhdLg“‚SbdrOi“2Pr3Div7†BdŠ3YT•€P‹ •YISYU“‚iV4=V“BWiJH3gW•dw” T“ziN‰OPW4J dqnq‡PfiWv”YvaBIrUYdVV‰Li7gPD60g‚H†IwŠvYJL6qYŽTPTHdBwrvYTPvdvq“gDL“uV3kPYY4dvŽngDL3V†fnYJvUqVr“i‚H7q†PvYJL€+vŽTg†Y†dJ0nuVBSdv Ji‹H7qUŠ“uY“JqVYnq†Y7VWvvuI4a+JrBgVYLY†vIh“€qVrP OL3VH“uVB7PVrPqUY“gNYv+h3=dvqz OLdBNŠ“Ih3”dJrT ‹H†z†PwdUPOIhY€uWvDVfSiLŽi‚0vuhBDiuYUŠŽdYIPY3bŽr7†ŽYPdY‚•6uJ•g r‚SYILzTrUDIBŠ I“rzUqPV‹7€u“BŠgv“†d‡Š3Yh“vDI3bŽBLiwYgI‰Li‡Y‹iV6TŽJLJVU76gT‚hiUcN‰wPJD†76 T4fiVvCCJLJuI‰6i‚L€zWLIU“OŽW4nu“qqVr†VW4‡Žv‰gj‰Fiw WLvVV•aiVH‰DT“jzVqzTr4DIY2Y7uI‡r‡id‰UVVT•qWwYW3OgI‰LgI7‹i“CJHJBY‰6idIvŽBaYWNBN“BBVrdjPŽIJJd2LYBY7vPY7L‰UB‡Ž“YCDIBŠPT“jz†r‰IfuI3+qWzhdVqDV3=V“32Žr†b†YdJvYiVY7qUfnuILL+vqfq†Y†bqvYh‰vdvŽ”iJY3zUNiJqzTrUDIB” I4NiJqzTrUuT3VgVwi7‰v€4uWvbŽr†b†YD‹0VY3+ŽrISYU“‚iV4=V“BUgJBw‰W73Ž‚PaV“u•“7uD‡3YT•6IrB‡i‚4jzVLPYT0uY •qYŠduJ•CIVHUDIBŠPJYNiJqzTrUDIBŠPT“jIUqPYT•SVYq‚irmhdW4‡i“7VdYPvŠdzVL‡‰TP=udi“7Vb†7gV‹€SuYqbirŠIŽ•+‡3aDU7”i‚“jŽ†YzJBvD‚32gr‚Sq3gŽ“PWuhVV‰Li7gYwBCDIBŠPT“jzVqzTrnVYqbŽr†b†Y‰jŠUD‚qgW‰wiwPOg‡c•DU“‡CT7•uhP+IrTVYBŠi‚47IW3PŽvu‡fTBTB7zVqzTrUDIBŠPT7fI‡‰‚zT‹•DIBDŽrwiw7ŽYjY€V‚q+PWŽSg4O‰Nq”DU“2gdzU7‚‰TP•P‹3biBaVUŠPŽ“YUDU‚TgJBw‰W73Ž‚PaV“u•“7uD‡3YT•6d“Dgr‚hIUŠOŽ‡‰dNq”PT“jzVqzTrUDIq6iI“jg7OŽvPvP‹BUgJ‰fgjŠCYj‰0Dv3hDT“jzVqzTrUDIBŠPT“jzVq3Yv“”uhBDVBwb†7CzvfPI3Du‚vVŽwBzJ‰uJ•+qWB7uNŠ‰jc•Ir‰Š YNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPJ‰wgw“OŽJBUuWvVŽT“rY‡‰PŽ“PNP‹q6qW7gwŠOV‹hu‡Di‹LjDdqzT“hDIBDŽYfI†ŠCYwBCDIBŠPT“jzVqzTrUDIBŠPJP‰iJqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzUŠggV3FP‹3+qJfhdVH+DrfTP‹Phqv3dqJq+ŽI0VY3+Žr†BV•D‹•6uJ•g r‚SYdP‰V4vP‹qVqV‰juNŠ‰jc•Ir‰Š YNiJqzTrUDIBŠPT“jzVqzT•V“3DŽVBLBq‚D‹€4V“‰hDT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPJBLY‡Š‚V‹7vDIqggfdW4kqJHUDIBŠPJP‰iTLzTrUDIŽ0 ILUiJqzTrUDIB”PhYP‰JŽv d7DIPbiBaVUŠPŽ“YCDIBŠPT“jz†r‰INVY3+gdzVL‡‰TP=udi“7Vb†7gV‹€SuYqbi‹“fd‡Š‡iV4vVU“‹iwYY•6DJ76g‚“uiLŽwuv 2L‰Bdqv‰dYŽqdfv w“bBY“4g‹B7zVqzTrUDJ“2zVBw‰U“PYhŠUD‚qgW‰wiwPOgIFP‹3+ LuJ v 2L‰B†Škd‡YŽŽWŽvV‚BbBdP“qh NITvu‚B0B†Š7q‡YŽŽW vVU“”IY vgJBLb†Šg‰hr€uWv6iY7ud‡cJVVYBBV‹JudYŽiI€vB†rrzJ“ŠPT“jzVqCgIŠuJvVŽ‰uDUY‰T7Ju‡0ir“†B viJ“‰BY“4P‡PŽ+vIvVUY“P‹3+ŽY7“+h3=dvqn JY7ŽwŠ“gDH6dvqOiWvggfdW4jgIrUDIBŠPTL7z‚r‚‰J3•u‡B‚‚“rY‡‰PŽ“PNP‹q6qW7‰wŠ6DW•” ‡u”iV“qW4€BN6q‚“ŽiwYŽgWLJB‚3LPJ‹0DT“jzVqzTr4DJ‚0DT“jzVqD‹f4VVv0 r“•zWv‚YhY=P‹q6qW7zU7‚‰h“NYdVV‰Li7gIJqnuTqgW‹S‰W•gY‡“FV“3+ŽWr†dW4zIJBad‹BŠgv“†d‡Š3Yh“vIrB‡i‚L‰iJqzTrUP†q”PT“jzVqzTrUDIBDqv“†dUPYJ‰6VjBbiBaVUŠPŽ“YUIrBŠgJBw‰W73Ž‚PaV“u•“7uD‡3YT•6Irzi‚7Fb•+WHaDIŽ4qI“juNY+D‹€VdTgr€SYWP‡Ž“P•Pv6g“7I TLzTrUDIBŠPT“jzVLPYT0uY •qI“‹Žq+‰TP=P‹q6qW=Žj“+VŽ”DU“‡B‚7•z†‰PITrad“Dgr‚hIUŠOŽ‡zNzJ“ŠPT“jzVqzTrUD‚3DB‰jzd“zvfuIq6‚4IBV3g‰T7Wuh€iwqJH+I€u“B2W‰wb†q‡Ž“P•Pv6g“7dzV•ŽgYNVYqb ““†P4uŽT•6uJ•g r‚SY†Y+‰TP=P‹q6qW7ghqjgIrUDIBŠPT“jzVq3Yv“UDTqbqW‰†BdŠCzvfPI3‰ rŠ=‰†Š“qJHUDIBŠPT“jzVqzTrUDIB2 r77gw7‚D‹7Nu‡BBiT7fI‡‰‚‰UB0VrBNPT€YU“‡id“•DU“nPvŠIŽj“BzJNzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTfuI3+qW‰•zUYgVBUI“3€g“7uz‡Š3Yh“vDTq6qBwwPg‰vY”DV7hPT“7qJq+DrfTP‹Bn ‹HNiJqzTrUDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUP“r”PT“jzVqzTrUDIq6iILfd‡Š‡i‚JuN“UgJ‰fgjŠ†‚‚d‹BŠi“IhIUP‡D‹uWv‡PJŽSYU“‚iV4=V“‰”PvB†BdŠgYhIDU“nPvŠIŽj“BzJNzJ“ŠPT“jzVqzTrUDIBŠPT“fDW4‚DrP•uW“2ŽBaYW4kqJHUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzT•V“3DŽVBLBqgiIPhuhYBTB7zVqzTf•zJq”PT“jzVqŽVH4zJ“ŠPT“jzVqCgI‰6 ‹‚hi“ŽuWHS ‡q6 ‹“W mTW•Liv‰LiHWgNINuW47d‹‰ai‹4uiJ3+‰ILzTrUDIBŠ I“rzUqPV‹7€u“BŠgJBLYU‰OŽv6Vjg wYVq‡Žv•uY vi‚“kg†YJqYqng2L“uV3kuYq€+vŽNqwY7ŽNfnYSL€zVHUDIBŠPT“jiJq‰D‹€uJvq‹“jIUBOŽ‚•€u‚u•gJruDVq‡Žv•uY vi‚“kPYYTPV“rgJYdB“vPVr€dJYO UY†bV4“+h3=dvqzPNY3YUBkYvŠS+vŽN Y“uJq“PYPPD60g‚HLBJvkg†YdvqngWY†D†‰vYT“hdv •gSL†DW7“PVSqY •iInb7kYJvUqVr“i‚H†uNrfPwŠOiYJPjBz mTWLJDT‰6PT4Fi“+iWLvDdB”Ph hiVvCCJ•”B‹3aidY=iWv”Yv”d•aiduNiwPgVwPJDV7Lg‹‚”iVq+ŽJvLDSH”gjqziwB+DHiT3nqI“‹gNYC Wv6iJPnqdqOiwŠŽiUPJDV•Jq‚“FiLCuW47DW•nq‚7SiV“4VwŠ6DWLCDIBŠPT“jz†r‰I•V“3DŽVBLBq‡Žv•uY vi‚“kuI“ndvqCiOL7CJ4kYJaqYqTiIH†zNrkYJB4dJYYqY7‰VL“iI3=dJY3g‹H3YJmnIhqTqV‚h OL†+J3k+h3=dvqn JY7ŽwŠ“uILL+vqfq†Y†bqvYh‰vdvŽ”iJY3zUNiJqzTrUDIB”PvrfIWH‡id‚huN“2‰WYwdW4‡Dru‡fTPhPgIv€JDSLJBVH4u‡YPPduvuU“jBV7BjYŽ+JmviTqJzJ“ŠPT“jzVqCgVHJzJ“ŠPT“jzUq‚YT7huYqBPv7aYUYPŽvu‡fTPJBfYUBO‰Y7u‚qYiT7fDW4OYh‚V“u•iVr†4ŽzTrnu‚ •g““†Pg‰J4•IrB‡i‚L‰iJqzTrUP†q”PT“jzVqzTrUDIBDgW†IVqzITraVYqDgI“jŽ†7zJBvD‚3DiJrud†‰zij“nV“3g r‚SY†Y+INPrq0 T“juNY+D‹76u“ •Žr7VbVv3YN36d“‡PT7•BLO‰h“=VYq0P“7wiw“kqJHUDIBŠPT“jzVq‰vuTV“qBiT7wdU‰gzNqUD‚ •ŽV‰fz‡r‚zNqUD‚3+i‰fYU“Oij‚SVY3 ‹HNiJqzTrUDIBŠPT“wivzJqnuJvVŽ‰uDUYuŽv7€uJ“rbYŠIz†Š“qJHUDIBŠPT“jzVqzTrUDIB2 r77zVHgYhrNP‹3niT7wbdr‚D‹f4P‹Bn YNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPJ‰wgw“OŽJBUuWvVŽT“rY‡‰PŽ“PNP‹q6qW7PJ0JDS6hB†rkzdY+Jv “JBY7jidY3B‚€JDTHVYqDgdYgDTTvu‡IBY“Ld‡PŽ+v‹JDTqBYIY€IdIv IIvBYB”BVH7ŽhYg†uvV‚BLBY“†ŽhYI€viJvaB‚LwdY7ug4P+vqDqWYdBNŠkPVr€dJr‚PSLLVWLk+h3aVBdNq”PT“jzVqzTrUDIBŠPT“jz‡“jgIrUDIBŠPT“jzVqzTrUDIqV JŽSY‡qjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jz‡Š3D‹7JPw“2qY7uuJqDV3=V“32Žr†b†YC‰J4TuTq0q“7wYVHgUBUDV“NPT7wbdr‚D‹f4P‹Bn ‹HNiJqzTrUDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUP“r”q‚4•zVqzTrUDIBŠPJr†VVH‡Žv•uT •‚LjIUP‚VrNPr3Du‚vŽwBzJ‰LuYq0i‹“fz‡rO‰N36V‚BNPTvjzU73ŽW4NuTqVgT47uNŠ‰j‰NDv3hDT“jzVqzTrUDIB2 r77zVH+‰N3JVd vmSIUŠ‡g‡c•DU“‡ YNiJqzTrUDIBŠPT“jzVqzTrnu‚ •g““†Pg‰J4•DIzPvm4bIYdY‚7WVw7hDT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT7wwPPŽ‚PhVjD B7zd“‰J4vVjVBL‰‡YCD‹04VV•bŽB7PJLO‰h“=VYq0P“7wiw“ŽzTrTdYBn vq•uNP+†qaV‹PNi“3dgJqzIrnu‚ •g““†Pg‰J4•DI‰”PT7wwPPŽ‚PhVjD B7BIYdY‚7IdrDIrY6iPYŽrP‰IYP+z“PrbYBkqJHUDIBŠPT“jzVqzvhu‡bgbVv3YN36DIzPT7wwPPŽ‚PhVjD B7z†Y‰T7€uhVqY“†ŽV4Czv•V“ 4qW‰wYWPgiV4hV“BnBTB7zVqzTrUDIBŠPJBLY‡Š‚V‹7vDIBD JfSdW3O‰‡“LuYq0i‹HNiNPŽIrUDIBŠPT“jzVqWIVHJdw“ŠPT“jzVqzTrUP‹q€VfhuJqOiYuhDIYVBr‚SYUq‚‰J4JuW“€ uzUBOŽ“6DTBBT“jD†BzvJPr3DqJ‰uI†ŠCYwBCDIBŠPT“fŽ‹LjgIrUDIBŠq‚L7iTLzTrUDIBŠ I“kYJL=PYqqwY“Y†‰“gIYnPVvfg‚H“uV3kuYq€+vŽNqwY†D†Bkg†YJqYqngwq”PT“jzVqzJHUII32gBL‰U‰zvhu‡bgbVv3YN36DI3bŽBLiwYgI‰ai‹4uiJ3+DLvD†aiVHIiV4”PWLvBJ”qju”iwP”IILzTrUDIBŠ I“rzUqPV‹7€u“BŠgJBLYU‰OŽv6VjD B7zU7‚D‹7uWv‡PhPCBO6vuYBfB“““ddIv IIvB†YvBVfSY‚B7zVqzTrUDJ“2zVBLY‡Š‚V‹7vDI3bŽBLiwYgI‰LgI7‹i“CJHJBY‰6idINiwggW4U V76i‚L=iW4ŽVH€D‚3gj‰FiWv”Yv6iJPnqdqOiNzJCJ4Jiv‰Jq‚“FiwŠŽDHTDv3Lg†ŠJimN W4JDI46qI4=gNuJDvUud3CDIBŠPT“jz†r‰IfuI3+qWzhdVqDV3=V“32Žr†b†YdJvYiVY7qUfnuILL+vqfq†Y†bqvYh‰vdvŽ”iJY3zUNiJqzTrUDIB” I4NiJqzTrUuT3VgVwi7‰v€4uWvbŽr†b†YD‹f4uh€‰Jr†4Czvhu‡bgbVv3YN36d‹BŠgJBLYU‰OŽv6VjD B7gTLzTrUDI3hDT“jzVqzTrUDIBŠgv‚SŽVL‰jŠUD‡gv“7z†‰‡Irad“DŽrwiw7ŽYjYWV‚qVŽWr†dW4ŽgVBUuT3VWrjzV•ŽgYhu‡bgbVv3YN36d“‡PT7•BL‡iYPTu‡BDirmSIUŠ‡gUBCDIBŠPT“jzVqzT6PIqVg‚LjIW7OYvrhDIBDqW‰uIUq‚VrrhDIBDY7uI‡r‡idYWPvILI TLzTrUDIBŠPT“jzUŠggIr”D‚3+i‰fYU“Oij‚SVY3grŠIŽwqCVwBCDIBŠPT“jzVqzTrUDIBŠPJr†VVqC‰vPTuT3DBILjIUP‚VrNPr3‰ ‹Lu TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“fIWH‡id‚hDI vi‰•z‚P“‰T•6uT3D fSBH++J“Jq2L3gWqkuVPPVr‡ ‚H†uNBkuYq€+vŽNqwY3V†fnYvrqYqTiIH†uNrk+h3=dJriwY7zV3“g†YJqYqng2LLD7kPVr€dJYO UY†bV4“uY“S+vq‰ wY†qvkYJB4dvŽN Y†I“vuY“S+vq‰ wY3dwŠ“uVB7PV“vqOLLVwvuV‰U+JvggTB‡ ‹HNiJqzTrUDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUDIBŠPT“wYUB‡Ž“uNzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTfuI3+qW‰•zUYgVBUI“3€g“7uz‡Š3Yh“vDTq6qBwwPg‰vY”DV7hPT“7qJq+‰h‚4P‹32ŽV‰jgNŠkqJHUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPJP‰iJqzTrUDIBŠPT“wivCD‹0uJ•2qWB•PJLOŽvuuT3VŽrqFzW‰ŽzTraVWv6 v7dzUq‚V‹•”V“q‰ T“‹zVq‡ŽU‰uT32ir7jB•CIT‹ndIB6BTB7zVqzTrUDIBŠPT“jzVqzv•V“ 4qW‰wYWPg‰J4•DIzPJŽhYW“‡Žv•DTBDY7†Ž†P‚‰vPWV‚q6I4jz†‰BIJ6•IrB‡q‚7•zDHzv•V“ 4qW‰wYWPg‰J4•DI‰”PT7fDW4OYh‚V“u•gJruD†Y+d3adNq”PT“jzVqzTrUDIBŠPT“jzVL‡iYPTu‡BDirmSVUŠO‰vYUIrBŠgJBLYU‰OŽv6VjD B7z†Y‰T7€uhVqY“†ŽV4Czvhu‡bgbVv3YN36Dv‰hDT“jzVqzTrUDIBŠPT“jzVq‡iYuPr3+qI“jIU“gYhrJP‹qVP“7LiwBgYwBCDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUP‹q€VfhuJqOiYuhDIYVBr‚SYUq‚‰J4JuW“€ uzUBOŽ“6DTBBT“jD†BzvJPr3DqJ‰uI†ŠCYwBCDIBŠPT“fŽ‹LjgIrUDIBŠq‚L7iTLzTrUDIBŠ I“kYT“”dJvg ‹H7q†PvYJL€+Jvfg‚H“uV3kuYq€+vŽNqq”PT“jzVqzJHUII32gBL‰U‰zv•V“ 4qW‰wYWPgiV4hV“B2W‰fDUŠOiVBUB‚6J+hY3ITmvB†rrB†Š3DjYŽqdfJdYJBVfJ‰IB7zVqzTrUDJ“2zVBLY‡Š‚V‹7vDIq+qWfS4PYh‰UBVH7IdYP VuJd2LYBY7vPV‰fD‡rgPD60g‚H†gNB“gdŠPVrCiDL†DwYvYh3UqY TqIHdCJH“uISqJHUDIBŠPT“jiJq‰Dr”uJT•ŽJB•z‚P“‰T•6uT3D fSB JV“BgB‚6nq‡Y” VfvVVIJBV•zhYOgdzvd2L€BVHwq‚B7zVqzTrUDJ“”q‚B7zVqzTNPrq+ Jr†dVqgi“PvVdBD fSBq‡iYPTu‡BgirLiwBgIJqnuJvVqfhIW4uŽ“7u‚qY ‹B7zVqzTfNzJ“ŠPT“jzVqzTrUD‚3DiJrud†‰ziIPnVV•WrwYUBOzJqaDI3+q‹“juNY+D‹76u“ •Žr7VbVv3YN36Dv‰hDT“jzVqzTrUDIB2Y7uI‡r‡id‰UP‹3+ŽY7I TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH7dNznYvŠ6qV“vqUY†gJmnYh“n+vq+gWY†€nYhY6PVr+PTH3uJ““uIH+vŽNqwYdCJH“uISqJHUDIBŠPT“jiJq‰D‹76P‹3VV7zU7‚D‹7uWv‡PhPŽ+vIvVUY“YTI4ddYuImv Iq=zJ“ŠPT“jzVqCgIŠP‹q€VfhPw7‰YuTVdVqJ‰wiwPOgI‰i‹7aiNfJCJv7 wP6gjqSiwPd4vd7nq‡PfiVq3b‹LzTrUDIBŠ IL7b‹LzTrUDI32ŽY“LwŠPILPr vgW‰wiwPOgIf4uYP‚ r7wP4‚D‹v”Dvr”PT“jzVq“qJHUDIBŠPT“jzVqzvLuYq0iL‰U‰gIT‹•DIB‚iVfhDWPgŽ“uVjBV rmSIUPPŽvPTV“ vŽ‹4agw‰OzJŽNzJ“ŠPT“jzVqzTrUD‚32g‰wPJqzITradjBbgv‚S‰U“gzh3ad“DiVr†4OiIPTV“‰hDT“jzVqzTrUDIBŠgJŽhIW3‡i“YuY 4i‹“‹Žq3YhIPv TLwŽ†ŠPŽT7JP‹q6qr7dgjŠ‡i“P6DvB”‹v‹z†qCYwBCDIBŠPT“jzVqzTFu‚qViBjPN3CYwBCDIBŠPT“jzVqzTnuU“2BTB7zVqzTrUDIBŠPT“jzVqzvfPI3‰PvŠdzVL‚‰J3uN‚+v“†IW“uŽT•”V“q0 TLjPjr3YTu4P‹ •qr“uIUP‡gInPr 4qT“juNY+D‹€P‹qU ‹HNiJqzTrUDIBŠPT“jzVqzTVW“Ugr7†Ž†q‚DL”D‚3DB‰jgJq+gY“UuhBDVBwb†7CzvfPI3Du‚vŽwBzJ‰VIvB2iJr†YU“PŽW3€uJ•nPv7fYU‰‡‰vPnDI3Dq‚H7zV•ŽgYNVY3DiTLdzV3zYjŠNDv3hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIq6iI“jgw7‚D‹7Nu‡BBiJr†Ž†qO‰h“nV“BUgIH•zV“ŽzTrnP‹3€Ž‹LdqJq+Ž‡I4u‚qNPJBLb†P‚zTvu‡Di‹“fDW4‚DrP•uWvVgT“wD‡Y‰“PY‚qVW‰r‰‡r‚‰h“TVY3D fSBIB‡iV4nV‡Yi‚LdzV3zYjŠUVWv JŽSY†Š“qJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBDŽYfIVqzITLVYq0“7I TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzVqzTrUDIBŠPT“wYUB‡Ž“YUP†q”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“fIWH‡id‚hDI vi‰•z‚P“‰T•6uT3D fSBH+ŽvPVY3VŽfSŽV3‚‰h“•DIqDŽVuzVqgV‹7•u‡BB‚“juJqŽgIu“32 JfSIW4CzT‚NDIB T“jI‡Š“DrrDv‰hDT“jzVqzTrUDIBŠPT“jzVqzTrUDImDT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIB2 r77zVH+DrfTP‹BŠbYŠIŽqgiIPhuhY ‹“f TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jbwuvB‡+BVfJ‰‚v“PV•nqYqwgWY3gWqkuVPIVHUDIBŠPT“jzVqzTrUDIBŠPT“jzVq‚V‹•hV“qVqTL‹‰†qB‰‹rNdI‰Š ‹HNiJqzTrUDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUDIBŠPT“jIW7‚V‹7•V“ vŽrPwiw‰gIT‹•DIq6qV‰fVW3OzJ3TuYqbVfhIUŠOYvY”P‹3+ŽY7dgJqCgIr0dI‰ŠqTLI TLzTrUDIBŠPT“jz‡“jgIrUDIBŠPT“jzVq‚ŽW3u‚qYiT7fI‡‰‚zT‹•IrzPv7L‰UB‡Ž“YUDW“PPTLjIW7‚V‹7•V“ vŽrPwiw‰gIhŠnuhBDgBaI“Y3Yhr6I‹‰PqTv‹z†qCIJ6NzJ“ŠPT“jzVqzTrUuh0ir7uzVHBgV6NzJ“ŠPT“jzVqzTrUP‹3+BI“f TLzTrUDIBŠPT“jzVqzTrUD‚3DiJrud†‰zi‚f4u‚q0‰Jr†4CzvNVY3DiTLI TLzTrUDIBŠPT“jz‡“jgIrUDIBŠPT“jzVqPŽ‚uVdUPTLrY‡‰PŽ“PNP‹q6qW7zVLgV3=V“32Žr†b†YCVwBCDIBŠPT“jzVqzTrUDIBŠPT7wŽ†7gI‹•DIBDiYwdW4‡Dru‡fTqrŠLP4‚‰dr6uhBbgr€SYVHCYwBCDIBŠPT“jzVqzTrUDIBŠPJr†VVqCD‹0uJ•2qWB•PJLOV‹•ad‹BŠi“7wbV4‡Ivu‡B‰Pv7ugwŠ‡ŽvraDvzTqTLu TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“fIWH‡id‚hDI vi‰•z‚P“‰T•6uT3D fSBH++J“kq2L†I4vg†YJqYqng2L†bV6nYT7=PYq0gOL†BV4“uIH+vŽNqwYdCJH“uIS+vqn JY7ŽwŠ“+h3=dvŽ•iTH†IwfngI‰JPVv‡PTH7iVq“ISHSqVrYqVY7q†PvYJL€+vŽT “Ž•“7wdW3‡iY‰aiduNiwPgV•Liv‰” ‡qJi3iWvaVYŠiY7‹qUPUŠaDI‰” HVfSbdcv j‹B“7LId NITvVDLjB‚“j‰jYuImvBUYUBhq•uI7•ghqjgIrUDIBŠPT“jzVqzTrUDImDT“jzVqzTrUDIB2bIB7bwPzTrUDIBŠPT“jzVL‚‰J3uN‚+JBLYU‰OŽv76IWv6 v7dPJL‡‰TuuIBnBTB7zVqzTrUDIBŠPT7wdUPOi“6uW•‰PvŠdzWv3YN36Vj‚i‰bV7OŽ‡IV“ vŽB•PJLgiV4hV“ vg†Y†ŠkqJHUDIBŠPT“jzVqDrPvu‚q6qVr•PJLgiV4hV“ vg†Y†ŠkqJHUDIBŠPT“jzVqD‹76P‹3VV7zVLPŽ‡“vP‹qVqV‰‹ TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH3PNY“uI•SqVr†g2L3uNkgIHT+vqziwY7q†PvYJL€+v •gSL†DW7“YN3=+v viY3DWqkuVB7PV“CPNY“zNY‰iJqzTrUDIB”PvrfzW3‡iIPTDIBDŽr7ugjŠD‹0uJv6qY7•‰v6iJPLi‚LFiwgPW•SDJnqI4DT“jzVqzTr4DIY2qv“uDW3OITrnu‚q6 “7dzW“OŽ‡“hV“qqI“kuY“S+vq‰ wY3iJH“P†77qVrW Y7qWHv+h3=dJTNiIH7q†ŠkIh‰viY7€u‚3bij NITvBT6nBY““‰hY+JJDSL7zJ“ŠPT“jzVqCgIŠuJvVŽ‰uDUY‰TP•uJvBI“kgDH6dvqOiUY†dV3“Yvr4+J“CPNY“zNY“YNPvPV“0iJY“uV3kuYPhdJINg‹r”PT“jzVqzJHUII3DiJBLbdB‡IPIqbiBfIUŠOŽ‡‰UB“7dV‡PC+NuviNrOBY““B‡YOIŽvuW‚TBIngjY”‰NPjgIrUDIBŠPTL7iNPjgIrUDIB2qJ‰†DUB3YTvUVW•VqY‚hIUŠOŽ‡‰UV‡VŽr‰LbVLgV‹•jPYPDiYfIVH+Dr6PI3‰ T“jIUB3YN‰6IrqggfdW4CIVHUDIBŠPJYNiJqzTrUDIBŠPT“wivzJ3LVYq0“7dijqjgIrUDIBŠPT“jzVqzTrUDIŽ0q‡YŽgI0viJvaB‚LwddY4ŽW6JDTqBBI4vg‡IJzTfNBN“BBY‚n dYg†uvd‚JBI44‰hYudIvdju”BI4vg‡IJzTfviSL‰BdPdB‚B7zVqzTrUDIBŠPT“jzVqD‹76P‹3VV7zWOiYuhDI36 fYUq3D‹WVYqDgYmSYUBgYhr6uW•‰iT7fIW4“DrrhD‚3DiJrud†ŠuYwBCDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUuJvVŽ‰uDUYzvfuIq6‚4IBVPgŽ“uYT•gv7ud‚B“Y†3udVzW‰fIU“CzJzV“3€Ž‹7•qJq+Dr6PI3‰ T“jIUB3YN‰6Dv‰hDT“jzVqDjŠCzJ“ŠPT“jz†PCgVHCDIBŠPT“jz†rdJrUqVY3dUvgILUqVYjqVY“uV3kYTq€PYqvqVY3I€ngDHhdJ“kq2L†I4vg†YJqYqng2L†bV6nYT7=PYq0gOL†BV4“uI7UdJr‡gVY7DJqvPIBvIVHUDIBŠPT“jiJq‰D‹€uJvq‹“jIW7OŽ‡IV“ vŽrwYU7PIFP‹3+ LuJ vVVrBV‹JBdY”+vcJd2LNzJ“ŠPT“jzVqCgIŠuTqY“†Žq+‰N3udYPv“Lb†PO‰vP€uW“‹iVvCCJ4nDJL ILfiUŽT WvaB“3” ‡PŽqUPUŠvBV7” UrIgNYŽ vPYN3FVWInb7kP†“JqYqfgwY3PUŠ“g†P”PJHUDIBŠPT“jiJq‰D‹76P‹3VV7zW3‡i‚7€PYB‹iNuvY4LBdq6g‚“uiLCqWH7iT4aPNaiwfNiWHhuI3aiVHIiV4O‰•vBrrCDIBŠPT“jz†r‰IfuI3+qWzhdVqDV3=V“32Žr†b†YdJvYiVY7qUfnuILL+vqfq†Y†bqvYh‰vdvŽ”iJY3zUNiJqzTrUDIB” I4NiJqzTrUuT3VgVwi7‰v€4uWvbŽr†b†Y‰J‰6P‹Ivq“7wYU7‰iW4‹u‡fvŽr7†BdŠD‰vPFV†“Ugv‚Sb†Y‚‰vPvP‹YDiŽSd†BzvhuYqTirŠ†VW3OD‹•6Dvr”PT“jzVq“qJHUDIBŠPT“jzVqD‹76P‹3VV7zVL‚‰J3uN‚+vmSP4‚‰dYJV‚qV“rai‹v3YN‰6IY3DŽB7PJ•PŽ‡“vP‹qVqV‰jŽVLgV‹•=DU“NPT7wdUPOi“6uW•D‰Y7udW7ŽzTrnu‚q6 “7dghqjgIrUDIB2bIBUiJqzTrUdw“” IB7zVqzTrUDJ“‹iVHŽiWv=udY•V“3bqW‰uDW7gITV‚H7dNznYvŠ6qV“vqUY†gJmnYh“n+vq+gWY†€nYhY6PVr+PTH3uJ““gILUqVYjqYr”PT“jzVqzJHUII32gBL‰U‰zv•V“3bqW‰uDW7gY‡“V‚B2W‰fDUŠOiVBUuJvVWfhYU“PŽ“YTuYqIiwBgBJvUDJPaiVHIiqŽqTLzTrUDIBŠ I“rzU“gVrf4uJTTPv“uDU“PVLUB‚nYdYgqVIvV†“BY7j ‡P IŽvB‹6vBV‹nBdPŽ‰JmvB†rrB†Š†qhINqIYjgIrUDIBŠPTL7z‚r‚‰J3•u‡B‚‚“rY‡‰PŽ“PNP‹q6qW7‰wŠ6DW•” ‡u”iV“qW4€BN6q‚“ŽiwYŽgWLJB‚3LPJ‹0DT“jzVqzTr4DJ‚0DT“jzVqD‹f4VVv0 r“•zWv‚YhY=P‹q6qW7zW•gVrku‡DiŽD‡YYiYPFu‡BVY‚SY‚7gzJqnuJvVWfhYU“PŽ“PWuYq‰ ‹B7zVqzTfNzJ“ŠPT“jzVqzTrUuJvVŽ‰uDUYzvfuIq6‚4IBVPgŽ“uYT•gv7ud‚B“YIuP‹3iT€hDW4‡Ž‡‚4uJvbi‹4†iL+†qUD‚3+iŽSbdr‡iI•6Vj6gTLI TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH3PNY“uI•SqVrP OL†I†ŠvYvŠS+vŽN YLzV““Ih‰SIJ76 ‡qai‚NBNŠUDV•LgdPaiVHPV†cv j6B‚‚JŽhYP+v JDhunBVrdDjYOŽ“zvVVvbBVwIjYOiYuviJvŠB†Š•D‡P IŽvB‹6vDTH†q†Y“Yv74zJLCDIBŠPT“jz†r‰INVY3+gdzVLPid“Ju‚qVg7zW“OŽ‡“hV“qqI“fIU“‚Yv3”iJr=iUŠŽ W4=BOHPT“agNYCŽJ•Liv‰6 Uaiv3gUPJD†3LVYq0“7“gV34dJYnq†YdB7“YvŠS+JvŠgVYdBw“PVr€dvqvqVY†VUrŠiJqzTrUDIB”PvrfDW4‚DrP•uW“2gBaDW3“IT‰”q‡YIiTvBJ4=DY36gTLJiJ“”d•U W•6 ‡qaiNB3D•Liv‰Li‹iUITIILzTrUDIBŠ I“rz‡Š3D‹7JPjBBPvug7gV‹fuY •qI“kiYYLPV“J OL3DJTnYT3vqY 0PNY†BwYkISH”PVr2 Uq”PT“jzVqzJH4dwq”PT“jzVq‡DrP7u‚q6g‚“wV‡rOiI0uY •qI“wP4‚‰dYJV‚qV“rai‹‰3‰vP=udgVwYVH+‰T7Ju‡0ir“†BwŠjgIrUDIB2BTB7zVqzTrUDIBŠPJBLY‡Š‚V‹7vDIBDŽrwiw7ŽYjYWV‡VŽr‰LbVLgV‹•jPYYŽ‰fDVH+Ž‚•”V“qb ““†DUBgIJBhDIBDgVfSb†BgYTPvIw“‚ŽBaYW4+WHaVWv JŽSYV•CYwBCDIBŠPT“fŽ‹LjgIrUDIBŠq‚L7iTLzTrUDIBŠ I“kuVqvPVrb UY3V†fnYvrqY h NY“BJ€niIr7PYŽT “B=iwfNiW47BhqPT“aiV‚JiWv”VY“B†cSijPB‡ŽvVDL†B‚6J+hY3ITmvu‡IBY“Ld‡YO‰vcvuWvVBVHLzdYI€JD†rjBd‰CBILkYNYvPYqg IBnDT“jzVqzTr4DIY2qv“uDW3OITrnVVT•qWwYW3OgI7u‡f• v7†‰UYDr•PrquiJH3gW•dw6qjqŽiUITCNŠUDV•nqI6hiWv”Y4S W•6iVr=qUPvPYN3FVWY7gwrkPVLvqVr•iJY3uJ““iIr7PYŽT WY“uV3kYNYvPYqg Ir”PT“jzVqzJHUII3+i‰fYU“OgI€uJ•+gYd‰HJBY‰6idINi7V4nDNP”gVHŽiWqSiW4SBJ•” JrfiWv”Yv6u‚‰aqd‰‰DT“jzVqzTr4DIY2ŽrfDUP‚ŽTvUI“3€g“7uz‡Š3Yh“vDIHLYVv“g†PS+JrCiDL†DwYvYh3UqY TqIHdCJH“uISqJHUDIBŠPT“jiNrŽqJHUDIBŠPJBfYW“O‰J4=DIqgŽVLd‡Š3Yh“vDIq‚i‰rB†Pg‰vPFIV•6‰rwYW73Ž“PnDTBDgVfSb†BgYTPvDvr”PT“jzVq“qJHUDIBŠPT“jzVqD‹76P‹3VV7zVL‚‰J3uN‚+vmSP4‚‰dYJV‚qV“rai‹‚Dr•DTB‚gWrwYW73Ž“PnDU“NPT7wDUPOŽU36VY TCT€hIU“‚YvYadJ“‚iY“†w7gIJBdNq”PT“jzVqWIVHCDIBŠPT“jbwrCPJHUDIBŠPT“jiJ v IŽvBVsSqdYg†uvV‚BLBY‚nq‡YŽqVvB‹6vBY““BhYŽWJDduhBY‚nYhPCBO6vuYBfBVfSYjYPiI0vu‚qzBVLY‡Y”iI‹v w“+B‚“4zhITDhYCdvqvqVY†VUrjgTLzTrUDIBŠ I“rzUqPV‹7€u“BŠgv“Lb†PO‰vP€uW“2gVfSb†BgYTPvDI3DV‰†VH”uV7a ‹4Si€JCJ•U W•6gjqJiWv”Y4S W•6iVr=qUPvPYN3FVWY7gwrkPVLvqYŽTgWY†IwfnPIBvPYqfqDL“uV3kYNYvPYqg Ir”PT“jzVqzJHUII3+i‰fYU“OgI€uJ•+gYd‰HJBY‰6idINi7V4nDNP”gVHŽiWqSiW4SBJ•” JrfiWv”Yv6u‚‰aqd‰‰DT“jzVqzTr4DIY2ŽrfDUP‚ŽTvUI“3€g“7uz‡Š3Yh“vDIHLYVv“g†PS+JrCiDL†DwYvYh3UqY TqIHdCJH“uISqJHUDIBŠPT“jiNrŽqJHUDIBŠPJBfYW“O‰J4=DIqgŽVLd‡Š3Yh“vDIq‚i‰rB†Pg‰vPFIV•6‰wi73Ž‚P7u‚qYiT7wDUPOŽU36VY T ‹B7zVqzTfNzJ“ŠPT“jzVqzTrUuJvVŽ‰uDUYzvfuIq6‚4IBVPgŽ“uYT•gv7ud‚B“YIuP‹3iT€SdUB3YT•SVYq+ v7duNBzv7u‡f• v7†‰UYzVzuJ•Vi‹7FiJ•giIPhuhYi‚LI TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH3PNY“uI•SqVrP OL†I†ŠvYhBhqVINgOL†I†fnPYY4dJr‚ Y7dNznYvŠ6qV“vqUY†gJmnYh“n+vq+gWY†€nYhY6PVr+PTH3uJ““gILUqVYjqYB=iwSiW4LuVqzJ“ŠPT“jzVqCgIŠuTqY“†Žq+‰T7Ju‡0ir“†BqPid“Ju‚qVg7z‡Š‡i“P6B‚LwihIJIhuvuWY•BdqvIjYgzNuvBYB”BdY4‰dY3B‡IvVWv”Bhq•dY7L‰UB‡Ž“3”iJr=iUŠŽ Wvh I3Li‚“aiLCCJ•6DJ7aiVHIiwSiW4LuVqCDIBŠPT“jz†r‰I•V“3DŽVBLBqPV‹7•VY3nPhPŽ+vIvVUY“BY“•‰‡YgzNfJD†rjBd‰CBdY3+hIJd‹q€BdY4‰dYYN vBNYrzJ“ŠPT“jzVqCgIŠP‹q€VfhPw7‰YuTVdVqJ‰wiwPOgI‰i‹7aiNfJCJv7 wP6gjqSiwPd4vd7nq‡PfiVq3b‹LzTrUDIBŠ IL7b‹LzTrUDI32ŽY“LwŠPILPr vgW‰wiwPOgIaV“3DdJfSIW4‡Ž‹€vI“ vgr“L4gzJqnVVT•qWwYW3OgVLCDIBŠPT“f TLzTrUDIBŠPT“jzU“gVrf4uJTTPT7fIWH3V‹vTI•i“7uI‚HOŽ“6uhŠ+BYruI‡Š‡gVqaV“ vgr“L4gzJBhDIBDgVfSb†BgYTPvIw“‚ŽBaYW4+WHaVWv JŽSYV•CYwBCDIBŠPT“fŽ‹LjgIrUDIBŠq‚L7iTLzTrUDIBŠ I“kuVqvPVrb UY3V†fnYvrqYqz OLdBNŠ“gILqVYr wY3PwŠ“gIHT+vqziwY7q†PvYJL€+v •gSL†DW7“YN3=+v viY3DWqkuVB7PV“CPNY“zNYdgW4S W•6iVrU ‹B7zVqzTrUDJ“2zVBw‰U“PYhŠUD‚q+qWfS4PYh‰UVVT•qWwYW3OgIfuJ•VijPC‰JsvB“ŽJBY‚nq‡P‰J‹vBrBLBdY4‰dY3B‡IvVWv”Bhq•dY7L‰UB‡Ž“3”iJr=iUŠŽ WLvDdB6g‡u”iJqg W•€DJaiVHIiwSiW4LuVqCDIBŠPT“jz†r‰I•V“3DŽVBLBqPV‹7•VY3nPhPŽ+vIvVUY“BY“•‰‡YgzNfJD†rjBd‰CBdY3+hIJd‹q€BdY4‰dYYN vBNYrzJ“ŠPT“jzVqCgIŠP‹q€VfhPw7‰YuTVdVqJ‰wiwPOgI‰i‹7aiNfJCJv7 wP6gjqSiwPd4vd7nq‡PfiVq3b‹LzTrUDIBŠ IL7b‹LzTrUDI32ŽY“LwŠPILPr vgW‰wiwPOgIaV“3DdJfSIW4‡Ž‹€vIWT•gW‰udW3Pi†36DTBDgVfSb†BgYTPvDvr”PT“jzVq“qJHUDIBŠPT“jzVqD‹76P‹3VV7zVL‚‰J3uN‚+vmSP4‚‰dYJV‚qV“rai‹‚Dr•DTB‚iVfSd‡r‡Ž‚P7u‚qYi‚4jzVLPid“Ju‚qVg=b•‚D‹€4V“B‡B‚€SVW3OD‹•6DU“nBTB7zVqzTf•zJq”PT“jzVqŽVH4zJ“ŠPT“jzVqCgI‰LiT4aiV73BJvLDSH6gTLOiwzNd•vB2H”Pv7SiW3CuWvauY3”gUWi€vuWHS ‡q6 ‹“WiwPgI47VdB6 v‚”iwYgVv7VI‰Li‚“aiJ“”d•U WL”BV‹JBdYgiVHCIVHUDIBŠPT“jiJq‰D‹€uJvq‹“jIW“OŽ‡“hV“qqI“wDUPOŽU36VY TPJ‰fD‡rgPV“€ IH“gNYvYhBhqVINgOL7zWvvPIYqVY3g‹H†q†Y“Yv74dS60g‚qggfdWJDTq”BdPdB‡YSDJmv w“+B‚“wudITIJTvB†rrBV‹JBdYgiVHjgIrUDIBŠPTL7z‚r‡iYuPr3+qI“w‰U“‡iIuvDIH7CJ4kYJaqYqBgY†I†‹ngILUqVYjqVY†qUY“g†3”PVY3g‹H3YUBkPdq€zVHUDIBŠPT“jiJq‰Dr”uJT•ŽJB•z‚P“‰T•6uT3D fSB JV“BgB‚6nq‡Y” VfvVVIJBV•zhYOgdzvd2L€BVHwq‚B7zVqzTrUDJ“”q‚B7zVqzTNPrq+ Jr†dVqgi“PvVdBD fSBqgŽ“uYT•gv7ud‚B“YY7JVdBV“7†IVH+‰T7Ju‡0ir“†BwŠjgIrUDIB2BTB7zVqzTrUDIBŠPJBLY‡Š‚V‹7vDIBDŽrwiw7ŽYjYWV‡VŽr‰LbVLgV‹•jPYYŽ‰fDVH+Ž“7JVdBV“7†IV•ŽzTrnVVT•qWwYW3Og‡3aP‹3+ŽY7duhP+Ž“7€u‚3bi‹7•ghqjgIrUDIB2bIBUiJqzTrUdw“” IB7zVqzTrUDJ“‹iVHŽiWv=udqLiI6”iLCuW4=BOHnqdPui†Iv W47 V7LiWruiJ7SPW4=BV” UfNiwŠPW4JV“Š6gY‚hiwBPCJ4vV“3LgY“‹iV•iWH7iT4aPNnihY3B‡IvVWv”Dvr”PT“jzVqzJHUII32gBL‰U‰zv7u‡f• v7†‰UY‰T7Ju‡0ir“†Bq‚D‹€4VWY7gwrkPVLvqYqz OL3BJvvYTL4dJY3g‹H†q†Y“Yv74dS60g‚qggfdWJDTq”BdPdB‡YŽgI0vVDLJB†vudYP VsvB†rrBV‹JBdYgiVHjgIrUDIBŠPTL7z‚r‡iYuPr3+qI“w‰U“‡iIuvDIH7CJ4kYJaqYqBgY†I†‹ngILUqVYjqVY†qUY“g†3”PVY3g‹H3YUBkPdq€zVHUDIBŠPT“jiJq‰Dr”uJT•ŽJB•z‚P“‰T•6uT3D fSB JV“BgB‚6nq‡Y” VfvVVIJBV•zhYOgdzvd2L€BVHwq‚B7zVqzTrUDJ“”q‚B7zVqzTNPrq+ Jr†dVqgi“PvVdBD fSBqgŽ“uYT•gv7ud‚B“Y‚•=uJT• Jw‰W“O‰vY”D‚q+qWfS4PYh‰zJ“ŠPT“jz‡qjgIrUDIBŠPT“jzVq‡iYuPr3+qI“jI‡Š3‰J4FdrzvP“€SY‡ŠIid“nV“3bzJYY‰‡Š‚D‹“”D‡BbgWBLb†BO‰TP7u‚qYi‚4jzVLPid“Ju‚qVg=b•‚D‹€4V“B‡B‚€SVW3OD‹•6DU“nBTB7zVqzTf•zJq”PT“jzVqŽVH4zJ“ŠPT“jzVqCgI‰LiT4aiV73BJvLDSH6gTLOiV•iUŠ6uOHLg‚“agNY”qWLvBJLiWruiJ7SPW4=BV” UfNiwŠPW4JV“Š6gY‚hiwBPCJ4vV“3LgY“‹iV•iWH7iT4aPNnihY3B‡IvVWv”Dvr”PT“jzVqzJHUII32gBL‰U‰zv7u‡f• v7†‰UY‰T7Ju‡0ir“†Bq‚D‹€4VWY7gwrkPVLvqVr‡gVYLYUunuIv7PYŽJgDLdBN‰vPVr€dvqvqVY†VUrk+h3=‰v7€u‚3bijPC‰JsvB“ŽJB†CgjYI€JV“ ”BVH•D‡YŽ IvdwISBdY4‰dY3B‡IvVWv”zJ“ŠPT“jzVqCgIŠuJvVŽ‰uDUY‰TP•uJvBI“kgDH6dvqOiUY†dV3“Yvr4+J“CPNY“zNY“YNPvPV“0iJY“uV3kuYPhdJINg‹r”PT“jzVqzJHUII3DiJBLbdB‡IPIqbiBfIUŠOŽ‡‰UB“7dV‡PC+NuviNrOBY““B‡YOIŽvuW‚TBIngjY”‰NPjgIrUDIBŠPTL7iNPjgIrUDIB2qJ‰†DUB3YTvUVW•VqY‚hIUŠOŽ‡‰UV‡VŽr‰LbVLgV‹•jPYY0qWLP‹‰O‰J4=udgVwYVH+‰T7Ju‡0ir“†BwŠjgIrUDIB2BTB7zVqzTrUDIBŠPJBLY‡Š‚V‹7vDIBDŽrwiw7ŽYjYWV‡VŽr‰LbVLgV‹•jPYYŽ‰fDVH+ŽU3JuWv‡qr‚SwŠPŽU‰€VVv0i‹7•qJq+‰T7Ju‡0ir“†B2H+Žv•PrqYi‚H7PvPYN3FV“B‡ ‹HNiJqzTrUP“r”DT“jzVqzh34DJq”PT“jzVqzJHUB†rjBdY”ŽUIv “JBY7jidYŽgduvuDLwBdPjz‡YPduv j6B‚‚JŽhYP+v JDhunBVrdDjYOŽ“zvVVvbBVwIjYOiYuviJvŠB†Š•D‡P IŽvB‹6vDTH†q†Y“Yv74zJLCDIBŠPT“jz†r‰INVY3+gdzVLPid“Ju‚qVg7zW“OŽ‡“hV“qqI“fIU“‚Yv3”iJr=iUŠŽ WvLDSH6 ‡‰OiWHD4=dwaiVHIiwSiW4LuV7Jq‚“0iY“†w7gPV“€ IH“gNYvIh‰=PVrP OL†qW3vPVqUPYqBq†Y“uV3kYNYvPYqg Ir”PT“jzVqzJHUII3+i‰fYU“OgI€uJ•+gYd‰HJBY‰6idINi7V4nDNP”gVHŽiWqSiW4SBJ•” JrfiWv”Yv6u‚‰aqd‰‰DT“jzVqzTr4DIY2ŽrfDUP‚ŽTvUI“3€g“7uz‡Š3Yh“vDIHLYVv“g†PS+JrCiDL†DwYvYh3UqY TqIHdCJH“uISqJHUDIBŠPT“jiNrŽqJHUDIBŠPJBfYW“O‰J4=DIqgŽVLd‡Š3Yh“vDIq‚i‰rB†Pg‰vPFIV•6IY“udU7‚Ž‡“•V‚BUgv“Lb†PO‰vP€uW“nDT“jzVqDwBCDIBŠPT“jzVqzT•V“3DŽVBLBq+Dr”uY3BqrŠ6bV•gVrku‡DiŽD‡Y‰VrfuJ“UiWBw‰U7‡ŽJ‰JuJv‰i‚4jzVLPid“Ju‚qVg=b•‚D‹€4V“B‡B‚€SVW3OD‹•6DU“nBTB7zVqzTf•zJq”PT“jzVqŽVH4zJ“ŠPT“jzVqCgI‰LiT4aiV73BJvLDSH6gTLOiwzNd•vB2HPT“agNYCŽJvauY3”gUWi€vuWHS ‡q6 ‹“WiwPgI47VdB6 v‚”iwYgVv7VI‰Li‚“aiJ“”d•U WL”BV‹JBdYgiVHCIVHUDIBŠPT“jiJq‰D‹€uJvq‹“jIW“OŽ‡“hV“qqI“wDUPOŽU36VY TPJ‰fD‡rgPV“€ IH“gNYvYvŠS+J“2i†Y“‰†ŠvPVr€dvqvqVY†VUrk+h3=‰v7€u‚3bijPC‰JsvB“ŽJBI47d‡YP+NuJDIq3Bd‰didIv IIvuduvBY7LiTB7zVqzTrUDJ“2zVBLY‡Š‚V‹7vDIqVBL‰‡YdJ‚”i‹H†uW•vYTv€PYq‰ DL7DJqvPIBvPYqJqVY7H“PVr€dJrV TH“BJ3ŠiJqzTrUDIB”PvrfIWH‡id‚huN“2‰WYwdW4‡Dru‡fTPhPgIv€JDSLJBVH4u‡YPPduvuU“jBV7BjYŽ+JmviTqJzJ“ŠPT“jzVqCgVHJzJ“ŠPT“jzUq‚YT7huYqBPv7aYUYPŽvu‡fTPv€SY‡ŠIid“nV“3bzJYVdW4O‰vP=P‹qVgTLjIW“OŽ‡“hV“qqIL‰iJqzTrUP†q”PT“jzVqzTrUDI3+i‰fYU“OgIrnP‹q€ B•Ž2LuŽW‰6P‹Ivq“7wYU7‰iW42P‹3DILjPw7gYN36VdBDir7juNBzv7u‡f• v7†‰UYzVzuJ•Vi‹7FiJ•giIPhuhYi‚LI TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH7dNznYvŠ6qYq‡ IH3dVmnYNYLqYq‚gTH3PJmnPIBvPVY3g‹H3DWqkuVB7PV“CPNY“zNYdgW4S W•6iVrU ‹B7zVqzTrUDJ“2zVBw‰U“PYhŠUD‚3UPJr†BdŠgYJ‰6uJ“2VdYgŽ“‹v IBfzJ“ŠPT“jzVqCgIŠuTqY“†Žq+DLUuY vŽr7†P4‡gIgBY€SIdY4zT3jgIrUDIBŠPTL7z‚r‡‰TP•VY PT7w‰‡Š‚D‹“UVY3+Y“ugJ viN“fBV‹JudYPdIJVYqbBVwPdY”zJ0vVDLCBY“jbj NITvd“ŠBdqvŽjYYN vBNYrBhq•ddYO‰JIviTBaBdY4‰dYPzhmvd‚JBV7‰jYOzvIvV‡PŽB†Š“Ž“7L‰UB‡Ž“3nqI4Si†B4DvaDV•6PT40ŽBaYWvd‚JBVfn‰‡P3‰h v w“+BY“jbj NITvVIŽ0BI47B‡Y3Ž“mvBU“LBI47dYPdfvVDLJBISChIvIJsJVIB3B““†d‡IJVvCqYŽNiSL3uUunIhqv+JrrgOL†qnP†BqYŽT Jq”PT“jzVqzJHUII32gBL‰U‰zvfTu“qNPJŽhIU“3YhYaDIH†gJ7“PYY4dvq0gOL†BV4“PVr€‰W3bY‹r”PT“jzVqzJHUII3+i‰fYU“OgI€uJ•+gYd‰HJBY‰6idINi7V4nDNP6i‚L=iNfJV4aV‚‰LiT“WiWqSiW•Liv‰LgY“‹iV•iWH7iT4aPNaiwfNiWHhuI3aiVHIiV4O‰•vBrrCDIBŠPT“jz†r‰IfuI3+qWzhdVqDV3=V“32Žr†b†YdJvYiVY7qUfnuILL+vqfq†Y†bqvYh‰vdvŽ”iJY3zUNiJqzTrUDIB” I4NiJqzTrUuT3VgVwi7‰v€4uWvbŽr†b†Y‰J‰6P‹Ivq“7wYU7‰iW4‰u‡Bb ‰wiwPOgVqnPIBNPT7fgNB‰TP•uJvBI“jIW3‚Dr•IrPTP‹4jzVL“‰hrhIr vŽVwqNŠjgIrUDIB2BTB7zVqzTrUDIBŠPJr†VVqCzTYnPI 4 TLdz‡qjgIrUDIBŠPT“jzVqzTrUDIq6iI“jPJ3+D3Tu‚BŠbI“jI‡Š3‰J4FdrzvŽVrVPwŠg‰J‰6P‹3BiTLdgJq“qJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVq‡iYuPr3+qI“q‰kqJHUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPJP‰iJqzTrUDIBŠPT“wivCD‹•V“q‚PW†‰‡ŠPŽW3WVYq0 TLjuNPz‰U‰“I “cSDUP‚YhYnuN€gY3 JHu‰vrSDvBNiv3wI†CYU3‚V‹Phiv3wI†CINq”V‹q‰ ‚LV‰iw‰“I YŠFBwP3IJBhDIBDB†qNBzvTVY3DgWrwYU7ŽzT‰YVLVDrm4d‚PV‰‡“zYVLD‰“Y7gNŠ“qJHUDIBŠPT“jzVqzTrUDIBŠgv7†4OYvPvP‹3BPvŠdzWuYwBCDIBŠPT“jzVqzTrUDIBŠPv7Lb†“gYTP=uIBŠiT7wŽV3‚‰T•”V“3BPv“udVq+‰JV“  YNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPJr†VVqCzvfTI€gJruIW4OYUB0VrBŠiI77zVL“‰w •D‚q6Žr7†ŽVBŽdŠUDW“PPT7fgSLzIvP‹qVqrqFDW‰zv“LDIBDBYŠ‹ŽL3Vr6u“PhŽr3dijqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUVWT•Y7†‰W73zTr”D‚qŽ‰fDVqPV‹vUD‚qŽ‰fDWPOiIPTV“BŠbYŠ7zVL‚iIPhPrqY YNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIB2 r77zVH3V‹•WVVT•qWjPJL‚iIPhPrqY ‹Lu TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzh3JVWv JŽSVLvdwL NrfiV•iW4Udw7Jq‚“0ŽBaYWvd‚JBVfn‰‡P3‰h v w“+BY“jb‹B7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzUŠggIr”D‚3ggfYW4CVwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzUŠggIr”DY32Y7†PPOYTuVdUiT7•b•ŽgY€P‹3DYmSBV3OYvYvDU€gY 4B“uINŽ”DV‚• ‹7•qJq+‰JV“ 4u‚vŽwBzvfV“ 4qTLdijqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVq‰T•JuW•D aYW4‰‹‚NzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUP“r”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPv7†w7gVwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzUŠggIr”DY32Y7†PPOYTuVdUiT7•b•ŽgY€P‹3DYmSBV3OYvYvDU€gI“7b†Š+†qUD‚q6Žr7†ŽVB‰‡ŠhDIBDŽr7†Ž†qCIJNzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIqbqWaIUŠOi“P6DI‰BTB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUP“r”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPJP‰iJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIqV JŽSY‡qjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTVW“ŠiJrudWP‡Žv•uY vi‚LjI‡PYNm4V“Bn YNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIq6iILj‰U7‚‰TuuYqBB‚H6b†Š‡Žd“TVY3DgWrbV3‚Dr•DTBD ‰wYU‰†‚‚d‹B2u‚7w‰‡Š‚D‹7WuWvqr7IŽ2L+Dr7€u‚3Vir3dgNŠ“qJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzT=u‡fvŽr†BdrgITr•dNq”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDImDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“wYUB‡Ž“uNzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqPŽ‡“vP‹q6qV‰†YVqBgUBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDImDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUP“r”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrnV“q0i†YUY‚D‹•OVrBŠbI“wBV4‚IfvuYq0ŽVBwgwquŽ‚PnVV•iwYU‰gYhIDTBD ‰wYU‰†‚‚d‹BŠgJ‰wgwŠ‡V6NzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzVqzTrUuJvVŽ‰uDUYzv6u‚qVqr7†BdŠ‡UBCDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUV“q0“7u TLzTrUDIBŠPT“jzVqzTrUuJvVŽ‰uDUY‰U‰‚dNq”PT“jzVqzTrUDImDT“jzVqDjŠCzJ“ŠPT“jz†PCgVHCDIBŠPT“jz†rdJrUqVY3dUvgILUqVYjqVY“uV3kYN3aqVrŠ 2L7dNznYvŠ6qV“vqUY†gJmnYh“n+vq+gWY†€nYhY6PVr+PTH3uJ““gILUqVYjqYB=iwSiW4LuVqzJ“ŠPT“jzVqCgIŠuTqY“†Žq+‰TuP‹3+ r“aY‡ŠgV‹vUVY3+Y“ugJ JD†rjBd‰CBdIv IIvu‚q“BVHji‡ NIvPVrfuNYdBwYvYN3aqVrŠ 2L†IV7“PV•hdS60g‚3ggfYWvd‚JBVwPdY”zJ0vB†rrBY“jbj NIvO‰J4SVWYdBwYvuY“S+vq‰ wY3iJH“P†77qVrW Y7qWHv+h3=dJTNiIH7q†ŠkIh‰viY7€u‚3bijINDS6vVVYwB†cnijPC+J‚TB‹BjzJ“ŠPT“jzVqCgI€P‹3DdYP+NuJVIB+BY“jbjYI€NBN“3uY vgv7ugW7UDIuV“3€ŽjzTzT‡iYPFu‡BVY‚SY†‰3Yv‰=PT“gWw‰U7‡+THŠPv32gr‚Sq3gŽ“3=PT“gWfSBdŠgYhIdrqDiŽSI7UDIP=uIqVgW‹S‰W“O‰v3=PT“gWrwYW73Ž“PnBj‰jz“‚SwŠPŽU‰€VVv0ijzTzTgYhY€VVv0ir7kdTrUYv7JVdBV““†DUBgPIHŠPvqgq“‚hYU7gYv‰=PT““‚hDUPO‰N3€VVv0ijzTzTO‰h“vVU‚4gWwi73Ž‚P7u‚qugWq‰UqPV‹•FPjf•Y7kdTrUV‹•6u‚qVgW‰wYWLjgIrUDIBŠPTL7z‚r‡iYuPr3+qI“w‰U“‡iIuvDIBDg‰fIU“3YT€4P‹qugNYŽ W4=V“3nqILSiJ“”d•U W•LijqOiNuvY4LBdq6g‚“uiLCqWH7iT4aPNaiwfNiWHhuI3Jq‚“=i€JCJHUBhB6 ‹7SgNYC UPJDV•aiVHIgNY‰•vBv‰Li‹iUITYwPJD†qnVY3DŽBLi“‚Vr6BI47B‡Y3IJ‹vd“4B‚“4zhITDhIvu‚q“BVHji‡YPdfJd2LYBY7vPdYŽ ITvBNIB†Š†qhY”ŽUINBN“BBVsJIhYPgYmJuI JBV4Ij NI‚v rqNBdqv‰dIv IIJV“BvBY7jd‡ NI€vd“kD‚qŽ‰fDUŠPi“uVWYdbHkYTPPVY3g‹HdBqkuVqT+S60g‚H†gNB“gdŠPV‚”i‹H†uW•vP†ŠvqVrV TH“BJ3ŠiJqzTrUDIB”PvrfIWH‡id‚huN“2‰WYwdW4‡Dru‡fTPhPgIv€JDSLJBVH4u‡YPPduvuU“jBV7BjYŽ+JmviTqJzJ“ŠPT“jzVqCgVHJzJ“ŠPT“jzUq‚YT7huYqBPv7aYUYPŽvu‡fTPv€SY‡ŠIid“nV“3bzJYY‰‡Š‚D‹7VV•VŽr7udVHPV‹7•VY3nPT7w‰‡Š‚D‹7VV•VŽr7ud†ŠjgIrUDIB2BTB7zVqzTrUDIBŠPJr†VVqCzTPuh‹•gBaDW3“IJqnVY3DŽBLi“‚Vr6uN“n YNiJqzTrUDIBŠPT“jzVqzTfuI3+qW‰•zUYgVBUI“3€g“7uz‡Š3Yh“vDTB‡gv“uI‡Š‡iV47Pr3DiB•‰4=B‹4Li‹ 4+iWHSBOHJq‚“FiwuTVwŠ”uUPnqI4SiV4O‰•vBrraDv‰hDT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT7wVUŠ‡i‚0DIzPv‚hYU“‡iYPvP‹BUgv“uI‡Š‡iV47Pr3DiB•ghqjgIrUDIBŠPT“jzVqŽDHLiI6”iLCuWLvDI‰aqdqIiV4O‰•vBrrCDIBŠPT“jzVqzTrnuY3bYr†BV•O‰vYUIrB2iY“†w7gYwBCDIBŠPT“jzVqzTVW“ŠiT“†iw7uŽ‚P•uJvBILjIWv3V‹7FP‹Bn YNiJqzTrUDIBŠPT“jzVqzTrnVY3DŽBLi“‚Vr6uN“ŠbI“ JLPVrfuJv6gV‰uIW4‡ŽdcNzJ“ŠPT“jzVqzTrUDIBŠPT“jIUŠ‡ŽI•uWv‚ v7dzd“Dr•PrqYBTB7zVqzTrUDIBŠPJP‰iJqzTrUDIBŠPT“jIUP‡Dru‡fv‚“‹Žq†V‰huYqTi‹7•qJ•3YhYnV“3Ui‚4jPjŠgVmDU“NiWBLYU7OŽvP•VdYqr†IV•ŽzJ‰=u‚qWB•uNB+ŽT€VdTgr€SYV•ŽzJ‰=u‡fvŽr7†BdŠŽYv6uhBi‚4jP73‰vP=udgVwYV•ŽzJ‰=uIqVgW‹SYWL+†qaVd0 r‚Sq3Pi†36DU“NDT“jzVqzTrUDIBŠPT“jzVq+Ž“PvVYq+ v7†IV•ŽzJ‰Lu‡bŽVŽS‰W“O‰vYad‹B‚iVfSd‡r‡Ž“PnDU“NiWŽSdU“OŽU3hVYq+ v7duNB+ŽU3JuWv‡qr‚SwŠPŽU‰€VVv0i‹7•qJ•‡‰TPFuhB‚qWBLIV•ŽzJ‰FV“q0ir‚hIW4gzJ‰‚dNq”PT“jzVqzTrUDIŽ0q‡Y4dT‹v 2L6BVwPdY”zJ0v “JBY7jidY3B‚Tv r zJ“ŠPT“jzVqzTrUVWT•Y7†‰W73zTr”D‚qŽ‰fDUŠPi“uV“3BPv“udVq+‰N‰6PYz+T7wijŠgYhŠP†q”PT“jzVqzTrUDIBŠPT“jzWvOŽT76VYqbiT“jPJL3Vr6u“B2gB•zVLPVrfuJ€+T7fVW3ODrP6Dv3hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIq6iI“jPJ33YhYWVY3+Y“ugJH+‰TuP‹3 T“jIUP‡Dru‡fv‚LdijqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUP‹q€VfhuJqOiYuhDIYVBr‚SYUq‚‰J4JuW“Ui‡YP+TŽv rqNB“7dV‡PC+NuNBN“BB†Š“PhY4ŽW6vu‚q“BVHji‡ NVr+d‰nVY3DŽB7ghqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jz‡“jgIrUDIBŠPT“jzVqzTrUDImDT“jzVqzTrUDIBŠPT“jzVq3Yv“UDTqVqBfI‡YCzvP‹qVqrq•PwB3YN‰6D‡‹ ‹Lu TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jIW3‚Dr•uYq+ŽV‰wYU7†YSV“36Prq•PwB3YN‰6D‡‹PvŠdzWvPYN3FV“‰hDT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIB2ifdW4“qJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVq+‰TuP‹3+ r“aY‡ŠgV‹•OD‚qTiYVŽV+ŽU3udYi“3dzd“Dr•PrqYBTB7zVqzTrUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzTf•zJq”PT“jzVqzTrUDIBDB†qJqzITrnP‹q€ B•Ž2L‚YJ4uuYqDi“7uIU7CzJ6NzJ“ŠPT“jzVqzTrUD‚3+i‰fYU“OgI‹•DIPTP‹HNiJqzTrUDIBŠPT“jbwuvu‡P4BdzJq‡Y4+vcvd“ŠBI47 dP IŽvB‹6vzJ“ŠPT“jzVqzTrUVWT•Y7†‰W73zTr”D‚qŽ‰fDUŠPi“uV“3BPv“udVq+‰N‰6PYz+T7wijŠgYhŠP†q”PT“jzVqzTrUDIBŠPT“jzVLOŽ‚74V“qbŽrruDU“‰jŠUYh‹BTB7zVqzTrUDIBŠPT“jzVqzh3JBVfJ dITBUuJD†rjBd‰CBdIv IIv DLzBI47zdYŽg†‹vu‚q“BVHji‚B7zVqzTrUDIBŠPT“jzVq‰v7JuJvVgr‚SPJqCzvP‹qVq‹“w‰U7zv€P‹3DYŠIBL‚iIPhPrqY YNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPJr†VVqC‰J4vVjVBL‰‡YCzv€P‹3DI4jzW+ŽU3udYi“3dgNŠ“qJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIqbqWaIUŠOi“P6dNq”PT“jzVqzTrUDIBŠPT“jzVqzTrUP“r”PT“jzVqzTrUDIBŠPT“jzVqzTrUuYqPPTLjIUPPi†Š6VdBDzWBaD†Š“qJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBDŽuz‚‡i‚“UIrB2u“3I TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTLu‡B+ir“†dWHzJqnu‡+ Y7†d‡Š‰V‹7•DIq‚“jIUPPiVHP†q”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrnuWT•gv7dzd“zvJVVv”qrŠLB†Pg‰vPPu“qNiTLI TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT7fIU‰‡zT‹•DIBD ‰wYU‰kqJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jz‡rOi‚•6P‹BUgJ‰wŽ†q†V‰huYqTi‹€4ŽwŠkqJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzUŠggIr”uhBDg‰wi7kgUŠWuY3bPW†‰‡ŠPŽW3WVY3DŽB7PJLOid“nV“BNPT7fIU‰‡zJLP†q”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT7fIU‰‡‰IP•uJ4TP‹“‹Žq+‰h“7uV7hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUP“r”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTVW“ŠiT“dI‡ŠOV‹2uJ• YNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIB2gVBLYW33Ir•dNq”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrnu‡+ Y7†d‡Š‰V‹7•DIzPT7fIU‰‡‰IP•uJ7hDT“jzVqzTrUDIBŠPT“jzVqzTrUDImDT“jzVqzTrUDIBŠPT“jzVqzTrUDIqV JŽSY‡qjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUuYqPPTLjI‡ŠOV‹rUIrBŠgJ‰wgwŠ‡dcnVj‚i‰rB†Pg‰vPFIV•6dVr†q4‰VrfuJ“Ugv“uI‡Š‡g†qUD‚3ggfYW4ŽzTrnuY3DiV J•O‰J4SV“B‚P‹4jzVL“‰hrhDvBnPJYNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠgJfSDUrgYT0IY3+I“‹Žq+DrTuT‰hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jz‡“jgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUV“q0“7u TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPv“aDW4PYNBUdV7hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jz‡“jgIrUDIBŠPT“jzVqzTrUDIBŠPT“jz‡“jgIrUDIBŠPT“jzVqzTrUDImDT“jzVqzTrUDIBŠPT“jzVq+D‹76P‹3VV6 JL3Ž“uvVrBŠbI“jIUPPi†Š6VdBDzWBaDdqjgIrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVq‰J4LDIBUgJrud“‰3YhYau‚qY YNiJqzTrUDIBŠPT“jzVqzT•V“3DŽVBLBqPV‹7•VY36PWBwb†qCzv•V“3DŽVBLBwŠkqJHUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzT•V“3DŽVBLBq+D‹76P‹3VV= TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH3Y7“Ih“adJrBgVYLY†UiJqzTrUDIB”PvrfzW3‡iIPTDIBŠgJ‹SY‡YPŽ‡“nV“B2 aIW4gŽ“P•DIH3dV““iYYSqVI0iwY“PJq“+h3=dJv‹ IH†DV3vuIv7PVvY UY“b4vPVqUPYqLPNYdB“NiJqzTrUDIB”PhYqdcvuYB3udVBY‚SbVLgPV“aPJInbvLgjŠ‚D‹FdJ‚0q“7wY‡gYN3JuTqVI4L‰UYgD‹7JuYq‰qY‚Sb†‰ŽŽT76VWvVY7†BV7gIh“€uWvDVfSiLŽŽv7V“3‡q“ŽSY‡YDVr76uW•‰qVrfIU‰OzVHUDIBŠPT“jiJ viJ“†Bhq•uVrfI‡Š‡D‹TJdw‚•gVwbV•ŽiI•FV‚ TqVLY‡ŠŽŽU3JPvVPWYfdU3ŽŽ‚P•P‹q6gWwY†Pg‰vuVYq6 JB•bjBBg“‹SdT‰‡‚H‰iJqzTrUDIB”PJ‹SY‡YPŽ‡“nV“raiLCqWLvVVLCDIBŠPT“‹dI7d‰d“bI“B‹ 4CB‹LzTrUDI‰‰D‡PŽ+vIvVUY“B“7dqIB7zVqzT‹4zJY3DW6nYh3UdJrŽ IH†IwznYhP6dJYY Ir”PT“jzVqbPJ•Lg‚“ŽiV44ŽJ•6dr3” ‡IDT“jzVq‰‹‚zJY†gV•vYTL”dJvW SLLD7NiJqzTrUdV7YD‡PgiI0vdjkB“€n‡PPPYŠjgIrUDIBŠI•UiW•6dr3Lq†Š‹ 4CB‹LzTrUDI‰ŽTB“uI4=PVY 26nb“kiVBUdJ“LPJY†uNrkPVvdJr‡q†Y†BW4kPYY4dJvfg‚snb“‰iJqzTrUdW7D‡PŽB“zvVYq6BdPLB‡Y4zh3jgIrUDIBŠŽ‚•ŠiWv7V“Š6q‚“‹i†‰PCJHB76iVrUDT“jzVq‰r‚SzJY†uW•vgd“qVrbiNY7g7ŠiJqzTrUdW7‡D‡YPgV JVWvnzJ“ŠPT“jzd‰BPJ•”g‡YFi7gVwŠ6Dh‰CDIBŠPT“‹PhrjPVrd WY3Y†P7CJvLiT46Pv7NDT“jzVq‰ SzJY†zW•ku†‰”qVrd WY3Y†PUiJqzTrUdT‰‡D‡YDNzv rŽnBI47djYŽgI‹JuVr†zJ“ŠPT“jzd‰kzV•LgN‹hiV4ŽBJLvD†nqI“‹ wŠVILzTrUDI‰rIvUiW•BNP6g†r=i3PiWv”DVP6gI4‹iJHPUŠ LgI7Oi“+PWH”uV7iJO  JPTLzTrUDI‰rIvNiW•BNP6g†r=i3PiWv”DVP6gI4‹iJHPWvaDNPLgI7Oi“+PWH”uV76q†Šu  JPTLzTrUDI‰rI•UiWvUuI46 ‹‚hiVL4ŽJv6dj‰CDIBŠPT“‹‰†“bqJ•LiVHŽiqgWvn dBLi‹TDT“jzVq‰‹ISd‚ra •giUŠaBTvCDIBŠPT“‹‰dBbPJ•LgY7ziwP‰•hBNPaqdI”iNSBJ•Jud‰CDIBŠPT“‹‰d‰bqJ•6gI“WiV73d4v r‰ai‹LUDT“jzVq‰‹“NdUqaiV“gI4JDI‰”Pv7IiUŽNqWLv WHCDIBŠPT“‹D†qkzV•LgY7ziwP‰v6B“36gWHPDT“jzVq‰‹“NdvraiV“gI4JDI‰i‡qzgNYgzILzTrUDI‰‹vŠiWv7V“Š6q‚“‹iN4D•S P6iVrUDT“jzVq‰‹“•dIra vPŽJLJVdq6 v‚”iwYgVLv dq6q†rPDT“jzVq‰‹“•dYraiV€v‰wŠ4BV76 v‚”iwYgVLv dq6q†rPDT“jzVq‰‹“•d†qaiUŽNqW•vBDHnq‚7fiW•CzILzTrUDI‰I•ŠiW•U W•nq†‹NiwBPCJ4vV“YCDIBŠPT“‹D†7BIV•LgY7ziwP‰HSB‡Bi‡qzi“4iWv7V†BCDIBŠPT“‹DdBbPJ•6 HŽiV•Wvh I3Li‚“nPJzS‰UgYN3JVdhPhYPgY€JDhPBdqkBhINqVuvdw“DBdY•PTB7zVqzTrUDJ“2zVBLY‡Š‚V‹7vDIq+qWfS4PYh‰UBVH7IdYP VuJd2LYBY7vPV‰fD‡rgPD60g‚H†gNB“gdŠPVrCiDL†DwYvYh3UqY TqIHdCJH“uISqJHUDIBŠPT“jiJq‰Dr”uJT•ŽJB•z‚P“‰T•6uT3D fSB JV“BgB‚6nq‡Y” VfvVVIJBV•zhYOgdzvd2L€BVHwq‚B7zVqzTrUDJ“”q‚B7zVqzTNPrq+ Jr†dVqgi“PvVdBD fSBq3Ž“uvV“3giaIVH+‰N‰6PYqbq“7wY†ŠjgIrUDIB2BTB7zVqzTrUDIBŠPT7fIWH3V‹vTIvgv“6b†73‰vPhu‚BUiWr†B†q‚VrrUudVBY7uVW4Oi“rUDU‚TgJ‹SY‡YPŽ‡“nV“BnBTB7zVqzTrUDIBŠPJBLY‡Š‚V‹7vDI3DV‰†YdqjgIrUDIB2bIBUiJqzTrUdw“” IB7zVqzTrUDJ“‹i†IvD47 V76 v‚”iwYgYILzTrUDIBŠ I“rzUqPV‹7€u“BŠPT7fPN3‰J4vP‹qVi“7uDV Jdr hBVr“djITDhIvV‡‰B†rjDjIv IY“dvŽ•gWY“b†UiJqzTrUDIB”PvrfzW3‡iIPTDIBŠgJYI‰Vq3YhIV“q‚iB7‰HTuWP6 j‰JiWqSiW4aV‚‰LiT“WiWv”I‡IvdjbBd SqIB7zVqzTrUDJ“2zVBw‰U“PYhŠUDIBDB‹v7zUŠOi“6V‡VI“kPdqn+Jr‚iOL“zNY“YJ‰ndJrUg2L“uV3fgWLJVdBaqW‹TDT“jzVqzTr4DIY2qv“uDW3OITrUD‚3nI“wiwY‚‰vPaV“3PhINqYzv jWBd‰CBdYgŽ“‹v IBfBdY4‰VY“Ih“=PVI• Wq”PT“jzVqzJHUII32gBL‰U‰zTrnV‚3VY“uIUŠOŽ‡‰UuY vŽr7†P4‡gI‰LqdYfi“4gWHJBPa I“JiV7D•vB‡BLijqO NYwPJD†76g“7ugNPPŽJLvdwL ‡PJiUcvd7UDI4LgVHSiN‰OPW4BwPaPNaiL”W•vBYŠLi“€”iWqSiWHS ‡qaqW‹NgNY‰v”dPaiVHIqUPWv=DI3aqduhiVNuUŠ6Bv‰if”gNY‰•U W•6g‡u”iN‰OPW47d‹‰if”iV7iWv6VV7LiUŠNDT“jzVqzTr4DIY2Y7uI‡r‡id‰UVVT•qWwYW3OgI‰LgI7‹i“CJHJBY‰6idIvŽBaYWNBN“BBVrdjPŽIJviNrOBY““B‡YOIŽvuW‚TBIngjY”‰NPjgIrUDIBŠPTL7z‚r‚‰J3•u‡B‚‚“rY‡‰PŽ“PNP‹q6qW7‰wŠ6DW•” ‡u”iV“qW4€BN6q‚“ŽiwYŽgWLJB‚3LPJ‹0DT“jzVqzTr4DJ‚0DT“jzVqD‹f4VVv0 r“•zWv‚YhY=P‹q6qW7zU7‚ŽW4NV“BUgJY‹‰†BzvfvdYBNPT7fPN“ŽzTrnPY‰ T“jIWL‚V‹7€P‹q6qW=Žw“B‰‹rzJ“ŠPT“jz‡qjgIrUDIBŠPT“jzVq+Dr”uY3BqrŠL‰WLPij“FuIqV JjPJ“3YhYNPr3‰PJŽhPwŠ‡‰vYUD‚3U‹“jI‡YBITrnPI‰PT7fgN“zvnPr3+g‰wiwPOgI“dNq”PT“jzVqzTrUDI3+i‰fYU“OgIfuJ•Vi‹HNiJqzTrUP“r”DT“jzVqzh34DJq”PT“jzVqzJHUII vg†YV vV‚BDBY‚n‡YSqYfvV†r”BVwIjYOiYPjgIrUDIBŠPTL7z‚rg‰vPFV†“‹gNITBJvhdr‰6qVziWv”Y4TBW”qUagWqD4aiT4aidqIiWv”YLvDhBijqIiL+D4=BvŠLqdYfi“4gW4hVDH6qY7YDT“jzVqzTr4DIY2qv“uDW3OITrUD‚qDŽVBL‰‡Š3Yh“vDIq6qV‰wYW•gV‹“UB†vI‡YP VsJd2LfBdP7djY”IfvBNYTB†Š“Ž‡PgPdcNBN“BBY‚SY‡YŽŽ‚0vd‚JB†‹n ‡IJPYŽTB‹BjBVH4DhPŽYhŽvuVYŽBd‰CBdYgDTTvBNYIB†cSP‡ITDhIJDhunBd SqdYŽgI‹v IŽhBdY4‰d NITviN“2BdqvqjYPdfJVWIB“7†ChYŽgI‹vB‹6vBY‚nq‡PŽYhŽvVV“NB“7†ChY”I€v rqB†cJuTB7zVqzTrUDJ“2zVBLY‡Š‚V‹7vDIq+qWfS4PYh‰UBVH7IdYP VuJd2LYBY7vPV‰fD‡rgPD60g‚H†gNB“gdŠPVrCiDL†DwYvYh3UqY TqIHdCJH“uISqJHUDIBŠPT“jiJq‰Dr”uJT•ŽJB•z‚P“‰T•6uT3D fSB JV“BgB‚6nq‡Y” VfvVVIJBV•zhYOgdzvd2L€BVHwq‚B7zVqzTrUDJ“”q‚B7zVqzTNPrq+ Jr†dVqgi“PvVdBD fSBq‡ŽJ‰uTqVYVf4DUŠgŽWmDTBDgJ‰uDW3‚‰J4JuW€Iv‹z†ŠjgIrUDIB2BTB7zVqzTrUDIBŠPT7fdW7‡iYP6uW4b YLYVqzITrnP‹q€ B•Ž2L‡Ž‚••V“qVqYISijPgIJqdNq”PT“jzVqzTrUDI3+i‰fYU“OgIrnP‹q€ B•Ž2L‡ŽJ‰uTqYiTvIz†B‰J4vP‹3ggjPJL‡Ž‚••V“qVqYISijPgYUB0VrŽ0ILdqJq3YhIPv TLjIU7PŽT76V“ vYru 4†‚‚DvBNPJr†BdŠ‚iIPhDTBD“‚hDW4gYhYIuY3irqF‰W‰Ž‚“d‹BŠgv7fYU“PVru‡fT ‹HNiJqzTrUP“r”DT“jzVqzh34DJq”PT“jzVqzJHUII vg†YV vV‚BDBV“idYSqYfvV†r”BVwIjYOiYPjgIrUDIBŠPTL7z‚rg‰vPFV†“‹gNITBJvhdr‰6qVziWv”Y4=BvŠ”qUagWqD4aiT4aidqIiWv”YLvDhBijqIiL+D4TBWLqdYfi“4gW4hVDH6qY7YDT“jzVqzTr4DIY2qv“uDW3OITrUD‚qDŽVBL‰‡Š3Yh“vDIq6qV‰wYW•gV‹“UB†vI‡YP VsJd2LfBdP7djY”IfvBNYTB†Š“Ž‡PgPdcNBN“BBY‚SY‡YŽŽ‚0vd‚JB†‹n ‡IJPYŽTB‹BjBVH4DhPŽYhŽvuVYŽBd‰CBdYgDTTvBNYIB†cSP‡ITDhIJDhunBd SqdYŽgI‹v IŽhBdY4‰d NITviN“2BdqvqjYPdfJVWIB“7†ChYŽgI‹vB‹6vBY‚nq‡PŽYhŽvVV“NB“7†ChY”I€v rqB†cJuTB7zVqzTrUDJ“2zVBLY‡Š‚V‹7vDIq+qWfS4PYh‰UBVH7IdYP VuJd2LYBY7vPV‰fD‡rgPD60g‚H†gNB“gdŠPVrCiDL†DwYvYh3UqY TqIHdCJH“uISqJHUDIBŠPT“jiJq‰Dr”uJT•ŽJB•z‚P“‰T•6uT3D fSB JV“BgB‚6nq‡Y” VfvVVIJBV•zhYOgdzvd2L€BVHwq‚B7zVqzTrUDJ“”q‚B7zVqzTNPrq+ Jr†dVqgi“PvVdBD fSBq‡ŽJ‰uTqVYVf4gi“r”D‚qDŽVBL‰‡Š3Yh“vIr‰qTvjgTLzTrUDI3hDT“jzVqzTrUDIBŠgJŽSdU“gYvPvYd6B“7dzd“zvfuIq6‚4IB†7PŽT76V“ vYru 4CzJ6NzJ“ŠPT“jzVqzTrUuJvVŽ‰uDUYzvfuIq6‚4IB†7‚ŽW4NV“B€ aI‡PYNq”D‚3bgWBLYW4Oi‹•PVvVu‚vŽwŠŽY‹YNd‹B2 aI‡PYNq”D‚3bgWBLYW4Oi‹•PVvVu‚vVŽwPBgVLhdY‰Š T“wiwY‚Dr7€u‚BUgJŽSdU“gYvPvYd6B“7V N3uIh3•DvBNPT7wI‡r‡iIuuY •qILI TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIY2qY“†ŽV4dvq‰gJYdB‚nudqnPYqC IH†€nYhY6IVHUDIBŠPT“jiJq‰‰v6uhBPhYŽqIsv ‚ŽBVL‡Iv IIvd“TB“7“ŽjzTzTfvV‡PjBdYvŽjIv IIvd“CB‚JBdYgzvfvuUrVB““kihYSqYfvV†r”BVwIjYOiYPjgIrUDIBŠPTL7z‚r‡‰TP•VY PT“jIWL‚V‹7€P‹q6qW7zUŠOi“6V‡VI“kudqnPYqC IH7CJmnPVH7+JrBPJY“BN“uY3TqVvuq‹snb7kYT•6PYŽ•gWYdBwYvu†P4+JYagNYkzVqvuIL7qV‚4q2L†iW‚nPIBvPYqdg‚H“BJ6nuV‰a+JYjqVY7q†PvPd“SqYŽTPTH3PNznPVr€dS60g‚H3dVq“PdqSPVruqwYLVw‰kiYPJ+vŽTPTH“zNY“YvŠS+J‚4q2L†D†BkiYPJ+JrBgVY3YW“kuVYazVHUDIBŠPT“jiJq‰D‹76P‹3VV7zW“OŽ‡“hV“qqI“kuI“ndvqCiOL7CJ4kYJai“•PrquqUPW4d‹3”q‹LuiV“qW4€BN6q‚“ŽiwYŽgWLJB‚3LPJ‹0DT“jzVqzTr4DIY2ŽrfDUP‚ŽTvUI“3€g“7uz‡Š3Yh“vDIHLYVv“g†PS+JrCiDL†DwYvYh3UqY TqIHdCJH“uISqJHUDIBŠPT“jiNrŽqJHUDIBŠPJBfYW“O‰J4=DIqgŽVLd‡Š3Yh“vDI3bŽJruzW4D‰h‚huW“Ugv7fYU“PVru‡fTbIv=z†qCIVHUDIBŠPJYNiJqzTrUDIBŠPT“jIU7PŽT76V“ vYru 4‰jŠUD‚3DiJrud†‰zi‚•=uJvVi6dUŠ“iYY”Dv‰hDT“jzVqzTrUDIB2Y7uI‡r‡id‰UD‚3DiJrud†‰zi‚0huY32i‹LwiwY‚Dr7€u‚BUgJŽSdU“gYvPvYd6B“7V NquIh3•DvBNPTv=z†qŽ‰J4vP‹3ggjPJL‡Ž‚••V“qVqYISijPgYUBNVrŽ0ILdqJq3YhIPv TLjIU7PŽT76V“ vYru 4†‚P‚DvBNPT7wI‡r‡iIuuY •qILI TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIY2qY“†ŽV4dvq‰gJYdB‚nudqnPYqC IH†€nYhY6IVHUDIBŠPT“jiJq‰‰v6uhBPhYŽqIsv ‚ŽBVL‡Iv IIvd“TB“7“ŽjzTzTfvV‡PjBdYvŽjIv IIvd“ŽB‚JBdYgzvfJuI SB““kihYSqYfvV†r”BVwIjYOiYPjgIrUDIBŠPTL7z‚r‡‰TP•VY PT“jIWL‚V‹7€P‹q6qW7zUŠOi“6V‡VI“kudqnPYqC IH7CJmnPVH7+JrBPJY“BN“uY3TqVvuq‹snb7kYT•6PYŽ•gWYdBwYvu†P4+JYagNYkzVqvuIL7qV‚4q2L†iW‚nPIBvPYqdg‚H“BJ6nuV‰a+JYjqVY7q†PvPd“SqYŽTPTH3PNznPVr€dS60g‚H3dVq“PdqSPVruqwYLVw‰kiYPJ+vŽTPTH“zNY“YvŠS+J‚4q2L†D†BkiYPJ+JrBgVY3YW“kuVYazVHUDIBŠPT“jiJq‰D‹76P‹3VV7zW“OŽ‡“hV“qqI“kuI“ndvqCiOL7CJ4kYJai“•PrquqUPW4d‹3”q‹LuiV“qW4€BN6q‚“ŽiwYŽgWLJB‚3LPJ‹0DT“jzVqzTr4DIY2ŽrfDUP‚ŽTvUI“3€g“7uz‡Š3Yh“vDIHLYVv“g†PS+JrCiDL†DwYvYh3UqY TqIHdCJH“uISqJHUDIBŠPT“jiNrŽqJHUDIBŠPJBfYW“O‰J4=DIqgŽVLd‡Š3Yh“vDI3bŽJruzW4VV‹r”D‚qDŽVBL‰‡Š3Yh“vIr‰qTvjgTLzTrUDI3hDT“jzVqzTrUDIBŠgJŽSdU“gYvPvYd6B“7dzd“zvfuIq6‚4IB†7PŽT76V“ vYru 4CzJ6NzJ“ŠPT“jzVqzTrUuJvVŽ‰uDUYzvfuIq6‚4IB†7‚ŽW4NV“B€ aI‡PYNq”D‚3bgWBLYW4Oi‹•PVvVu‚vŽwPBgVLhDIq6qV‰fVW3OzJqnuhbY7†YUYYŽWJV“Phr3dŽw“B‰‹rd‹q6qV‰fVW3OzJqnuhbY7†YUYYŽWJV“Phqv3dbw“CINqUdIBNPT7wI‡r‡iIuuY •qILI TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH†+JqkYTP7PVrUg2L†gJ3kgDLn+vq Y3YJmnuVBSdS60g‚H†IwrvuVB7PYq‡ IH†IwfngDLn+vq Y3YJmnuVBSdvqng‹H3DW7“uVB7PVrVgIr”PT“jzVqzJHUB†Š3DjY†Žvd“TBI47d‡Pdh‚v w“+BdPLB‡Y4zhmNBN“BBVr3zhYBWŽJDJr2B‚JYjYPYJvBWTJB†rjbjPC+hŽvdjf”BdYdiJ‹SY‡YgVr76uW•IiV4SiWvhBY3Jq‚“Fi€Tdv6u‚‰nq‚L‹i33VLvB“ŠaiT“rŽ‚vvYT•h+JrP OL“ wYvuVqJzVHUDIBŠPT“jiJq‰D‹€uJvq‹“jzVL‚‰vuTP‹B2W‰fDUŠOiVBUB†Š3DjY†ŽvVVrBV‹JBIB7zVqzTrUDJ“2zVBLY‡Š‚V‹7vDIq+qWfS4PYh‰UBVH7IdYP VuJd2LYBY7vPV‰fD‡rgPD60g‚H†gNB“gdŠPVrCiDL†DwYvYh3UqY TqIHdCJH“uISqJHUDIBŠPT“jiJq‰Dr”uJT•ŽJB•z‚P“‰T•6uT3D fSB JV“BgB‚6nq‡Y” VfvVVIJBV•zhYOgdzvd2L€BVHwq‚B7zVqzTrUDJ“”q‚B7zVqzTNPrq+ Jr†dVqgi“PvVdBD fSBq3YhYNPr3DYY7ugjŠCzvfV“3€Ž‹L‰iJqzTrUP†q”PT“jzVqzTrUDIq6iI“jPJL‚‰J3uN‚+Jrw‰U7‰Yv7IhVBY“LbV3‡iYr”DvB6BTB7zVqzTrUDIBŠPT“jzVqzv=u“q‰PvŠdzV•PYv7DIŽ4‚“juNY+Dr”uY3BqrŠ6bVLgVr7VdYqI7•zU73‰vPhu‚B2gdzW“‡id“€V‚qbgŽhIVqŽYTYUIYYDzvmi‹HY‰“PYVjrD‰“qIVqŽIhr6uN“2qŽSuJq+d‰nP‹qVB‰‹ TLzTrUDIBŠPT“jzVqzTrUV“3€ir“•PJLPŽ‡rnd‹BŠgJfhY‡Š‡Drud‹BŠgJBLY‡Š‚V‹7vVjBggB7ghqjgIrUDIBŠPT“jzVqzTrUDIq6iI“jPJL‡iYuPr3+qYmhVW3‡gII•Ir‰Š YNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPJ‰wgw“OŽJBUuWvVŽT“rY‡‰PŽ“PNP‹q6qW7gwŠOV‹hu‡Di‹LjDdqzT“hDIBDqW‰uIUq‚VrrDv‰hDT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqzTrUDIB2Y7uI‡r‡id‰UP‹3+ŽY7I TLzTrUDIBŠPT“jz‡“jgIrUDIBŠPT“jzVqgYN3FV“3hDT“jzVqzTrUDIBŠPT“jzVq+Dr”uY3BqrŠL‰WLPij“FuIqV JjPJ“3YhYNPr3‰PJ‰wY‡‰‚zTrnP‹qVB‰jD†ŠkqJHUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzT•V“3DŽVBLBq‚D‹€4V“‰hDT“jzVqDjŠCzJ“ŠPT“jz†PCgVHCDIBŠPT“jz†rdJr=PTH3ŽV‚nuY“S+vq‰ wY3uJ“†‰WLPgN‰6PYq+q““uDW6JDWv3BVHvP‡PŽB“zvVYq6B†kY‚B7zVqzTrUDJ“‹iw”iWH”Br3nqVHggr7wD‚4gV47u‡Y7kuI7=PV“‹qWY7+J6nYTPPYŽT WY3YJ3NiJqzTrUDIB”PvrfDW4‚DrP•uW“2gVfSb†BgYTPvzJ“ŠPT“jzVqCgIŠP‹q€VfhPw7‰YuTVdVqJ‰wiwPOgI‰i‹7aiNfJCJv7 wP6gjqSiwPd4vd7nq‡PfiVq3b‹LzTrUDIBŠ IL7b‹LzTrUDI32ŽY“LwŠPILPr vgW‰wiwPOgI”VY3bz“7wD‚4gV47u‡Y7jPNŠjgIrUDIB2BTB7zVqzTrUDIBŠPJr†VVHIv•V“3BPvŠdzVL‚‰J3uN‚+v“†IW“uŽT•”V“q0 TLjDUŠOYvYUu‚q6W‰jz†‰PIT“Dv3hDT“jzVqzTrUDIBŠPT“jzVq‡iYuPr3+qI“wVW3OD‹•6dNq”PT“jzVqzTrUDImDTB7zVqzTrUDIBŠPv7Lb†“CzvIrqbqW‰†BdŠCzv•V“3B ‹H•zVL3Yj‰NdN“ŠgJrdŽw‰CVwBCDIBŠPT“jzVqzTrUDIBŠPJr†VVqCD‹0uJ•2qWB•PJL‡iYPFYN“D ‹4I‰W‰ŽzTraVYqDgV‹SY‡YPid“€uJv‰i‚LIBwqCVwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzh3JBVH4Dv“†IW“dŽ“uvVVT•gBLYHJ rŠ6grui†ŽvVHS ‡qaqW‹NgNYŽ UŠvBV7” UrIiNPI4€uY3L hYYDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBDŽrwiw7ŽYjY€V‚q+PWŽSg4O‰Nq”DVv6qr7dzU7gVrrUVdf•q‹4L‰UYgD‹7JuYq‰qY“†IW“3Ž“uvVVT•gBLI†PŽgTPnVVL6d“dD†ŠkqJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVq‡ŽU36V“3ŠiTvdghqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzU“gVrf4uJTTPJ‰fD‡rgYwBCDIBŠPT“jzVqzTrUDIBŠPJP‰iJqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzU“gVrf4uJTTPv7L‰UB‡Ž“INzJ“ŠPT“jz‡“jPJHUDIBŠPT4•iNrjgIrUDIBŠPTL7‰wŠUDI‰6gjqgr7wD‚4gV47u‡Y7kgY7LqVrŽiOL7+J6nYTPPVrFirr”PT“jzVqzJHUII3+i‰fYU“OgI7u‡f• v7†‰UYjgIrUDIBŠPTL7z‚r‚‰J3•u‡B‚‚“rY‡‰PŽ“PNP‹q6qW7‰wŠ6DW•” ‡u”iV“qW4€BN6q‚“ŽiwYŽgWLJB‚3LPJ‹0DT“jzVqzTr4DJ‚0DT“jzVqD‹f4VVv0 r“•zWv‚YhY=P‹q6qW7zU3‚YJIYqDgYŽSY‡YPid“€uJv‰iTL‰iJqzTrUP†q”PT“jzVqzTrUDIq6iILj‰VL‡iYPFDIzPT7fIWH3V‹vTIvgv“6b†73‰vPhu‚BUgVr†ŽV4‰N3uhB‰PT4†‰V“CIJNzJ“ŠPT“jzVqzTrUDIBŠPT“fDW4‚DrP•uW“2iY“†w7gYwBCDIBŠPT“jzVqzTf•zJq”PT“jzVqzTrUDIBDqW‰wg4‡i‚vUIrB2u“3I TLzTrUDIBŠPT“jzWvOŽT“”D‚qnbY‚SbdrOi“r”D‚3+iB•ghqzvI7ŠBT“jIUŠŽIhŠP†q”PT“jzVqzTrUDIBŠPT“jzUŠggIr”uhBDVBwb†7Czv•V“3bu‚7wgN‰BY‡ŠhDIB‚gr7wDUgV47u‡Y7juNŠ‰jc•IrB2iY“†w7gITrLDW“2W‰fDUqOŽTv”D‚3+iŽ4 JL3IhŠ0VrBNPT€SdUPOIh‰aDvBŠbYŠIŽqBzVHUDIBŠPT“jzVqzTrUDIBŠPT“jzVq+gY“UuhBDVBwb†7Czv•V“3bu‚7wgN‰BY‡ŠhDIB‡q‚47uNŠ‰j‰UdIBŠiI77zU7‚YT7FP‹3iT7fDW4‡Ž†BnuYŽr3dqJqŽY‹YDIzbI“juhP+VNzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTrnu‡BDiv7uDU7†ŽdŠUIrB2W‰†DU7‚D‹“”D‚3+iŽ4 JL3IhŠ0VrBNPTvjqN‰BIJ6NzJ“ŠPT“jzVqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jz‡“jgIrUDIBŠPT“jzVq3Yv“UDTqbqW‰†BdŠCzvJP‹q€iBad†Šzg‚rP†q”PT“jzVqzTrUDIBŠPT“jzVL‚‰hrNDIzPv‚SbdrOi“r”D‚ •ŽrwYU“‡V6ndYBŠCT“jIUP‚‰J36uJ•bu‚vVŽqkgIrnu‡BDiv7uDU7†‚‚dNq”PT“jzVqzTrUDIBŠPT“jz†PŽ+J“vqUY“b†vIh‰vqVTNiIH7q†ŠkgDLn+vq Y3W4‰iJqzTrUDIBŠPT“jzVqzTrnP‹q€ B•Ž2LPYv7VjBbiv7†wBCzJBUuY 4i‹“fdW4‚zTrad“DŽuz†ŠkqJHUDIBŠPT“jzVqzTrUDIB2WwYW4‡zJq0Dv‰hDT“jzVqzTrUDIBŠPT“jzVq‡iYuPr3+qI“fIU“‚YvINzJ“ŠPT“jzVqzTrUP“r”PT“jzVqzTrUDI3+i‰fYU“OgILVYq0“7I TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH“zNY“YT3v+JINiVY†qVvvYN3=+v viYdB“vPVr€dvq‚gTH3PJmnPIBvIVHUDIBŠPT“jiJq‰D‹€uJvq‹“jzVL“zTuW•Dir€SYU“dJYjqVY“uV3fgW4aV‚‰LiT“‡DT“jzVqzTr4DIY2qv“uDW3OITrUD‚3nPJr†BdŠgYJ‰6uJ“‹iWqSiW•LivfTBY€SIdY4zT3jgIrUDIBŠPTL7z‚r‡‰TP•VY PT“jIUY‚Yhr7V“3PJr†BdŠgYJ‰6uJ“‹iNuvBJ•vB‡BaPNaimNqW•Liv‰L ‚LfiV4O‰wPJD†7qdY=iN4YLvdH0Bhq•ddYPYTfJDhuTBdY4‰dYI‹vu‚BzBY“jbjYŽiVuv “JdYr”PT“jzVqzJHUII32gBL‰U‰zTrnV‚3VY“uIUŠOŽ‡‰UuY vŽr7†P4‡gI‰”q‡INiUIJŽJ4DUL ‚LfiWqSiW4€BNPaiVHI NYwŠL r‰LijqO 4OCNPJD†76g“7ugNPPŽJLvdwL ‡PJiUcvDILzTrUDIBŠ I“rzU“gVrf4uJTTPv“Lb†PO‰vP€uW“‹iV“+‰47 2H”q‡YIiTvBdŠ‡i“P6Bhq•ddY3INmJdrB6BVH4u‡YPPduvuU“jBV7BjYŽ+JmviTqJzJ“ŠPT“jzVqCgIŠP‹q€VfhPw7‰YuTVdVqJ‰wiwPOgI‰i‹7aiNfJCJv7 wP6gjqSiwPd4vd7nq‡PfiVq3b‹LzTrUDIBŠ IL7b‹LzTrUDI32ŽY“LwŠPILPr vgW‰wiwPOgI=u‚q6gWr•PJL“zNqUD‚3n T“jIUY‚Yhr7V“3bIvdqJq+‰vf4uJvŽr†b†YzY‹rzJ“ŠPT“jz‡qjgIrUDIBŠPT“jzVq+‰hI4u“q+iB7zd“zvvPr 4gY7uDd3BYj30dJ“DqV‰†ŽV“gV‹‚NzJ“ŠPT“jzVqzTrUD‚qDŽVBL‰‡Š3Yh“vDIzPT7wI‡r‡iIuuY •qYŠ‹‰DHBYHnV‚3VY“uIUŠOŽ‡zNzJ“ŠPT“jzVqzTrUD‚ vŽVdzd“‰‹‹NzJ“ŠPT“jzVqzTrUV‚ 0PJYNiJqzTrUDIBŠPT“jzVqzTrnP‹q€ B•Ž2LPYv7VjBbiv7†wBCzT7uW•2ŽV‰jz‡ŠPV‹rUD‚3UPT7fgJ“CYwBCDIBŠPT“jzVqzTrUDIBŠPT7wBdrOINBSdNq”PT“jzVqzTrUDIBŠPT“jzUŠggIr”D‚ vŽV†DW4‡gU •D‚ vŽVdijqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzW“‡iYP€u†7hDT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzTfhuIq6 v7dPJLOi“PTVVvVYŠ7IUY‚YhŠdNq”PT“jzVqzTrUDI3+i‰fYU“OgIfuJ•Vi‹HNiJqzTrUP“r”DT“jzVqzh34DJq”PT“jzVqzJHUB‚‚JŽhYP+v vu‚qzBVLY‡YPgI JdjP”BdzJD‹B7zVqzTrUDJ“2zVBLY‡Š‚V‹7vDIqVBL‰‡Y‰UzhuYqDŽrjqJq3‰vPV‡€Žr3d‰HJBY‰6idINiwBPCJ4vV“3aiVHIiwSŽJ4niN7 dY=qUPW4=V“3nq“‚hgNYŽ W4UB2Haq‹LŠDT“jzVqzTr4DIY2ŽrfDUP‚ŽTvUI“3€g“7uz‡Š3Yh“vDIHLYVv“g†PS+JrCiDL†DwYvYh3UqY TqIHdCJH“uISqJHUDIBŠPT“jiNrŽqJHUDIBŠPJBfYW“O‰J4=DIqgŽVLd‡Š3Yh“vDI3bgWBLYW4Oi‹•PVvYiTL‰iJqzTrUP†q”PT“jzVqzTrUDIBDY7udVqzITrnP‹q€ B•Ž2LPYv7VjBbiv7†wBCzT€hu“B2Wru 4gV6NzJ“ŠPT“jzVqzTrUD‚qVB7zd“‰U‰‚dNq”PT“jzVqzTrUDIq6iI“jg7OŽvPvP‹BUgJBLYU7CYj‰NDv3hDT“jzVqzTrUDIBŠPT“jzVqgid“•V“qgWrjzVH+D‹76uN“2gB•zVL‚iIPhPrqY YNiJqzTrUDIBŠPT“jzVqzTrUDIBŠPJr†VVH‡D‹76V‡‹•qr“uIW73zJqadw“€uv7j NŠ“zJ3‡V‚Bh ‹7jb•ŽzTrnPv J‰†Y†BzvTVY3DgWrwYU7CIJNzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPJr†VVHPŽ‡‚4uW•‰iT7wŽV3‚‰T•”V“3B rŠ=Žw7CVwBCDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVq+‰TP•uJ“ŠbI“ TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzvTVY3DgWrwYU7†‚P‚d‹r”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT7wŽV3‚‰T•”V“3bu‚v6ŽwBjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“ŽjqjgIrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“wDU“gYTPSdNq”PT“jzVqzTrUDIBŠPT“jzVqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzVqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzVqzTrUDIBŠPT“fYUY‡Ž“uDTBDqr“uIW73‰vPFDv‰hDT“jzVqzTrUDIBŠPT“jzVqWIVHUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzTVW“Šiv7†Ž†q‚DL”D‚qVB7gNŠ“qJHUDIBŠPT“jzVqzTrUDIB2ŽrfDUP‚IvV“3‡Pvug7gV‹fuY •qILjPWH= WP6g‡YOiwBPCJ4vV“36 T4SiwfNgW4d‹3”q‹LuqUP+iJ•ŽiV4TuTq0q“7wYVH+UBad‹BŠgJBLYU7CIJ6NzJ“ŠPT“jzVqzTrUP“r”PT“jzVqzTrUDI3+i‰fYU“OgIrnVY3+IHNiJqzTrUP“r”DT“jzVqzh34DJq”PT“jzVqzJHUB‚‚JŽhYP+v vudP+BY‚SYjITiI‚v w“hBY‚nŽTB7zVqzTrUDJ“2zVBLY‡Š‚V‹7vDI3bŽBLiwYgqJHUDIBŠPT“jiJq‰Dr”uJT•ŽJB•z‚P“‰T•6uT3D fSB JV“BgB‚6nq‡Y” VfvVVIJBV•zhYOgdzvd2L€BVHwq‚B7zVqzTrUDJ“”q‚B7zVqzTNPrq+ Jr†dVqgi“PvVdBD fSBqPYhYnuJT• r7VW4‡i‚•u‡fTiTL‰iJqzTrUP†q”PT“jzVqzTrUDIBDY7udVqzITrnP‹q€ B•Ž2LPYv7VjBbiv7†wBCzJ‰aV“3DqJBLb†qD‹7Jdv+ŽVr†LŽi“76uJ•b fSBwY‡iYPhV“q“7duNŠkqJHUDIBŠPT“jzVqD‹76P‹3VV7zVL‡iYPFYN72P‹HNiJqzTrUP“r”DT“jzVqzh34DJq”PT“jzVqzJHUB‚‚JŽhYP+vqIYTP=BY7•qhYgŽ‚rjgIrUDIBŠPTL7z‚r‡iYuPr3+qI“fd‡Š‡iV4vVUq”PT“jzVqzJHUII3DiJBLbdB‡IPIqbiBfIUŠOŽ‡‰UB“7dV‡PC+NuviNrOBY““B‡YOIŽvuW‚TBIngjY”‰NPjgIrUDIBŠPTL7iNPjgIrUDIB2qJ‰†DUB3YTvUVW•VqY‚hIUŠOŽ‡‰Uu“qg‚LjgTLzTrUDI3hDT“jzVqzTrUDIBŠgJBLYU7‰jŠUD‚3DiJrud†‰ziIPnVV•WrwYUBOzJqaVdŽ‹“jb†7“V‹vJVd0gŽhd†POiYudjB‚ v“†BwqŽŽ‚PnV‚3+iŽhdV•CYwBCDIBŠPT“jzVqzT•V“3DŽVBLBq+D‹76uhrhqv3I TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH3D†rvYN3=qJHUDIBŠPT“jiJq‰D‹€uJvq‹“jIUBOŽ‚•€u‚u•gJruDVq‡Žv•uY vi‚“kISHaPYqTiIH3D†rvYN3=+vqOqUY“DWmnYT“hdJr‡ ‚H†uNBkPYYTPV“rgJYLD7kPVr€dJYO UY†bV4‰iJqzTrUDIB”PvrfDW4‚DrP•uW“2W‰fDUŠOiVBUB‚nYdYgqVIvd2L‚BV‹SVdYgVsv w“hBY7•qhIv IIvVUInBd‰LDjYuImvdwISB‚4“q‡YOB‚YjgIrUDIBŠPTL7z‚r‚‰J3•u‡B‚‚“rY‡‰PŽ“PNP‹q6qW7‰wŠ6DW•” ‡u”iV“qW4€BN6q‚“ŽiwYŽgWLJB‚3LPJ‹0DT“jzVqzTr4DJ‚0DT“jzVqD‹f4VVv0 r“•zWv‚YhY=P‹q6qW7zU7PŽT76V“ v‰r“uz‡Š‚V‹76DTBD JfSdW3O‰‡“nuY3 ‹B7zVqzTfNzJ“ŠPT“jzVqzTrUD‚3+i†bdŠgY‡“LuYq0irŠduNP‡Ž“=VY3+gT4•uNYg‰TuV“BUi“q†ŽVLuŽ3uh‹0i‚LdB†“PYhYnDT‰Š THIghYCIh‰ad•2qY7•uhqjgIrUDIBŠPT“jzVq+Dr”uY3BqrŠL‰WLPij“FuIqV JjPJ•‡Ž‚••V“qVqY‚S‰UqzhrNDIB‡qI7fDW4OYh‚V“u•iVr†4CYwBCDIBŠPT“jzVqzTrnuJvV‚“‹Žq+Dr”uY3BqrŠaz‡rO‰N3wuYq0i‹LjIU“gYhrJP‹qVP“7LiwBgINqUD‚q0q“‚S‰UBuŽ“uJ“nBTB7zVqzTrUDIBŠPT7fIWH3V‹vTI•+i†bdgYY7u‚qYiT7fDW4OYh‚V“u•iVr†4CYwBCDIBŠPT“jzVqzT•V“3DŽVBLBq+D‹76uN7hDT“jzVqDjŠCzJ“ŠPT“jz†PCgVHCDIBŠPT“jz†rdv •iY†7NiJqzTrUDIB”PvrfzW3‡iIPTDIBD JfSdW3O‰‡“nuY3PJŽhIU“3YhYaDIHdCJ•“YN‰Ldv •iY†€ngV•€qVv7gJY†D†BkuVBSdvq‡ TH“Y†‰“gIYnPVvfg‚H“uV3kPVSqY •irr”PT“jzVqzJHUII32gBL‰U‰zvfuY 4i‹“wiwY‚‰vPaV“3PhYOŽ“uvVV‚SB†Š“Ž‡PgYSsNBN“BBY‚SY‡YŽŽ‚0vBWYdBhq•ddPOqY‚JDhPnBI47B‚vIPN vBWYdBj‰jzTB7zVqzTrUDJ“2zVBw‰U“PYhŠUD‚3b YLYVq‡Žv•uY vi‚“kgV•€qVv7gJY“uV3kYNqvqYqJqIsnb7ku†P6dvqLPJ“Š‹v=PNq“‰B•dIsnb7kidqLdJ“v ‹H3V†fnYN3=+v viY†DV3vgDL4dJYkg2LkzVqUiJqzTrUDIB”PvrfzW3‡iIPTDIBDY“uIW4D‹0uJv6qY7•‰HBiNŠfiWv”YvSBY‰agVaiW7”PUPJD†7qdY=iN4YvLDh3Ud‚I4gVBfI7UDI“CDIBŠPT“jz†r‰I•V“3DŽVBLBq‡Žv•uY vi‚“kgDH6dvqOiUYdCJ•“YN‰Ldvq‡ IH3uNkYJBhdJY3g‹H7iW3viV“nPVr†g2LdBN‰vgdBS+v ng‹r”PT“jzVqzJHUII3DiJBLbdB‡IPIqbiBfIUŠOŽ‡‰UB“7dV‡PC+NuviNrOBY““B‡YOIŽvuW‚TBIngjY”‰NPjgIrUDIBŠPTL7iNPjgIrUDIB2qJ‰†DUB3YTvUVW•VqY‚hIUŠOŽ‡‰UuhbY7†YUYYiYP=u‡B+gTLjIUBOŽ‚•€u‚u•gJruD†BzvfuY 4irŠI‰d‰BzNqUD‚3b YLYd“Oi“Phu‚BNPT7fDW3‚‰vI•uW•V JjgTLzTrUDI3hDT“jzVqzTrUDIBŠgJBLYU‰OŽv6Vjg wYd“+d“FV‚qbgBLI†P+dYnVY3Di‹LjPr7OYvWITq6“3•uNŠŽi‚7€uWv‰iTvjqhYkYLd“‡qVuzdŠ+UBCDIBŠPT“jzVqzTrnVdf4gT“‹Žq+ŽT•=uJvViaDW4PŽ‡“•V‚BŠi‚47IU“gYhrJP‹qVP“7LiwBgYwBCDIBŠPT“jzVqzTrnP‹q6qr7dzd“‰J4vP‹3ggjPJL‚‰J4TV“BnBTB7zVqzTrUDIBŠPJr†VVqCzTP6u“32ŽYdPJL‚‰J4TV“BnPT77VVq+Dru“qY+TvjijqjgIrUDIBŠPT“jzVqzTrUDIBDgW†IVqŽg‡ŠUDU“Šq‹4uIUŠOYvYTu‚q6qruIVq+d‰nP‹q6qr7I TLzTrUDIBŠPT“jz‡“jgIrUDIBŠPT“jzVq3Yv“UDTBiuz‡Š“IJqnuh6B“7dgNŠ“qJHUDIBŠPT“jzVqzTrUDIBŠgv‚SŽVLzhz•DIB‡PT4dŽ†73VwŠ6DIB‡qI7fdUŠ“iYINzJ“ŠPT“jzVqzTrUP“r”PT“jzVqzTrUDIq6iI“jPJ3gYhrNP‹3niT7fDW3‚‰vYDv3hDT“jzVqzTrUDIBŠPT“jzVq+‰T•TV‚BŠqYŠdzV•zhŠTVVv6Ž‹4uDW3‚‰vYUDU‚TgJBL‰‡ŠgYwBCDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUD‚3+iB•zd“zvfuIq6‚4IBV3g‰T7Wuh€iwqJH+‰T•TV‚BnBTB7zVqzTrUDIBŠPJr†VVqCzv•V“3BPT77VVq+D‹76uhrhqv3IŽj“+d“FPY3bŽr7†ŽwPPiV4vdjBbiTH7zU7PŽT76V“ vY7†dUP‡iY‹JDI vqW‰jzWvOŽvPvV‚B‡ YNiJqzTrUDIBŠPT“jzVqzTfuI3+qW‰•zUYgVBUI“3€g“7uz‡Š3Yh“vDTq6qBwwPg‰vY”DV7hPT“7qJq+D‹76uN“n ‹HNiJqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzVL‡iYPFDIzPT7fIWH3V‹vTI•2ŽVw‹q3YN36DTBDY7†Ž†P‚‰vPWVWv6 v7dqJq+‰N3JVd vmSIUŠ‡gV6NzJ“ŠPT“jzVqzTrUD‚3DiJrud†‰zi‚76u“ •Ž“7YVUŠO‰vY”D‚3+i†bdŠgY‡“LuYq0i‹LI TLzTrUDIBŠPT“jzU“gVrf4uJTTPT7fDW4‡UBCDIBŠPT“fŽ‹LjgIrUDIBŠq‚L7iTLzTrUDIBŠ I“kP†‰7PY ngY3PWLkIh‰4qYqfqWY3YUBkgDH6dvqOiUYdB7“Ih‰vqVYq†Y“uV3kPdqn+Jr“i‚snb7kYJvUqVr“i‚H7CJ4kYJaqYŽTq†Y“ wYvPVr€dJINgSL3PV•kIh3LqVYTgVY†+J3“YT“hdJYh ‚HdB““Ih‰4qYqzPNY3YUBkg†YJqVI• UY“uV3kgd€PVruqwY3Vw‰viY3TdvŽTq†Y3qHUiJqzTrUDIB”PvrfzW3‡iIPTDIBDqr7uIWHOŽ“rUuhBDVr†BV•dJr‡ ‚H“wInPVr€dJr†qVY3W4“Yvr=IVHUDIBŠPT“jiJq‰D‹€uJvq‹“jIUqPV‹7€u“3BPv“uDU“PVLUB†Š3BdYSdvuvuD6vBV4YdIv IIvVDLjB†Š†qh NITviN“+BWrwB‡YO YcvudPB†Šd+hYgVsv rqNBdqv‰dPPPIvjgIrUDIBŠPTL7z‚r‡‰TP•VY PT7fIUŠOYvPJPr3‰PJr†BdŠgYJ‰6uJ“‹iUPiW4Jiv3aiVHIiN‰”Vv6BJLijqO NYwPJD†76g“7ugNPPŽJvSBUPa jYŽqUPUŠvBV7” UrIgNYŽiN7B‰‹rNB†‹n ‡IJPYŽTB‹BjzJ“ŠPT“jzVqCgIŠuTqY“†Žq+‰J4vP‹qVV‰L‰UBV‰J4TV“B2 aIW4gŽ“P•DIH7b†vg†P”qVrW Y7qWHvPVr€dJvuq‹HLuV4kuY3TqVvuq‹snb7kYT•6PYŽ•gWY†+NvPV•nqD60g‚HLBJvkg†YdvŽTqV7YqTv‹z†qBdv n UY“iWLv+h3=dvqb N7YqTvku†P4+JYagNYkzVqUiJqzTrUDIB”PvrfDW4‚DrP•uW“2gBaDW3“ITrnVY3DŽBLi“‚Vr6BI47B‡YPŽ“uvd“4B‚“4zhITDhIv ISB‚nYdYgqVIvV†“BY7j ‡P IŽvB‹6vBV‹nBdPŽ‰JmNBN“BY‚nq‡Pdh‚vuYB3BI47 d NI€vB†rrBI47zdINqdcv rqNBdqv‰d NIv+‰TuP‹3+ r“aY‡ŠgPYŽTq†Y†gJvvIh‰4qV“CPNY“zNY“YN3aqVrŠ 2L3Vw‰vgDH6dvqOiUYdBW7kPdqTdJrV TH3dUv+h3=dJrkgNY†DVniV3vqY JgO6nb“kuYPhdJINg‹H“uV3kiYYSqYq‰gWInb““Ih‰=gY€P‹3DVr†D‡r‚‰v3nq‚L‹i33V•Liv‰nqI“‹iVHŽPUPJD†76 ‹4fiN‰CVHJBY‰6idINiUrO Wv6u‚‰aqd‰‰DT“jzVqzTr4DIY2ŽrfDUP‚ŽTvUI“3€g“7uz‡Š3Yh“vDIHLYVv“g†PS+JrCiDL†DwYvYh3UqY TqIHdCJH“uISqJHUDIBŠPT“jiNrŽqJHUDIBŠPJBfYW“O‰J4=DIqgŽVLd‡Š3Yh“vDI3‚gruI‡Š3YhYaDTBDqr7uIWHOŽ“rhDIqVBL‰‡YzvNVY3+gudd“†ŽdŠhDIBDŽr†ŽV4OŽvuIr‰BqTv‹z†BzvuW•DiBaVW3O‰“u“qYbI•Iz†qB‰‹rNDvr”PT“jzVq“qJHUDIBŠPT“jzVq‰J4LDIBUg†Y‡Š3‰h“nVjVBrud‡Š‡VqnP‹q€ B•qJq+‰hr6P‹q€q“7jgNŠ“qJHUDIBŠPT“jzVqzTrUDIB2ŽrfDUP‚IvV“3‡Pvug7gV‹fuY •qILjPWv6 W•L hYuiLŽJLvDdB6 “7=i•CgUPJDWHad“Dqr7uIWHOŽ“rdNq”PT“jzVqzTrUDImDT“jzVqzTrUDIBŠgJ‰wiw‰gYh‚4P‹BŠbI“wiwY‚Dr7€u‚BUgJ‰wiw‰gYh‚4P‹BnBTB7zVqzTrUDIBŠPT7fIUŠOYvPJPr3‰b‹vjzVv+gIrnP‹q6qr7†bdr‚‰jŠNdNq”PT“jzVqzTrUDIBD aIW4‡i“7€u‚PD †YVqzITuW•DŽ““†qJH+‰J4vP‹qVV‰L‰UBV‰J4TV“BnBTB7zVqzTrUDIBŠPT7wiwY‚‰vP•Pv vPwiw‰gYwq0dIBŠiI77zVL3YhIV“3+Ž““†rY3Yhr6Ir‰rqTHNiJqzTrUDIBŠPT“jIU7‚‰TP•P‹PD †YVqzITuW•DŽ““†qJHOYJ4=uJT•Žr†ŽV4CDr•PrqY ‹L=‰†qB‰‹rdNq”PT“jzVqzTrUDIqDq‚“f TLzTrUDIBŠPT“jzVqzTrUD‚3+i‰fYU“OgI‹•DIqbgwP‚V‹•6uJ•iV‰†BV7uŽ‚P•uJvBIL JL‚‰J3uN“NPT7wŽV4‚‰J3JV‚u T“jIUqPV‹7€u“3B ‹HNiJqzTrUDIBŠPT“jzVqzTVW“Šiv7†Ž†q‚DL”D‚3+i‰fYU“OgVLDI3hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIŽ0q‡IJŽ‚€vu‡PBI47zdY4B‡‹v ISB“7“ŽjYPuI0v IHŠB†cni‹B7zVqzTrUDIBŠPT“jzVqzTrUDIB2ŽVŽS4gV‹r”D‚q6qV‰wYU“‚iIPhY‚q6qr7dghqjgIrUDIBŠPT“jzVqzTrUDImDT“jzVqzTrUDIBŠPT“jzVq+‰T04uJ•+iaI“Y3Yhr6DIzPJr†BdŠ‚iIPhDT 4 r‚hDUP‚‰J4TV“B€ŽBaYW4CITr4DI‰rqTv‹z†ŠkqJHUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzTfhuIq6 v7dg4OV‹fPYBUgJBLY‡Š‚V‹7vDvBŠiI77zVH+‰T04uJ•+iaI“Y3Yhr6drBDW‰w‰U“‚‰“u“qYb‹7fIUŠOYvPJPr3‰ ‹LI TLjgd3JDIBŠPT“jzVqzTVW“Ugv‚hYU“‡iYPvP‹PD †Y†‰+D‹0VY3+ŽrPwiw‰gYjz•D‚3D †YUP‚VrrP†q”q‚4•zVqzTrUDIBŠPT“jzVqDr7€uJ•gJ‰†Ž†qCzJzhVYq6Ž‰wiwY‰v€4uWvbŽr†b†YDru“qVqW‰uIdPzJBvD‚ 4i‰wgwPgzh‰ad‹BŠgJBw‰U“PYhrFIrB‡qVradUPOij“6uWvbq“7wYVH+D‹€uJvqB•‹LYŽj“kVjrVdvVd‚‰‰Y‚I‚u•Y“‰ni‹‰IŽrDvŽTi‚4jzVL3YhIV“3+Ž““†rY3Yhr6IrB‡qI7wiwY‚‰vP•Pv vPwiw‰gIJ6NzJ‚0q‚“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPJBLY‡Š‚V‹7vDIBDY7uI‡r‡idzNzJ“ŠPT“jz‡“jPJHUDIBŠPJBfDUŠ‚iIuV“B2W‰w‰‡Š3YTvUVW•VqY‚hIUŠOŽ‡‰UuT3+ aIWP‡gVqnu‡+ ILu TLzTrUDIBŠPT“jzW4PŽW3JDIBbBfDW4zgI‚NzJ“ŠPT“jzVqzTrUuT3+ aIWP‡gVqnu‡+ ILI TLzTrUDIBŠPT“jzW4PŽW3JDIB‡b‹hzU“gYj‰adNq”PT“jzVqWIVHCDIBŠPT“fzU“3Vr7€P‹qYPv7aYUYPŽvu‡fTPv“†IW“uŽT•”V“q0 TLjIW7OYvrzJ“ŠPT“jz‡qjgIrUDIBŠPT“jzVq+‰T•TV‚BŠbI“jP3g‰T“Udr3BPT7•BL‚‰J3uN‚+vmSIW4‚iV4=V“ŽTi‚“fdWHgYN3hDIB‡qI7wdU‰g‰wBCDIBŠPT“jzVqzT6PIqVg‚LjIW7OYvrhDIBDqW‰uIUq‚VrrhDIBDY7uI‡r‡idYWPvILI TLzTrUDIBŠPT“jzUŠggIr”D‚3+i‰fYU“Oij‚SVY3grŠIŽwqCVwBCDIBŠPT“jzVqzTrUDIBŠPJr†VVqC‰vPTuT3DBILjIUP‚VrNPr3‰ ‹Lu TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“fIWH‡id‚hDI vi‰•z‚P“‰T•6uT3D fSBH++J“Jq2L3gWqkuVPPVrP OL†I†ŠvYNY7PV“=grqgv“vYvB=dv •gSL†DW7“gDHndJ“€g‚P2DYYkPVr€dJYY IH3D†znuY“S+vq‰ wY†‰UznuVB7PVr+ 2L7g7wY‡‰gYvŠ6gJfhgNIJY•Liv‰Li““z vg‰wPJD‡3ad“DgW†I†ŠkqJHUDIBŠPT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPT“jzVq‰vPhuhVBTB7zVqzTrUDIBŠPT“jzVqzTrUDIB2ŽrfDUP‚IvV“3‡Pvug7gV‹fuY •qILwiw‰‡‰N3JV‚qYiT“= Jqg†qUD‚ •ŽV‰fz‡r‚zJLvD‚qbqr7jghqjgIrUDIBŠPT“jzVqzTrUDImDT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPJBLY‡Š‚V‹7vDIBDqW‰uIUq‚Vr‹NzJ“ŠPT“jz‡“jPJHUDIBŠPT4•iNrjgIrUDIBŠPTL7‰H= WP6g‡YOiNSBJ4DVP6q“7zi“PŽJ4hVDH6qY7uiV“P‰vaDV•LgUrWgNINuWLJB‚3LPJ‹0DT“jzVqzTr4DIY2Y7uI‡r‡id‰UuhBDVr†BV•dJ‚”i‹H†uW•6g‹•IdJr†g2L3gHNiJqzTrUDIB”PvrfIWH‡id‚huN“2‰WYwdW4‡Dru‡fTPhPgIv€JDSLJBVH4u‡YPPduvuU“jBV7BjYŽ+JmviTqJzJ“ŠPT“jzVqCgVHJzJ“ŠPT“jzUq‡iVSVY3Di‹“wV‡rOiI0uY •qI“b†7‚D‹7wu‡B+IVBLYW•IYTuVdUiT7fd‡Š‡iV4vVU“nDT“jzVqDwBCDIBŠPT“jzVqzT•V“3DŽVBLBq‡D‹76V‡‹•Y7uzUBPYT•6DTPhi‚4qNPŽVBhDIB‡q“3jBwP+ŽdŠhYN“‚uT4•uNBzJ‰‡d“‚P‹4jIU7‚D‹7uWv‡ ‹HNiJqzTrUP“r”DT“jzVqzh34DJq”PT“jzVqzJHUB†rjBdY”ŽUIJD†rjBd‰CBdYO‰JIviTBaBY‚nDhYPzhmJDduhBY‚nYhPCBO6vuYBfBVfSYjYPiI0vu‚qzBVLY‡Y”iI‹v w“+B‚“4zhITDhINBN“BdqC+hIJ‰NIv 2L6BVHL+h NI7jgIrUDIBŠPTL7z‚r‡‰TP•VY PT“jIW3‚Dr•Yvqr7dzU7‚D‹7uWv‡PhPŽ+vIvVUY“YTI4ddYuImv Iq=zJ“ŠPT“jzVqCgIŠuTqY“†Žq+‰TuP‹3+Yv“†jrgITFP‹3+ LuJ Jd2LYBY7vPYqrŽITv rfB†rwg‚B7zVqzTrUDJ“2zVBLY‡Š‚V‹7vDIqVBL‰‡YdJ‚”i‹H†uW•vYTv€PYq‰ DL7DJqvPIBvPYqJqVY7H“PVr€dJrV TH“BJ3ŠiJqzTrUDIB”PvrfIWH‡id‚huN“2‰WYwdW4‡Dru‡fTPhPgIv€JDSLJBVH4u‡YPPduvuU“jBV7BjYŽ+JmviTqJzJ“ŠPT“jzVqCgVHJzJ“ŠPT“jzUq‡iVSVY3Di‹“wV‡rOiI0uY •qI“bV•gVrku‡DiŽD‡Y‰VrfuJ“Ugv“uI‡Š‡ghY€u“qY T“jIW3‚Dr•YWv J‰†Y†ŠjgIrUDIB2BTB7zVqzTrUDIBŠPJr†VVqC‰v7€u‚3bi‹Lu TLzTrUDIBŠPT“jzVqzTrUdw‚”gNYŽJv7uVP”iv“Fi†3YH”V†7nqdPziWHDwPJD†76g‡PSiVvCCJLvdwnqVHOiV4SiWLJ OHnqdPziWHDv=BI‰a ‹4”DT“jzVqzTrUDIBŠPT“jzVq‡iYuPr3+qI“qwYgVBUPYq6 J‰uzWH‡‰‡“€V‚q+P“7†4OYvPvP‹BUi‚7wijŠgYhrOdIui‚4jI‡Š3‰J4FDvuBTB7zVqzTrUDIBŠPJP‰iJqzTrUDIBŠPT“wivCzTYnPI 4 T“‹Žq+Dr”uY3BqrŠaYUŠVŽW4nV‡VŽB•PNŠCVwBCDIBŠPT“jzVqzTrUDIBŠPJBLY‡Š‚V‹7vDIPTP‹HNiJqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzUŠggV3NuJvVi“mSŽV3‚‰T•”Vj JjPJ•ŽU3OV€vP‹LFb•ŽgY€P‹3DY‰L‰U‰gIh‰aIrBi‚47I‡Š3‰J4FdrzvPWŽhIU“Did“•YI3+ir€ŽV3‚‰T•”DTBDg‰fIU“ViIPhPrqY ‹47uJ“†ŽdznVrB”CvŠ7b†Š+†qUD‚3€qjqJq+‰hr€P‹qbiv7ud†B‰‚dI“Y‚P“IY“YuŽj“dI‚YVITLdijqjgIrUDIBŠPT“jzVqzTrUDIBDiwYU‰gYhIuN“ŠbI“q‰kqJHUDIBŠPT“jzVqzTrUDIB2iVfhDW4PYT•”DIBUgJ†‰‡ŠPŽW36uN“2gB•zVL3Vr6u“B6BTB7zVqzTrUDIBŠPT“jzVqzTrUDIBŠgv7†4OYvPvP‹3bu“3dzd“‰hY6Pw“2BVr†jr‡‰J3NVjgv“6bV4O‰vPTV“ vŽ‹LjIUŠ‚‰vPTYN72P‹4jzVL‚‰J3uN“nBTB7zVqzTrUDIBŠPT“jzVqDjŠCDIBŠPT“jzVqzTrUDIBŠPJBLY‡Š‚V‹7vDIBDiwYU‰gYhIuN7hDT“jzVqzTrUDIB2bIB7zVqzTrUDIBŠPv7†w7gVwBCDIBŠPT“jzVqzTrUDIBŠPJBLY‡Š‚V‹7vDIPTP‹HNiJqzTrUDIBŠPT“fŽ‹LzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH3PNY“uI•SqV“CPNY“zNY“YN3aqVrŠ 2L†I“vYTrJdJ“kq2L†I4vg†YJqYqng2L†bV6nYT7=PYq0gOL†BV4“uI7UdJr‡gVY7DJqvPIBvPD60gIH“ NkIh‰7PYŽT †Y†IqvuYPhdvqz OLLzV““uI44PVrP OL†I†ŠvuVH”PVYFg†Y3PUŠ“uI7JqD60gYr”PT“jzVqzJHUII32gBL‰U‰zTrnVY3DŽBnBV3OYvYUuhBDVr†BV•dJ‚”i‹H†uW•6g‹•IdJr†g2L3gHNiJqzTrUDIB”PvrfzW3‡iIPTDIBDg‰fIU“ViIPhPrqYPJŽhIU“3YhYaDIH7CJ4kYJai3bY‹H3YJmnuV3”qJHUDIBŠPT“jiJq‰D‹€uJvq‹“jIUB3YN‰6DIq+qWfS4PYh‰UB†Š7q‡YgzJTv V“€BdqkDhY+JJDSL7Bhq•ddPOqY‚JDhPnBI47B“7L‰UB‡Ž“3Jq‚“Fi7OI•h ‡q6gj‰OiV0JVHSB‚“CDIBŠPT“jz†r‰INVY3+gdzVL“‰hrhDI3bŽBLiwYgI‰6 ‹‚hiW4CgW4hVDH6qY7uiWv”I““IY†qCDIBŠPT“jz†r‰I•V“3DŽVBLBqPV‹7•VY3nPhPŽ+vIvVUY“BY“•‰‡YgzNfJD†rjBd‰CBdY3+hIJd‹q€BdY4‰dYYN vBNYrzJ“ŠPT“jzVqCgIŠP‹q€VfhPw7‰YuTVdVqJ‰wiwPOgI‰i‹7aiNfJCJv7 wP6gjqSiwPd4vd7nq‡PfiVq3b‹LzTrUDIBŠ IL7b‹LzTrUDI32VruVW3‚‰vYUVW•VqY‚hIUŠOŽ‡‰UVj‚i‰rB†Pg‰vPFIV•6dVr†q4‰VrfuJ“Ugv“uI‡Š‡ghY€u“qY T“jIW3‚Dr•YWv J‰†Y†BzvhuYqTirŠ†VW3OD‹•6d‹BŠgJYwŽ†BzYhI4u‚qN ‹B7zVqzTfNzJ“ŠPT“jzVqzTrUuYqPPTLjIUB3YN‰6Dv3hDT“jzVqzTrUDIBŠPT“jzVq3Yv“UDTBrgJYwŽ†BCITfNzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTVW“ŠiT“dI‡‰OYNqUIrBŠgJ‰wgwŠ‡dcnPrq6Vr†IW•gVrFDTBn ‹“f TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzT•V“3DŽVBLBq†ŽdcNzJ“ŠPT“jzVqzTrUDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzVqzTrUuYqPiJBfDW4gŽd“TVY3DgWrbV3O‰Nq”DU‚0br 4B2LuINŽ”DU‚Tgv“uI‡Š‡ghY€u“qYqI7FŽ“†ŽdznVrB”i‚47I‡Š3‰J4FdrzvPWŽhIU“Did“•YI3+ir€ŽV3‚‰T•”DTBDg‰fIU“ViIPhPrqY ‹47Pug‡Y‚DJ“+u“3=BV‰Cg‡mndjni‚4jzVL“‰hrhd‹BŠgJ†‰‡ŠPŽW36uN“NPvYD‚PDŽd“II“PDP“z4D‚YDY‚“Dv3hDT“jzVqzTrUDIBŠPT“jzVqzTrUDIBDiwYU‰gYhIuN“ŠbI“q‰kqJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqgid“•V“qgWrjzVH+‰hr€P‹qbiv7udVqPV‹vUD‚q6Žr7†ŽwŠ“qJHUDIBŠPT“jzVqzTrUDIBŠPT“jzVqzTrUDIBDiwYU‰gYhIuhrTP‹“‹ŽqOiYuhDI36 fYUq3D‹WVYqDgYmSYUBgYhr6uW•‰iT7wijŠgYhrOdIu T“jI‡Š3‰J4FDv‰hDT“jzVqzTrUDIBŠPT“jzVqzTrUDImDT“jzVqzTrUDIBŠPT“jzVqzTrUDI3+i‰fYU“OgIrnV“q0i†YUY‚D‹TNzJ“ŠPT“jzVqzTrUDIBŠPT“fŽ‹LzTrUDIBŠPT“jzVqzTrUV“q0“7u TLzTrUDIBŠPT“jzVqzTrUDIBŠPT“fDW4‚DrP•uW“2u“3I TLzTrUDIBŠPT“jzVqzTrUP“r”PT“jzVqzTrUDImDT“jzVqzTrUDIB2Y7uI‡r‡id‰UD‚3DiJrud†‰zij“aV“3DdJfSIW4‡Ž‹€vIY3DŽB7PJLPVrfuJ6vg†Y†Bzv€P‹3DYPL‰UB‚YvYdNq”PT“jzVqWIVHCP“r”Dv‚S3‡ŽTvUPYq6 J‰uzWH‡‰‡“€V‚q+P“7†4OYvPvP‹rBTB7zVqzTNuJv6Ž““uIW4zvWuWT•gv7Vbd‰OYN •DU“‡BTB7zVqzTNuJv6Ž““uIW4zvWV‚qVŽWr†dW4kIrJd2L3DWqkYN3aqVY3g‹H7q†PvYJL€+vqJqVY7H“+h3=dvqb hB6 fYUq3D‹WVYqDgdIv IIvudP“BIJd‹BUiJqzTrUuT3VgVwi7‰v€4uWvbŽr†b†Y‰‡“WVdf•qVŽhIU“‚YT0DTBDqVfSIW4uŽJ3Tu‚BNPT77IWLgVr7VdY ‹B7zVqzTfNzJ“ŠPT“jzVqzTrUD‚3DiJrud†‰zij“vu‡Dirmhgw‰OzT‹•DIBDqVfSIW4uŽJ3Tu‚‰hDT“jzVqzTrUDIBŠgJ‰wgwŠ‡dcnVjDi‰Li7gIT‹•DIBDgv7uVUŠPŽ“INzJ“ŠPT“jzVqzTrUuYqPPTLwVW3OD‹•6Dv3hDT“jzVqzTrUDIBŠPT“jzVq+Dr”uY3BqrŠ6bVLgVr7VdYPvŠdzUYgVBUPYq6 J‰uzWH‡‰‡“€V‚qiT7•uNŠkqJHUDIBŠPT“jzVqDjŠCDIBŠPT“fŽ‹LjgIrUDIBŠq‚L7iTLzTrUDIBŠ I“kgDH6dvqOiUY7DJqvPIBvPYqkiOL†iW‚nPVr€D3Tu‚HdBJsnPVqUIVHUDIBŠPT“jiJq‰D‹76P‹3VV7zU7‚D‹7uWv‡DT“jzVqzTr4dwq”PT“jzVq‡DrP7u‚q6g‚“wV‡rOiI0uY •qI“wB†Pg‰vPPu“qNiTLu TLzTrUDIBŠPT“jzU“gVrf4uJTTPT7fIWH3V‹vTI•qVfSIW4uŽJ3Tu‚‰hDT“jzVqDjŠCzJ“ŠPT“jz†PCgVHCDIBŠPT“jz†rdJ“kq2L†I4vgILUqVYjqVY“uV3fDW4‡Ž‡‚4uJvbi‹4†i6vu‚q“BVHji‡Iv IIvVIŽ0zJ“ŠPT“jzVqCgIŠuJvVŽ‰uDUY‰hrPIqVgJPfd‡Š‡iV4vVUq”PT“jzVqzJHJzJ“ŠPT“jzUq‚YT7huYqBPv7aYUYPŽvu‡fTPJBLYU7OŽvP•VdVD“7jPNŠ“qJHUDIBŠPT“jzVqD‹76P‹3VV7zVL‚‰J3uN‚+vmS‰‡Š‚D‹“”D‡B+iŽSbdr‡iI•6drq6gT7•ghqjgIrUDIB2bIBUiJqzTrUdw“” IB7zVqzTrUDJ“‹iJ7SPW4=BV”gVHŽiWqSiW•LivfV“3€ŽjYO‰JIviTBaBdY4‰dYPzh3jgIrUDIBŠPTL7z‚r‡iYuPr3+qI“wŽ†Š“‰vPnP‚3bŽBLiwYgqJHUDIBŠPT“jiNPjgIrUDIB2qJ‰†DUB3YTvUVW•VqY‚hIUŠOŽ‡‰UP‹qVB‰jPNŠ“qJHUDIBŠPT“jzVqD‹76P‹3VV7zVL‚‰J3uN‚+vmS‰‡Š‚D‹“”D‡BDiYfIV•CYwBCDIBŠPT“fŽ‹LjgIrUDIBŠq‚L7iTLzTrUDIBŠ I“kgIHT+vqziwY7DJqvPIBvPVY3g‹q6qY7wY‡zvu‚q“BVHji‡Iv IIvVIŽ0zJ“ŠPT“jzVqCgIŠuJvVŽ‰uDUY‰hrPIqVgJPfd‡Š‡iV4vVUq”PT“jzVqzJHJzJ“ŠPT“jzUq‚YT7huYqBPv7aYUYPŽvu‡fTPJr†BVLgVq”Dv3hDT“jzVqzTrUDIB2Y7uI‡r‡id‰UD‚3DiJrud†‰zij“€P‹3DILjPwŠOiY6PIB‡ ‹HNiJqzTrUP“r”DT“jzVqzh34DJq”PT“jzVqzJHUB‚‚JŽhYP+v JD†rjBd‰CBdIv IYPŽU3€uhBziwBgBJvUDJPaiVHIiqŽqTLzTrUDIBŠ I“rzU“gVrf4uJTTPJ†ij‰gYvf0uhBDVr†BV•jgIrUDIBŠPTL7b‹LzTrUDI32ŽY“LwŠPILPr vgW‰wiwPOgI=u‚qWŽBV3OYvY”Dv3hDT“jzVqzTrUDIB2Y7uI‡r‡id‰UD‚3DiJrud†‰zij“€P‹3DILjP7O‰TPFuN“‡ ‹HNiJqzTrUP“r”DT“jzVqzh34DJq”PT“jzVqzJHUB‚‚JŽhYP+v JD†rjBd‰CBdIv IYPŽ‡“vP‹qVqV‰jŽVLgV‹•=BVwPdY”zJ0vB†rrBY“jb‹B7zVqzTrUDJ“2zVBLY‡Š‚V‹7vDI 4 YwYWLWD‹0uJv6qY7NiJqzTrUDIB”q‚B7zVqzTNPrq+ Jr†dVqgi“PvVdBD fSBqPŽ‡“vP‹qVqV‰rIW4‡Ž‚v”Dv3hDT“jzVqzTrUDIB2Y7uI‡r‡id‰UD‚3DiJrud†‰zij“€P‹3DILjP7OŽ‡IV“ vŽ‹4†IW4‡Ž‚vaDv‰hDT“jzVqDjŠCzJ“ŠPT“jz†PCgVHCDIBŠPT“jz†rdJr=PTH3PUŠ“gILUqVYjqVY3V†fnYvrqVr‡gVYLzV““Ih‰SPYŽJgDLdBN‰UiJqzTrUDIB”Pv‚Sg4PŽU‰€VVv0ijYO‰JIviTBazJ“ŠPT“jzVqCgIŠuJvVŽ‰uDUY‰T7Ju‡NDT“jzVqzTr4dwq”PT“jzVq‡DrP7u‚q6g‚“wV‡rOiI0uY •qI“wdWHgYT•SVYq+ v7dPNŠ“qJHUDIBŠPT“jzVqD‹76P‹3VV7zVL‚‰J3uN‚+vmS‰‡Š‚D‹“”D‡biv7†dUPYT7hV“B‡ rŠIŽ•‚D‹€4V“B‡BTB7zVqzTf•zJq”PT“jzVqŽVH4zJ“ŠPT“jzVqCgI‰Lih‰‹iV0JVH7iT4aPNaiVvCCJ4nDJ6qjqŽiUITCNŠUDV•nqI6DT“jzVqzTr4DIqbiv7†dUgYv‰6 v€NiVqCuTLzTrUDIBŠ I“rzU“gVrf4uJTTPv“Lb†POzVHUDIBŠPT“jiNPjgIrUDIB2qJ‰†DUB3YTvUVW•VqY‚hIUŠOŽ‡‰UVd€ir‚Sq4gzJqP†q”PT“jzVqzTrUDI3+i‰fYU“OgIrnP‹q€ B•Ž2LuŽ‚uP‹3iT€SdWHgYT•SV“q‰i‚LIŽj“+Žv•PrqYi‚HNiJqzTrUP“r”DT“jzVqzh34DJq”PT“jzVqzJHUB†rkzdY+JJD†rjBd‰CBdYg†uvV‚BLB†Š•D‡ITDhIvVVINBI44djYŽqdjgIrUDIBŠPTL7zW7O‰J4=udgVwV4hV‡qLPTL‡DT“jzVqzTr4DIY2Y7uI‡r‡id‰UVVT•qWŠiJqzTrUDIB”q‚B7zVqzTNPrq+ Jr†dVqgi“PvVdBD fSBqPŽU3VdTgr“L4CzJNzJ“ŠPT“jzVqzTrUuJvVŽ‰uDUYzvfuIq6‚4IBVPPVrfuJ“Ui“‚SwŠPŽU‰€VVv0i‹7•gh“zIJzuJ•Vi‹7F TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH3gWqkuVPPV“CPNY“zNY“uY“S+vq‰ wY†IwfnPYY4zVHUDIBŠPT“jiJqgYhY€VVv0ir7kYN3aqVrŠ wq”PT“jzVqzJHUII3+i‰fYU“OgI7u‡f• TB7zVqzTrUDJ‚0DT“jzVqD‹f4VVv0 r“•zWv‚YhY=P‹q6qW7zW4OiIP7u‚qVgTLjijqjgIrUDIBŠPT“jzVq‡iYuPr3+qI“jI‡Š3‰J4FdrzvP““uI‡Š‡gVqaV“ vgr“L4gzJBIrziW‰fD‡rgIJŽNzJ“ŠPT“jz‡“jPJHUDIBŠPT4•iNrjgIrUDIBŠPTL7‰v”B‹‰Li‡PuiJ“”d•U W•LiI6”iLCuW4=BOH”Pv7SiW3CVILzTrUDIBŠ I“wVUPPŽvPFVYq+ v7“YN3aqVrŠ wq”PT“jzVqzJHUII3+i‰fYU“OgI7u‡f• TB7zVqzTrUDJ‚0DT“jzVqD‹f4VVv0 r“•zWv‚YhY=P‹q6qW7zWvOŽ‚04uhgVwYVHCVwBCDIBŠPT“jzVqzT•V“3DŽVBLBq+Dr”uY3BqrŠ6bV3‚Dr•DTB‚iVfSd‡r‡Ž‚P7u‚qYi‚LIŽj“+Žv•PrqYi‚HNiJqzTrUP“r”DT“jzVqzh34DJq”PT“jzVqzJHUB†rkzdY+JJD†rjBd‰CBdYg†uvV‚BLBV“dP‰J‹vBrBLzJ“ŠPT“jzVqCgILu‡bŽVŽSYW6vu‚q“BVHji‚B7zVqzTrUDJ“2zVBLY‡Š‚V‹7vDIq+qWfSqTLzTrUDIBŠ I4NiJqzTrUuT3VgVwi7‰v€4uWvbŽr†b†Y‰v7JVdBV“7†IVHCVwBCDIBŠPT“jzVqzT•V“3DŽVBLBq+Dr”uY3BqrŠ6bV3‚Dr•DTB‚iVfSd‡r‡Ž“PnDU“nbYŠdPjŠ‡i“P6DU7hDT“jzVqDjŠCzJ“ŠPT“jz†PCgVHCDIBŠPT“jz†rdJr=PTH3PUŠ“gILUqVYjqVY3V†fnYvrqYqz OLdBNŠ“udqLqYqC Ir”PT“jzVqzJHUuhbVfSwBPYT7hVWY†•vuIrqJHUDIBŠPT“jiJq‰D‹76P‹3VV7zW“OŽ‡“hzJ“ŠPT“jzVqCgd3CDIBŠPT“fz‡rPi†3V†“2iV‰†BV7‚‰J4JuW“2“‚hDUPO‰N3€VVv0i‹LjijqjgIrUDIBŠPT“jzVq‡iYuPr3+qI“jI‡Š3‰J4FdrzvP““uI‡Š‡gVqauhbVfSwBPYT7hV“B‡ rŠIŽ•‚D‹€4V“B‡BTB7zVqzTf•zJq”PT“jzVqŽVH4zJ“ŠPT“jzVqCgI‰Lih‰‹iV0JVH7iT4aPNaiVvCCJ4nDJ6g‡u”gNIJVwŠ6uOHLg‚“nDT“jzVqzTr4DIq0qWLuN‰PŽU3VdTgr“Lvu‚q“BVHji‚B7zVqzTrUDJ“2zVBLY‡Š‚V‹7vDIq+qWfSqTLzTrUDIBŠ I4NiJqzTrUuT3VgVwi7‰v€4uWvbŽr†b†Y‰N3JuWv‚‰wi73Ž‚P7u‚qYiTLu TLzTrUDIBŠPT“jzU“gVrf4uJTTPT7fIWH3V‹vTI•g‰fIU“CzJ‰hu‡fvi‚4†dUB3YT•SVYq+ v7duNŠzYjŠaP‹3+ŽY7duhqjgIrUDIB2bIBUiJqzTrUdw“” IB7zVqzTrUDJ“‹iVsT‰vaB“3”gVHŽiWqSiWvLDSH6gTLOgNYŽ W4SBaiT“fiNPI4€uY3Liv“PDT“jzVqzTr4DI32gŽhd‡BOŽT7nBVwPdY”zJ•jgIrUDIBŠPTL7z‚r‡iYuPr3+qI“wDUPOŽUqCDIBŠPT“jz†rŽqJHUDIBŠPJBfYW“O‰J4=DIqgŽVLd‡Š3Yh“vDI32gŽhd‡BOŽT7nDTB6BTB7zVqzTrUDIBŠPJBLY‡Š‚V‹7vDIBDŽrwiw7ŽYjYWVY3DŽB7PJ•‡‰TPFuhB‚qWBLIV•CYjc•D‡BDV‰†YV•kqJHUDIBŠPJP‰iTLzTrUDIŽ0 ILUiJqzTrUDIB”PhY4dT‹v 2L6B‚“4zhITDhIv “JBY7jidYOP†‚vBNYzB‚LC ‡PPzT€vd“TzJ“ŠPT“jzVqCgIFV“q0ir‚hIW4gdvq0iUY3z†ŠNiJqzTrUDIB”PvrfDW4‚DrP•uW“2gVfSb†BjgIrUDIBŠPTL7b‹LzTrUDI32ŽY“LwŠPILPr vgW‰wiwPOgIFV“q0ir‚hIW4gzJqP†q”PT“jzVqzTrUDI3+i‰fYU“OgIrnP‹q€ B•Ž2LuŽ‚uP‹3iT€hdW4O‰vP=P‹qVgT7•gh“zIJzuJ•Vi‹7F TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH7CJ4kYJaqV“CPNY“zNY“YJB4dvq0gOL7Y†P“Ih‰SPVY3g‹HdbV7“Pd“SqYŽ”iJY3zUNiJqzTrUDIB”PvrfDW4‚DrP•uW“2gBaDW3“ITfTdVYdBwYvYhBqYŽTg†Y7iWLvPVr€D76i“7‹iVHPUPJD†mvdVYdBwYvYhBqYŽTg†Y7iWLvPVr€D•6i“7‹iVHPUPJD†mTd†YdBwYvYvŠh+vŽTgDL7iWLvPVr€D76i“7‹iVHPUPJD†qUPY‰ŽgNYŽ W4=BvŠnqI“JiNcvd•LivfvBY€SIdY4zT3jgIrUDIBŠPTL7b‹LzTrUDI32ŽY“LwŠPILPr vgW‰wiwPOgI7u‡BVqY7fdVHCVwBCDIBŠPT“jzVqzTrnP‹qVB‰jzd“zvfuIq6‚4IBVPPVrfuJ“Ui““LbdrOiYFDU“nBTB7zVqzTrUDIBŠPT7fIW4“DrrUIrB2W‰fDWP‡iYPNu‚qg“7dPJ•uYUBad‹B‡ T7•qJq+Dr6PI3‰ ‹HNiJqzTrUDIBŠPT“jI‡ŠgVmDIzPJradUPOij“nV“qbq“7wYVH+Dr6PI3‰ T“fIU“‚YvYdNq”PT“jzVqzTrUDI3+i‰fYU“OgIOzJ“ŠPT“jzVqzTrUDIBŠPT“jPj‰BIJBUIrzTPT7fIW4“DrOdIu TB7zVqzTrUDIBŠPT“jzVqzJzvdYB‡PvŠIBq+Dr6PI3Du‚vVŽwBjgIrUDIBŠPT“jzVqzTrUDIB‚B‹v7uJqzYj‰UD‚3DiYfIWBijŠhzJ“ŠPT“jzVqzTrUDIBŠPT“jPjYBgVBUIrzTPT7fIW4“DrOdd‹ TB7zVqzTrUDIBŠPv3I TLzTrUDImDTB7zVqzTrJDJ“”DT“jzVqzTr4DIH“zNY“YT3v+v •gSL†DW7“gILUqVYjqYr”PT“jzVqzJHUII32gBL‰U‰‰J4vP‹BŠgJaYU‰PiYP•DIB‹iNuvBJv= Y3aPNaimNqW•Liv‰L ‚LfiV4OzILzTrUDIBŠ I“rzUqPV‹7€u“B2 aIVq+‰vf4uJvŽr†b†YzT‰6 WHFiV“+‰•U W•6gjqJiWv”Yv6BJif”qUPW4=V“3nq“‚hgNYŽ WvSBUPa jYDT“jzVqzTr4DIY2Y7uI‡r‡id‰UVVT•qWŠiJqzTrUDIB”PvrfIWH‡id‚huN“2‰WYwdW4‡Dru‡fTDT“jzVqzTr4dwq”PT“jzVq‡DrP7u‚q6g‚“wV‡rOiI0uY •qI“wdUB3YT•SDTBDqV‰†ŽV“gV‹‚•dYBNPT7wI‡r‡iIuuY •qYŠIz†Š“qJHUDIBŠPT“jzVqzv7u‡BVqY7fdVqzITrnP‹q€ B•Ž2LPid‚4uWvD‚LjghqjgIrUDIBŠPT“jzVq+DqUIrBŠgv“LbdrOiYFYN“‚B‹vdP‰zNBUDTBDgVfhYUYgD‹•OD‡BUI€4Žw‰+‰T7JPr vgJŽ4 J•“‰‹YaVrBnq‚v= TLzTrUDIBŠPT“jzVL“IT‹•DIBDgVfhYUYgD‹•OD‡Bn‹€4ŽqCIr”D‚q+qW‰†BVL‡Ž†BaPY‰i“3dŽLPid‚4uWvD“q•PjYBIJ‰‚DvŽ0IHNiJqzTrUDIBŠPT“fDW4‚DrP•uW“ŠgJ‰wgwŠ‡dcnVjDi‰Li7gIhcnVd0 r‚S JH+DqhDIBDBI4jzVLOi“PTVVvVYŠI‰†BzvnPr3+g‰wiwPOg‡ŠNDv‰hDT“jzVqDjŠCzJ“ŠPT“jzUq‡iVSVY3Di‹“wV‡rOiI0uY •qI“bV3‚Dr•DTBDqY“†ŽV4CVwBCDIBŠPT“jzVqzTVW“€qJBLYW•uŽ‡r€P‹qbiTLjuNP+d‰nuWvqr7dB•zIT“”d“”CTLdD†P3IJBhDIBDŽrwiw7ŽYjYWuWT•gv7Vbd‰OYNqhDIBDqr“uIW73‰vPFDvB6BTB7zVqzTrUDIBŠPT“jzVqD‹76P‹3VV7zVLOYTuVd€iŽ4 N3uYwBCDIBŠPT“jzVqzTf•zJ“ŠPT“jzVqzTrUV“q0“7u TLzTrUDIBŠPT“jzVqzTrUuJvVŽ‰uDUYzJBadNq”PT“jzVqzTrUDImDT“jzVqDjŠCP“‹Hkz––