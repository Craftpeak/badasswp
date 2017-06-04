import 'jquery';
import anime from 'animejs';

export default {
  finalize() {
    jQuery('#bazinga').click(() => {
      anime({
        targets: '#bazinga',
        translateX: 500,
      });
    });
  },
};
