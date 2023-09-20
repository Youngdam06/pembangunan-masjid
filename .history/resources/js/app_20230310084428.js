import './bootstrap';

<script type="text/javascript">
            window.addEventLinstener('beforeunload', ()=>{
            event.preventDefault();
            event.returnValue = "";
            })
        </script>