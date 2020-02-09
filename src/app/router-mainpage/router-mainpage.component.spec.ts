import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { RouterMainpageComponent } from './router-mainpage.component';

describe('RouterMainpageComponent', () => {
  let component: RouterMainpageComponent;
  let fixture: ComponentFixture<RouterMainpageComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ RouterMainpageComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(RouterMainpageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
