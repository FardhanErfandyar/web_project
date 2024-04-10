window.addEventListener('scroll', function() {
        var navbar = document.querySelector('.navbar-home');
        var dropdownLinks = document.querySelectorAll('.navbar-home .dropdown a');
        var dropdownContent = document.querySelector('.dropdown-content')
      
        if (window.location.pathname === '/') {
       
            if (window.scrollY > 20) {
                navbar.classList.remove('transparent');
                dropdownContent.classList.remove('transparent');
            
                dropdownLinks.forEach(function(link) {
                    link.style.color = '#FBA834';
                });
            } else {
                navbar.classList.add('transparent');
                dropdownContent.classList.add('transparent');
        
                dropdownLinks.forEach(function(link) {
                    link.style.color = '#ffffff';
                });
            }
        } else {
            dropdownLinks.forEach(function(link) {
                link.style.color = '#FBA834';
            });
        }

        if (window.location.pathname === '/') {
            if (window.scrollY > 300) {
                document.querySelector('.navbar-list ul li:nth-child(2) a').classList.add('active');
                document.querySelector('.navbar-list ul li:nth-child(1) a').classList.remove('active');
            } else {
                document.querySelector('.navbar-list ul li:nth-child(2) a').classList.remove('active');
                document.querySelector('.navbar-list ul li:nth-child(1) a').classList.add('active');
            }}
    });