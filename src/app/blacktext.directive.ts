import { Directive, ElementRef } from '@angular/core';

@Directive({
  selector: '[appBlacktext]'
})
export class BlacktextDirective {

  constructor(el: ElementRef) {
    el.nativeElement.style.color = "#191919";
  }

}
