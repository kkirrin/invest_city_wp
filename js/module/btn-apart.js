export const initBtnOpenCardApart = () => {
    const allBtnsAparts = document.querySelectorAll('.btn__apart');
    const allModalAparts = document.querySelectorAll('.detail__apart'); 
  
    const modalApartsArray = Array.from(allModalAparts); 
  
    
    const modalIds = []; 
    modalApartsArray.forEach(modal => {
      const modalId = modal.getAttribute('id');
      modalIds.push(modalId);
    });
  
    allBtnsAparts.forEach(btn => {
      btn.addEventListener('click', (e) => {
        const currentBtn = e.currentTarget;
        const btnId = currentBtn.getAttribute('id'); 
  
        const matchingModal = modalApartsArray.find(modal => modal.id === btnId);
  
        if (matchingModal) { 
          modalApartsArray.forEach(modal => modal.classList.remove('active'));
          matchingModal.classList.add('active'); 
        }
      });
    });
  };