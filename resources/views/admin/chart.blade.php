<x-app-layout>
    <div style="padding: 30px; margin-top: 50px"  class="tradingview-widget-container">
        <div id="technical-analysis-chart-demo"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
        <script type="text/javascript">
            new TradingView.widget({
                "container_id": "technical-analysis-chart-demo",
                "width": "100%",
                "height": "100%",
                "autosize": true,
                "symbol": "GOTO",
                "interval": "D",
                "timezone": "exchange",
                "theme": "light",
                "style": "1",
                "withdateranges": true,
                "hide_side_toolbar": false,
                "allow_symbol_change": true,
                "save_image": false,
                "studies": [
                    "ROC@tv-basicstudies",
                    "StochasticRSI@tv-basicstudies",
                    "MASimple@tv-basicstudies"
                ],
                "show_popup_button": true,
                "popup_width": "1000",
                "popup_height": "650",
                "locale": "en"
            });
        </script>
    </div>
</x-app-layout>
