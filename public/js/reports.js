!function() {

    let reports = [...document.querySelectorAll(".financial-reports-years__item")];
    let months = document.querySelector('.financial-reports-months__list');
    let loadingSpinner = document.querySelector('.financial-reports-months__icon-spinner');
    const token = getMeta('csrf-token');


    reports.forEach((item) => {
      item.addEventListener('click', (e) => {
        let data = null, year = null, reportType = null, res = null;

        e.preventDefault();

        if(item.dataset.reportYear !== '') {
          year = item.dataset.reportYear;
          if(item.dataset.reportType === "income" || item.dataset.reportType === "waste") { 
            reportType = item.dataset.reportType;
          }
        }
        else { return; }
        
        if(year === null && reportType === null) { return; }

        url = '/ajax/reports/financial';
        data = {
          "year" : year,
          "report_type" : reportType,
      
        }

        res = fetch(url, {
          method: "POST",
          credentials: "same-origin",
          headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
          },
          body: JSON.stringify(data)
        });
        
        res.then(response => {
          response.json().then((monthsList) => {
            let liItem = '';
            
            loadingSpinner.classList.remove('icon-spinner--active');
            
            monthsList.forEach((item) => {
              liItem += 
              `<li class="financial-report-item financial-report-item--type--month ${ item.disabled ? 'financial-report-item--disabled' : '' } financial-reports-months__item">
                <p class="financial-report-item__month">Скачать отчет за</p><a class="financial-report-item__link" href="${ item.file_link !== undefined ? item.file_link : ''}">${item.label}</a>
              </li>`;                
            });

            months.innerHTML = liItem;
          
          })
        })
    })
    });




    function getMeta(metaName) {
        const metas = document.getElementsByTagName('meta');

        for (let i = 0; i < metas.length; i++) {
            if (metas[i].getAttribute('name') === metaName) {
            return metas[i].getAttribute('content');
            }
        }

        return '';
    }
  }();

  