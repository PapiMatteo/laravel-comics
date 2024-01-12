<div class="footer-nav">
    <div class="container">
        <div class="footer-content">
            <div class="nav">
                <div class="left-nav">
                    <div class="home">
                        <h3 class="footer-title">DC COMICS</h3>
                        <ul class="footer-list">>
                            
                            @foreach ($footer_data['homeLinks'] as $data)
                                <li>
                                    <a href="">{{$data}}</a>
                                </li>
                            @endforeach  
                            
                        </ul>
                    </div>
                    <div class="shop">
                        <h3 class="footer-title">SHOP</h3>
                        <ul class="footer-list">>
                            
                            @foreach ($footer_data['shopLinks'] as $data)
                                <li>
                                    <a href="">{{ $data }}</a>
                                </li>
                            @endforeach        
                            
                        </ul>
                    </div>
                </div>
                <div class="right-nav">
                    <div class="about-us">
                        <h3 class="footer-title">DC</h3>
                        <ul class="footer-list">>
                            
                            @foreach ($footer_data['dcLinks'] as $data)
                                <li>
                                    <a href="">{{ $data}}</a>
                                </li>
                            @endforeach                               
                            
                        </ul>
                    </div>
                    <div class="sites">
                        <h3 class="footer-title">SITES</h3>
                        <ul class="footer-list">
                            
                            @foreach ($footer_data['siteLinks'] as $data)
                                <li>
                                    <a href="">{{ $data }}</a>
                                </li>
                            @endforeach                               
                            
                        </ul>
                    </div>
                </div>

            </div>
            
            <div class="bg-logo"></div>
        </div>
        
    </div>
    
</div>
<div class="footer-bottom">
    <div class="container">
        <div class="footer-button">
            <a href="">SIGN-UP NOW!</a>
        </div>
        
    </div>
</div>