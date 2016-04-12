<script type="text/javascript">

    var language;
    var cookieMessage = document.cookie;
    var lang=returnCookieValue(cookieMessage,"lang");
    if(lang != ""){
        switch (lang){
            case 'zh_CN':
                language='zh-CN';
                break;
            case 'en':
                language='en-US';
                break;
            default :
                language = navigator.language;
                break;
        }
    }else{
        var currentLang = navigator.language;
        if(!currentLang){
            currentLang = navigator.browserLanguage;
        }
        language=currentLang
    }
    $(function(){
        if(language=='en-US'){
            $('.cnContent').hide();
            $('.enContent').show();
        }else{
            $('.enContent').hide();
            $('.cnContent').show();
        }

    })
    function returnCookieValue(cookieValue,cookieName) {
        var returnCookieValue = "";
        var cookieNameIndex = cookieValue.indexOf(cookieName+"=");
        if (cookieNameIndex!=-1) {
            var cookieValueBeginIndex = cookieNameIndex + cookieName.length + 1;
            var cookieValueEndIndex = cookieValue.indexOf(";",cookieValueBeginIndex);
            if (cookieValueEndIndex==-1) {
                cookieValueEndIndex = cookieValue.length;
            }
            returnCookieValue = cookieValue.substring(cookieValueBeginIndex,cookieValueEndIndex);
        }
        return returnCookieValue;
    }

</script>

<div class="alert alert-warning text-center no-margin hide" style="z-index: 99999 !important;">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    
    <a href="javascript:;" class="text-error" onclick="readInfos(this);"><i class="fa fa-bullhorn fa-lg"></i>：<span>1条新消息，点击查看</span></a>
    
