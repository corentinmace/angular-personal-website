import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HeaderGearComponent } from './header-gear.component';

describe('HeaderGearComponent', () => {
  let component: HeaderGearComponent;
  let fixture: ComponentFixture<HeaderGearComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HeaderGearComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HeaderGearComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
