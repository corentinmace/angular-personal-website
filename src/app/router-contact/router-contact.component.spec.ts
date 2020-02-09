import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { RouterContactComponent } from './router-contact.component';

describe('RouterContactComponent', () => {
  let component: RouterContactComponent;
  let fixture: ComponentFixture<RouterContactComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ RouterContactComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(RouterContactComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