</div>

    <ul class="recent-posts">
        
            <li>
                
                    <div class="info-head info-warning">
                        <span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span></span>
                    </div>
                    <div class="user-thumb-add">
                        <img width="60" height="45" alt="报警图片" src="/hawkeyes/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
                    </div>
                
                <div class="article-post-add">
                    
                    
                        <p><a href="/hawkeyes/equipment/show/6"><strong>CNZ207297</strong></a></p>
                    
                    
                    <span class="info-cotent" >
                        <span class="cnContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:39:51</span>
                        <span class="enContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:39:51</span>
                        
                        
                            <a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1806"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
                            <a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>
                                收起</span></a>
                        
                        
                    </span>
                    <span class="info-time">2015-10-24 04:39:51</span>
                </div>
            </li>
        
            <li>
                
                    <div class="info-head info-warning">
                        <span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span></span>
                    </div>
                    <div class="user-thumb-add">
                        <img width="60" height="45" alt="报警图片" src="/hawkeyes/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
                    </div>
                
                <div class="article-post-add">
                    
                    
                        <p><a href="/hawkeyes/equipment/show/6"><strong>CNZ207297</strong></a></p>
                    
                    
                    <span class="info-cotent" >
                        <span class="cnContent" style="display: none">设备CNZ207297于2015-10-24 04:39:41发生排气温度高预警报警,现场值：1℃</span>
                        <span class="enContent" style="display: none">设备CNZ207297于2015-10-24 04:39:41发生排气温度高预警报警,现场值：1℃</span>
                        
                        
                            <a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1806"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
                            <a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>
                                收起</span></a>
                        
                        
                    </span>
                    <span class="info-time">2015-10-24 04:39:41</span>
                </div>
            </li>
        
            <li>
                
                    <div class="info-head info-warning">
                        <span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span></span>
                    </div>
                    <div class="user-thumb-add">
                        <img width="60" height="45" alt="报警图片" src="/hawkeyes/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
                    </div>
                
                <div class="article-post-add">
                    
                    
                        <p><a href="/hawkeyes/equipment/show/6"><strong>CNZ207297</strong></a></p>
                    
                    
                    <span class="info-cotent" >
                        <span class="cnContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:32:20</span>
                        <span class="enContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:32:20</span>
                        
                        
                            <a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1805"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
                            <a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>
                                收起</span></a>
                        
                        
                    </span>
                    <span class="info-time">2015-10-24 04:32:20</span>
                </div>
            </li>
        
            <li>
                
                    <div class="info-head info-warning">
                        <span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span></span>
                    </div>
                    <div class="user-thumb-add">
                        <img width="60" height="45" alt="报警图片" src="/hawkeyes/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
                    </div>
                
                <div class="article-post-add">
                    
                    
                        <p><a href="/hawkeyes/equipment/show/6"><strong>CNZ207297</strong></a></p>
                    
                    
                    <span class="info-cotent" >
                        <span class="cnContent" style="display: none">设备CNZ207297于2015-10-24 04:32:10发生排气温度高预警报警,现场值：1℃</span>
                        <span class="enContent" style="display: none">设备CNZ207297于2015-10-24 04:32:10发生排气温度高预警报警,现场值：1℃</span>
                        
                        
                            <a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1805"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
                            <a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>
                                收起</span></a>
                        
                        
                    </span>
                    <span class="info-time">2015-10-24 04:32:10</span>
                </div>
            </li>
        
            <li>
                
                    <div class="info-head info-warning">
                        <span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span></span>
                    </div>
                    <div class="user-thumb-add">
                        <img width="60" height="45" alt="报警图片" src="/hawkeyes/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
                    </div>
                
                <div class="article-post-add">
                    
                    
                        <p><a href="/hawkeyes/equipment/show/6"><strong>CNZ207297</strong></a></p>
                    
                    
                    <span class="info-cotent" >
                        <span class="cnContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:28:40</span>
                        <span class="enContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:28:40</span>
                        
                        
                            <a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1804"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
                            <a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>
                                收起</span></a>
                        
                        
                    </span>
                    <span class="info-time">2015-10-24 04:28:40</span>
                </div>
            </li>
        
            <li>
                
                    <div class="info-head info-warning">
                        <span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span></span>
                    </div>
                    <div class="user-thumb-add">
                        <img width="60" height="45" alt="报警图片" src="/hawkeyes/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
                    </div>
                
                <div class="article-post-add">
                    
                    
                        <p><a href="/hawkeyes/equipment/show/6"><strong>CNZ207297</strong></a></p>
                    
                    
                    <span class="info-cotent" >
                        <span class="cnContent" style="display: none">设备CNZ207297于2015-10-24 04:28:30发生排气温度高预警报警,现场值：1℃</span>
                        <span class="enContent" style="display: none">设备CNZ207297于2015-10-24 04:28:30发生排气温度高预警报警,现场值：1℃</span>
                        
                        
                            <a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1804"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
                            <a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>
                                收起</span></a>
                        
                        
                    </span>
                    <span class="info-time">2015-10-24 04:28:30</span>
                </div>
            </li>
        
            <li>
                
                    <div class="info-head info-warning">
                        <span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span></span>
                    </div>
                    <div class="user-thumb-add">
                        <img width="60" height="45" alt="报警图片" src="/hawkeyes/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
                    </div>
                
                <div class="article-post-add">
                    
                    
                        <p><a href="/hawkeyes/equipment/show/6"><strong>CNZ207297</strong></a></p>
                    
                    
                    <span class="info-cotent" >
                        <span class="cnContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:26:49</span>
                        <span class="enContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:26:49</span>
                        
                        
                            <a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1803"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
                            <a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>
                                收起</span></a>
                        
                        
                    </span>
                    <span class="info-time">2015-10-24 04:26:49</span>
                </div>
            </li>
        
            <li>
                
                    <div class="info-head info-warning">
                        <span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span></span>
                    </div>
                    <div class="user-thumb-add">
                        <img width="60" height="45" alt="报警图片" src="/hawkeyes/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
                    </div>
                
                <div class="article-post-add">
                    
                    
                        <p><a href="/hawkeyes/equipment/show/6"><strong>CNZ207297</strong></a></p>
                    
                    
                    <span class="info-cotent" >
                        <span class="cnContent" style="display: none">设备CNZ207297于2015-10-24 04:26:39发生排气温度高预警报警,现场值：1℃</span>
                        <span class="enContent" style="display: none">设备CNZ207297于2015-10-24 04:26:39发生排气温度高预警报警,现场值：1℃</span>
                        
                        
                            <a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1803"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
                            <a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>
                                收起</span></a>
                        
                        
                    </span>
                    <span class="info-time">2015-10-24 04:26:39</span>
                </div>
            </li>
        
            <li>
                
                    <div class="info-head info-warning">
                        <span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span></span>
                    </div>
                    <div class="user-thumb-add">
                        <img width="60" height="45" alt="报警图片" src="/hawkeyes/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
                    </div>
                
                <div class="article-post-add">
                    
                    
                        <p><a href="/hawkeyes/equipment/show/6"><strong>CNZ207297</strong></a></p>
                    
                    
                    <span class="info-cotent" >
                        <span class="cnContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:23:09</span>
                        <span class="enContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:23:09</span>
                        
                        
                            <a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1802"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
                            <a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>
                                收起</span></a>
                        
                        
                    </span>
                    <span class="info-time">2015-10-24 04:23:09</span>
                </div>
            </li>
        
            <li>
                
                    <div class="info-head info-warning">
                        <span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span></span>
                    </div>
                    <div class="user-thumb-add">
                        <img width="60" height="45" alt="报警图片" src="/hawkeyes/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
                    </div>
                
                <div class="article-post-add">
                    
                    
                        <p><a href="/hawkeyes/equipment/show/6"><strong>CNZ207297</strong></a></p>
                    
                    
                    <span class="info-cotent" >
                        <span class="cnContent" style="display: none">设备CNZ207297于2015-10-24 04:22:59发生排气温度高预警报警,现场值：1℃</span>
                        <span class="enContent" style="display: none">设备CNZ207297于2015-10-24 04:22:59发生排气温度高预警报警,现场值：1℃</span>
                        
                        
                            <a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1802"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
                            <a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>
                                收起</span></a>
                        
                        
                    </span>
                    <span class="info-time">2015-10-24 04:22:59</span>
                </div>
            </li>
        
        
            <li class="viewall">
                <span class="badge badge-inverse" onclick="loadMoreInfos(this);">&nbsp;&nbsp;
                显示更早10条&nbsp;&nbsp;</span>
            </li>
        
    </ul>

<span class="hidden" id="total" value="500"></span>

